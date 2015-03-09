<?php
/* @var $this CartaganttController */
/* @var $model Cartagantt */

$this->breadcrumbs=array(
	'Cartagantts'=>array('index'),
	$model->pro_idProyecto=>array('view','id'=>$model->pro_idProyecto),
	'Update',
);

$this->menu=array(
	array('label'=>'Actualizar Objetivos', 'url'=>array('objetivos/update', 'id'=>$model->pro_idProyecto)),
	array('label'=>'Actualizar Proyecto', 'url'=>array('proyecto/update', 'id'=>$model->pro_idProyecto)),
);
?>

<?php  
$nombreProyecto=Proyecto::model()->find("pro_idProyecto=".$model->pro_idProyecto)->pro_titulo;
?>
<h1>Editar proyecto: <?php echo $nombreProyecto; ?></h1>
<h3>Planificación para alcanzar los objetivos específicos</h3>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>