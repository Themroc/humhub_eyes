<?php

namespace themroc\humhub\modules\eyes;

use themroc\humhub\modules\eyes\widgets\EyesWidget;
use Yii;

class Module extends \humhub\components\Module
{
	/**
	* @inheritdoc
	*/
	public function disable ()
	{
		parent::disable();
	}

	public static function onNotificationAddonInit ($event)
	{
		try {
			$event->sender->addWidget(EyesWidget::className(), [], ['sortOrder' => 900]);
		} catch (\Throwable $e) {
			Yii::error($e);
		}
	}
}
