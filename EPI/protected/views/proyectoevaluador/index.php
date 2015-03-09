<?php
/* @var $this ProyectoevaluadorController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Proyectoevaluadors',
);

$this->menu=array(
	array('label'=>'Create Proyectoevaluador', 'url'=>array('create')),
	array('label'=>'Manage Proyectoevaluador', 'url'=>array('admin')),
);
?>

<h1>Proyectoevaluadors</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
