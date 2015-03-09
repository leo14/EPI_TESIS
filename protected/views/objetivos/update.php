<?php
/* @var $this ObjetivosController */
/* @var $model Objetivos */

$this->breadcrumbs=array(
	'Objetivoses'=>array('index'),
	$model->pro_idProyecto=>array('view','id'=>$model->pro_idProyecto),
	'Update',
);

$this->menu=array(
	array('label'=>'Actualizar Proyecto', 'url'=>array('proyecto/update', 'id'=>$model->pro_idProyecto)),
	array('label'=>'Actualizar Carta Gantt', 'url'=>array('cartagantt/update', 'id'=>$model->pro_idProyecto)),
);
?>

<?php  
$nombreProyecto=Proyecto::model()->find("pro_idProyecto=".$model->pro_idProyecto)->pro_titulo;
?>
<h1>Editar proyecto: <?php echo $nombreProyecto; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>