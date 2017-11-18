<?php get_header(); ?>

<?php get_template_part('original/sidebar'); ?>
<?php //get_template_part('original/miniSidebar'); ?>

<main id="main" class="site-main" role="main">
	<?php if (is_front_page()) : ?>
		<?php //get_template_part('original/test'); ?>
		<?php get_template_part('original/background'); ?>
		<?php //get_template_part('original/homePage'); ?>
	<?php elseif(is_page('about_us')): ?>
		<?php get_template_part('original/aboutUsPage'); ?>
	<?php elseif (is_page('stages')):?>
		<?php get_template_part('original/stagesPage'); ?>
	<?php endif ?>
</main>

<?php get_footer(); ?>

<script type="text/javascript">
	let mainW = $('#main');
	$(window).resize(function(){
		let winW = $(window).width();
		if(winW < 700){
			$('#sideBar').attr('hidden', 'hidden');
			$('#miniSideBar').removeAttr('hidden');
		} else {
			$('#sideBar').removeAttr('hidden');
			$('#miniSideBar').attr('hidden', 'hidden');
		}
	});
</script>