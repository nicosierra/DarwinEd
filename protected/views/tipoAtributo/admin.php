<?php
$this->breadcrumbs=array(
	'Tipo Atributos'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List TipoAtributo','url'=>array('index')),
	array('label'=>'Create TipoAtributo','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('tipo-atributo-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Tipo Atributos</h1>

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
	'id'=>'tipo-atributo-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'itemsCssClass'=>'table table-striped table-condensed',
	'columns'=>array(
		'id',
		'nombre',
		array(
			// 'class'=>'CButtonColumn',
			'class'=>'ext.bootstrap.widgets.BootButtonColumn',
			'htmlOptions'=>array('style'=>'width: 50px'),
		),
	),
)); ?>
