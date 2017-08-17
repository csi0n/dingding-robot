<?php
/**
 * Created by PhpStorm.
 * User: csi0n
 * Date: 8/17/17
 * Time: 7:46 AM
 */

namespace csi0n\DingDingRobot\Repositories\Ext;


use Pimple\Container;

class BaseRepository {
	protected $messageType;

	protected $extendInformation;
	private $container;

	/**
	 * BaseRepository constructor.
	 *
	 * @param Container $container
	 */
	public function __construct( Container $container ) {
		$this->container = $container;
	}

	public function __call( $name, $arguments ) {
		$this->extendInformation[ $this->messageType ][ $name ] = count( $arguments ) === 1 ? $arguments[0] : $arguments;

		return $this;
	}


	public function send() {
		return $this->Request(
			array_merge(
				[ 'msgtype' => $this->messageType ],
				$this->extendInformation )
		);
	}

	private function Request( array $post_string ) {
		$ch = curl_init();
		curl_setopt( $ch, CURLOPT_URL, $this->container['config']['webhook_token'] );
		curl_setopt( $ch, CURLOPT_POST, 1 );
		curl_setopt( $ch, CURLOPT_CONNECTTIMEOUT, 5 );
		curl_setopt( $ch, CURLOPT_HTTPHEADER, array( 'Content-Type: application/json;charset=utf-8' ) );
		curl_setopt( $ch, CURLOPT_POSTFIELDS, json_encode( $post_string ) );
		curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
		$data = curl_exec( $ch );
		curl_close( $ch );

		return json_decode( $data, true );
	}
}