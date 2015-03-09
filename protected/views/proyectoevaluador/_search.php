<?php
/* @var $this ProyectoevaluadorController */
/* @var $model Proyectoevaluador */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'pre_id'); ?>
		<?php echo $form->textField($model,'pre_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pro_idProyecto'); ?>
		<?php echo $form->textField($model,'pro_idProyecto'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ev_rut'); ?>
		<?php echo $form->textField($model,'ev_rut',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pre_nota'); ?>
		<?php echo $form->textField($model,'pre_nota'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pre_comentario'); ?>
		<?php echo $form->textArea($model,'pre_comentario',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pre_estadoPostulacion'); ?>
		<?php echo $form->textField($model,'pre_estadoPostulacion',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pre_estadoEvaluacion'); ?>
		<?php echo $form->textField($model,'pre_estadoEvaluacion',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->