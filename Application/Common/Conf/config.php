<?php
return array (
		// '配置项'=>'配置值'
		// 'DEFAULT_MODULE' => 'Index', //默认模块
		// 'URL_MODEL' => '2', //URL模式
		// 'SESSION_AUTO_START' => true, //是否开启session

		// /* 路由相关配置 */
		// 'URL_ROUTER_ON' => true,
		// 'URL_ROUTE_RULES' => array
		// (
		// '/^(index|enterprise|resume|personal|archives)$/i' => 'Index/:1'
		// ),
		// 加载扩展配置文件
		'LOAD_EXT_CONFIG' => 'db',
		'URL_CASE_INSENSITIVE' => true,
		'URL_ROUTER_ON' => true, // URL路由
		'URL_MODEL' => 2,
		'TMPL_PARSE_STRING' => array
		(
		  '__PUBLIC__' => '/Public', // 站点公共目录路径
		  '__CSS__' => '/Public/css', // 样式表文件目录路径
		  '__IMAGES__' => '/Public/images', // 模板页布局图片目录路径
		  '__JS__' => '/Public/js', // js脚本文件目录路径
		  '__UPLOAD__' => '/Public/useruploads', // 上传文件根路径
		  '__CMSUPLOAD__' => '/Public/cmsuploads' // 后台上传文件根路径
		),

		'VAR_MODULE'            =>  'HOME',
)
;