<?php
/* @var $this ActividadesController */
/* @var $dataProvider CActiveDataProvider */
?>

<h1>Actividades</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
