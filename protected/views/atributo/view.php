<?php
$this->breadcrumbs=array(
	'Atributos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Atributo','url'=>array('index'), 'icon'=>'list'),
	array('label'=>'Create Atributo','url'=>array('create'), 'icon'=>'file'),
	array('label'=>'Update Atributo','url'=>array('update','id'=>$model->id), 'icon'=>'pencil'),
	array('label'=>'Delete Atributo','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?'), 'icon'=>'trash'),
	array('label'=>'Manage Atributo','url'=>array('admin'), 'icon'=>'list-alt'),
);
?>

<h1>View Atributo #<?php echo $model->id; ?></h1>

<?php $this->widget('ext.bootstrap.widgets.BootDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'tipo_atributo_id',
		'nombre',
		'codigo',
		'nativo',
		'usable',
	),
)); ?>
