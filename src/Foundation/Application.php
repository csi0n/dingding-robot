<?php
/**
 * Created by PhpStorm.
 * User: csi0n
 * Date: 8/17/17
 * Time: 7:39 AM
 */

namespace csi0n\DingDingRobot\Foundation;

use csi0n\DingDingRobot\Foundation\ServiceProviders\ActionCardServiceProvider;
use csi0n\DingDingRobot\Foundation\ServiceProviders\FeedCardServiceProvider;
use csi0n\DingDingRobot\Foundation\ServiceProviders\LinkServiceProvider;
use csi0n\DingDingRobot\Foundation\ServiceProviders\MarkDownServiceProvider;
use csi0n\DingDingRobot\Foundation\ServiceProviders\TextServiceProvider;
use Pimple\Container;

class Application extends Container {

	protected $providers = [
		TextServiceProvider::class,
		LinkServiceProvider::class,
		MarkDownServiceProvider::class,
		FeedCardServiceProvider::class,
		ActionCardServiceProvider::class
	];

	/**
	 * Application constructor.
	 *
	 * @param array $config
	 */
	public function __construct( array $config ) {
		parent::__construct();
		$this['config'] = $config;
		$this->registerProviders();
	}

	public function __get( $name ) {
		return $this->offsetGet( $name );
	}

	public function __set( $name, $value ) {
		$this->offsetSet( $name, $value );
	}

	private function registerProviders() {
		foreach ( $this->providers as $provider ) {
			$this->register( new $provider() );
		}
	}
}