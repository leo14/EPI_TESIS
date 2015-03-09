<?php
/* @var $this ActividadesController */
/* @var $model Actividades */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'act_id'); ?>
		<?php echo $form->textField($model,'act_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'con_semestre'); ?>
		<?php echo $form->textField($model,'con_semestre',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'act_campus'); ?>
		<?php echo $form->textField($model,'act_campus',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'act_nombre'); ?>
		<?php echo $form->textField($model,'act_nombre',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'act_fecha'); ?>
		<?php echo $form->textField($model,'act_fecha',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'act_horaInicio'); ?>
		<?php echo $form->textField($model,'act_horaInicio',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'act_horaFin'); ?>
		<?php echo $form->textField($model,'act_horaFin',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'act_lugar'); ?>
		<?php echo $form->textField($model,'act_lugar',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'act_descripcion'); ?>
		<?php echo $form->textArea($model,'act_descripcion',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->