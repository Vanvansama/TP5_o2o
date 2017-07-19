<?php
namespace app\admin\validate;
use think\Validate;
class Bis extends Validate {
  protected $rule = [
    ['id','number'],
    ['status','number|in:-1,0,1,2','状态必须为数字|必须为-1，0，1'],
  ];

  /**场景设置**/
  protected $scene = [
    'status'  =>  ['id', 'status'],
  ];

}