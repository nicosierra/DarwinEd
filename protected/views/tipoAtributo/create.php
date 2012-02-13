<?php
$this->breadcrumbs=array(
	'Tipo Atributos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TipoAtributo','url'=>array('index')),
	array('label'=>'Manage TipoAtributo','url'=>array('admin')),
);
?>

<h1>Create TipoAtributo</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>