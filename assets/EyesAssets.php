<?php

namespace themroc\humhub\modules\eyes\assets;

use yii\web\AssetBundle;

class EyesAssets extends AssetBundle
{
	/**
	 * @var string defines the path of your module assets
	 */
	public $sourcePath= '@eyes/resources';

	/**
	 * @var array defines where the js files are included into the page, note your custom js files should be included after the core files (which are included in head)
	 */
	public $jsOptions= [
		'position' => \yii\web\View::POS_END
	];

	/**
	* @var array change forceCopy to true when testing your js in order to rebuild this assets on every request (otherwise they will be cached)
	*/
	public $publishOptions= [
		'forceCopy' => false
	];

	public $css= [
		'humhub.eyes.css'
	];

	public $js= [
		'humhub.eyes.js'
	];
}
