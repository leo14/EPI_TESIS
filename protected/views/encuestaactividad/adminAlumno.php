<?php
/* @var $this EncuestaactividadController */
/* @var $model Encuestaactividad */

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

<h1>Encuestas Sin Responder</h1>


<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'encuestaactividad-grid',
	'dataProvider'=>$model->searchAlumno(),
	'filter'=>$model,
	'filterPosition'=>'none',
	'columns'=>array(
		'Actividad.act_nombre',
		'en_tipo',
		/*
		'en_pregunta1',
		'en_pregunta2',
		'en_pregunta3',
		'en_pregunta4',
		'en_comentario',
		*/
		array(
			'class'=>'CButtonColumn',
			'template' => '{update}',
		),
	),
)); ?>


