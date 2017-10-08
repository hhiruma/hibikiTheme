<div id="menuBar">
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

	<?php 
		foreach($urlList as $value):
			echo "
				<div class='menuBox hvr-underline-from-center'>
					<a href='$root/$value'>$value</a><br>
				</div>
			";
		endforeach;
	?>
</div>

