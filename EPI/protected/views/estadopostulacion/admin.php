<?php
/* @var $this EstadopostulacionController */
/* @var $model Estadopostulacion */

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#estadopostulacion-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Estado postulaciones - Concepción</h1>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'estadopostulacion-grid',
	'dataProvider'=>$model->searchConce(),
	'filter'=>$model,
	'columns'=>array(
		//'pro_idProyecto',
		array('name'=>'titulo','header'=>'TÍTULO PROYECTO','value'=>'$data->es_pro->pro_titulo'),
		'espos_anexo2',
		'espos_cartaEmpresa',
		'espos_prehallasgo',
		/*
		'espos_copiaCarnet',
		'espos_alumnoRegular',
		'espos_curriculum',
		'espos_informeFinal',
		*/
		array(
			'class'=>'CButtonColumn',
			'template' => '{view}',
		),
	),
)); ?>

<br><br><br>
<h1>Estado postulaciones - Chillán</h1>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'estadopostulacion-grid',
	'dataProvider'=>$model->searchChillan(),
	'filter'=>$model,
	'columns'=>array(
		//'pro_idProyecto',
		array('name'=>'titulo','header'=>'TÍTULO PROYECTO','value'=>'$data->es_pro->pro_titulo'),
		'espos_anexo2',
		'espos_cartaEmpresa',
		'espos_prehallasgo',
		/*
		'espos_copiaCarnet',
		'espos_alumnoRegular',
		'espos_curriculum',
		'espos_informeFinal',
		*/
		array(
			'class'=>'CButtonColumn',
			'template' => '{view}',
		),
	),
)); ?>
