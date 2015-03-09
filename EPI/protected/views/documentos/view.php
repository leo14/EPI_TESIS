<?php
/* @var $this DocumentosController */
/* @var $model Documentos */

$this->breadcrumbs=array(
	'Documentoses'=>array('index'),
	$model->doc_id,
);

$this->menu=array(
	array('label'=>'List Documentos', 'url'=>array('index')),
	array('label'=>'Create Documentos', 'url'=>array('create')),
	array('label'=>'Update Documentos', 'url'=>array('update', 'id'=>$model->doc_id)),
	array('label'=>'Delete Documentos', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->doc_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Documentos', 'url'=>array('admin')),
);
?>

<h1>View Documentos #<?php echo $model->doc_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'doc_id',
		'cu_id',
		'doc_fecha',
		'doc_nombre',
		'doc_tipo',
		'doc_link',
	),
)); ?>
