<?php

class AlumnoproyectoController extends Controller
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
				'actions'=>array('create','update','obtenerRut'),
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
	public $idProyecto;
	public function actionCreate($idp)
	{
		$model=new Alumnoproyecto;
		
		$this->idProyecto = $idp;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Alumnoproyecto']))
		{
			$model->attributes=$_POST['Alumnoproyecto'];
			if($model->save())
				$this->redirect(array('proyecto/view','id'=>$this->idProyecto));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	public function actionObtenerRut() {
	    $request=trim($_GET['term']);
	    $idProyecto=$_GET['id'];


	    if($request!=''){

	        $data=array();
	    	//obtener los alumnos que no esten en alumno proyecto
	    		
	    		//obtener el semestre
	        	$convocatoria=Convocatoria::model()->find("con_estado=1")->con_semestre;

	        	//obtener el campus
	        	$campus=Alumno::model()->find("al_rut='".Alumnoproyecto::model()->find("pro_idProyecto=".$idProyecto)->al_rut."'")->al_campus;

	    		//obtener todos los alumnos
	    		$alumnos=Alumno::model()->findAll(array("condition"=>"al_rut like '$request%'"));

	    		//obtener los alumnos con proyecto
	    		$alumnosConProyecto=Alumnoproyecto::model()->findAll(array("condition"=>"al_rut like '$request%'"));

	    		//obtener los alumnos sin proyecto
				foreach($alumnos as $alumno){
	    			$esta=0;
					foreach($alumnosConProyecto as $alumnoConProyecto){
						if ($alumno->al_rut==$alumnoConProyecto->al_rut) {
							$esta=1;
						}
	        		}	    		
	        			//poner los que no tiene proyecto , que sean del semestre, del campus de los alumnos del proyecto
	        			if($esta==0 and $alumno->con_semestre==$convocatoria and $alumno->al_campus==$campus){
							//pasarlo a la vista
	            			$data[]=$alumno->al_rut;
	        				
	        			}
	        	}	    		

	        // $model=Alumno::model()->findAll(array("condition"=>"al_rut like '$request%'"));

	        $this->layout='empty';
	        echo json_encode($data);
	    }
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

		if(isset($_POST['Alumnoproyecto']))
		{
			$model->attributes=$_POST['Alumnoproyecto'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
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
		$dataProvider=new CActiveDataProvider('Alumnoproyecto');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Alumnoproyecto('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Alumnoproyecto']))
			$model->attributes=$_GET['Alumnoproyecto'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Alumnoproyecto the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Alumnoproyecto::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Alumnoproyecto $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='alumnoproyecto-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
