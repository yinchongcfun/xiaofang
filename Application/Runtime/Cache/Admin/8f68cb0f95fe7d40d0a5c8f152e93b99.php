<?php if (!defined('THINK_PATH')) exit();?><!--meta-->
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<link rel="Bookmark" href="/news/Public/Admin//favicon.ico" >
<link rel="Shortcut Icon" href="/news/Public/Admin//favicon.ico" />
<!--[if lt IE 9]>
<script type="text/javascript" src="/news/Public/Admin/lib/html5shiv.js"></script>
<script type="text/javascript" src="/news/Public/Admin/lib/respond.min.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="/news/Public/Admin/static/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="/news/Public/Admin/static/h-ui.admin/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="/news/Public/Admin/lib/Hui-iconfont/1.0.8/iconfont.css" />
<link rel="stylesheet" type="text/css" href="/news/Public/Admin/static/h-ui.admin/skin/default/skin.css" id="skin" />
<link rel="stylesheet" type="text/css" href="/news/Public/Admin/static/h-ui.admin/css/style.css" />
<!--[if IE 6]>
<script type="text/javascript" src="/news/Public/Admin/lib/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->



<!--endmeta-->
<title>点餐宝头条信息</title>
<body>
<article class="page-container">
	<form class="form form-horizontal" id="form-article-add" method="post" action="/news/index.php/Admin/Privilege/add.html">
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>顶级权限：</label>
			<div class="formControls col-xs-8 col-sm-3"><span class="select-box">
				<select name="parent_id" class="select">
					<option value="0">顶级权限</option>
					<?php foreach ($parentData as $k => $v): ?>
					<option value="<?php echo $v['id']; ?>"><?php echo str_repeat('-', 8*$v['level']).$v['pri_name']; ?></option>
					<?php endforeach; ?>
				</select>
				</span>
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>权限名称：</label>
			<div class="formControls col-xs-8 col-sm-4">
				<input  type="text" class="input-text" name="pri_name" value="" />
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>模块名称：</label>
			<div class="formControls col-xs-8 col-sm-4">
				<input  type="text"class="input-text" name="module_name" value="" />
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>控制器名称：</label>
			<div class="formControls col-xs-8 col-sm-4">
				<input  type="text" class="input-text" name="controller_name" value="" />
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>方法名称：</label>
			<div class="formControls col-xs-8 col-sm-4">
				<input  type="text"class="input-text" name="action_name" value="" />
			</div>
		</div>
		<div class="row cl">
			<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-2">
				<input type="submit" class="btn btn-primary radius" value=" 确定 " />
				<input type="reset" class="btn btn-default radius"  value=" 重置 " />
			</div>
		</div>
	</form>
</article>

<!--_footer 作为公共模版分离出去-->
<!--footer-->
<script type="text/javascript" src="/news/Public/Admin/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="/news/Public/Admin/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/news/Public/Admin/static/h-ui/js/H-ui.min.js"></script>
<script type="text/javascript" src="/news/Public/Admin/static/h-ui.admin/js/H-ui.admin.js"></script>
<!--footer-->
<script type="text/javascript">

</script>
<!--/请在上方写此页面业务相关的脚本-->
</body>
</html>