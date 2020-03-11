<?php  
	namespace app\admin\controller;
	use think\Controller;
	class Index extends Controller{
		public function index()
		{
			$code=session('?admin');
			if(!$code)
			{
				$this->error('您还没有登录','admin/Login/login');
			}
			return view('');
		}
	}