<?php

/**
 * This is the model class for table "consulta".
 *
 * The followings are the available columns in table 'consulta':
 * @property integer $con_id
 * @property string $con_consulta
 * @property string $con_email
 * @property string $con_telefono
 * @property string $con_fecha
 */
class Consulta extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'consulta';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('con_consulta, con_email, con_telefono, con_fecha', 'required'),
			array('con_email, con_telefono', 'length', 'max'=>255),
			array('con_estado', 'numerical', 'integerOnly'=>true),

			//validaciones
			array('con_email', 'email'),
			array('con_telefono', 'length', 'max'=>10, 'min'=>6),
			array('con_telefono','match','pattern'=>'/^[0-9]{6,10}$/','message'=>CrugeTranslator::t("TELÉFONO incorrecto")),
			array('con_consulta','length','min'=>5),

			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('con_id, con_consulta, con_email, con_telefono, con_fecha,con_estado', 'safe', 'on'=>'search'),
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
			'con_id' => 'Id',
			'con_consulta' => 'CONSULTA',
			'con_email' => 'E-MAIL',
			'con_telefono' => 'TELEFONO',
			'con_fecha' => 'FECHA',
			'con_estado' => 'ESTADO',
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

		$criteria->compare('con_id',$this->con_id);
		$criteria->compare('con_consulta',$this->con_consulta,true);
		$criteria->compare('con_email',$this->con_email,true);
		$criteria->compare('con_telefono',$this->con_telefono,true);
		$criteria->compare('con_fecha',$this->con_fecha,true);
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public function search1()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->addCondition("con_estado = 0");
		$criteria->compare('con_id',$this->con_id);
		$criteria->compare('con_consulta',$this->con_consulta,true);
		$criteria->compare('con_email',$this->con_email,true);
		$criteria->compare('con_telefono',$this->con_telefono,true);
		$criteria->compare('con_fecha',$this->con_fecha,true);
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}	

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Consulta the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
