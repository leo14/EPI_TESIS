<?php

/**
 * This is the model class for table "encuestaactividad".
 *
 * The followings are the available columns in table 'encuestaactividad':
 * @property integer $en_id
 * @property string $al_rut
 * @property string $en_convocatoria
 * @property integer $act_id
 * @property string $en_tipo
 * @property string $en_pregunta1
 * @property string $en_pregunta2
 * @property string $en_pregunta3
 * @property string $en_pregunta4
 * @property string $en_comentario
 */
class Encuestaactividad extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'encuestaactividad';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			// al crear la encuesta el administrador
			array('en_convocatoria, act_id, en_tipo,en_estado', 'required'),

			//al completar la encuesta
			array('en_id, al_rut, en_convocatoria, act_id, en_tipo, en_pregunta1, en_pregunta2, en_pregunta3, en_pregunta4,en_estado', 'required','on' => 'completar'),

			array('en_id, act_id', 'numerical', 'integerOnly'=>true),
			array('al_rut', 'length', 'max'=>15),
			array('en_convocatoria, en_tipo', 'length', 'max'=>10),
			array('en_pregunta1, en_pregunta2, en_pregunta3, en_pregunta4', 'length', 'max'=>255),
			array('en_comentario', 'safe'),
			array('en_comentario', 'length', 'min'=>3),

			// array('act_id','unique','message'=>CrugeTranslator::t("Ya se creo una escuesta para la actividad")),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('en_id, al_rut, en_convocatoria, act_id, en_tipo, en_pregunta1, en_pregunta2, en_pregunta3, en_pregunta4, en_comentario', 'safe', 'on'=>'search'),

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
			'Actividad'=>array(self::BELONGS_TO, 'Actividades', 'act_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'en_id' => 'En',
			'al_rut' => 'RUT',
			'en_convocatoria' => 'CONVOCATORIA',
			'act_id' => 'ACTIVIDAD',
			'en_tipo' => 'TIPO',
			'en_pregunta1' => 'Pregunta 1',
			'en_pregunta2' => 'Pregunta 2',
			'en_pregunta3' => 'Pregunta 3',
			'en_pregunta4' => 'Pregunta 4',
			'en_comentario' => 'COMENTARIO',
			'en_estado' => 'En Estado',

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

		//encuestas de la convocatoria actual
		$convocatoria=Convocatoria::model()->findAll("con_estado=1");

		//solo muestra las respondidas
		$criteria->addCondition("en_estado =1");
		$criteria->addCondition("en_convocatoria='".$convocatoria[0]->con_semestre."'");


		$criteria->compare('en_id',$this->en_id);
		$criteria->compare('al_rut',$this->al_rut,true);
		$criteria->compare('en_convocatoria',$this->en_convocatoria,true);
		$criteria->compare('act_id',$this->act_id);
		$criteria->compare('en_tipo',$this->en_tipo,true);
		$criteria->compare('en_pregunta1',$this->en_pregunta1,true);
		$criteria->compare('en_pregunta2',$this->en_pregunta2,true);
		$criteria->compare('en_pregunta3',$this->en_pregunta3,true);
		$criteria->compare('en_pregunta4',$this->en_pregunta4,true);
		$criteria->compare('en_comentario',$this->en_comentario,true);
		$criteria->compare('en_estado',$this->en_estado);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public function searchAlumno()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		
		// solo vea sus encuestas
		$criteria->addCondition("al_rut ='".Yii::app()->user->name."'");

		//solo las que no ha respondido
		$criteria->addCondition("en_estado =0");

		$criteria->compare('en_id',$this->en_id);
		$criteria->compare('al_rut',$this->al_rut,true);
		$criteria->compare('en_convocatoria',$this->en_convocatoria,true);
		$criteria->compare('en_tipo',$this->en_tipo,true);
		$criteria->compare('en_pregunta1',$this->en_pregunta1,true);
		$criteria->compare('en_pregunta2',$this->en_pregunta2,true);
		$criteria->compare('en_pregunta3',$this->en_pregunta3,true);
		$criteria->compare('en_pregunta4',$this->en_pregunta4,true);
		$criteria->compare('en_comentario',$this->en_comentario,true);
		$criteria->compare('en_estado',$this->en_estado);

		return new CActiveDataProvider($this, array(
                'pagination'=>array(
                        'pageSize'=>100,
                ),
                'criteria'=>$criteria,
        ));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Encuestaactividad the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
