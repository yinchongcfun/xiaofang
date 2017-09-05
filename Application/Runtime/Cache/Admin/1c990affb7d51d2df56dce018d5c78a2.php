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



<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 管理员管理 <span class="c-gray en">&gt;</span> 角色管理 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="page-container">
	<div class="cl pd-5 bg-1 bk-gray"> <span class="l"> <a class="btn btn-primary radius"  onclick="location.href='add.html'" ><i class="Hui-iconfont">&#xe600;</i> 添加权限</a> </span> </div>
	<table class="table table-border table-bordered table-hover table-bg table-sort">
		<thead>
		<tr>
			<th scope="col" colspan="8">权限节点</th>
		</tr>
		<tr class="text-c">
			<th width="25"><input type="checkbox" name="" value=""></th>
			<th width="110">ID</th>
			<th width="110">权限名称</th>
			<th width="110">模块名称</th>
			<th width="100">控制器名称</th>
			<th width="200">方法名称，增删该查</th>
			<th width="110">上级权限</th>
			<th width="110">操作</th>
		</tr>
		</thead>
		<tbody>
		<?php foreach ($data as $k => $v): ?>
		<tr class="text-c">
			<td><input type="checkbox" value="1" name=""></td>
			<td><?php echo $v['id']; ?></td>
			<td><?php echo str_repeat('-', 3*$v['level']); echo $v['pri_name']; ?></td>
			<td><?php echo $v['module_name']; ?></td>
			<td><?php echo $v['controller_name']; ?></td>
			<td><?php echo $v['action_name']; ?></td>
			<td><?php echo $v['parent_id']; ?></td>
			<td align="center">
				<a href="<?php echo U('edit?id='.$v['id'].'&p='.I('get.p')); ?>" title="编辑">编辑</a> |
				<a href="<?php echo U('delete?id='.$v['id'].'&p='.I('get.p')); ?>" onclick="return confirm('确定要删除吗？');" title="移除">移除</a>
			</td>
		</tr>
		<?php endforeach; ?>
		</tbody>
		</table>
	</div>
</div>

<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="/news/Public/Admin/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="/news/Public/Admin/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/news/Public/Admin/static/h-ui/js/H-ui.min.js"></script>
<script type="text/javascript" src="/news/Public/Admin/static/h-ui.admin/js/H-ui.admin.js"></script>

<script type="text/javascript" src="/news/Public/Admin/lib/My97DatePicker/4.8/WdatePicker.js"></script>
<script type="text/javascript" src="/news/Public/Admin/lib/datatables/1.10.0/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="/news/Public/Admin/lib/laypage/1.2/laypage.js"></script>
<script type="text/javascript">

	$('.table-sort').dataTable({
		"aaSorting": [[ 1, "desc" ]],//默认第几个排序
		"bStateSave": true,//状态保存
		"aLengthMenu":[[10,20,50,-1],[10,20,50,"All"]],
		"aoColumnDefs": [
//			{"bVisible": false, "aTargets": [ 3 ]} ,//控制列的隐藏显示
	                                               // 制定列不参与排序
		]
	});

	/*资讯-添加*/
	function article_add(title,url,w,h){
		var index = layer.open({
			type: 2,
			title: title,
			content: url
		});
		layer.full(index);
	}
	/*资讯-编辑*/
	function article_edit(obj,title,url,id,w,h){

//	$('#cate-edit-name').val($(obj).parents("tr").children('.category-name').html());
		$('#art-edit-title').val($(obj).parents('tr').children('#title').html());
		$('#art-edit-content').val($(obj).parents('tr').children('#content').html());
		layer.open({
			title:title,
			type: 1,
			area: ['600px','400px'],
			closeBtn:1,
			maxmin:1,
			shadeClose: true, //点击遮罩关闭
			btn:['确认','取消'],
			content: $('#edit_from') ,
			yes:function(index){
				var title = $('#art-edit-title').val();
				var content = $('#art-edit-content').val();
//		alert(id+'sdfsdf'+title+"sdfsda"+content);
				$.ajax({
					type:'POST',
					url:url,
					data:{id:id,edit_title:title,edit_content:content},
					dataType:'json',
					success:function(data){
//				alert(data);
						if(data){
							layer.msg('修改成功！',{icon:1,time:1000});
							$(obj).parents("tr").children('#title').html($('#art-edit-title').val());
							$(obj).parents("tr").children('#content').html($('#art-edit-content').val());
						}else{
							layer.msg('修改失败是s！',{icon:2,time:1000});
						}
					},
					error:function(data){

						layer.msg('修改失败是e！',{icon:2,time:1000});
					}
				})
				layer.close(index)
			},
			cancel:function(index){
				layer.close(index)
			}
		});
//	layer_show(title,url,w,h);
	}


	/*资讯-删除*/
	function article_del(obj,url,id) {
		layer.confirm('确认要删除吗？', function (index) {
			$.ajax({
				type: 'GET',
				url: url,
				dataType: 'json',
				success: function (data) {
					if (data) {
						$(obj).parents("tr").remove();
						layer.msg('已删除!', {icon: 1, time: 1000});
					} else {
						layer.msg('删除失败!', {icon: 1, time: 1000});
					}
				},
				error: function (data) {
					layer.msg('删除失败!', {icon: 1, time: 1000});
					console.log(data.msg);
				}

			});
		})
	}
	//批量删除

	function deleteCheckBox() {
		layer.confirm("确定要删除吗？" ,function () {
			//将所有复选框的默认值放入数组中
			var check = document.getElementsByName('id[]');
			var id = new Array();
			//将所有选中复选框的默认值写入到数组中
			for (var i = 0; i < check.length; i++) {
				if (check[i].checked)
					id.push(check[i].value);
			}
			//ajax开始运行
			$.ajax({
				url: "<?php echo U('date_del');?>",
				type: "post",
				dataType: "json",
				data: {id: id},
				success: function ($id) {
					//ajax成功返回数据要执行的代码
					if ($id) {
						layer.msg('删除成功!', {icon: 1, time: 1000});

						for (var j = 0; j <= check.length; j++) {
							if(check[0].checked){
								$(check[0]).parents("tr").remove();
							}
						}
					}
					else {
						layer.msg('删除失败!', {icon: 5, time: 1000});
					}

				},
				error: function ($id) {
					layer.msg('请选择删除对象!', {icon: 5, time: 1000});
					console.log($id.msg);
				}
			});
		})
	}

	/*资讯-审核*/
	function article_shenhe(obj,id){
		layer.confirm('审核文章？', {
					btn: ['通过','不通过','取消'],
					shade: false,
					closeBtn: 0
				},
				function(){
					$(obj).parents("tr").find(".td-manage").prepend('<a class="c-primary" onClick="article_start(this,id)" href="javascript:;" title="申请上线">申请上线</a>');
					$(obj).parents("tr").find(".td-status").html('<span class="label label-success radius">已发布</span>');
					$(obj).remove();
					layer.msg('已发布', {icon:6,time:1000});
				},
				function(){
					$(obj).parents("tr").find(".td-manage").prepend('<a class="c-primary" onClick="article_shenqing(this,id)" href="javascript:;" title="申请上线">申请上线</a>');
					$(obj).parents("tr").find(".td-status").html('<span class="label label-danger radius">未通过</span>');
					$(obj).remove();
					layer.msg('未通过', {icon:5,time:1000});
				});
	}
	/*资讯-下架*/
	function article_stop(obj,url,id){
		layer.confirm('确认要下架吗？',function(index){
			$.ajax({
				type: 'POST',
				url: url,
				data:{id:id},
				dataType: 'json',
				success: function (data) {
					if (data) {
						var string = "article_start(this,"+"'"+"/news/index.php/Admin/Privilege/article_start"+"',"+id+")";
						$(obj).attr("onclick",string);
						$(obj).html("<i class='Hui-iconfont'>&#xe603;</i>");

						$(obj).parents("tr").find(".td-status").html('<span class="label label-default radius">已下架</span>');
						layer.msg('已下架!', {icon: 5, time: 1000});
					} else {
						layer.msg('下架失败!', {icon: 5, time: 1000});
					}
				},
				error: function (data) {
					layer.msg('下架失败了了了!', {icon: 5, time: 1000});
					console.log(data.msg);
				}
			});
		})
	}
	/*资讯-发布*/
	function article_start(obj,url,id){
		layer.confirm('确认要上架吗？',function(index){
			$.ajax({
				type: 'POST',
				url: url,
				data:{id:id},
				dataType: 'json',
				success: function (data) {
					if (data) {
						var string = "article_stop(this," + "'" + "/news/index.php/Admin/Privilege/article_stop" + "'," +id+ ")";
						$(obj).attr("onclick",string);
						$(obj).html("<i class='Hui-iconfont'>&#xe6de;</i>");
						$(obj).parents("tr").find(".td-status").html('<span class="label label-success radius">上架</span>');
//					$(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" onClick="article_stop(this,id)" href="javascript:;" title="下架"><i class="Hui-iconfont">&#xe6de;</i></a>');
						layer.msg('已上架!', {icon: 6, time: 1000});
					} else {
						layer.msg('上架失败!', {icon: 5, time: 1000});
					}
				},
				error: function (data) {
					layer.msg('上架失败了了了!', {icon: 5, time: 1000});
					console.log(data.msg);
				}
			});
		});
	}


	/*资讯-申请上线*/
	function article_shenqing(obj,id){
		$(obj).parents("tr").find(".td-status").html('<span class="label label-default radius">待审核</span>');
		$(obj).parents("tr").find(".td-manage").html("");
		layer.msg('已提交申请，耐心等待审核!', {icon: 1,time:2000});
	}

</script>
</body>
</html>