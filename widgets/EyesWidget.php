<?php

namespace themroc\humhub\modules\eyes\widgets;

use humhub\components\Widget;

class EyesWidget extends Widget
{
	/**
	 * Creates the Wall Widget
	 */
	public function run()
	{
		return $this->render('eyesWidget', [
		]);
	}
}
