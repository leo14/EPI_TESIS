<?php
/* @var $this EncuestaactividadController */
/* @var $data Encuestaactividad */
?>

<div class="view">

	<?php if ($data->en_estado==1) {
	 ?>
	<b><?php echo CHtml::encode($data->getAttributeLabel('en_tipo')); ?>:</b>
	<?php echo CHtml::encode($data->en_tipo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('en_pregunta1')); ?>:</b>
	<?php echo CHtml::encode($data->en_pregunta1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('en_pregunta2')); ?>:</b>
	<?php echo CHtml::encode($data->en_pregunta2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('en_pregunta3')); ?>:</b>
	<?php echo CHtml::encode($data->en_pregunta3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('en_pregunta4')); ?>:</b>
	<?php echo CHtml::encode($data->en_pregunta4); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('en_comentario')); ?>:</b>
	<?php echo CHtml::encode($data->en_comentario); ?>
	<br />
	<?php 
	} ?>

	<?php if ($data->en_estado==0) {
	 ?>
	<b><?php echo CHtml::encode($data->getAttributeLabel('al_rut')); ?>:</b>
	<?php echo CHtml::encode($data->al_rut); ?>
	<br />
	
	
	<?php 
	} ?>



</div>