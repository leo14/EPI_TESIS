<?php
/* @var $this NoticiaController */
/* @var $model Noticia */

$this->breadcrumbs=array(
	'Crear Noticia'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Nueva', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#noticia-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Noticias</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'noticia-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		// 'no_id',
		'no_titulo',
		'no_subtitulo',
		// 'no_cuerpo',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
