<?php

/**
 * This is the model class for table "noticia".
 *
 * The followings are the available columns in table 'noticia':
 * @property integer $no_id
 * @property string $no_titulo
 * @property string $no_subtitulo
 * @property string $no_cuerpo
 * @property string $no_imagen
 */
class Noticia extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'noticia';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('no_titulo, no_subtitulo, no_cuerpo, no_imagen', 'required'),
			array('no_titulo, no_subtitulo', 'length', 'max'=>100),
			array('no_cuerpo', 'length', 'max'=>5000,'min'=>10),
			array('no_titulo', 'length', 'min'=>10),
			array('no_subtitulo', 'length', 'min'=>10),
			array('no_imagen', 'file', 'types'=>'jpg, gif, png'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('no_id, no_titulo, no_subtitulo, no_cuerpo', 'safe', 'on'=>'search'),
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
			'no_id' => 'No',
			'no_titulo' => 'TÍTULO',
			'no_subtitulo' => 'SUBTÍTULO',
			'no_cuerpo' => 'CUERPO',
			'no_imagen' => 'IMAGEN',
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

		$criteria->compare('no_id',$this->no_id);
		$criteria->compare('no_titulo',$this->no_titulo,true);
		$criteria->compare('no_subtitulo',$this->no_subtitulo,true);
		$criteria->compare('no_cuerpo',$this->no_cuerpo,true);
		$criteria->compare('no_imagen',$this->no_imagen,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Noticia the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
