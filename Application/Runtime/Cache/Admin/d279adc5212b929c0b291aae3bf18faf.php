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



<title>值班信息添加</title>
<style>
	.col-xs-1{width: 15%}
</style>
</head>
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> <a href="<?php echo U('Index/welcome');?>">首页</a> <span class="c-gray en">&gt;</span> 值班信息管理 <span class="c-gray en">&gt;</span> 值班信息添加 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<article class="page-container">
	<form class="form  form-horizontal" method="post"  enctype="multipart/form-data" action="/news/index.php/Admin/Duty/duty_add.html" id="form-article-add">
		<div class="row cl">
			<label class="form-label col-xs-1 col-sm-2"><span class="c-red">*</span>值班日期：</label>
			<div class="formControls col-xs-2 col-sm-2">
				
					<input type="text"  onfocus="WdatePicker({lang:'zh-cn'})"  class="input-text Wdate" id="duty_time" name="duty_time" required style="width:190px;">
				
			</div>
			<a class="btn btn-primary radius"  onclick="duty_find('/news/index.php/Admin/Duty/duty_find')">搜索值日表</a>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-1 col-sm-2"><span class="c-red">*</span>值班首长：</label>
			<div class="formControls col-xs-2 col-sm-2">
				<input type="text" class="input-text" id="db_leader" value=""  placeholder="值班首长" maxlength="8" name="db_leader">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-1 col-sm-2"><span class="c-red">*</span>值班长：</label>
			<div class="formControls col-xs-2 col-sm-2">
				<input type="text" class="input-text" value="" placeholder="值班长" id="zb_leader"maxlength="8" name="zb_leader">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-1 col-sm-2"><span class="c-red">*</span>行政值班：</label>
			<div class="formControls col-xs-2 col-sm-2">
				<input type="text" class="input-text" value="" placeholder="行政值班" id="zb_duty"maxlength="8"name="zb_duty">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-1 col-sm-2"><span class="c-red">*</span>作战值班：</label>
			<div class="formControls col-xs-2 col-sm-2">
				<input type="text" class="input-text" value="" placeholder="作战值班" id="zh_duty"maxlength="8"name="zh_duty">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-1 col-sm-2"><span class="c-red">*</span>保障组：</label>
			<div class="formControls col-xs-2 col-sm-2">
				<input type="text" class="input-text" value="" placeholder="保障组" id="zh_center"maxlength="8" name="zh_center">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-1 col-sm-2"><span class="c-red">*</span>指挥中心专职值班：</label>
			<div class="formControls col-xs-2 col-sm-2">
				<input type="text" class="input-text" value="" placeholder="指挥中心专职值班" id="jg_duty" maxlength="8" name="jg_duty">
			</div>
		</div>
		<!--<div class="row cl">-->
			<!--<label class="form-label col-xs-1 col-sm-2"><span class="c-red">*</span>通信值班：</label>-->
			<!--<div class="formControls col-xs-8 col-sm-2">-->
				<!--<input type="text" class="input-text" value="" placeholder="通信值班" id="tx_duty" maxlength="8" name="tx_duty">-->
			<!--</div>-->
		<!--</div>-->
		<!--<div class="row cl">-->
			<!--<label class="form-label col-xs-1 col-sm-2"><span class="c-red">*</span>宣传值班：</label>-->
			<!--<div class="formControls col-xs-8 col-sm-2">-->
				<!--<input type="text" class="input-text" value="" placeholder="宣传值班" id="xc_duty" maxlength="8" name="xc_duty">-->
			<!--</div>-->
		<!--</div>-->
		<!--<div class="row cl">-->
			<!--<label class="form-label col-xs-1 col-sm-2"><span class="c-red">*</span>车管值班：</label>-->
			<!--<div class="formControls col-xs-8 col-sm-2">-->
				<!--<input type="text" class="input-text" value="" placeholder="车管值班" id="car_duty" maxlength="8" name="car_duty">-->
			<!--</div>-->
		<!--</div>-->
		<div class="row cl">
			<div class="col-xs-9 col-sm-9 col-xs-offset-1 col-sm-offset-2">
				<button  class="btn btn-default radius"  type="submit">添加</button>
				<button  class="btn btn-default radius"  type="reset">&nbsp;&nbsp;重置&nbsp;&nbsp;</button>
				<a  class="btn btn-default radius" href="/news/index.php/Admin/Duty/duty_list">&nbsp返回&nbsp;&nbsp;</a>
			</div>
		</div>
	</form>
</article>
<!--<webuploaderjs />-->
<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="/news/Public/Admin/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="/news/Public/Admin/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/news/Public/Admin/static/h-ui/js/H-ui.min.js"></script>
<script type="text/javascript" src="/news/Public/Admin/static/h-ui.admin/js/H-ui.admin.js"></script> <!--/_footer /作为公共模版分离出去-->
<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="/news/Public/Admin/lib/My97DatePicker/4.8/WdatePicker.js"></script>
<script type="text/javascript" src="/news/Public/Admin/lib/laypage/1.2/laypage.js"></script>
<!--/请在上方写此页面业务相关的脚本-->
<!--<script type="text/javascript" >
	//值日查询
	function duty_find(){
		var url="/news/index.php/Admin/Duty/duty_find2";

		var time=$('#duty_time').val();
		//window.location.href="/news/index.php/Admin/Duty/duty_find?duty_time="+time;
        if(time.length<5 ||time.length>12)
		{
			alert("请正确选择日期");
			return ;
		}
		$.ajax({
			type:'get',
			url: url,
			data:{"duty_time":time},
			dataType: 'json',
			success: function(mydata){
				if(mydata.code=="0")
				{
					alert("请选择查询时间");
				}else if(mydata.code=="-1")
				{
					alert("该日期没有值班信息");
				}
				else if(mydata.code=="200")
				{
					$realdata=mydata.data;
					//alert($realdata.mytime);
					//$("#duty_time").val($realdata.mytime);
					 $("#db_leader").val($realdata.db_leader);
				}

				//layer.msg('已成功!',{icon:2,time:1000});
			},
			error:function(data) {
				alert("dddddd");
					console.log(data.msg);
			}
		});
	}
</script>-->
<script  type="text/javascript">
	function duty_find(url) {
		var time=$('#duty_time').val();
	$.ajax({
 		type:'get',
 		url: url,
 		data:{duty_time:time},
 		dataType: 'json',
 		success:function(data){
				$("#duty_time").val.toLocaleString(data.duty_time).substring(0,10);
				$("#db_leader").val(data.db_leader);
				$("#zb_leader").val(data.zb_leader);
				$("#zb_duty").val(data.zb_duty);
				$("#zh_duty").val(data.zh_duty);
				$("#zh_center").val(data.zh_center);
				$("#jg_duty").val(data.jg_duty);
				$("#tx_duty").val(data.tx_duty);
				$("#xc_duty").val(data.xc_duty);
				$("#car_duty").val(data.car_duty);
		},
			error:function(data) {
				console.log(data.msg);
			},
		});
	}


//	function duty_add(url) {
//		var duty_time=$("#duty_time").val.();
//		var db_leader=$("#db_leader").val();
//		var zb_leader=$("#zb_leader").val();
//		var zb_duty=$("#zb_duty").val();
//		var zh_duty=$("#zh_duty").val();
//		var zh_center=$("#zh_center").val();
//		var jg_duty=$("#jg_duty").val();
//		var tx_duty =$("#tx_duty").val();
//		var xc_duty= $("#xc_duty").val();
//		var car_duty=$("#car_duty").val();
//
//		$.ajax({
//			type:'post',
//			url: url,
//			data:{
//				duty_time:duty_time,
//				db_leader:db_leader,
//				zb_leader:zb_leader,
//				zb_duty:zb_duty,
//				zh_duty:zh_duty,
//				zh_center:zh_center,
//				jg_duty:jg_duty,
//				tx_duty:tx_duty,
//				xc_duty:xc_duty,
//				car_duty:car_duty
//			},
//			dataType: 'json',
//			success:function(data){
//				layer.msg('添加成功!', {icon: 1, time: 1000});
//			},
//			error:function(data) {
//				console.log(data.msg);
//			},
//		});
//	}

</script>
</body>
</html>