<?php
/* @var $this ActividadesController */
/* @var $model Actividades */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'actividades-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>true,
)); ?>

<?php //echo $form->errorSummary($model); ?>

	<div class="row">
		<?php //echo $form->labelEx($model,'con_semestre'); ?>
		<?php //echo $form->textField($model,'con_semestre',array('size'=>10,'maxlength'=>10,'placeholder'=>'CONVOCATORIA')); ?>
		<?php //echo $form->error($model,'con_semestre'); ?>
	</div>

		<div class="row">
		<?php //echo $form->labelEx($model,'act_nombre'); ?>
		<?php echo $form->textField($model,'act_nombre',array('size'=>60,'maxlength'=>255,'placeholder'=>'NOMBRE')); ?>
		<?php echo $form->error($model,'act_nombre'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'act_campus'); ?>
		<?php echo $form->dropDownList($model,'act_campus',array(''=>'CAMPUS','Concepción'=>'Concepción','Chillán'=>'Chillán')); ?>
		<?php echo $form->error($model,'act_campus'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'act_fecha'); ?>
		<?php 
		$this->widget("zii.widgets.jui.CJuiDatePicker",array(
			"attribute"=>"act_fecha",
			"model"=>$model,
			"language"=>"es",
			"options"=>array(
				"dateFormat"=>"yy-mm-dd"
				),
			'htmlOptions'=>array('placeholder'=>'FECHA'),
			));
		?>
		<?php echo $form->error($model,'act_fecha'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'act_horaInicio'); ?>
		INICIO
		<?php echo $form->TimeField($model,'act_horaInicio',array('size'=>20,'maxlength'=>20,'placeholder'=>'INICIO')); ?>
		<?php //echo $form->labelEx($model,'act_horaFin'); ?>
		FIN
		<?php echo $form->TimeField($model,'act_horaFin',array('size'=>20,'maxlength'=>20,'placeholder'=>'FIN')); ?>
		
	</div>

	<div class="row">
		<?php echo $form->error($model,'act_horaInicio'); ?>
		<?php echo $form->error($model,'act_horaFin'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'act_lugar'); ?>
		<?php echo $form->textField($model,'act_lugar',array('size'=>60,'maxlength'=>255,'placeholder'=>'LUGAR')); ?>
		<?php echo $form->error($model,'act_lugar'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'act_descripcion'); ?>
		<?php echo $form->textArea($model,'act_descripcion',array('rows'=>6, 'cols'=>50,'placeholder'=>'DESCRIPCIÓN')); ?>
		<?php echo $form->error($model,'act_descripcion'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->