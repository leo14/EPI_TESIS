<?php
/* @var $this ProyectoevaluadorController */
/* @var $model Proyectoevaluador */
/*
$this->menu=array(
	array('label'=>'Asignar Evaluador', 'url'=>array('proyecto/adminProyectos')),
	array('label'=>'Administrar Evaluadores', 'url'=>array('evaluadores/admin')),
	array('label'=>'Administrar Asignaciones Evaluadores', 'url'=>array('proyectoevaluador/adminAsignaciones')),
);*/

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#proyectoevaluador-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Evaluación del Proyecto</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'proyectoevaluador-grid',
	'dataProvider'=>$model->search2(),
	'filter'=>$model,
	'columns'=>array(
		//'pro_idProyecto',
		//'ev_rut',
		array('name'=>'titulo','header'=>'TÍTULO PROYECTO','value'=>'$data->ev_pro->pro_titulo'),
		'pre_notaFinal',
		'pre_comentario',
		'pre_estadoPostulacion',
		//'pre_estadoEvaluacion',
				array(
			'class'=>'CButtonColumn',
			'template' => '{view}',
			'buttons'=>array(
               	'view' => array(
			 		'label'=>'Ver Detalle Evaluación', 
			 		),
			 	),
		),
	
	),
)); ?>
