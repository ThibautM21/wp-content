<?php
/*
Template Name: Page videos
*/
?>

<?php
get_header();

$the_query = new WP_Query(array('posts_per_page' => -1));
$videos = [];

if ($the_query->have_posts()) {
	$counter = 1;

	while ($the_query->have_posts()) {
		$the_query->the_post();
		$blocks = parse_blocks(get_the_content());
		if (has_block('core-embed/youtube')) {

			$content = get_post()->post_content;
			preg_match('/(https:\/\/www\.youtube\.com\/.*)","type/', $content, $matches);
			$videos[] = ['title' => get_the_title(), 'url' => $matches[1], "link" => get_the_permalink()];
		}
	}
} ?>

<section class="text-center container">
	<?php foreach ($videos as $video): ?>
		<div class="row wow fadeIn align-items-center mb-5 flex-column">
			<h2 class="cat-title my-4"><?= $video['title']?></h2>
			<?php preg_match('/youtube.com\/watch\?v=(.*)/', $video['url'], $matches);?>
			<iframe width="854" height="480" src="https://www.youtube.com/embed/<?= $matches[1] ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			<div><a href="<?= $video['link'] ?>" class="btn btn-dark">Lien vers l'article</a></div>
		</div>
		<?php endforeach; ?>
</section>

<?php get_footer(); ?>