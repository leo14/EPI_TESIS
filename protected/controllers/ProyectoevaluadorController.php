<?php

class ProyectoevaluadorController extends Controller
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
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete','create','update','view','autorizarEvaluacion','adminAsignaciones'),
				'users'=>array('admin'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('adminEvaluador','create','update','view'),
				'users'=>array('@'),
				'roles'=>array('evaluador'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('adminAlumno','view'),
				'users'=>array('@'),
				'roles'=>array('alumno'),
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
	public function actionCreate($id)
	{
		$model=new Proyectoevaluador;
		$model->scenario = 'evaluador';

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Proyectoevaluador']))
		{
			$model->pro_idProyecto=$id;
			$model->attributes=$_POST['Proyectoevaluador'];
			if($model->save())
				$this->redirect(array('admin','id'=>$model->pre_id));
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
		$model->scenario = 'evaluador'; 

		// Uncomment the following line if AJAX validation is needed
		$this->performAjaxValidation($model);


		if(isset($_POST['Proyectoevaluador']))
		{
			$model->attributes=$_POST['Proyectoevaluador'];
			$valid = $model->validate();
			if($valid){
				$model->pre_notaFinal=ceil(($model->pre_nota1*0.25)+($model->pre_nota2*0.25)+($model->pre_nota3*0.05)+($model->pre_nota4*0.1)+($model->pre_nota5*0.2)+($model->pre_nota6*0.05)+($model->pre_nota7*0.1));
				$model->pre_estadoEvaluacion="No";
				$model->save();
				$this->redirect(array('adminEvaluador'));
			}
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

		public function actionAutorizarEvaluacion($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		$this->performAjaxValidation($model);

		if(isset($_POST['Proyectoevaluador']))
		{
			$model->attributes=$_POST['Proyectoevaluador'];

		$valid = $model->validate();
			if($valid){
				$model->pre_estadoEvaluacion="Si";
				$model->save();
				$this->redirect(array('admin'));
				}
			}

		$this->render('autorizarEvaluacion',array(
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
		$dataProvider=new CActiveDataProvider('Proyectoevaluador');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$this->layout = '//layouts/columnAdmin';
		$model=new Proyectoevaluador('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Proyectoevaluador']))
			$model->attributes=$_GET['Proyectoevaluador'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

		public function actionAdminAlumno()
	{
		$this->layout = '//layouts/columnAdmin';
		$model=new Proyectoevaluador('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Proyectoevaluador']))
			$model->attributes=$_GET['Proyectoevaluador'];

		$this->render('adminAlumno',array(
			'model'=>$model,
		));
	}

		public function actionAdminAsignaciones()
	{
		$this->layout = '//layouts/columnAdmin';
		$model=new Proyectoevaluador('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Proyectoevaluador']))
			$model->attributes=$_GET['Proyectoevaluador'];

		$this->render('adminAsignaciones',array(
			'model'=>$model,
		));
	}

		public function actionAdminEvaluador()
	{
		$this->layout = '//layouts/columnAdmin';
		$model=new Proyectoevaluador('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Proyectoevaluador']))
			$model->attributes=$_GET['Proyectoevaluador'];

		$this->render('adminEvaluador',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Proyectoevaluador the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Proyectoevaluador::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Proyectoevaluador $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='proyectoevaluador-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
