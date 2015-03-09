<?php
/* @var $this CursoController */
/* @var $model Curso */

$this->menu=array(
	array('label'=>'List Curso', 'url'=>array('index')),
	array('label'=>'Manage Curso', 'url'=>array('admin')),
);
?>

<h1>Curso</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>