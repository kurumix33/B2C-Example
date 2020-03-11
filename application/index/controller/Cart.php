<?php 
namespace app\index\controller;
use think\Controller;
use think\View;
class Cart extends Controller{
	public function cart(){
		$decide=session('?name');
		if(!$decide){
				$this->error('您还没有登录');
		}

		$de = input('post.');
	
	 	$ai=session('name');
	 	$date['name']=$de['name'];
	 	$date['price']=$de['price'];
	 	$date['image']=$de['img'];
	 	$date['num']=$de['quanity'];
	 	$date['sid']=$ai;
	 	
	 
	 	$name=db('cart')->where('name',$date['name'])->value('name');
	 	$ses =db('cart')->where('sid',$date['sid'])->value('sid');
	 	$js=db('cart')
	 	->where('name',$date['name'])
	 	->where('sid',$date['sid'])
	 	->select();
	 	

		if($js == NULL)
	 	{
	 		db('cart')->insert($date);
	 		$code=db('cart')->where('sid',$date['sid'])->select();
	 		$this->assign('de',$code);
	 		
	 		
	 		
	 	}else if($name == $date['name'] && $ses == $date['sid']){
	 		$count=db('cart')
	 		->where('name',$date['name'])
	 		->where('sid',$date['sid'])
	 		->value('num');
	 		db('cart')
	 		->where('name',$date['name'])
	 		->where('sid',$date['sid'])
	 		->setField('num',$count+$date['num']);
	 		$code=db('cart')->where('sid',$date['sid'])->select();
	 		$this->assign('de',$code);
	 	}
		
		return view('');
	
	 }
	 public function docart()
	 {

	 	$decide=session('?name');
		if(!$decide){
		$this->error('您还没有登录');
		}
		$aid=session('name');

	 	$code=db('cart')->where('sid',$aid)->select();
	 	$this->assign('de',$code);
	 	return view('cart/cart');
	 }
	 public function outcart()
	 {
	 	$a=input('param.');
	 	db('cart')->where('id',$a['id'])->delete();
	 	$this->success('删除成功');
	 }
	 public function check()
	 {

	 	$aid=session('name');
	 	db('cart')->where('sid',$aid)->delete();
	 	$this->success('购物成功','index/Index/index');

	 }


}