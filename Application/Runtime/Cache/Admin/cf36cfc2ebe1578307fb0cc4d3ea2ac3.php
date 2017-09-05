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
	<form class="form form-horizontal" id="form-article-add" method="post" action="/index.php/Admin/Role/edit/id/1/p/1.html">
		<!--<input type="hidden" name="id" value="<?php echo ($v["id"]); ?>" />-->
        <input type="hidden" name="id" value="<?php echo $data['id']; ?>" />
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>角色名称：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input  type="text" name="role_name" value="<?php echo $data['role_name']; ?>" />
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">权限名称：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<?php foreach ($priData as $k => $v): if(strpos(','.$pri_id.',', ','.$v['id'].',') !== FALSE) $check = 'checked="checked"'; else $check = ''; ?>
				<?php echo str_repeat('-', $v['level'] * 8); ?>
				<input <?php echo ($check); ?> level="<?php echo ($v["level"]); ?>" type="checkbox" name="pri_id[]" value="<?php echo ($v["id"]); ?>" /><?php echo ($v["pri_name"]); ?> <br />
				<?php endforeach; ?>
			</div>
		</div>
		<div class="row cl">
			<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-2">
				<input type="submit" class="btn btn-primary radius" value=" 确定 " />
				<input type="reset" class="btn btn-primary radius" value=" 重置 " />
				<!--<button id="submit" class="btn btn-primary radius" type="submit"><i class="Hui-iconfont">&#xe632;</i>修改后提交</button>
				&lt;!&ndash;<button onClick="article_save();" class="btn btn-secondary radius" type="button"><i class="Hui-iconfont">&#xe632;</i> 保存草稿</button>&ndash;&gt;
				<button onClick="removeIframe();" class="btn btn-default radius" type="button">&nbsp;&nbsp;取消&nbsp;&nbsp;</button>-->
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
<script type="text/javascript" src="/Public/Admin/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="/Public/Admin/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/Public/Admin/static/h-ui/js/H-ui.min.js"></script>
<script type="text/javascript" src="/Public/Admin/static/h-ui.admin/js/H-ui.admin.js"></script>
<!--请在下方写此页面业务相关的脚本-->
<script>
    // 为所有的选择框绑定点击事件
    $(".formControls input:checkbox").click(function(){
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
                if($(v).attr("level") > cur_level)
                    $(v).prop("checked", "checked");
                else
                    return false;   // 遇到一个平级的权限就停止循环后面的不用再判断了
            });
        }
        else
        {
            // 先取出这个复选框所有前面的复选框
            var allprev = $(this).nextAll(":checkbox");
            // 循环每一个前面的复选框判断是不是上级的
            $(allprev).each(function(k,v){
                // 判断是不是上级的权限
                if($(v).attr("level") > cur_level)
                    $(v).removeProp("checked");
                else
                    return false;   // 遇到一个平级的权限就停止循环后面的不用再判断了
            });
        }
    });
</script>
<!--/请在上方写此页面业务相关的脚本-->
</body>
</html>