<?php
/* @var $this ConsultaController */
/* @var $data Consulta */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('con_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->con_id), array('view', 'id'=>$data->con_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('con_consulta')); ?>:</b>
	<?php echo CHtml::encode($data->con_consulta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('con_email')); ?>:</b>
	<?php echo CHtml::encode($data->con_email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('con_telefono')); ?>:</b>
	<?php echo CHtml::encode($data->con_telefono); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('con_fecha')); ?>:</b>
	<?php echo CHtml::encode($data->con_fecha); ?>
	<br />


</div>