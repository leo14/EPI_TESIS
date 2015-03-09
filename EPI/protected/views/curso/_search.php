<?php
/* @var $this CursoController */
/* @var $model Curso */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'cu_id'); ?>
		<?php echo $form->textField($model,'cu_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cu_nombre'); ?>
		<?php echo $form->textField($model,'cu_nombre',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cu_creador'); ?>
		<?php echo $form->textField($model,'cu_creador',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cu_foto'); ?>
		<?php echo $form->textField($model,'cu_foto',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cu_info'); ?>
		<?php echo $form->textArea($model,'cu_info',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'con_semestre'); ?>
		<?php echo $form->textField($model,'con_semestre',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->