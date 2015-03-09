<?php
/* @var $this AlumnoproyectoController */
/* @var $data Alumnoproyecto */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('al_rut')); ?>:</b>
	<?php echo CHtml::encode($data->al_rut); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pro_idProyecto')); ?>:</b>
	<?php echo CHtml::encode($data->pro_idProyecto); ?>
	<br />


</div>