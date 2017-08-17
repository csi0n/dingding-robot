<?php
/**
 * Created by PhpStorm.
 * User: csi0n
 * Date: 8/17/17
 * Time: 8:31 AM
 */

namespace csi0n\DingDingRobot\Foundation\ServiceProviders;


use csi0n\DingDingRobot\Repositories\ActionCardRepository;
use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ActionCardServiceProvider implements ServiceProviderInterface {

	/**
	 * Registers services on the given container.
	 *
	 * This method should only be used to configure services and parameters.
	 * It should not get services.
	 *
	 * @param Container $pimple A container instance
	 */
	public function register( Container $pimple ) {
		$pimple['actioncard'] = function ( $pimple ) {
			return new ActionCardRepository( $pimple );
		};
	}
}