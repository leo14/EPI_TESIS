<?php
/* @var $this DocumentosController */
/* @var $model Documentos */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'documentos-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
	'htmlOptions' => array('enctype' => 'multipart/form-data'),//FORMULARIO IMAGEN
)); ?>

	<div class="row">
		
		<?php echo $form->hiddenField($model,'cu_id',array('value'=>$_GET["curso"],'readonly'=>'false')); ?>
		<?php echo $form->error($model,'cu_id'); ?>
	</div>

	<div class="row">
		<?php 
		$this->widget("zii.widgets.jui.CJuiDatePicker",array(
			"attribute"=>"doc_fecha",
			"model"=>$model,
			"language"=>"es",
			"options"=>array(
				"dateFormat"=>"yy-mm-dd"
				),
			'htmlOptions'=>array('placeholder'=>'Fecha'),
			));
		?>
		<?php echo $form->error($model,'doc_fecha'); ?>
	</div>

	<div class="row">
		<?php echo $form->textField($model,'doc_nombre',array('size'=>60,'maxlength'=>255,'placeholder'=>'Nombre')); ?>
		<?php echo $form->error($model,'doc_nombre'); ?>
	</div>


	<div class="row">
		<?php echo $form->hiddenField($model,'doc_tipo',array('value'=>$_GET["tipo"],'readonly'=>'false')); ?>
		<?php echo $form->error($model,'doc_tipo'); ?>
	</div>

<?php if ($_GET["tipo"]=="video"){ ?>
	
	<div class="row">
		<?php echo $form->textField($model,'doc_link',array('size'=>60,'maxlength'=>255,'placeholder'=>'Código de inserción')); ?>
		<?php echo $form->error($model,'doc_link'); ?>
	</div>
	
<?php } 
else{
?>
	<div class="row">
		<?php echo $form->fileField($model,'doc_link'); ?>
		<?php echo $form->error($model,'doc_link'); ?>
	</div>
<?php 	
}
?>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Subir' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->