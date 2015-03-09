<?php
/* @var $this NoticiaController */
/* @var $data Noticia */
?>

<div class="view" style="height: 207px;overflow: hidden;">
	<div style="height: 212px;overflow: hidden;">
	<div style="float: left;width: 250px;height: 167px;overflow: hidden;">
		<img src="<?php echo Yii::app()->baseUrl.'/protected/imagenes/'.$data->no_imagen ?>" >
	</div>
	<br>
	<?php echo CHtml::link(CHtml::encode($data->no_titulo), array('view', 'id'=>$data->no_id)); ?>	
	<br />
	<?php echo CHtml::encode($data->no_subtitulo); ?>
	<br />
	</div>
	<hr>
</div>
