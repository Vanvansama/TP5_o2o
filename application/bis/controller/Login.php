<?php
namespace app\bis\controller;
use think\Controller;
class Login extends Controller
{
    public function index()
    {
        if(request()->isPost()){
            //登陆逻辑
            //获取数据
            $data = input('post.');
            //获取用户信息
            
            //判断
            
            $res = model('BisAccount')->get(['username'=>$data['username']]);
            if(!$res || $res->status != 1){
                $this->error('用户不存在或审核不通过');
            }
            if($res->password != md5($data['password'].$res->code)){
                $this->error('密码错误');
            }
            model('BisAccount')->updateById(['last_login_time'=>time()],$res->id);
            //信息保存到session， bis作用域
            session('bisAccount', $res, 'bis');
            return $this->success('登陆成功', url('index/index'));
        }else{
            //获取session
            $account = session('bisAccount', '', 'bis');
            if($account && $account->id){
                return $this->redirect(url('index/index'));
            }
            return $this->fetch();
        }
    }
    public function logout(){
        //清除session
        session(null, 'bis');
        //跳出
        $this->redirect('login/index');
    }
}
