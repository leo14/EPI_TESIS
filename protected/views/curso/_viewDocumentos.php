<?php
/* @var $this DocumentosController */
/* @var $data Documentos */
?>
<tr style="height:40px;">
<!-- 
	<b><?php echo CHtml::encode($data->getAttributeLabel('doc_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->doc_id), array('view', 'id'=>$data->doc_id)); ?>
	<br />
 -->
<td style="border: solid #F0F0F0 1px;width:100px;text-align:center;">
	<b><?php echo CHtml::encode($data->doc_fecha); ?></b>
</td>

<td style="border: solid #F0F0F0 1px;padding-left:10px;border-right:none;">
	<?php echo CHtml::encode($data->doc_nombre); ?>
</td>


<td style="border: solid #F0F0F0 1px;border-left:none;">
<?php 

// si es un doc o un pdf
if ($data->doc_tipo!="video"){ 
	$estructura =Yii::app()->baseUrl.'/protected/cursos';
	$path="$estructura/$data->doc_link";
?>
	<a  href="<?php echo $path; ?>" target="_blank" >
		
		<?php if ($data->doc_tipo=="PDF"){?>
			<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/pdf.png">
					
		<?php }

		if ($data->doc_tipo=="DOC"){ ?>
			<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/doc.png">
					
		<?php }?>
	</a>

<?php } 
// si es un video
if ($data->doc_tipo=="video"){

$documento=Documentos::model()->findByPk($data->doc_id);

$this->beginWidget('zii.widgets.jui.CJuiDialog', array(
	'id'=>$data->doc_id,
	'options'=>array(
		'title'=>$data->doc_nombre,
		'width'=>890,
		'height'=>570,
		'autoOpen'=>false,
		'resizable' => false,
		'modal'=>true,
		'close'=>'js:function(){ 
		 $("#'.$data->doc_id.' iframe ").attr("src", $("#'.$data->doc_id.' iframe ").attr("src"));
   		}',
		'overlay'=>array(
			'backgroundColor'=>'#676363',
			'opacity'=>'0.1'
			),
		),

	));
echo $this->renderpartial('//curso/viewVideo',array('model'=>$documento));

$this->endWidget('zii.widgets.jui.CJuiDialog');
 
	$imageUrl = "".Yii::app()->request->baseUrl."/images/video.png";
	$image = '<img src="'.$imageUrl.'">';
	echo CHtml::link($image,'', array('onclick'=>'$("#'.$data->doc_id.'").dialog("open");return false;'));
} 
?>

</td>

</tr>

