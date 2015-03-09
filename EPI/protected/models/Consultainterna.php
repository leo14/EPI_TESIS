<?php

/**
 * This is the model class for table "consultainterna".
 *
 * The followings are the available columns in table 'consultainterna':
 * @property integer $coni_id
 * @property string $coni_consulta
 * @property string $coni_telefono
 * @property string $coni_email
 * @property string $coni_fecha
 * @property integer $coni_estado
 * @property string $coni_respuesta
 * @property string $coni_fechaRespuesta
 */
class Consultainterna extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'consultainterna';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('coni_consulta, coni_telefono, coni_email, coni_fecha', 'required'),

			// al administrdor responder la consulta
			array('coni_respuesta,coni_estado,coni_fechaRespuesta', 'required','on' => 'editar'),
			
			array('coni_consulta','length','min'=>5),
			array('coni_estado', 'numerical', 'integerOnly'=>true),
			array('coni_telefono, coni_email', 'length', 'max'=>255),

			array('coni_respuesta', 'length', 'min'=>2,'on' => 'editar'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('coni_id, coni_consulta, coni_telefono, coni_email, coni_fecha, coni_estado, coni_respuesta, coni_fechaRespuesta', 'safe', 'on'=>'search'),
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
			'coni_id' => 'Coni',
			'coni_consulta' => 'CONSULTA',
			'coni_telefono' => 'TELEFONO',
			'coni_email' => 'E-MAIL',
			'coni_fecha' => 'FECHA',
			'coni_estado' => 'ESTADO',
			'coni_respuesta' => 'RESPUESTA',
			'coni_fechaRespuesta' => 'FECHA RESPUESTA',
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

		$criteria->compare('coni_id',$this->coni_id);
		$criteria->compare('coni_consulta',$this->coni_consulta,true);
		$criteria->compare('coni_telefono',$this->coni_telefono,true);
		$criteria->compare('coni_email',$this->coni_email,true);
		$criteria->compare('coni_fecha',$this->coni_fecha,true);
		$criteria->compare('coni_estado',$this->coni_estado);
		$criteria->compare('coni_respuesta',$this->coni_respuesta,true);
		$criteria->compare('coni_fechaRespuesta',$this->coni_fechaRespuesta,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}


	public function searchAdministrador()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;
		
		$criteria->addCondition("coni_estado = 0");
		$criteria->compare('coni_id',$this->coni_id);
		$criteria->compare('coni_consulta',$this->coni_consulta,true);
		$criteria->compare('coni_telefono',$this->coni_telefono,true);
		$criteria->compare('coni_email',$this->coni_email,true);
		$criteria->compare('coni_fecha',$this->coni_fecha,true);
		$criteria->compare('coni_estado',$this->coni_estado);
		$criteria->compare('coni_respuesta',$this->coni_respuesta,true);
		$criteria->compare('coni_fechaRespuesta',$this->coni_fechaRespuesta,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public function searchAlumno()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		// obtener datos del usuario activo 
		$alumno=Alumno::model()->find("al_rut='".Yii::app()->user->name."'");
	
		$criteria->addCondition("coni_email ='".$alumno->al_email."'");
		$criteria->compare('coni_id',$this->coni_id);
		$criteria->compare('coni_consulta',$this->coni_consulta,true);
		$criteria->compare('coni_telefono',$this->coni_telefono,true);
		$criteria->compare('coni_email',$this->coni_email,true);
		$criteria->compare('coni_fecha',$this->coni_fecha,true);
		$criteria->compare('coni_estado',$this->coni_estado);
		$criteria->compare('coni_respuesta',$this->coni_respuesta,true);
		$criteria->compare('coni_fechaRespuesta',$this->coni_fechaRespuesta,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Consultainterna the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
