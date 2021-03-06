<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:74:"D:\wamp64\www\Web_test\public/../application/index\view\user\register.html";i:1500620457;}*/ ?>
<!DOCTYPE html>
<html>

<head lang="en">
	<meta charset="UTF-8">
	<title>注册</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta name="format-detection" content="telephone=no">
	<meta name="renderer" content="webkit">
	<meta http-equiv="Cache-Control" content="no-siteapp" />

	<link rel="stylesheet" href="__STATIC__/index/AmazeUI-2.4.2/assets/css/amazeui.min.css" />
	<link href="__STATIC__/index/css/dlstyle.css" rel="stylesheet" type="text/css">
	<script src="__STATIC__/index/AmazeUI-2.4.2/assets/js/jquery.min.js"></script>
	<script src="__STATIC__/index/AmazeUI-2.4.2/assets/js/amazeui.min.js"></script>

</head>

<body>

	<div class="login-boxtitle">
		<a href=""><img alt="" src="../images/logobig.png" /></a>
	</div>

	<div class="res-banner">
		<div class="res-main">
			<div class="login-banner-bg"><span></span><img src="../images/big.jpg" /></div>
			<div class="login-box">

				<div class="am-tabs" id="doc-my-tabs">
					<ul class="am-tabs-nav am-nav am-nav-tabs am-nav-justify">
						<li class="am-active"><a href="">邮箱注册</a></li>
						<li><a href="">手机号注册</a></li>
					</ul>

					<div class="am-tabs-bd">
						<div class="am-tab-panel am-active">
							<form method="post" action="<?php echo url('user/register'); ?>">
								<div class="user-email">
									<label for="email"><i class="am-icon-user"></i></label>
									<input type="text" name="username" id="username" placeholder="请输入用户名" class="username">
								<div class="se_username"></div>
								</div>
								<div class="user-email">
									<label for="email"><i class="am-icon-envelope-o"></i></label>
									<input type="email" name="email" id="email" placeholder="请输入邮箱账号">
								</div>
								<div class="user-pass">
									<label for="password"><i class="am-icon-lock"></i></label>
									<input type="password" name="password" id="password" placeholder="设置密码">
								</div>
								<div class="user-pass">
									<label for="passwordRepeat"><i class="am-icon-lock"></i></label>
									<input type="password" name="repassword" id="passwordRepeat" placeholder="确认密码">
								</div>
								<div class="user-pass">
									<label><i class="am-icon-play"></i></label>
									<input type="text" placeholder="验证码" name="verifycode" onblur="if(this.value==''){this.value='验证码:'}" onclick="if(this.value=='验证码:'){this.value='';}"
									 value="验证码:" style="width:160px;">
									<div style="float:right;"><?php echo captcha_img(); ?></div>
								</div>
								<div class="am-cf">
									<input type="submit" name="" value="注册" class="am-btn am-btn-primary am-btn-sm am-fl">
								</div>
							</form>
						</div>

						<div class="am-tab-panel">
							<form method="post" action="">
								<div class="user-email">
									<label for="email"><i class="am-icon-user"></i></label>
									<input type="text" name="" id="" placeholder="请输入用户名">
								</div>
								<div class="user-phone">
									<label for="phone"><i class="am-icon-mobile-phone am-icon-md"></i></label>
									<input type="tel" name="mobile" id="phone" placeholder="请输入手机号">
								</div>
								<div class="verification">
									<label for="code"><i class="am-icon-code-fork"></i></label>
									<input type="tel" name="" id="code" placeholder="请输入验证码">
									<a class="btn" href="javascript:void(0);" onclick="" id="sendMobileCode">
										<span id="dyMobileButton">获取</span>
									</a>
								</div>
								<div class="user-pass">
									<label for="password"><i class="am-icon-lock"></i></label>
									<input type="password" name="password" id="password" placeholder="设置密码">
								</div>
								<div class="user-pass">
									<label for="passwordRepeat"><i class="am-icon-lock"></i></label>
									<input type="password" name="repassword" id="passwordRepeat" placeholder="确认密码">
								</div>
								
							</form>
							<div class="am-cf">
								<input type="submit" name="" value="注册" class="am-btn am-btn-primary am-btn-sm am-fl">
							</div>
							<hr>
						</div>

						<script>
							$(function () {
								$('#doc-my-tabs').tabs();
							})
						</script>

					</div>
				</div>

			</div>
		</div>

		<div class="footer ">
			<div class="footer-hd ">
				<p>
					<a href="# ">糯米科技</a>
					<b>|</b>
					<a href="# ">商城首页</a>
					<b>|</b>
					<a href="# ">支付宝</a>
					<b>|</b>
					<a href="# ">物流</a>
				</p>
			</div>
			<div class="footer-bd ">
				<p>
					<a href="# ">关于糯米</a>
					<a href="# ">合作伙伴</a>
					<a href="# ">联系我们</a>
					<a href="# ">网站地图</a>
				</p>
			</div>
		</div>
</body>
<script>
 var SCOPE = {
  'username_url'     :  '<?php echo url('api/user/getUsername'); ?>',
 };
</script>
<script src="__STATIC__/index/js/common.js"></script>

</html>