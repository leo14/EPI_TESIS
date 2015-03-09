<?php

/**
 * This is the model class for table "documentos".
 *
 * The followings are the available columns in table 'documentos':
 * @property integer $doc_id
 * @property integer $cu_id
 * @property string $doc_fecha
 * @property string $doc_nombre
 * @property string $doc_tipo
 * @property string $doc_link
 */
class Documentos extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'documentos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cu_id, doc_fecha, doc_nombre, doc_tipo', 'required'),
			array('cu_id', 'numerical', 'integerOnly'=>true),
			array('doc_nombre, doc_tipo', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('doc_id, cu_id, doc_fecha, doc_nombre, doc_tipo, doc_link', 'safe'),
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
			'doc_id' => 'Doc',
			'cu_id' => 'Cu',
			'doc_fecha' => 'Doc Fecha',
			'doc_nombre' => 'Doc Nombre',
			'doc_tipo' => 'Doc Tipo',
			'doc_link' => 'Doc Link',
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

		$criteria->compare('doc_id',$this->doc_id);
		$criteria->compare('cu_id',$this->cu_id);
		$criteria->compare('doc_fecha',$this->doc_fecha,true);
		$criteria->compare('doc_nombre',$this->doc_nombre,true);
		$criteria->compare('doc_tipo',$this->doc_tipo,true);
		$criteria->compare('doc_link',$this->doc_link,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Documentos the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
