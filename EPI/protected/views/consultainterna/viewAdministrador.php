<?php
/* @var $this ConsultainternaController */
/* @var $model Consultainterna */

$this->breadcrumbs=array(
	'Consultainternas'=>array('index'),
	$model->coni_id,
);

$this->menu=array(
	array('label'=>'Consultas', 'url'=>array('admin')),
);
?>

<h1>Consulta</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'coni_consulta',
		'coni_fecha',
		'coni_respuesta',
		'coni_fechaRespuesta',
	),
)); ?>
