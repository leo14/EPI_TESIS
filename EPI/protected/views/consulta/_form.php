<?php
/* @var $this ConsultaController */
/* @var $model Consulta */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'consulta-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<!-- <p class="note">Fields with <span class="required">*</span> are required.</p> -->



<!-- al crearlo el alumno externo -->
<?php  if ($model->isNewRecord ) {	?>

	<div class="row">
		<?php echo $form->textArea($model,'con_consulta',array('rows'=>6, 'cols'=>50, 'placeholder'=>'Consulta')); ?>
		<?php echo $form->error($model,'con_consulta'); ?>
	</div>

	<div class="row">
		<?php echo $form->textField($model,'con_email',array('size'=>60,'maxlength'=>255, 'placeholder'=>'Email')); ?>
		<?php echo $form->error($model,'con_email'); ?>
	</div>

	<div class="row">
		<?php echo $form->textField($model,'con_telefono',array('size'=>60,'maxlength'=>255, 'placeholder'=>'Telefono')); ?>
		<?php echo $form->error($model,'con_telefono'); ?>
	</div>

	<div class="row">
		<?php echo $form->hiddenField($model,'con_fecha', array('value'=>date('Y-m-d H:i:s'),'readonly'=>'false')); ?>
		<?php echo $form->error($model,'con_fecha'); ?>
	</div>
<?php  }?>
<!-- fin_al crearlo el alumno externo -->

<!-- al modificarlo el cordinador -->
<?php  if (!$model->isNewRecord ) {	?>

	<div class="row">
		<?php echo $form->textArea($model,'con_consulta',array('readonly'=>'false')); ?>
		<?php echo $form->error($model,'con_consulta'); ?>
	</div>

	<div class="row">
		<?php echo $form->textField($model,'con_email',array('readonly'=>'false')); ?>
		<?php echo $form->error($model,'con_email'); ?>
	</div>

	<div class="row">
		<?php echo $form->textField($model,'con_telefono',array('readonly'=>'false')); ?>
		<?php echo $form->error($model,'con_telefono'); ?>
	</div>

	<div class="row">
		<?php echo $form->hiddenField($model,'con_fecha', array('readonly'=>'false')); ?>
		<?php echo $form->error($model,'con_fecha'); ?>
	</div>

	<div class="row">
		Respondida
		<?php echo $form->checkbox($model,'con_estado',array('value'=>1, 'uncheckValue'=>0)); ?>
		<?php echo $form->error($model,'con_fecha'); ?>
	</div>
<?php  }?>
<!-- fin_al modificarlo el cordinador -->


	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Enviar' : 'Save',array('class' => 'guardar')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->