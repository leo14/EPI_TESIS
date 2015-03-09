<?php

/**
 * This is the model class for table "alumno".
 *
 * The followings are the available columns in table 'alumno':
 * @property string $al_rut
 * @property string $al_nombre
 * @property string $al_carrera
 * @property string $al_email
 * @property string $al_telefono
 * @property string $al_comentario
 * @property string $al_clave
 * @property string $al_paterno
 * @property string $al_materno
 * @property string $al_campus
 * @property string $al_email2
 */
class Alumno extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'alumno';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('al_rut, al_nombre, al_carrera, al_email, al_telefono, al_comentario, al_paterno, al_materno, al_campus', 'required'),
			array('al_rut', 'length', 'max'=>15),
			array('al_nombre, al_carrera, al_comentario, al_clave, al_paterno, al_materno, al_campus', 'length', 'max'=>100),
			// array('al_clave', 'length', 'max'=>20, 'min'=>6),
			array('al_rut','validateRut'), 
			array('al_carrera','match','pattern'=>'/^([a-zA-Zñáéíóú\s]{3,80})$/','message'=>CrugeTranslator::t("La CARRERA no es válida")),
			array('al_nombre','match','pattern'=>'/^([a-zA-Zñáéíóú\s]{3,80})$/','message'=>CrugeTranslator::t("El NOMBRE no es válido")),
			array('al_paterno','match','pattern'=>'/^([a-zA-Zñáéíóú]{3,80})$/','message'=>CrugeTranslator::t("El APELLIDO PATERNO no es válido")),
			array('al_materno','match','pattern'=>'/^([a-zA-Zñáéíóú]{3,80})$/','message'=>CrugeTranslator::t("El APELLIDO MATERNO no es válido")),
			array('al_campus','match','pattern'=>'/^([a-zA-Zñáéíóú]{3,80})$/','message'=>CrugeTranslator::t("El CAMPUS no es válido")),
			array('al_email', 'email'),
			array('al_email2', 'email'),
			array('al_telefono', 'length', 'max'=>10, 'min'=>6),
			array('al_telefono','match','pattern'=>'/^[0-9]{6,10}$/','message'=>CrugeTranslator::t("Teléfono incorrecto")),
			array('al_email','unique','message'=>CrugeTranslator::t("El E-MAIL ya está registrado")),
			array('al_rut','unique','message'=>CrugeTranslator::t("El N° CÉDULA DE IDENTIDAD ya está registrado")),

			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('al_rut, al_nombre, al_carrera, al_email, al_telefono, al_comentario, al_clave, al_paterno, al_materno, al_campus, al_email2', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'al_rut' => 'N° CÉDULA DE IDENTIDAD',
			'al_nombre' => 'NOMBRES ALUMNO(A)',
			'al_carrera' => 'CARRERA',
			'al_email' => 'E-MAIL',
			'al_telefono' => 'TELÉFONO',
			'al_comentario' => 'COMENTARIO',
			'al_clave' => 'CLAVE',
			'al_paterno' => 'APELLIDO PATERNO',
			'al_materno' => 'APELLIDO MATERNO',
			'al_campus' => 'CAMPUS',
			'al_email2' => 'E-MAIL OPCIONAL',
			'al_estado' => 'ESTADO',
			'con_semestre' => 'CONVOCATORIA',

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

		$model=convocatoria::model()->findAll("con_estado=1");
		$convocatoria = $model[0]->con_semestre;

		$criteria=new CDbCriteria;
		$criteria->addCondition("con_semestre ='$convocatoria'");
		$criteria->addCondition("al_campus ='Concepción'");
		$criteria->compare('al_rut',$this->al_rut,true);
		$criteria->compare('al_nombre',$this->al_nombre,true);
		$criteria->compare('al_carrera',$this->al_carrera,true);
		$criteria->compare('al_email',$this->al_email,true);
		$criteria->compare('al_telefono',$this->al_telefono,true);
		$criteria->compare('al_comentario',$this->al_comentario,true);
		$criteria->compare('al_clave',$this->al_clave,true);
		$criteria->compare('al_paterno',$this->al_paterno,true);
		$criteria->compare('al_materno',$this->al_materno,true);
		$criteria->compare('al_campus',$this->al_campus,true);
		$criteria->compare('al_email2',$this->al_email2,true);
		$criteria->compare('con_semestre',$this->con_semestre,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

		public function searchChillan()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$model=convocatoria::model()->findAll("con_estado=1");
		$convocatoria = $model[0]->con_semestre;

		$criteria=new CDbCriteria;
		$criteria->addCondition("con_semestre ='$convocatoria'");
		$criteria->addCondition("al_campus ='Chillán'");
		$criteria->compare('al_rut',$this->al_rut,true);
		$criteria->compare('al_nombre',$this->al_nombre,true);
		$criteria->compare('al_carrera',$this->al_carrera,true);
		$criteria->compare('al_email',$this->al_email,true);
		$criteria->compare('al_telefono',$this->al_telefono,true);
		$criteria->compare('al_comentario',$this->al_comentario,true);
		$criteria->compare('al_clave',$this->al_clave,true);
		$criteria->compare('al_paterno',$this->al_paterno,true);
		$criteria->compare('al_materno',$this->al_materno,true);
		$criteria->compare('al_campus',$this->al_campus,true);
		$criteria->compare('al_email2',$this->al_email2,true);
		$criteria->compare('con_semestre',$this->con_semestre,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public function searchConvocatoria($convocatoria)
	{
		// @todo Please modify the following code to remove attributes that should not be searched.


		$criteria=new CDbCriteria;
		$criteria->addCondition("con_semestre ='$convocatoria'");
		$criteria->compare('al_rut',$this->al_rut,true);
		$criteria->compare('al_nombre',$this->al_nombre,true);
		$criteria->compare('al_carrera',$this->al_carrera,true);
		$criteria->compare('al_email',$this->al_email,true);
		$criteria->compare('al_telefono',$this->al_telefono,true);
		$criteria->compare('al_comentario',$this->al_comentario,true);
		$criteria->compare('al_clave',$this->al_clave,true);
		$criteria->compare('al_paterno',$this->al_paterno,true);
		$criteria->compare('al_materno',$this->al_materno,true);
		$criteria->compare('al_campus',$this->al_campus,true);
		$criteria->compare('al_email2',$this->al_email2,true);
		$criteria->compare('con_semestre',$this->con_semestre,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Alumno the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}


	public function validateRut($attribute,$params){
		$rut = $this->al_rut;
		$suma = "";

		if(strpos($rut,"-")==false){
	        $RUT[0] = substr($rut, 0, -1);
	        $RUT[1] = substr($rut, -1);
	    }else{
	        $RUT = explode("-", trim($rut));
	    }

	    $elRut = str_replace(".", "", trim($RUT[0]));
	    $factor = 2;
	    
	    for($i = strlen($elRut)-1; $i >= 0; $i--):
	        $factor = $factor > 7 ? 2 : $factor;
	        $suma += $elRut{$i}*$factor++;
	    endfor;
	    	    $resto = $suma % 11;
	    $dv = 11 - $resto;
	    if($dv == 11){
	        $dv=0;
	    }else if($dv == 10){
	        $dv="k";
	    }else{
	        $dv=$dv;
	    }
	   if($dv == trim(strtolower($RUT[1]))){
	       return true;
	   }else{
	       $this->addError($attribute, 'El RUT ingresado NO es válido');
	   }
	}
}
