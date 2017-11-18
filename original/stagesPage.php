<?php
    $stagePostsArgs = array('category_name'=>'Stages');
    $stagePosts = get_posts($stagePostsArgs);
    $stagePostArr = [];
    foreach($stagePosts as $stagePost){
        $stageAttr = array(
            "title" => $stagePost->post_title,
            "date" => $stagePost->post_date,
            "content" => $stagePost->post_content,
            "modalVis" => false
        );
        array_unshift($stagePostArr, $stageAttr);
    }
?>

<div id="stagesAllContainer">
    <div id="stagePageTitle">
        Stages
    </div>
    <div id="stagePageMain">
        <div id="stagePageTabContainer">
            <template v-for="year in activeYears">
                <div @click="selectYear(year)">
                    <input :id="'tab'+year" type="radio" name="stagePageTabYear" hidden>
                    <label :for="'tab'+year" class="hvr-forward hvr-underline-from-left"style="cursor: pointer">{{ year }}年度</label>
                </div>
            </template>
        </div>
        <div id="stagePageContentContainer">
            <div v-for="postData in postsData" v-if="filterPostByDate(postData)">
                <div v-html="postData['content']"></div>
            </div>
        </div>
    </div>
</div>

<!--
<div id="stagesContainer">
    <stages-tab></stages-tab>
</div>
-->

<script type="text/javascript">
    const stagePosts = <?php echo json_encode($stagePostArr); ?>;
</script>
<!-- changed file name concated 2 -->
<script src='<?php echo get_template_directory_uri(); ?>/js/vueComponents/stagesTabApp2.js' > </script>
<link rel="stylesheet" type="text/css" href="<?echo get_template_directory_uri(); ?>/css/stagesContainer2.css">
<!--link rel="stylesheet" href="<?php //echo get_template_directory_uri(); ?>/css/stagePosts.css" type="text/css"-->