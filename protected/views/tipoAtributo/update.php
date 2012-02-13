<?php
$this->breadcrumbs=array(
	'Tipo Atributos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TipoAtributo','url'=>array('index')),
	array('label'=>'Create TipoAtributo','url'=>array('create')),
	array('label'=>'View TipoAtributo','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage TipoAtributo','url'=>array('admin')),
);
?>

<h1>Update TipoAtributo <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>