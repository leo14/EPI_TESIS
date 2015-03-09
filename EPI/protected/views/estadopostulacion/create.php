<?php
/* @var $this EstadopostulacionController */
/* @var $model Estadopostulacion */

$this->breadcrumbs=array(
	'Estadopostulacions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Estadopostulacion', 'url'=>array('index')),
	array('label'=>'Manage Estadopostulacion', 'url'=>array('admin')),
);
?>

<h1>Create Estadopostulacion</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>