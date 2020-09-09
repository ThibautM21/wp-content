<?php  get_header();
// require_once('components/navbar.inc.php'); ?>

<header>
    <div class="card card-intro bg-dark mb-4">
        <div class="card-body white-text rgba-black-light text-center pt-5 pb-4 px-0">
            <div class="row d-flex justify-content-center">
                <div class="col-md-6">
                    <h1 class="font-weight-bold mb-4">Musique</h1>
                    <p class="lead mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti ad impedit corporis ratione facere?
                        Cupiditate unde aliquid reiciendis animi, quas inventore, praesentium neque voluptatem, iusto
                        perferendis placeat similique dolor eum?
                    </p>
                </div>
            </div>
            <div id="slider" class="w-100 mx-auto">
                <?php get_template_part('components/slider.inc', NULL, array('category_name' => 'actualites', 'posts_per_page' => 5)); ?>
            </div>
        </div>
    </div>
</header>

<main class="container">
            <section>
                <div id="dynamic-content"></div>
            </section>

            <iframe width="100%" height="300" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/119633272&color=%230a1b2a&auto_play=false&hide_related=true&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"></iframe><div style="font-size: 10px; color: #cccccc;line-break: anywhere;word-break: normal;overflow: hidden;white-space: nowrap;text-overflow: ellipsis; font-family: Interstate,Lucida Grande,Lucida Sans Unicode,Lucida Sans,Garuda,Verdana,Tahoma,sans-serif;font-weight: 100;"><a href="https://soundcloud.com/seven75-1" title="2Ϙ." target="_blank" style="color: #cccccc; text-decoration: none;">2Ϙ.</a> · <a href="https://soundcloud.com/seven75-1/sets/chilling" title="chilling" target="_blank" style="color: #cccccc; text-decoration: none;">chilling</a></div>

            <section class="text-center">
                <h1 class="h2 font-weight-bold my-4">Dernières actualités</h1>
                <?php get_template_part('components/category.inc', NULL, array('category_name' => 'actualites', 'posts_per_page' => 6)); ?>
            </section>
            <hr>

            <section class="text-center">
                <h1 class="h2 font-weight-bold my-4">Dernières vidéos</h1>
                <?php if ( is_active_sidebar('videos')): ?>
                    <?php dynamic_sidebar('videos'); ?>
                <?php endif; ?>
            </section>
            <hr>

            <section class="text-center">
                <h1 class="h2 font-weight-bold my-4">Derniers avis</h1>
                <?php get_template_part('components/category.inc', NULL, array('category_name' => 'avis', 'posts_per_page' => 8)); ?>
            </section>
            <hr>

            <section class="text-center">
                <h1 class="h2 font-weight-bold my-4">Dernières tendances</h1>
                <?php get_template_part('components/category.inc', NULL, array('category_name' => 'tendances', 'posts_per_page' => 6)); ?>
            </section>
            <hr>
</main>

<?php  get_footer(); ?>