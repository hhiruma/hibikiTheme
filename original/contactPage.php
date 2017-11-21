<div id="contactContainer">
    <div id="contactTitle">
        <h1>Contact</h1>
    </div>
    <div id="contactMain">
        <?php while(have_posts()):the_post();?>
            <?php the_content(); ?>
        <?php endwhile; ?>
    </div>
</div>

<link rel="stylesheet" type="text/css" href="<?echo get_template_directory_uri(); ?>/css/contact.css">