<?php
/* @var $this EvaluadoresController */
/* @var $model Evaluadores */

$this->menu=array(
	array('label'=>'Agregar Evaluador', 'url'=>array('create')),
	array('label'=>'Asignar Evaluador', 'url'=>array('proyecto/adminProyectos')),
	array('label'=>'Evaluadores Inactivos', 'url'=>array('adminInactivos')),
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

<h1>Evaluadores Registrados</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'evaluadores-grid',
	'dataProvider'=>$model->search1(),
	'filter'=>$model,
	'columns'=>array(
		'ev_rut',
		'ev_email',
		'ev_nombre',
		'ev_clave',
		'ev_estado',
		array(
			'class'=>'CButtonColumn',
			'template' => '{delete}',
			'buttons'=>array(
			 	'delete' => array(
			 		'label'=>'Desactivar Evaluador', 
			 		'url'=>"CHtml::normalizeUrl(array('delete','id'=>\$data->ev_rut))",
			 		'imageUrl'=>Yii::app()->request->baseUrl.'/images/cross.gif', 
			 		'options' => array('class'=>'Delete'),
   					),
 			),
		),
	),
)); ?>
