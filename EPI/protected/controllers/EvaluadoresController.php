<?php

class EvaluadoresController extends Controller
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
				'actions'=>array('admin','delete','create','update','adminInactivos','activar'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
			array('deny',  // deny all users
				'users'=>array('@'),
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
		$model=new Evaluadores;

		// Uncomment the following line if AJAX validation is needed
		 $this->performAjaxValidation($model);

		if(isset($_POST['Evaluadores']))
		{
			$model->attributes=$_POST['Evaluadores'];
	
	if($model->save()){
				
				//unir con cruge
				$values = array(
				  'username' => $model->ev_rut,
				  'email' => $model->ev_email,
				);
				$usuario = Yii::app()->user->um->createNewUser($values,$model->ev_clave);
				
				Yii::app()->user->um->changePassword($usuario,$model->ev_clave);

	            if(Yii::app()->user->um->save($usuario)){

	           		// echo "Usuario creado: id=".$usuario->primaryKey;
		        	
		        	// asignar el rol alumno
		        	$rbac = Yii::app()->user->rbac;
                	$authitemName = 'evaluador';
                	$userId = $usuario->primaryKey;
                	$rbac->assign($authitemName, $userId);
					//fin-asignar el rol alumno
	            }
	            else{
	                   $errores = CHtml::errorSummary($usuario);
	                          echo "no se pudo crear el usuario: ".$errores;
	            }
				//fin_unir con cruge


	           	$this->redirect(array('admin'));
			}
				
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

		if(isset($_POST['Evaluadores']))
		{
			$model->attributes=$_POST['Evaluadores'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->ev_rut));
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
		$model=$this->loadModel($id);
		$model->ev_estado='Inactivo';

		$connection = Yii::app()->db;
		$command = $connection->createCommand("update cruge_user set state=0 where username='$id'");
		$row = $command->query(); 
     
		if($model->save()){
			$this->redirect(array('admin'));
		}




		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		//if(!isset($_GET['ajax']))
		//	$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

		public function actionActivar($id)
	{
		$model=$this->loadModel($id);
		$model->ev_estado='Activo'; 

		$connection = Yii::app()->db;
		$command = $connection->createCommand("update cruge_user set state=1 where username='$id'");
		$row = $command->query(); 

		if($model->save()){
			$this->redirect(array('admin'));
		}

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		//if(!isset($_GET['ajax']))
		//	$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Evaluadores');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Evaluadores('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Evaluadores']))
			$model->attributes=$_GET['Evaluadores'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	public function actionAdminInactivos()
	{
		$model=new Evaluadores('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Evaluadores']))
			$model->attributes=$_GET['Evaluadores'];

		$this->render('adminInactivos',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Evaluadores the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Evaluadores::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Evaluadores $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='evaluadores-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
