<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用公共文件
function status($status){
  if($status == 1){
    $str = "<span class = 'label label-success radius'>正常</span>";
  }elseif($status == 0){
    $str = "<span class = 'label label-success radius'>待审</span>";
  }else{
    $str = "<span class = 'label label-success radius'>删除</span>";
  }
  return $str;
}

/**
 *int $type 0 get 1 post
 *array $data
 */
function doCurl($url, $type=0, $data=[]){
  $ch = curl_init();//初始化
  curl_setopt($ch, CURLOPT_URL,  $url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_HEADER, 0);
  
  if($type==1){
    //post
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
  }

  //执行，获取内容
  $output = curl_exec($ch);
  //释放curl
  curl_close($ch);
  return $output;
  
}
//商户入驻申请
function bisRegister($status){
  if($status == 1){
    $str = "入驻成功";
  }elseif($status == 0){
    $str = "待审核";
  }elseif($status == 2){
    $str = "非常抱歉，申请失败";
  }else{
    $str = "申请已被删除";
  }
  return $str;
}

//分页样式
function pagination($obj){
  if(!$obj){
    return '';
  }else{
    return '<div class="cl pd-5 bg-1 bk-gray mt-20 tp5-o2o">'.$obj->render().'</div>';
  }
}

function getSeCityName($path){
  if(empty($path)){
    return '';
  }
  if(preg_match('/,/', $path)){
    $cityPath = explode(',', $path);
    $cityId = $cityPath[1];
  }else{
    $cityId = $path;
  }
  $city = model('City')->get($cityId);
  return $city->name;
}