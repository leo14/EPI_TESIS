<?php
/* @var $this CartaganttController */
/* @var $model Cartagantt */

$this->breadcrumbs=array(
	'Cartagantts'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Cartagantt', 'url'=>array('index')),
	array('label'=>'Create Cartagantt', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#cartagantt-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Cartagantts</h1>

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
	'id'=>'cartagantt-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'pro_idProyecto',
		'cg_inicio1',
		'cg_fin1',
		'cg_inicio2',
		'cg_fin2',
		'cg_inicio3',
		/*
		'cg_fin3',
		'cg_inicio4',
		'cg_fin4',
		'cg_inicio5',
		'cg_fin5',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
