<?php 
namespace app\index\controller;
use think\Controller;
class Shop extends Controller{
	public function shop(){
		 $product=db('product')->select();
		 $this->assign('product',$product);
		  return view('');
	}
	public function doshop(){
		$aa=input('param.');
		dump($aa);
		if($aa['add'] == 1){
			$product=db('product')->where('st','1')->select();
			$this->assign('product',$product);
		    return view('shop/shop');
		}
		 if($aa['add'] == 2)
		{
			$product=db('product')->where('st','2')->select();
			$this->assign('product',$product);
		    return view('shop/shop');
		}
		if($aa['add'] == 3)
		{
			$product=db('product')->where('st','3')->select();
			$this->assign('product',$product);
		    return view('shop/shop');
		}
	}
}