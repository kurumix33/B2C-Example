<?php  
  namespace app\admin\controller;
	use think\Controller;
  class Pass extends Controller{
    public function pass()
    {
	$code=session('?admin');
	if(!$code)
	{
				$this->error('您还没有登录','admin/Login/login');
	} 
   
      return view('');
    }
    public function dopass()
    {
    	$data=input('post.');
    	$code = session('admin');
    	$pass=db('user')->where('username',$code)->value('password');
    	if($pass !=$data['mpass'])
    	{
    		$this->success('原密码错误，请重新检查');
    	}else{
    		db('user')->where('password',$data['mpass'])->setField('password',$data['newpass']);
    	$this->success('密码修改成功');
    	}
    	
    }
  }