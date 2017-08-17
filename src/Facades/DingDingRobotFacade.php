<?php
namespace csi0n\DingDingRobot\Facades;

use Illuminate\Support\Facades\Facade;

class DingDingRobotFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'DingDingRobot';
    }
}
