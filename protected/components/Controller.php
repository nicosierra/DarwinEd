<?php
/**
 * Controller is the customized base controller class.
 * All controller classes for this application should extend from this base class.
 */
class Controller extends CController
{
	/**
	 * @var string the default layout for the controller view. Defaults to '//layouts/column1',
	 * meaning using a single column layout. See 'protected/views/layouts/column1.php'.
	 */
	public $layout='//layouts/column1';
	/**
	 * @var array context menu items. This property will be assigned to {@link CMenu::items}.
	 */
	public $menu=array();
	/**
	 * @var array the breadcrumbs of the current page. The value of this property will
	 * be assigned to {@link CBreadcrumbs::links}. Please refer to {@link CBreadcrumbs::links}
	 * for more details on how to specify this property.
	 */
	public $breadcrumbs=array();

	/**
	* shortcut for setting flash messages through the site
	*/
	public function setFlash($key, $value, $defaultValue = null)
	{
		Yii::app()->user->setFlash($key, $value, $defaultValue);
	}

	/**
	* shorcut to set a success flash message
	*/
	public function setFlashSuccess($value, $defaultValue = null)
	{
		$this->setFlash('sucess', $value, $defaultValue);
	}

	/**
	* shorcut to set an error flash message
	*/
	public function setFlashError($value, $defaultValue = null)
	{
		$this->setFlash('error', $value, $defaultValue);
	}

	/**
	* method to wrap up the initialization of all the controllers and, therefore, callback some methods on every system call
	*/
	public function init()
	{
		parent::init();
		$app = Yii::app();
		if(isset($_POST['_lang']))
		{
			$app->language = $_POST['_lang'];
			$app->session['_lang'] = $app->language;
		}
		else if (isset($app->session['_lang']))
		{
			$app->language = $app->session['_lang'];
		}
	}

}