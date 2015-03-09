<?php
/* @var $this ObjetivosController */
/* @var $model Objetivos */
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
		<?php echo $form->label($model,'ob_objetivo1'); ?>
		<?php echo $form->textArea($model,'ob_objetivo1',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ob_objetivo2'); ?>
		<?php echo $form->textArea($model,'ob_objetivo2',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ob_objetivo3'); ?>
		<?php echo $form->textArea($model,'ob_objetivo3',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ob_objetivo4'); ?>
		<?php echo $form->textArea($model,'ob_objetivo4',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ob_objetivo5'); ?>
		<?php echo $form->textArea($model,'ob_objetivo5',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ob_resultado1'); ?>
		<?php echo $form->textArea($model,'ob_resultado1',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ob_resultado2'); ?>
		<?php echo $form->textArea($model,'ob_resultado2',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ob_resultado3'); ?>
		<?php echo $form->textArea($model,'ob_resultado3',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ob_resultado4'); ?>
		<?php echo $form->textArea($model,'ob_resultado4',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ob_resultado5'); ?>
		<?php echo $form->textArea($model,'ob_resultado5',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ob_actividades1'); ?>
		<?php echo $form->textArea($model,'ob_actividades1',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ob_actividades2'); ?>
		<?php echo $form->textArea($model,'ob_actividades2',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ob_actividades3'); ?>
		<?php echo $form->textArea($model,'ob_actividades3',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ob_actividades4'); ?>
		<?php echo $form->textArea($model,'ob_actividades4',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ob_actividades5'); ?>
		<?php echo $form->textArea($model,'ob_actividades5',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->