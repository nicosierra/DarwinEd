<?php 
$menuHeader = array(
	array('label'=>'LIST HEADER', 'itemOptions'=>array('class'=>'nav-header')),
	array('label'=>'Home', 'icon'=>'home', 'url'=>'#'),
	array('label'=>'Library', 'icon'=>'book', 'url'=>'#'),
	array('label'=>'Application', 'icon'=>'pencil', 'url'=>'#'),
	array('label'=>'OPERATIONS', 'itemOptions'=>array('class'=>'nav-header')),
);

$menuFooter = array(
	array('label'=>'ANOTHER LIST HEADER', 'itemOptions'=>array('class'=>'nav-header')),
	array('label'=>'Profile', 'icon'=>'user', 'url'=>'#'),
	array('label'=>'Settings', 'icon'=>'cog', 'url'=>'#'),
	array('label'=>'Help', 'icon'=>'flag', 'url'=>'#'),
);

 ?>
<?php $this->beginContent('//layouts/main'); ?>
<div class="row-fluid">
	<div class="span2">
		<div class="well sidebar-nav" style="padding: 8px 0;">
			<?php $this->widget('bootstrap.widgets.BootMenu', array(
	    		'type'=>'list', // '', 'tabs', 'pills' (or 'list')
	    		//'stacked'=>true, // whether this is a stacked menu
				'items'=>CMap::mergeArray($menuHeader,$this->menu,$menuFooter),
			)); ?>
		</div>
	</div><!-- /span -->

	<div class="span10">
		<?php echo $content; ?>
	</div><!-- /span -->
</div><!-- /row -->
<?php $this->endContent(); ?>