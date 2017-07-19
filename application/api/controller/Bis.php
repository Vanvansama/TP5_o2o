<?php
namespace app\api\controller;
use think\Controller;
class Bis extends Controller
{
  private $obj;

  public function _initialize(){
    $this->obj = model('Bis');
  }

  public function getBisname(){
    $name = input('post.name');
    if(!$name){
      $this->error('ID不合法');
    }
    $names = $this->obj->getGetnameByname($name);
    if(!$names){
      return show(0, 'error');
    }
    return show(1, 'success', $names);
  }

}