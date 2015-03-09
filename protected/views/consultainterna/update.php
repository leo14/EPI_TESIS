<?php
/* @var $this ConsultainternaController */
/* @var $model Consultainterna */

$this->breadcrumbs=array(
	'Consultainternas'=>array('index'),
	$model->coni_id=>array('view','id'=>$model->coni_id),
	'Update',
);

$this->menu=array(
	array('label'=>'Consultas', 'url'=>array('admin')),
);
?>

<h1>Responder Consulta</h1>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>