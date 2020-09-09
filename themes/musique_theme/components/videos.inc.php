
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
	    			$videos[] = ['title' => get_the_title(), 'url' => $matches[1]];
	   			}
	   		}
		} ?>
		<div class="videos justify-content-center align-items-center">
			<?php echo $args['before_widget']?>
			<div class="row align-items-center">
				<div class="">
					<?php preg_match('/youtube.com\/watch\?v=(.*)/', $videos[0]['url'], $matches);?>
					<div class="video_frame_left">
						<a href="<?php echo $videos[0]['url']; ?>" target="_blank"><img src="<?php echo 'http://img.youtube.com/vi/'.$matches[1].'/0.jpg'; ?>" /></a>
					</div>
				</div>
				<ul class="col-3">
						<?php foreach (array_slice($videos, 1, 4) as $video) { ?>
							<?php preg_match('/youtube.com\/watch\?v=(.*)/', $video['url'], $matches);?>
							<li class="row">
								<div class="col-12 video_frame_right d-flex">
									<a href="<?php echo $video['url']; ?>" target="_blank"><img src="<?php echo 'http://img.youtube.com/vi/'.$matches[1].'/0.jpg'; ?>" /></a>
									<a href="<?php echo $video['url']; ?>"><?=$video['title']?></a>
								</div>
							</li>
						<?php } ?>
					</ul>
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
