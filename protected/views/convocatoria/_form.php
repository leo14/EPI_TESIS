<?php
/* @var $this ConvocatoriaController */
/* @var $model Convocatoria */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'convocatoria-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>true,
)); ?>

	<?php //echo $form->errorSummary($model); ?>

	<div class="row">
		<?php //echo $form->labelEx($model,'con_semestre'); ?>
		<?php echo $form->textField($model,'con_semestre',array('size'=>10,'maxlength'=>10,'placeholder'=>'CONVOCATORIA [Ej:2015-1]')); ?>
		<?php echo $form->error($model,'con_semestre'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'con_inicio'); ?>
		<?php 
		$this->widget("zii.widgets.jui.CJuiDatePicker",array(
			"attribute"=>"con_inicio",
			"model"=>$model,
			"language"=>"es",
			"options"=>array(
				"dateFormat"=>"yy-mm-dd"
				),
			'htmlOptions'=>array('placeholder'=>'FECHA INICIO'),
			));
		?>
		<?php echo $form->error($model,'con_inicio'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'con_fin'); ?>
		<?php 
		$this->widget("zii.widgets.jui.CJuiDatePicker",array(
			"attribute"=>"con_fin",
			"model"=>$model,
			"language"=>"es",
			"options"=>array(
				"dateFormat"=>"yy-mm-dd"
				),
			'htmlOptions'=>array('placeholder'=>'FECHA FIN'),
			));
		?>
		<?php echo $form->error($model,'con_fin'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'con_estado'); ?>
		<?php //echo $form->textField($model,'con_estado'); ?>
		<?php //echo $form->error($model,'con_estado'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->