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

<div style='width: 270px;display:inline-block;margin-left:20px;padding-bottom:20px;font-family: "Open Sans","Helvetica Neue",Helvetica,Arial,sans-serif;margin-top: 20px;'>
	<h style="color: #353535;font-size: 18px;">Creador curso</h>

	
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
	<div style="text-align:center;padding-top:20px;margin-bottom:40px;">
		<h1><?php echo $model->cu_nombre; ?></h1>
	</div>
	<div style="background-color:#F0F0F0;box-shadow:0 1px 2px rgba(0,0,0,0.5);">
		
	<h2 class="tituloPrincipal" style="padding-top:10px;padding-left:10px;">Documentos</h2>
		<table style="background-color:#FFFFFF;">
				<?php $this->widget('zii.widgets.CListView', array(
				'dataProvider'=>$dataProviderDocumentos,
				'itemView'=>'_viewDocumentos',
				)); ?>
		</table>
					
	</div>
</div>


<div style="width: 270px;display:inline-block;vertical-align:top;">
	
	<div style="background-color: #f9f9f9;padding:15px;margin-top:20px;">
	<h style="color: #353535;font-size: 18px;">Consultas</h>
	<hr>
		<?php $this->widget('zii.widgets.CListView', array(
		'dataProvider'=>$dataProviderConsulta,
		'itemView'=>'_viewConsulta',
		)); ?>
		
	</div>


	<div style="background-color: #f9f9f9;padding:15px;margin-top:20px;">
	<h style="color: #353535;font-size: 18px;">Comentarios</h>
	<hr>
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
tr:focus, tr:hover {background-color:#06cca5;}

</style>