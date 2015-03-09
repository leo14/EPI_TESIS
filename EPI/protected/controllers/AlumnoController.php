<?php

class AlumnoController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2Iguales';

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
				'actions'=>array('index','view','create','ObtenerCarreras'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete','aceptado','rechazado','email'),
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

		if(Yii::app()->user->isSuperAdmin){
			$this->layout = '//layouts/columnAdmin';
			$this->render('view',array(
			'model'=>$this->loadModel($id),
			));
		}
		else{
			$this->render('exito',array(
			'model'=>$this->loadModel($id),
			));
		}
	}



	public function actionObtenerCarreras(){

		//obtener campus del formulario
		$campus=$_POST['Alumno']['al_campus'];

		//generar las carreras
		$carreras=Carreracampus::model()->findAll("ca_campus='".$campus."'");

		//pasar al dropdowlist
		foreach ($carreras as $data):
		echo CHtml::tag('option',array('value'=>$data->ca_carrera),CHtml::encode($data->ca_carrera),true);
		endforeach;

	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Alumno;

		// Uncomment the following line if AJAX validation is needed
		$this->performAjaxValidation($model);

		if(isset($_POST['Alumno']))
		{
			$model->attributes=$_POST['Alumno'];

			if($model->save()){
				$model->con_semestre=Yii::app()->db->createCommand('select con_semestre from convocatoria where con_estado=1')->queryScalar();
				$model->save();
				
				//unir con cruge
				$values = array(
				  'username' => $model->al_rut,
				  'email' => $model->al_email,
				);
				$usuario = Yii::app()->user->um->createNewUser($values,$model->al_clave);
				
				Yii::app()->user->um->changePassword($usuario,$model->al_clave);

	            if(Yii::app()->user->um->save($usuario)){

	           		// echo "Usuario creado: id=".$usuario->primaryKey;
		        	
		        	// asignar el rol alumno
		        	$rbac = Yii::app()->user->rbac;
                	$authitemName = 'alumno';
                	$userId = $usuario->primaryKey;
                	$rbac->assign($authitemName, $userId);
					//fin-asignar el rol alumno
	            }
	            else{
	                   $errores = CHtml::errorSummary($usuario);
	                          echo "no se pudo crear el usuario: ".$errores;
	            }
				//fin_unir con cruge

	            $this->redirect(array('view','id'=>$model->al_rut));
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

		if(isset($_POST['Alumno']))
		{
			$model->attributes=$_POST['Alumno'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->al_rut));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

		public function actionAceptado($id)
	{
		$alumno=$this->loadModel($id);
		$alumno->al_estado='Aceptado';
		if($alumno->save()){
		$this->actionAdmin();
		}
		else{
			//ver errores del modelo
			$errores = CHtml::errorSummary($alumno);
	        echo "no se pudo cambiar el estado: ".$errores;
		}

	}


		public function actionRechazado($id)
	{
		$alumno=$this->loadModel($id);
		$alumno->al_estado='Rechazado';
		if($alumno->save()){
		$this->actionAdmin();
		}
		else{
			//ver errores del modelo
			$errores = CHtml::errorSummary($alumno);
	        echo "no se pudo cambiar el estado: ".$errores;
		}

	}

		public function actionEmail()
	{
		

		$emailCoordinador="scarril@alumnos.ubiobio.cl";
		
		//obtener el semestre actual
		$convocatoria = Convocatoria::model()->find("con_estado=1")->con_semestre;
		
		//obtener alumnos aceptados
		$alumnosAceptados=Alumno::model()->findAll("al_estado='Aceptado'"." and "." con_semestre ='$convocatoria'");

		Yii::import('application.extensions.phpmailer.JPhpMailer');
		
		
		for($i=0;$i<count($alumnosAceptados);$i++){

			//guardar la clave_INICIO
			$nombres=explode(" ", $alumnosAceptados[$i]->al_nombre);
			$primerNombre = $nombres[0];
			$clave=$primerNombre.$alumnosAceptados[$i]->al_paterno.$alumnosAceptados[$i]->con_semestre;
			$alumnosAceptados[$i]->al_clave=$clave;
			$alumnosAceptados[$i]->save();

			$usuario = Yii::app()->user->um->loadUserByUsername($alumnosAceptados[$i]->al_rut);
			$newPwd = $clave;
            Yii::app()->user->um->changePassword($usuario, $newPwd);
            Yii::app()->user->um->save($usuario);
			//guardar la clave_FIN

			//enviar email
			$mail = new JPhpMailer;
			$mail->IsSMTP();
			$mail->Host = 'smtp.gmail.com';
			$mail->SMTPAuth = true;
			$mail->SMTPSecure = "tls"; 
			$mail->Username = $emailCoordinador;
			$mail->Password = '=Zuv1#Va';
			$mail->SetFrom($emailCoordinador, 'EPI');
			$mail->Subject = 'Programa EPI - Resultado';
			$mail->AltBody = 'To view the message, please use an HTML compatible email viewer!';
			$mail->MsgHTML('<h1>Resultado</h1><p>Te informamos que has sido aceptado para ingresar a la primera etapa, Etapa de Formación, del Programa de Innovación "Estudiantes para Innovar" (EPI). Te enviaremos pronto un correo con los detalles de horarios y salas.<br><br>Puedes acceder a la plataforma <a href="epi.ubiobio.cl" style="text-decoration:none;color:#356ae9" target="_blank">epi.ubiobio.cl</a>, tu clave de acceso es: '.$clave.'<br><br>Atentos saludos,</p>');
			$mail->AddAddress($alumnosAceptados[$i]->al_email, '');
			// Activo condificacción utf-8
			$mail->CharSet = 'UTF-8';
			$mail->Send();
			
		}
		
		
		//obtener alumnos rechazados
		$alumnosRechazados=Alumno::model()->findAll("al_estado='Rechazado'"." and "." con_semestre ='$convocatoria'");

		for($i=0;$i<count($alumnosRechazados);$i++){

			//enviar email
			$mail = new JPhpMailer;
			$mail->IsSMTP();
			$mail->Host = 'smtp.gmail.com';
			$mail->SMTPAuth = true;
			$mail->SMTPSecure = "tls"; 
			$mail->Username = $emailCoordinador;
			$mail->Password = '=Zuv1#Va';
			$mail->SetFrom($emailCoordinador, 'EPI');
			$mail->Subject = 'Programa EPI - Resultado';
			$mail->AltBody = 'To view the message, please use an HTML compatible email viewer!';
			$mail->MsgHTML('<h1>Resultado</h1><p>Te informamos que lamentablemente no has sido aceptado para ingresar en el Programa de Innovación "Estudiantes para Innovar" (EPI). El proceso de selección puso atención, principalmente, al grado innovador del los temas de tesis propuestos. Durante el segundo semestre tendrás una nueva oportunidad para postular.</p><br>Atentos saludos,');
			$mail->AddAddress($alumnosRechazados[$i]->al_email, '');
			$mail->CharSet = 'UTF-8';
			$mail->Send();

			
			//echo $alumnosRechazados[$i]->al_rut.'<br>';

		}
		$this->actionAdmin();

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
		$dataProvider=new CActiveDataProvider('Alumno');
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

		//para generar los alumnos de Concepción en excel
		if(isset($_GET["excel1"])){

			//obtener el semestre actual
			$convocatoria = $convocatorias=Convocatoria::model()->find("con_estado=1")->con_semestre;

			$alumnos=Alumno::model()->findAll("con_semestre='".$convocatoria."' and al_campus='Concepción'");
			$content=$this->renderPartial("excelAlumnos",array("model"=>$alumnos,"campus"=>"Concepción"),true);
			Yii::app()->request->sendFile("EPI_Inscritos_".$convocatoria."_Concepción.xls",$content);

		}

		//para generar los alumnos de Chillán en excel
		if(isset($_GET["excel2"])){

			//obtener el semestre actual
			$convocatoria = $convocatorias=Convocatoria::model()->find("con_estado=1")->con_semestre;

			$alumnos=Alumno::model()->findAll("con_semestre='".$convocatoria."' and al_campus='Chillán'");
			$content=$this->renderPartial("excelAlumnos",array("model"=>$alumnos,"campus"=>"Chillán"),true);
			Yii::app()->request->sendFile("EPI_Inscritos_".$convocatoria."_Chillán.xls",$content);

		}

		$model=new Alumno('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Alumno']))
			$model->attributes=$_GET['Alumno'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Alumno the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Alumno::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Alumno $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='alumno-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
