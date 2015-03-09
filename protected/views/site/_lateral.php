



	
	
		<?php  
			$imageUrl = "".Yii::app()->request->baseUrl."/images/convocatorias-inscribete.png";
			$image = '<img src="'.$imageUrl.'" style="margin-bottom: 35px;width:100%" >';
			echo CHtml::link($image, array('/alumno/create'));
		?>
		
		<!-- facebook -->
		<div id="fb-root"></div>
		<script>(function(d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) return;
			js = d.createElement(s); js.id = id;
			js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.0";
			fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));
		</script>
		<div class="lateralRedes" ><div class="fb-like-box" data-href="https://www.facebook.com/programaepi" data-width="306" data-height="266" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="false" data-show-border="false"></div></div>
		<!-- fin_facebook -->
		
		<!-- twitter -->
		
		<div class="lateralRedes" style="height: inherit;">
			<div style="background-color: #edeff4;height: 22px;padding: 5px;border-left: none;border-right: none;font-family: Helvetica Neue, Helvetica, Arial, sans-serif;line-height: 1.28;display: block;margin: 0;padding: 0;border-top: none;border: 1px solid #d8dfea;"><h3 style="font-size: 11px;margin-left: 4px;margin-top: 6px;font-weight: bolder;">Sígenos en Twitter</h3></div>
			<div style="display:inline-block">
				<?php 
					$imageUrl = "".Yii::app()->request->baseUrl."/images/epi_n.png";
					$image = '<img src="'.$imageUrl.'" style="margin-top: 10px;margin-left: 10px;" >';
					echo CHtml::link($image, 'http://www.twitter.com/programaepi');
				?>
			</div>
			<div style="display:inline-block">
				<div style="margin-bottom:5px;"><a href="https://www.twitter.com/programaepi">Programa EPI</a></div>
				<a href="https://twitter.com/programaepi" class="twitter-follow-button" data-show-count="false" data-lang="es" data-width="30px" data-size="large" data-dnt="true" >Seguir a @programaepi</a>
			</div>
			<hr style="margin-top: 4px;">
			<div id="twitter2">
				<iframe
  				src="//platform.twitter.com/widgets/follow_button.html?screen_name=programaepi&lang=es"
				style="width: 100%; height: 40px;"
				  allowtransparency="false"
				  frameborder="0"
				  scrolling="no">
				</iframe>
			</div>
		</div>



					
<script type="text/javascript">
window.twttr = (function (d, s, id) {
  var t, js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src= "https://platform.twitter.com/widgets.js";
  fjs.parentNode.insertBefore(js, fjs);
  return window.twttr || (t = { _e: [], ready: function (f) { t._e.push(f) } });
}(document, "script", "twitter-wjs"));
</script>
				<!-- <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/convocatorias_twitter.png" style="margin-bottom: 10px;"> -->
		<!-- fin_twitter -->
	




