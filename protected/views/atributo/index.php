<?php
$this->breadcrumbs=array(
	'Atributos',
);

$this->menu=array(
	array('label'=>'Create Atributo','url'=>array('create'), 'icon'=>'file'),
	array('label'=>'Manage Atributo','url'=>array('admin'),  'icon'=>'list-alt'),
);
?>

<h1>Atributos</h1>

<?php $this->widget('ext.bootstrap.widgets.BootListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>