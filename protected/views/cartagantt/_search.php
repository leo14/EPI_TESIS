<?php
/* @var $this CartaganttController */
/* @var $model Cartagantt */
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
		<?php echo $form->label($model,'cg_inicio1'); ?>
		<?php echo $form->textField($model,'cg_inicio1'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cg_fin1'); ?>
		<?php echo $form->textField($model,'cg_fin1'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cg_inicio2'); ?>
		<?php echo $form->textField($model,'cg_inicio2'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cg_fin2'); ?>
		<?php echo $form->textField($model,'cg_fin2'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cg_inicio3'); ?>
		<?php echo $form->textField($model,'cg_inicio3'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cg_fin3'); ?>
		<?php echo $form->textField($model,'cg_fin3'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cg_inicio4'); ?>
		<?php echo $form->textField($model,'cg_inicio4'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cg_fin4'); ?>
		<?php echo $form->textField($model,'cg_fin4'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cg_inicio5'); ?>
		<?php echo $form->textField($model,'cg_inicio5'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cg_fin5'); ?>
		<?php echo $form->textField($model,'cg_fin5'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->