<?php
/* @var $this NoticiaController */
/* @var $model Noticia */


$this->menu=array(
	array('label'=>'List Noticia', 'url'=>array('index')),
	array('label'=>'Create Noticia', 'url'=>array('create')),
	array('label'=>'Update Noticia', 'url'=>array('update', 'id'=>$model->no_id)),
	array('label'=>'Delete Noticia', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->no_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Noticia', 'url'=>array('admin')),
);
?>

<!-- <h1>View Noticia #<?php echo $model->no_id; ?></h1> -->

<!-- titulo al compartir la noticia -->
<?php  $this->setPageTitle(''.$model->no_titulo);?>

<h1><?php echo $model->no_titulo;?></h1>

<div  id="divImagenNoticia">
	<img src="<?php echo Yii::app()->baseUrl.'/protected/imagenes/'.$model->no_imagen ?>"  id="imagenNoticia">
</div>
<h3 style="color: #09c7a2;"><?php echo $model->no_subtitulo; ?></h3>
<p  style="text-align: justify;"><?php  echo $model->no_cuerpo; ?></p>

<!-- me gusta -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


<?php $ref="http://epi.ubiobio.cl/EPI/index.php?r=noticia/view&amp;id=".$model->no_id; 
?>

<div style="margin-bottom: 50px;text-align: left;">
<div class="fb-share-button" data-href="<?php  echo $ref;?>" data-layout="button"></div>	



<!-- Fin-me gusta -->



<!-- twittear -->
<a href="https://twitter.com/share" class="twitter-share-button"
  data-dnt="true"
  data-count="none"
  data-via="twitterdev">
Tweettear
</a>
</div>
<script type="text/javascript">
window.twttr=(function(d,s,id){var t,js,fjs=d.getElementsByTagName(s)[0];if(d.getElementById(id)){return}js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);return window.twttr||(t={_e:[],ready:function(f){t._e.push(f)}})}(document,"script","twitter-wjs"));
</script>
<!-- fin_twittear -->

<!-- comentarios -->
<div style="text-align:center;">
<div class="fb-comments" data-href="<?php  echo $ref;?>" data-width="100%" data-numposts="5" data-mobile="Auto-detected" data-colorscheme="light"></div>
</div>
<!-- fin-comentarios -->

 <?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_viewInteriorNoticia',
	'template'=>"{pager}\n{items}" //THIS DOES WHAT YOU WANT
	)); ?>

