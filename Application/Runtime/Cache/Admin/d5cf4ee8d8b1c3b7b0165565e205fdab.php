<?php if (!defined('THINK_PATH')) exit();?><!--meta-->
<!DOCTYPE HTML>
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



<!--endmeta-->

<title>点餐宝头条信息</title>
<body>
<article class="page-container">
	<form class="form form-horizontal" id="form-article-add" method="post" action="/index.php/Admin/Privilege/edit/id/22.html">
		<!--<input type="hidden" name="id" value="<?php echo ($v["id"]); ?>" />-->
		<input type="hidden" name="id" value="<?php echo $data['id']; ?>" />
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>顶级权限：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<select name="parent_id">
					<option value="0">顶级权限</option>
					<?php foreach ($parentData as $k => $v): ?>
					<?php if($v['id'] == $data['id'] || in_array($v['id'], $children)) continue ; ?>
					<option <?php if($v['id'] == $data['parent_id']): ?>
					selected="selected"
					<?php endif; ?>
					value="<?php echo $v['id']; ?>">
					<?php echo str_repeat('-', 8*$v['level']).$v['pri_name']; ?>
					</option>
					<?php endforeach; ?>
				</select>
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">权限名称：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input  type="text" name="pri_name" value="<?php echo $data['pri_name']; ?>" />
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">模块名称：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input  type="text" name="module_name" value="<?php echo $data['module_name']; ?>" />
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">控制器名称：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input  type="text" name="controller_name" value="<?php echo $data['controller_name']; ?>" />
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">方法名称：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input  type="text" name="action_name" value="<?php echo $data['action_name']; ?>" />
			</div>
		</div>
		<div class="row cl">
			<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-2">
				<input type="submit" class="button" value=" 确定 " />
				<input type="reset" class="button" value=" 重置 " />
			</div>
		</div>
	</form>

</article>

<!--_footer 作为公共模版分离出去-->
<!--footer-->
<script type="text/javascript" src="/Public/Admin/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="/Public/Admin/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/Public/Admin/static/h-ui/js/H-ui.min.js"></script>
<script type="text/javascript" src="/Public/Admin/static/h-ui.admin/js/H-ui.admin.js"></script>
<!--footer-->

<!--请在下方写此页面业务相关的脚本-->
<script>
	// ajax 提交表单
	$(document).ready(function(){
		$("#submit").click(function(){    // 提交按钮触发事件
			var tourl = $("#form-article-add").attr("action");    // 获取 表单的 提交地址
			// 序列化 表单数据 后提交 ，太简洁了
			$.post(tourl,$("form").serialize(),function(data){
				alert(data);
				//直接返回首页
//				layer.msg(data['info'],5,data['status'],function(){
//				 location.href = "<?php echo U('Article/artlist');?>"; //自动关闭后返回首页
				 });
				//确定返回首页还是再次添加
				$.layer({
					shade: [0.5, '#000'], //弹出层背景颜色
					dialog: {
						msg: data['info'], //读取后台返回信息
						btns: 2,           //设置两个按钮
						type: data['status'], //通过返回的代码设置图标 1或0
						btn: ['返回首页','再次更改'],
						yes: function(){
							location.href = "<?php echo U('Article/artlist');?>"; //关闭后返回首页
						}, no: function(){
							location.reload(); //关闭后刷新页面
						}
					}
				});
			});
		});

</script>


<!--/请在上方写此页面业务相关的脚本-->
</body>
</html>