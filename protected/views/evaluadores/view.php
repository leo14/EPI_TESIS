<?php
/* @var $this EvaluadoresController */
/* @var $model Evaluadores */

$this->breadcrumbs=array(
	'Evaluadores'=>array('index'),
	$model->ev_rut,
);

$this->menu=array(
	array('label'=>'List Evaluadores', 'url'=>array('index')),
	array('label'=>'Create Evaluadores', 'url'=>array('create')),
	array('label'=>'Update Evaluadores', 'url'=>array('update', 'id'=>$model->ev_rut)),
	array('label'=>'Delete Evaluadores', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ev_rut),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Evaluadores', 'url'=>array('admin')),
);
?>

<h1>View Evaluadores #<?php echo $model->ev_rut; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ev_rut',
		'ev_email',
		'ev_nombre',
		'ev_clave',
		'ev_estado',
	),
)); ?>
