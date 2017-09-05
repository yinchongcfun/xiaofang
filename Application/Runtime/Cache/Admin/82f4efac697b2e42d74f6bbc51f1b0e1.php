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



<body>
<article class="page-container">
	<form class="form form-horizontal" id="form-admin-add" method="POST" action="/news/index.php/Admin/Admin/add.html">
	<div class="row cl">
		<label class="form-label col-xs-2 col-sm-3"><span class="c-red">*</span>所在单位：</label>
		<div class="formControls col-xs-8 col-sm-9">
			<tr>
				<td>
					<?php foreach ($roleData as $k => $v): ?>
					<input type="checkbox" name="role_id[]" value="<?php echo ($v["id"]); ?>"  in="role_id"/> <?php echo ($v["role_name"]); ?>
					<?php endforeach; ?>
				</td>
			</tr>
		</div>
	</div>
		<div class="row cl">
			<label class="form-label col-xs-2 col-sm-3"><span class="c-red">*</span>管理员类别：</label>
			<div class="formControls col-xs-4 col-sm-4"> <span class="select-box">
				<select name="local_id"  class="select" >
                    <option value="0">默认本地管理员</option>
					 <?php if(is_array($localData)): foreach($localData as $key=>$vo): ?><option value="<?php echo ($vo["local_id"]); ?>">├<?php echo ($vo["local_name"]); ?></option><?php endforeach; endif; ?>
				</select>
				</span>
			</div>
		</div>



	<div class="row cl">
		<label class="form-label col-xs-2 col-sm-3"><span class="c-red">*</span>账号：</label>
		<div class="formControls col-xs-8 col-sm-4">
			<input  type="text"  class="input-text"name="username" value="" id="adminName" />
		</div>
	</div>
	<div class="row cl">
		<label class="form-label col-xs-2 col-sm-3"><span class="c-red">*</span>密码：</label>
		<div class="formControls col-xs-8 col-sm-4">
			<input type="password" class="input-text" size="25" name="password" id="password" />
		</div>
	</div>
	<div class="row cl">
		<label class="form-label col-xs-2 col-sm-3"><span class="c-red">*</span>确认密码：</label>
		<div class="formControls col-xs-8 col-sm-4 skin-minimal">
			<input type="password" class="input-text" size="25" name="cpassword" id="password2"  />
		</div>
	</div>

	<div class="row cl">
		<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
			<!--<input class="btn btn-primary radius" type="submit" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">-->
			<input type="submit" class="btn btn-primary radius" value=" 确定 " />
			<input type="reset" class="btn btn-primary radius" value=" 重置 " />
		</div>
	</div>
	</form>
</article>

<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="/news/Public/Admin/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="/news/Public/Admin/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/news/Public/Admin/static/h-ui/js/H-ui.min.js"></script>
<script type="text/javascript" src="/news/Public/Admin/static/h-ui.admin/js/H-ui.admin.js"></script>
 <!--/_footer 作为公共模版分离出去-->

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="__PUBLIC_ADMIN__/lib/jquery.validation/1.14.0/jquery.validate.js"></script>
<script type="text/javascript" src="__PUBLIC_ADMIN__/lib/jquery.validation/1.14.0/validate-methods.js"></script>
<script type="text/javascript" src="__PUBLIC_ADMIN__/lib/jquery.validation/1.14.0/messages_zh.js"></script>
<script type="text/javascript">
$(function(){
	$('.skin-minimal input').iCheck({
		checkboxClass: 'icheckbox-blue',
		radioClass: 'iradio-blue',
		increaseArea: '20%'
	});
	/*$("#form-admin-add").validate({
		rules:{
			adminName:{
				required:true,
			},
			password:{
				required:true,
			},
			password2:{
				required:true,
				equalTo: "#password"
			},
			role_id:{
				required:true,
			},
			phone:{
				required:true,
				isPhone:true,
			},
			email:{
				required:true,
				email:true,
			},

		},
		onkeyup:false,
		focusCleanup:true,
		success:"valid",
		submitHandler:function(form){
			$(form).ajaxSubmit({
				type: 'post',
				url: "xxxxxxx" ,
				success: function(data){
					layer.msg('添加成功!',{icon:1,time:1000});
				},
                error: function(XmlHttpRequest, textStatus, errorThrown){
					layer.msg('error!',{icon:1,time:1000});
				}
			});
			var index = parent.layer.getFrameIndex(window.name);
			parent.$('.btn-refresh').click();
			parent.layer.close(index);
		}
	});*/
});
</script> 
<!--/请在上方写此页面业务相关的脚本-->
</body>
</html>