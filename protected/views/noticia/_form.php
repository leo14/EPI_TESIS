<?php
/* @var $this NoticiaController */
/* @var $model Noticia */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'noticia-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>true,
	'htmlOptions' => array('enctype' => 'multipart/form-data'),//FORMULARIO IMAGEN
)); ?>

	
	<div class="row">
		<?php echo $form->labelEx($model,'no_titulo'); ?>
		<?php echo $form->textField($model,'no_titulo',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'no_titulo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'no_subtitulo'); ?>
		<?php echo $form->textField($model,'no_subtitulo',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'no_subtitulo'); ?>
	</div>

	<!-- para la imagen -->
	<div>
        <?php echo $form->labelEx($model,'no_imagen'); ?>
        <?php echo $form->fileField($model,'no_imagen'); ?>
        <?php echo $form->error($model,'no_imagen'); ?>
    </div>
	<!-- fin_para la imagen -->

	<div class="row">
		<?php echo $form->labelEx($model,'no_cuerpo'); ?>
		<?php echo $form->textArea($model,'no_cuerpo',array('size'=>60,'maxlength'=>5000)); ?>
		<?php echo $form->error($model,'no_cuerpo'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Publicar' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->