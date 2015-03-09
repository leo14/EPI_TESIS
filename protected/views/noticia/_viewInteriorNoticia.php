<?php
/* @var $this NoticiaController */
/* @var $data Noticia */
?>

<div class="view" style="height: 207px;overflow: hidden;">
	<hr>
	<div style="float: left;width: 250px;height: 167px;overflow: hidden;">
		<img src="<?php echo Yii::app()->baseUrl.'/protected/imagenes/'.$data->no_imagen ?>" >
	</div>
	<br>
	<?php echo CHtml::link(CHtml::encode($data->no_titulo), array('view', 'id'=>$data->no_id)); ?>
</div>