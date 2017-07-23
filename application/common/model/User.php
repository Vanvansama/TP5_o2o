<?php
namespace app\common\model;

use think\Model;

class User extends BaseModel
{
    public function add($data) {

        $data['status'] = 1;
        
        return $this->allowField(true)
                    ->save($data);
    }

    /**
     * 根据用户名获取用户信息
     * @param $username
     */
    public function getUserByUsername($username) {
        if(!$username) {
            exception('用户名不合法');
        }

        $data = ['username' => $username];
        return $this->where($data)->find();
    }

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
}