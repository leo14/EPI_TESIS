<?php

/**
 * This is the model class for table "proyectoevaluador".
 *
 * The followings are the available columns in table 'proyectoevaluador':
 * @property integer $pre_id
 * @property integer $pro_idProyecto
 * @property string $ev_rut
 * @property integer $pre_nota
 * @property string $pre_comentario
 * @property string $pre_estadoPostulacion
 * @property string $pre_estadoEvaluacion
 */
class Proyectoevaluador extends CActiveRecord
{
		public $titulo;
		public $rut;
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'proyectoevaluador';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('pro_idProyecto, ev_rut', 'required'),
			array('pre_nota1, pre_nota2, pre_nota3, pre_nota4, pre_nota5, pre_nota6, pre_nota7, ev_rut', 'required', 'on'=>'evaluador'),
			array('pro_idProyecto', 'unique'),
			array('pre_comentario','comentario'),
			array('pre_estadoPostulacion','estadopostulacion'),
			array('pre_nota1', 'numerical', 'integerOnly'=>true,'min'=>1, 'max'=>5),
			array('pre_nota2', 'numerical', 'integerOnly'=>true,'min'=>1, 'max'=>5),
			array('pre_nota3', 'numerical', 'integerOnly'=>true,'min'=>1, 'max'=>5),
			array('pre_nota4', 'numerical', 'integerOnly'=>true,'min'=>1, 'max'=>5),
			array('pre_nota5', 'numerical', 'integerOnly'=>true,'min'=>1, 'max'=>5),
			array('pre_nota6', 'numerical', 'integerOnly'=>true,'min'=>1, 'max'=>5),
			array('pre_nota7', 'numerical', 'integerOnly'=>true,'min'=>1, 'max'=>5),
			array('ev_rut', 'length', 'max'=>15),
			array('pre_estadoPostulacion', 'length', 'min'=>8, 'max'=>50),
			array('pre_comentario,pre_nota', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('pre_id, pro_idProyecto, ev_rut, pre_nota1, pre_nota2, pre_nota3, pre_nota4, pre_nota5, pre_nota6, pre_nota7, pre_notaFinal, pre_comentario, pre_estadoPostulacion, pre_estadoEvaluacion', 'safe', 'on'=>'search'),
			array('titulo', 'safe', 'on'=>'search'),
		);
	}

		public function comentario ($attribute, $param){
			if ((Yii::app()->user->checkAccess('evaluador')&&!Yii::app()->user->isSuperAdmin)
				||($this->pre_estadoEvaluacion=="No"))
			{
				if ($this->pre_comentario==null)
			$this->addError($attribute, 'El COMENTARIO no puede ser nulo');	
			}		
	}

		public function estadopostulacion ($attribute, $param){
			if (Yii::app()->user->checkAccess('evaluador')&&!Yii::app()->user->isSuperAdmin){
				if ($this->pre_estadoPostulacion==null)
			$this->addError($attribute, 'El ESTADO DE POSTULACIÓN no puede ser nulo');	
			}		
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'ev_pro' => array(self::BELONGS_TO, 'Proyecto', 'pro_idProyecto'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'pre_id' => 'Pre',
			'pro_idProyecto' => 'ID PROYECTO',
			'ev_rut' => 'RUT EVALUADOR',
			'pre_nota1' => 'DEFINICIÓN DEL PROBLEMA U OPORTUNIDAD',
			'pre_nota2' => 'SOLUCIÓN INNOVADORA PROPUESTA',
			'pre_nota3' => 'ANÁLISIS DEL ESTADO DEL ARTE',
			'pre_nota4' => 'OBJETIVOS GENERALES Y ESPECÍFICOS',
			'pre_nota5' => 'RESULTADOS ESPERADOS E INDICADORES',
			'pre_nota6' => 'METODOLOGÍA Y PLAN DE TRABAJO',
			'pre_nota7' => 'MULTIDISCIPLINARIA',
			'pre_notaFinal' => 'NOTA FINAL',
			'pre_comentario' => 'COMENTARIO',
			'pre_estadoPostulacion' => 'ESTADO POSTULACIÓN',
			'pre_estadoEvaluacion' => 'AUTORIZACIÓN EVALUACIÓN',
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

		$convocatoria=Convocatoria::model()->find("con_estado=1")->con_semestre;
		$alumnos=Alumno::model()->findAll("con_semestre='".$convocatoria."' AND al_campus='Concepción'");

		$criteria=new CDbCriteria;
		$condicion='';
		$cantidad=0;

		if(count($alumnos)!=0){

		for ($i=0; $i < count($alumnos); $i++) { 
 			$proyecto = Alumnoproyecto::model()->findAll("al_rut='".$alumnos[$i]->al_rut."'");
 			if (count($proyecto)>0){
 			$evaluacion = $proyecto = Proyectoevaluador::model()->findAll("pro_idProyecto='".$proyecto[0]->pro_idProyecto."'");
 		//echo $proyectos[0]->pro_idProyecto." ";
 			if (count($evaluacion)==0)
 				$condicion='';
 			else{
			if($cantidad>=1){
				$condicion=$condicion.' or ';		
				}
			$condicion=$condicion."pro_idProyecto=".$evaluacion[0]->pro_idProyecto;
			$cantidad++;
				}
			}
		}
		if(count($proyecto)==0)
			$condicion='0';
		}
		else $condicion='0';

		$criteria->addCondition($condicion);
		$criteria->compare('pre_id',$this->pre_id);
		$criteria->compare('pro_idProyecto',$this->pro_idProyecto);
		$criteria->compare('pro_titulo',$this->titulo,true);
		$criteria->compare('ev_rut',$this->ev_rut,true);
		$criteria->compare('pre_nota1',$this->pre_nota1);
		$criteria->compare('pre_nota2',$this->pre_nota2);
		$criteria->compare('pre_nota3',$this->pre_nota3);
		$criteria->compare('pre_nota4',$this->pre_nota4);
		$criteria->compare('pre_nota5',$this->pre_nota5);
		$criteria->compare('pre_nota6',$this->pre_nota6);
		$criteria->compare('pre_nota7',$this->pre_nota7);
		$criteria->compare('pre_notaFinal',$this->pre_notaFinal);
		$criteria->compare('pre_comentario',$this->pre_comentario,true);
		$criteria->compare('pre_estadoPostulacion',$this->pre_estadoPostulacion,true);
		$criteria->compare('pre_estadoEvaluacion',$this->pre_estadoEvaluacion,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

		public function searchChillan()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$convocatoria=Convocatoria::model()->find("con_estado=1")->con_semestre;
		$alumnos=Alumno::model()->findAll("con_semestre='".$convocatoria."' AND al_campus='Chillán'");

		$criteria=new CDbCriteria;
		$condicion='';

		if(count($alumnos)!=0){

		for ($i=0; $i < count($alumnos); $i++) { 
 			$proyecto = Alumnoproyecto::model()->findAll("al_rut='".$alumnos[$i]->al_rut."'");
 			if (count($proyecto)>0){
 			$evaluacion = $proyecto = Proyectoevaluador::model()->findAll("pro_idProyecto='".$proyecto[0]->pro_idProyecto."'");
 		//echo $proyectos[0]->pro_idProyecto." ";
 			if (count($evaluacion)==0)
 				$condicion='';
 			else{
			if($i>0){
				$condicion=$condicion.' or ';		
				}
			$condicion=$condicion."pro_idProyecto=".$evaluacion[0]->pro_idProyecto;
				}
			}
		}
		if(count($proyecto)==0)
			$condicion='0';
		}
		else $condicion='0';

		$criteria->addCondition($condicion);
		$criteria->compare('pre_id',$this->pre_id);
		$criteria->compare('pro_idProyecto',$this->pro_idProyecto);
		$criteria->compare('pro_titulo',$this->titulo,true);
		$criteria->compare('ev_rut',$this->ev_rut,true);
		$criteria->compare('pre_nota1',$this->pre_nota1);
		$criteria->compare('pre_nota2',$this->pre_nota2);
		$criteria->compare('pre_nota3',$this->pre_nota3);
		$criteria->compare('pre_nota4',$this->pre_nota4);
		$criteria->compare('pre_nota5',$this->pre_nota5);
		$criteria->compare('pre_nota6',$this->pre_nota6);
		$criteria->compare('pre_nota7',$this->pre_nota7);
		$criteria->compare('pre_notaFinal',$this->pre_notaFinal);
		$criteria->compare('pre_comentario',$this->pre_comentario,true);
		$criteria->compare('pre_estadoPostulacion',$this->pre_estadoPostulacion,true);
		$criteria->compare('pre_estadoEvaluacion',$this->pre_estadoEvaluacion,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public function search1()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$convocatoria=Convocatoria::model()->find("con_estado=1")->con_semestre;
		$alumnos=Alumno::model()->findAll("con_semestre='".$convocatoria."'");

		$condicion='';
		$cantidad=0;

		if(count($alumnos)!=0){

		for ($i=0; $i < count($alumnos); $i++) { 
 			$proyecto = Alumnoproyecto::model()->findAll("al_rut='".$alumnos[$i]->al_rut."'");
 			//si el alumno tiene un proyecto
			if(count($proyecto)>0){
 			$evaluacion = $proyecto = Proyectoevaluador::model()->findAll("pro_idProyecto='".$proyecto[0]->pro_idProyecto."'");
 		//echo $proyectos[0]->pro_idProyecto." ";

			
			//para que no se le ponga "or" al principio ni al final  
			if($cantidad>=1){
				$condicion=$condicion." or ";		
			}
				$condicion=$condicion."pro_idProyecto=".$evaluacion[0]->pro_idProyecto;
				$cantidad++;
			}
		}
		if(count($proyecto)==0)
			$condicion='';
		}
		else $condicion='0';

		$rut = Yii::app()->user->name;
		$criteria->addCondition($condicion);
		$criteria->addCondition("ev_rut='$rut'");
		$criteria->compare('pre_id',$this->pre_id);
		$criteria->compare('pro_idProyecto',$this->pro_idProyecto);
		$criteria->compare('ev_rut',$this->ev_rut,true);
		$criteria->compare('pre_nota1',$this->pre_nota1);
		$criteria->compare('pre_nota2',$this->pre_nota2);
		$criteria->compare('pre_nota3',$this->pre_nota3);
		$criteria->compare('pre_nota4',$this->pre_nota4);
		$criteria->compare('pre_nota5',$this->pre_nota5);
		$criteria->compare('pre_nota6',$this->pre_nota6);
		$criteria->compare('pre_nota7',$this->pre_nota7);
		$criteria->compare('pre_notaFinal',$this->pre_notaFinal);
		$criteria->compare('pre_comentario',$this->pre_comentario,true);
		$criteria->compare('pre_estadoPostulacion',$this->pre_estadoPostulacion,true);
		$criteria->compare('pre_estadoEvaluacion',$this->pre_estadoEvaluacion,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

		public function search2()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$model=Alumnoproyecto::model()->findAll("al_rut='".Yii::app()->user->name."'");
		$proyecto = $model[0]->pro_idProyecto;

		$criteria->addCondition("pro_idProyecto=$proyecto");
		$criteria->addCondition("pre_estadoEvaluacion='Si'");
		$criteria->compare('pre_id',$this->pre_id);
		$criteria->compare('pro_idProyecto',$this->pro_idProyecto);
		$criteria->compare('ev_rut',$this->ev_rut,true);
		$criteria->compare('pre_nota1',$this->pre_nota1);
		$criteria->compare('pre_nota2',$this->pre_nota2);
		$criteria->compare('pre_nota3',$this->pre_nota3);
		$criteria->compare('pre_nota4',$this->pre_nota4);
		$criteria->compare('pre_nota5',$this->pre_nota5);
		$criteria->compare('pre_nota6',$this->pre_nota6);
		$criteria->compare('pre_nota7',$this->pre_nota7);
		$criteria->compare('pre_notaFinal',$this->pre_notaFinal);
		$criteria->compare('pre_comentario',$this->pre_comentario,true);
		$criteria->compare('pre_estadoPostulacion',$this->pre_estadoPostulacion,true);
		$criteria->compare('pre_estadoEvaluacion',$this->pre_estadoEvaluacion,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

			public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;
		$criteria->compare('pre_id',$this->pre_id);
		$criteria->compare('pro_idProyecto',$this->pro_idProyecto);
		$criteria->compare('ev_rut',$this->ev_rut,true);
		$criteria->compare('pre_nota1',$this->pre_nota1);
		$criteria->compare('pre_nota2',$this->pre_nota2);
		$criteria->compare('pre_nota3',$this->pre_nota3);
		$criteria->compare('pre_nota4',$this->pre_nota4);
		$criteria->compare('pre_nota5',$this->pre_nota5);
		$criteria->compare('pre_nota6',$this->pre_nota6);
		$criteria->compare('pre_nota7',$this->pre_nota7);
		$criteria->compare('pre_notaFinal',$this->pre_notaFinal);
		$criteria->compare('pre_comentario',$this->pre_comentario,true);
		$criteria->compare('pre_estadoPostulacion',$this->pre_estadoPostulacion,true);
		$criteria->compare('pre_estadoEvaluacion',$this->pre_estadoEvaluacion,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Proyectoevaluador the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function getDatos ($pro_idProyecto, $dato){
		$proyectos = Proyecto::model()->findByPk($pro_idProyecto);
		if($proyectos===null)
			throw new CHttpException(404,'La página solicitada No existe.');	
		else if ($proyectos->$dato===null)
			return '';
		return $proyectos->$dato;
	}	
}
