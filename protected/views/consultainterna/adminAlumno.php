<?php
/* @var $this ConsultainternaController */
/* @var $model Consultainterna */

$this->menu=array(
	array('label'=>'Nueva', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#consultainterna-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Consultas</h1>


<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'consultainterna-grid',
	'dataProvider'=>$model->searchAlumno(),
	'filter'=>$model,
	'columns'=>array(
		'coni_consulta',
		'coni_fecha',
		'coni_respuesta',
		'coni_fechaRespuesta',
		
		array(
			'class'=>'CButtonColumn',
			'template' => '{view}',
		),
	),
)); ?>
