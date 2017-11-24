<!doctype html>
<html>

	<head>
		<meta charset="UTF-8">
		<title>M站自动不生成</title>
		<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
		<link href="../css/mui.min.css" rel="stylesheet" />
		<link rel="stylesheet" type="text/css" href="../css/app.css"/>
		<style type="text/css">
			body, .mui-content{
				background-color: #fff;
			}
			.download{
				position: fixed;
				bottom: 44px;
				height: 60px;
				left: 30px;
   				right: 30px;
			}
			.download .mui-btn-block{
				padding: 10px 0;
			}
			.mui-bar.mui-bar-footer{
				line-height: 44px;
				text-align: center;
			}
		</style>
	</head>

	<body>
		<?php
			$agent = $_SERVER['HTTP_USER_AGENT'];
			if(strpos($agent,"Html5Plus") === false){//仅在非流应用环境下才显示导航栏
		?>
			<header class="mui-bar mui-bar-nav">
			    <a class="mui-action-back mui-icon mui-icon-left-nav mui-pull-left"></a>
			    <h1 class="mui-title">web导航栏</h1>
			</header>
			<div class="download bottom">
				<button type="button" class="mui-btn mui-btn-blue mui-btn-block">下载 wap2app</button>
			</div>
			<footer class="mui-bar mui-bar-footer" style="color: #8f8f94;font-size: 14px;">
				 @2017 公司 蒙ICP备14002744号-1
			</footer>
		<?php
			}
		?>
		<div class="mui-content mui-content-padded" style="margin-top: 20px;">
			<p style="text-indent: 22px;">
				这是wap2app去wap化元素的示例页面，本页面在普通手机浏览器下，本页面包含如下元素：
			</p>
			<ul>
				<li>	顶部web导航栏</li>
				<li>原生下载引导</li>
				<li>底部ICP备案信息</li>
			</ul>
			<p>M站根据UA信息判断，发现在 wap2app 环境下，不输出这些DOM节点，用户也就看不到如上三种元素</p>
		</div>
	</body>
	<script src="../js/app.js" type="text/javascript" charset="utf-8"></script>

</html>