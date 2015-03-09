<?php
/* @var $this ProyectoevaluadorController */
/* @var $model Proyectoevaluador */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'proyectoevaluador-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>


	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'ev_rut'); ?>
		<?php echo $form->dropDownList($model,'ev_rut',CHtml::listData(Evaluadores::model()->findAll('ev_estado="Activo"'),'ev_rut','ev_rut','ev_nombre')); ?>
		<?php echo $form->error($model,'ev_rut'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Asignar' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->