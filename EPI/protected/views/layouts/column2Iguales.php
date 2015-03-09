<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<div class="contenedor">
	
	<div class="igualesIzquierda" >
			<?php echo $content; ?>
	</div>
	
	<div class="igualesDerecha" >
		<?php $this->renderPartial('_columna2'); ?>
	</div>
</div>
<?php $this->endContent(); ?>