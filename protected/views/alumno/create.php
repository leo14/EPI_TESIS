<?php
/* @var $this AlumnoController */
/* @var $model Alumno */

// $this->breadcrumbs=array(
// 	'Alumnos'=>array('index'),
// 	'Create',
// );

// $this->menu=array(
// 	array('label'=>'List Alumno', 'url'=>array('index')),
// 	array('label'=>'Manage Alumno', 'url'=>array('admin')),
// );
?>

<!-- <h1>Create Alumno</h1> -->

<div id="inscripcionIzquierda">
	<?php $this->renderPartial('_form', array('model'=>$model)); ?>
</div>