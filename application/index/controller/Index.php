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
        return $this->fetch('', [
			'featured' => $featured,
		]);
    }
}
