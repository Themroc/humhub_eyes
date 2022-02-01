<?php

use themroc\humhub\modules\eyes\assets\EyesAssets;

EyesAssets::register($this);

$ass_base= $this->assetBundles['themroc\humhub\modules\eyes\assets\EyesAssets']->baseUrl;
$audio= $ass_base . '/humhub.eyes.mp3'

?>
<div class="btn-group">
	<a href="#" style="border:none; padding:0px; margin:4px 0px 0px; background-color:transparent" onclick="var a= new Audio('<?php echo $audio; ?>'); a.play();">
		<div class="eyes">
			<div class="eye eye-left">
				<div class="eye-inner"></div>
			</div>
			<div class="eye eye-right">
				<div class="eye-inner"></div>
			</div>
		</div>
	</a>
</div>
