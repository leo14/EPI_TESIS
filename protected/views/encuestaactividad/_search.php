<?php
/* @var $this EncuestaactividadController */
/* @var $model Encuestaactividad */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'en_id'); ?>
		<?php echo $form->textField($model,'en_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'al_rut'); ?>
		<?php echo $form->textField($model,'al_rut',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ec_convocatoria'); ?>
		<?php echo $form->textField($model,'ec_convocatoria',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'act_id'); ?>
		<?php echo $form->textField($model,'act_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'en_tipo'); ?>
		<?php echo $form->textField($model,'en_tipo',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'en_pregunta1'); ?>
		<?php echo $form->textField($model,'en_pregunta1',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'en_pregunta2'); ?>
		<?php echo $form->textField($model,'en_pregunta2',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'en_pregunta3'); ?>
		<?php echo $form->textField($model,'en_pregunta3',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'en_pregunta4'); ?>
		<?php echo $form->textField($model,'en_pregunta4',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'en_comentario'); ?>
		<?php echo $form->textArea($model,'en_comentario',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->