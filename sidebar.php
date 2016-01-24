<div>
	<aside id="search" class="widget widget_search">
		<?php get_search_form(); ?>
	</aside>
	<aside id="archives" class="widget widget_archive">
		<h3 class="widget-title"><?php _e( 'Past Events', '_tk' ); ?></h3>
		<ul>
			<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
		</ul>
	</aside>
</div>
