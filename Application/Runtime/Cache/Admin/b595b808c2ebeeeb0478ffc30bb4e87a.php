<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<link rel="Bookmark" href="/Public/Admin//favicon.ico" >
<link rel="Shortcut Icon" href="/Public/Admin//favicon.ico" />
<!--[if lt IE 9]>
<script type="text/javascript" src="/Public/Admin/lib/html5shiv.js"></script>
<script type="text/javascript" src="/Public/Admin/lib/respond.min.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="/Public/Admin/static/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="/Public/Admin/static/h-ui.admin/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="/Public/Admin/lib/Hui-iconfont/1.0.8/iconfont.css" />
<link rel="stylesheet" type="text/css" href="/Public/Admin/static/h-ui.admin/skin/default/skin.css" id="skin" />
<link rel="stylesheet" type="text/css" href="/Public/Admin/static/h-ui.admin/css/style.css" />
<!--[if IE 6]>
<script type="text/javascript" src="/Public/Admin/lib/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->



<header class="navbar-wrapper">
	<div class="navbar navbar-fixed-top">
		<div class="container-fluid cl"> <a class="logo navbar-logo f-l mr-10 hidden-xs" href="/aboutHui.shtml">H-ui.admin</a> <a class="logo navbar-logo-m f-l mr-10 visible-xs" href="/aboutHui.shtml">H-ui</a> <span class="logo navbar-slogan f-l mr-10 hidden-xs">v3.1</span> <a aria-hidden="false" class="nav-toggle Hui-iconfont visible-xs" href="javascript:;">&#xe667;</a>
			<nav class="nav navbar-nav">
				<ul class="cl">
					<li class="dropDown dropDown_hover"><a href="javascript:;" class="dropDown_A"><i class="Hui-iconfont">&#xe600;</i> 新增 <i class="Hui-iconfont">&#xe6d5;</i></a>
						<ul class="dropDown-menu menu radius box-shadow">
							<li><a href="javascript:;" onclick="article_add('添加资讯','article-add.html')"><i class="Hui-iconfont">&#xe616;</i> 资讯</a></li>
							<li><a href="javascript:;" onclick="picture_add('添加资讯','picture-add.html')"><i class="Hui-iconfont">&#xe613;</i> 图片</a></li>
							<li><a href="javascript:;" onclick="product_add('添加资讯','product-add.html')"><i class="Hui-iconfont">&#xe620;</i> 产品</a></li>
							<li><a href="javascript:;" onclick="member_add('添加用户','member-add.html','','510')"><i class="Hui-iconfont">&#xe60d;</i> 用户</a></li>
						</ul>
					</li>
				</ul>
			</nav>
			<nav id="Hui-userbar" class="nav navbar-nav navbar-userbar hidden-xs">
				<ul class="cl">
					<li>超级管理员</li>
					<li class="dropDown dropDown_hover"> <a href="#" class="dropDown_A">admin <i class="Hui-iconfont">&#xe6d5;</i></a>
						<ul class="dropDown-menu menu radius box-shadow">
							<li><a href="#">个人信息</a></li>
							<li><a href="#">切换账户</a></li>
							<li><a href="#">退出</a></li>
						</ul>
					</li>
					<li id="Hui-msg"> <a href="#" title="消息"><span class="badge badge-danger">1</span><i class="Hui-iconfont" style="font-size:18px">&#xe68a;</i></a> </li>
					<li id="Hui-skin" class="dropDown right dropDown_hover"> <a href="javascript:;" class="dropDown_A" title="换肤"><i class="Hui-iconfont" style="font-size:18px">&#xe62a;</i></a>
						<ul class="dropDown-menu menu radius box-shadow">
							<li><a href="javascript:;" data-val="default" title="默认（黑色）">默认（黑色）</a></li>
							<li><a href="javascript:;" data-val="blue" title="蓝色">蓝色</a></li>
							<li><a href="javascript:;" data-val="green" title="绿色">绿色</a></li>
							<li><a href="javascript:;" data-val="red" title="红色">红色</a></li>
							<li><a href="javascript:;" data-val="yellow" title="黄色">黄色</a></li>
							<li><a href="javascript:;" data-val="orange" title="橙色">橙色</a></li>
						</ul>
					</li>
				</ul>
			</nav>
		</div>
	</div>
</header>




<title>周口市公安消防支队后台管理系统</title>
<meta name="keywords" content="周口市公安消防支队后台管理系统">
<meta name="description" content="周口市公安消防支队后台管理系统">
</head>
<body>
<header class="navbar-wrapper">
	<div class="navbar navbar-fixed-top">
		<div class="container-fluid cl"> <a class="logo navbar-logo f-l mr-10 hidden-xs" href="/aboutHui.shtml">周口市公安消防支队后台管理系统</a> <a class="logo navbar-logo-m f-l mr-10 visible-xs" href="/aboutHui.shtml">H-ui</a>
			<span class="logo navbar-slogan f-l mr-10 hidden-xs">v1.0</span>
			<a aria-hidden="false" class="nav-toggle Hui-iconfont visible-xs" href="javascript:;">&#xe667;</a>
		<nav id="Hui-userbar" class="nav navbar-nav navbar-userbar hidden-xs">
			<ul class="cl">
				<li class="dropDown dropDown_hover">
					<a href="#" class="dropDown_A"><?php echo (session('username')); ?><i class="Hui-iconfont">&#xe6d5;</i></a>
					<ul class="dropDown-menu menu radius box-shadow">
				<li><a href="javascript:;" onClick="myselfinfo()">个人信息</a></li>
				<li>
					<a onclick="if (confirm('确定要切换账户吗？')) return true; else return false;"
					   href="/index.php/Admin/Index/login_out" >切换账户</a>
				</li>
				<li><a onclick="if (confirm('确定要退出吗？')) return true; else return false;"
					   href="/index.php/Admin/Index/login_out" >退出</a></li>
			</ul>
				</li>
				<li id="Hui-msg"> <a href="#" title="消息"><span class="badge badge-danger">1</span><i class="Hui-iconfont" style="font-size:18px">&#xe68a;</i></a> </li>
				<li id="Hui-skin" class="dropDown right dropDown_hover"> <a href="javascript:;" class="dropDown_A" title="换肤"><i class="Hui-iconfont" style="font-size:18px">&#xe62a;</i></a>
					<ul class="dropDown-menu menu radius box-shadow">
						<li><a href="javascript:;" data-val="default" title="默认（黑色）">默认（黑色）</a></li>
						<li><a href="javascript:;" data-val="blue" title="蓝色">蓝色</a></li>
						<li><a href="javascript:;" data-val="green" title="绿色">绿色</a></li>
						<li><a href="javascript:;" data-val="red" title="红色">红色</a></li>
						<li><a href="javascript:;" data-val="yellow" title="黄色">黄色</a></li>
						<li><a href="javascript:;" data-val="orange" title="橙色">橙色</a></li>
					</ul>
				</li>
			</ul>
		</nav>
	</div>
</div>
</header>

<!--menu-->
<aside class="Hui-aside">
	<div class="menu_dropdown bk_2">
		<dl id="menu-news">
			<dt><i class="Hui-iconfont">&#xe616;</i> 支队新闻管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a data-href="<?php echo U('News/news_add');?>" data-title="新闻添加" href="javascript:void(0)">新闻添加</a></li>
					<li><a data-href="<?php echo U('Category/showlist');?>" data-title="栏目管理" href="javascript:void(0)">栏目管理</a></li>
					<li><a data-href="<?php echo U('News/news_list');?>" data-title="新闻列表" href="javascript:void(0)">新闻列表</a></li>
				</ul>
			</dd>
		</dl>
		<dl id="menu-manuscript">
			<dt><i class="Hui-iconfont">&#xe636;</i> 地区稿件管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<?php if(is_array($rolemsg)): foreach($rolemsg as $key=>$vo): ?><li><a data-href="<?php echo U('Local/local_list',array('id'=>$vo['id']));?>" data-title="<?php echo ($vo["role_name"]); ?>" href="javascript:void(0)"><?php echo ($vo["role_name"]); ?></a></li><?php endforeach; endif; ?>
				</ul>
			</dd>
		</dl>

		<dl id="menu-lmsg">
			<dt><i class="Hui-iconfont">&#xe68a;</i>队长信箱<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<!--<?php echo U('Newslist/lst',array('cate_id'=>'8'));?>-->
					<li><a data-href="<?php echo U('Lmsg/lmsg_list');?>" data-title="总队长信箱" href="javascript:void(0)">总队长信箱</a></li>

				</ul>
			</dd>
		</dl>
		<dl id="menu-file">
			<dt><i class="Hui-iconfont">&#xe63e;</i>文件管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a data-href="<?php echo U('File/file_add');?>" data-title="文件添加" href="javascript:void(0)">文件添加</a></li>
					<li><a data-href="<?php echo U('File/file_list');?>" data-title="文件列表" href="javascript:void(0)">文件列表</a></li>
					<li><a data-href="<?php echo U('File/maillist_add');?>" data-title="文通讯录上传" href="javascript:void(0)">通讯录上传</a></li>
				</ul>
			</dd>
		</dl>
		<dl id="menu-admin">
			<dt><i class="Hui-iconfont">&#xe62d;</i> 管理员管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a data-href="<?php echo U('Role/lst');?>" data-title="角色管理" href="javascript:void(0)">单位管理</a></li>
					<li><a data-href="<?php echo U('Privilege/lst');?>" data-title="权限管理" href="javascript:void(0)">权限管理</a></li>
					<li><a data-href="<?php echo U('Admin/lst');?>" data-title="管理员列表" href="javascript:void(0)">管理员列表</a></li>
				</ul>
			</dd>
		</dl>
	</div>
</aside>
<div class="dislpayArrow hidden-xs"><a class="pngfix" href="javascript:void(0);" onClick="displaynavbar(this)"></a></div>
<!--endmenu-->
<section class="Hui-article-box">
	<div id="Hui-tabNav" class="Hui-tabNav hidden-xs">
		<div class="Hui-tabNav-wp">
			<ul id="min_title_list" class="acrossTab cl">
				<li class="active">
					<span title="我的桌面" data-href="welcome.html">我的桌面</span>
					<em></em>
				</li>
		   </ul>
	</div>
		<div class="Hui-tabNav-more btn-group"><a id="js-tabNav-prev" class="btn radius btn-default size-S" href="javascript:;"><i class="Hui-iconfont">&#xe6d4;</i></a><a id="js-tabNav-next" class="btn radius btn-default size-S" href="javascript:;"><i class="Hui-iconfont">&#xe6d7;</i></a></div>
</div>
	<div id="iframe_box" class="Hui-article">
		<div class="show_iframe">
			<div style="display:none" class="loading"></div>
			<iframe scrolling="yes" frameborder="0" src="/index.php/Admin/Index/welcome"></iframe>
	</div>
</div>
</section>
<div class="contextMenu" id="Huiadminmenu">
	<ul>
		<li id="closethis">关闭当前 </li>
		<li id="closeall">关闭全部 </li>
</ul>
</div>
<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="/Public/Admin/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="/Public/Admin/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/Public/Admin/static/h-ui/js/H-ui.min.js"></script>
<script type="text/javascript" src="/Public/Admin/static/h-ui.admin/js/H-ui.admin.js"></script> <!--/_footer 作为公共模版分离出去-->

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="/Public/Admin/lib/jquery.contextmenu/jquery.contextmenu.r2.js"></script>
<script type="text/javascript">
/*个人信息*/
function myselfinfo(){
	layer.open({
		type: 1,
		area: ['300px','200px'],
		fix: false, //不固定
		maxmin: true,
		shade:0.4,
		title: '查看信息',
		content: '<div style="margin: 20% 20%">当前管理员名：<span  style="color: red"><?php echo (session('username')); ?></span></div>'
	});
}

/*资讯-添加*/
function article_add(title,url){
	var index = layer.open({
		type: 2,
		title: title,
		content: url
	});
	layer.full(index);
}
/*图片-添加*/
function picture_add(title,url){
	var index = layer.open({
		type: 2,
		title: title,
		content: url
	});
	layer.full(index);
}
/*产品-添加*/
function product_add(title,url){
	var index = layer.open({
		type: 2,
		title: title,
		content: url
	});
	layer.full(index);
}
/*用户-添加*/
function member_add(title,url,w,h){
	layer_show(title,url,w,h);
}


</script>
</body>
</html>