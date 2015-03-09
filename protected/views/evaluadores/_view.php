<?php
/* @var $this EvaluadoresController */
/* @var $data Evaluadores */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ev_rut')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ev_rut), array('view', 'id'=>$data->ev_rut)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ev_email')); ?>:</b>
	<?php echo CHtml::encode($data->ev_email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ev_nombre')); ?>:</b>
	<?php echo CHtml::encode($data->ev_nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ev_clave')); ?>:</b>
	<?php echo CHtml::encode($data->ev_clave); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ev_estado')); ?>:</b>
	<?php echo CHtml::encode($data->ev_estado); ?>
	<br />


</div>