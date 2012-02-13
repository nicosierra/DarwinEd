<?php
$this->breadcrumbs=array(
	'Atributos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Atributo','url'=>array('index'), 'icon'=>'list'),
	array('label'=>'Manage Atributo','url'=>array('admin'), 'icon'=>'list-alt'),
);
?>

<h1>Create Atributo</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>