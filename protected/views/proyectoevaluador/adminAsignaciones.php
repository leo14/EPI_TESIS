<?php
/* @var $this ProyectoevaluadorController */
/* @var $model Proyectoevaluador */

$this->menu=array(
	array('label'=>'Asignar Evaluador', 'url'=>array('proyecto/adminProyectos')),
	array('label'=>'Administrar Evaluadores', 'url'=>array('evaluadores/admin')),
);

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

<h1>Asignaciones de Evaluadores</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'proyectoevaluador-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'pro_idProyecto',
		array('name'=>'titulo','header'=>'TÍTULO PROYECTO','value'=>'$data->ev_pro->pro_titulo'),
		'ev_rut',
	//array('name'=>'titulo','header'=>'TÍTULO PROYECTO','value'=>'$data->ev_pro->pro_titulo',
	//'type'=>'text',),
		//'pre_nota',
		//'pre_comentario',
		//'pre_estadoPostulacion',
		//'pre_estadoEvaluacion',
	
		array(
			'class'=>'CButtonColumn',
			'template' => '{delete}',
			'buttons'=>array(
               	'delete' => array(
			 		'label'=>'Eliminar Asignación', 
			 		),
			 	),
		),
	),
)); ?>
