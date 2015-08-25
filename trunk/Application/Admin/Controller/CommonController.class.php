<?php
namespace Admin\Controller;
use Think\Controller;
class CommonController extends Controller{
	//后台登录检查
	public function _initialize(){
		$LoginId=session("Login");
		$Uid=session("Uid");
		if(!isset($LoginId) || !isset($Uid)){
			//不存在session就要登录
			$this->assign("title","管理员登录")->display("Public:login");
			exit;
		}
	}
}