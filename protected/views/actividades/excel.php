<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<h1><?php echo $model->act_nombre; ?></h1>

<!-- obtener las respuestas -->
<?php 

$encuestas=Encuestaactividad::model();

echo "<br>";
 ?>

<TABLE id="encuesta" style="border-right:solid 1px;">
	
	<TR> <!-- fila -->	
		
		<td></td>
		<TD id="pregunta" style="border-left:none;">
			
		</TD>

		<TD class="arriba"  style="border-bottom:solid 1px;	border-left:solid 1px;border-top: solid 1px;font-family:wingdings;font-size: 21px;">
		J
		</TD> 

		<TD class="arriba" style="border-bottom:solid 1px;	border-left:solid 1px;border-top: solid 1px;font-family:wingdings;font-size: 21px;">
		K
		</TD> 

		<TD class="arriba" style="border-bottom:solid 1px;	border-left:solid 1px;border-top: solid 1px;font-family:wingdings;font-size: 21px;">
		L
		</TD> 

		<TD class="arriba" style="border-bottom:solid 1px;	border-left:solid 1px;border-top: solid 1px;">
			<label>Suma</label>
		</TD> 

		<TD class="arriba"  style="border-bottom:solid 1px;	border-left:solid 1px;border-top: solid 1px;font-family:wingdings;font-size: 21px;">
		J
		</TD> 

		<TD class="arriba" style="border-bottom:solid 1px;	border-left:solid 1px;border-top: solid 1px;font-family:wingdings;font-size: 21px;">
		K
		</TD> 

		<TD class="arriba" style="border-bottom:solid 1px;	border-left:solid 1px;border-top: solid 1px;font-family:wingdings;font-size: 21px;">
		L
		</TD> 
				
	</TR>
	
	<TR>
		<td></td>
		<TD style="border-bottom:solid 1px;border-top:solid 1px;	border-left:solid 1px;	width: 40%;">
			<label >¿Considero que hoy aprendí?</label>
		</TD> 
				
		<TD style="border-bottom:solid 1px;	border-left:solid 1px;"> <?php echo count($encuestas->findAll("en_pregunta1='De acuerdo'"." and act_id=".$model->act_id)) ?></TD>
		<TD style="border-bottom:solid 1px;	border-left:solid 1px;"> <?php echo count($encuestas->findAll("en_pregunta1='Ni acuerdo ni desacuerdo'"." and act_id=".$model->act_id)) ?></TD>
		<TD style="border-bottom:solid 1px;	border-left:solid 1px;"> <?php echo count($encuestas->findAll("en_pregunta1='En desacuerdo'"." and act_id=".$model->act_id)) ?></TD>
	
		<TD style="border-bottom:solid 1px;	border-left:solid 1px;"><?php echo $suma1=count($encuestas->findAll("en_pregunta1='De acuerdo'"." and act_id=".$model->act_id))+count($encuestas->findAll("en_pregunta1='Ni acuerdo ni desacuerdo'"." and act_id=".$model->act_id))+count($encuestas->findAll("en_pregunta1='En desacuerdo'"." and act_id=".$model->act_id)); ?></TD>
		
		<TD style="border-bottom:solid 1px;	border-left:solid 1px;"> <?php echo (count($encuestas->findAll("en_pregunta1='De acuerdo'"." and act_id=".$model->act_id))*100)/$suma1 ?>%</TD>
		<TD style="border-bottom:solid 1px;	border-left:solid 1px;"> <?php echo (count($encuestas->findAll("en_pregunta1='Ni acuerdo ni desacuerdo'"." and act_id=".$model->act_id))*100)/$suma1 ?>%</TD>
		<TD style="border-bottom:solid 1px;	border-left:solid 1px;"> <?php echo (count($encuestas->findAll("en_pregunta1='En desacuerdo'"." and act_id=".$model->act_id))*100)/$suma1 ?>%</TD>
	</TR>
	
	<TR>
		<td></td>
		<TD style="border-bottom:solid 1px;	border-left:solid 1px;	width: 40%;">
		<label >¿El curso de hoy ha cumplido mis expectativas?</label>
		</TD> 
				
		<TD style="border-bottom:solid 1px;	border-left:solid 1px;"> <?php echo count($encuestas->findAll("en_pregunta2='De acuerdo'"." and act_id=".$model->act_id)) ?></TD>
		<TD style="border-bottom:solid 1px;	border-left:solid 1px;"> <?php echo count($encuestas->findAll("en_pregunta2='Ni acuerdo ni desacuerdo'"." and act_id=".$model->act_id)) ?></TD>
		<TD style="border-bottom:solid 1px;	border-left:solid 1px;"> <?php echo count($encuestas->findAll("en_pregunta2='En desacuerdo'"." and act_id=".$model->act_id)) ?></TD>
	
		<TD style="border-bottom:solid 1px;	border-left:solid 1px;"><?php echo $suma2=count($encuestas->findAll("en_pregunta2='De acuerdo'"." and act_id=".$model->act_id))+count($encuestas->findAll("en_pregunta2='Ni acuerdo ni desacuerdo'"." and act_id=".$model->act_id))+count($encuestas->findAll("en_pregunta2='En desacuerdo'"." and act_id=".$model->act_id)); ?></TD>
		
		<TD style="border-bottom:solid 1px;	border-left:solid 1px;"> <?php echo (count($encuestas->findAll("en_pregunta2='De acuerdo'"." and act_id=".$model->act_id))*100)/$suma2 ?>%</TD>
		<TD style="border-bottom:solid 1px;	border-left:solid 1px;"> <?php echo (count($encuestas->findAll("en_pregunta2='Ni acuerdo ni desacuerdo'"." and act_id=".$model->act_id))*100)/$suma2 ?>%</TD>
		<TD style="border-bottom:solid 1px;	border-left:solid 1px;"> <?php echo (count($encuestas->findAll("en_pregunta2='En desacuerdo'"." and act_id=".$model->act_id))*100)/$suma2 ?>%</TD>
</TR>
	
	<TR>
		<td></td>
		<TD style="border-bottom:solid 1px;	border-left:solid 1px;	width: 40%;">
		<label >¿Estoy conforme con la metodología del curso?</label>
		</TD> 
				
		<TD style="border-bottom:solid 1px;	border-left:solid 1px;"> <?php echo count($encuestas->findAll("en_pregunta3='De acuerdo'"." and act_id=".$model->act_id)) ?></TD>
		<TD style="border-bottom:solid 1px;	border-left:solid 1px;"> <?php echo count($encuestas->findAll("en_pregunta3='Ni acuerdo ni desacuerdo'"." and act_id=".$model->act_id)) ?></TD>
		<TD style="border-bottom:solid 1px;	border-left:solid 1px;"> <?php echo count($encuestas->findAll("en_pregunta3='En desacuerdo'"." and act_id=".$model->act_id)) ?></TD>
	
		<TD style="border-bottom:solid 1px;	border-left:solid 1px;"><?php echo $suma3=count($encuestas->findAll("en_pregunta3='De acuerdo'"." and act_id=".$model->act_id))+count($encuestas->findAll("en_pregunta3='Ni acuerdo ni desacuerdo'"." and act_id=".$model->act_id))+count($encuestas->findAll("en_pregunta3='En desacuerdo'"." and act_id=".$model->act_id)); ?></TD>
		
		<TD style="border-bottom:solid 1px;	border-left:solid 1px;"> <?php echo (count($encuestas->findAll("en_pregunta3='De acuerdo'"." and act_id=".$model->act_id))*100)/$suma3 ?>%</TD>
		<TD style="border-bottom:solid 1px;	border-left:solid 1px;"> <?php echo (count($encuestas->findAll("en_pregunta3='Ni acuerdo ni desacuerdo'"." and act_id=".$model->act_id))*100)/$suma3 ?>%</TD>
		<TD style="border-bottom:solid 1px;	border-left:solid 1px;"> <?php echo (count($encuestas->findAll("en_pregunta3='En desacuerdo'"." and act_id=".$model->act_id))*100)/$suma3 ?>%</TD>
	</TR>

	<TR>
		<td></td>
		<TD style="border-bottom:solid 1px;	border-left:solid 1px;	width: 40%;">
		<label >¿Recomendaría este curso a otro compañero?</label>
		</TD> 
				
	<TD style="border-bottom:solid 1px;	border-left:solid 1px;"> <?php echo count($encuestas->findAll("en_pregunta4='De acuerdo'"." and act_id=".$model->act_id)) ?></TD>
		<TD style="border-bottom:solid 1px;	border-left:solid 1px;"> <?php echo count($encuestas->findAll("en_pregunta4='Ni acuerdo ni desacuerdo'"." and act_id=".$model->act_id)) ?></TD>
		<TD style="border-bottom:solid 1px;	border-left:solid 1px;"> <?php echo count($encuestas->findAll("en_pregunta4='En desacuerdo'"." and act_id=".$model->act_id)) ?></TD>
	
		<TD style="border-bottom:solid 1px;	border-left:solid 1px;"><?php echo $suma4=count($encuestas->findAll("en_pregunta4='De acuerdo'"." and act_id=".$model->act_id))+count($encuestas->findAll("en_pregunta4='Ni acuerdo ni desacuerdo'"." and act_id=".$model->act_id))+count($encuestas->findAll("en_pregunta4='En desacuerdo'"." and act_id=".$model->act_id)); ?></TD>
<TD style="border-bottom:solid 1px;	border-left:solid 1px;"> <?php echo (count($encuestas->findAll("en_pregunta4='De acuerdo'"." and act_id=".$model->act_id))*100)/$suma1 ?>%</TD>
<TD style="border-bottom:solid 1px;	border-left:solid 1px;"> <?php echo (count($encuestas->findAll("en_pregunta4='Ni acuerdo ni desacuerdo'"." and act_id=".$model->act_id))*100)/$suma1 ?>%</TD>
<TD style="border-bottom:solid 1px;	border-left:solid 1px;"> <?php echo (count($encuestas->findAll("en_pregunta4='En desacuerdo'"." and act_id=".$model->act_id))*100)/$suma1 ?>%</TD>
	</TR>
</TABLE>



<style>


table#encuesta td#pregunta{

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