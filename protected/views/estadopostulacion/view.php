<?php
/* @var $this EstadopostulacionController */
/* @var $model Estadopostulacion */

//si es un alumno
if(Yii::app()->user->checkAccess('alumno') and !Yii::app()->user->isSuperAdmin){

$this->menu=array(
	array('label'=>'Proyecto', 'url'=>array('proyecto/admin')),
	array('label'=>'Subir Archivos', 'url'=>array('estadopostulacion/update', 'id'=>$model->pro_idProyecto)),
	
);
}


?>

<?php  
$nombreProyecto=Proyecto::model()->find("pro_idProyecto=".$model->pro_idProyecto)->pro_titulo;
?>
<h1><?php echo $nombreProyecto; ?></h1>


<div class="estado">

<?php 
if($model->espos_inscripcion!=null){
	?>
	<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/estado/inscripcion.png" class="completo">
<?php 
}
else{
 ?>
	<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/estado/inscripcion.png" class="incompleto">

<?php 
}
  ?>
<label >Inscripción</label>
</div>

<div class="estado">
<?php 
if($model->espos_anexo2!=null){
	?>
	<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/estado/anexo2.png" class="completo">
<?php 
}
else{
 ?>
	<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/estado/anexo2.png" class="incompleto">

<?php 
}
  ?>
 <label >Postulación</label>
</div>


<div class="estado">
<?php 
if($model->espos_cartaEmpresa!=null){
	?>
	<a  href="protected\proyectos/<?php echo $model->espos_cartaEmpresa; ?>">
		<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/estado/cartaEmpresa.png" class="completo">
	</a>
<?php 
}
else{
 ?>
	<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/estado/cartaEmpresa.png" class="incompleto">

<?php 
}
  ?>
 <label >Carta Empresa</label>
</div>




<div class="estado">
<?php 
if($model->espos_prehallasgo!=null){
	?>
	<a  href="protected\proyectos/<?php echo $model->espos_prehallasgo; ?>">
		<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/estado/prehallasgo.png" class="completo">
	</a>
<?php 
}
else{
 ?>
	<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/estado/prehallasgo.png" class="incompleto">

<?php 
}
  ?>
 <label >Informe Prehallazgo</label>
</div>




<div class="estado">
<?php 
if($model->espos_copiaCarnet!=null){
	?>
	 <a  href="protected\proyectos/<?php echo $model->espos_copiaCarnet; ?>">
		<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/estado/copiaCarnet.png" class="completo">
	 </a>
<?php 
}
else{
 ?>
 	<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/estado/copiaCarnet.png" class="incompleto">
	

<?php 
}
  ?>
 <label >Copia carnet</label>
</div>




<div class="estado">
<?php 
if($model->espos_alumnoRegular!=null){
	?>
	<a  href="protected\proyectos/<?php echo $model->espos_alumnoRegular; ?>">
		<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/estado/alumnoRegular.png" class="completo">
	</a>
<?php 
}
else{
 ?>
	<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/estado/alumnoRegular.png" class="incompleto">

<?php 
}
  ?>
 <label >Certificado Alumno Regular</label>
</div>


<div class="estado">
<?php 
if($model->espos_curriculum!=null){
	?>
	<a  href="protected\proyectos/<?php echo $model->espos_curriculum; ?>">
		<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/estado/curriculum.png" class="completo">
	</a>
<?php 
}
else{
 ?>
	<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/estado/curriculum.png" class="incompleto">

<?php 
}
  ?>
 <label >Currículum</label>
</div>


<div class="estado">
<?php 
if($model->espos_informeFinal!=null){
	?>
	<a  href="protected\proyectos/<?php echo $model->espos_informeFinal; ?>">
		<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/estado/informeFinal.png" class="completo">
	</a>
<?php 
}
else{
 ?>
	<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/estado/informeFinal.png" class="incompleto">

<?php 
}
  ?>
 <label >Informe Final</label>
</div>

<style>
	
.completo{
	border-radius: 180px;
	overflow: hidden;
	border-width: 9px;
	border-style: solid;
	border-color: #00a49d;
	width: 110px;
	height: 110px;
}

.incompleto{
-webkit-filter: blur(5px);
border-radius: 180px;
overflow: hidden;
border-width: 9px;
border-style: solid;
border-color: #d6d4d8;
width: 110px;
height: 110px;
}

.estado{
	display: inline-block;
	text-align: center;
}

.estado img{
	display: block;
}

</style>


