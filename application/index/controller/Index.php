<?php 
namespace app\index\controller;
use think\Controller;
class Index extends Controller{
	public function index(){
		$code=db('product')->select();
		$this->assign('in',$code);
		return view('');
	}
}