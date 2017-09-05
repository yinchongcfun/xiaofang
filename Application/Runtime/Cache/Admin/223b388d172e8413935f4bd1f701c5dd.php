<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
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



<title>新闻列表</title>

<link rel="stylesheet" href="/news/Public/Admin/css/news_view.css">

</head>
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 列表页 <span class="c-gray en">&gt;</span> 审核新闻 </nav>
<div class="page-container">
<!--导航开始-->
<div style="float: right;margin: 0 10px"> <p><button><a href="javascript:" onclick="self.location=document.referrer;"  style="color: #3389DE; font-size: 20px;font-weight: bold;cursor: pointer">返回上一页</a></button></p></div>
        <nav style="height: 40px">
            <?php if($lmsg[status]== 0 ): ?><div style="float: left;margin: 0 10px" id="success"> <p><button><a  onClick="submit_success(this,'/news/index.php/Admin/Lmsg/submit_success/id/<?php echo ($lmsg["id"]); ?>','<?php echo ($lmsg["id"]); ?>')" href="javascript:;" style="color: #3389DE; font-size: 20px ;font-weight: bold;margin: 20px 0px;cursor: pointer">审核通过</a></button></p></div>
                <div style="float: left;" id="fail"> <p><button><a onClick="submit_fail(this,'/news/index.php/Admin/Lmsg/submit_fail/id/<?php echo ($lmsg["id"]); ?>','<?php echo ($lmsg["id"]); ?>')" href="javascript:;" style="color:red; font-size: 20px ;font-weight: bold;margin: 20px 0px;cursor: pointer">审核不通过</a></button></p></div>
                <?php else: ?>
                <?php if($lmsg[status] == 1 ): ?><div style="float: right"> <p><a onClick="submit_success2(this,'/news/index.php/Admin/Lmsg/submit_success/id/<?php echo ($lmsg["id"]); ?>','<?php echo ($lmsg["id"]); ?>')" href="javascript:;" style="color: #3389DE; font-size: 20px ;font-weight: bold;margin: 20px 0px;cursor: pointer">审核已经通过</a></p></div>
                    <?php else: ?>
                    <div style="float: right"> <p><a style="color:red;; font-size: 20px ;font-weight: bold;margin: 20px 0px;cursor: pointer">审核未通过</a></p></div><?php endif; endif; ?>

            <?php if($lmsg["verifier"] == null): ?><div  style=" margin:0 auto;color: red; font-size: 20px ;font-weight: bold;">当前审核人:<span name="verifier" id="verifier"><?php echo (session('username')); ?></span></div>
                <?php else: ?>
                <div name=" " style=" margin:0 auto;color: red; font-size: 20px ;font-weight: bold;">审核人:<span><?php echo ($lmsg["verifier"]); ?></span></div><?php endif; ?>
        </nav>

<div class="newsdetail">
    <div class="mt-20">
        <table class="table table-border table-bordered table-hover table-bg table-sort">
             <tr class="text-c">
                <td>留言标题</td>
                <td><?php echo ($lmsg["title"]); ?></td>
             </tr>
            <tr class="text-c">
                <td>留言内容</td>
                <td><?php echo ($lmsg["content"]); ?></td>
            </tr>
            <tr class="text-c">
                <td>回复内容</td>
                <td><?php echo ($lmsg["replay_msg"]); ?></td>
            </tr>
            <tr class="text-c">
                <td>相关信息：</td>
                <td>留言者：<?php echo ($lmsg["leaver"]); ?>  来自：  留言时间：<?php echo ($lmsg["leave_time"]); ?>  回复人：[<?php echo ($lmsg["username"]); ?>] 审批领导：[<?php echo ($lmsg["username"]); ?>]</td>
            </tr>
        </table>
    </div>
</div>

<!--_footer 作为公共模版分离出去-->
<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="/news/Public/Admin/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="/news/Public/Admin/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/news/Public/Admin/static/h-ui/js/H-ui.min.js"></script>
<script type="text/javascript" src="/news/Public/Admin/static/h-ui.admin/js/H-ui.admin.js"></script>
<script>
    function submit_success(obj,url,id) {
//        alert (url);
        layer.confirm('确认要提交审核通过吗？', function (index) {
            $.ajax({
                type: 'GET',
                url: url,
                dataType: 'json',
                success: function (data) {
                    if (data) {
                        $(obj).parents("tr").remove();
                        layer.msg('审核成功!', {icon: 1, time: 1000});
                        $(obj).html('审核通过');
                        $('#fail').hide();
                        $(obj).removeAttr('onclick')
                    } else {
                        layer.msg('审核失败', {icon: 5, time: 1000});
                    }
                },
                error: function (data) {
                    layer.msg('审核失败~', {icon: 5, time: 1000});
                    console.log(data.msg);
                }
            });
        })
    }

    function submit_success2(obj,url,id) {
    layer.msg('你已经审核成功，请返回上一页', {icon: 1, time: 1000});

    }

    function submit_fail(obj,url,id) {
        layer.confirm('确认要审核不通过吗？', function (index) {
            $.ajax({
                type: 'GET',
                url: url,
                dataType: 'json',
                success: function (data) {
                    if (data) {
                        $(obj).parents("tr").remove();
                        layer.msg('审核未通过!', {icon: 2, time: 1000});
                        $(obj).html('审核未通过');
                        $('#success').hide();
                        $(obj).removeAttr('onclick')
                    } else {
                        layer.msg('审核操作失败！', {icon: 5, time: 1000});
                    }
                },
                error: function (data) {
                    layer.msg('审核操作失败!', {icon: 5, time: 1000});
                    console.log(data.msg);
                }
            });
        })
    }
    var ajax;
    if(window.XMLHttpRequest){ ajax = new XMLHttpRequest();}else{ ajax = new ActiveXObject('Microsoft.XMLHTTP');}
    ajax.open('GET','/news/index.php/Admin/Lmsg/set_hits/id/<?php echo ($_GET['id']); ?>',true);
    ajax.send();
</script>

</body>
</html>