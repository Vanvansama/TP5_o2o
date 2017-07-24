<?php
namespace app\index\controller;
use think\Controller;
class Index extends Base
{
    public function index()
    {
        //首页大图
        //广告位
        $featured = model('Featured')->getFeaturedsByType(0);
        $small_featured = model('Featured')->getFeaturedsByType(1);
        $deal = model('Deal')->getNormalDeals();
        //$datas = model('Deal')->getNormalDeals();
        return $this->fetch('', [
			'featured' => $featured,
			'small_featured' => $small_featured,
			'deal' => $deal,
		]);
    }

}
