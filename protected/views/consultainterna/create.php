<?php
/* @var $this ConsultainternaController */
/* @var $model Consultainterna */

$this->menu=array(
	array('label'=>'Ver Respuestas', 'url'=>array('admin')),
);
?>

<h1>Crear Consulta</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>