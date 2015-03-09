<?php
/* @var $this AlumnoController */
/* @var $model Alumno */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'al_rut'); ?>
		<?php echo $form->textField($model,'al_rut',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'al_nombre'); ?>
		<?php echo $form->textField($model,'al_nombre',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'al_carrera'); ?>
		<?php echo $form->textField($model,'al_carrera',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'al_email'); ?>
		<?php echo $form->textField($model,'al_email',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'al_telefono'); ?>
		<?php echo $form->textField($model,'al_telefono',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'al_comentario'); ?>
		<?php echo $form->textField($model,'al_comentario',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'al_clave'); ?>
		<?php echo $form->textField($model,'al_clave',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'al_paterno'); ?>
		<?php echo $form->textField($model,'al_paterno',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'al_materno'); ?>
		<?php echo $form->textField($model,'al_materno',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'al_campus'); ?>
		<?php echo $form->textField($model,'al_campus',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'al_email2'); ?>
		<?php echo $form->textField($model,'al_email2',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->