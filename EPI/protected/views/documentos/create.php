<?php
/* @var $this DocumentosController */
/* @var $model Documentos */

$this->breadcrumbs=array(
	'Documentoses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Eliminar Documento', 'url'=>array('admin')),
);
?>

<h1>Añadir <?php echo $_GET["tipo"]; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>