<?php 
namespace app\index\controller;
use think\Controller;
class Product extends Controller{
	public function product(){
		$decide=session('?name');
		if(!$decide){
			$this->error('您还没有登录');
		}
		$product = input('param.');
		$deta=db('product')->where('id',$product['id'])->select();
		$this->assign('de',$deta);
		return view('');
	}

}