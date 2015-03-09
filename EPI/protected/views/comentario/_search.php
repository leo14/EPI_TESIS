<?php
/* @var $this ComentarioController */
/* @var $model Comentario */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'co_id'); ?>
		<?php echo $form->textField($model,'co_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cu_id'); ?>
		<?php echo $form->textField($model,'cu_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'co_texto'); ?>
		<?php echo $form->textArea($model,'co_texto',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->