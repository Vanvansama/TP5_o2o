<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:75:"D:\wamp64\www\Web_test\public/../application/bis\view\register\waiting.html";i:1500341071;s:72:"D:\wamp64\www\Web_test\public/../application/bis\view\public\header.html";i:1500169049;s:72:"D:\wamp64\www\Web_test\public/../application/bis\view\public\footer.html";i:1500168295;}*/ ?>
<!--包含头部文件-->
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<LINK rel="Bookmark" href="/favicon.ico" >
<LINK rel="Shortcut Icon" href="/favicon.ico" />
<!--[if lt IE 9]>
<script type="text/javascript" src="lib/html5.js"></script>
<script type="text/javascript" src="lib/respond.min.js"></script>
<script type="text/javascript" src="lib/PIE_IE678.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="__STATIC__/admin/h-ui/static/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="__STATIC__/admin/h-ui/static/h-ui.admin/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="__STATIC__/admin/h-ui/lib/Hui-iconfont/1.0.8/iconfont.css" />
<!-- <link rel="stylesheet" type="text/css" href="__STATIC__/admin/h-ui/lib/icheck/icheck.css" /> -->
<link rel="stylesheet" type="text/css" href="__STATIC__/admin/h-ui/static/h-ui.admin/skin/default/skin.css" id="skin" />
<link rel="stylesheet" type="text/css" href="__STATIC__/admin/h-ui/static/h-ui.admin/css/style.css" />
<!-- <link rel="stylesheet" type="text/css" href="__STATIC__/admin/css/common.css" /> -->
<link rel="stylesheet" type="text/css" href="__STATIC__/admin/uploadify/uploadify.css" /> 
<!--[if IE 6]>
<script type="text/javascript" src="http://lib.h-ui.net/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title>o2o平台</title>
<meta name="keywords" content="tp5打造o2o平台系统">
<meta name="description" content="o2o平台">
</head>
<div class="cl pd-5 bg-1 bk-gray mt-20">
  <?php if($detail): ?>
<h1><?php echo bisRegister($detail['status']); ?></h1>
  <?php else: ?>
<h1>不存在该入驻申请情况</h1>
  <?php endif; ?>
</div>
<script type="text/javascript" src="__STATIC__/admin/h-ui/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="__STATIC__/admin/h-ui/lib/layer/2.4/layer.js"></script> 
<script type="text/javascript" src="__STATIC__/admin/h-ui/lib/My97DatePicker/4.8/WdatePicker.js"></script> 
<script type="text/javascript" src="__STATIC__/admin/h-ui/lib/jquery.validation/1.14.0/jquery.validate.js"></script> 
<script type="text/javascript" src="__STATIC__/admin/h-ui/lib/jquery.validation/1.14.0/validate-methods.js"></script>
<script type="text/javascript" src="__STATIC__/admin/h-ui/lib/jquery.validation/1.14.0/messages_zh.js"></script>  
<script type="text/javascript" src="__STATIC__/admin/h-ui/static/h-ui/js/H-ui.js"></script> 
<script type="text/javascript" src="__STATIC__/admin/h-ui/static/h-ui.admin/js/H-ui.admin.js"></script>
<script type="text/javascript" src="__STATIC__/admin/js/common.js"></script>
<script type="text/javascript" src="__STATIC__/admin/uploadify/jquery.uploadify.min.js"></script>
<script type="text/javascript" src="__STATIC__/admin/js/image.js"></script> 

</body>
</html>