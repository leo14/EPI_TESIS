<?php
/* @var $this NoticiaController */
/* @var $dataProvider CActiveDataProvider */


$this->menu=array(
	array('label'=>'Create Noticia', 'url'=>array('create')),
	array('label'=>'Manage Noticia', 'url'=>array('admin')),
);
?>


<!-- seleccionar la noticia mas nueva -->
<?php  

	$sql1 = "select MAX(no_id) as maximo from noticia";
	$data1 = Yii::app()->db->createCommand($sql1)->queryAll();
    $maximo=$data1[0]['maximo'];

    $sql1 = "select * from noticia where no_id='$maximo'";
	$data1 = Yii::app()->db->createCommand($sql1)->queryAll();

?>
<div style="min-height: 450px;">
	
<!-- mostrar la noticia mas nueva -->

<?php  $texto='Leer más...'; ?>
<h1 style="color: #06cca5;"><?php echo CHtml::encode($data1[0]['no_titulo']); ?></h1>
<br />
<div  id="divImagenNoticia">
	<img src="<?php echo Yii::app()->baseUrl.'/protected/imagenes/'.$data1[0]['no_imagen'] ?>" style="width: 505px;height: auto;" id="imagenNoticia">
</div>
		<h4 style="color: #06cca5;"><?php echo CHtml::encode($data1[0]['no_subtitulo']); ?></h4>
<p class="noticiaPrincipal" style="position: relative;overflow: hidden;max-height: 5.6rem;text-align: justify;margin-right: 52px;"><?php echo CHtml::encode($data1[0]['no_cuerpo']); ?></p>
<div class="mas"><?php echo CHtml::link(CHtml::encode($texto), array('view', 'id'=>$data1[0]['no_id']),array('class' => 'mas')); ?>	</div>

</div>


<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_viewIndex',
	'template'=>"{pager}\n{items}" //THIS DOES WHAT YOU WANT
)); ?>
