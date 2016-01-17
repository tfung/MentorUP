<?php get_header(); ?>

	<?php if ( have_posts() ) : ?>
		<div class="row">
		  	<div class="col-md-8">
		  		<?php 
	  				echo "<div class=\"post-item\">";
	  				the_post(); 
	  				the_content();

	  				echo "<span class=\"post-meta\">Posted on "; 
	  				the_time('m/j/y g:i A');
	  				echo "</span>";

	  				echo "</div>";

		  			while ( have_posts() ) {
		  				echo "<hr class=\"post-divider\" /><div class=\"post-item\">";
		  				the_post(); 
		  				the_content();

		  				echo "<span class=\"post-meta\">Posted on "; 
	  					the_time('m/j/y g:i A');
	  					echo "</span>";

		  				echo "</div>";
			  		}
		  		?>
		  	</div>
			<div class="col-md-4">
				<?php get_sidebar(); ?>
			</div>
		</div>

	<?php else: ?>
		<p><?php _e('Sorry, this page does not exist.'); ?></p>
	<?php endif; ?>

<?php get_footer(); ?>