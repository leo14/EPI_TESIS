<?php
/* @var $this ProyectoController */
/* @var $model Proyecto */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'pro_idProyecto'); ?>
		<?php echo $form->textField($model,'pro_idProyecto'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pro_titulo'); ?>
		<?php echo $form->textField($model,'pro_titulo',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pro_duracion'); ?>
		<?php echo $form->textField($model,'pro_duracion',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pro_ambito'); ?>
		<?php echo $form->textField($model,'pro_ambito',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pro_emNombre'); ?>
		<?php echo $form->textField($model,'pro_emNombre',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pro_emContacto'); ?>
		<?php echo $form->textField($model,'pro_emContacto',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pro_emTelefono'); ?>
		<?php echo $form->textField($model,'pro_emTelefono',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'emEmail'); ?>
		<?php echo $form->textField($model,'emEmail',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pro_profeNombre'); ?>
		<?php echo $form->textField($model,'pro_profeNombre',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pro_profeEmail'); ?>
		<?php echo $form->textField($model,'pro_profeEmail',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pro_profeTelefono'); ?>
		<?php echo $form->textField($model,'pro_profeTelefono',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pro_dirEscuela'); ?>
		<?php echo $form->textField($model,'pro_dirEscuela',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pro_vBEscuela'); ?>
		<?php echo $form->textField($model,'pro_vBEscuela',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pro_aporteValorado'); ?>
		<?php echo $form->textField($model,'pro_aporteValorado'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pro_aportePecuniario'); ?>
		<?php echo $form->textField($model,'pro_aportePecuniario'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pro_resumenEjecutivo'); ?>
		<?php echo $form->textArea($model,'pro_resumenEjecutivo',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pro_descripcionEmpresa'); ?>
		<?php echo $form->textArea($model,'pro_descripcionEmpresa',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pro_definicionProblema'); ?>
		<?php echo $form->textArea($model,'pro_definicionProblema',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pro_solucionPropuesta'); ?>
		<?php echo $form->textArea($model,'pro_solucionPropuesta',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pro_estadoArte'); ?>
		<?php echo $form->textArea($model,'pro_estadoArte',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pro_objetivoGeneral'); ?>
		<?php echo $form->textArea($model,'pro_objetivoGeneral',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pro_metodologia'); ?>
		<?php echo $form->textArea($model,'pro_metodologia',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->