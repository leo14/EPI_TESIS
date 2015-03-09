<?php
/* @var $this AlumnoproyectoController */
/* @var $model Alumnoproyecto */

$this->breadcrumbs=array(
	'Alumnoproyectos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Alumnoproyecto', 'url'=>array('index')),
	array('label'=>'Create Alumnoproyecto', 'url'=>array('create')),
	array('label'=>'Update Alumnoproyecto', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Alumnoproyecto', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Alumnoproyecto', 'url'=>array('admin')),
);
?>

<h1>View Alumnoproyecto #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'al_rut',
		'pro_idProyecto',
	),
)); ?>
