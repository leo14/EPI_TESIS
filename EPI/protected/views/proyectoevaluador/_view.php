<?php
/* @var $this ProyectoevaluadorController */
/* @var $data Proyectoevaluador */
?>

<div class="view">

	<b><?php //echo CHtml::encode($data->getAttributeLabel('pre_id')); ?>:</b>
	<?php //echo CHtml::link(CHtml::encode($data->pre_id), array('view', 'id'=>$data->pre_id)); ?>
	<br />

	<b><?php //echo CHtml::encode($data->getAttributeLabel('pro_idProyecto')); ?>:</b>
	<?php //echo CHtml::encode($data->pro_idProyecto); ?>
	<br />

	<b><?php echo CHtml::encode($data->ev_pro->getAttributeLabel('pro_titulo')); ?>:</b>
	<?php echo CHtml::encode($data->ev_pro->pro_titulo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pro_idProyecto')); ?>:</b>
	<?php echo CHtml::encode($data->pro_idProyecto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ev_rut')); ?>:</b>
	<?php echo CHtml::encode($data->ev_rut); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pre_nota')); ?>:</b>
	<?php echo CHtml::encode($data->pre_nota); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pre_comentario')); ?>:</b>
	<?php echo CHtml::encode($data->pre_comentario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pre_estadoPostulacion')); ?>:</b>
	<?php echo CHtml::encode($data->pre_estadoPostulacion); ?>
	<br />

	<b><?php //echo CHtml::encode($data->getAttributeLabel('pre_estadoEvaluacion')); ?>:</b>
	<?php// echo CHtml::encode($data->pre_estadoEvaluacion); ?>
	<br />


</div>