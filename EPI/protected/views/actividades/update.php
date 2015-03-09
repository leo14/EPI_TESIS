<?php
/* @var $this ActividadesController */
/* @var $model Actividades */


$this->menu=array(
	array('label'=>'Actividades', 'url'=>array('admin')),
);
?>

<h1>Editar Actividad</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>