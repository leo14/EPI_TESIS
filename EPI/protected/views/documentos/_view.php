<?php
/* @var $this DocumentosController */
/* @var $data Documentos */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('doc_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->doc_id), array('view', 'id'=>$data->doc_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cu_id')); ?>:</b>
	<?php echo CHtml::encode($data->cu_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('doc_fecha')); ?>:</b>
	<?php echo CHtml::encode($data->doc_fecha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('doc_nombre')); ?>:</b>
	<?php echo CHtml::encode($data->doc_nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('doc_tipo')); ?>:</b>
	<?php echo CHtml::encode($data->doc_tipo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('doc_link')); ?>:</b>
	<?php echo CHtml::encode($data->doc_link); ?>
	<br />


</div>