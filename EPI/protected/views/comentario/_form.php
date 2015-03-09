<?php
/* @var $this ComentarioController */
/* @var $modelComentario Comentario */
/* @var $form CActiveForm */
?>


<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'comentario-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<div class="row">
		<?php echo $form->hiddenField($modelComentario,'cu_id',array('value'=>$_GET["id"],'readonly'=>'false')); ?>
		<?php echo $form->error($modelComentario,'cu_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->textArea($modelComentario,'co_texto',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($modelComentario,'co_texto'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($modelComentario->isNewRecord ? 'crear' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->