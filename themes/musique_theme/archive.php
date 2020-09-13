<?php
/*
Template Name: Page d'archives
*/
?>
<?php get_header(); ?>

<?php
	$category = get_term_by('name', get_the_title(), 'category')->slug;
	$the_query = new WP_Query(array('category_name' => $category)); ?>

<section class="text-center container">
		<h2 class="cat-title my-4"><?php the_title(); ?></h2>
	<?php if ($the_query->have_posts()): while ($the_query->have_posts()): $the_query->the_post(); ?>
		<div class="row wow fadeIn justify-content-center">
		<div class="col-8 mb-4 p-3">
			<div class="card card-cascade card-index">
				<div class="view view-cascade overlay hm-white-slight mb-4">
					<?php the_post_thumbnail( 'medium-large', array( 'class'=> 'img-fluid card-img-top')); ?>
					<a href="<?php echo get_permalink() ?>">
						<div class="mask"></div>
					</a>
				</div>
				<div class="card-body card-body-cascade text-center">
					<h4 class="card-title"><strong><a href="<?php echo get_permalink(); ?>" class="text-dark"><?php the_title(); ?></a></strong></h4>
					<h6 class="font-weight-bold py-2"><i class="fa fa-tags mr-1"></i><?php the_category(', '); ?></h6>
					<p class="card-text grey-text">
						<?php the_excerpt(); ?>
					</p>
					<a href="<?php echo get_permalink() ?>" class="btn btn-dark btn-rounded btn-md">En savoir plus</a>
				</div>
				<div class="card-footer text-muted text-center mt-1">
					<p class="mb-0">Par
						<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"><?php the_author(); ?></a>, le <?php echo get_the_date(); ?>
					</p>
				</div>
			</div>
		</div>
	</div>
	<?php endwhile; endif; ?>
</div>

</section>

<?php get_footer(); ?>