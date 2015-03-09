<?php
/* @var $this ConvocatoriaController */
/* @var $model Convocatoria */

$this->breadcrumbs=array(
	'Convocatorias'=>array('index'),
	$model->con_id,
);

$this->menu=array(
	array('label'=>'Convocatorias', 'url'=>array('admin')),
	array('label'=>'Encuestas a Excel', 'url'=>array('view','id'=>$model->con_id,'encuestas'=>1)),
	array('label'=>'Alumnos a Excel', 'url'=>array('view','id'=>$model->con_id,'alumnos'=>1)),
);
?>

<h1>Convocatoria <?php echo $model->con_semestre; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'con_inicio',
		'con_fin',
	),
)); ?>

<br>
<br>

<h1>Actividades</h1>
<?php 

if(count($actividades)==0){
	echo "No hay actividades";
}
else{
	$this->widget('zii.widgets.grid.CGridView', array(
		'id'=>'actividades-grid',
		'dataProvider'=>$actividades->searchConvocatoria($model->con_semestre),
		'filter'=>$actividades,
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
			 		'label'=>'Encuesta', 
			 		'url'=>"CHtml::normalizeUrl(array('viewEncuestas','id'=>\$data->act_id))",
			 		'imageUrl'=>Yii::app()->request->baseUrl.'/images/encuesta.jpg', 
			 		),
 			),
			),
		),
	));
}



?>



<h1>Alumnos Inscritos</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'alumno-grid',
	'dataProvider'=>$alumnos->searchConvocatoria($model->con_semestre),
	'filter'=>$alumnos,
	'columns'=>array(
		'al_rut',
		'al_nombre',
		'al_paterno',
		'al_materno',
		'al_email',
		'al_telefono',
		'al_carrera',
		'al_campus',
		'al_estado',
		/*
		'al_clave',
		'al_comentario',
		'al_email2',
		*/
		array(
			'class'=>'CButtonColumn',
			'template' => '{view}',
			'buttons'=>array(
			 	'view' => array(
			 		'label'=>'Ver', 
			 		'url'=>"CHtml::normalizeUrl(array('alumno/view','id'=>\$data->al_rut))",
   					),
			),
		),
	),
)); ?>


<h1>Proyectos</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'proyecto-grid',
	'dataProvider'=>$proyectos->searchConvocatoria($model->con_semestre),
	'filter'=>$proyectos,
	'columns'=>array(
		'pro_titulo',
		'pro_ambito',
		//'pro_objetivoGeneral',
		'pro_profeNombre',
		'pro_emNombre',
		
		/*
		'pro_duracion',
		'pro_emContacto',
		'pro_emTelefono',
		'emEmail',
		'pro_profeEmail',
		'pro_profeTelefono',
		'pro_dirEscuela',
		'pro_vBEscuela',
		'pro_aporteValorado',
		'pro_aportePecuniario',
		'pro_resumenEjecutivo',
		'pro_descripcionEmpresa',
		'pro_definicionProblema',
		'pro_solucionPropuesta',
		'pro_estadoArte',
		'pro_metodologia',
		*/
		array(
			'class'=>'CButtonColumn',
			'template' => '{view} {pdf}',
			'buttons'=>array(
			 	'pdf' => array(
			 		'label'=>'Generar PDF', 
			 		'url'=>"CHtml::normalizeUrl(array('proyecto/pdf','id'=>\$data->pro_idProyecto))",
			 		'imageUrl'=>Yii::app()->request->baseUrl.'/images/pdf_icon.gif', 
			 		'options' => array('class'=>'pdf'),
   					),
		),
	),
))); ?>

