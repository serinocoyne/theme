<!DOCTYPE html>
<html>
<head>
	<?php Loader::element('header_required'); ?>
	<style>
	
	</style>

</head>
<body>

	<nav>
		<?php $a = new Area('Main Nav'); $a->display($c); ?>
	</nav>

	<div id="content">
	
		<?php $a = new Area('Content'); $a->display($c); ?>
	
	</div>
	
	<footer>
		<?php $a = new Area('Footer'); $a->display($c); ?>
	</footer>
	<?php Loader::element('footer_required'); ?>
</body>
</html>