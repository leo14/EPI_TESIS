<?php
/* @var $this CartaganttController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Cartagantts',
);

$this->menu=array(
	array('label'=>'Create Cartagantt', 'url'=>array('create')),
	array('label'=>'Manage Cartagantt', 'url'=>array('admin')),
);
?>

<h1>Cartagantts</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
