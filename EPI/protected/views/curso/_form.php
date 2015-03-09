<?php
/* @var $this CursoController */
/* @var $model Curso */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'curso-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
	'htmlOptions' => array('enctype' => 'multipart/form-data'),
)); ?>


	<div class="row">
		<?php echo $form->labelEx($model,'cu_nombre'); ?>
		<?php echo $form->textField($model,'cu_nombre',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'cu_nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'con_semestre'); ?>
		<?php echo $form->textField($model,'con_semestre',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'con_semestre'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'cu_creador'); ?>
		<?php echo $form->textField($model,'cu_creador',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'cu_creador'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cu_campus'); ?>
		<?php echo $form->dropDownList($model,'cu_campus',array(''=>'CAMPUS','Concepción'=>'Concepción','Chillán'=>'Chillán')); ?>
		<?php echo $form->error($model,'cu_campus'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cu_foto'); ?>
		<?php echo $form->fileField($model,'cu_foto'); ?>
		<?php echo $form->error($model,'cu_foto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cu_info'); ?>
		<?php echo $form->textArea($model,'cu_info',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'cu_info'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->