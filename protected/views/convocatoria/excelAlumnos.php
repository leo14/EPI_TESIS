<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<h3>Alumnos Inscritos <?php echo  $model[0]->con_semestre;?></h3>


<table>
	<tr>
		<th style="border: solid rgb(188, 188, 188) 2px;">RUT</th>
		<th style="border: solid rgb(188, 188, 188) 2px;">NOMBRE ALUMNO(A)</th>
		<th style="border: solid rgb(188, 188, 188) 2px;">APELLIDO PATERNO</th>
		<th style="border: solid rgb(188, 188, 188) 2px;">APELLIDO MATERNO</th>
		<th style="border: solid rgb(188, 188, 188) 2px;">CAMPUS</th>
		<th style="border: solid rgb(188, 188, 188) 2px;">CARRERA</th>
		<th style="border: solid rgb(188, 188, 188) 2px;">E-MAIL</th>
		<th style="border: solid rgb(188, 188, 188) 2px;">TELEFONO</th>
		<th style="border: solid rgb(188, 188, 188) 2px;">E-MAIL 2</th>
		<th style="border: solid rgb(188, 188, 188) 2px;">COMENTARIO</th>
	</tr>
<?php foreach ($model as $data):?>	
	<tr>
		<td style="text-align: left;border: solid;"> <?php echo $data->al_rut ?></td>
		<td style="text-align: left;border: solid;"> <?php echo $data->al_nombre ?></td>
		<td style="text-align: left;border: solid;"> <?php echo $data->al_paterno ?></td>
		<td style="text-align: left;border: solid;"> <?php echo $data->al_materno ?></td>
		<td style="text-align: left;border: solid;"> <?php echo $data->al_campus ?></td>
		<td style="text-align: left;border: solid;"> <?php echo $data->al_carrera ?></td>
		<td style="text-align: left;border: solid;"> <?php echo $data->al_email ?></td>
		<td style="text-align: left;border: solid;"> <?php echo $data->al_telefono ?></td>
		<td style="text-align: left;border: solid;"> <?php echo $data->al_email2 ?></td>
		<td style="text-align: left;border: solid;"> <?php echo $data->al_comentario ?></td>
	</tr>
<?php  endforeach;?>
	
</table>