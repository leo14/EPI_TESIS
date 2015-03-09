<?php
/* @var $this ObjetivosController */
/* @var $model Objetivos */

$this->breadcrumbs=array(
	'Objetivoses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Objetivos', 'url'=>array('index')),
	array('label'=>'Manage Objetivos', 'url'=>array('admin')),
);
?>

<h1>Create Objetivos</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>