<?php
/* @var $this ProyectoController */
/* @var $model Proyecto */


if(Yii::app()->user->checkAccess('alumno')&&!Yii::app()->user->isSuperAdmin){

	//si el alumno tiene un proyecto
	if(count(Alumnoproyecto::model()->find("al_rut='".Yii::app()->user->name."'"))>0){

		$this->menu=array(
			array('label'=>'Editar', 'url'=>array('update', 'id'=>Alumnoproyecto::model()->find("al_rut='".Yii::app()->user->name."'")->pro_idProyecto)),
		);
	}

	//si el alumno no tiene un proyecto
	if(count(Alumnoproyecto::model()->find("al_rut='".Yii::app()->user->name."'"))<=0){

		$this->menu=array(
		array('label'=>'Crear proyecto', 'url'=>array('create')),
		);
	}
}


Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#proyecto-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Proyecto</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'proyecto-grid',
	'dataProvider'=>$model->searchAlumno(),
	'filter'=>$model,
	'columns'=>array(
		'pro_titulo',
		'pro_ambito',
		'pro_emNombre',
		'pro_emContacto',
		'pro_profeNombre',
		/*
		'pro_emTelefono',
		'emEmail',
		'pro_profeEmail',
		'pro_profeTelefono',
		'pro_dirEscuela',
		'pro_vBEscuela',
		'pro_aporteValorado',
		'pro_aportePecuniario',
		'pro_resumenEjecutivo',
		'pro_descripcionEmpresa',
		'pro_definicionProblema',
		'pro_solucionPropuesta',
		'pro_estadoArte',
		'pro_objetivoGeneral',
		'pro_metodologia',
		*/
		array(
			'class'=>'CButtonColumn',
			'template' => '{view}',
		),
	),
)); ?>
