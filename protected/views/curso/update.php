<?php
/* @var $this CursoController */
/* @var $model Curso */

$this->menu=array(
	array('label'=>'Cursos', 'url'=>array('index')),
	array('label'=>'Crear Curso', 'url'=>array('create')),
	array('label'=>'Ver Curso', 'url'=>array('view', 'id'=>$model->cu_id)),
	array('label'=>'Admistrar Cursos', 'url'=>array('admin')),
);
?>

<h1>Actualizar</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>