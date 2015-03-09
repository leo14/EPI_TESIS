<?php
/* @var $this DocumentosController */
/* @var $model Documentos */

$this->breadcrumbs=array(
	'Documentoses'=>array('index'),
	$model->doc_id=>array('view','id'=>$model->doc_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Documentos', 'url'=>array('index')),
	array('label'=>'Create Documentos', 'url'=>array('create')),
	array('label'=>'View Documentos', 'url'=>array('view', 'id'=>$model->doc_id)),
	array('label'=>'Manage Documentos', 'url'=>array('admin')),
);
?>

<h1>Update Documentos <?php echo $model->doc_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>