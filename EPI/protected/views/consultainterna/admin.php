<?php
/* @var $this ConsultainternaController */
/* @var $model Consultainterna */


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

<h1>Consultas Internas No Respondidas</h1>


<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'consultainterna-grid',
	'dataProvider'=>$model->searchAdministrador(),
	'filter'=>$model,
	'columns'=>array(
		'coni_consulta',
		'coni_telefono',
		'coni_email',
		'coni_fecha',
		array(
			'class'=>'CButtonColumn',
			'template' => '{responder}',
			'buttons'=>array(
			 	'responder' => array(
			 		'label'=>'Responder', 
			 		'url'=>"CHtml::normalizeUrl(array('update','id'=>\$data->coni_id))",
			 		'imageUrl'=>Yii::app()->request->baseUrl.'/images/tick.gif', 
			 		'options' => array('class'=>'Delete'),
   					),
 			),
		),
	),
)); ?>
