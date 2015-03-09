<?php
/* @var $this EvaluadoresController */
/* @var $model Evaluadores */

$this->menu=array(
	array('label'=>'Agregar Evaluador', 'url'=>array('create')),
	array('label'=>'Administrar Evaluadores', 'url'=>array('admin')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#evaluadores-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Evaluadores Inactivos</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'evaluadores-grid',
	'dataProvider'=>$model->search2(),
	'filter'=>$model,
	'columns'=>array(
		'ev_rut',
		'ev_email',
		'ev_nombre',
		'ev_clave',
		'ev_estado',
		array(
			'class'=>'CButtonColumn',
			'template' => '{activar}',
			'buttons'=>array(
			 	'activar' => array(
			 		'label'=>'Activar Evaluador', 
			 		'url'=>"CHtml::normalizeUrl(array('activar','id'=>\$data->ev_rut))",
			 		'imageUrl'=>Yii::app()->request->baseUrl.'/images/tick.gif', 
			 		'options' => array('class'=>'Activar'),
   					),
 			),
		),
	),
)); ?>
