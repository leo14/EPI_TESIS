<?php
/* @var $this ConvocatoriaController */
/* @var $model Convocatoria */

$this->breadcrumbs=array(
	'Convocatorias'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Crear Convocatoria', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#convocatoria-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Convocatorias</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'convocatoria-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'con_id',
		'con_semestre',
		'con_inicio',
		'con_fin',
		//'con_estado',
		array(
			'class'=>'CButtonColumn',
			'template' => '{update}{view}',
			'buttons'=>array(
			 	'update' => array(
			 		'label'=>'Modificar Convocatoria', 
			 		'url'=>"CHtml::normalizeUrl(array('update','id'=>\$data->con_id))",
			 		),
 			),
		),
	),
)); ?>
