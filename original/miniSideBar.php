<div id="miniSideBar" hidden="hidden">
    <div id="miniSideBarLogo">
        <a href="<?php echo get_home_url();?>">
            <img src="<?php echo get_template_directory_uri(); ?>/images/logo.jpg" style="width: 100%">
        </a>
        <hr width="90%" color="#CCCCCC">

        <?php $pages = get_pages(array('sort_column'=>'menu_order')); ?>
        <div id="miniMenuList">
            <?php foreach ($pages as $page):?>
                <a href='<?php echo "$page->guid"?>'>
                    <div class='sideBarDiv hvr-underline-from-center'>
                        <?php echo "$page->post_title" ?>
                    </div>
                </a>
            <?php endforeach; ?>

            <div id="miniNextStage">
                <next-stage></next-stage>
            </div>
        </div>
    </div>

    <div id="miniLinkIcons">
        <a id="miniCopyMailAddress">
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

    <?php
        $nextStagePost = get_post(60);
        $nextStageAttr = array(
            "title" => $nextStagePost->post_title,
            "date" => $nextStagePost->post_date,
            "content" => $nextStagePost->post_content
        );
    ?>

    <script type="text/javascript">
        const nextStagePost = <?php echo json_encode($nextStageAttr); ?>;
    </script>
    <script src='<?php echo get_template_directory_uri(); ?>/js/vueComponents/nextStageApp.js' > </script>
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/miniSidebar.css">
</div>