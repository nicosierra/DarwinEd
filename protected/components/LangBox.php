<?php
/**
 * Widget to allow selection of language
 */
 class LangBox extends CWidget
 {
 	public function init()
 	{
 		$currentLang = Yii::app()->language;
 		$this->render('langBox', array('currentLang'=>$currentLang));
 	}
 }