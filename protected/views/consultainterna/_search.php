<?php
/* @var $this ConsultainternaController */
/* @var $model Consultainterna */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'coni_id'); ?>
		<?php echo $form->textField($model,'coni_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'coni_consulta'); ?>
		<?php echo $form->textArea($model,'coni_consulta',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'coni_telefono'); ?>
		<?php echo $form->textField($model,'coni_telefono',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'coni_email'); ?>
		<?php echo $form->textField($model,'coni_email',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'coni_fecha'); ?>
		<?php echo $form->textField($model,'coni_fecha'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'coni_estado'); ?>
		<?php echo $form->textField($model,'coni_estado'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'coni_respuesta'); ?>
		<?php echo $form->textArea($model,'coni_respuesta',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'coni_fechaRespuesta'); ?>
		<?php echo $form->textField($model,'coni_fechaRespuesta'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->