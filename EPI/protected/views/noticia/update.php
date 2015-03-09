<?php
/* @var $this NoticiaController */
/* @var $model Noticia */

$this->breadcrumbs=array(
	'Noticias'=>array('index'),
	$model->no_id=>array('view','id'=>$model->no_id),
	'Update',
);

$this->menu=array(
	array('label'=>'Nueva Noticia', 'url'=>array('create')),
	array('label'=>'Ver Noticias', 'url'=>array('admin')),
);
?>

<h1>Editar Noticia</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>