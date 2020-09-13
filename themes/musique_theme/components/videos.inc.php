
<?php
/*
Plugin Name: Video Feed Box
*/

class SMT_VideoFeed extends WP_Widget
{
	function __construct(){

		$widget_options = array('description' => 'Video Feed Box widget.' );
		$control_options = array();
		parent::__construct('smt_videofeed', '&raquo; Video Feed', $widget_options, $control_options);
	}

	function widget($args, $instance){
		extract($args);
		$width = intval($instance['width']);

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
					$videos[] = ['title' => get_the_title(), 'url' => $matches[1], 'article' => get_the_permalink()];
				}
			}
		} ?>
		<div class="videos border border-light">
			<?php echo $args['before_widget']?>
			<div class="row">
				<div class="video-player p-5">
					<?php preg_match('/youtube.com\/watch\?v=(.*)/', $videos[0]['url'], $matches);?>
					<div class="video_frame_left">
						<iframe src="https://www.youtube.com/embed/<?= $matches[1] ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						<h3 class="video_left_subtitle"><a href="#">Toutes les vidéos<i class="fa fa-long-arrow-right ml-2"></i></a></h3>
					</div>
					<div class="video_frame_right">
						<h2 class="video_frame_title"><span>Regarder maintenant</span></h2>
						<ul>
							<?php foreach (array_slice($videos, 1, 4) as $video) { ?>
								<?php preg_match('/youtube.com\/watch\?v=(.*)/', $video['url'], $matches);?>
								<li class="video_list">
									<div class="mb-2">
										<a class="d-flex align-items-center" href="<?php echo $video['article']; ?>" target="_blank">
											<div class="crop m-0"><img src="<?php echo 'http://img.youtube.com/vi/'.$matches[1].'/0.jpg'; ?>" />
											</div>
											<p class="video_title"><?=$video['title']?></p>
										</a>
									</div>
								</li>
							<?php } ?>
						</ul>
					</div>
				</div>
			</div>
			<?php echo $args['after_widget'];?>
		</div>
	<?php }

	function form($instance){
		echo '<div class="smt_widget_wrapper">';

		echo '</div>';
	}

	function update($new_instance, $old_instance)
	{
		$instance = $old_instance;
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['width'] = intval($new_instance['width']);
		$instance['videos'] = $new_instance['videos'];
		unset($instance['videos']['the__id__']);
		return $instance;
	}
} ?>
