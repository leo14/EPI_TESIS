<?php
/* @var $this AlumnoproyectoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Alumnoproyectos',
);

$this->menu=array(
	array('label'=>'Create Alumnoproyecto', 'url'=>array('create')),
	array('label'=>'Manage Alumnoproyecto', 'url'=>array('admin')),
);
?>

<h1>Alumnoproyectos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
