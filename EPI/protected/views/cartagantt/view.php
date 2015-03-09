<?php
/* @var $this CartaganttController */
/* @var $model Cartagantt */

$this->breadcrumbs=array(
	'Cartagantts'=>array('index'),
	$model->pro_idProyecto,
);

$this->menu=array(
	array('label'=>'List Cartagantt', 'url'=>array('index')),
	array('label'=>'Create Cartagantt', 'url'=>array('create')),
	array('label'=>'Update Cartagantt', 'url'=>array('update', 'id'=>$model->pro_idProyecto)),
	array('label'=>'Delete Cartagantt', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->pro_idProyecto),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Cartagantt', 'url'=>array('admin')),
);
?>

<h1>View Cartagantt #<?php echo $model->pro_idProyecto; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'pro_idProyecto',
		'cg_inicio1',
		'cg_fin1',
		'cg_inicio2',
		'cg_fin2',
		'cg_inicio3',
		'cg_fin3',
		'cg_inicio4',
		'cg_fin4',
		'cg_inicio5',
		'cg_fin5',
	),
)); ?>
