<?php
/* @var $this AlumnoproyectoController */
/* @var $model Alumnoproyecto */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'alumnoproyecto-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>


	<div class="row">
		<?php echo $form->labelEx($model,'al_rut'); ?>
		<?php  
			$this->widget('zii.widgets.jui.CJuiAutoComplete',array(
			    'name'=>'Alumnoproyecto_al_rut',
			    'attribute'=>'al_rut',
				'model'=>$model,
			    'source'=>$this->createUrl('Alumnoproyecto/obtenerRut',array("id"=>$this->idProyecto)),
			    'htmlOptions'=>array(
			        'style'=>'height:20px;',
		    		),
		    	)
		    );
		?>		
		<?php echo $form->error($model,'al_rut'); ?>
	</div>

	<div class="row">
		<?php echo $form->hiddenField($model,'pro_idProyecto',array('value'=>$this->idProyecto,'readonly'=>'false')); ?>
		<?php echo $form->error($model,'pro_idProyecto'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Vincular' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->