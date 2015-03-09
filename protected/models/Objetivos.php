<?php

/**
 * This is the model class for table "objetivos".
 *
 * The followings are the available columns in table 'objetivos':
 * @property integer $pro_idProyecto
 * @property string $ob_objetivo1
 * @property string $ob_objetivo2
 * @property string $ob_objetivo3
 * @property string $ob_objetivo4
 * @property string $ob_objetivo5
 * @property string $ob_resultado1
 * @property string $ob_resultado2
 * @property string $ob_resultado3
 * @property string $ob_resultado4
 * @property string $ob_resultado5
 * @property string $ob_actividades1
 * @property string $ob_actividades2
 * @property string $ob_actividades3
 * @property string $ob_actividades4
 * @property string $ob_actividades5
 */
class Objetivos extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'objetivos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('pro_idProyecto', 'required'),
			array('pro_idProyecto', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('pro_idProyecto, ob_objetivo1, ob_objetivo2, ob_objetivo3, ob_objetivo4, ob_objetivo5, ob_resultado1, ob_resultado2, ob_resultado3, ob_resultado4, ob_resultado5, ob_actividades1, ob_actividades2, ob_actividades3, ob_actividades4, ob_actividades5', 'safe'),
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
			'pro_idProyecto' => 'Pro Id Proyecto',
			'ob_objetivo1' => 'Ob Objetivo1',
			'ob_objetivo2' => 'Ob Objetivo2',
			'ob_objetivo3' => 'Ob Objetivo3',
			'ob_objetivo4' => 'Ob Objetivo4',
			'ob_objetivo5' => 'Ob Objetivo5',
			'ob_resultado1' => 'Ob Resultado1',
			'ob_resultado2' => 'Ob Resultado2',
			'ob_resultado3' => 'Ob Resultado3',
			'ob_resultado4' => 'Ob Resultado4',
			'ob_resultado5' => 'Ob Resultado5',
			'ob_actividades1' => 'Ob Actividades1',
			'ob_actividades2' => 'Ob Actividades2',
			'ob_actividades3' => 'Ob Actividades3',
			'ob_actividades4' => 'Ob Actividades4',
			'ob_actividades5' => 'Ob Actividades5',
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

		$criteria->compare('pro_idProyecto',$this->pro_idProyecto);
		$criteria->compare('ob_objetivo1',$this->ob_objetivo1,true);
		$criteria->compare('ob_objetivo2',$this->ob_objetivo2,true);
		$criteria->compare('ob_objetivo3',$this->ob_objetivo3,true);
		$criteria->compare('ob_objetivo4',$this->ob_objetivo4,true);
		$criteria->compare('ob_objetivo5',$this->ob_objetivo5,true);
		$criteria->compare('ob_resultado1',$this->ob_resultado1,true);
		$criteria->compare('ob_resultado2',$this->ob_resultado2,true);
		$criteria->compare('ob_resultado3',$this->ob_resultado3,true);
		$criteria->compare('ob_resultado4',$this->ob_resultado4,true);
		$criteria->compare('ob_resultado5',$this->ob_resultado5,true);
		$criteria->compare('ob_actividades1',$this->ob_actividades1,true);
		$criteria->compare('ob_actividades2',$this->ob_actividades2,true);
		$criteria->compare('ob_actividades3',$this->ob_actividades3,true);
		$criteria->compare('ob_actividades4',$this->ob_actividades4,true);
		$criteria->compare('ob_actividades5',$this->ob_actividades5,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Objetivos the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
