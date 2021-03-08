<!-- sidebar -->
<aside class="sidebar" role="complementary">

	<?php get_template_part('searchform'); ?>
	
	<div class="sidebar-widget">
		<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-1')) ?>
	</div>
	<hr class="sidebar-hr">
	<div class="sidebar-widget">
		<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-2')) ?>
	</div>

</aside>
<!-- /sidebar -->
