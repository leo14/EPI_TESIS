<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	

	<!-- boostrap -->
	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/bootstrap-3.3.1-dist/dist/css/bootstrap.min.css" />



    <!-- Start WOWSlider.com HEAD section --> <!-- add to the <head> of your page -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/engine1/style.css" />
	 <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/engine1/jquery.js"></script>
	<!-- End WOWSlider.com HEAD section -->

	<!-- para que funcione el menu responsive -->
	<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.js"></script>        -->
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>      
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/bootstrap-3.3.1-dist/dist/js/bootstrap.min.js"></script>

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />

	
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

	<div class="container" id="page" style="padding:0px">

		<div id="header">

			<?php  
				$imageUrl = "".Yii::app()->request->baseUrl."/images/header_logoEpi.png";
				$image = '<img src="'.$imageUrl.'" style="position: absolute;" id="imgLogo" >';
				echo CHtml::link($image, array('/site/index'));
			?>
			<div style="text-align:right;">
				<div id="auspiciadores" >
					<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/DGI-UBB.png" style="vertical-align: top;margin-top:-7px;">
					<?php  
						$imageUrl = "".Yii::app()->request->baseUrl."/images/header_logosAuspiciadores2.png";
						$image = '<img src="'.$imageUrl.'" style="vertical-align: top;" >';
						echo CHtml::link($image, 'http://www.ubiobio.cl/cdinesubb/');
						?>
					<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/header_logosAuspiciadores3.1.png" style="vertical-align: top;">
					<?php  
						$imageUrl = "".Yii::app()->request->baseUrl."/images/header_logosAuspiciadores3.2.png";
						$image = '<img src="'.$imageUrl.'" style="vertical-align: top;" >';
						echo CHtml::link($image, 'http://www.dgi.ubiobio.cl');
					?>
				</div>
					
				<?php  
					$imageUrl = "".Yii::app()->request->baseUrl."/images/btn_inscripcion.png";
					$image = '<img src="'.$imageUrl.'" style="display:inline-block;float: right;margin-right: 3%;margin-right: 3%;right: 0%;" id="imgInscripcion">';
					echo CHtml::link($image, array('/alumno/create'));
				?>
			</div>
				
			<div id="mainmenu">

				<nav class="navbar navbar-default top-navbar" role="navigation" style="border: none;background: white;display: inline-block;">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex-collapse">
							<span class="sr-only">Expand the menu</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>
			
					<div class="collapse navbar-collapse navbar-ex-collapse">
						<?php  
							
							//si ingresa un alumno
							if(Yii::app()->user->checkAccess('alumno')&&!Yii::app()->user->isSuperAdmin){
								
								//si el alumno no tiene asignado un proyecto
								if(Yii::app()->user->checkAccess('alumno')&&!Yii::app()->user->isSuperAdmin&&count(Alumnoproyecto::model()->find("al_rut='".Yii::app()->user->name."'"))==0){
								$this->widget('zii.widgets.CMenu',array(
								'items'=>array(
									//link para alumnos
										array('label'=>'Consultas', 'url'=>array('consultainterna/create'),'visible'=>(Yii::app()->user->checkAccess('alumno')&&!Yii::app()->user->isSuperAdmin)),
										array('label'=>'Actividades', 'url'=>array('actividades/index'),'visible'=>(Yii::app()->user->checkAccess('alumno')&&!Yii::app()->user->isSuperAdmin)),
										array('label'=>'Proyecto', 'url'=>array('proyecto/create'),'visible'=>(Yii::app()->user->checkAccess('alumno')&&!Yii::app()->user->isSuperAdmin)),
										array('label'=>'Encuestas', 'url'=>array('encuestaactividad/admin'),'visible'=>(Yii::app()->user->checkAccess('alumno')&&!Yii::app()->user->isSuperAdmin)),
										array('label'=>'Salir', 'url'=>Yii::app()->user->ui->logoutUrl	, 'visible'=>!Yii::app()->user->isGuest),
										),
									'activeCssClass' => 'active',
									'htmlOptions' => array('class'=>'nav navbar-nav',),
														
								));
								} 
								//si el alumno tiene asignado un proyecto
								else{
								$this->widget('zii.widgets.CMenu',array(
								'items'=>array(
									//link para alumnos
										array('label'=>'Consultas', 'url'=>array('consultainterna/create'),'visible'=>(Yii::app()->user->checkAccess('alumno')&&!Yii::app()->user->isSuperAdmin)),
										array('label'=>'Actividades', 'url'=>array('actividades/index'),'visible'=>(Yii::app()->user->checkAccess('alumno')&&!Yii::app()->user->isSuperAdmin)),
										array('label'=>'Postulación', 'url'=>array('estadopostulacion/view&id='.Alumnoproyecto::model()->find("al_rut='".Yii::app()->user->name."'")->pro_idProyecto),'visible'=>(Yii::app()->user->checkAccess('alumno')&&!Yii::app()->user->isSuperAdmin)),
										array('label'=>'Encuestas', 'url'=>array('encuestaactividad/admin'),'visible'=>(Yii::app()->user->checkAccess('alumno')&&!Yii::app()->user->isSuperAdmin)),
										array('label'=>'Salir', 'url'=>Yii::app()->user->ui->logoutUrl	, 'visible'=>!Yii::app()->user->isGuest),
										),
									'activeCssClass' => 'active',
									'htmlOptions' => array('class'=>'nav navbar-nav',),
														
								));
								} 
							}
							//fin_si ingresa un alumno

							//si ingresa un administrador
							if(Yii::app()->user->isSuperAdmin){

								//si no hay ninguna convocatoria
								if(count(Convocatoria::model()->find("con_estado=1"))==0) {

								$this->widget('zii.widgets.CMenu',array(
									'items'=>array(

										//link administrador
											array('label'=>'Noticias', 'url'=>array('/noticia/admin'), 'visible'=>(Yii::app()->user->isSuperAdmin)),
											array('label'=>'Consultas Público', 'url'=>array('/consulta/admin'), 'visible'=>(Yii::app()->user->isSuperAdmin)),
											array('label'=>'Consultas Participantes', 'url'=>array('/consultainterna/admin'), 'visible'=>(Yii::app()->user->isSuperAdmin)),
											array('label'=>'Convocatoria', 'url'=>array('/convocatoria/create'), 'visible'=>(Yii::app()->user->isSuperAdmin)),
											array('label'=>'Subir Archivo', 'url'=>array('subirarchivos/index'),'visible'=>(Yii::app()->user->isSuperAdmin)),
											array('label'=>'Salir', 'url'=>Yii::app()->user->ui->logoutUrl	, 'visible'=>!Yii::app()->user->isGuest),
											),
										'activeCssClass' => 'active',
										'htmlOptions' => array('class'=>'nav navbar-nav',),
										
									)); 

								}

								//si hay convocatorias
								elseif(count(Convocatoria::model()->find("con_estado=1"))>0){
									$this->widget('zii.widgets.CMenu',array(
							'items'=>array(

								//link administrador
									array('label'=>'Noticias', 'url'=>array('/noticia/admin'), 'visible'=>(Yii::app()->user->isSuperAdmin)),
									array('label'=>'Inscritos', 'url'=>array('/alumno/admin'), 'visible'=>(Yii::app()->user->isSuperAdmin)),
									array('label'=>'Consultas Público', 'url'=>array('/consulta/admin'), 'visible'=>(Yii::app()->user->isSuperAdmin)),
									array('label'=>'Consultas Participantes', 'url'=>array('/consultainterna/admin'), 'visible'=>(Yii::app()->user->isSuperAdmin)),
									array('label'=>'Convocatoria', 'url'=>array('/actividades/admin'), 'visible'=>(Yii::app()->user->isSuperAdmin)),
									array('label'=>'Postulaciones', 'url'=>array('proyecto/admin'), 'visible'=>(Yii::app()->user->isSuperAdmin)),
									array('label'=>'Encuestas', 'url'=>array('actividades/adminEncuestas'), 'visible'=>(Yii::app()->user->isSuperAdmin)),
									array('label'=>'Subir Archivo', 'url'=>array('subirarchivos/index'),'visible'=>(Yii::app()->user->isSuperAdmin)),
									array('label'=>'Salir', 'url'=>Yii::app()->user->ui->logoutUrl	, 'visible'=>!Yii::app()->user->isGuest),
									),
								'activeCssClass' => 'active',
								'htmlOptions' => array('class'=>'nav navbar-nav',),
								
							)); 


								}

							}
							//fin_si ingresa un administrador



							if(!Yii::app()->user->checkAccess('alumno') && !Yii::app()->user->isSuperAdmin){


						$this->widget('zii.widgets.CMenu',array(
							'items'=>array(
								// array('label'=>'Home', 'url'=>array('/site/index')),
								// array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
								// array('label'=>'Contact', 'url'=>array('/site/contact')),

								//CRUGE
									// array('label'=>'Administrar Usuarios'
									// 	, 'url'=>Yii::app()->user->ui->userManagementAdminUrl
									// 	, 'visible'=>Yii::app()->user->isSuperAdmin),

								//links externos
									array('label'=>'Programa EPI', 'url'=>array('site/page', 'view'=>'programaEpi'),'visible'=>(!Yii::app()->user->isSuperAdmin && !Yii::app()->user->checkAccess('alumno'))),
									array('label'=>'Convocatorias', 'url'=>array('site/page', 'view'=>'convocatorias'),'visible'=>(!Yii::app()->user->isSuperAdmin && !Yii::app()->user->checkAccess('alumno'))),
									array('label'=>'Noticias', 'url'=>array('/noticia/index'),'visible'=>(!Yii::app()->user->isSuperAdmin)),
									array('label'=>'Galería', 'url'=>array('site/page','view'=>'galeria'),'visible'=>(!Yii::app()->user->isSuperAdmin)),
									array('label'=>'Contacto', 'url'=>array('consulta/create'),'visible'=>(!Yii::app()->user->checkAccess('alumno'))),
									array('label'=>'Ingresar', 'url'=>Yii::app()->user->ui->loginUrl, 'visible'=>Yii::app()->user->isGuest,'itemOptions'=>array('style'=>'background-color: #bebebe;')),

									

								//link para evaluadores
									array('label'=>'Evaluaciones', 'url'=>array('/proyectoevaluador/adminEvaluador'),'visible'=>(Yii::app()->user->checkAccess('evaluador')&&!Yii::app()->user->isSuperAdmin)),

								//link administrador
									array('label'=>'Noticias', 'url'=>array('/noticia/admin'), 'visible'=>(Yii::app()->user->isSuperAdmin)),
									array('label'=>'Inscritos', 'url'=>array('/alumno/admin'), 'visible'=>(Yii::app()->user->isSuperAdmin)),
									array('label'=>'Consultas Público', 'url'=>array('/consulta/admin'), 'visible'=>(Yii::app()->user->isSuperAdmin)),
									array('label'=>'Consultas Participantes', 'url'=>array('/consultainterna/admin'), 'visible'=>(Yii::app()->user->isSuperAdmin)),
									array('label'=>'Convocatoria', 'url'=>array('/actividades/admin'), 'visible'=>(Yii::app()->user->isSuperAdmin)),
									array('label'=>'Postulaciones', 'url'=>array('proyecto/admin/admin'), 'visible'=>(Yii::app()->user->isSuperAdmin)),
									array('label'=>'Evaluaciones', 'url'=>array('/proyectoevaluador/admin'), 'visible'=>(Yii::app()->user->isSuperAdmin)),
									array('label'=>'Encuestas', 'url'=>array('actividades/adminEncuestas'), 'visible'=>(Yii::app()->user->isSuperAdmin)),
									array('label'=>'Subir Archivo', 'url'=>array('subirarchivos/index'),'visible'=>(Yii::app()->user->isSuperAdmin)),
									array('label'=>'Salir', 'url'=>Yii::app()->user->ui->logoutUrl	, 'visible'=>!Yii::app()->user->isGuest),
									),
								'activeCssClass' => 'active',
								'htmlOptions' => array('class'=>'nav navbar-nav',),
								
							)); 

							}
							?>

					</div>
				</nav>
				<div id="redesSociales" >
					<?php  
						$imageUrl = "".Yii::app()->request->baseUrl."/images/logo_face.png";
						$image = '<img src="'.$imageUrl.'" >';
						echo CHtml::link($image,  'http://www.facebook.com/programaepi?ref=hl',array('target'=>'_blank'));
							
						$imageUrl = "".Yii::app()->request->baseUrl."/images/logo_twitter.png";
						$image = '<img src="'.$imageUrl.'"  >';
						echo CHtml::link($image, 'http://www.twitter.com/programaepi',array('target'=>'_blank'));
							
						$imageUrl = "".Yii::app()->request->baseUrl."/images/logo_linkedin.png";
						$image = '<img src="'.$imageUrl.'" >';
						echo CHtml::link($image, 'http://cl.linkedin.com/in/innovacionUBB',array('target'=>'_blank'));
							
						$imageUrl = "".Yii::app()->request->baseUrl."/images/logo_youtube.png";
						$image = '<img src="'.$imageUrl.'" >';
						echo CHtml::link($image, 'https://www.youtube.com/channel/UCHxdayTfL2vJZqekkKO-ZoQ',array('target'=>'_blank'));
					?>	
				</div>
			</div><!-- mainmenu -->

		</div><!-- header -->

		<?php echo $content; ?>

				
		
		<div id="footer" style="background-color:#0BD8B0;text-align: center;">
			<!-- <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/index_footer.png" > -->
			<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/index_footer1.1.png" >
			<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/index_footer1.2.png" >
			<?php  
				$imageUrl = "".Yii::app()->request->baseUrl."/images/index_footer1.3.png";
				$image = '<img src="'.$imageUrl.'">';
				echo CHtml::link($image, 'http://www.ubiobio.cl/cdinesubb/');
			?>

			<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/index_footer1.4.png" >
			<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/index_footer1.5.png" >
			
			<?php  
				$imageUrl = "".Yii::app()->request->baseUrl."/images/index_footer1.6.png";
				$image = '<img src="'.$imageUrl.'" >';
				echo CHtml::link($image, 'http://www.dgi.ubiobio.cl');
			?>

			<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/index_footer1.7.png" >
			<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/index_footer1.8.png" >
			<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/index_footer1.9.png" >
		</div>

		
	</div><!-- page -->

</body>
</html>


<style>


	#file_upload-button{
		color: white;
		background: red;
		font-size: 12px;
		font-family: Verdana,Helvetica;
		font-weight: bold;
		border: 0px;
		border-radius: 15px;
		
	}
	h3 {
		color: #06cca5;
		margin-bottom: 0em;
		margin-top: 20px;
	}
	/*.contenedor {text-align: center;}*/

 	#inscripcionIzquierda{text-align: center;}
	
	

	div.view {
		margin: 10px 0;
		display: inline-block;
		width: 254px;
		vertical-align: top;
		padding-bottom: 10px;
	}

	div.view img {
		width: 100%;
		height: auto;
	}

	div#redesSociales{
		vertical-align: top;
	}
	#mainmenu ul{
		padding: 0px;
	}
	#redesSociales img{
		/*display:inline-block;
		float: right;
		margin-right: 3%;*/
	}

	.navbar{
		min-height: 0px;
		margin-bottom: 0px;
	}
	form input[type="text"], textarea, input[type="password"],select{
		border: 2px solid red;
	}
	form input[type="time"]{
		border: 2px solid red;
		height: 25px;
		
	}
	form input[type="text"],input[type="password"],select{
		height: 25px;
	}

	/*#actividades-form{
		color: #a9a9ae;
	}*/

	form input[type="submit"]{
		color: white;
		background: red;
		font-size: 12px;
		font-family: Verdana,Helvetica;
		font-weight: bold;
		border: 0px;
		width: 80px;
		height: 30px;
		border-radius: 15px;
	}
	#alumnoInscripcion{
		/*margin-left: 180px;*/
	}
	#auspiciadores{
		display: inline-block;
		margin-right: 32px;
	}

	#redesSociales{
		display: inline;
	}
	.navbar-header{
		/*width: 197px;*/
	}
	#imgLogo{
		/*margin-left: 50px;*/
	}
	.descripcion{
		/*margin-left: 52px;*/
	}

	#principal img{
				max-width: 100%;
	}

	.inscripcion{
		/*margin-left: 65px;*/
	}

	.inscripcion .titulo{
		text-align: center;
		margin-top: 100px; 
		margin-bottom: 80px; 
	}

	#divImagenNoticia, #imagenNoticia{
		/*width: 500px;*/
	}

	#divImagenNoticia{
		float: left;
		margin-right: 30px;
		max-height: 500px;
		overflow: hidden;
		max-width: 500px;
	}

	/*views proyecto*/
	#proyecto-form label{
		display: inline-block;
	}
	
	
	form div.row2 input[type="text"], input[type="password"],select{
		
		width: 35%;
	}

	
	form div.row4 input[type="text"], input[type="password"],select{
		
		width: 10%;
			}

	#proyecto-form textarea{
		width: 100%;
	}
	#proyecto-form input[type="text"],textarea{
		border: 2px solid #949494;
	}
	
	/*fin_views proyecto*/


input[type="text"],textarea,select{
	width: 80%;
}
	#page{
		width: 100%;
	}
	#logon-form input[type="text"], input[type="password"]{
		width:100%;
	} 
</style>


<style> /*puntos de responsive*/



		@media all and (max-width: 450px){
			#imgLogo{
				top: 50px;
				margin-left: 0%;
			}
			.comentarioLetras{
				width: 100%;
			}
			.comentario p{
				margin-left: 5px;
				
			}
			.comentario{
				margin-left: 10px; 
				display: block;
			}

		}




@media all and (max-width: 767px){/*formato movil*/

	div.items{text-align: center;}

	#divImagenNoticia, #imagenNoticia{width: 95%}

	#divImagenNoticia{overflow: hidden;}

	#alumnoInscripcion{margin-left: 0px;}
	
	/*#content{text-align: -webkit-center;}*/

	#principal{width: 93%;display: inline-block;}
	
	.imgBeneficio{width: 100%;}

	#redesIndex{width:70%;}

	.navbar{z-index: 1001;margin-top: 135px;}
	
	#imgInscripcion{position: absolute;}

	/*cosas que se eliminan*/
	#segundaria{display: none;}
	#redesSociales{display: none;}
	#auspiciadores{display: none;}

	#principal{padding-top:5%;padding-right:5%;padding-left:2%;}

	/*comportamiento del logo*/
	#imgLogo{margin-left:25%;top: 50px;	}
	@media (min-width: 397px) and (max-width: 469px){#imgLogo{margin-left:15%;}}
	@media all and (max-width: 396px){#imgLogo{margin-left:7%;}}
	
} /*fin_formato movil*/

/*eliminar la galeria*/
@media all and (max-width: 849px){#galeriaIndex{display: none;}}


@media (min-width: 768px){/*mas de mobile*/

	#fb-root {
    display: none;
}

	.contenedor{
		min-height: 500px;
	}	
/* To fill the container and nothing else */

.fb_iframe_widget, .fb_iframe_widget span, .fb_iframe_widget span iframe[style] {
    width: 100% !important;
}
	#principal{
		width: 62%;
		margin-bottom: 20px;
		padding-bottom: 20px;
	}
	#segundaria{
		width: 23%;
	}
	/*exterior del div principal*/
	#principal{margin-top: 30px;margin-right: 2%;margin-left: 4%;}
	
	/*contenido del div principal*/
	#principal{padding-top:59px;padding-right:52px;padding-left:25px;}


	/*exterior del div principal*/
	.igualesIzquierda{margin-top: 30px;margin-right: 2%;margin-left: 4%;}
	
	/*contenido del div principal*/
	.igualesIzquierda{padding-top:59px;padding-right:52px;padding-left:25px;}

	.igualesDerecha{padding-top:59px;margin-top: 30px;text-align: center;}

	.igualesIzquierda, .igualesDerecha{	
		display: inline-block;
		width: 44%;background-color: #f9f9f9;
		vertical-align: top;
	}
	
	#detalleInscripcion{padding-right:52px;padding-left:25px;

	}
	/*espacion arriba*/
	#page{margin-top: 2px;padding-bottom: 18px;}
	
	/*espacio despues del contenido en el header*/
	#header{padding-bottom: 10px;}
	
	#auspiciadores{margin-top: 12px;margin-bottom: 11px;}

	.navbar-collapse{padding-left: 0px;}

	/*para que el twitter este en su maximo tamaño*/
	@media (min-width: 768px) and (max-width: 1304px){#redesIndex{width: 100%;}}

	@media (min-width: 768px) and (max-width: 1075px){
		#mainmenu {margin-top: 90px;text-align: center;}	
		#imgLogo{top:80px;margin-left: 35%;}
		#principal{width: 56%;}
		#segundaria{width: 30%;}
		/*exterior del div principal*/
		#principal{margin-top: 30px;margin-right: 1%;margin-left: 2%;}
	}
	
	/*margines del logo del header*/
	@media  (min-width: 1076px){#imgLogo {margin-left: 50px;margin-top: 0px;}}
}



</style>


