<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title><?php echo ($title); ?></title>
	<link rel="stylesheet" type="text/css" href="/Application/Admin/View/Public/Css/login.css" />
</head>
<body>
	<table class="table" align="center">
	<caption></caption>
		<tr>
			<td>管理员：</td>
			<td><input type="text" name="UserName" id="UserName" class="input-text len240" /></td>
		</tr>
		<tr>
			<td>密码：</td>
			<td><input type="password" name="PassWord" id="PassWord" class="input-text len240" /></td>
		</tr>
		<tr>
			<td>验证码：</td>
			<td><input type="text" name="ChkCode" class="len60" /><img src="<?php echo U('Admin/Login/Verify');?>" alt="看不清，点击这里" onclick="this.src='<?php echo U('Admin/Login/Verify');?>?abc='+Math.random()" title="看不清，点击这里刷新" width="120" height="60"/></td>
		</tr>
		<tr>
			<td colspan="2" align="center"><input type="submit" value="登录" class="Sub"/><input type="reset" value="取消" class='Res' /></td>
		</tr>
	</table>
</body>
</html>