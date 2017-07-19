<?php
namespace app\common\model;

use think\Model;

class Bis extends BaseModel
{
  public function getGetnameByname($name){
    $data = [
      'status' => 1,
      'name' => $name,
    ];
    $order = [
      'name'  => 'desc',
    ];

    return $this->where($data)
                ->order($order)
                ->select();
  }
  //通过状态获取数据
  public function getBisByStatus($status = 0){
    $order = [
      'id'  =>  'desc',
    ];
    $data = [
      'status'  =>  $status,
    ];
    $result = $this->where($data)
                   ->order($order)
                   ->paginate();
    return $result;
  }
} 