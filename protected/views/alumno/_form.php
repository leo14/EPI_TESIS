<?php
/* @var $this AlumnoController */
/* @var $model Alumno */
/* @var $form CActiveForm */

?>

<!-- incluir jquery para validar el rut -->
<?php  
  $baseUrl = Yii::app()->baseUrl; 
  $cs = Yii::app()->getClientScript();
  $cs->registerScriptFile($baseUrl.'/js/jquery.Rut.js');
  
?>

<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/inscripcion-logo.png" style="margin-top: 40px;margin-bottom: 22px;" id="alumnoInscripcion";>
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'alumno-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>true,
)); ?>

	<!-- <p class="note">Fields with <span class="required">*</span> are required.</p> -->

	<?php //echo $form->errorSummary($model); ?>

	
	<div class="row">
		<?php //echo $form->labelEx($model,'al_nombre'); ?>
		<?php echo $form->textField($model,'al_nombre',array('size'=>60,'maxlength'=>100,'placeholder'=>'Nombres')); ?>
		<?php echo $form->error($model,'al_nombre'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'al_paterno'); ?>
		<?php echo $form->textField($model,'al_paterno',array('size'=>60,'maxlength'=>100,'placeholder'=>'Apellido Paterno')); ?>
		<?php echo $form->error($model,'al_paterno'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'al_materno'); ?>
		<?php echo $form->textField($model,'al_materno',array('size'=>60,'maxlength'=>100,'placeholder'=>'Apellido Materno')); ?>
		<?php echo $form->error($model,'al_materno'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'al_rut'); ?>
		<?php echo $form->textField($model,'al_rut',array('size'=>15,'maxlength'=>15,'placeholder'=>'RUT')); ?>
		<?php echo $form->error($model,'al_rut'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'al_campus'); ?>
		<?php echo $form->dropDownList($model,'al_campus',array(''=>'Campus','Concepción'=>'Concepción','Chillán'=>'Chillán'),
		 array(
		 	'ajax'=>array(
		 		'type'=>'POST',
		 		'url'=>Ccontroller::createUrl('alumno/ObtenerCarreras'),
		 		'update'=>'#Alumno_al_carrera',
		 		),
		 	)
		 	);?>
		<?php echo $form->error($model,'al_campus'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'al_carrera'); ?>
		<?php echo $form->dropDownList($model,'al_carrera',array(''=>'Carrera')); ?>
		<?php echo $form->error($model,'al_carrera'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'al_email'); ?>
		<?php echo $form->textField($model,'al_email',array('size'=>30,'maxlength'=>30,'placeholder'=>'e-mail 1(ubiobio)')); ?>
		<?php echo $form->error($model,'al_email'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'al_email2'); ?>
		<?php echo $form->textField($model,'al_email2',array('size'=>30,'maxlength'=>30,'placeholder'=>'e-mail 2(opcional)')); ?>
		<?php echo $form->error($model,'al_email2'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'al_telefono'); ?>
		<?php echo $form->textField($model,'al_telefono',array('size'=>25,'maxlength'=>25,'placeholder'=>'Telefono')); ?>
		<?php echo $form->error($model,'al_telefono'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'al_comentario'); ?>
		<?php echo $form->textArea($model,'al_comentario',array('size'=>60,'maxlength'=>100,'placeholder'=>'Motivación para ingresar al programa EPI (incluir tema del proyecto de titulo y nombre de empresa o institución asociada al tema)')); ?>
		<?php echo $form->error($model,'al_comentario'); ?>
	</div>

	<div id="centrado">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Enviar' : 'Guardar',array('class' => 'guardar')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

<script>
$('#Alumno_al_rut').Rut({
  format_on: 'keyup'
});
</script>
