<?php
/* @var $this NoticiaController */
/* @var $model Noticia */


$this->menu=array(
	array('label'=>'Ver Noticias', 'url'=>array('admin')),
);
?>

<h1>Crear Noticia</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>