<?php
/* @var $this CartaganttController */
/* @var $model Cartagantt */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'cartagantt-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>true,
)); ?>

	<div class="row">
		<?php echo $form->hiddenField($model,'pro_idProyecto'); ?>
		<?php echo $form->error($model,'pro_idProyecto'); ?>
	</div>
	<br>

	<!-- obtener los objetivos -->
	<?php 
	$objetivos=Objetivos::model()->find("pro_idProyecto=".$model->pro_idProyecto);
	?>
	<!-- fin_obtener los objetivos -->

	<div id="cartagantt">
	<TABLE >


	<tr>
		<th style="border: solid rgb(188, 188, 188) 2px;">OBJETIVO ESPECIFICO</th>
		<th style="border: solid rgb(188, 188, 188) 2px;">ACTIVIDADES</th>
		<th style="border: solid rgb(188, 188, 188) 2px;">DURACIÓN</th>
	</tr>
	
	<TR> <!-- fila -->
		<TD>
			1.
		</TD> 
			<TD>
				<div class="row">
					<?php echo ''.$objetivos->ob_objetivo1; ?>
				</div>
			</TD> 
				<TD>				
					
					<div class="row">
						<?php 
							$this->widget("zii.widgets.jui.CJuiDatePicker",array(
								"attribute"=>"cg_inicio1",
								"model"=>$model,
								"language"=>"es",
								"options"=>array(
									"dateFormat"=>"yy-mm-dd"
									),
								'htmlOptions'=>array('placeholder'=>'INICIO'),
								));
						?>
						<?php echo $form->error($model,'cg_inicio1'); ?>
					</div>

					<div class="row">
						<?php 
							$this->widget("zii.widgets.jui.CJuiDatePicker",array(
								"attribute"=>"cg_fin1",
								"model"=>$model,
								"language"=>"es",
								"options"=>array(
									"dateFormat"=>"yy-mm-dd"
									),
								'htmlOptions'=>array('placeholder'=>'FIN'),
								));
						?>
						<?php echo $form->error($model,'cg_fin1'); ?>
					</div>
				</TD>
	</TR>

	

	<TR> <!-- fila -->
		<TD>
			2.
		</TD> 
			<TD>
				<div class="row">
					<?php echo ''.$objetivos->ob_objetivo2; ?>
				</div>
			</TD> 
				<TD>				
					
					<div class="row">
						<?php 
							$this->widget("zii.widgets.jui.CJuiDatePicker",array(
								"attribute"=>"cg_inicio2",
								"model"=>$model,
								"language"=>"es",
								"options"=>array(
									"dateFormat"=>"yy-mm-dd"
									),
								'htmlOptions'=>array('placeholder'=>'INICIO'),
								));
						?>
						<?php echo $form->error($model,'cg_inicio2'); ?>
					</div>

					<div class="row">
						<?php 
							$this->widget("zii.widgets.jui.CJuiDatePicker",array(
								"attribute"=>"cg_fin2",
								"model"=>$model,
								"language"=>"es",
								"options"=>array(
									"dateFormat"=>"yy-mm-dd"
									),
								'htmlOptions'=>array('placeholder'=>'FIN'),
								));
						?>
						<?php echo $form->error($model,'cg_fin2'); ?>
					</div>
				</TD>
	</TR>
	

	<TR> <!-- fila -->
		<TD>
			3.
		</TD> 
			<TD>
				<div class="row">
					<?php echo ''.$objetivos->ob_objetivo3; ?>
				</div>
			</TD> 
				<TD>				
					
					<div class="row">
						<?php 
							$this->widget("zii.widgets.jui.CJuiDatePicker",array(
								"attribute"=>"cg_inicio3",
								"model"=>$model,
								"language"=>"es",
								"options"=>array(
									"dateFormat"=>"yy-mm-dd"
									),
								'htmlOptions'=>array('placeholder'=>'INICIO'),
								));
						?>
						<?php echo $form->error($model,'cg_inicio3'); ?>
					</div>

					<div class="row">
						<?php 
							$this->widget("zii.widgets.jui.CJuiDatePicker",array(
								"attribute"=>"cg_fin3",
								"model"=>$model,
								"language"=>"es",
								"options"=>array(
									"dateFormat"=>"yy-mm-dd"
									),
								'htmlOptions'=>array('placeholder'=>'FIN'),
								));
						?>
						<?php echo $form->error($model,'cg_fin3'); ?>
					</div>
				</TD>
	</TR>

	<TR> <!-- fila -->
		<TD>
			4.
		</TD> 
			<TD>
				<div class="row">
					<?php echo ''.$objetivos->ob_objetivo4; ?>
				</div>
			</TD> 
				<TD>				
					
					<div class="row">
						<?php 
							$this->widget("zii.widgets.jui.CJuiDatePicker",array(
								"attribute"=>"cg_inicio4",
								"model"=>$model,
								"language"=>"es",
								"options"=>array(
									"dateFormat"=>"yy-mm-dd"
									),
								'htmlOptions'=>array('placeholder'=>'INICIO'),
								));
						?>
						<?php echo $form->error($model,'cg_inicio4'); ?>
					</div>

					<div class="row">
						<?php 
							$this->widget("zii.widgets.jui.CJuiDatePicker",array(
								"attribute"=>"cg_fin4",
								"model"=>$model,
								"language"=>"es",
								"options"=>array(
									"dateFormat"=>"yy-mm-dd"
									),
								'htmlOptions'=>array('placeholder'=>'FIN'),
								));
						?>
						<?php echo $form->error($model,'cg_fin4'); ?>
					</div>
				</TD>
	</TR>

	<TR> <!-- fila -->
		<TD>
			5.
		</TD> 
			<TD>
				<div class="row">
					<?php echo ''.$objetivos->ob_objetivo5; ?>
				</div>
			</TD> 
				<TD>				
					
					<div class="row">
						<?php 
							$this->widget("zii.widgets.jui.CJuiDatePicker",array(
								"attribute"=>"cg_inicio5",
								"model"=>$model,
								"language"=>"es",
								"options"=>array(
									"dateFormat"=>"yy-mm-dd"
									),
								'htmlOptions'=>array('placeholder'=>'INICIO'),
								));
						?>
						<?php echo $form->error($model,'cg_inicio5'); ?>
					</div>

					<div class="row">
						<?php 
							$this->widget("zii.widgets.jui.CJuiDatePicker",array(
								"attribute"=>"cg_fin5",
								"model"=>$model,
								"language"=>"es",
								"options"=>array(
									"dateFormat"=>"yy-mm-dd"
									),
								'htmlOptions'=>array('placeholder'=>'FIN'),
								));
						?>
						<?php echo $form->error($model,'cg_fin5'); ?>
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

div#cartagantt	table, th, td {
    border: 1px solid rgb(188, 188, 188);
}



</style>