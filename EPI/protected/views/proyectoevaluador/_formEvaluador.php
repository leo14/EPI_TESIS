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
	'enableAjaxValidation'=>true,
)); ?>

	<?php //echo $form->errorSummary($model); ?>

	<div class="row">
		<?php //echo $form->labelEx($model,'pro_idProyecto'); ?>
		<?php //echo $form->textField($model,'pro_idProyecto'); ?>
		<?php //echo $form->error($model,'pro_idProyecto'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'ev_rut'); ?>
		<?php //echo $form->textField($model,'ev_rut',array('size'=>15,'maxlength'=>15)); ?>
		<?php //echo $form->error($model,'ev_rut'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'pre_nota1'); ?>
		<b>1. Definición del problema u oportunidad (25%)</b><br>
		<i>Relevancia del problema planteado o de la oportunidad que se desea abordar.</i>
		<?php echo $form->dropDownList($model,'pre_nota1',array(''=>'','1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5')); ?>
		<?php echo $form->error($model,'pre_nota1'); ?>
	</div><br>

	<div class="row">
		<?php //echo $form->labelEx($model,'pre_nota1'); ?>
		<b>2. Solución innovadora propuesta (25%)</b><br>
		<i>Mérito innovador de la solución propuesta.</i>
		<?php echo $form->dropDownList($model,'pre_nota2',array(''=>'','1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5')); ?>
		<?php echo $form->error($model,'pre_nota2'); ?>
	</div><br>

	<div class="row">
		<?php //echo $form->labelEx($model,'pre_nota1'); ?>
		<b>3. Análisis del estado del arte (5%)</b><br>
		<i>Análisis del estado del arte del tema propuesto.</i>
		<?php echo $form->dropDownList($model,'pre_nota3',array(''=>'','1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5')); ?>
		<?php echo $form->error($model,'pre_nota3'); ?>
	</div><br>

	<div class="row">
		<?php //echo $form->labelEx($model,'pre_nota1'); ?>
		<b>4. Objetivos generales y específicos (10%)</b><br>
		<i>La calidad de los objetivos, así como la coherencia de éstos con la propuesta.</i>
		<?php echo $form->dropDownList($model,'pre_nota4',array(''=>'','1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5')); ?>
		<?php echo $form->error($model,'pre_nota4'); ?>
	</div><br>

	<div class="row">
		<?php //echo $form->labelEx($model,'pre_nota1'); ?>
		<b>5. Resultados esperados e indicadores (20%)</b><br>
		<i>Calidad y coherencia de los resultados esperados del proyecto.</i>
		<?php echo $form->dropDownList($model,'pre_nota5',array(''=>'','1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5')); ?>
		<?php echo $form->error($model,'pre_nota5'); ?>
	</div><br>

	<div class="row">
		<?php //echo $form->labelEx($model,'pre_nota1'); ?>
		<b>6. Metodología y plan de trabajo (5%)</b><br>
		<i>La calidad de la metodología, claridad y pertinencia de las actividades y su coherencia con la propuesta.</i>
		<?php echo $form->dropDownList($model,'pre_nota6',array(''=>'','1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5')); ?>
		<?php echo $form->error($model,'pre_nota6'); ?>
	</div><br>

	<div class="row">
		<?php //echo $form->labelEx($model,'pre_nota1'); ?>
		<b>7. Multidisciplinaria (10%)</b><br>
		<i>Participación de alumnos de 2 o más carreras.</i>
		<?php echo $form->dropDownList($model,'pre_nota7',array(''=>'','1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5')); ?>
		<?php echo $form->error($model,'pre_nota7'); ?>
	</div><br>
	
	<div class="row">
		<?php echo $form->labelEx($model,'pre_comentario'); ?>
		<?php echo $form->textArea($model,'pre_comentario',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'pre_comentario'); ?>
	</div><br>

	<div class="row">
		<?php echo $form->labelEx($model,'pre_estadoPostulacion'); ?>
		<?php echo $form->dropDownList($model,'pre_estadoPostulacion',array(''=>'','Aprobado'=>'Aprobado','Aprobado con Reformulacion'=>'Aprobado con Reformulación','Reprobado'=>'Reprobado')); ?>
		<?php echo $form->error($model,'pre_estadoPostulacion'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'pre_estadoEvaluacion'); ?>
		<?php //echo $form->textField($model,'pre_estadoEvaluacion',array('size'=>25,'maxlength'=>25)); ?>
		<?php //echo $form->error($model,'pre_estadoEvaluacion'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Evaluar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->