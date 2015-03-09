<?php

class EncuestaactividadController extends Controller
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
				'actions'=>array('create','update','obtenerActividades','admin','adminEncuestas'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('delete'),
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
		$model=new Encuestaactividad;
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Encuestaactividad']))
		{
			$model->attributes=$_POST['Encuestaactividad'];

			// //buscar el id de la actividad
			// $actividad=Actividades::model()->find("act_nombre='".$model->act_id."'");
			// $model->act_id=$actividad->act_id;

			//una para cada alumno
			$alumnos=Alumno::model()->findAll();
			
			

			//guardar el primero para que haga las validaciones
		$model->al_rut=$alumnos[0]->al_rut;
		if($model->save()){

			$values='';
			for ($i=1; $i <count($alumnos) ; $i++) {
				if($i!=1 ){
					$values=$values.", ";
				}
			 	$values=$values."('".$model->en_convocatoria."',".$model->act_id.",'".$model->en_tipo."','".$alumnos[$i]->al_rut."')";
			}
			
			$sql = 'INSERT INTO encuestaactividad (en_convocatoria, act_id,en_tipo,al_rut) VALUES ' . $values;
			$command = Yii::app()->db->createCommand($sql);

			if($command->execute()){
				$this->redirect(array('admin'));
			}
			//fin_una para cada alumno
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
		$model->scenario = 'completar';

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Encuestaactividad']))
		{
			$model->attributes=$_POST['Encuestaactividad'];
			if($model->save())
				$this->redirect(array('admin'));
				
		}


		$this->render('update',array(
			'model'=>$model,
		));
	}

	
	public function actionObtenerActividades() {
	    $request=trim($_GET['term']);

	    if($request!=''){
	        $model=Actividades::model()->findAll(array("condition"=>"act_nombre like '$request%'"));
	        $data=array();

	        foreach($model as $get){
	            $data[]=$get->act_nombre;
	        }

	        $this->layout='empty';
	        echo json_encode($data);
	    }
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
		$dataProvider=new CActiveDataProvider('Encuestaactividad');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{

		//para generar las encuestas
		if(isset($_GET["excel"])){
			$encuestas=Encuestaactividad::model()->findAll("act_id=".$id);
			$content=$this->renderPartial("excel",array("model"=>$encuestas),true);
			Yii::app()->request->sendFile("EPI_ResultadoEncuestas.xls",$content);

		}

		$model=new Encuestaactividad('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Encuestaactividad']))
			$model->attributes=$_GET['Encuestaactividad'];
		

		if(Yii::app()->user->isSuperAdmin){
			$this->render('admin',array(
				'model'=>$model,
			));	
		}
		else{
			$this->render('adminAlumno',array(
					'model'=>$model,
				));		
		}

		
	}

	public function actionAdminEncuestas($id)
	{

		//para generar las encuestas
		if(isset($_GET["excel"])){
		 	$encuestas=Encuestaactividad::model()->findAll("act_id=".$id);
		 	$content=$this->renderPartial("excel",array("model"=>$encuestas),true);
		 	Yii::app()->request->sendFile("EPI_ResultadoEncuestas.xls",$content);

		}
	

		if(Yii::app()->user->isSuperAdmin){
			
		$dataProvider=new CActiveDataProvider('Encuestaactividad',array('criteria'=>array(
        'condition'=>'act_id='.$id)));


			$this->render('admin',array(
				'dataProvider'=>$dataProvider,'id'=>$id,
			));	
		}
		else{
			$this->render('adminAlumno',array(
					'model'=>$model,
				));		
		}
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Encuestaactividad the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Encuestaactividad::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Encuestaactividad $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='encuestaactividad-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
