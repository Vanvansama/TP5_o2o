<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:75:"D:\wamp64\www\Web_test\public/../application/admin\view\category\index.html";i:1500001417;}*/ ?>
﻿<!DOCTYPE HTML>
<html>

<head>
	<meta charset="utf-8">
	<meta name="renderer" content="webkit|ie-comp|ie-stand">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
	<meta http-equiv="Cache-Control" content="no-siteapp" />
	<!--[if lt IE 9]>
<script type="text/javascript" src="lib/html5shiv.js"></script>
<script type="text/javascript" src="lib/respond.min.js"></script>
<![endif]-->
	<link rel="stylesheet" type="text/css" href="__STATIC__/admin/h-ui/static/h-ui/css/H-ui.min.css" />
	<link rel="stylesheet" type="text/css" href="__STATIC__/admin/h-ui/static/h-ui.admin/css/H-ui.admin.css" />
	<link rel="stylesheet" type="text/css" href="__STATIC__/admin/h-ui/lib/Hui-iconfont/1.0.8/iconfont.css" />
	<link rel="stylesheet" type="text/css" href="__STATIC__/admin/h-ui/static/h-ui.admin/skin/default/skin.css" id="skin" />
	<link rel="stylesheet" type="text/css" href="__STATIC__/admin/h-ui/static/h-ui.admin/css/style.css" />
	<link rel="stylesheet" type="text/css" href="__STATIC__/admin/css/common.css" />
	<!--[if IE 6]>
<script type="text/javascript" src="lib/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
	<title>生活分类列表</title>
</head>

<body>
	<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 分类管理 <span class="c-gray en">&gt;</span> 生活分类列表
		<a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);"
		  title="刷新"><i class="Hui-iconfont">&#xe68f;</i></a></nav>
	<div class="page-container">
		<div class="cl pd-5 bg-1 bk-gray mt-20">
			<span class="l">
				<a href="javascript:;" onclick="datadel()" class="btn btn-danger radius">
					<i class="Hui-iconfont">&#xe6e2;</i> 批量删除</a> 
				<a class="btn btn-primary radius" data-title="添加分类" data-href="article-add.html" 
					onclick="category_add('添加分类','<?php echo url('category/add'); ?>','','300')" href="javascript:;">
					<i class="Hui-iconfont">&#xe600;</i> 添加分类</a>
			</span>
			<span class="r">共有数据：<strong>54</strong> 条</span>
		</div>
		<!-- <img style="margin:20px" width="280" height="140" src="<?php echo url('index/map'); ?>" /> -->
		<div class="mt-20">
			<table class="table table-border table-bordered table-bg table-hover table-sort">
				<thead>
					<tr class="text-c">
						<th width="40"><input type="checkbox" name="" value=""></th>
						<th width="80">ID</th>
						<th width="100">分类</th>
						<th width="30">排序序号</th>
						<th width="150">新增时间</th>
						<th width="60">发布状态</th>
						<th width="100">操作</th>
					</tr>
				</thead>
				<tbody>
					<?php if(is_array($categorys) || $categorys instanceof \think\Collection || $categorys instanceof \think\Paginator): $i = 0; $__LIST__ = $categorys;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
					<tr class="text-c">
						<td><input type="checkbox" value="" name=""></td>
						<td><?php echo $vo['id']; ?></td>
						<td><?php echo $vo['name']; ?></td>
						<td class="text-c listorder"><input size="3" attr-id="<?php echo $vo['id']; ?>" name="listorder" value="<?php echo $vo['listorder']; ?>"/></td>
						<td><?php echo $vo['create_time']; ?></td>
						<td class="td-status"><a href="<?php echo url('category/status',['id'=>$vo['id'],'status'=>$vo['status']==1?0:1]); ?>" title="点击修改状态"><?php echo status($vo['status']); ?></a></td>
						<td class="td-manage">
							<a href="<?php echo url('category/index',['parent_id'=>$vo['id']]); ?>">获取子栏目</a>						
							<a style="text-decoration:none" class="ml-5" onClick="category_add('编辑','<?php echo url('category/edit', ['id'=>$vo['id']]); ?>','','300')" 
								href="javascript:;"title="编辑">
								<i class="Hui-iconfont">&#xe6df;</i>
							</a>
							<a style="text-decoration:none" class="ml-5" onClick="category_del('<?php echo url('category/status', ['id'=>$vo['id'], 'status'=>-1]); ?>')"
							  href="javascript:;" title="删除">
								<i class="Hui-iconfont">&#xe6e2;</i>
							</a>
						</td>
					</tr>
					<?php endforeach; endif; else: echo "" ;endif; ?>
				</tbody>
			</table>
		</div>
	</div>
	<div class="cl pd-5 bg-1 bk-gray mt-20 tp5-o2o"><?php echo $categorys->render(); ?></div>
	<!--_footer 作为公共模版分离出去-->
	<script type="text/javascript" src="__STATIC__/admin/h-ui/lib/jquery/1.9.1/jquery.min.js"></script>
	<script type="text/javascript" src="__STATIC__/admin/h-ui/lib/layer/2.4/layer.js"></script>
	<script type="text/javascript" src="__STATIC__/admin/h-ui/static/h-ui/js/H-ui.min.js"></script>
	<script type="text/javascript" src="__STATIC__/admin/h-ui/static/h-ui.admin/js/H-ui.admin.js"></script>
	<script type="text/javascript" src="__STATIC__/admin/js/common.js"></script>
	
	<!--/_footer 作为公共模版分离出去-->

	<!--请在下方写此页面业务相关的脚本-->
	<script type="text/javascript" src="__STATIC__/admin/h-ui/lib/laypage/1.2/laypage.js"></script>
	<script type="text/javascript">
		var SCOPE = {
			'listorder_url':"<?php echo url('category/listorder'); ?>",
		};
		/*资讯-添加*/
		function article_add(title, url, w, h) {
			var index = layer.open({
				type: 2,
				title: title,
				content: url
			});
			layer.full(index);
		}
		function category_add(title, url, w, h) {
			layer_show(title,url,w,h);
		}
		/*资讯-编辑*/
		function article_edit(title, url, id, w, h) {
			var index = layer.open({
				type: 2,
				title: title,
				content: url
			});
			layer.full(index);
		}
		/*资讯-删除*/
		function category_del(url){
			layer.confirm('确认删除吗？',function(index){
				window.location.href = url;
			});
		}
		function article_del(obj, id) {
			layer.confirm('确认要删除吗？', function (index) {
				$.ajax({
					type: 'POST',
					url: '',
					dataType: 'json',
					success: function (data) {
						$(obj).parents("tr").remove();
						layer.msg('已删除!', {
							icon: 1,
							time: 1000
						});
					},
					error: function (data) {
						console.log(data.msg);
					},
				});
			});
		}

		// /*资讯-审核*/
		// function article_shenhe(obj, id) {
		// 	layer.confirm('审核文章？', {
		// 			btn: ['通过', '不通过', '取消'],
		// 			shade: false,
		// 			closeBtn: 0
		// 		},
		// 		function () {
		// 			$(obj).parents("tr").find(".td-manage").prepend(
		// 				'<a class="c-primary" onClick="article_start(this,id)" href="javascript:;" title="申请上线">申请上线</a>');
		// 			$(obj).parents("tr").find(".td-status").html('<span class="label label-success radius">已发布</span>');
		// 			$(obj).remove();
		// 			layer.msg('已发布', {
		// 				icon: 6,
		// 				time: 1000
		// 			});
		// 		},
		// 		function () {
		// 			$(obj).parents("tr").find(".td-manage").prepend(
		// 				'<a class="c-primary" onClick="article_shenqing(this,id)" href="javascript:;" title="申请上线">申请上线</a>');
		// 			$(obj).parents("tr").find(".td-status").html('<span class="label label-danger radius">未通过</span>');
		// 			$(obj).remove();
		// 			layer.msg('未通过', {
		// 				icon: 5,
		// 				time: 1000
		// 			});
		// 		});
		// }
		// /*资讯-下架*/
		// function article_stop(obj, id) {
		// 	layer.confirm('确认要下架吗？', function (index) {
		// 		$(obj).parents("tr").find(".td-manage").prepend(
		// 			'<a style="text-decoration:none" onClick="article_start(this,id)" href="javascript:;" title="发布"><i class="Hui-iconfont">&#xe603;</i></a>'
		// 		);
		// 		$(obj).parents("tr").find(".td-status").html('<span class="label label-defaunt radius">已下架</span>');
		// 		$(obj).remove();
		// 		layer.msg('已下架!', {
		// 			icon: 5,
		// 			time: 1000
		// 		});
		// 	});
		// }

		// /*资讯-发布*/
		// function article_start(obj, id) {
		// 	layer.confirm('确认要发布吗？', function (index) {
		// 		$(obj).parents("tr").find(".td-manage").prepend(
		// 			'<a style="text-decoration:none" onClick="article_stop(this,id)" href="javascript:;" title="下架"><i class="Hui-iconfont">&#xe6de;</i></a>'
		// 		);
		// 		$(obj).parents("tr").find(".td-status").html('<span class="label label-success radius">已发布</span>');
		// 		$(obj).remove();
		// 		layer.msg('已发布!', {
		// 			icon: 6,
		// 			time: 1000
		// 		});
		// 	});
		// }
		// /*资讯-申请上线*/
		// function article_shenqing(obj, id) {
		// 	$(obj).parents("tr").find(".td-status").html('<span class="label label-default radius">待审核</span>');
		// 	$(obj).parents("tr").find(".td-manage").html("");
		// 	layer.msg('已提交申请，耐心等待审核!', {
		// 		icon: 1,
		// 		time: 2000
		// 	});
		// }
	</script>
</body>

</html>