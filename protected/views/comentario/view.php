<?php
/* @var $this ComentarioController */
/* @var $model Comentario */

$this->breadcrumbs=array(
	'Comentarios'=>array('index'),
	$model->co_id,
);

$this->menu=array(
	array('label'=>'List Comentario', 'url'=>array('index')),
	array('label'=>'Create Comentario', 'url'=>array('create')),
	array('label'=>'Update Comentario', 'url'=>array('update', 'id'=>$model->co_id)),
	array('label'=>'Delete Comentario', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->co_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Comentario', 'url'=>array('admin')),
);
?>

<h1>View Comentario #<?php echo $model->co_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'co_id',
		'cu_id',
		'co_texto',
	),
)); ?>
