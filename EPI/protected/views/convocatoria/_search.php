<?php
/* @var $this ConvocatoriaController */
/* @var $model Convocatoria */
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
		<?php echo $form->label($model,'con_semestre'); ?>
		<?php echo $form->textField($model,'con_semestre',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'con_inicio'); ?>
		<?php echo $form->textField($model,'con_inicio'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'con_fin'); ?>
		<?php echo $form->textField($model,'con_fin'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'con_estado'); ?>
		<?php echo $form->textField($model,'con_estado'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->