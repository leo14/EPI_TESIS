<?php
/* @var $this ProyectoController */
/* @var $model Proyecto */

if(Yii::app()->user->checkAccess('alumno')&&!Yii::app()->user->isSuperAdmin){

	//si el alumno tiene un proyecto
	if(count(Alumnoproyecto::model()->find("al_rut='".Yii::app()->user->name."'"))>0){

		$this->menu=array(
			array('label'=>'Proyecto', 'url'=>array('admin')),
		);
	}

	//si el alumno no tiene un proyecto
	if(count(Alumnoproyecto::model()->find("al_rut='".Yii::app()->user->name."'"))<=0){
	}
}


?>

<h1>Crear proyecto</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>