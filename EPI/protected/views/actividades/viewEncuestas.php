<?php
/* @var $this ActividadesController */
/* @var $model Actividades */


if (count(Encuestaactividad::model()->findAll("act_id=".$model->act_id." and en_estado=1"))>0) {


$this->menu=array(
	array('label'=>'Pasar a Excel', 'url'=>array('viewEncuestas','id'=>$model->act_id,'excel'=>1,)),
);

}
?>

<h1><?php echo $model->act_nombre; ?></h1>



<?php 

$encuestas=Encuestaactividad::model();


echo "<br>";
echo "La han respondido ".count($encuestas->findAll("act_id=".$model->act_id." and en_estado=1"))." alumnos";

 



if (count($encuestas->findAll("act_id=".$model->act_id." and en_estado=1"))>0) {
 ?>

<TABLE id="encuesta">
	
	<TR> <!-- fila -->	
		<TD id="pregunta" style="border-left:none;">
			
		</TD>

		<TD class="arriba">
			<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/encuesta1.png" >
		</TD> 

		<TD class="arriba">
			<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/encuesta2.png" >
		</TD> 

		<TD class="arriba">
			<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/encuesta3.png" >
		</TD> 

		<TD class="arriba">
			<label>Suma</label>
		</TD> 

		<TD class="arriba">
			<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/encuesta1.png" >
		</TD> 

		<TD class="arriba">
			<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/encuesta2.png" >
		</TD> 

		<TD class="arriba">
			<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/encuesta3.png" >
		</TD> 
				
	</TR>
	
	<TR>
		<TD>
			<label >¿Considero que hoy aprendí?</label>
		</TD> 
				
		<TD> <?php echo count($encuestas->findAll("en_pregunta1='De acuerdo'"." and act_id=".$model->act_id)) ?></TD>
		<TD> <?php echo count($encuestas->findAll("en_pregunta1='Ni acuerdo ni desacuerdo'"." and act_id=".$model->act_id)) ?></TD>
		<TD> <?php echo count($encuestas->findAll("en_pregunta1='En desacuerdo'"." and act_id=".$model->act_id)) ?></TD>
	
		<TD><?php echo $suma1=count($encuestas->findAll("en_pregunta1='De acuerdo'"." and act_id=".$model->act_id))+count($encuestas->findAll("en_pregunta1='Ni acuerdo ni desacuerdo'"." and act_id=".$model->act_id))+count($encuestas->findAll("en_pregunta1='En desacuerdo'"." and act_id=".$model->act_id)); ?></TD>
		
		<TD> <?php echo (count($encuestas->findAll("en_pregunta1='De acuerdo'"." and act_id=".$model->act_id))*100)/$suma1 ?>%</TD>
		<TD> <?php echo (count($encuestas->findAll("en_pregunta1='Ni acuerdo ni desacuerdo'"." and act_id=".$model->act_id))*100)/$suma1 ?>%</TD>
		<TD> <?php echo (count($encuestas->findAll("en_pregunta1='En desacuerdo'"." and act_id=".$model->act_id))*100)/$suma1 ?>%</TD>
	</TR>
	
	<TR>
		<TD>
		<label >¿El curso de hoy ha cumplido mis expectativas?</label>
		</TD> 
				
		<TD> <?php echo count($encuestas->findAll("en_pregunta2='De acuerdo'"." and act_id=".$model->act_id)) ?></TD>
		<TD> <?php echo count($encuestas->findAll("en_pregunta2='Ni acuerdo ni desacuerdo'"." and act_id=".$model->act_id)) ?></TD>
		<TD> <?php echo count($encuestas->findAll("en_pregunta2='En desacuerdo'"." and act_id=".$model->act_id)) ?></TD>
	
		<TD><?php echo $suma2=count($encuestas->findAll("en_pregunta2='De acuerdo'"." and act_id=".$model->act_id))+count($encuestas->findAll("en_pregunta2='Ni acuerdo ni desacuerdo'"." and act_id=".$model->act_id))+count($encuestas->findAll("en_pregunta2='En desacuerdo'"." and act_id=".$model->act_id)); ?></TD>
		
		<TD> <?php echo (count($encuestas->findAll("en_pregunta2='De acuerdo'"." and act_id=".$model->act_id))*100)/$suma2 ?>%</TD>
		<TD> <?php echo (count($encuestas->findAll("en_pregunta2='Ni acuerdo ni desacuerdo'"." and act_id=".$model->act_id))*100)/$suma2 ?>%</TD>
		<TD> <?php echo (count($encuestas->findAll("en_pregunta2='En desacuerdo'"." and act_id=".$model->act_id))*100)/$suma2 ?>%</TD>
</TR>
	
	<TR>
		<TD>
		<label >¿Estoy conforme con la metodología del curso?</label>
		</TD> 
				
		<TD> <?php echo count($encuestas->findAll("en_pregunta3='De acuerdo'"." and act_id=".$model->act_id)) ?></TD>
		<TD> <?php echo count($encuestas->findAll("en_pregunta3='Ni acuerdo ni desacuerdo'"." and act_id=".$model->act_id)) ?></TD>
		<TD> <?php echo count($encuestas->findAll("en_pregunta3='En desacuerdo'"." and act_id=".$model->act_id)) ?></TD>
	
		<TD><?php echo $suma3=count($encuestas->findAll("en_pregunta3='De acuerdo'"." and act_id=".$model->act_id))+count($encuestas->findAll("en_pregunta3='Ni acuerdo ni desacuerdo'"." and act_id=".$model->act_id))+count($encuestas->findAll("en_pregunta3='En desacuerdo'"." and act_id=".$model->act_id)); ?></TD>
		
		<TD> <?php echo (count($encuestas->findAll("en_pregunta3='De acuerdo'"." and act_id=".$model->act_id))*100)/$suma3 ?>%</TD>
		<TD> <?php echo (count($encuestas->findAll("en_pregunta3='Ni acuerdo ni desacuerdo'"." and act_id=".$model->act_id))*100)/$suma3 ?>%</TD>
		<TD> <?php echo (count($encuestas->findAll("en_pregunta3='En desacuerdo'"." and act_id=".$model->act_id))*100)/$suma3 ?>%</TD>
	</TR>

	<TR>
		<TD>
		<label >¿Recomendaría este curso a otro compañero?</label>
		</TD> 
				
	<TD> <?php echo count($encuestas->findAll("en_pregunta4='De acuerdo'"." and act_id=".$model->act_id)) ?></TD>
		<TD> <?php echo count($encuestas->findAll("en_pregunta4='Ni acuerdo ni desacuerdo'"." and act_id=".$model->act_id)) ?></TD>
		<TD> <?php echo count($encuestas->findAll("en_pregunta4='En desacuerdo'"." and act_id=".$model->act_id)) ?></TD>
	
		<TD><?php echo $suma4=count($encuestas->findAll("en_pregunta4='De acuerdo'"." and act_id=".$model->act_id))+count($encuestas->findAll("en_pregunta4='Ni acuerdo ni desacuerdo'"." and act_id=".$model->act_id))+count($encuestas->findAll("en_pregunta4='En desacuerdo'"." and act_id=".$model->act_id)); ?></TD>
<TD> <?php echo (count($encuestas->findAll("en_pregunta4='De acuerdo'"." and act_id=".$model->act_id))*100)/$suma1 ?>%</TD>
<TD> <?php echo (count($encuestas->findAll("en_pregunta4='Ni acuerdo ni desacuerdo'"." and act_id=".$model->act_id))*100)/$suma1 ?>%</TD>
<TD> <?php echo (count($encuestas->findAll("en_pregunta4='En desacuerdo'"." and act_id=".$model->act_id))*100)/$suma1 ?>%</TD>
	</TR>
</TABLE>
<?php 
	}
 ?>

<style>

table#encuesta{
	/*border-top: solid 1px;*/
	border-right:solid 1px;

}
table#encuesta td{
	border-bottom:solid 1px;
	border-left:solid 1px;

}

table#encuesta td.arriba{
	border-top: solid 1px;
}
/*table#encuesta td.botones img {
	width: 100%; 
}*/
table#encuesta td#pregunta{
	width: 40%;
}



table#encuesta td.botones{
width: 200px;	
text-align: center;
border-left:none;
}

	#encuestaactividad-form .row > label{
		display: inline-block;
	}

	#encuestaactividad-form .row {
		text-align: right;
	}
	
</style>