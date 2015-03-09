<?php
/* @var $this ConvocatoriaController */
/* @var $model Convocatoria */

$this->breadcrumbs=array(
	'Convocatorias'=>array('index'),
	$model->con_id=>array('view','id'=>$model->con_id),
	'Update',
);

$this->menu=array(
	array('label'=>'Convocatorias', 'url'=>array('admin')),
);
?>

<h1>Modificar Convocatoria <?php echo $model->con_semestre; ?></h1>

<?php $this->renderPartial('_formModificar', array('model'=>$model)); ?>