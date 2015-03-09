<?php
/* @var $this AlumnoController */
/* @var $model Alumno */

$this->breadcrumbs=array(
	'Alumnos'=>array('index'),
	$model->al_rut,
);

$this->menu=array(
	array('label'=>'Alumnos inscritos', 'url'=>array('admin')),
);
?>

<h1>Alumno Rut <?php echo $model->al_rut; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'al_nombre',
		'al_paterno',
		'al_materno',
		'al_carrera',
		'al_campus',
		'al_email',
		'al_email2',
		'al_telefono',
		'con_semestre',
		'al_comentario',
		'al_estado',
	),
)); ?>
