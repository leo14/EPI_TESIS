<?php
/* @var $this EvaluadoresController */
/* @var $model Evaluadores */
/* @var $form CActiveForm */
?>

<!-- incluir jquery para validar el rut -->
<?php  
  $baseUrl = Yii::app()->baseUrl; 
  $cs = Yii::app()->getClientScript();
  $cs->registerScriptFile($baseUrl.'/js/jquery.Rut.js');
  
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'evaluadores-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>true,
)); ?>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php //echo $form->labelEx($model,'ev_rut'); ?>
		<?php echo $form->textField($model,'ev_rut',array('size'=>15,'maxlength'=>15,'placeholder'=>'RUT')); ?>
		<?php echo $form->error($model,'ev_rut'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'ev_email'); ?>
		<?php echo $form->textField($model,'ev_email',array('size'=>30,'maxlength'=>30,'placeholder'=>'E-mail')); ?>
		<?php echo $form->error($model,'ev_email'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'ev_nombre'); ?>
		<?php echo $form->textField($model,'ev_nombre',array('size'=>60,'maxlength'=>255,'placeholder'=>'Nombre Completo')); ?>
		<?php echo $form->error($model,'ev_nombre'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'ev_clave'); ?>
		<?php echo $form->textField($model,'ev_clave',array('size'=>60,'maxlength'=>100,'placeholder'=>'Clave de acceso')); ?>
		<?php echo $form->error($model,'ev_clave'); ?>
	</div>

	<div id="centrado">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Agregar' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

<script>
$('#Evaluadores_ev_rut').Rut({
  format_on: 'keyup'
});
</script>