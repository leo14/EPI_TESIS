<?php
/* @var $this ConsultainternaController */
/* @var $data Consultainterna */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('coni_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->coni_id), array('view', 'id'=>$data->coni_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('coni_consulta')); ?>:</b>
	<?php echo CHtml::encode($data->coni_consulta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('coni_telefono')); ?>:</b>
	<?php echo CHtml::encode($data->coni_telefono); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('coni_email')); ?>:</b>
	<?php echo CHtml::encode($data->coni_email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('coni_fecha')); ?>:</b>
	<?php echo CHtml::encode($data->coni_fecha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('coni_estado')); ?>:</b>
	<?php echo CHtml::encode($data->coni_estado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('coni_respuesta')); ?>:</b>
	<?php echo CHtml::encode($data->coni_respuesta); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('coni_fechaRespuesta')); ?>:</b>
	<?php echo CHtml::encode($data->coni_fechaRespuesta); ?>
	<br />

	*/ ?>

</div>