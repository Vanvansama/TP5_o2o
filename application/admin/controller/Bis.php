<?php
namespace app\admin\controller;
use think\Controller;
class Bis extends Controller
{
  private $obj;

  public function _initialize(){
    $this->obj = model('Bis');
  }
  public function index(){
    $bis = $this->obj->getBisByStatus(1);
    return $this->fetch('', [
      'bis' => $bis,
    ]);
  }
  public function dellist(){
    $bis = $this->obj->getBisByStatus(-1);
    return $this->fetch('', [
      'bis' => $bis,
    ]);
  }
  public function apply(){
    $bis = $this->obj->getBisByStatus();
    return $this->fetch('', [
      'bis' => $bis,
    ]);
  }
  public function detail(){
    $id = input('get.id');
    if(empty($id)){
      return $this->error('ID错误');
    }
    //获取一级城市表
    $citys = model('City')->getNormalCityByParentId();
    //获取一级分类表
    $categorys = model('Category')->getNormalCategoryByParentId();
    //获取商户申请数据
    $bisData = model('Bis')->get($id);
    $locationData = model('BisLocation')->get(['bis_id'=>$id, 'is_main'=>1]);
    $accountData = model('BisAccount')->get(['bis_id'=>$id, 'is_main'=>1]);
    return $this->fetch('',[
      'citys'  =>  $citys,
      'categorys' =>  $categorys,
      'bisData'   =>  $bisData,
      'locationData'  =>  $locationData,
      'accountData'   =>  $accountData,
    ]);
  }

  //修改状态
  public function status(){
    $data=input('get.');
    //校验，
    $validate = validate('Bis');
    if(!$validate->scene('status')->check($data)){
      $this->error($validate->getError());
    } 
    $res = $this->obj->save(['status'=>$data['status']], ['id'=>$data['id']]);
    $location = model('BisLocation')->save(['status'=>$data['status']], ['bis_id'=>$data['id'], 'is_main'=>1]);
    $account = model('BisAccount')->save(['status'=>$data['status']], ['bis_id'=>$data['id'], 'is_main'=>1]);
    if($res && $location && $account){
      //发送邮件

      $this->success('状态更新成功');
    }else{
      $this->error('状态更新失败');
    }
  }
}