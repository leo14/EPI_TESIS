<?php
/* @var $this EstadopostulacionController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Estadopostulacions',
);

$this->menu=array(
	array('label'=>'Create Estadopostulacion', 'url'=>array('create')),
	array('label'=>'Manage Estadopostulacion', 'url'=>array('admin')),
);
?>

<h1>Estadopostulacions</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
