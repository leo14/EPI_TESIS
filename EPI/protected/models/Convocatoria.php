<?php

/**
 * This is the model class for table "convocatoria".
 *
 * The followings are the available columns in table 'convocatoria':
 * @property integer $con_id
 * @property string $con_semestre
 * @property string $con_inicio
 * @property string $con_fin
 * @property integer $con_estado
 */
class Convocatoria extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'convocatoria';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('con_semestre, con_inicio, con_fin', 'required'),
			array('con_estado', 'numerical', 'integerOnly'=>true),
			array('con_semestre','match','pattern'=>'/^[0-9-]{6,6}$/',
              'message'=>CrugeTranslator::t("La CONVOCATORIA debe tener el formato '2015-1'")),
			array('con_semestre', 'length', 'min'=>6, 'max'=>6),
			array('con_semestre', 'validar'),
			array('con_inicio','compare','compareValue'=>date('Y-m-d'),'operator'=>'>=','on'=>'crear'),
			array('con_fin', 'compare', 'compareAttribute'=>'con_inicio','operator'=>'>','message'=>CrugeTranslator::t("La FECHA FIN debe ser mayor a la FECHA INICIO")),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('con_id, con_semestre, con_inicio, con_fin, con_estado', 'safe', 'on'=>'search'),
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
			'con_id' => 'Con',
			'con_semestre' => 'CONVOCATORIA',
			'con_inicio' => 'FECHA INICIO',
			'con_fin' => 'FECHA FIN',
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
		$criteria->compare('con_semestre',$this->con_semestre,true);
		$criteria->compare('con_inicio',$this->con_inicio,true);
		$criteria->compare('con_fin',$this->con_fin,true);
		$criteria->compare('con_estado',$this->con_estado);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Convocatoria the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function validar($attribute,$params){
		$rut = $this->con_semestre;

	        $AÑO = substr($rut, 0, 4);
	        $MES = substr($rut, -1);
	        //$GION = substr($rut, 4,1);
	        $FECHA = date('Y');

	   if ($AÑO < $FECHA)
	    		    $this->addError($attribute, 'El AÑO de la CONVOCATORIA debe ser mayor o igual al AÑO actual');

	   if ($AÑO > $FECHA+1)
	    		    $this->addError($attribute, 'El AÑO de la CONVOCATORIA debe ser el AÑO actual o el AÑO siguiente');

	   if ($MES != 1 && $MES!= 2)
	    		    $this->addError($attribute, 'El SEMESTRE de la CONVOCATORIA debe ser 1 ó 2');
	}

}
