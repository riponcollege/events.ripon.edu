<?php
/*
Template Name: Generic 1-column
*/
get_header();

?>

	<?php the_showcase(); ?>

	<main class="content-wide">

		<?php 
		while ( have_posts() ) : the_post(); ?>
		
		<div class="entry-content">
			<?php the_content(); ?>
		</div>

			<?php
		endwhile; 
		?>

	</main><!-- #primary -->

<?php

get_footer();

?>