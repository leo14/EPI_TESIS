<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<div class="contenedor">
	
	<div id="principal">
		<div style="">
			<?php echo $content; ?>
		</div>
	</div>
	
	<div id="segundaria" style="margin-top: 138px;">
		<?php
			$this->beginWidget('zii.widgets.CPortlet', array(
				'title'=>'Operaciones',
			));
					$this->widget('zii.widgets.CMenu', array(
				'items'=>$this->menu,
				'htmlOptions'=>array('class'=>'operations'),
			));
			$this->endWidget();
		?>
	</div>
</div>
<?php $this->endContent(); ?>