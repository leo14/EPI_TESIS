<?php  
			$imageUrl = "".Yii::app()->request->baseUrl."/images/convocatorias-inscribete.png";
			$image = '<img src="'.$imageUrl.'" style="margin-bottom: 35px;" >';
			echo CHtml::link($image, array('/alumno/create'));
		?>
<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/convocatorias_facebook.png" style="margin-bottom: 10px;">
<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/convocatorias_twitter.png" style="margin-bottom: 10px;">









