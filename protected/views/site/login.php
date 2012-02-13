<?php
$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);
?>

<h1>Login</h1>

<p>Please fill out the following form with your login credentials:</p>

<?php $form=$this->beginWidget('bootstrap.widgets.BootActiveForm', array(
	'id'=>'login-form',
	'type'=>'horizontal',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>
	<fieldset>
		<p class="help-block">Fields with <span class="required">*</span> are required</p>
		<?php echo $form->errorSummary($model); ?>

		<!-- username -->
		<?php echo $form->textFieldRow($model, 'username', array('class'=>'span3')); ?>

		<!-- password -->
		<?php echo $form->textFieldRow($model, 'password', array('class'=>'span3')); ?>
		<p class="help-block">			Hint: You may login with <tt>demo/demo</tt> or <tt>admin/admin</tt>.</p>

		<!-- remember me -->
		<?php echo $form->checkBoxRow($model, 'rememberMe'); ?>

	</fieldset>
	
	<div class="form-actions">
		<?php echo CHtml::htmlButton('<i class="icon-home icon-white"></i> Login', array('class'=>'btn btn-primary', 'type'=>'submit')); ?>
		<?php echo CHtml::htmlButton('<i class="icon-ban-circle"></i> Reset', array('class'=>'btn', 'type'=>'reset')); ?>
	</div>
<?php $this->endWidget(); ?>