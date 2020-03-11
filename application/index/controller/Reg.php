<?php 
namespace app\index\controller;
use think\Controller;
use think\Validate;
class Reg extends Controller{
	public function reg(){
		return view('');
	}
	public function doreg(){
		$data=input('post.');
		$pass['repass'] = $data['repass'];
		$date['username']=$data['user'];
		$date['password']=$data['pass'];
		$date['nickname']=$data['realname'];
		$date['address']=$data['addr'];
		$date['phone']=$data['phone'];
		if(
			$data['user']=="" ||
			$data['pass']=="" ||
			$data['realname']=="" ||
			$data['addr']=="" ||
			$data['phone']==""
		){
			$this->success('不要提交空的内容','index/Reg/reg');
		}
		if($pass['repass']!=$data['pass']){
			$this->success('两次密码不一致','index/Reg/reg');
		}
		$decide=db('user')->insert($date);
		if($decide)
		 {
		 	$this->success('注册成功','index/Login/login');
		 }else{
			$this->error('注册失败','index/Reg/reg');
		}
		
	}
}