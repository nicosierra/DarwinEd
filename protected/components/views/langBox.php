<?php echo CHml::form(); ?>
	<div id="langdrop">
		<?php echo CHtml::dropDownList('_lang', $currentLang, array(
			'en_us' => 'English',
			'is_is' => 'Icelandic',
			'es_cl' => 'Español'),
			array('submit'=>'')); ?>
	</div>
<?php echo CHtml::endForm(); ?>