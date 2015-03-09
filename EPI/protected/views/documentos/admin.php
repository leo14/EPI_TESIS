<?php
/* @var $this DocumentosController */
/* @var $model Documentos */

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#documentos-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Documentos</h1>


<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'documentos-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'doc_fecha',
		'doc_nombre',
		'doc_tipo',
		array(
			'class'=>'CButtonColumn',
			'template' => '{delete}',
		),
	),
)); ?>
