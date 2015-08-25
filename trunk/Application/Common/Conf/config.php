<?php
return array(
	//'配置项'=>'配置值'
	//项目配置文件
	/*=======================应用分组设置=========================*/
	'APP_GROUP_LIST'=>'Home,Admin,Wap',//多个应用设置
	'DEFAULT_GROUP'=>'Home',//默认分组设置
	'DEFAULT_MODULE'=>'Home',//默认模块设置
	'DEFAULT_CONTROLLER'=>'index',//默认控制器
	
	
	/**===================默认的MVC三层设置=======================**/
	'DEFAULT_M_LAYER'       =>  'Model', // 默认的模型层名称
	'DEFAULT_C_LAYER'       =>  'Controller', // 默认的控制器层名称
	'DEFAULT_V_LAYER'       =>  'View', // 默认的视图层名称
	
	/***====================session设置====================**/
	'SESSION_AUTO_START'=>true,//默认开启session
	'SESSION_PREFIX' => 'hg_', // session 前缀
	
	/*===================URL配置===========================*/
	'URL_MODEL'=>'2',//url模式
	'URL_ROUTER_ON'=>true,//开启路由功能
	/*====================url大小写不区分===========*/
	'URL_CASE_INSENSITIVE'=>true,
	
	/*===================伪静态配置===============*/
	'URL_HTML_SUFFIX'=>'html',//多个伪静态用|分割
	
	/**===============默认时区=====================*/
	'DEFAULT_TIMEZONE'=>'PRC',// 默认时区
	//I方法参数过滤
	'DEFAULT_FILTER'=>'htmlspecialchars', // 默认参数过滤方法 用于I函数
	
	/*=================cookie配置=================*/
	'COOKIE_EXPIRE'=>3000000,    // Cookie有效期一个月
	'COOKIE_PATH'=>'/',//整个网站都有效
	'COOKIE_PREFIX'=>'hg_',//cookie前缀
	
	/**=================数据库配置===========**/
	'DB_TYPE'   => 'mysql', // 数据库类型
    'DB_HOST'   => 'localhost', // 服务器主机地址
    'DB_NAME'   => 'heigetp', // 数据库名
    'DB_USER'   => 'root', // 用户名
    'DB_PWD'    => '', // 密码
    'DB_PORT'   => 3306, // 端口
    'DB_PREFIX' => 'hg_', // 数据库表前缀 

	/*================开启页面调试功能===========*/
	'SHOW_PAGE_TRACE' =>true, // 显示页面调试Trace信息,项目上线后关闭
	
	//==============默认输出编码==================
	'DEFAULT_CHARSET'       =>  'utf-8', // 默认输出编码
	/*============错误页面处理==================*/
	//'URL_404_REDIRECT'=>__PUBLIC__.'/error.html',
	
	/***==============模板引擎设置==================**/
	'TMPL_CACHE_ON'         =>  true,        
	//=========是否开启模板编译缓存,设为false则每次都会重新编译=========
	'TMPL_CACHE_PREFIX'     =>  'hg_',         // 模板缓存前缀标识，可以动态改变
	'TMPL_CACHE_TIME' => 864000, //模板缓存有效期 0 为永久，(以数字为值，单位:秒)
	//定界符
	'TMPL_L_DELIM'=>'{',
	'TMPL_R_DELIM'=>'}',
	//公共前台模板替换原则Public是相对网站的根目录
	/*
	'TMPL_PARSE_STRING'  =>array(
		'__CSS__'=>'/Public/Css',
		'__JS__'=>'/Public/Js',
		'__UPLOAD__'=>'/Upload/'
		 
	),
	*/
	
	
	/*==================错误页面配置==================*/
	'ERROR_MESSAGE'         =>  '页面错误！请稍后再试～',//错误显示信息,非调试模式有效
	'ERROR_PAGE'            =>  __PUBLIC__.'/error.html', // 错误定向页面
	'SHOW_ERROR_MSG'        =>  false,    // 显示错误信息
	'TRACE_MAX_RECORD'      =>  100,    // 每个级别的错误信息 最大记录数
	
	/***============日志记录设置==============**/
	'LOG_RECORD'            =>  false,   // 默认不记录日志
	'LOG_TYPE'              =>  'File', // 日志记录类型 默认为文件方式
	'LOG_LEVEL'             =>  'EMERG,ALERT,CRIT,ERR',// 允许记录的日志级别
	'LOG_EXCEPTION_RECORD'  =>  false,    // 是否记录异常信息日志
	
);