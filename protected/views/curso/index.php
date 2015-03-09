<?php
/* @var $this CursoController */
/* @var $dataProvider CActiveDataProvider */

if(Yii::app()->user->isSuperAdmin){
$this->menu=array(
	array('label'=>'Crear Curso', 'url'=>array('create')),
	array('label'=>'Administrar Cursos', 'url'=>array('admin')),
);
		}
?>

<h1>Cursos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

<style>
.summary{
	display: none;
	
}

</style>