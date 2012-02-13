<?php
$this->pageTitle=Yii::app()->name . ' - Contact Us';
$this->breadcrumbs=array(
	'Contact',
);
?>

<h1>Contact Us</h1>

<?php if(Yii::app()->user->hasFlash('contact')): ?>
	<?php $this->widget('bootstrap.widgets.BootAlert'); ?>
<?php else: ?>
	<p>If you have business inquiries or other questions, please fill out the following form to contact us. Thank you.</p>

	<?php /** @var BootActiveForm $form */
	$form = $this->beginWidget('bootstrap.widgets.BootActiveForm', array(
				'id'=>'contact-form',
				'type'=>'horizontal',
				'enableClientValidation'=>true,
				'clientOptions'=>array(
					'validateOnSubmit'=>true,
				)
			)); ?>

		<fieldset>
			<p class="help-block">Fields with <span class="required">*</span> are required</p>
			<br>
			<?php echo $form->errorSummary($model); ?>

			<!-- name -->
			<?php echo $form->textFieldRow($model, 'name', array('class'=>'span3')); ?>

			<!-- email -->
			<?php echo $form->textFieldRow($model, 'email', array('class'=>'span3')); ?>

			<!-- subject -->
			<?php echo $form->textAreaRow($model, 'subject', array('class'=>'span8', 'rows'=>5)); ?>

			<!-- body -->
			<?php echo $form->textAreaRow($model, 'body', array('class'=>'span8', 'rows'=>5)); ?>

			<!-- captcha -->
			<?php if (CCaptcha::checkRequirements()): ?>
				<?php echo $form->captchaRow($model, 'verifyCode'); ?>
			<?php endif ?>
		</fieldset>

		<div class="form-actions">
			<?php echo CHtml::htmlButton('<i class="icon-ok icon-white"></i> Submit', array('class'=>'btn btn-primary', 'type'=>'submit')); ?>
			<?php echo CHtml::htmlButton('<i class="icon-ban-circle"></i> Reset', array('class'=>'btn', 'type'=>'reset')); ?>
		</div>
	<?php $this->endWidget(); ?>
<?php endif; ?>