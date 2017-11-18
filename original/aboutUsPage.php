<div id="aboutUsContainer">
    <?php
        $post = get_post(29);
        $post_content = sanitize_post_field('post_content', $post->post_content, $post->ID, 'display');
        echo $post_content;
    ?>
</div>