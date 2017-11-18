<div>
    <div id="bgContainer">
        <bg-app></bg-app>
        <bg-app-no-img></bg-app-no-img>
        <?php
            $frameNumber = 10;
            $baseUrl = plugin_dir_path( __FILE__ ).'../images/bgImg/';
            $imgArr = array();
        ?>
        <?php
            for($folderName = 1; $folderName <= $frameNumber; $folderName++):
                $imgFolderArr = array();
                for($fileName = 1; ; $fileName++):
                    $filePathChecker = $baseUrl.$folderName.'/'.$fileName.'.jpg';
                    $filePath = get_template_directory_uri().'/images/bgImg/'.$folderName.'/'.$fileName.'.jpg';
                    if(file_exists($filePathChecker)):
                        $imgFolderArr[] = $filePath;
                    else:
                        break;
                    endif;
                endfor;
                $imgArr[] = $imgFolderArr;
            endfor;

            $jsImgArr = json_encode($imgArr);
        ?>
    </div>

    <script type="text/javascript">
        const baseUrl = '<?php echo get_template_directory_uri();?>';
        const frameNumber = <?php echo $frameNumber?>;
        const imgUrlArr = <?php echo $jsImgArr; ?>;
    </script>
    <script src='<?php echo get_template_directory_uri(); ?>/js/vueComponents/backgroundApp.js'></script>
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/background.css">
</div>