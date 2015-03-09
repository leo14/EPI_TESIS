<?php

/**
 * This is the model class for table "estadopostulacion".
 *
 * The followings are the available columns in table 'estadopostulacion':
 * @property string $al_rut
 * @property integer $espos_inscripcion
 * @property integer $espos_informeInnovacion
 * @property integer $espos_anexo2
 * @property integer $espos_cartaEmpresa
 * @property integer $espos_prehallasgo
 * @property integer $espos_copiaCarnet
 * @property integer $espos_alumnoRegular
 * @property integer $espos_curriculum
 * @property integer $espos_informeFinal
 */
class Estadopostulacion extends CActiveRecord
{
	public $titulo;
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'estadopostulacion';
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
			// array('espos_informeInnovacion', 'file','types'=>'jpg, png,txt,pdf,doc,docx'),

			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('pro_idProyecto, espos_inscripcion, espos_anexo2, espos_cartaEmpresa, espos_prehallasgo, espos_copiaCarnet, espos_alumnoRegular, espos_curriculum, espos_informeFinal', 'safe', 'on'=>'search'),
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
			'es_pro' => array(self::BELONGS_TO, 'Proyecto', 'pro_idProyecto'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'pro_idProyecto' => 'ID PROYECTO',
			'espos_inscripcion' => 'INSCRIPCIÓN',
			'espos_anexo2' => 'PROYECTO',
			'espos_cartaEmpresa' => 'CARTA EMPRESA',
			'espos_prehallasgo' => 'PREHALLAZGO',
			'espos_copiaCarnet' => 'COPIA CARNET',
			'espos_alumnoRegular' => 'ALUMNO REGULAR',
			'espos_curriculum' => 'CURRÍCULUM',
			'espos_informeFinal' => 'INFORME FINAL',
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
	public function searchConce()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$convocatoria = Convocatoria::model()->find("con_estado=1")->con_semestre;
		$alumnos=Alumno::model()->findAll("con_semestre='".$convocatoria."' AND al_campus='Concepción'");
		$cantidad=0;

		$criteria=new CDbCriteria;

		$condicion='';

		for ($i=0; $i < count($alumnos); $i++) { 
 			$proyecto = Alumnoproyecto::model()->findAll("al_rut='".$alumnos[$i]->al_rut."'");
 			if (count($proyecto)>0){
 			$estado = $proyecto = Estadopostulacion::model()->findAll("pro_idProyecto='".$proyecto[0]->pro_idProyecto."'");
 		//echo $proyecto[0]->pro_idProyecto." ";
			if($cantidad>=1){
				$condicion=$condicion.' or ';		
				}
			$condicion=$condicion."pro_idProyecto=".$estado[0]->pro_idProyecto;
			$cantidad++;
			}
		}
		if(count($proyecto)==0){
			$condicion='';
		}

		$criteria->addCondition($condicion);
		$criteria->compare('pro_idProyecto',$this->pro_idProyecto,true);
		$criteria->compare('espos_inscripcion',$this->espos_inscripcion);
		$criteria->compare('espos_anexo2',$this->espos_anexo2);
		$criteria->compare('espos_cartaEmpresa',$this->espos_cartaEmpresa);
		$criteria->compare('espos_prehallasgo',$this->espos_prehallasgo);
		$criteria->compare('espos_copiaCarnet',$this->espos_copiaCarnet);
		$criteria->compare('espos_alumnoRegular',$this->espos_alumnoRegular);
		$criteria->compare('espos_curriculum',$this->espos_curriculum);
		$criteria->compare('espos_informeFinal',$this->espos_informeFinal);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

		public function searchChillan()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$convocatoria = Convocatoria::model()->find("con_estado=1")->con_semestre;
		$alumnos=Alumno::model()->findAll("con_semestre='".$convocatoria."' AND al_campus='Chillán'");
		$cantidad=0;

		$criteria=new CDbCriteria;

		$condicion='';

		for ($i=0; $i < count($alumnos); $i++) { 
 			$proyecto = Alumnoproyecto::model()->findAll("al_rut='".$alumnos[$i]->al_rut."'");
 			if (count($proyecto)>0){
 			$estado = $proyecto = Estadopostulacion::model()->findAll("pro_idProyecto='".$proyecto[0]->pro_idProyecto."'");
 		//echo $proyecto[0]->pro_idProyecto." ";
			if($cantidad>=1){
				$condicion=$condicion.' or ';		
				}
			$condicion=$condicion."pro_idProyecto=".$estado[0]->pro_idProyecto;
			$cantidad++;
			}
		}
		if(count($proyecto)==0){
			$condicion='';
		}

		$criteria->addCondition($condicion);
		$criteria->compare('pro_idProyecto',$this->pro_idProyecto,true);
		$criteria->compare('espos_inscripcion',$this->espos_inscripcion);
		$criteria->compare('espos_anexo2',$this->espos_anexo2);
		$criteria->compare('espos_cartaEmpresa',$this->espos_cartaEmpresa);
		$criteria->compare('espos_prehallasgo',$this->espos_prehallasgo);
		$criteria->compare('espos_copiaCarnet',$this->espos_copiaCarnet);
		$criteria->compare('espos_alumnoRegular',$this->espos_alumnoRegular);
		$criteria->compare('espos_curriculum',$this->espos_curriculum);
		$criteria->compare('espos_informeFinal',$this->espos_informeFinal);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

		public function searchAlumno()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$proyecto=Alumnoproyecto::model()->find("al_rut='".Yii::app()->user->name."'");


		$criteria->addCondition($proyecto);
		$criteria->compare('pro_idProyecto',$this->pro_idProyecto,true);
		$criteria->compare('espos_inscripcion',$this->espos_inscripcion);
		$criteria->compare('espos_anexo2',$this->espos_anexo2);
		$criteria->compare('espos_cartaEmpresa',$this->espos_cartaEmpresa);
		$criteria->compare('espos_prehallasgo',$this->espos_prehallasgo);
		$criteria->compare('espos_copiaCarnet',$this->espos_copiaCarnet);
		$criteria->compare('espos_alumnoRegular',$this->espos_alumnoRegular);
		$criteria->compare('espos_curriculum',$this->espos_curriculum);
		$criteria->compare('espos_informeFinal',$this->espos_informeFinal);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Estadopostulacion the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
