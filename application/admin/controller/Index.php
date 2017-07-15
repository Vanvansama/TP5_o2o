<?php
namespace app\admin\controller;
use think\Controller;
class Index extends Controller
{
  public function index(){
    return $this->fetch();
  }
  public function welcome(){
    //\phpmailer\Email::send('953181215@qq.com','test','success');
    return "欢迎来到后台主页~";
  }
  public function test(){
    \Map::getLngLat('北京昌平沙河');
  }
  public function map(){
    return \Map::staticimage('北京昌平沙河地铁');
  }
}