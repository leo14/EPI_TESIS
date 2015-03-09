<?php
/* @var $this ComentarioController */
/* @var $model Comentario */

$this->breadcrumbs=array(
	'Comentarios'=>array('index'),
	$model->co_id=>array('view','id'=>$model->co_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Comentario', 'url'=>array('index')),
	array('label'=>'Create Comentario', 'url'=>array('create')),
	array('label'=>'View Comentario', 'url'=>array('view', 'id'=>$model->co_id)),
	array('label'=>'Manage Comentario', 'url'=>array('admin')),
);
?>

<h1>Update Comentario <?php echo $model->co_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>