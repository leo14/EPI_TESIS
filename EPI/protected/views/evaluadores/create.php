<?php
/* @var $this EvaluadoresController */
/* @var $model Evaluadores */


$this->menu=array(
	array('label'=>'Administar Evaluadores', 'url'=>array('admin')),
);
?>

<h1>Agregar Evaluador</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>