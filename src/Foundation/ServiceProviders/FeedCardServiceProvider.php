<?php
/**
 * Created by PhpStorm.
 * User: csi0n
 * Date: 8/17/17
 * Time: 8:22 AM
 */

namespace csi0n\DingDingRobot\Foundation\ServiceProviders;


use csi0n\DingDingRobot\Repositories\FeedCardRepository;
use Pimple\Container;
use Pimple\ServiceProviderInterface;

class FeedCardServiceProvider implements ServiceProviderInterface {

	/**
	 * Registers services on the given container.
	 *
	 * This method should only be used to configure services and parameters.
	 * It should not get services.
	 *
	 * @param Container $pimple A container instance
	 */
	public function register( Container $pimple ) {
		$pimple['feedcard'] = function ( $pimple ) {
			return new FeedCardRepository( $pimple );
		};
	}
}