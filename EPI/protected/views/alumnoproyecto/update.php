<?php
/* @var $this AlumnoproyectoController */
/* @var $model Alumnoproyecto */

$this->breadcrumbs=array(
	'Alumnoproyectos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Alumnoproyecto', 'url'=>array('index')),
	array('label'=>'Create Alumnoproyecto', 'url'=>array('create')),
	array('label'=>'View Alumnoproyecto', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Alumnoproyecto', 'url'=>array('admin')),
);
?>

<h1>Update Alumnoproyecto <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>