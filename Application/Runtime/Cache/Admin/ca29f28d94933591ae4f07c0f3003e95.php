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



<title>文件列表</title>
</head>
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 文件管理 <span class="c-gray en">&gt;</span> 文件列表 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="page-container">
	<div class="cl pd-5 bg-1 bk-gray mt-20">
		<span class="l"><a href="javascript:;" onclick="batchDel('/news/index.php/Admin/File/batchDel')" class="btn btn-danger radius"><i class="Hui-iconfont">&#xe6e2;</i> 批量删除</a>
		<a class="btn btn-primary radius" data-title="上传文件"  href="<?php echo U('File/file_add');?>"><i class="Hui-iconfont">&#xe600;</i> 上传文件</a></span> <span class="r">共有数据：<strong><?php echo ($countList); ?></strong> 条</span> </div>
	<div class="mt-20">
		<table class="table table-border table-bordered table-bg table-hover table-sort table-responsive">
			<thead>
				<tr class="text-c">
					<th width="25"><input type="checkbox" name="" value=""></th>
					<th>ID</th>
					<th>标题</th>
					<th>文件名</th>
					<th>上传部门</th>
					<th >添加时间</th>
					<th >修改时间</th>
					<th >添加者</th>
					<th >下载量</th>
					<th >操作</th>
				</tr>
			</thead>
			<tbody>
			<?php if(is_array($fielsList)): foreach($fielsList as $key=>$vo): ?><tr class="text-c va-m check-tr">
					<td><input type="checkbox" value="<?php echo ($vo["id"]); ?>" name=""></td>
					<td><?php echo ($vo["id"]); ?></td>
				    <td><?php echo ($vo["title"]); ?></td>
				    <td><?php echo ($vo["file_name"]); ?></td>
				    <td><?php echo ($vo["role_name"]); ?></td>
					<td><?php echo date('Y-m-d H:i:s',$vo['add_time']);?></td>
					<td>
						<?php if($vo['update_time'] == 0): ?>未修改<?php else: ?> <?php echo date('Y-m-d H:i:s',$vo['update_time']); endif; ?>
					</td>
					<td><?php echo ($vo["author"]); ?></td>
					<td><?php echo ($vo["downloads"]); ?></td>
					<td class="f-14 td-manage">
						<a style="text-decoration:none" class="ml-5"
						href="<?php echo U('File/file_edit',array('id'=>$vo['id']));?>" title="编辑">
						<i class="Hui-iconfont">&#xe6df;</i></a> <a style="text-decoration:none" class="ml-5"
						onClick="file_del(this,'/news/index.php/Admin/File/fileDel','<?php echo ($vo["id"]); ?>')"title="删除">
						<i class="Hui-iconfont">&#xe6e2;</i>
					   </a>
					</td>
				</tr><?php endforeach; endif; ?>
			</tbody>
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
	"aoColumnDefs": [
	  //{"bVisible": false, "aTargets": [ 3 ]} //控制列的隐藏显示
	  {"orderable":false,"aTargets":[0,8]}// 不参与排序的列
	]
});

/*文件-编辑*/
function file_edit(url,id){
	$.ajax({
		type: 'POST',
		url: url,
		data:{id:id},
		dataType: 'json',
		success: function(data){
//					$(obj).parents("tr").remove();
//					layer.msg('已删除!',{icon:1,time:1000});
		},
		error:function(data) {
			console.log(data.msg);
		},
	});
}

/*文件-删除*/
function file_del(obj,url,id){
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
/*文件-批量删除*/
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