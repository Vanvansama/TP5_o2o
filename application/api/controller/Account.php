<?php
namespace app\api\controller;
use think\Controller;
class Account extends Controller
{
  private $obj;

  public function _initialize(){
    $this->obj = model('BisAccount');
  }

  public function getUsername(){
    $username = input('post.username');
    if(!$username){
      $this->error('ID不合法');
    }
    $usernames = $this->obj->getGetusernameByusername($username);
    if(!$usernames){
      return show(0, 'error');
    }
    return show(1, 'success', $usernames);
  }

}