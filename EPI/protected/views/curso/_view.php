<?php
/* @var $this CursoController */
/* @var $data Curso */
?>

<div class="view">

	
	<?php echo CHtml::link(CHtml::encode($data->cu_nombre), array('view', 'id'=>$data->cu_id)); ?>
	<br>
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('cu_creador')); ?>:</b>
	<?php echo CHtml::encode($data->cu_creador); ?>
	<br />


	<?php 
	$estructura =Yii::app()->baseUrl.'/protected/cursos';
	$path="$estructura/$data->cu_foto";
	 ?>
	<img src="<?php echo $path?>" style="border-radius: 50% 50% 50% 50%;width:60px">
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cu_info')); ?>:</b>
	<?php echo CHtml::encode($data->cu_info); ?>
	<br />

	
</div>