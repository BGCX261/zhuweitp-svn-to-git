<?php
namespace Admin\Controller;
use Think\Controller;
class TestController extends Controller{
	public function index(){
		$this->assign("title","这是一个测试常量参考的页面")->display();
	}


}