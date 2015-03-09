<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

		<!-- Start WOWSlider.com BODY section --> <!-- add to the <body> of your page -->
	<div id="wowslider-container1">
	<div class="ws_images"><ul>
		<li><a href="<?php echo Yii::app()->request->baseUrl; ?>?r=site/page&view=programaEpi"><img src="data1/images/slider1.jpg" alt="APOYAMOS TU PROYECTO DE TITULO" title="APOYAMOS TU PROYECTO DE TÍTULO" id="wows1_0"/></a></li>
		<li><a href="<?php echo Yii::app()->request->baseUrl; ?>?r=site/page&view=convocatorias"><img src="data1/images/slider2.jpg" alt="APOYO A POSTULACIÓN A FONDOS CONCURSABLES" title="ABIERTA CONVOCATORIA" id="wows1_1"/></a>2015 Primer Semestre</li>
		<li><a href="<?php echo Yii::app()->request->baseUrl; ?>?r=alumno/create"><img src="data1/images/slider3.jpg" alt="full screen slider" title="INSCRIBETE AQUÍ" id="wows1_2"/></a>Cupos limitados</li>
		<li><a href="<?php echo Yii::app()->request->baseUrl; ?>?r=site/page&view=galeria"><img src="data1/images/slider4.jpg" alt="199 ESTUDIANTES PARTICIPARON DURANTE EL 2014" title="199 ESTUDIANTES PARTICIPARON DURANTE EL 2014" id="wows1_3"/></a></li>
	</ul></div>
	<div class="ws_bullets"><div>
		<a href="#" title="APOYAMOS TU PROYECTO DE TITULO">1</a>
		<a href="#" title="APOYO A POSTULACIÓN A FONDOS CONCURSABLES">2</a>
		<a href="#" title="INSCRIPCIONES 2015 ABIERTAS">3</a>
		<a href="#" title="MÁS DE 200 ESTUDIANTES PARTICIPARON EL 2014">4</a>
	</div></div><span class="wsl"><a href="http://wowslider.com/vu">image carousel</a> by WOWSlider.com v7.2</span>
	<div class="ws_shadow"></div>
	</div>	
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/engine1/wowslider.js"></script>
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/engine1/script.js"></script>
	<!-- End WOWSlider.com BODY section -->
	

	<div id="contenidoIndex">
		<div>
			<div style="margin-top: 45px;"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/contenido1.1.png" style=""></div>
			<div style="background-color:#f5f7f9;">
				<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/contenido1.2.png" style="display:inline-block;" class="imgBeneficio">
				<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/contenido1.3.png" style="display:inline-block;" class="imgBeneficio">
			</div>
			
		</div>
		
		<div style="margin-top:45px;">
			<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/contenido2.png" >	
		</div>

		<div style="margin-top: 35px;">
			
			<div class="comentario">
				<TABLE>
					<TR>
						<TD style="width: 110px;vertical-align: top;text-align: center;">
							<div class="comentarioImagen"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/comentarios/3.png" ></div>
							
							<p style="color:#33b6b1;margin:7px; ">Francisca Bravo</p>	
							<p style="color:#a2aaaa; ">
							Alumna 
							<br>
							Pedagogía en Inglés
							<br>
							Campus Chillán.
							</p>
							
						</TD> 
						<TD style="vertical-align: top;">
							<div class="comentarioLetras"><p>"Ahora sé que puedo vincular mi proyecto de tesis con algo que se puede concretar, con algo que se puede llevar a cabo y que a alguien le va a servir".</p></div>
						</TD>
					</TR>
				</TABLE>
			</div>

			<div class="comentario">
				<TABLE>
					<TR>
						<TD style="width: 110px;vertical-align: top;text-align: center;">
							<div class="comentarioImagen"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/comentarios/1.png" ></div>
							
							<p style="color:#33b6b1;margin:7px;">Bastián Gutiérrez </p>
							
							<p style="color:#a2aaaa">
							Alumno
							<br> 
							Psicología 
							<br>
							Campus Chillán.
							</p>
						</TD> 
						<TD style="vertical-align: top;">
							<div class="comentarioLetras"><p>"Como experiencia aporta mucho a la formación integral del estudiante y para un futuro emprendedor".</p></div>
						</TD>
					</TR>
				</TABLE>
			</div>			
			
		
			<div class="comentario">
				<TABLE>
					<TR>
						<TD style="width: 110px;vertical-align: top;text-align: center;">
							<div class="comentarioImagen"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/comentarios/2.png" ></div>
							<p style="color:#33b6b1;margin:7px;">Fernanda Arriagada</p>	
							<p style="color:#a2aaaa;">
							Alumna 
							<br>
							Diseño Industrial
							<br>
							Campus Concepción.
							</p>
						</TD> 
						<TD style="vertical-align: top;">
							<div class="comentarioLetras"><p>"Yo creo que es súper necesario sobretodo en el proceso educativo en el que estamos. Conocer distintas visiones, cómo trabaja la gente de Ingeniería, la gente de Arquitectura y ver cómo mi opinión con la opinión de ellos puede generar una idea en conjunto"</p></div>
						</TD>
					</TR>
				</TABLE>
			</div>

			<div style="margin-top:35px;margin-bottom:35px;">
				<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/contenido4.png" >	
			</div>
		</div>

	<div id="contenidoIndex2">
		<div id="galeriaIndex" >
			<div style="width: 833px;height:447px;">
			<?php $this->renderPartial('GalleryView'); ?>	
			</div>
			
			<?php  
				$imageUrl = "".Yii::app()->request->baseUrl."/images/galeria1.2.png";
				$image = '<img src="'.$imageUrl.'" >';
				echo CHtml::link($image, array('site/page','view'=>'galeria'));
			?>
		</div>
		<div id="redesIndex">

<a class="twitter-timeline" href="https://twitter.com/programaepi" width="520"  data-widget-id="542691510009876481">Tweets por el @programaepi.</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
			
		</div>
		
	</div>
