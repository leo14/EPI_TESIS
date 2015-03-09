<?php
/* @var $this EvaluadoresController */
/* @var $model Evaluadores */

$this->breadcrumbs=array(
	'Evaluadores'=>array('index'),
	$model->ev_rut=>array('view','id'=>$model->ev_rut),
	'Update',
);

$this->menu=array(
	array('label'=>'Agregar Evaluadores', 'url'=>array('create')),
	array('label'=>'Administrar Evaluadores', 'url'=>array('admin')),
);
?>

<h1>Modificar Evaluador <?php echo $model->ev_rut; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>