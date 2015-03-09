<?php
/* @var $this ComentarioController */
/* @var $data Comentario */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('co_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->co_id), array('view', 'id'=>$data->co_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cu_id')); ?>:</b>
	<?php echo CHtml::encode($data->cu_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('co_texto')); ?>:</b>
	<?php echo CHtml::encode($data->co_texto); ?>
	<br />


</div>