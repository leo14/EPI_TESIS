<?php
/* @var $this CursoController */
/* @var $model Curso */

$this->menu=array(
	array('label'=>'Crear Curso', 'url'=>array('create')),
	array('label'=>'Cursos', 'url'=>array('index')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#curso-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Cursos</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'curso-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'cu_nombre',
		'cu_creador',
		'cu_info',
		'con_semestre',
		'cu_campus',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
