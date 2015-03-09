<?php
/* @var $this ConsultaController */
/* @var $model Consulta */




Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#consulta-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
<h1>Consultas No Respondidas</h1>


<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'consulta-grid',
	'dataProvider'=>$model->search1(),
	'filter'=>$model,
	'columns'=>array(
		'con_consulta',
		'con_email',
		'con_telefono',
		'con_fecha',
		array(
			'class'=>'CButtonColumn',
			'template' => '{delete}',
			'buttons'=>array(
			 	'delete' => array(
			 		'label'=>'Respondida', 
			 		'url'=>"CHtml::normalizeUrl(array('delete','id'=>\$data->con_id))",
			 		'imageUrl'=>Yii::app()->request->baseUrl.'/images/tick.gif', 
			 		'options' => array('class'=>'Delete'),
   					),
 			),
		),
	),
)); ?>
