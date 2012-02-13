<?php
$this->breadcrumbs=array(
	'Atributos'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Create Atributo','url'=>array('create'), 'icon'=>'file'),
	array('label'=>'List Atributo','url'=>array('index'), 'icon'=>'list'),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('atributo-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Atributos</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button btn')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('ext.bootstrap.widgets.BootGridView',array(
	'id'=>'atributo-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'tipo_atributo_id',
		'nombre',
		'codigo',
		'nativo',
		'usable',
		array(
			//'class'=>'CButtonColumn',
			'class'=>'ext.bootstrap.widgets.BootButtonColumn',
			'htmlOptions'=>array('style'=>'width: 50px;'),
		),
	),
)); ?>
