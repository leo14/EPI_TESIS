<?php
/* @var $this AlumnoController */
/* @var $data Alumno */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('al_rut')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->al_rut), array('view', 'id'=>$data->al_rut)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('al_nombre')); ?>:</b>
	<?php echo CHtml::encode($data->al_nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('al_carrera')); ?>:</b>
	<?php echo CHtml::encode($data->al_carrera); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('al_email')); ?>:</b>
	<?php echo CHtml::encode($data->al_email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('al_telefono')); ?>:</b>
	<?php echo CHtml::encode($data->al_telefono); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('al_comentario')); ?>:</b>
	<?php echo CHtml::encode($data->al_comentario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('al_clave')); ?>:</b>
	<?php echo CHtml::encode($data->al_clave); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('al_paterno')); ?>:</b>
	<?php echo CHtml::encode($data->al_paterno); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('al_materno')); ?>:</b>
	<?php echo CHtml::encode($data->al_materno); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('al_campus')); ?>:</b>
	<?php echo CHtml::encode($data->al_campus); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('al_email2')); ?>:</b>
	<?php echo CHtml::encode($data->al_email2); ?>
	<br />

	?>

</div>