<?php
/* @var $this NoticiaController */
/* @var $model Noticia */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'no_id'); ?>
		<?php echo $form->textField($model,'no_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'no_titulo'); ?>
		<?php echo $form->textField($model,'no_titulo',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'no_subtitulo'); ?>
		<?php echo $form->textField($model,'no_subtitulo',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'no_cuerpo'); ?>
		<?php echo $form->textField($model,'no_cuerpo',array('size'=>60,'maxlength'=>5000)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->