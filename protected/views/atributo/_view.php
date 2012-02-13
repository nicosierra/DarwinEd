<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipo_atributo_id')); ?>:</b>
	<?php echo CHtml::encode($data->tipo_atributo_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('codigo')); ?>:</b>
	<?php echo CHtml::encode($data->codigo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nativo')); ?>:</b>
	<?php echo CHtml::encode($data->nativo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usable')); ?>:</b>
	<?php echo CHtml::encode($data->usable); ?>
	<br />


</div>