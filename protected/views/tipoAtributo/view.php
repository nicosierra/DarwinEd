<?php
$this->breadcrumbs=array(
	'Tipo Atributos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List TipoAtributo','url'=>array('index')),
	array('label'=>'Create TipoAtributo','url'=>array('create')),
	array('label'=>'Update TipoAtributo','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete TipoAtributo','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TipoAtributo','url'=>array('admin')),
);
?>

<h1>View TipoAtributo #<?php echo $model->id; ?></h1>

<?php $this->widget('ext.bootstrap.widgets.BootDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nombre',
	),
)); ?>
