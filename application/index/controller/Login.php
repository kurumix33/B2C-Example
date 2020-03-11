<?php 
namespace app\index\controller;
use think\Controller;

class Login extends Controller{
	public function login(){
		return view('');
	}
	public function dologin(){
		$data=input('post.');
		$date['username']=$data['user'];
		$date['password']=$data['pass'];
		$user=db('user')->where('username',$date['username'])->count();
		$pass=db('user')->where('password',$date['password'])->count();
		if($user && $pass)
		{	session('name',$date['username']);
			$this->success('登录成功','index/Index/index');
			
		}else{
			$this->error('登录失败','index/Login/login');
		}
		
		
	}
	public  function  loginout()
	{
		session('name',null);
		$this->success('退出成功','index/Index/index');
	}
}