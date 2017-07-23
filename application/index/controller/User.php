<?php
namespace app\index\controller;
use think\Controller;
class User extends Controller
{
    public function login()
    {
        //获取session
        $user = session('o2o_user', '', 'o2o');
        if($user && $user->id){
            $this->redirect(url('index/index'));
        }
        return $this->fetch();
    }
    public function register()
    {
        if(request()->isPost()){
            $data = input('post.');

            if(!captcha_check($data['verifycode'])){
                //校验失败
                $this->error('验证失败');
            }
            //严格验证
            if($data['password']!=$data['repassword']){
                $this->error('两次输入密码不同');
            }
            //判断用户是否存在
            $accountResult = Model('User')->get(['username'=>$data['username']]);
            if($accountResult){
                $this->error('该用户存在');
            }
            //密码加密
            $data['code'] = mt_rand(100,10000);
            $data['password'] = md5($data['password'].$data['code']);
            $res = model('User')->add($data);
            if($res){
                $this->success('注册成功',url('user/login'));
            }else{
                $this->error('注册失败');
            }
        }else{
            return $this->fetch();
        }
    }

    public function logincheck(){
        if(!request()->isPost()){
            $this->error('提交不合法');
        }
        $data = input('post.');
        //校验

        //
        try{
            $user = model('User')->getUserByUsername($data['username']);
        }catch(\Exception $e){
            $this->error($e->getMessage());
        }
        if(!$user || $user->status!=1){
            $this->error('该用户不存在');
        }
        //判定密码合理
        if(md5($data['password'].$user->code) != $user->password){
            $this->error('密码错误');
        }
        //登陆成功
        model('User')->updateById(['last_login_time'=>time()], $user->id);
        //记录到session
        session('o2o_user', $user, 'o2o');
        $this->success('登陆成功', url('index/index'));
    }

    public function logout(){
        session(null, 'o2o');
        $this->redirect(url('user/login'));
    }
}
