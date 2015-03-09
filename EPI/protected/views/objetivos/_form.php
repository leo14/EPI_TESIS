<?php
/* @var $this ObjetivosController */
/* @var $model Objetivos */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'objetivos-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	
	<div class="row">
		<?php echo $form->hiddenField($model,'pro_idProyecto'); ?>
		<?php echo $form->error($model,'pro_idProyecto'); ?>
	</div>

<br>

<div id="objetivos">
	
	<TABLE >


	<tr>
		<th style="border: solid rgb(188, 188, 188) 2px;">OBJETIVO ESPECIFICO</th>
		<th style="border: solid rgb(188, 188, 188) 2px;">RESULTADO ESPERADO</th>
		<th style="border: solid rgb(188, 188, 188) 2px;">ACTIVIDADES</th>
	</tr>
	<TR> <!-- fila -->
		<TD>
			<div class="row">
				<?php echo $form->textArea($model,'ob_objetivo1',array('rows'=>6, 'cols'=>50)); ?>
				<?php echo $form->error($model,'ob_objetivo1'); ?>
			</div>
		</TD> 
			<TD>
				<div class="row">
					<?php echo $form->textArea($model,'ob_resultado1',array('rows'=>6, 'cols'=>50)); ?>
					<?php echo $form->error($model,'ob_resultado1'); ?>
				</div>
			</TD> 
				<TD>				
					<div class="row">
						<?php echo $form->textArea($model,'ob_actividades1',array('rows'=>6, 'cols'=>50)); ?>
						<?php echo $form->error($model,'ob_actividades1'); ?>
					</div>
				</TD>
	</TR>

	<TR> <!-- fila -->
		<TD>
			<div class="row">
				<?php echo $form->textArea($model,'ob_objetivo2',array('rows'=>6, 'cols'=>50)); ?>
				<?php echo $form->error($model,'ob_objetivo2'); ?>
			</div>
		</TD> 
			<TD>
				<div class="row">
					<?php echo $form->textArea($model,'ob_resultado2',array('rows'=>6, 'cols'=>50)); ?>
					<?php echo $form->error($model,'ob_resultado2'); ?>
				</div>
			</TD> 
				<TD>				
					<div class="row">
						<?php echo $form->textArea($model,'ob_actividades2',array('rows'=>6, 'cols'=>50)); ?>
						<?php echo $form->error($model,'ob_actividades2'); ?>
					</div>
				</TD>
	</TR>

	<TR> <!-- fila -->
		<TD>
			<div class="row">
				<?php echo $form->textArea($model,'ob_objetivo3',array('rows'=>6, 'cols'=>50)); ?>
				<?php echo $form->error($model,'ob_objetivo3'); ?>
			</div>
		</TD> 
			<TD>
				<div class="row">
					<?php echo $form->textArea($model,'ob_resultado3',array('rows'=>6, 'cols'=>50)); ?>
					<?php echo $form->error($model,'ob_resultado3'); ?>
				</div>
			</TD> 
				<TD>				
					<div class="row">
						<?php echo $form->textArea($model,'ob_actividades3',array('rows'=>6, 'cols'=>50)); ?>
						<?php echo $form->error($model,'ob_actividades3'); ?>
					</div>
				</TD>
	</TR>

	<TR> <!-- fila -->
		<TD>
			<div class="row">
				<?php echo $form->textArea($model,'ob_objetivo4',array('rows'=>6, 'cols'=>50)); ?>
				<?php echo $form->error($model,'ob_objetivo4'); ?>
			</div>
		</TD> 
			<TD>
				<div class="row">
					<?php echo $form->textArea($model,'ob_resultado4',array('rows'=>6, 'cols'=>50)); ?>
					<?php echo $form->error($model,'ob_resultado4'); ?>
				</div>
			</TD> 
				<TD>				
					<div class="row">
						<?php echo $form->textArea($model,'ob_actividades4',array('rows'=>6, 'cols'=>50)); ?>
						<?php echo $form->error($model,'ob_actividades4'); ?>
					</div>
				</TD>
	</TR>

	<TR> <!-- fila -->
		<TD>
			<div class="row">
				<?php echo $form->textArea($model,'ob_objetivo5',array('rows'=>6, 'cols'=>50)); ?>
				<?php echo $form->error($model,'ob_objetivo5'); ?>
			</div>
		</TD> 
			<TD>
				<div class="row">
					<?php echo $form->textArea($model,'ob_resultado5',array('rows'=>6, 'cols'=>50)); ?>
					<?php echo $form->error($model,'ob_resultado5'); ?>
				</div>
			</TD> 
				<TD>				
					<div class="row">
						<?php echo $form->textArea($model,'ob_actividades5',array('rows'=>6, 'cols'=>50)); ?>
						<?php echo $form->error($model,'ob_actividades5'); ?>
					</div>
				</TD>
	</TR>
	
	</TABLE>
</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

<style>

div#objetivos	table, th, td {
    border: 1px solid black;
}

div#objetivos textArea {
	width: 95%;
	border: none;
}

</style>