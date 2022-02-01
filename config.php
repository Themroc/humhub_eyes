<?php

#use themroc\humhub\modules\eyes\Module;

use humhub\widgets\NotificationArea;

return [
	'id'=> 'eyes',
	'class'=> 'themroc\humhub\modules\eyes\Module',
	'namespace'=> 'themroc\humhub\modules\eyes',
	'events'=> [
		[ NotificationArea::class, NotificationArea::EVENT_INIT, ['themroc\humhub\modules\eyes\Module', 'onNotificationAddonInit']],
	],
];
