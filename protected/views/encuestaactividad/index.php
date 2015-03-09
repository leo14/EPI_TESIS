<?php
/* @var $this EncuestaactividadController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Encuestaactividads',
);

$this->menu=array(
	array('label'=>'Create Encuestaactividad', 'url'=>array('create')),
	array('label'=>'Manage Encuestaactividad', 'url'=>array('admin')),
);
?>

<h1>Encuestaactividads</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
