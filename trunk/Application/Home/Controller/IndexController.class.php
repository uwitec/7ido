<?php
/**
 * @abstract  首页控制器
 * @author Xjin
 */

namespace Home\Controller;
use Think\Controller;

class IndexController extends Controller {

	/**
	 * @abstract 首页控制器
	 * @since 20140317
	 */

	public function index() {
		$this->display ();
	}
}