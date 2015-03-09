<?php
/* @var $this ConvocatoriaController */
/* @var $model Convocatoria */

$this->breadcrumbs=array(
	'Convocatorias'=>array('index'),
	'Create',
);


if (count(Convocatoria::model()->findAll())>0) {
$this->menu=array(
	array('label'=>'Administar Convocatorias', 'url'=>array('admin')),
);
}

?>
<h1>Crear Nueva Convocatoria</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>