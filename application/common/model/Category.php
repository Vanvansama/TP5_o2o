<?php
namespace app\common\model;

use think\Model;

class Category extends Model
{
  public function add($data){
    $data['status'] = 1;
    $data['create_time'] = time();
    return $this->save($data);
  }
  public function getNormalFirstCategory(){
    $data = [
      'status' => 1,
      'parent_id' => 0,
    ];
    $order = [
      'id'  => 'desc',
    ];

    return $this->where($data)
                ->order($order)
                ->select();
  }
  public function getFirstCategory($parentId = 0){
    $data = [
      'parent_id' => $parentId,
      'status'    => ['neq',-1],

    ];
    $order = [
      'listorder' => 'asc',
      'id'  =>  'asc',
    ];
    $result = $this->where($data)
                ->order($order)
                ->paginate();
    return $result;
  }

  public function getNormalCategoryByParentId($parentId=0){
    $data = [
      'status' => 1,
      'parent_id' => $parentId,
    ];
    $order = [
      'id'  => 'desc',
    ];

    return $this->where($data)
                ->order($order)
                ->select();
  }
  
}