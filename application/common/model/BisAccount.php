<?php
namespace app\common\model;

use think\Model;

class BisAccount extends BaseModel
{
  public function getGetusernameByusername($username){
    $data = [
      'status' => 1,
      'username' => $username,
    ];
    $order = [
      'username'  => 'desc',
    ];

    return $this->where($data)
                ->order($order)
                ->select();
  }
  public function updateById($data, $id){
    //allowField过滤data数据
    return $this->allowField(true)->save($data, ['id'=>$id]);
  }
}