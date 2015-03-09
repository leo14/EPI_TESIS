<?php
/* @var $this ConsultaController */
/* @var $model Consulta */

$this->menu=array(
	array('label'=>'Consultas', 'url'=>array('admin')),
);
?>

<h1>Consulta </h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'con_consulta',
		'con_email',
		'con_telefono',
		'con_fecha',
	),
)); ?>
