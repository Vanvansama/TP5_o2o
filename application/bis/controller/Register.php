<?php
namespace app\bis\controller;
use think\Controller;
class Register extends Controller
{
    public function index(){
      //获取一级城市表
      $citys = model('City')->getNormalCityByParentId();
      //获取一级分类表
      $categorys = model('Category')->getNormalCategoryByParentId();
      return $this->fetch('',[
        'citys' => $citys,
        'categorys' => $categorys,
      ]);
    }


}