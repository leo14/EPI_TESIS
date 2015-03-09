<?php

class CursoController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/columnAdmin';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update','video'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		if(isset($_POST['Comentario']))
		{
			$model=new Comentario;	
			$model->attributes=$_POST['Comentario'];	
			$model->save();
		}
		
		$dataProviderConsulta=new CActiveDataProvider('Consultainterna',array('criteria'=>array('condition'=>'coni_estado=1')));
		$dataProviderConsulta->pagination->pageSize=1;

		$this->layout = '//layouts/columnCurso';
		$model=$this->loadModel($id);
		$model->cu_info=nl2br($model->cu_info);
		$dataProviderDocumentos=new CActiveDataProvider('Documentos',array('criteria'=>array('condition'=>'cu_id='.$model->cu_id,)));
		$dataProviderComentarios=new CActiveDataProvider('Comentario',array('criteria'=>array('condition'=>'cu_id='.$model->cu_id,)));
		
		if(Yii::app()->user->isSuperAdmin){
			$this->render('view',array(
				'model'=>$model,'dataProviderConsulta'=>$dataProviderConsulta,'dataProviderDocumentos'=>$dataProviderDocumentos,'dataProviderComentarios'=>$dataProviderComentarios,
			));
		}
		else {
			$this->render('viewAlumno',array(
				'model'=>$model,'dataProviderConsulta'=>$dataProviderConsulta,'dataProviderDocumentos'=>$dataProviderDocumentos,'dataProviderComentarios'=>$dataProviderComentarios,
			));	
		}

	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Curso;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Curso']))
		{

			$model->cu_foto=$_POST['Curso']['cu_foto'];	
			$model->cu_foto=CUploadedFile::getInstance($model,'cu_foto');

			$model->attributes=$_POST['Curso'];
			if($model->save()){

				//copiar la imagen en el directorio
				$estructura =Yii::app()->basePath.'/cursos';
				$path="$estructura/$model->cu_foto";
		        $model->cu_foto->saveAs($path);

				$this->redirect(array('view','id'=>$model->cu_id));
			}
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	public function actionVideo($id){
		$documento=Documentos::model()->findByPk($id);
		$this->render('viewVideo',array('model'=>$documento));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Curso']))
		{
			$model->cu_foto=$_POST['Curso']['cu_foto'];	
			$model->cu_foto=CUploadedFile::getInstance($model,'cu_foto');

			$model->attributes=$_POST['Curso'];
			if($model->save()){
				//copiar la imagen en el directorio
				$estructura =Yii::app()->basePath.'/cursos';
				$path="$estructura/$model->cu_foto";
		        $model->cu_foto->saveAs($path);
		        
				$this->redirect(array('view','id'=>$model->cu_id));
			}
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		//obtener el semestre actual
		$convocatoria = Convocatoria::model()->find("con_estado=1")->con_semestre;

		//poner solo los del semestre
		$dataProvider=new CActiveDataProvider('Curso',array('criteria'=>array('condition'=>"con_semestre='$convocatoria'")));
		
		if(Yii::app()->user->checkAccess('alumno')&&!Yii::app()->user->isSuperAdmin){
			//obtener el campus
		$campus = Alumno::model()->find("al_rut='".Yii::app()->user->name."'")->al_campus;

		//poner solo los del campus
		$dataProvider=new CActiveDataProvider('Curso',array('criteria'=>array('condition'=>"cu_campus='$campus'")));
		}



		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Curso('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Curso']))
			$model->attributes=$_GET['Curso'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Curso the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Curso::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Curso $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='curso-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
