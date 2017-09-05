<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE HTML>
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




</head>
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 新闻管理 <span class="c-gray en">&gt;</span> 新闻列表 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>

<div class="page-container">
	<table class="table table-border table-bordered table-bg table-hover table-sort table-responsive" >
			<thead>
				<tr class="text-c">
					<th width="25"><input type="checkbox" name="" value=""></th>
					<th>ID</th>
					<th>留言标题</th>
					<th>留言内容</th>
					<th>留言人</th>
					<th >留言时间</th>
					<th >审核留言</th>
					<th>点击回复留言</th>
					<th >操作</th>
				</tr>
			</thead>
			<tbody>
			<?php if(is_array($lmsg)): foreach($lmsg as $key=>$vo): ?><tr class="text-c va-m check-tr">
					<td><input type="checkbox" value="<?php echo ($vo["id"]); ?>" name=""></td>
					<td><?php echo ($vo["id"]); ?></td>
					<td><?php echo (mb_substr($vo["title"],0,8,'utf-8')); ?>...</td>
				    <td><?php echo (mb_substr($vo["content"],0,60,'utf-8')); ?>...</td>
				    <td><?php echo ($vo["leaver"]); ?></td>
				    <td><?php echo date('Y-m-d H:i:s',$vo['leave_time']);?></td>
				    <td>
						<?php switch($vo['status']): case "0": ?><a  style="text-decoration:none"  href="<?php echo U('Lmsg/lmsg_view',array('id'=>$vo['id']));?>"  title='文章预览审核'>审核并查看详情</a><?php break;?>
							<?php case "1": ?><a  style="text-decoration:none"  href="<?php echo U('Lmsg/lmsg_view',array('id'=>$vo['id']));?>"  title='已经审核通过'><span class="label label-success radius">审核通过</span></a><?php break;?>
							<?php case "2": ?><a  style="text-decoration:none"  href="<?php echo U('Lmsg/lmsg_view',array('id'=>$vo['id']));?>"  title='审核未通过'><span class="label label-danger radius">审核未通过</span></a><?php break;?>
							<?php case "3": ?><a  style="text-decoration:none"  href="<?php echo U('Lmsg/lmsg_view',array('id'=>$vo['id']));?>"  title='审核未通过'><span class="label label-danger radius">审核未通过</span></a><?php break; endswitch;?>

					<!--	<?php if($vo['status'] == 0): ?><a href="javascript:;" onclick="replay_msg('回复消息','/index.php/Admin/Lmsg/replay/id/<?php echo ($vo["id"]); ?>',500,380)"> <span class="label label-danger radius">点击回复消息</span></a>
							<?php else: ?>
							<a href="javascript:;" onclick="replay_look('回复内容','/index.php/Admin/Lmsg/replay_look/id/<?php echo ($vo["id"]); ?>',500,300)"><span class="label label-success radius">查看回复内容</span></a><?php endif; ?>-->
					</td>
				   <td>
					   <?php if($vo['status'] == 2): ?><a  style="text-decoration:none" onclick="replay_msg('回复消息','/index.php/Admin/Lmsg/replay/id/<?php echo ($vo["id"]); ?>',500,380)" href="javascript:;" title='审核未通过'><span class="label label-danger radius">回复消息</span></a></case>
						<?php else: ?>
						  <a href="javascript:;" onclick="replay_look('回复内容','/index.php/Admin/Lmsg/replay_look/id/<?php echo ($vo["id"]); ?>',500,300)"><span class="label label-success radius">查看回复内容</span></a></case><?php endif; ?>
				   </td>
					<td class="f-14 td-manage">
					  <a style="text-decoration:none" class="ml-5"
						onClick="lmsg_del(this,'/index.php/Admin/Lmsg/lmsg_del','<?php echo ($vo["id"]); ?>')"title="删除">
						<i class="Hui-iconfont">&#xe6e2;</i>
					   </a>
					</td>
				</tr><?php endforeach; endif; ?>
			</tbody>
		</table>
</div>
</div>
<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="/Public/Admin/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="/Public/Admin/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/Public/Admin/static/h-ui/js/H-ui.min.js"></script>
<script type="text/javascript" src="/Public/Admin/static/h-ui.admin/js/H-ui.admin.js"></script> <!--/_footer 作为公共模版分离出去-->

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="/Public/Admin/lib/My97DatePicker/4.8/WdatePicker.js"></script>
<script type="text/javascript" src="/Public/Admin/lib/datatables/1.10.0/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="/Public/Admin/lib/laypage/1.2/laypage.js"></script>
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


//查看回复内容
function replay_look(title,url,w,h){
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
function lmsg_del(obj,url,id){
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


</script> 
</body>
</html>