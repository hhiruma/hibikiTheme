<div id="sidebar">
    <div v-if="visibilize" id="shownSidebar">
        <div class="sidebarLogo">
            <a href="<?php echo get_home_url();?>">
                <img src="<?php echo get_template_directory_uri(); ?>/images/logo.jpg" style="width: 100%">
            </a>
            <hr width="80%" color="#CCCCCC">

            <?php $pages = get_pages(array('sort_column'=>'menu_order')); ?>
            <div class="menuList">
                <?php foreach ($pages as $page):?>
                    <a href='<?php echo "$page->guid"?>'>
                        <div class='sidebarDiv hvr-underline-from-center'>
                            <?php echo "$page->post_title" ?>
                        </div>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>

        <div id="linkIcons">
            <a id="copyMailAddress">
                <i class="fa fa-envelope fa-lg" style="background-color: lightgreen"></i>
            </a>
            <a href="https://www.facebook.com/%E6%97%A9%E7%A8%B2%E7%94%B0%E5%A4%A7%E5%AD%A6%E9%AD%81%E9%9F%BF-229672980453174/" target="_blank">
                <i class="fa fa-facebook fa-lg" style="background-color: blue"></i>
            </a>
            <a href="https://twitter.com/sakigake_hibiki" target="_blank">
                <i class="fa fa-twitter fa-lg" style="background-color: skyblue"></i>
            </a>
            <a href="https://www.youtube.com/channel/UCJ2ijSO2X4wMwUBO7g2VerA" target="_blank">
                <i class="fa fa-youtube fa-lg" style="background-color: red"></i>
            </a>
        </div>
    </div>
    <div v-else>
        <label for="openMenu">
            <i class="fa fa-bars fa-5 hiddenIcon" aria-hidden="true" style="cursor: pointer"></i>
        </label>
        <input id="openMenu" type="radio" name="menuToggle">

        <label for="closeMenu">
            <div id="blurBg"></div>
        </label>
        <input id="closeMenu" type="radio" name="menuToggle">

        <div id="hiddenSidebar">
            <div class="sidebarLogo">
                <a href="<?php echo get_home_url();?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/logo.jpg" style="width: 100%">
                </a>
                <hr width="80%" color="#CCCCCC">

                <?php $pages = get_pages(array('sort_column'=>'menu_order')); ?>
                <div class="menuList">
                    <?php foreach ($pages as $page):?>
                        <a href='<?php echo "$page->guid"?>'>
                            <div class='sidebarDiv hvr-underline-from-center'>
                                <?php echo "$page->post_title" ?>
                            </div>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>

            <div id="linkIcons">
                <a id="copyMailAddress">
                    <i class="fa fa-envelope fa-lg" style="background-color: lightgreen"></i>
                </a>
                <a href="https://www.facebook.com/%E6%97%A9%E7%A8%B2%E7%94%B0%E5%A4%A7%E5%AD%A6%E9%AD%81%E9%9F%BF-229672980453174/" target="_blank">
                    <i class="fa fa-facebook fa-lg" style="background-color: blue"></i>
                </a>
                <a href="https://twitter.com/sakigake_hibiki" target="_blank">
                    <i class="fa fa-twitter fa-lg" style="background-color: skyblue"></i>
                </a>
                <a href="https://www.youtube.com/channel/UCJ2ijSO2X4wMwUBO7g2VerA" target="_blank">
                    <i class="fa fa-youtube fa-lg" style="background-color: red"></i>
                </a>
            </div>
        </div>
    </div>
</div>

<script src='<?php echo get_template_directory_uri(); ?>/js/vueComponents/sidebarApp.js' > </script>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/sidebar.css">