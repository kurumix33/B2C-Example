<?php  
	namespace app\admin\controller;
	use think\Controller;
	use think\Request;
	class Adv extends Controller{
		public function adv()
		{
			$code=session('?admin');
			if(!$code)
			{
				$this->error('您还没有登录','admin/Login/login');
			}
			$product=db('product')->select();
			$this->assign('product',$product);
			return view('');
		}
		public function doadv()
		{
			
			$res = input('post.');

			$file=request()->file('img');

			$nam = $file->getInfo('name');
			$info = $file->move(ROOT_PATH . 'public' . DS . 'uploads/20190518',$nam);
			$name=$info->getinfo('name');

			$date['name'] =$res['title'];
			$date['price'] =$res['url'];
			$date['image'] =$name;

			if($info){
				db('product')->insert($date);
				$this->success('上传成功');

			}else{
				$this->success('上传失败');
			}
			
		}
		public function outadv()
		{
			$data = input('param.');
			db('product')->where('id',$data['id'])->delete();
			$this->success('删除成功');
		}
	}