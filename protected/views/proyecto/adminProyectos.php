<?php
/* @var $this ProyectoController */
/* @var $model Proyecto */

$this->menu=array(
	array('label'=>'Evaluaciones de los Proyectos', 'url'=>array('proyectoevaluador/admin')),
);

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

<h1>Proyectos Sin Evaluador Asignado</h1>



<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'proyecto-grid',
	'dataProvider'=>$model->searchEvaluador(),
	'filter'=>$model,
	'columns'=>array(
		'pro_titulo',
		'pro_ambito',
		//'pro_objetivoGeneral',
		'pro_profeNombre',
		'pro_emNombre',

		array(
			'class'=>'CButtonColumn',
			'template' => '{asignar}',
			'buttons'=>array(
			 	'asignar' => array(
			 		'label'=>'Asignar Evaluador', 
			 		'url'=>"CHtml::normalizeUrl(array('proyectoevaluador/create','id'=>\$data->pro_idProyecto))",
			 		'imageUrl'=>Yii::app()->request->baseUrl.'/images/tick.gif', 
			 		'options' => array('class'=>'asignar'),
   					),
		),
	),
))); ?>
