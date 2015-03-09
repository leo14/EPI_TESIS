<?php

/**
 * This is the model class for table "evaluadores".
 *
 * The followings are the available columns in table 'evaluadores':
 * @property string $ev_rut
 * @property string $ev_email
 * @property string $ev_nombre
 * @property string $ev_clave
 * @property string $ev_estado
 */
class Evaluadores extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'evaluadores';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ev_rut, ev_email, ev_nombre, ev_clave, ev_estado', 'required'),
			array('ev_rut', 'length', 'max'=>13, 'min'=>11),
			array('ev_rut','validateRut'), 
			array('ev_email', 'length', 'max'=>30),
			array('ev_nombre', 'length', 'max'=>255),
			array('ev_clave', 'length', 'max'=>20, 'min'=>6),
			array('ev_estado', 'length', 'max'=>8),
			array('ev_email', 'email'),
			array('ev_nombre','match','pattern'=>'/^([a-zA-Zñáéíóú\s]{3,80})$/','message'=>CrugeTranslator::t("El NOMBRE no es válido")),
			array('ev_rut','unique','message'=>CrugeTranslator::t("El RUT ya está registrado")),
			array('ev_email','unique','message'=>CrugeTranslator::t("El E-MAIL ya está registrado")),
			array('ev_rut','match','pattern'=>'/^([0-9kK.-]{11,13})$/','message'=>CrugeTranslator::t("El RUT no es válido2")),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ev_rut, ev_email, ev_nombre, ev_clave', 'safe', 'on'=>'search'),
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
			'ev_rut' => 'RUT',
			'ev_email' => 'E-MAIL',
			'ev_nombre' => 'NOMBRE COMPLETO',
			'ev_clave' => 'CLAVE',
			'ev_estado' => 'ESTADO',
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
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('ev_rut',$this->ev_rut);
		$criteria->compare('ev_email',$this->ev_email,true);
		$criteria->compare('ev_nombre',$this->ev_nombre,true);
		$criteria->compare('ev_clave',$this->ev_clave,true);
		$criteria->compare('ev_estado',$this->ev_estado,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public function search1()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->addCondition("ev_estado ='Activo'");
		$criteria->compare('ev_rut',$this->ev_rut);
		$criteria->compare('ev_email',$this->ev_email,true);
		$criteria->compare('ev_nombre',$this->ev_nombre,true);
		$criteria->compare('ev_clave',$this->ev_clave,true);
		$criteria->compare('ev_estado',$this->ev_estado,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public function search2()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->addCondition("ev_estado ='Inactivo'");
		$criteria->compare('ev_rut',$this->ev_rut);
		$criteria->compare('ev_email',$this->ev_email,true);
		$criteria->compare('ev_nombre',$this->ev_nombre,true);
		$criteria->compare('ev_clave',$this->ev_clave,true);
		$criteria->compare('ev_estado',$this->ev_estado,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Evaluadores the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function validateRut($attribute,$params){
		$rut = $this->ev_rut;
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
