<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE HTML>
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



<link rel="stylesheet" href="/news/Public/Admin/css/page.css">
</head>
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> <a href="<?php echo U('Index/welcome');?>">首页</a> <span class="c-gray en">&gt;</span> 值班信息管理 <span class="c-gray en">&gt;</span> 值班信息列表 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="page-container">
	<form action="/news/index.php/Admin/Duty/duty_list.html" method="get">
<div class="text-c"> 日期范围：
	
		<input type="text" name="addtimefrom" value="<?php echo I('get.addtimefrom'); ?>" onfocus="WdatePicker({lang:'zh-cn'})" id="logmin" class="input-text Wdate" style="width:120px;">
		-
		<input type="text" name="addtimeto"  value="<?php echo I('get.addtimeto'); ?>" onfocus="WdatePicker({lang:'zh-cn'})" id="logmax" class="input-text Wdate" style="width:120px;">
	
	<!--onclick="duty_search('/news/index.php/Admin/Duty/duty_list')"-->
		<button type="submit"  class="btn btn-success"><i class="Hui-iconfont">&#xe665;</i> 搜索值日表</button>
</div>
	</form>
	<div class="cl pd-5 bg-1 bk-gray mt-20">
		<span class="l"><a href="javascript:;" onclick="batchDel('/news/index.php/Admin/Duty/batchDel')" class="btn btn-danger radius"><i class="Hui-iconfont">&#xe6e2;</i> 批量删除</a>
</span> </div>
	<table class="table table-border table-bordered table-bg table-hover table-sort table-responsive" >
			<thead>
				<tr>
					<th scope="col" colspan="10">值日信息表</th>
				</tr>
				<tr class="text-c">
					<th width="25"><input type="checkbox" name="" value=""></th>
					<th>ID</th>
					<th>值班日期</th>
					<th>值班首长</th>
					<th>值班长</th>
					<th>行政值班</th>
					<th >作战值班</th>
					<th >保障组</th>
					<th>指挥中心专职值班</th>
					<!--<th >通信值班</th>-->
					<!--<th >宣传值班</th>-->
					<!--<th>车管值班</th>-->
					<th >操作</th>
				</tr>
			</thead>
			<tbody>
			<?php if(is_array($dutymsg)): foreach($dutymsg as $key=>$vo): ?><tr class="text-c va-m check-tr">
					<td><input type="checkbox" value="<?php echo ($vo["id"]); ?>" name=""></td>
				    <td><?php echo ($vo["id"]); ?></td>
				    <td><?php echo date('Y-m-d',$vo['duty_time']);?></td>
				    <td><?php echo ($vo["db_leader"]); ?></td>
				    <td><?php echo ($vo["zb_leader"]); ?></td>
				    <td><?php echo ($vo["zb_duty"]); ?></td>
				    <td><?php echo ($vo["zh_duty"]); ?></td>
				    <td><?php echo ($vo["zh_center"]); ?></td>
				    <td><?php echo ($vo["jg_duty"]); ?></td>
				    <!--<td><?php echo ($vo["tx_duty"]); ?></td>-->
				    <!--<td><?php echo ($vo["xc_duty"]); ?></td>-->
				    <!--<td><?php echo ($vo["car_duty"]); ?></td>-->
					<td class="f-14 td-manage">
						<a style="text-decoration:none" class="ml-5"
						   href="<?php echo U('Duty/duty_edit',array('id'=>$vo['id']));?>" title="编辑">
							<i class="Hui-iconfont">&#xe6df;</i></a>
					  <a style="text-decoration:none" class="ml-5"
						onClick="duty_del(this,'/news/index.php/Admin/Duty/duty_del','<?php echo ($vo["id"]); ?>')"title="删除">
						<i class="Hui-iconfont">&#xe6e2;</i>
					   </a>
					</td>
				</tr><?php endforeach; endif; ?>
			</tbody>
		<!--<tfoot>-->
		<!--&lt;!&ndash;分页显示？&ndash;&gt;-->
		<!--<tr><td textalign="center" cl nowrap="true" colspan="13" height="20"><div class="pages"><?php echo $page; ?></div></td></tr>-->
		<!--</tfoot>-->
		</table>
</div>
</div>
<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="/news/Public/Admin/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="/news/Public/Admin/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/news/Public/Admin/static/h-ui/js/H-ui.min.js"></script>
<script type="text/javascript" src="/news/Public/Admin/static/h-ui.admin/js/H-ui.admin.js"></script> <!--/_footer 作为公共模版分离出去-->

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="/news/Public/Admin/lib/My97DatePicker/4.8/WdatePicker.js"></script>
<script type="text/javascript" src="/news/Public/Admin/lib/datatables/1.10.0/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="/news/Public/Admin/lib/laypage/1.2/laypage.js"></script>
<script type="text/javascript">
$('.table-sort').dataTable({
	"aaSorting": [[ 1, "desc" ]],//默认第几个排序
	"bStateSave": true,//状态保存
	"pading":false,
	"aLengthMenu": [[5, 10, 20, -1], [5, 10, 20, "All"]],//指定每页显示条
	"aoColumnDefs": [
	  //{"bVisible": false, "aTargets": [ 3 ]} //控制列的隐藏显示
	 // {"orderable":false,"aTargets":[0,8]}// 不参与排序的列
	]
});

//$('#logmin').datepicker();
//$('#logmax').datepicker();

//	function duty_search(url) {
//			var logmin=$('#logmin').val();
//		    var logmax=$('#logmax').val();
//			$.ajax({
//				type:'get',
//				url: url,
//				data:{logmin:logmin,logmax:logmax},
//				dataType: 'json',
//				success: function(data){
//					alert(data);
//					$("#logmin").val.toLocaleString(data.logmin).substring(0,10);
//					$("#logmax").val.toLocaleString(data.logmax).substring(0,10);
//				},
//				error:function(data) {
//					console.log(data.msg);
//				},
//			});
//		}
/*新闻-删除*/
function duty_del(obj,url,id){
	layer.confirm('确认要删除吗？',function(index){
		$.ajax({
			type: 'POST',
			url: url,
			data:{id:id},
			dataType: 'json',
			success: function(data){
				$(obj).parents("tr").remove();
				layer.msg('已删除!',{icon:1,time:1000});
			},
			error:function(data) {
				console.log(data.msg);
			},
		});
	});
}
/*新闻-批量删除*/
function batchDel(url){
	var arr=  new Array();
	var i=0;
	$(".check-tr input[type='checkbox']").each(function () {
		if ($(this).is(':checked')){
			arr[i]=$(this).val();
			i++;
		}
	});
	var la='';
	for (var a=0;a<arr.length;a++){
		la+=arr[a]+',';
	}
	if(la.length>0){
		la=la.substring(0,la.length-1);
		layer.confirm('确认要删除吗？',function(){
			$.ajax({
				type: 'POST',
				url: url,
//            		dataType: 'json',
				data:{id:la},
				success: function(data){
					$(".check-tr input[type='checkbox']").each(function () {
						if ($(this).is(':checked')){
							$(this).parents("tr").remove();
						}
					});
//						alert(data);
					layer.msg('已删除!',{icon:1,time:1000});
				},
				error:function(data) {
					layer.msg('删除失败!',{icon:0,time:1000});
					console.log(data.msg);
				}
			});
		});
	}
}

</script> 
</body>
</html>