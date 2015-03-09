<?php
/* @var $this EncuestaactividadController */
/* @var $model Encuestaactividad */

$this->breadcrumbs=array(
	'Encuestaactividads'=>array('index'),
	$model->en_id=>array('view','id'=>$model->en_id),
	'Update',
);

$this->menu=array(
	array('label'=>'Encuestas', 'url'=>array('admin')),
);
?>

<?php 
 $actividad=Actividades::model()->find("act_id=".$model->act_id);
 ?>
<h1>Encuesta <?php echo $actividad->act_nombre; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>