<?php
/* @var $this EstadopostulacionController */
/* @var $model Estadopostulacion */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'estadopostulacion-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
	'htmlOptions' => array('enctype' => 'multipart/form-data'),//FORMULARIO IMAGEN
)); ?>

	<div class="row">
		<?php //echo $form->labelEx($model,'pro_idProyecto'); ?>
		<?php echo $form->hiddenField($model,'pro_idProyecto',array('size'=>15,'maxlength'=>15,'readonly'=>'false')); ?>
		<?php echo $form->error($model,'pro_idProyecto'); ?>
	</div>

	
	<div class="row">
		<?php //echo $form->labelEx($model,'espos_inscripcion'); ?>
		<?php echo $form->hiddenField($model,'espos_inscripcion',array('readonly'=>'false')); ?>
		<?php echo $form->error($model,'espos_inscripcion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'espos_cartaEmpresa'); ?>
		<?php echo $form->fileField($model,'espos_cartaEmpresa'); ?>
		<?php echo $form->error($model,'espos_cartaEmpresa'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'espos_prehallasgo'); ?>
		<?php echo $form->fileField($model,'espos_prehallasgo'); ?>
		<?php echo $form->error($model,'espos_prehallasgo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'espos_copiaCarnet'); ?>
		<?php echo $form->fileField($model,'espos_copiaCarnet'); ?>
		<?php echo $form->error($model,'espos_copiaCarnet'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'espos_alumnoRegular'); ?>
		<?php echo $form->fileField($model,'espos_alumnoRegular'); ?>
		<?php echo $form->error($model,'espos_alumnoRegular'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'espos_curriculum'); ?>
		<?php echo $form->fileField($model,'espos_curriculum'); ?>
		<?php echo $form->error($model,'espos_curriculum'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'espos_informeFinal'); ?>
		<?php echo $form->fileField($model,'espos_informeFinal'); ?>
		<?php echo $form->error($model,'espos_informeFinal'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Subir' : 'Subir'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->