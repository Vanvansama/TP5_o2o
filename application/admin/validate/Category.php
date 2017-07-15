<?php
namespace app\admin\validate;
use think\Validate;
class Category extends Validate {
  protected $rule = [
    ['name','require|max:20','分类名不能为空|分类名不能超过10个字符'],
    ['parent_id','number'],
    ['id','number'],
    ['status','number|in:-1,0,1','状态必须为数字|必须为-1，0，1'],
    ['listorder','number'],
  ];

  /**场景设置**/
  protected $scene = [
    'add' => ['name','parent_id','id'],//添加
    'listorder' => ['id','listorder'],
    'status'  =>  ['id', 'status'],
  ];

}