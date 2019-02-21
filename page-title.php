<?php
/*
Template Name: Generic 1-column (w/ Title)
*/
get_header();

?>

	<?php the_showcase(); ?>

	<main class="content-narrow">
		<?php 
		while ( have_posts() ) : the_post(); ?>
		
		<div class="entry-content">
			<h1><?php the_title(); ?></h1>
			<?php the_content(); ?>
		</div>

			<?php
		endwhile; 
		?>
	</main><!-- #primary -->

<?php

get_footer();

?>