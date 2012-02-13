<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- Le styles -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css" media="all" />
	
	<!--[if lt IE 9]>
		<script type="text/javascript" src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>
<body id="top">
<!-- navbar -->
<?php $this->widget('bootstrap.widgets.BootNavbar', array(
	'fixed'=>false,
	'brand'=>Yii::app()->name,
	'brandUrl'=>Yii::app()->request->baseUrl,
	'collapse'=>true, // requires bootstrap-responsive.css
	'htmlOptions'=>array('id'=>'topbar'),
	'items'=>array(
		array(
			'class'=>'bootstrap.widgets.BootMenu',
			'items'=>array(
				array('label'=>'Home', 'url'=>array('/site/index'), 'active'=>true),
				array('label'=>'Link', 'url'=>'#'),
				array('label'=>'Dropdown', 'url'=>'#', 'items'=>array(
					array('label'=>'Action', 'url'=>'#'),
					array('label'=>'Another action', 'url'=>'#'),
					array('label'=>'Something else here', 'url'=>'#'),
					'---',
					array('label'=>'Separated link', 'url'=>'#'),
				)),
			),
		),
		'<form class="navbar-search pull-left" action=""><input type="text" class="search-query span2" placeholder="Search"></form>',
		array(
			'class'=>'bootstrap.widgets.BootMenu',
			'htmlOptions'=>array('class'=>'pull-right'),
			'items'=>array(
				array('label'=>'Link', 'url'=>'#'),
				array('label'=>'Dropdown', 'url'=>'#', 'items'=>array(
					array('label'=>'Action', 'url'=>'#'),
					array('label'=>'Another action', 'url'=>'#'),
					array('label'=>'Something else here', 'url'=>'#'),
					'---',
					array('label'=>'Separated link', 'url'=>'#'),
				)),
			),
		),
	),
)); ?>
<!-- /navbar -->
<div class="container-fluid">
	<!-- breadcum -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('bootstrap.widgets.BootCrumb', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>
	<!-- /breadcum -->
	<!-- content -->
	<?php echo $content; ?>
	<!-- /content -->

	<hr class="soften">

	<footer class="footer">
		<p class="pull-right"><a href="#">Volver arriba &uarr;</a></p>
		<p>
			Copyright &copy; <?php echo date('Y'); ?> by Foris.<br/>
			All Rights Reserved.<br/>
			<?php echo Yii::powered(); ?>
		</p>
	</footer>
</div><!-- /container-fluid -->
</body>
</html>
