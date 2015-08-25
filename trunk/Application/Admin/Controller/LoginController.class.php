<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller{
	//验证码类
	public function Verify(){
		$config =    array(
			'length'      =>    4,     // 验证码位数
			'useNoise'    =>    true, // 关闭验证码杂点
			'imageW'=>120,			//验证码的宽度
			'imageH'=>60,			//高度
			'fontSize'=>18,			//验证码字体大小
		);
		//生成验证码
		$Verify =new \Think\Verify($config);
		ob_clean();
		$Verify->entry();	
	}
	//验证登陆
	
}