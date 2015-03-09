<?php
/* @var $this ObjetivosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Objetivoses',
);

$this->menu=array(
	array('label'=>'Create Objetivos', 'url'=>array('create')),
	array('label'=>'Manage Objetivos', 'url'=>array('admin')),
);
?>

<h1>Objetivoses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
