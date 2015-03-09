<?php

/**
 * This is the model class for table "proyecto".
 *
 * The followings are the available columns in table 'proyecto':
 * @property integer $pro_idProyecto
 * @property string $pro_titulo
 * @property string $pro_duracion
 * @property string $pro_ambito
 * @property string $pro_emNombre
 * @property string $pro_emContacto
 * @property string $pro_emTelefono
 * @property string $emEmail
 * @property string $pro_profeNombre
 * @property string $pro_profeEmail
 * @property string $pro_profeTelefono
 * @property string $pro_dirEscuela
 * @property string $pro_vBEscuela
 * @property integer $pro_aporteValorado
 * @property integer $pro_aportePecuniario
 * @property string $pro_resumenEjecutivo
 * @property string $pro_descripcionEmpresa
 * @property string $pro_definicionProblema
 * @property string $pro_solucionPropuesta
 * @property string $pro_estadoArte
 * @property string $pro_objetivoGeneral
 * @property string $pro_metodologia
  */
class Proyecto extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'proyecto';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('pro_titulo, pro_duracion, pro_ambito, pro_emNombre, pro_emContacto, pro_emTelefono, emEmail, pro_profeNombre, pro_profeEmail, pro_profeTelefono, pro_dirEscuela, pro_vBEscuela, pro_aporteValorado, pro_aportePecuniario', 'required','on'=>'crear'),

			array('pro_aporteValorado, pro_aportePecuniario', 'numerical', 'integerOnly'=>true,'min'=>0, 'max'=>99999999),
							
			array('pro_titulo','match','pattern'=>'/^([a-zA-Zñáéíóú\s]{3,80})$/','message'=>CrugeTranslator::t("El TÍTULO no es válido")),
			
			array('pro_ambito','match','pattern'=>'/^([a-zA-Zñáéíóú\s]{3,80})$/','message'=>CrugeTranslator::t("El TÍTULO no es válido")),

			array('pro_duracion','match','pattern'=>'/^([0-9a-zA-Zñáéíóú\s]{3,80})$/','message'=>CrugeTranslator::t("La DURACIÓN no es válido")),
			
			array('pro_emNombre','match','pattern'=>'/^([0-9a-zA-Zñáéíóú\s]{3,80})$/','message'=>CrugeTranslator::t("El NOMBRE no es válido")),

			array('pro_titulo','match','pattern'=>'/^([a-zA-Zñáéíóú\s]{3,80})$/','message'=>CrugeTranslator::t("El TITULO no es válido")),

			array('pro_emTelefono','match','pattern'=>'/^[0-9]{6,10}$/','message'=>CrugeTranslator::t("TELÉFONO incorrecto")),

			array('emEmail', 'email'),


			array('pro_profeNombre','match','pattern'=>'/^([0-9a-zA-Zñáéíóú\s]{3,80})$/','message'=>CrugeTranslator::t("La NOMBRE no es válido")),
			array('pro_profeEmail', 'email'),			
			array('pro_profeTelefono','match','pattern'=>'/^[0-9]{6,10}$/','message'=>CrugeTranslator::t("Teléfono incorrecto")),
			array('pro_dirEscuela','match','pattern'=>'/^([a-zA-Zñáéíóú\s]{3,80})$/','message'=>CrugeTranslator::t("El TITULO no es válido")),

			array('pro_resumenEjecutivo, pro_descripcionEmpresa, pro_definicionProblema, pro_solucionPropuesta, pro_estadoArte, pro_objetivoGeneral, pro_metodologia', 'length', 'min'=>50),


			array('pro_titulo, pro_duracion, pro_ambito, pro_emNombre, pro_emContacto, pro_emTelefono, emEmail, pro_profeNombre, pro_profeEmail, pro_profeTelefono, pro_dirEscuela, pro_vBEscuela', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('pro_idProyecto, pro_titulo, pro_duracion, pro_ambito, pro_emNombre, pro_emContacto, pro_emTelefono, emEmail, pro_profeNombre, pro_profeEmail, pro_profeTelefono, pro_dirEscuela, pro_vBEscuela, pro_aporteValorado, pro_aportePecuniario, pro_resumenEjecutivo, pro_descripcionEmpresa, pro_definicionProblema, pro_solucionPropuesta, pro_estadoArte, pro_objetivoGeneral, pro_metodologia', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'pro_ev' => array(self::BELONGS_TO, 'Proyectoevaluador', 'pro_idProyecto'),
			'pro_es' => array(self::BELONGS_TO, 'Estadopostulacion', 'pro_idProyecto'),
			'pro_al' => array(self::BELONGS_TO, 'Alumnoproyecto', 'pro_idProyecto'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'pro_idProyecto' => 'ID PROYECTO',
			'pro_titulo' => 'TÍTULO PROYECTO',
			'pro_duracion' => 'DURACIÓN PROYECTO',
			'pro_ambito' => 'ÁMBITO',
			'pro_emNombre' => 'NOMBRE EMPRESA',
			'pro_emContacto' => 'NOMBRE CONTACTO',
			'pro_emTelefono' => 'TELÉFONO',
			'emEmail' => 'E-MAIL',
			'pro_profeNombre' => 'NOMBRE PROFESOR GUÍA',
			'pro_profeEmail' => 'E-MAIL',
			'pro_profeTelefono' => 'TELÉFONO',
			'pro_dirEscuela' => 'DIRECCIÓN DE ESCUELA',
			'pro_vBEscuela' => 'V°B° ESCUELA',
			'pro_aporteValorado' => 'APORTE ($) VALORADO',
			'pro_aportePecuniario' => 'APORTE ($) PECUNIARIO',
			'pro_resumenEjecutivo' => 'RESÚMEN EJECUTIVO',
			'pro_descripcionEmpresa' => 'DESCRIPCIÓN EMPRESA',
			'pro_definicionProblema' => 'DEFINICIÓN PROBLEMA',
			'pro_solucionPropuesta' => 'SOLUCIÓN PROPUESTA',
			'pro_estadoArte' => 'ESTADO ARTE',
			'pro_objetivoGeneral' => 'OBJETIVO GENERAL',
			'pro_metodologia' => 'METODOLOGÍA',
			
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function searchConce()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		//obtener los alumnos de la convocatoria actual
		$convocatoria = Convocatoria::model()->find("con_estado=1")->con_semestre;
		$alumnos=Alumno::model()->findAll("con_semestre='".$convocatoria."' AND al_campus='Concepción'");

		$criteria=new CDbCriteria;
		$condicion='';

		$j=0;
		$cantidad=0;

		//obtener los proyectos de los alumnos
		for ($i=0; $i < count($alumnos); $i++) {
			
			//obtener el proyecto del alumno
 			$proyecto = Alumnoproyecto::model()->find("al_rut='".$alumnos[$i]->al_rut."'");
			

			//si el alumno tiene un proyecto
			if(count($proyecto)>0){
			
			//para que no se le ponga "or" al principio ni al final  
			if($cantidad>=1){
				$condicion=$condicion." or ";		
			}
				$condicion=$condicion."pro_idProyecto=".$proyecto->pro_idProyecto;
				$cantidad++;
			}
			
		}
		
		//si no hay ningun proyecto
		if($cantidad==0){
			$condicion="pro_idProyecto=-1";
		}

		$criteria->addCondition($condicion);
		$criteria->compare('pro_idProyecto',$this->pro_idProyecto);
		$criteria->compare('pro_titulo',$this->pro_titulo,true);
		$criteria->compare('pro_duracion',$this->pro_duracion,true);
		$criteria->compare('pro_ambito',$this->pro_ambito,true);
		$criteria->compare('pro_emNombre',$this->pro_emNombre,true);
		$criteria->compare('pro_emContacto',$this->pro_emContacto,true);
		$criteria->compare('pro_emTelefono',$this->pro_emTelefono,true);
		$criteria->compare('emEmail',$this->emEmail,true);
		$criteria->compare('pro_profeNombre',$this->pro_profeNombre,true);
		$criteria->compare('pro_profeEmail',$this->pro_profeEmail,true);
		$criteria->compare('pro_profeTelefono',$this->pro_profeTelefono,true);
		$criteria->compare('pro_dirEscuela',$this->pro_dirEscuela,true);
		$criteria->compare('pro_vBEscuela',$this->pro_vBEscuela,true);
		$criteria->compare('pro_aporteValorado',$this->pro_aporteValorado);
		$criteria->compare('pro_aportePecuniario',$this->pro_aportePecuniario);
		$criteria->compare('pro_resumenEjecutivo',$this->pro_resumenEjecutivo,true);
		$criteria->compare('pro_descripcionEmpresa',$this->pro_descripcionEmpresa,true);
		$criteria->compare('pro_definicionProblema',$this->pro_definicionProblema,true);
		$criteria->compare('pro_solucionPropuesta',$this->pro_solucionPropuesta,true);
		$criteria->compare('pro_estadoArte',$this->pro_estadoArte,true);
		$criteria->compare('pro_objetivoGeneral',$this->pro_objetivoGeneral,true);
		$criteria->compare('pro_metodologia',$this->pro_metodologia,true);
		

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public function searchChillan()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		//obtener los alumnos de la convocatoria actual
		$convocatoria = Convocatoria::model()->find("con_estado=1")->con_semestre;
		$alumnos=Alumno::model()->findAll("con_semestre='".$convocatoria."' AND al_campus='Chillán'");

		$criteria=new CDbCriteria;
		$condicion='';

		$j=0;
		$cantidad=0;

		//obtener los proyectos de los alumnos
		for ($i=0; $i < count($alumnos); $i++) {
			
			//obtener el proyecto del alumno
 			$proyecto = Alumnoproyecto::model()->find("al_rut='".$alumnos[$i]->al_rut."'");
			

			//si el alumno tiene un proyecto
			if(count($proyecto)>0){
			
			//para que no se le ponga "or" al principio ni al final  
			if($cantidad>=1){
				$condicion=$condicion." or ";		
			}
				$condicion=$condicion."pro_idProyecto=".$proyecto->pro_idProyecto;
				$cantidad++;
			}
			
		}
		
		//si no hay ningun proyecto
		if($cantidad==0){
			$condicion="pro_idProyecto=-1";
		}

		$criteria->addCondition($condicion);
		$criteria->compare('pro_idProyecto',$this->pro_idProyecto);
		$criteria->compare('pro_titulo',$this->pro_titulo,true);
		$criteria->compare('pro_duracion',$this->pro_duracion,true);
		$criteria->compare('pro_ambito',$this->pro_ambito,true);
		$criteria->compare('pro_emNombre',$this->pro_emNombre,true);
		$criteria->compare('pro_emContacto',$this->pro_emContacto,true);
		$criteria->compare('pro_emTelefono',$this->pro_emTelefono,true);
		$criteria->compare('emEmail',$this->emEmail,true);
		$criteria->compare('pro_profeNombre',$this->pro_profeNombre,true);
		$criteria->compare('pro_profeEmail',$this->pro_profeEmail,true);
		$criteria->compare('pro_profeTelefono',$this->pro_profeTelefono,true);
		$criteria->compare('pro_dirEscuela',$this->pro_dirEscuela,true);
		$criteria->compare('pro_vBEscuela',$this->pro_vBEscuela,true);
		$criteria->compare('pro_aporteValorado',$this->pro_aporteValorado);
		$criteria->compare('pro_aportePecuniario',$this->pro_aportePecuniario);
		$criteria->compare('pro_resumenEjecutivo',$this->pro_resumenEjecutivo,true);
		$criteria->compare('pro_descripcionEmpresa',$this->pro_descripcionEmpresa,true);
		$criteria->compare('pro_definicionProblema',$this->pro_definicionProblema,true);
		$criteria->compare('pro_solucionPropuesta',$this->pro_solucionPropuesta,true);
		$criteria->compare('pro_estadoArte',$this->pro_estadoArte,true);
		$criteria->compare('pro_objetivoGeneral',$this->pro_objetivoGeneral,true);
		$criteria->compare('pro_metodologia',$this->pro_metodologia,true);
		

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}


	public function searchConvocatoria($convocatoria)
	{
		// @todo Please modify the following code to remove attributes that should not be searched.


		//obtener los alumnos de la convocatoria actual
		$alumnos=Alumno::model()->findAll("con_semestre='".$convocatoria."'");

		$criteria=new CDbCriteria;
		$condicion='';

		$j=0;
		$cantidad=0;

		//obtener los proyectos de los alumnos
		for ($i=0; $i < count($alumnos); $i++) { 
			
			//obtener el proyecto del alumno
 			$proyecto = Alumnoproyecto::model()->find("al_rut='".$alumnos[$i]->al_rut."'");
			

			//si el alumno tiene un proyecto
			if(count($proyecto)>0){
			
			//para que no se le ponga "or" al principio ni al final  
			if($cantidad>=1){
				$condicion=$condicion." or ";		
			}
				$condicion=$condicion."pro_idProyecto=".$proyecto->pro_idProyecto;
				$cantidad++;
			}
			
		}
		
		//si no hay ningun proyecto
		if($cantidad==0){
			$condicion="pro_idProyecto=-1";
		}

		$criteria->addCondition($condicion);
		$criteria->compare('pro_idProyecto',$this->pro_idProyecto);
		$criteria->compare('pro_titulo',$this->pro_titulo,true);
		$criteria->compare('pro_duracion',$this->pro_duracion,true);
		$criteria->compare('pro_ambito',$this->pro_ambito,true);
		$criteria->compare('pro_emNombre',$this->pro_emNombre,true);
		$criteria->compare('pro_emContacto',$this->pro_emContacto,true);
		$criteria->compare('pro_emTelefono',$this->pro_emTelefono,true);
		$criteria->compare('emEmail',$this->emEmail,true);
		$criteria->compare('pro_profeNombre',$this->pro_profeNombre,true);
		$criteria->compare('pro_profeEmail',$this->pro_profeEmail,true);
		$criteria->compare('pro_profeTelefono',$this->pro_profeTelefono,true);
		$criteria->compare('pro_dirEscuela',$this->pro_dirEscuela,true);
		$criteria->compare('pro_vBEscuela',$this->pro_vBEscuela,true);
		$criteria->compare('pro_aporteValorado',$this->pro_aporteValorado);
		$criteria->compare('pro_aportePecuniario',$this->pro_aportePecuniario);
		$criteria->compare('pro_resumenEjecutivo',$this->pro_resumenEjecutivo,true);
		$criteria->compare('pro_descripcionEmpresa',$this->pro_descripcionEmpresa,true);
		$criteria->compare('pro_definicionProblema',$this->pro_definicionProblema,true);
		$criteria->compare('pro_solucionPropuesta',$this->pro_solucionPropuesta,true);
		$criteria->compare('pro_estadoArte',$this->pro_estadoArte,true);
		$criteria->compare('pro_objetivoGeneral',$this->pro_objetivoGeneral,true);
		$criteria->compare('pro_metodologia',$this->pro_metodologia,true);
		

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public function searchAlumno()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;


		//que solo vea los proyectos en los que esta inscrito
			// obtener datos del usuario activo 
		$proyectos=Alumnoproyecto::model()->findAll("al_rut='".Yii::app()->user->name."'");

		// echo $proyectos[0]->pro_idProyecto;


		$condicion='';
		for ($i=0; $i <count($proyectos) ; $i++) { 
			if($i>0){
				$condicion=$condicion.' or ';		
			}
			$condicion=$condicion."pro_idProyecto =".$proyectos[$i]->pro_idProyecto;
		}

		$criteria->addCondition($condicion);	
		
		if(count($proyectos)==0){
			$criteria->addCondition("pro_idProyecto =-1");
		}
		// echo $condicion;


		$criteria->compare('pro_idProyecto',$this->pro_idProyecto);
		$criteria->compare('pro_titulo',$this->pro_titulo,true);
		$criteria->compare('pro_duracion',$this->pro_duracion,true);
		$criteria->compare('pro_ambito',$this->pro_ambito,true);
		$criteria->compare('pro_emNombre',$this->pro_emNombre,true);
		$criteria->compare('pro_emContacto',$this->pro_emContacto,true);
		$criteria->compare('pro_emTelefono',$this->pro_emTelefono,true);
		$criteria->compare('emEmail',$this->emEmail,true);
		$criteria->compare('pro_profeNombre',$this->pro_profeNombre,true);
		$criteria->compare('pro_profeEmail',$this->pro_profeEmail,true);
		$criteria->compare('pro_profeTelefono',$this->pro_profeTelefono,true);
		$criteria->compare('pro_dirEscuela',$this->pro_dirEscuela,true);
		$criteria->compare('pro_vBEscuela',$this->pro_vBEscuela,true);
		$criteria->compare('pro_aporteValorado',$this->pro_aporteValorado);
		$criteria->compare('pro_aportePecuniario',$this->pro_aportePecuniario);
		$criteria->compare('pro_resumenEjecutivo',$this->pro_resumenEjecutivo,true);
		$criteria->compare('pro_descripcionEmpresa',$this->pro_descripcionEmpresa,true);
		$criteria->compare('pro_definicionProblema',$this->pro_definicionProblema,true);
		$criteria->compare('pro_solucionPropuesta',$this->pro_solucionPropuesta,true);
		$criteria->compare('pro_estadoArte',$this->pro_estadoArte,true);
		$criteria->compare('pro_objetivoGeneral',$this->pro_objetivoGeneral,true);
		$criteria->compare('pro_metodologia',$this->pro_metodologia,true);
		
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public function searchEvaluador()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$proyectos = Proyectoevaluador::model()->findAll();

		$condicion='';
		for ($i=0; $i <count($proyectos) ; $i++) { 
			if($i>0){
				$condicion=$condicion.' and ';		
			}
			$condicion=$condicion."pro_idProyecto!=".$proyectos[$i]->pro_idProyecto;
			}
		if(count($proyectos)==0){
			$condicion='';
		}

		$criteria->addCondition($condicion);
		$criteria->compare('pro_idProyecto',$this->pro_idProyecto,true);
		$criteria->compare('pro_titulo',$this->pro_titulo,true);
		$criteria->compare('pro_ambito',$this->pro_ambito,true);
		$criteria->compare('pro_emNombre',$this->pro_emNombre,true);
		$criteria->compare('pro_profeNombre',$this->pro_profeNombre,true);
		$criteria->compare('pro_objetivoGeneral',$this->pro_objetivoGeneral,true);
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}


	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Proyecto the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

		public function getDatos ($pro_idProyecto, $dato){
		$alumnoproyecto = Alumnoproyecto::model()->findByPk($pro_idProyecto);
		if($alumnoproyecto===null)
			throw new CHttpException(404,'La página solicitada No existe.');	
		else if ($alumnoproyecto->$dato===null)
			return '';
		return $alumnoproyecto->$dato;
	}
}
