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

	<!-- obtener datos del usuario activo -->
	<?php  
		$alumno=alumno::model()->find("al_rut='".Yii::app()->user->name."'");
	?>
	<!-- fin_obtener datos del usuario activo -->

	<div class="row">
		
		<?php echo $form->textArea($model,'con_consulta',array('rows'=>6, 'cols'=>50, 'placeholder'=>'Consulta')); ?>
		<?php echo $form->error($model,'con_consulta'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'con_email'); ?>
		<?php echo $form->hiddenField($model,'con_email',array('size'=>60,'maxlength'=>255, 'placeholder'=>'Email','value'=>$alumno->al_email,'readonly'=>'false')); ?>
		<?php echo $form->error($model,'con_email'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'con_telefono'); ?>
		<?php echo $form->hiddenField($model,'con_telefono',array('size'=>60,'maxlength'=>255, 'placeholder'=>'Telefono','value'=>$alumno->al_telefono,'readonly'=>'false')); ?>
		<?php echo $form->error($model,'con_telefono'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'con_fecha'); ?>
		<?php echo $form->hiddenField($model,'con_fecha', array('value'=>date('Y-m-d H:i:s'),'readonly'=>'false')); ?>
		<?php echo $form->error($model,'con_fecha'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Enviar' : 'Save',array('class' => 'guardar')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->