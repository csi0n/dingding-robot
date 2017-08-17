<?php
/**
 * Created by PhpStorm.
 * User: csi0n
 * Date: 8/17/17
 * Time: 7:45 AM
 */

namespace csi0n\DingDingRobot\Repositories;


use csi0n\DingDingRobot\Repositories\Ext\AtBaseRepository;

class TextRepository extends AtBaseRepository {
	protected $messageType = 'text';
}