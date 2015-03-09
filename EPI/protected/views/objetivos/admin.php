<?php
/* @var $this ObjetivosController */
/* @var $model Objetivos */

$this->breadcrumbs=array(
	'Objetivoses'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Objetivos', 'url'=>array('index')),
	array('label'=>'Create Objetivos', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#objetivos-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Objetivoses</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'objetivos-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'pro_idProyecto',
		'ob_objetivo1',
		'ob_objetivo2',
		'ob_objetivo3',
		'ob_objetivo4',
		'ob_objetivo5',
		/*
		'ob_resultado1',
		'ob_resultado2',
		'ob_resultado3',
		'ob_resultado4',
		'ob_resultado5',
		'ob_actividades1',
		'ob_actividades2',
		'ob_actividades3',
		'ob_actividades4',
		'ob_actividades5',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
