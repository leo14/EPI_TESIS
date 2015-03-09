<?php
/* @var $this CartaganttController */
/* @var $data Cartagantt */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('pro_idProyecto')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->pro_idProyecto), array('view', 'id'=>$data->pro_idProyecto)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cg_inicio1')); ?>:</b>
	<?php echo CHtml::encode($data->cg_inicio1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cg_fin1')); ?>:</b>
	<?php echo CHtml::encode($data->cg_fin1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cg_inicio2')); ?>:</b>
	<?php echo CHtml::encode($data->cg_inicio2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cg_fin2')); ?>:</b>
	<?php echo CHtml::encode($data->cg_fin2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cg_inicio3')); ?>:</b>
	<?php echo CHtml::encode($data->cg_inicio3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cg_fin3')); ?>:</b>
	<?php echo CHtml::encode($data->cg_fin3); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('cg_inicio4')); ?>:</b>
	<?php echo CHtml::encode($data->cg_inicio4); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cg_fin4')); ?>:</b>
	<?php echo CHtml::encode($data->cg_fin4); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cg_inicio5')); ?>:</b>
	<?php echo CHtml::encode($data->cg_inicio5); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cg_fin5')); ?>:</b>
	<?php echo CHtml::encode($data->cg_fin5); ?>
	<br />

	*/ ?>

</div>