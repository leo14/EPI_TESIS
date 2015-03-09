<?php
/* @var $this EncuestaactividadController */
/* @var $model Encuestaactividad */

$this->menu=array(
	array('label'=>'Encuestas Respondidas', 'url'=>array('admin')),
);
?>

<h1>Crear Encuesta</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>