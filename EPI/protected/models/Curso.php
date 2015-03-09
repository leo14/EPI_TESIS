<?php

/**
 * This is the model class for table "curso".
 *
 * The followings are the available columns in table 'curso':
 * @property integer $cu_id
 * @property string $cu_nombre
 * @property string $cu_creador
 * @property string $cu_foto
 * @property string $cu_info
 * @property string $con_semestre
 */
class Curso extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'curso';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cu_nombre, cu_creador, cu_info, cu_campus, con_semestre', 'required'),
			array('cu_nombre, cu_creador', 'length', 'max'=>255),
			array('con_semestre', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('cu_id, cu_nombre, cu_creador, cu_foto, cu_info, con_semestre', 'safe', 'on'=>'search'),
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
			'cu_id' => 'Cu',
			'cu_nombre' => 'NOMBRE',
			'cu_creador' => 'CREADOR',
			'cu_foto' => 'FOTO CREADOR',
			'cu_info' => 'INFORMACIÓN',
			'con_semestre' => 'SEMESTRE',
			'cu_campus' => 'CAMPUS',
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

		$criteria->compare('cu_id',$this->cu_id);
		$criteria->compare('cu_nombre',$this->cu_nombre,true);
		$criteria->compare('cu_creador',$this->cu_creador,true);
		$criteria->compare('cu_foto',$this->cu_foto,true);
		$criteria->compare('cu_info',$this->cu_info,true);
		$criteria->compare('con_semestre',$this->con_semestre,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Curso the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
