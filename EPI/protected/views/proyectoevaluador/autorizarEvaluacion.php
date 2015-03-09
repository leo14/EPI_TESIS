<?php
/* @var $this ProyectoevaluadorController */
/* @var $model Proyectoevaluador */

$idev = $model->pro_idProyecto;
$model2 = Proyecto::model()->find('pro_idProyecto='.$idev.'');
$nombre = $model2->pro_titulo;

$this->breadcrumbs=array(
	'Proyectoevaluadors'=>array('index'),
	$model->pre_id=>array('view','id'=>$model->pre_id),
	'Update',
);

$this->menu=array(
	//array('label'=>'Ver Evaluaciones Asignadas', 'url'=>array('adminEvaluador')),
);
?>

<h1>Verificar Evaluación Proyecto [<?php echo $nombre; ?>]</h1>

<?php $this->renderPartial('_formAutorizar', array('model'=>$model)); ?>