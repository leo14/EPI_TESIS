<?php
/* @var $this CartaganttController */
/* @var $model Cartagantt */

$this->breadcrumbs=array(
	'Cartagantts'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Cartagantt', 'url'=>array('index')),
	array('label'=>'Manage Cartagantt', 'url'=>array('admin')),
);
?>

<h1>Create Cartagantt</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>