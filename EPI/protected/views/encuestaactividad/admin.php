<?php
/* @var $this EncuestaactividadController */
/* @var $model Encuestaactividad */

$this->menu=array(
	array('label'=>'Pasar a Excel', 'url'=>array('adminEncuestas','id'=>$id,'excel'=>1)),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#encuestaactividad-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Encuestas <?php echo $id; ?></h1>



<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
