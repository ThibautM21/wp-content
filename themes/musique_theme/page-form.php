<?php
/*
Template Name: Page contact
*/

	get_header(); ?>

	<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

		<div class="container contact">
    		<h1 class="cat-title my-4 text-center"><?php the_title(); ?></h1>

    		<div class="row justify-content-center">
    			<?php the_content(); ?>
    		</div>
    	</div>

	<?php endwhile; endif; ?>

<?php get_footer(); ?>