<?php
/* @var $this AlumnoController */
/* @var $model Alumno */

$this->breadcrumbs=array(
	'Alumnos'=>array('index'),
	$model->al_rut=>array('view','id'=>$model->al_rut),
	'Update',
);

$this->menu=array(
	array('label'=>'List Alumno', 'url'=>array('index')),
	array('label'=>'Create Alumno', 'url'=>array('create')),
	array('label'=>'View Alumno', 'url'=>array('view', 'id'=>$model->al_rut)),
	array('label'=>'Manage Alumno', 'url'=>array('admin')),
);
?>

<h1>Update Alumno <?php echo $model->al_rut; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>