<?php get_header(); ?>

<main id="main" class"site-main" role="main">
	<!--
	<?php while(have_posts()):
			the_post();
			the_title();
			the_content();
		endwhile;
	?>
	-->

	<?php if (is_front_page()) : ?>
		<div id="mainLogo">
			Logo here
		</div>
		<div id="mainVideoContainer">
			<main-video-player></main-video-player>
		</div>
		<script src='<?php echo get_template_directory_uri(); ?>/js/vueComponents/mainVideoApp.js'></script>
	<?php endif ?>

	<?php if(is_page('about_us')): ?>
		<div id="aboutUsContainer">
			<?php 
				$post = get_post(29);
				$post_content = sanitize_post_field('post_content', $post->post_content, $post->ID, 'display');
				echo $post_content;
			?>
		</div>
	<?php elseif (is_page('stages')):?>
		<?php
			$stagePostsArgs = array('category_name'=>'Stages');
			$stagePosts = get_posts($stagePostsArgs);
			$stagePostArr = [];
			foreach($stagePosts as $stagePost){
				$stageAttr = array(
					"title" => $stagePost->post_title,
					"date" => $stagePost->post_date,
					"content" => $stagePost->post_content
				);
				array_unshift($stagePostArr, $stageAttr);
			}
		?>	

		<div id="stagesContainer">
			<stages-tab></stages-tab>
		</div>

		<script type="text/javascript">
			const stagePosts = <?php echo json_encode($stagePostArr); ?>;
		</script>
		<script src='<?php echo get_template_directory_uri(); ?>/js/vueComponents/stagesTabApp.js' > </script>
	<?php endif ?>
</main>

<?php get_footer(); ?>
<?php get_template_part('original/sideBar'); ?>
