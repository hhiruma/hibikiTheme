<div class="slider"> </div>

<script type="text/javascript">
    jQuery(function($) {
        $('.slider').bgSwitcher({
            images: [
                '<?php echo get_template_directory_uri();?>/images/bgImg/1/1.jpg',
                '<?php echo get_template_directory_uri();?>/images/bgImg/2/1.jpg',
                '<?php echo get_template_directory_uri();?>/images/bgImg/3/1.jpg',
            ],
            interval: 5000,
            effect: "drop"
        });
    });
</script>

<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/test.css">