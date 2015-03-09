<?php
/* @var $this ConsultainternaController */
/* @var $data Consultainterna */
?>



<!-- buscar al alumno -->
<?php  

$alumno=Alumno::model()->find("al_email='".$data->coni_email."'");


?>

<div class="view">

	<?php echo '<b>'.CHtml::encode($alumno->al_nombre).' '.CHtml::encode($alumno->al_paterno).'</b>'.'   '.CHtml::encode($data->coni_fecha); ?>
	<br>
	<?php echo CHtml::encode($data->coni_consulta); ?>
	<br />
	<br>
	<div style="margin-left:20px;">
		<?php echo '<b>'.'Claudio'.'</b>'; ?>
		<br>
		<?php echo CHtml::encode($data->coni_respuesta); ?>
		<br />
	</div>

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('coni_fechaRespuesta')); ?>:</b>
	<?php echo CHtml::encode($data->coni_fechaRespuesta); ?>
	<br />

	*/ ?>

</div>