<?php
/* @var $this ObjetivosController */
/* @var $model Objetivos */

$this->breadcrumbs=array(
	'Objetivoses'=>array('index'),
	$model->pro_idProyecto,
);

$this->menu=array(
	array('label'=>'List Objetivos', 'url'=>array('index')),
	array('label'=>'Create Objetivos', 'url'=>array('create')),
	array('label'=>'Update Objetivos', 'url'=>array('update', 'id'=>$model->pro_idProyecto)),
	array('label'=>'Delete Objetivos', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->pro_idProyecto),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Objetivos', 'url'=>array('admin')),
);
?>

<h1>View Objetivos #<?php echo $model->pro_idProyecto; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'pro_idProyecto',
		'ob_objetivo1',
		'ob_objetivo2',
		'ob_objetivo3',
		'ob_objetivo4',
		'ob_objetivo5',
		'ob_resultado1',
		'ob_resultado2',
		'ob_resultado3',
		'ob_resultado4',
		'ob_resultado5',
		'ob_actividades1',
		'ob_actividades2',
		'ob_actividades3',
		'ob_actividades4',
		'ob_actividades5',
	),
)); ?>
