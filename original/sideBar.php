<div id="sideBar">
	<?php
		$root = get_home_url();
		$urlList = array(
			"home",
			"about_us",
			"stages",
			"next_stage"
		);
		$w = 100 / count($urlList)
	?>

    <div id="menuList">
        <?php foreach ($urlList as $value):?>
            <div class='sideBarDiv hvr-underline-from-center'>
                <a href='<?php echo "$root/$value"?>'>
                    <?php echo "$value" ?>
                </a>
            </div>
        <?php endforeach; ?>
    </div>

    <div id="contactBox" class="sideBarDiv" style="font-size: 0.75em">
        Contact:
            Email:
                sakigake.hibiki@gmail.com
        <div id="social-icon" class="clear">
            <a href="#"><i class="fa fa-facebook fa-lg"></i>Facebook</a>
            <a href="#"><i class="fa fa-twitter fa-lg"></i>twitter</a>
        </div>
    </div>

</div>