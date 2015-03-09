<?php
/* @var $this ConvocatoriaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Convocatorias',
);

$this->menu=array(
	array('label'=>'Create Convocatoria', 'url'=>array('create')),
	array('label'=>'Manage Convocatoria', 'url'=>array('admin')),
);
?>

<h1>Convocatorias</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
