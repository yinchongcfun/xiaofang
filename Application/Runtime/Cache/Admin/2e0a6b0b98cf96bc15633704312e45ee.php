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
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 管理员管理 <span class="c-gray en">&gt;</span> 管理员列表 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
	<div class="cl pd-5 bg-1 bk-gray mt-20"> <span class="l"><a href="javascript:;" onclick="admin_add('添加管理员','<?php echo U('Admin/add');?>','800','500')" class="btn btn-primary radius"><i class="Hui-iconfont">&#xe600;</i> 添加管理员</a></span> </div>
<div class="page-container">
	<table class="table table-border table-bordered table-hover table-bg table-sort">
			<thead>
			<tr>
				<th scope="col" colspan="10">员工列表</th>
			</tr>
			<tr class="text-c">
				<th width="25"><input type="checkbox" name="" value=""></th>
				<th width="100">账号</th>
				<th width="100">密码</th>
				<th width="100">电话</th>
				<th width="100">虚拟小号</th>
				<th width="120">邮箱</th>
				<th width="100">所在单位</th>
				<th width="100">管理员类型</th>
				<th width="50">是否已启用</th>
				<th width="100">操作</th>
			</tr>
			</thead>
			<tbody>
			<?php foreach ($data as $k => $v): ?>
			<tr class="test-c">
				<td><input type="checkbox" name="id[]" value="<?php echo ($v["id"]); ?>"></td>
				<td><?php echo $v['username']; ?></td>
				<td><?php echo $v['password']; ?></td>
				<td><?php echo $v['phone']; ?></td>
				<td><?php echo $v['minphone']; ?></td>
				<td><?php echo $v['email']; ?></td>
				<td><?php echo $v['role_name']; ?></td>
				<?php if($v["local_id"] == 0): ?><td value="0" >本地管理员</td>
						<?php else: ?>
						<?php if(is_array($localData)): foreach($localData as $key=>$vo): if($vo['local_id'] == $v["local_id"] ): ?><td value="<?php echo ($vo["local_id"]); ?>"><?php echo ($vo["local_name"]); ?></td><?php endif; endforeach; endif; endif; ?>
				<td  style="cursor:pointer;text-align: center" admin_id="<?php echo ($v["id"]); ?>" class="is_use  radius"><strong><?php echo $v['is_use']==1?'启用':'禁用'; ?></strong></td>
				<td align="center">
					<a href="<?php echo U('edit?id='.$v['id'].'&p='.I('get.p')); ?>" title="编辑">编辑</a> |
					<?php if($v['id'] > 1): ?>
					<a href="<?php echo U('delete?id='.$v['id'].'&p='.I('get.p')); ?>" onclick="return confirm('确定要删除吗？');" title="移除">移除</a>
					<?php endif; ?>
				</td>
			</tr>
			<?php endforeach; ?>
			</tbody>
		</table>
	</div>
</div>
<div class="page-container" id="edit_from" style="display: none">
    <div  class="form form-horizontal" id="form-user-add">
        <input type="hidden" class="input-text" value="<?php echo ($info["cate_id"]); ?>" placeholder="" id="cate_id" name="cate_id">
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2" >
                <span class="c-red">*</span>
                分类名称：</label>
            <div class="formControls col-xs-6 col-sm-6">
                <input type="text" id="cate-edit-name" class="input-text" value="" placeholder="" id="cate_name" name="cate_name">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2">
                <span class="c-red">*</span>
                排序：</label>
            <div class="formControls col-xs-6 col-sm-6 " >
                <input type="text" id="cate-edit-sort" class="input-text" value="" placeholder="" id="cate_sort" name="cate_sort">
            </div>
        </div>
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
<!--<script type="text/javascript">
$('.table-sort').dataTable({
	"aaSorting": [[ 1, "desc" ]],//默认第几个排序
	"bStateSave": true,//状态保存
    "sLengthMenu":9,
    "aLengthMenu":[[5,10,20,50,-1],[5,10,20,50,"All"]],
	"aoColumnDefs": [
	  //{"bVisible": false, "aTargets": [ 3 ]} //控制列的隐藏显示
	  {"orderable":false,"aTargets":[0,1,3,4]}// 制定列不参与排序
	]
});
/*系统-栏目-添加*/
function system_category_add(title,url,w,h){
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
/*系统-栏目-编辑*/


function system_category_edit(obj,title,url,id,w,h){
    $('#cate-edit-name').val($(obj).parents("tr").children('.cate-name').html());
    $('#cate-edit-sort').val($(obj).parents("tr").children('.cate-sort').html());
    layer.open({
        title:title,
        type: 1,
        area: [w+'px',h+'px'],
        closeBtn:1,
        maxmin:1,
        shadeClose: true, //点击遮罩关闭
        btn:['确认','取消'],
        content: $('#edit_from') ,
        yes:function(index) {
            var sort = $('#cate-edit-sort').val();
            var name = $('#cate-edit-name').val();
            $.ajax({
                type:'POST',
                url:url,
                data:{id:id,cate_name:name,cate_sort:sort},
                dataType:'json',
                success:function(data){
                    if(data){
                        layer.msg('修改成功！',{icon:1,time:1000});
                        $(obj).parents("tr").children('.cate-name').html($('#cate-edit-name').val());
                        $(obj).parents("tr").children('.cate-sort').html($('#cate-edit-sort').val());
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
/*分类-删除*/
function system_category_del(obj,url,id){
	layer.confirm('确认要删除吗？',function(){
                $.ajax({
                    type: 'POST',
                    url: url,
                    data:{id:id},
                    dataType: 'json',
                    success: function(data){
                        if(data){
                            $(obj).parents("tr").remove();
                            layer.msg('已删除!',{icon:1,time:1000});
                        }else{
                            layer.msg('删除失败!',{icon:1,time:1000});
                            console.log(data.msg);
                        }
                    },
                    error:function(data) {
                        layer.msg('删除失败!',{icon:1,time:1000});
                        console.log(data.msg);
                    }
                })
    }
		);
}

/*分类-批量删除*/
function datadel(url){
    var da = new Array();
    var i=0;
    $(".check-tr input[type='checkbox']").each(function(){
        if($(this).is(':checked')){
            da[i] = $(this).val();
            i++;
        }
    });
    var la = '';
    for(var i=0;i<da.length;i++){
        la +=da[i]+','
    }
    if(la.length>0){
        la=la.substring(0,la.length-1);
        layer.confirm('确认要批量删除吗？',function(){
                    $.ajax({
                        type: 'POST',
                        url: url,
                        data:{la:la},
                        dataType: 'json',
                        success: function(data){
                            if(data){
                                $(".check-tr input[type='checkbox']").each(function(){
                                    if($(this).is(':checked')){
                                        $(this).parents("tr").remove();
                                    }
                                });
                                layer.msg('已删除!',{icon:1,time:1000});
                            }else{
                                layer.msg('删除失败!',{icon:0,time:1000});
                                console.log(data.msg);
                            }
                        },
                        error:function(data) {
                            layer.msg('删除失败!',{icon:0,time:1000});
                            console.log(data.msg);
                        }
                    })
                }
        );
    }
}

/*分类查询*/
function goods_category_serch(url){
    var  s_content = $('#s_content').val();
    $.ajax({
        type:'POST',
        url:url,
        data:{s_content:s_content},
        datatype:'json',
        success:function(data){
            if(data == '[]'){
                layer.msg('未查到数据!',{icon:0,time:1000});
                console.log(data.msg);
            }else{
                var obj = eval('(' + data + ')');
                var inhtml = '';
                for(var i in obj){
                        inhtml += "<tr class='text-c check-tr'>"
                                +"<td><input type='checkbox'  name='' value='"+obj[i]['cate_name']+"'></td>"
                                +"<td>"+obj[i]['cate_id']+"</td>"
                                +"<td>"+obj[i]['cate_sort']+"</td>"
                                +"<td class='text-l'>"+obj[i]['cate_name']+"</td>"
                                +"<td class='f-14'><a title='编辑' href='avascript:;' onclick="
                                +'"'+"system_category_edit('栏目编辑','/news/index.php/Admin/Admin/edit/cate_id/"+obj[i]['cate_id']+"','1','700','480')"+'"'
                                +" style='text-decoration:none'><i class='Hui-iconfont'>&#xe6df;</i></a><a title='删除' href='javascript:;' onclick="
                                +'"'+"system_category_del(this,'/news/index.php/Admin/Admin/del','"+obj[i]['cate_id']+"')"+'"'
                                +"  class='ml-5' style='text-decoration:none'><i class='Hui-iconfont'>&#xe6e2;</i></a></td>"
                                + "</tr>"
                }
                $('tbody').html(inhtml);
            }
        },
        error:function(data){
            layer.msg('未查到数据!',{icon:0,time:1000});
            console.log(data.msg);
        }
            })
}
function aa(index){
}
</script>-->
<script type="text/javascript">
	$('.table-sort').dataTable({
		"aaSorting": [[ 1, "desc" ]],//默认第几个排序
		"bStateSave": true,//状态保存
		"aLengthMenu":[[10,20,50,-1],[10,20,50,"All"]],

	});
	// 为启用的td加一个事件
	$(".is_use").click(function(){
		// 先获取点击的记录的ID
		var id = $(this).attr("admin_id");
		if(id == 1)
		{
			alert("超级管理员不能修改！");
			return false;
		}
		var _this = $(this);
		$.ajax({
			type : "GET",
			// 默认U函数生成的地址是带.html后缀的：/index.php/Admin/Admin/ajaxUpdateIsuse.html/id/3，这样请求这个地址会报错无法请求，所以需要让U生成的地址不要带.html后缀
			// 也就是说，如果在AJAX时使用了U函数并且后面还要再传参数就需要设置第三个参数为FALSE不生成.html后缀
			url : "<?php echo U('ajaxUpdateIsuse', '', FALSE); ?>/id/"+id,
			success : function(data)
			{
				if(data == 0)
					_this.html("禁用");
				else
					_this.html("启用");
			}
		});
	});
	function selecttime(flag){
		if(flag==1){
			var endTime = $("#countTimeend").val();
			if(endTime != ""){
				WdatePicker({dateFmt:'yyyy-MM-dd HH:mm',maxDate:endTime})}else{
				WdatePicker({dateFmt:'yyyy-MM-dd HH:mm'})}
		}else{
			var startTime = $("#countTimestart").val();
			if(startTime != ""){
				WdatePicker({dateFmt:'yyyy-MM-dd HH:mm',minDate:startTime})}else{
				WdatePicker({dateFmt:'yyyy-MM-dd HH:mm'})}
		}
	}
	/*管理员-增加*/
	function admin_add(title,url,w,h){
		layer_show(title,url,w,h);
	}
	/*管理员-删除*/
	function admin_del(obj,id){
		layer.confirm('确认要删除吗？',function(index){
			$.ajax({
				type: 'POST',
				url: '',
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
	/*管理员-编辑*/
	function admin_edit(title,url,id,w,h){
		layer_show(title,url,w,h);
	}
	/*管理员-停用*/
	function admin_stop(obj,id){
		layer.confirm('确认要停用吗？',function(index){
			//此处请求后台程序，下方是成功后的前台处理……

			$(obj).parents("tr").find(".td-manage").prepend('<a onClick="admin_start(this,id)" href="javascript:;" title="启用" style="text-decoration:none"><i class="Hui-iconfont">&#xe615;</i></a>');
			$(obj).parents("tr").find(".td-status").html('<span class="label label-default radius">已禁用</span>');
			$(obj).remove();
			layer.msg('已停用!',{icon: 5,time:1000});
		});
	}
	/*管理员-启用*/
	function admin_start(obj,id){
		layer.confirm('确认要启用吗？',function(index){
			//此处请求后台程序，下方是成功后的前台处理……


			$(obj).parents("tr").find(".td-manage").prepend('<a onClick="admin_stop(this,id)" href="javascript:;" title="停用" style="text-decoration:none"><i class="Hui-iconfont">&#xe631;</i></a>');
			$(obj).parents("tr").find(".td-status").html('<span class="label label-success radius">已启用</span>');
			$(obj).remove();
			layer.msg('已启用!', {icon: 6,time:1000});
		});
	}
</script>
</body>
</html>