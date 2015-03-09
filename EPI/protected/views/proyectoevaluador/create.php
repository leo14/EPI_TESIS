<?php
/* @var $this ProyectoevaluadorController */
/* @var $model Proyectoevaluador */

$this->breadcrumbs=array(
	'Proyectoevaluadors'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Administrar Evaluaciones', 'url'=>array('admin')),
);
?>

<h1>Asignar Evaluador</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>