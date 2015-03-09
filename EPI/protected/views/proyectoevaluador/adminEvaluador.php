<?php
/* @var $this ProyectoevaluadorController */
/* @var $model Proyectoevaluador */

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#proyectoevaluador-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Evaluaciones Asignadas</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'proyectoevaluador-grid',
	'dataProvider'=>$model->search1(),
	'filter'=>$model,
	'columns'=>array(
		//'pro_idProyecto',
		array('name'=>'titulo','header'=>'TÍTULO PROYECTO','value'=>'$data->ev_pro->pro_titulo'),
		//'ev_rut',
	//array('name'=>'titulo','header'=>'TÍTULO PROYECTO','value'=>'$data->ev_pro->pro_titulo',
	//'type'=>'text',),
		'pre_notaFinal',
		'pre_comentario',
		'pre_estadoPostulacion',
		//'pre_estadoEvaluacion',
	
		array(
			'class'=>'CButtonColumn',
			'template' => '{view} {pdf}',
			'buttons'=>array(
			 	'view' => array(
			 		'label'=>'Visualizar Proyecto', 
			 		'url'=>"CHtml::normalizeUrl(array('proyecto/view','id'=>\$data->pro_idProyecto))",
			 		'options' => array('class'=>'View'),
			 		),
			 	'pdf' => array(
			 		'label'=>'Generar PDF Proyecto', 
			 		'url'=>"CHtml::normalizeUrl(array('proyecto/pdf','id'=>\$data->pro_idProyecto))",
			 		'imageUrl'=>Yii::app()->request->baseUrl.'/images/pdf_icon.gif', 
			 		'options' => array('class'=>'pdf'),
   					),
			 	),
		),
	),
)); ?>
