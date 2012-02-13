<?php
$this->breadcrumbs=array(
	'Atributos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Atributo','url'=>array('index'), 'icon'=>'list'),
	array('label'=>'Create Atributo','url'=>array('create'), 'icon'=>'file'),
	array('label'=>'View Atributo','url'=>array('view','id'=>$model->id), 'icon'=>'eye-open'),
	array('label'=>'Manage Atributo','url'=>array('admin'), 'icon'=>'list-alt'),
);
?>

<h1>Update Atributo <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>