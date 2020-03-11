<?php  
	namespace app\admin\controller;
	use think\Controller;
	class Login extends Controller{
		public function login()
		{
			return view('');
		}
		public function dologin()
		{
			$data=input('post.');
			$user=db('user')->where('username',$data['name'])->count();
			$pass=db('user')->where('password',$data['password'])->count();
			if(!captcha_check($data['code']))
			{
				$this->success('登录失败');
			}
			if($user && $pass)
			{   session('admin',$data['name']);
				$this->success('登录成功','admin/Index/index');
			}
		}
		public function loginout()
		{
			session('admin',null);
			$this->success('退出成功','admin/Login/login');
		}
	}