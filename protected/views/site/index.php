<?php $this->pageTitle=Yii::app()->name; ?>

<h1>Welcome to <?php echo CHtml::encode(Yii::app()->name); ?></h1>

<p>
	Bringing together the <a href="http://www.yiiframework.com">Yii PHP framework</a> and <a href="http://twitter.github.com/bootstrap/"> bootstrap</a>, Twitter's new web development toolkit.
	Now with support for Bootstrap 2! <a href="http://www.yiiframework.com/extension/bootstrap/">Yii-Bootstrap</a> is an extension for Yii that focuses on server-side that allows you to easily use Bootstrap in your Yii applications.
	These widgets have all been developed with care to work seemlessly together with Bootstrap and its jQuery plugins.

	<br>
	<div id="mainmenu">
		<?php $this->widget('bootstrap.widgets.BootMenu', array(
			'type'=>'pills', // '', 'tabs', 'pills' (or 'list')
			'stacked'=>false, // whether this is a stacked menu
			'items'=>array(
				array('label'=>'Home', 'url'=>array('/site/index')),
				array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
				array('label'=>'Contact', 'url'=>array('/site/contact')),
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)); ?>
	</div><!-- mainmenu -->
</p>