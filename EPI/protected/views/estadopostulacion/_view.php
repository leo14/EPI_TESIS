<?php
/* @var $this EstadopostulacionController */
/* @var $data Estadopostulacion */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('al_rut')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->al_rut), array('view', 'id'=>$data->al_rut)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('espos_inscripcion')); ?>:</b>
	<?php echo CHtml::encode($data->espos_inscripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('espos_informeInnovacion')); ?>:</b>
	<?php echo CHtml::encode($data->espos_informeInnovacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('espos_anexo2')); ?>:</b>
	<?php echo CHtml::encode($data->espos_anexo2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('espos_cartaEmpresa')); ?>:</b>
	<?php echo CHtml::encode($data->espos_cartaEmpresa); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('espos_prehallasgo')); ?>:</b>
	<?php echo CHtml::encode($data->espos_prehallasgo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('espos_copiaCarnet')); ?>:</b>
	<?php echo CHtml::encode($data->espos_copiaCarnet); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('espos_alumnoRegular')); ?>:</b>
	<?php echo CHtml::encode($data->espos_alumnoRegular); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('espos_curriculum')); ?>:</b>
	<?php echo CHtml::encode($data->espos_curriculum); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('espos_informeFinal')); ?>:</b>
	<?php echo CHtml::encode($data->espos_informeFinal); ?>
	<br />

	

</div>