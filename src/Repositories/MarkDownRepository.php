<?php
/**
 * Created by PhpStorm.
 * User: csi0n
 * Date: 8/17/17
 * Time: 8:06 AM
 */

namespace csi0n\DingDingRobot\Repositories;


use csi0n\DingDingRobot\Repositories\Ext\AtBaseRepository;

class MarkDownRepository extends AtBaseRepository {
	protected $messageType = 'markdown';
}