<?php

/**
 * @abstract 资讯控制器
 * @author Xjin
 */
namespace Home\Controller;

use Think\Controller;

class NewsController extends Controller {

	/**
	 *
	 * @abstract 新闻列表
	 * @param CODE 分类struct
	 */
	public function deng() {

		/* 加载分页类 */
		// import('Org.Net.Page');
		$newsModel = M ( 'news' );

		$code = $_GET ['code'];
		$p = intval ( $_REQUEST ['p'] ) ? intval ( $_REQUEST ['p'] ) : 1;

		if (! empty ( $code )) {
			$map ['code'] = $code;
			$cateName = M ( 'category' )->where ( array ('struct' => $code ) )->getField ( 'name' );
			$this->assign ( 'cateName', $cateName );
		}
		$map ['published'] = 1;

		$pageSize = 20;

		$total_count = $newsModel->where ( $map )->count ();
		$page = new \Think\Page ( $total_count, $pageSize );
		$this->assign ( 'page', $page->dispaly () );

		$list = $newsModel->field ( 'id, title, update_time' )->where ( $map )->limit ( ($p - 1) * $pageSize, $pageSize )->select ();
		$this->assign ( 'list', $list );
		$this->display ( 'list' );
	}

	/**
	 *
	 * @abstract 信息详细页
	 * @version 20140319
	 */
	public function detail()
	{
		$id = intval($_GET['id']);
		$newsModel = M ( 'news' );
		$info = $newsModel->find($id);
		$this->assign('info',$info);
		$this->display();
	}
}