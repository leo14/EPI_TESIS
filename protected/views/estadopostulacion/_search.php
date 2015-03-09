<?php
/* @var $this EstadopostulacionController */
/* @var $model Estadopostulacion */
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
		<?php echo $form->label($model,'espos_inscripcion'); ?>
		<?php echo $form->textField($model,'espos_inscripcion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'espos_informeInnovacion'); ?>
		<?php echo $form->textField($model,'espos_informeInnovacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'espos_anexo2'); ?>
		<?php echo $form->textField($model,'espos_anexo2'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'espos_cartaEmpresa'); ?>
		<?php echo $form->textField($model,'espos_cartaEmpresa'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'espos_prehallasgo'); ?>
		<?php echo $form->textField($model,'espos_prehallasgo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'espos_copiaCarnet'); ?>
		<?php echo $form->textField($model,'espos_copiaCarnet'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'espos_alumnoRegular'); ?>
		<?php echo $form->textField($model,'espos_alumnoRegular'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'espos_curriculum'); ?>
		<?php echo $form->textField($model,'espos_curriculum'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'espos_informeFinal'); ?>
		<?php echo $form->textField($model,'espos_informeFinal'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->