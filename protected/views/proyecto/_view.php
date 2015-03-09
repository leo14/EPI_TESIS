<?php
/* @var $this ProyectoController */
/* @var $data Proyecto */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('pro_idProyecto')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->pro_idProyecto), array('view', 'id'=>$data->pro_idProyecto)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pro_titulo')); ?>:</b>
	<?php echo CHtml::encode($data->pro_titulo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pro_duracion')); ?>:</b>
	<?php echo CHtml::encode($data->pro_duracion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pro_ambito')); ?>:</b>
	<?php echo CHtml::encode($data->pro_ambito); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pro_emNombre')); ?>:</b>
	<?php echo CHtml::encode($data->pro_emNombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pro_emContacto')); ?>:</b>
	<?php echo CHtml::encode($data->pro_emContacto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pro_emTelefono')); ?>:</b>
	<?php echo CHtml::encode($data->pro_emTelefono); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('emEmail')); ?>:</b>
	<?php echo CHtml::encode($data->emEmail); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pro_profeNombre')); ?>:</b>
	<?php echo CHtml::encode($data->pro_profeNombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pro_profeEmail')); ?>:</b>
	<?php echo CHtml::encode($data->pro_profeEmail); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pro_profeTelefono')); ?>:</b>
	<?php echo CHtml::encode($data->pro_profeTelefono); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pro_dirEscuela')); ?>:</b>
	<?php echo CHtml::encode($data->pro_dirEscuela); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pro_vBEscuela')); ?>:</b>
	<?php echo CHtml::encode($data->pro_vBEscuela); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pro_aporteValorado')); ?>:</b>
	<?php echo CHtml::encode($data->pro_aporteValorado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pro_aportePecuniario')); ?>:</b>
	<?php echo CHtml::encode($data->pro_aportePecuniario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pro_resumenEjecutivo')); ?>:</b>
	<?php echo CHtml::encode($data->pro_resumenEjecutivo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pro_descripcionEmpresa')); ?>:</b>
	<?php echo CHtml::encode($data->pro_descripcionEmpresa); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pro_definicionProblema')); ?>:</b>
	<?php echo CHtml::encode($data->pro_definicionProblema); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pro_solucionPropuesta')); ?>:</b>
	<?php echo CHtml::encode($data->pro_solucionPropuesta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pro_estadoArte')); ?>:</b>
	<?php echo CHtml::encode($data->pro_estadoArte); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pro_objetivoGeneral')); ?>:</b>
	<?php echo CHtml::encode($data->pro_objetivoGeneral); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pro_metodologia')); ?>:</b>
	<?php echo CHtml::encode($data->pro_metodologia); ?>
	<br />


	*/ ?>

</div>