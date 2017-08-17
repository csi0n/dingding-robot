<?php

namespace csi0n\DingDingRobot;

use csi0n\DingDingRobot\Foundation\Application;
use Illuminate\Support\ServiceProvider;

/**
 * Class DingDingRobotServiceProvider
 * @package csi0n\DingDingRobot
 */
class DingDingRobotServiceProvider extends ServiceProvider {

	public function boot() {
		$this->publishes( [
			__DIR__ . '/Config/dingding-robot.php' => config_path( 'dingding-robot.php' ),
		] );
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register() {
		$this->app->singleton( 'DingDingRobot', function ( $app ) {
			return new Application( config( 'dingding-robot' ) );
		} );
	}

	public function provides() {
		return [ 'DingDingRobot' ];
	}
}
