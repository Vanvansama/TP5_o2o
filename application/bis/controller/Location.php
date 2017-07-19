<?php
namespace app\bis\controller;
use think\Controller;
class Location extends Base
{
    //显示列表页

    
    public function index(){
        return $this->fetch();
    }
    public function add(){
        if(request()->isPost()){
            $data = input('post.');
            //validate机制校验

            //门店入库操作
                //获取经纬度
            $lnglat = \Map::getLngLat($data['address']);
            if(empty($lnglat) || $lnglat['status'] !=0 || $lnglat['status']['precise'] !=1){
                //$this->error('数据获取失败或者地址不精准');
            }
            $bisId = $this->getLoginUser()->bis_id;
            $data['cat'] = '';
            if(!empty($data['se_category_id'])){
                $data['cat'] = implode('|', $data['se_category_id']);
            }
            $locationData = [
                'bis_id'  =>  $bisId,
                'name'    =>  $data['name'],
                'logo'    =>  $data['logo'],
                'tel'    =>  $data['tel'],
                'contact' =>  $data['contact'],
                'category_id' =>  $data['category_id'],
                'category_path' =>  $data['category_id'].','.$data['cat'],
                'city_id'   =>    $data['city_id'],
                'city_path'  =>  empty($data['se_city_id']) ? $data['city_id'] :$data['city_id'].','.$data['se_city_id'],
                'api_address'   =>    $data['address'],
                'open_time'   =>    $data['open_time'],
                'content'   =>    empty($data['content']) ? '' : $data['content'],
                'is_main'   =>    0,//代表分店
                'xpoint'    =>   empty($lnglat['result']['location']['lng']) ? '' : $lnglat['result']['location']['lng'],
                'ypoint'    =>   empty($lnglat['result']['location']['lat']) ? '' : $lnglat['result']['location']['lat'],
            ];
            $locationId = model('BisLocation')->add($locationData);
            if($locationId){
                return $this->success('门店申请成功');
            }else{
                return $this->success('门店申请失败');
            }
        }else{
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
}