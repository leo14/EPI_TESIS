<?php
/* @var $this ConsultaController */
/* @var $model Consulta */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'con_id'); ?>
		<?php echo $form->textField($model,'con_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'con_consulta'); ?>
		<?php echo $form->textArea($model,'con_consulta',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'con_email'); ?>
		<?php echo $form->textField($model,'con_email',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'con_telefono'); ?>
		<?php echo $form->textField($model,'con_telefono',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'con_fecha'); ?>
		<?php echo $form->textField($model,'con_fecha'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->