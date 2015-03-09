<?php
/* @var $this ActividadesController */
/* @var $model Actividades */

$this->breadcrumbs=array(
	'Actividades'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Crear Encuesta', 'url'=>array('encuestaactividad/create')),
	array('label'=>'Pasar a Excel Concepción', 'url'=>array('adminEncuestas','excel1'=>2)),
	array('label'=>'Pasar a Excel Chillán', 'url'=>array('adminEncuestas','excel2'=>2)),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#actividades-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Actividades Concepción</h1>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'actividades-grid',
	'dataProvider'=>$model->searchConce(),
	'filter'=>$model,
	'columns'=>array(
		//'con_semestre',
		'act_nombre',
		'act_campus',
		'act_fecha',
		'act_horaInicio',
		'act_horaFin',
		'act_lugar',
		'act_descripcion',
		
		array(
			'class'=>'CButtonColumn',
			'template' => '{view}{Detalle}',
			'buttons'=>array(
			 	'view' => array(
			 		'label'=>'Resultado Encuesta', 
			 		'url'=>"CHtml::normalizeUrl(array('viewEncuestas','id'=>\$data->act_id))",
			 		'imageUrl'=>Yii::app()->request->baseUrl.'/images/encuesta.jpg', 
			 		),
			 	'Detalle' => array(
			 		'label'=>'Detalle', 
			 		'url'=>"CHtml::normalizeUrl(array('encuestaactividad/adminEncuestas','id'=>\$data->act_id))",
			 		),
 			),
		),
	),
)); ?>

<br><br><br>
<h1>Actividades Chillán</h1>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'actividades-grid',
	'dataProvider'=>$model->searchChillan(),
	'filter'=>$model,
	'columns'=>array(
		//'con_semestre',
		'act_nombre',
		'act_campus',
		'act_fecha',
		'act_horaInicio',
		'act_horaFin',
		'act_lugar',
		'act_descripcion',
		
		array(
			'class'=>'CButtonColumn',
			'template' => '{view}',
			'buttons'=>array(
			 	'view' => array(
			 		'label'=>'Resultado Encuesta', 
			 		'url'=>"CHtml::normalizeUrl(array('viewEncuestas','id'=>\$data->act_id))",
			 		'imageUrl'=>Yii::app()->request->baseUrl.'/images/encuesta.jpg', 
			 		),
 			),
		),
	),
)); ?>
