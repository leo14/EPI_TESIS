<?php
/* @var $this ComentarioController */
/* @var $data Comentario */
$data->co_texto=nl2br($data->co_texto);
?>

<div class="view">

	<?php echo $data->co_texto; ?>
	<br />
</div>