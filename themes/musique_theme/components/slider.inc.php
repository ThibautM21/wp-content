    <!--Carousel Wrapper-->
    <div id="carousel" class="carousel slide carousel-fade" data-ride="carousel">
    	<!--Indicators-->
        <?php $the_query = new WP_Query($args); ?>


    	<ol class="carousel-indicators">
            <?php for($i = 0 ; $i < $the_query->found_posts; $i++): ?>
                <li data-target="#carousel" data-slide-to="<?= $i?>" <?php if ($i == 0) echo 'class="active"'?>></li>
            <?php endfor; ?>
    	</ol>
    	<!--/.Indicators-->
    	<!--Slides-->

    	<div class="carousel-inner" role="listbox">
            <?php if($the_query->have_posts()) : $postCount=1 ; while($the_query->have_posts() ) : $the_query->the_post(); ?>
    		<div class="carousel-item <?php if ($postCount == 1): echo 'active'; endif; ?>">
    			<div class="view">
    				<img class="d-block w-100 img-fluid" src="<?php echo get_the_post_thumbnail_url(get_the_id()); ?>">
    				<div class="mask rgba-black-light"></div>
    			</div>
    			<div class="carousel-caption">
    				<a href="<?php the_permalink() ?>"><h3 class="h3-responsive"><?php the_title(); ?></h3>
    				<p><?php echo substr(get_the_excerpt(), 0, 100).'[...]'; ?></p></a>
    			</div>
    		</div>
            <?php $postCount++; ?>
            <?php endwhile; endif; ?>
    	</div>

    	<!--/.Slides-->
    	<!--Controls-->
    	<a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
    		<span class="carousel-control-prev-icon"></span>
    	</a>
    	<a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
    		<span class="carousel-control-next-icon"></span>
    	</a>
    	<!--/.Controls-->
    </div>
<!--/.Carousel Wrapper-->