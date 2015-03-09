<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<div class="contenedor">
	
	<div id="principal">
			<?php echo $content; ?>
	</div>
	
	<div id="segundaria" style="margin-top: 138px;">
		<?php $this->renderPartial('/site/_lateral'); ?>
	</div>
</div>
<?php $this->endContent(); ?>