<?php
namespace app\index\controller;
use think\Controller;
class Detail extends Base{
    public function index($id){
        // 根据id查询商品的数据
        $deal = model('Deal')->get($id);
        //$bisId = $deal->bis_id;
        if(!$deal || $deal->status != 1) {
            $this->error('该商品不存在');
        }
        // 获取分类信息
        $category = model('Category')->get($deal->category_id);
        // 获取分店信息
        $locations = model('BisLocation')->getNormalLocationsInId($deal->location_ids);//print_r($locations);exit;
        return $this->fetch('',[
            'deal' => $deal,
            'title' => $deal->name,
            'category' => $category,
            'locations' => $locations,
            'overplus' => $deal->total_count-$deal->buy_count,
        ]);
    }
}