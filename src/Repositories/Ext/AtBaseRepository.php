<?php
/**
 * Created by PhpStorm.
 * User: csi0n
 * Date: 8/17/17
 * Time: 7:51 AM
 */

namespace csi0n\DingDingRobot\Repositories\Ext;


class AtBaseRepository extends BaseRepository {
	public function mobile( array $mobile ) {
		$this->extendInformation['at']['atMobiles'] = $mobile;

		return $this;
	}

	public function all( $isAtAll = true ) {
		$this->extendInformation['at']['isAtAll'] = $isAtAll;

		return $this;
	}
}