<?php
/* @var $this ConvocatoriaController */
/* @var $data Convocatoria */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('con_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->con_id), array('view', 'id'=>$data->con_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('con_semestre')); ?>:</b>
	<?php echo CHtml::encode($data->con_semestre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('con_inicio')); ?>:</b>
	<?php echo CHtml::encode($data->con_inicio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('con_fin')); ?>:</b>
	<?php echo CHtml::encode($data->con_fin); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('con_estado')); ?>:</b>
	<?php echo CHtml::encode($data->con_estado); ?>
	<br />


</div>