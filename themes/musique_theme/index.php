<?php  get_header();
// require_once('components/navbar.inc.php'); ?>

<header class="container-fluid">
    <div class="card card-intro bg-dark mb-4">
        <div class="card-body white-text rgba-black-light text-center pt-5 pb-0 px-0">
            <div class="row d-flex justify-content-center">
                <div class="col-md-6">
                    <a href="<?php echo home_url( '/' ); ?>" class="main-title"><h1 class="font-weight-bold mb-4 d-flex align-items-center justify-content-center"><i class="fa fa-headphones fa-2x mr-2"></i><span>AlloMusic</span></h1></a>
                </div>
            </div>
            <div id="slider" class="w-100 mx-auto">
                <?php get_template_part('components/slider.inc', NULL, array('category_name' => 'actualites', 'posts_per_page' => 5)); ?>
            </div>
        </div>
    </div>
</header>

<main class="container-fluid">
	<section>
		<div id="dynamic-content"></div>
	</section>

	<section class="container">
		<div class="row">
			<iframe width="100%" height="300" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/119633272&color=%230a1b2a&auto_play=false&hide_related=true&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"></iframe><div style="font-size: 10px; color: #cccccc;line-break: anywhere;word-break: normal;overflow: hidden;white-space: nowrap;text-overflow: ellipsis; font-family: Interstate,Lucida Grande,Lucida Sans Unicode,Lucida Sans,Garuda,Verdana,Tahoma,sans-serif;font-weight: 100;"><a href="https://soundcloud.com/seven75-1" title="2Ϙ." target="_blank" style="color: #cccccc; text-decoration: none;">2Ϙ.</a> · <a href="https://soundcloud.com/seven75-1/sets/chilling" title="chilling" target="_blank" style="color: #cccccc; text-decoration: none;">chilling</a></div>
		</div>
	</section>

	<section class="container">
		<div class="row justify-content-center">
			<h2 class="cat-title my-4">Dernières actualités</h2>
			<?php get_template_part('components/category.inc', NULL, array('category_name' => 'actualites', 'posts_per_page' => 6)); ?>
		</div>
	</section>
	<hr>

	<section class="text-center container">
		<div class="row justify-content-center">
			<h2 class="cat-title my-4">Dernières vidéos</h2>
			<?php if ( is_active_sidebar('videos')): ?>
				<?php dynamic_sidebar('videos'); ?>
			<?php endif; ?>
		</div>
	</section>
	<hr>

	<section class="text-center bg-dark container-fluid concerts">
		<div class="row justify-content-center flex-column">
			<h2 class="cat-title text-white my-4">Prochains concerts</h2>
			<?php if ( is_active_sidebar('concerts')): ?>
				<?php dynamic_sidebar('concerts'); ?>
			<?php endif; ?>

		</div>
	</section>

	<section class="text-center container">
		<div class="row justify-content-center">
			<h2 class="cat-title my-4">Derniers avis</h2>
			<?php get_template_part('components/category.inc', NULL, array('category_name' => 'avis', 'posts_per_page' => 8)); ?>
		</div>
	</section>
	<hr>

	<section class="text-center container">
		<div class="row justify-content-center">
			<h2 class="cat-title my-4">Dernières tendances</h2>
			<?php get_template_part('components/category.inc', NULL, array('category_name' => 'tendances', 'posts_per_page' => 6)); ?>
		</div>
	</section>
	<hr>
</main>

<?php  get_footer(); ?>