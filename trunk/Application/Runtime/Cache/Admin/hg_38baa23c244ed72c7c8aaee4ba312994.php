<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title><?php echo ($title); ?></title>
</head>
<body>
<p><?php echo ($title); ?></p>
	1 /tptest 网站根目录地址 <br/> 
2 /tptest 当前应用（入口文件）地址 <br/> 
3 /tptest/Admin 当前模块的URL地址  <br/> 
4 /tptest/Admin/Test 当前控制器的URL地址  <br/> 
5 /tptest/Admin/Test/index 当前操作的URL地址  <br/> 
6 /tptest/admin/test/index 当前URL地址  <br/> 
--------------模板替换不了的常量----------------<br/>
7 __INFO__ 当前的PATH_INFO字符串<br/>   
8 __EXT__ 当前URL地址的扩展名  <br/> 
9 MODULE_NAME 当前模块名  <br/> 
10 MODULE_PATH 当前模块路径<br/> 
11 CONTROLLER_NAME 当前控制器名  <br/> 
12 ACTION_NAME 当前操作名  <br/> 
13 APP_DEBUG 是否开启调试模式  <br/> 
14 APP_MODE 当前应用模式名称  <br/> 
15 APP_STATUS 当前应用状态<br/> 
16 STORAGE_TYPE 当前存储类型<br/> 
17 MODULE_PATHINFO_DEPR 模块的PATHINFO分割符<br/> 
</body>
</html>