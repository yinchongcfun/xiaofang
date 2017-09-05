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




</head>
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> <a href="<?php echo U('Index/welcome');?> ">首页</a> <span class="c-gray en">&gt;</span> 地区稿件管理 <span class="c-gray en">&gt;</span> 未审核地区稿件 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>

<div class="page-container">
	<table class="table table-border table-bordered table-bg table-hover table-sort table-responsive" >
			<thead>
				<tr class="text-c">
					<th width="25"><input type="checkbox" name="" value=""></th>
					<th>ID</th>
					<th width="200">标题</th>
					<th>文章预览审核</th>
					<th >所属地区</th>
					<th >添加时间</th>
					<th >添加者</th>
					<th >操作</th>
				</tr>
			</thead>
			<tbody>
			<?php if(is_array($newlist)): foreach($newlist as $key=>$vo): ?><tr class="text-c va-m check-tr">
					<td><input type="checkbox" value="<?php echo ($vo["id"]); ?>" name=""></td>
					<td><?php echo ($vo["id"]); ?></td>
					<td><?php echo (mb_substr($vo["title"],0,20,'utf-8')); ?>...</td>
				    <th class="td-status">
						<?php switch($vo['status']): case "0": ?><a  style="text-decoration:none"  href="<?php echo U('Local/local_view',array('id'=>$vo['id']));?>"  title='文章预览审核'>审核并查看详情</a><?php break;?>
							<?php case "1": ?><a  style="text-decoration:none"  href="<?php echo U('Local/local_view',array('id'=>$vo['id']));?>"  title='已经审核通过'><span class="label label-success radius">审核通过</span></a><?php break;?>
							<?php case "2": ?><a  style="text-decoration:none"  href="<?php echo U('Local/local_view',array('id'=>$vo['id']));?>"  title='审核未通过'><span class="label label-danger radius">审核未通过</span></a>
								<a  style="text-decoration:none" onclick="replay_msg('回复消息','/news/index.php/Admin/Local/replay/id/<?php echo ($vo["id"]); ?>',500,380)" href="javascript:;" title='审核未通过'><span class="label label-danger radius">回复消息</span></a><?php break;?>
							<?php case "3": ?><a  style="text-decoration:none"  href="<?php echo U('Local/local_view',array('id'=>$vo['id']));?>"  title='审核未通过'><span class="label label-danger radius">审核未通过</span></a><?php break; endswitch;?>

					</th>
				    <td><?php echo ($vo["local_name"]); ?></td>
				    <td><?php echo date('Y-m-d',$vo['add_time']);?></td>
				    <td><?php echo ($vo["author"]); ?></td>
					<td class="f-14 td-manage">
					    <a style="text-decoration:none" class="ml-5"
						href="<?php echo U('Local/local_edit',array('id'=>$vo['id']));?>" title="编辑">
						<i class="Hui-iconfont">&#xe6df;</i></a> <a style="text-decoration:none" class="ml-5"
						onClick="local_del(this,'/news/index.php/Admin/Local/local_del','<?php echo ($vo["id"]); ?>')"title="删除">
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
	"aLengthMenu": [[5, 10, 20, -1], [5, 10, 20, "All"]],//指定每页显示条
	"aoColumnDefs": [
	  //{"bVisible": false, "aTargets": [ 3 ]} //控制列的隐藏显示
	 // {"orderable":false,"aTargets":[0,8]}// 不参与排序的列
	]
});
//消息回复
function replay_msg(title,url,w,h){
	layer.open({
		title:title,
		type: 2,
		area: [w+'px',h+'px'],
		closeBtn:1,
		shadeClose: true, //点击遮罩关闭
		content: url,
		yes:function (index) {
			location.reload();
//            layer.close(index);
		},
		cancel:function(index){
			layer.close(index)
		}
	});
//	layer_show(title,url,w,h);
}
/*新闻-删除*/
function local_del(obj,url,id){
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