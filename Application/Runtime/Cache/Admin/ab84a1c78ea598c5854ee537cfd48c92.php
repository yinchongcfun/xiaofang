<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE HTML>
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



<body>
<article class="page-container">
	<form action="" method="post" class="form form-horizontal" id="form-admin-role-add">
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>单位名称：</label>
			<div class="formControls col-xs-8 col-sm-4">
				<input  type="text"  class="input-text" name="role_name" value="" />
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3">网站权限：</label>
			<div class="formControls col-xs-8 col-sm-9">
						<dl class="cl permission-list2">
							<dd>
								<?php foreach ($priData as $k => $v): ?>
								<?php echo str_repeat('-', $v['level'] * 8); ?>
								<input level="<?php echo ($v["level"]); ?>" type="checkbox" name="pri_id[]" value="<?php echo ($v["id"]); ?>" /><?php echo ($v["pri_name"]); ?> <br />
								<?php endforeach; ?>
							</dd>
						</dl>
			</div>
		</div>
		<div class="row cl">
			<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
				<button type="submit"  class="btn btn-success radius" ><i class="icon-ok"></i> 确定</button>
				<button type="reset" class="btn btn-success radius"><i class="icon-ok"></i> 重置</button>
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
<script>
    $(function () {
        // 让提交只能点一次
//        $(":submit").click(function(){
//            var sec = 3;
//            $(this).attr('disabled', 'disabled');
//            $(this).val(sec + "秒之后提交");
//            var _this = $(this);
//            setInterval(function(){
//                if(--sec == 0)
//                    $("form[name=main_form]").submit();
//                else
//                    _this.val(sec + "秒之后提交");
//                _this.val();
//            }, 1000);
//        });

        // 为所有的选择框绑定点击事件
        $(":checkbox").click(function(){
            // 先取出当前权限的level值是多少
            var cur_level = $(this).attr("level");
            // 判断是选中还是取消
            if($(this).prop("checked"))
            {
                var tmplevel = cur_level; // 给一个临时的变量后面要进行减操作
                // 先取出这个复选框所有前面的复选框
                var allprev = $(this).prevAll(":checkbox");
                // 循环每一个前面的复选框判断是不是上级的
                $(allprev).each(function(k,v){
                    // 判断是不是上级的权限
                    if($(v).attr("level") < tmplevel)
                    {

                        tmplevel--; // 再向上提一级
                        $(v).prop("checked", "checked");
                    }
                });
                // 所有子权限也选中
                // 先取出这个复选框所有前面的复选框
                var allprev = $(this).nextAll(":checkbox");
                // 循环每一个前面的复选框判断是不是上级的
                $(allprev).each(function(k,v){
                    // 判断是不是上级的权限
                    if($(v).attr("level") > cur_level){
                        $(v).prop("checked", "checked");
                    }
                    else
                    {return false;}   // 遇到一个平级的权限就停止循环后面的不用再判断了
                });
            }
            else
            {
                // 先取出这个复选框所有前面的复选框
                var allprev = $(this).nextAll(":checkbox");
                // 循环每一个前面的复选框判断是不是上级的
                $(allprev).each(function(m,n){

                    // 判断是不是上级的权限
                    if($(n).attr("level") > cur_level)
                        $(n).removeProp("checked");
                    else
                        return false;   // 遇到一个平级的权限就停止循环后面的不用再判断了
                });
            }
        });
    })

</script>
<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="__PUBLIC_ADMIN__lib/jquery.validation/1.14.0/jquery.validate.js"></script>
<script type="text/javascript" src="__PUBLIC_ADMIN__lib/jquery.validation/1.14.0/validate-methods.js"></script>
<script type="text/javascript" src="__PUBLIC_ADMIN__lib/jquery.validation/1.14.0/messages_zh.js"></script>

<!--/请在上方写此页面业务相关的脚本-->
</body>
</html>