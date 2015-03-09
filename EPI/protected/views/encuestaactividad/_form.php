<?php
/* @var $this EncuestaactividadController */
/* @var $model Encuestaactividad */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'encuestaactividad-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<!-- al crear la encuesta el administrador -->
<?php  if ($model->isNewRecord ) {	?>

	<div class="row">
		<?php //echo $form->labelEx($model,'en_convocatoria'); ?>
		<?php echo $form->hiddenField($model,'en_convocatoria', array('value'=>'2015-1','readonly'=>'false')); ?>
		<?php echo $form->error($model,'en_convocatoria'); ?>
	</div>

	<div class="row">

		<?php echo $form->labelEx($model,'act_id'); ?>
		<?php $convocatoria=Convocatoria::model()->findAll("con_estado=1");
		echo $form->dropDownList($model,'act_id',CHtml::listData(Actividades::model()->findAll('con_semestre="'.$convocatoria[0]->con_semestre.'"'),"act_id","act_nombre")); ?>
		<?php echo $form->error($model,'act_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'en_tipo'); ?>
		<?php echo $form->dropDownList($model,'en_tipo',array(''=>'Tipo','Taller'=>'Taller','Asignatura'=>'Asignatura'));?>
		<?php echo $form->error($model,'en_tipo'); ?>
	</div>

	<div class="row">
		<?php echo $form->hiddenField($model,'en_estado', array('value'=>'0','readonly'=>'false')); ?>
		<?php echo $form->error($model,'en_estado'); ?>
	</div>	
	
	<?php  }?>
<!-- fin_al crear la encuesta el administrador -->

<!-- al completar la encuesta -->
<?php  if (!$model->isNewRecord and $model->en_tipo=='Taller') {	?>

	

	<div class="row">
		<?php echo $form->hiddenField($model,'al_rut',array('size'=>15,'maxlength'=>15,'readonly'=>'false')); ?>
		<?php echo $form->error($model,'al_rut'); ?>
	</div>

<TABLE id="encuesta">
	<TR>
		<TD style="border-left:none">
		</TD> 
		<TD class="botones" style="border-top: solid 1px;">
				<label >Evaluación</label>
		</TD> 
	</TR>

	<TR>
		<TD>
			<label >Preguntas</label>
		</TD> 
		<TD class="botones">
			<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/encuesta.png" >
		</TD> 
	</TR>
	
	<TR>
		<TD>
			<label >1. ¿Considero que hoy aprendí?</label>
		<?php echo $form->error($model,'en_pregunta1'); ?>
		</TD> 
		<TD class="botones">
		<?php
            $accountStatus = array('De acuerdo'=>'', 'Ni acuerdo ni desacuerdo'=>'', 'En desacuerdo'=>'');
            echo $form->radioButtonList($model,'en_pregunta1',$accountStatus,array('separator'=>' ','labelOptions'=>array('style'=>'display:inline-block'),));
        ?>
		</TD> 
	</TR>
	
	<TR>
		<TD>
		<label >2. ¿El curso de hoy ha cumplido mis expectativas?</label>
		<?php echo $form->error($model,'en_pregunta2'); ?>
		</TD> 
		<TD class="botones">
		<?php
            echo $form->radioButtonList($model,'en_pregunta2',$accountStatus,array('separator'=>' ','labelOptions'=>array('style'=>'display:inline-block'),));
        ?>
		</TD> 
	</TR>
	
	<TR>
		<TD>
		<label >3. ¿Estoy conforme con la metodología del curso?</label>
		<?php echo $form->error($model,'en_pregunta3'); ?>
		</TD> 
		<TD class="botones">
		<?php
            echo $form->radioButtonList($model,'en_pregunta3',$accountStatus,array('separator'=>' ','labelOptions'=>array('style'=>'display:inline-block'),));
        ?>
		</TD> 
	</TR>

	<TR>
		<TD>
		<label >4. ¿Recomendaría este curso a otro compañero?</label>
		<?php echo $form->error($model,'en_pregunta4'); ?>
		</TD> 
		<TD class="botones">
		<?php
            echo $form->radioButtonList($model,'en_pregunta4',$accountStatus,array('separator'=>' ','labelOptions'=>array('style'=>'display:inline-block'),));
        ?>
		</TD> 
	</TR>
</TABLE>




	<div class="row">
		<?php echo $form->hiddenField($model,'en_convocatoria',array('size'=>10,'maxlength'=>10,'readonly'=>'false')); ?>
		<?php echo $form->error($model,'en_convocatoria'); ?>
	</div>

	<div class="row">
		<?php echo $form->hiddenField($model,'act_id',array('readonly'=>'false')); ?>
		<?php echo $form->error($model,'act_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->hiddenField($model,'en_tipo',array('size'=>10,'maxlength'=>10,'readonly'=>'false')); ?>
		<?php echo $form->error($model,'en_tipo'); ?>
	</div>

	<div class="row" style="text-align:left;">
		<?php echo $form->labelEx($model,'en_comentario'); ?>
		<?php echo $form->textArea($model,'en_comentario',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'en_comentario'); ?>
	</div>

	<div class="row">
		<?php echo $form->hiddenField($model,'en_estado', array('value'=>'1','readonly'=>'false')); ?>
		<?php echo $form->error($model,'en_estado'); ?>
	</div>	
	<?php  }?>
<!-- fin_al completar la encuesta -->


	<!-- al completar la encuesta de asignatura-->
<?php  if (!$model->isNewRecord and $model->en_tipo=='Asignatura' ) {	?>


	<div class="row">
		<?php echo $form->hiddenField($model,'al_rut',array('size'=>15,'maxlength'=>15,'readonly'=>'false')); ?>
		<?php echo $form->error($model,'al_rut'); ?>
	</div>

<TABLE id="encuesta">
	<TR>
		<TD style="border-left:none">
		</TD> 
		<TD class="botones" style="border-top: solid 1px;">
				<label >Evaluación</label>
		</TD> 
	</TR>

	<TR>
		<TD>
			<label >Preguntas</label>
		</TD> 
		<TD class="botones">
			<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/encuesta.png" >
		</TD> 
	</TR>
	
	<TR>
		<TD>
			<label >1. Estoy conforme con la calidad de los relatores.</label>
		<?php echo $form->error($model,'en_pregunta1'); ?>
		</TD> 
		<TD class="botones">
		<?php
            $accountStatus = array('De acuerdo'=>'', 'Ni acuerdo ni desacuerdo'=>'', 'En desacuerdo'=>'');
            echo $form->radioButtonList($model,'en_pregunta1',$accountStatus,array('separator'=>' ','labelOptions'=>array('style'=>'display:inline-block'),));
        ?>
		</TD> 
	</TR>
	
	<TR>
		<TD>
		<label >2. Estoy conforme con el servicio de café, colaciones y almuerzo.</label>
		<?php echo $form->error($model,'en_pregunta2'); ?>
		</TD> 
		<TD class="botones">
		<?php
            echo $form->radioButtonList($model,'en_pregunta2',$accountStatus,array('separator'=>' ','labelOptions'=>array('style'=>'display:inline-block'),));
        ?>
		</TD> 
	</TR>
	
	<TR>
		<TD>
		<label >3. Estoy conforme con la cantidad de horas de esta capacitación.</label>
		<?php echo $form->error($model,'en_pregunta3'); ?>
		</TD> 
		<TD class="botones">
		<?php
            echo $form->radioButtonList($model,'en_pregunta3',$accountStatus,array('separator'=>' ','labelOptions'=>array('style'=>'display:inline-block'),));
        ?>
		</TD> 
	</TR>

	<TR>
		<TD>
		<label >4. Los días elegidos para la capacitación fueron los adecuados.</label>
		<?php echo $form->error($model,'en_pregunta4'); ?>
		</TD> 
		<TD class="botones">
		<?php
            echo $form->radioButtonList($model,'en_pregunta4',$accountStatus,array('separator'=>' ','labelOptions'=>array('style'=>'display:inline-block'),));
        ?>
		</TD> 
	</TR>
</TABLE>




	<div class="row">
		<?php echo $form->hiddenField($model,'en_convocatoria',array('size'=>10,'maxlength'=>10,'readonly'=>'false')); ?>
		<?php echo $form->error($model,'en_convocatoria'); ?>
	</div>

	<div class="row">
		<?php echo $form->hiddenField($model,'act_id',array('readonly'=>'false')); ?>
		<?php echo $form->error($model,'act_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->hiddenField($model,'en_tipo',array('size'=>10,'maxlength'=>10,'readonly'=>'false')); ?>
		<?php echo $form->error($model,'en_tipo'); ?>
	</div>

	<div class="row" style="text-align:left;">
		<?php echo $form->labelEx($model,'en_comentario'); ?>
		<?php echo $form->textArea($model,'en_comentario',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'en_comentario'); ?>
	</div>

	<div class="row">
		<?php echo $form->hiddenField($model,'en_estado', array('value'=>'1','readonly'=>'false')); ?>
		<?php echo $form->error($model,'en_estado'); ?>
	</div>	

	<?php  }?>

<!-- fin_al completar la encuesta de asignatura-->




	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Enviar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->


<style>

table#encuesta{
	/*border-top:solid 1px;
	border-left:solid 1px;*/
}
table#encuesta td{
	border-bottom:solid 1px;
}
table#encuesta td{
	border-right:solid 1px;
	border-left:solid 1px;
}
table#encuesta td.botones img {
	width: 100%; 
}

table#encuesta td.botones{
width: 80px;	
text-align: center;
border-left:none;
}

	#encuestaactividad-form .row > label{
		display: inline-block;
	}

	#encuestaactividad-form .row {
		text-align: right;
	}
	.contenedorEncuesta{
		border: solid #ddd 2px;
	}
</style>