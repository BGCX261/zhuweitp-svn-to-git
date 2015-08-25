<?php
//后台配置文件
return array(
	'TMPL_PARSE_STRING'  =>array(
		//后台模板替换原则,MODULE_NAME当前模块名称,APP_NAME是在入口文件index.php中指定的常量
		//通过这样的方式，我们又回到thinkphp3.1.3中模板替换原则
		'__CSS__'=>__ROOT__.'/'.APP_NAME.'/'.MODULE_NAME.'/View/Public/Css',
		'__JS__'=>__ROOT__.'/'.APP_NAME.'/'.MODULE_NAME.'/View/Public/Js',
	),
);