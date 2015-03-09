<?php
/* @var $this DocumentosController */
/* @var $model Documentos */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'doc_id'); ?>
		<?php echo $form->textField($model,'doc_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cu_id'); ?>
		<?php echo $form->textField($model,'cu_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'doc_fecha'); ?>
		<?php echo $form->textField($model,'doc_fecha'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'doc_nombre'); ?>
		<?php echo $form->textField($model,'doc_nombre',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'doc_tipo'); ?>
		<?php echo $form->textField($model,'doc_tipo',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'doc_link'); ?>
		<?php echo $form->textField($model,'doc_link',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->