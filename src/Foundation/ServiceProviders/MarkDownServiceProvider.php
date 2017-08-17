<?php
/**
 * Created by PhpStorm.
 * User: csi0n
 * Date: 8/17/17
 * Time: 8:14 AM
 */

namespace csi0n\DingDingRobot\Foundation\ServiceProviders;


use csi0n\DingDingRobot\Repositories\MarkDownRepository;
use Pimple\Container;
use Pimple\ServiceProviderInterface;

class MarkDownServiceProvider implements ServiceProviderInterface {

	/**
	 * Registers services on the given container.
	 *
	 * This method should only be used to configure services and parameters.
	 * It should not get services.
	 *
	 * @param Container $pimple A container instance
	 */
	public function register( Container $pimple ) {
		$pimple['markdown'] = function ( $pimple ) {
			return new MarkDownRepository( $pimple );
		};
	}
}