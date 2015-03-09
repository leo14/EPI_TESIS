<?php

/**
 * This is the model class for table "cartagantt".
 *
 * The followings are the available columns in table 'cartagantt':
 * @property integer $pro_idProyecto
 * @property string $cg_inicio1
 * @property string $cg_fin1
 * @property string $cg_inicio2
 * @property string $cg_fin2
 * @property string $cg_inicio3
 * @property string $cg_fin3
 * @property string $cg_inicio4
 * @property string $cg_fin4
 * @property string $cg_inicio5
 * @property string $cg_fin5
 */
class Cartagantt extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'cartagantt';
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
			array('cg_inicio2, cg_fin2, cg_inicio3, cg_fin3, cg_inicio4, cg_fin4, cg_inicio5, cg_fin5', 'safe'),
			array('cg_fin1', 'compare', 'compareAttribute'=>'cg_inicio1','operator'=>'>','message'=>CrugeTranslator::t("La FECHA FIN debe ser mayor a la FECHA INICIO")),
			array('cg_fin2', 'compare', 'compareAttribute'=>'cg_inicio2','operator'=>'>','message'=>CrugeTranslator::t("La FECHA FIN debe ser mayor a la FECHA INICIO")),
			array('cg_fin3', 'compare', 'compareAttribute'=>'cg_inicio3','operator'=>'>','message'=>CrugeTranslator::t("La FECHA FIN debe ser mayor a la FECHA INICIO")),
			array('cg_fin4', 'compare', 'compareAttribute'=>'cg_inicio4','operator'=>'>','message'=>CrugeTranslator::t("La FECHA FIN debe ser mayor a la FECHA INICIO")),
			array('cg_fin5', 'compare', 'compareAttribute'=>'cg_inicio5','operator'=>'>','message'=>CrugeTranslator::t("La FECHA FIN debe ser mayor a la FECHA INICIO")),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('pro_idProyecto, cg_inicio1, cg_fin1, cg_inicio2, cg_fin2, cg_inicio3, cg_fin3, cg_inicio4, cg_fin4, cg_inicio5, cg_fin5', 'safe'),
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
			'cg_inicio1' => 'Cg Inicio1',
			'cg_fin1' => 'Cg Fin1',
			'cg_inicio2' => 'Cg Inicio2',
			'cg_fin2' => 'Cg Fin2',
			'cg_inicio3' => 'Cg Inicio3',
			'cg_fin3' => 'Cg Fin3',
			'cg_inicio4' => 'Cg Inicio4',
			'cg_fin4' => 'Cg Fin4',
			'cg_inicio5' => 'Cg Inicio5',
			'cg_fin5' => 'Cg Fin5',
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
		$criteria->compare('cg_inicio1',$this->cg_inicio1,true);
		$criteria->compare('cg_fin1',$this->cg_fin1,true);
		$criteria->compare('cg_inicio2',$this->cg_inicio2,true);
		$criteria->compare('cg_fin2',$this->cg_fin2,true);
		$criteria->compare('cg_inicio3',$this->cg_inicio3,true);
		$criteria->compare('cg_fin3',$this->cg_fin3,true);
		$criteria->compare('cg_inicio4',$this->cg_inicio4,true);
		$criteria->compare('cg_fin4',$this->cg_fin4,true);
		$criteria->compare('cg_inicio5',$this->cg_inicio5,true);
		$criteria->compare('cg_fin5',$this->cg_fin5,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Cartagantt the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
