<?php $the_query = new WP_Query($args); ?>

<div class="row wow fadeIn">
	<?php if ($the_query->have_posts()): $counter = 1; while ($the_query->have_posts() && $counter <= $args['posts_per_page']): $the_query->the_post(); ?>
		<div class="col-lg-<?=24/$args['posts_per_page']?> col-12 mb-4 p-2">
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
						<?php echo substr(get_the_excerpt(), 0, 120); ?>
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
	<?php if ($counter % ($args['posts_per_page']/2) == 0):?>
		</div>
		<div class="row wow fadeIn">
	<?php endif; ?>

	<?php $counter++; ?>
	<?php endwhile; endif; ?>
</div>