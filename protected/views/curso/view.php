<?php
/* @var $this CursoController */
/* @var $model Curso */

$this->menu=array(
	array('label'=>'List Curso', 'url'=>array('index')),
	array('label'=>'Create Curso', 'url'=>array('create')),
	array('label'=>'Update Curso', 'url'=>array('update', 'id'=>$model->cu_id)),
	array('label'=>'Delete Curso', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->cu_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Curso', 'url'=>array('admin')),
);
?>

	<div style="text-align:center;padding-top:20px;">
		<h1><?php echo $model->cu_nombre; ?></h1>
	</div>


<!--
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'cu_id',
		'cu_nombre',
		'cu_creador',
		'cu_foto',
		'cu_info',
		'con_semestre',
	),
)); ?>
-->
<div style='width: 270px;display:inline-block;margin-left:20px;padding-bottom:20px;font-family: "Open Sans","Helvetica Neue",Helvetica,Arial,sans-serif;'>
	<h4>Creador curso</h4>
	<hr>
	

<div  style="display:inline-block;">
	
	<?php 
	$estructura =Yii::app()->baseUrl.'/protected/cursos';
	$path="$estructura/$model->cu_foto";
	 ?>

	<img src="<?php echo $path?>" style="border-radius: 50% 50% 50% 50%;">
</div>

<div style="display:inline-block;vertical-align:top;">
	<b style="font-size:20px;"><?php echo $model->cu_creador ?></b>
	<br>
	Coordinador Programa EPI
</div>
	<br>
	<br>
	<br>
	<b style="color: #353535;font-size: 18px;">DESCRIPCIÓN DEL CURSO</b>
	<hr>
	<?php echo $model->cu_info ?>

</div>

<div style="display:inline-block;width:740px;vertical-align:top;margin:20px;margin-top:50px;">
	<h2 class="tituloPrincipal">Documentos</h2>
	<div style="background-color:#FFFFFF;box-shadow:0 1px 2px rgba(0,0,0,0.5);">
		<table >
				<?php $this->widget('zii.widgets.CListView', array(
				'dataProvider'=>$dataProviderDocumentos,
				'itemView'=>'_viewDocumentos',
				)); ?>
		</table>
					
		<div style="text-align:right;">
			<?php echo CHtml::link('+Video',array('documentos/create','curso'=>$model->cu_id,'tipo'=>'video')); ?>
			<?php echo CHtml::link('+PDF',array('documentos/create','curso'=>$model->cu_id,'tipo'=>'PDF')); ?>
			<?php echo CHtml::link('+DOC',array('documentos/create','curso'=>$model->cu_id,'tipo'=>'DOC')); ?>
		</div>
	</div>
</div>


<div style="width: 270px;display:inline-block;vertical-align:top;">
	
	
	<div style="background-color: #f9f9f9;padding:15px;margin-top:20px;">
		<?php $this->widget('zii.widgets.CListView', array(
		'dataProvider'=>$dataProviderConsulta,
		'itemView'=>'_viewConsulta',
		)); ?>
		
	</div>


	<div style="background-color: #f9f9f9;padding:15px;margin-top:20px;">
	<b style="color: #353535;font-size: 18px;">COMENTARIOS</b>
	<hr>
	<div>
		<?php  $nuevoComentario= new Comentario;?>
		<?php $this->renderPartial('//comentario/_form', array('modelComentario'=>$nuevoComentario)); ?>
	</div>
	<div style="margin-left:20px;">
		
		<?php $this->widget('zii.widgets.CListView', array(
		'dataProvider'=>$dataProviderComentarios,
		'itemView'=>'_viewComentarios',
		)); ?>
	</div>
		
	</div>


</div>

<style>
.summary{
	display: none;
	
}

</style>