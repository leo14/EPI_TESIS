<?php
/* @var $this ActividadesController */
/* @var $model Actividades */


$this->menu=array(
	array('label'=>'Nueva', 'url'=>array('create')),
	array('label'=>'Editar', 'url'=>array('update', 'id'=>$model->act_id)),
	array('label'=>'Eliminar', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->act_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Actividades', 'url'=>array('admin')),
);
?>

<h1><?php echo $model->act_nombre; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'con_semestre',
		'act_campus',
		'act_fecha',
		'act_horaInicio',
		'act_horaFin',
		'act_lugar',
		'act_descripcion',
	),
)); ?>
