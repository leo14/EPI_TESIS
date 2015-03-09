<?php

class ActividadesController extends Controller
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
				'actions'=>array('update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete','create','adminEncuestas','viewEncuestas'),
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

	public function actionViewEncuestas($id)
	{

		//para generar las encuestas en excel
		if(isset($_GET["excel"])){
			 $content=$this->renderPartial("excel",array("model"=>$this->loadModel($id)),true);
			 Yii::app()->request->sendFile("EPI_ResultadoEncuesta.xls",$content);
		}

		$this->render('viewEncuestas',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Actividades;

		// Uncomment the following line if AJAX validation is needed
		 $this->performAjaxValidation($model);

		if(isset($_POST['Actividades']))
		{
			$model->attributes=$_POST['Actividades'];
			if($model->save()){
				$model->con_semestre=Yii::app()->db->createCommand('select con_semestre from convocatoria where con_estado=1')->queryScalar();
				$model->save();
			}

				$this->redirect(array('view','id'=>$model->act_id));

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
		 $this->performAjaxValidation($model);

		if(isset($_POST['Actividades']))
		{
			$model->attributes=$_POST['Actividades'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->act_id));
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

		//obtener el campus
		$campus = Alumno::model()->find("al_rut='".Yii::app()->user->name."'")->al_campus;

		//poner solo los del semestre
		$dataProvider=new CActiveDataProvider('Actividades',array('criteria'=>array('condition'=>"con_semestre='$convocatoria'")));

		//poner solo los del campus
		$dataProvider=new CActiveDataProvider('Actividades',array('criteria'=>array('condition'=>"act_campus='$campus'")));


		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Actividades('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Actividades']))
			$model->attributes=$_GET['Actividades'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}


	public function actionAdminEncuestas()
	{
		


		//para generar las encuestas de Concepción en excel
		if(isset($_GET["excel1"])){
			$convocatoria = $convocatorias=Convocatoria::model()->find("con_estado=1")->con_semestre;
			$Actividades=Actividades::model()->findAll("act_campus='Concepción' and con_semestre='".$convocatoria."'");
			$content=$this->renderPartial("excelEncuestas",array("model"=>$Actividades),true);
			Yii::app()->request->sendFile("EPI_Encuestas_".$convocatoria."_Concepción.xls",$content);
		}
		
		//para generar las encuestas de Chillán en excel
		if(isset($_GET["excel2"])){
			$convocatoria = $convocatorias=Convocatoria::model()->find("con_estado=1")->con_semestre;
			$Actividades=Actividades::model()->findAll("act_campus='Chillán' and con_semestre='".$convocatoria."'");
			$content=$this->renderPartial("excelEncuestas",array("model"=>$Actividades),true);
			Yii::app()->request->sendFile("EPI_Encuestas_".$convocatoria."_Chillán.xls",$content);
		}

		$model=new Actividades('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Actividades']))
			$model->attributes=$_GET['Actividades'];

		$this->render('adminEncuestas',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Actividades the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Actividades::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Actividades $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='actividades-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
