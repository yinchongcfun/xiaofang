<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<!--<meta name="renderer" content="webkit">-->
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<link rel="Bookmark" href="/news/Public/Admin/favicon.ico" >
<link rel="Shortcut Icon" href="/news/Public/Admin/favicon.ico" />
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



<title>值班信息批量添加</title>
<meta name="keywords" content="">
<meta name="description" content="">
<style>
	.col-xs-1{width: 15%}
</style>
</head>
<link href="/news/Public/Admin/lib/webuploader/0.1.5/webuploader.css" rel="stylesheet" type="text/css" />
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 值班信息管理 <span class="c-gray en">&gt;</span> 文件添加 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<article class="page-container">
	<form class="form  form-horizontal" method="post"  enctype="multipart/form-data" action="<?php echo U('Duty/user_upload');?>" id="form-file-add">
		<div class="row cl">
			<label class="form-label col-xs-1 col-sm-2">上传人：</label>
			<div class="formControls col-xs-2 col-sm-2">
				<input type="text" class="input-text" value="<?php echo (session('username')); ?>" placeholder="" disabled id="author" name="author">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-1 col-sm-2">值班信息文件：</label>
			<div class="formControls col-xs-2 col-sm-2">
				<input type="file" class="input-text" value="" placeholder=""  id="upload_url" name="excel">
			</div>
		</div>
		<div class="row cl">
			<div class="col-xs-8 col-sm-9 col-xs-offset-1 col-sm-offset-2">
				<button class="btn btn-primary radius" type="submit"><i class="Hui-iconfont">&#xe632;</i> 提交</button>
			</div>
		</div>
	</form>
	<br>
	<div style="margin-left: 40px"><p>以下是上传Excel格式:</p>
		<img style="width: 550px; height: 300px" src="/news/Public/Admin/images/duty.png" alt="">
	</div>
</article>
<!--<webuploaderjs />-->
<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="/news/Public/Admin/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="/news/Public/Admin/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/news/Public/Admin/static/h-ui/js/H-ui.min.js"></script>
<script type="text/javascript" src="/news/Public/Admin/static/h-ui.admin/js/H-ui.admin.js"></script> <!--/_footer /作为公共模版分离出去-->

<!--请在下方写此页面业务相关的脚本-->
<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="/news/Public/Admin/lib/My97DatePicker/4.8/WdatePicker.js"></script>
<script type="text/javascript" src="/news/Public/Admin/lib/jquery.validation/1.14.0/jquery.validate.js"></script>
<script type="text/javascript" src="/news/Public/Admin/lib/jquery.validation/1.14.0/validate-methods.js"></script>
<script type="text/javascript" src="/news/Public/Admin/lib/jquery.validation/1.14.0/messages_zh.js"></script>
<script type="text/javascript" src="/news/Public/Admin/lib/webuploader/0.1.5/webuploader.min.js"></script>
<script type="text/javascript" src="/news/Public/Admin/lib/ueditor/1.4.3/ueditor.config.js"></script>
<script type="text/javascript" src="/news/Public/Admin/lib/ueditor/1.4.3/ueditor.all.min.js"> </script>
<script type="text/javascript" src="/news/Public/Admin/lib/ueditor/1.4.3/lang/zh-cn/zh-cn.js"></script>
<link href="/news/Public/Admin/lib/webuploader/0.1.5/webuploader.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
	$(function() {
		//提交文件验证
		$("#form-file-add").submit(function () {
			if($("#cate_id").val()==-1){
				alert("请选择文件分类");
				return false;
			}else if ($("#upload_url").val()==""){
				alert("请选择要上传的文件");
				return false;
			}
			else {
				return true;
			}
		})

		$('.skin-minimal input').iCheck({
			checkboxClass: 'icheckbox-blue',
			radioClass: 'iradio-blue',
			increaseArea: '20%'
		});
		var uploader = WebUploader.create({
			auto: true,
			swf: 'lib/webuploader/0.1.5/Uploader.swf',

			// 文件接收服务端。
			server: 'lib/webuploader/0.1.5/server/fileupload.php',

			// 选择文件的按钮。可选。
			// 内部根据当前运行是创建，可能是input元素，也可能是flash.
			pick: '#filePicker',

			// 不压缩image, 默认如果是jpeg，文件上传前会压缩一把再上传！
			resize: false,
			// 只允许选择图片文件。
			accept: {
				title: 'Images',
				extensions: 'gif,jpg,jpeg,bmp,png',
				mimeTypes: 'image/*'
			}
		});

	})
</script>
<!--/请在上方写此页面业务相关的脚本-->
</body>
</html>