<?php
/* @var $this EncuestaactividadController */
/* @var $model Encuestaactividad */

$this->breadcrumbs=array(
	'Encuestaactividads'=>array('index'),
	$model->en_id,
);

$this->menu=array(
	array('label'=>'Crear Encuesta', 'url'=>array('create')),
	array('label'=>'Encuestas respondidas', 'url'=>array('admin')),
);
?>
<!-- obtener nombre -->

<?php 
 $actividad=Actividades::model()->find("act_id=".$model->act_id);
 ?>
<h1>Encuesta <?php echo $actividad->act_nombre; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'al_rut',
		'en_convocatoria',
		'act_id',
		'en_tipo',
		'en_pregunta1',
		'en_pregunta2',
		'en_pregunta3',
		'en_pregunta4',
		'en_comentario',
	),
)); ?>
