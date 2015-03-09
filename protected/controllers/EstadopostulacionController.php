<?php

class EstadopostulacionController extends Controller
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
				'actions'=>array('create','update'),
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
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}


	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Estadopostulacion;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Estadopostulacion']))
		{
			$model->attributes=$_POST['Estadopostulacion'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->al_rut));
		}

		$this->render('create',array(
			'model'=>$model,
		));
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

		if(isset($_POST['Estadopostulacion']))
		{
			

			// $post=CUploadedFile::getInstance($_POST['Estadopostulacion']['espos_cartaEmpresa']);

			echo print_r($_FILES['Estadopostulacion']['name']['espos_cartaEmpresa']);



			// comprobar que archivos se estan subiendo
			if($_FILES['Estadopostulacion']['name']['espos_cartaEmpresa']){
				$model->espos_cartaEmpresa=$_POST['Estadopostulacion']['espos_cartaEmpresa'];
				$model->espos_cartaEmpresa=CUploadedFile::getInstance($model,'espos_cartaEmpresa');
			}

			if($_FILES['Estadopostulacion']['name']['espos_prehallasgo']){
				$model->espos_prehallasgo=$_POST['Estadopostulacion']['espos_prehallasgo'];
				$model->espos_prehallasgo=CUploadedFile::getInstance($model,'espos_prehallasgo');
			}
			if($_FILES['Estadopostulacion']['name']['espos_copiaCarnet']){
				$model->espos_copiaCarnet=$_POST['Estadopostulacion']['espos_copiaCarnet'];
				$model->espos_copiaCarnet=CUploadedFile::getInstance($model,'espos_copiaCarnet');
			}
			if($_FILES['Estadopostulacion']['name']['espos_alumnoRegular']){
				$model->espos_alumnoRegular=$_POST['Estadopostulacion']['espos_alumnoRegular'];
				$model->espos_alumnoRegular=CUploadedFile::getInstance($model,'espos_alumnoRegular');
			}

			if($_FILES['Estadopostulacion']['name']['espos_curriculum']){
				$model->espos_curriculum=$_POST['Estadopostulacion']['espos_curriculum'];
				$model->espos_curriculum=CUploadedFile::getInstance($model,'espos_curriculum');
			}

			if($_FILES['Estadopostulacion']['name']['espos_informeFinal']){
				$model->espos_informeFinal=$_POST['Estadopostulacion']['espos_informeFinal'];
				$model->espos_informeFinal=CUploadedFile::getInstance($model,'espos_informeFinal');
			}
			// fin_comprobar que archivos se estan subiendo

			
			if($model->save()){
			
				//copiar la imagen en el directorio
	               $estructura =Yii::app()->basePath.'/proyectos';

				if($_FILES['Estadopostulacion']['name']['espos_cartaEmpresa']){
		          	$path="$estructura/$model->espos_cartaEmpresa";
		          	$model->espos_cartaEmpresa->saveAs($path);
				}

				if($_FILES['Estadopostulacion']['name']['espos_prehallasgo']){
		          	$path="$estructura/$model->espos_prehallasgo";
		          	$model->espos_prehallasgo->saveAs($path);
				}
				if($_FILES['Estadopostulacion']['name']['espos_copiaCarnet']){
	                $path="$estructura/$model->espos_copiaCarnet";
		          	$model->espos_copiaCarnet->saveAs($path);
				}  
				if($_FILES['Estadopostulacion']['name']['espos_alumnoRegular']){
		          	$path="$estructura/$model->espos_alumnoRegular";
		          	$model->espos_alumnoRegular->saveAs($path);
				}
				if($_FILES['Estadopostulacion']['name']['espos_curriculum']){
	                $path="$estructura/$model->espos_curriculum";
		          	$model->espos_curriculum->saveAs($path);
				}  
				if($_FILES['Estadopostulacion']['name']['espos_informeFinal']){
		          	$path="$estructura/$model->espos_informeFinal";
		          	$model->espos_informeFinal->saveAs($path);
				}
				//fin_copiar la imagen en el directorio
				
					$this->redirect(array('view','id'=>$model->pro_idProyecto));
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
		$dataProvider=new CActiveDataProvider('Estadopostulacion');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Estadopostulacion('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Estadopostulacion']))
			$model->attributes=$_GET['Estadopostulacion'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Estadopostulacion the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Estadopostulacion::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Estadopostulacion $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='estadopostulacion-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
