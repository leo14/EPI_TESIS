<?php
/* @var $this EvaluadoresController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Evaluadores',
);

$this->menu=array(
	array('label'=>'Create Evaluadores', 'url'=>array('create')),
	array('label'=>'Manage Evaluadores', 'url'=>array('admin')),
);
?>

<h1>Evaluadores</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
