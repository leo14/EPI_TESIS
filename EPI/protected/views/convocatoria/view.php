<?php
/* @var $this ConvocatoriaController */
/* @var $model Convocatoria */

$this->breadcrumbs=array(
	'Convocatorias'=>array('index'),
	$model->con_id,
);

$this->menu=array(
	array('label'=>'List Convocatoria', 'url'=>array('index')),
	array('label'=>'Create Convocatoria', 'url'=>array('create')),
	array('label'=>'Update Convocatoria', 'url'=>array('update', 'id'=>$model->con_id)),
	array('label'=>'Delete Convocatoria', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->con_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Convocatoria', 'url'=>array('admin')),
);
?>

<h1>View Convocatoria #<?php echo $model->con_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'con_id',
		'con_semestre',
		'con_inicio',
		'con_fin',
		'con_estado',
	),
)); ?>
