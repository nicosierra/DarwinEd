<?php
$this->breadcrumbs=array(
	'Tipo Atributos',
);

$this->menu=array(
	array('label'=>'Create TipoAtributo','url'=>array('create')),
	array('label'=>'Manage TipoAtributo','url'=>array('admin')),
);
?>

<h1>Tipo Atributos</h1>

<?php $this->widget('ext.bootstrap.widgets.BootListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
