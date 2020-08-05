<?php
/*
Template Name: Generic 1-column
*/
get_header();

?>

	<?php the_emergency_bar(); ?>

	<?php the_showcase(); ?>

	<main class="content-wide">
		<div class="wrap">
		<?php 
		while ( have_posts() ) : the_post(); ?>
		
		<div class="entry-content">
			<?php the_content(); ?>
		</div>

			<?php
		endwhile; 
		?>
		</div>
	</main><!-- #primary -->

<?php

get_footer();

?>