<?php

class ConvocatoriaController extends Controller
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
				'actions'=>array('create','update','viewEncuestas'),
				'users'=>array('admin'),
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

		$model=$this->loadModel($id);

		//encuestas
		$actividades=new Actividades('search');
		$actividades->unsetAttributes();  // clear any default values
		if(isset($_GET['Actividades']))$actividades->attributes=$_GET['Actividades'];


		//alumnos
		$alumnos=new Alumno('search');
		$alumnos->unsetAttributes();  // clear any default values
		if(isset($_GET['Alumnos']))$actividades->attributes=$_GET['Alumnos'];

		//para generar las encuestas
		if(isset($_GET["encuestas"])){
			$Actividades=Actividades::model()->findAll("con_semestre='".$model->con_semestre."'");
			$content=$this->renderPartial("excelEncuestas",array("model"=>$Actividades),true);
			Yii::app()->request->sendFile("EPI_Encuestas$model->con_semestre.xls",$content);

		}


		//para generar los alumnos en excel
		if(isset($_GET["alumnos"])){
			$convocatoria = $model->con_semestre;
			$alumnos=alumno::model()->findAll("con_semestre='".$convocatoria."'");
			$content=$this->renderPartial("excelAlumnos",array("model"=>$alumnos),true);
			Yii::app()->request->sendFile("EPI_Inscritos$model->con_semestre.xls",$content);
		}

		//proyectos
		$proyectos=new Proyecto('search');
		$proyectos->unsetAttributes();  // clear any default values
		if(isset($_GET['Proyecto']))$actividades->attributes=$_GET['Proyecto'];

		$this->render('viewDatos',array(
			'model'=>$model,'actividades'=>$actividades,'alumnos'=>$alumnos,'proyectos'=>$proyectos,
		));
	}

	public function actionViewEncuestas($id)
	{
		$model=Actividades::model()->find("act_id=".$id);

		//para generar las encuestas en excel
		if(isset($_GET["excel"])){
			$Actividades=Actividades::model()->find("con_semestre='".$model->con_semestre."' and act_id=".$id);
			 $content=$this->renderPartial("excel",array("model"=>$Actividades),true);
			 Yii::app()->request->sendFile("EPI_ResultadoEncuesta.xls",$content);
		}

		$this->render('viewEncuestas',array(
			'model'=>$model,
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Convocatoria;
		$model->scenario = 'crear';

       	$sql = "update convocatoria set con_estado=0 where con_estado=1";
        $data =  Yii::app()->db->createCommand($sql)->query();

		// Uncomment the following line if AJAX validation is needed
		 $this->performAjaxValidation($model);

		if(isset($_POST['Convocatoria']))
		{
			$model->attributes=$_POST['Convocatoria'];
			if($model->save())
				$this->redirect(array('admin'));
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

		if(isset($_POST['Convocatoria']))
		{
			$model->attributes=$_POST['Convocatoria'];
			if($model->save())
				$this->redirect(array('admin'));
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
		$dataProvider=new CActiveDataProvider('Convocatoria');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Convocatoria('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Convocatoria']))
			$model->attributes=$_GET['Convocatoria'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Convocatoria the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Convocatoria::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Convocatoria $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='convocatoria-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
