<?php
/* @var $this ObjetivosController */
/* @var $data Objetivos */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('pro_idProyecto')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->pro_idProyecto), array('view', 'id'=>$data->pro_idProyecto)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ob_objetivo1')); ?>:</b>
	<?php echo CHtml::encode($data->ob_objetivo1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ob_objetivo2')); ?>:</b>
	<?php echo CHtml::encode($data->ob_objetivo2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ob_objetivo3')); ?>:</b>
	<?php echo CHtml::encode($data->ob_objetivo3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ob_objetivo4')); ?>:</b>
	<?php echo CHtml::encode($data->ob_objetivo4); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ob_objetivo5')); ?>:</b>
	<?php echo CHtml::encode($data->ob_objetivo5); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ob_resultado1')); ?>:</b>
	<?php echo CHtml::encode($data->ob_resultado1); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('ob_resultado2')); ?>:</b>
	<?php echo CHtml::encode($data->ob_resultado2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ob_resultado3')); ?>:</b>
	<?php echo CHtml::encode($data->ob_resultado3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ob_resultado4')); ?>:</b>
	<?php echo CHtml::encode($data->ob_resultado4); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ob_resultado5')); ?>:</b>
	<?php echo CHtml::encode($data->ob_resultado5); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ob_actividades1')); ?>:</b>
	<?php echo CHtml::encode($data->ob_actividades1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ob_actividades2')); ?>:</b>
	<?php echo CHtml::encode($data->ob_actividades2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ob_actividades3')); ?>:</b>
	<?php echo CHtml::encode($data->ob_actividades3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ob_actividades4')); ?>:</b>
	<?php echo CHtml::encode($data->ob_actividades4); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ob_actividades5')); ?>:</b>
	<?php echo CHtml::encode($data->ob_actividades5); ?>
	<br />

	*/ ?>

</div>