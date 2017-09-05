<?php
namespace Admin\Controller;
use \Admin\Controller\IndexController;
class PrivilegeController extends IndexController
{
    public function add()
    {
    	if(IS_POST)
    	{
    		$model = D('Admin/Privilege');
    		if($model->create(I('post.'), 1))
    		{
    			if($id = $model->add())
    			{
    				$this->success('添加成功！', U('lst?p='.I('get.p')));
    				exit;
    			}
    		}
    		$this->error($model->getError());
    	}

    	$parentModel = D('Admin/Privilege');
		$parentData = $parentModel->getTree();
		$this->assign('parentData', $parentData);


		$this->display();
    }
    public function edit()
    {
    	$id = I('get.id');
    	if(IS_POST)
    	{
    		$model = D('Admin/Privilege');
    		if($model->create(I('post.'), 2))
    		{
    			if($model->save() !== FALSE)
    			{
    				$this->success('修改成功！', U('lst', array('p' => I('get.p', 1))));
    				exit;
    			}
    		}
    		$this->error($model->getError());
    	}
    	//根据点击获取的ID查找对应的权限
    	$model = M('Privilege');
    	$data = $model->find($id);
    	$this->assign('data', $data);
        //根据点击获取ID查找权限，，以及子权限所在父节点
		$parentModel = D('Admin/Privilege');
		$parentData = $parentModel->getTree();
		$children = $parentModel->getChildren($id);
		$this->assign(array(
			'parentData' => $parentData,
			'children' => $children,
		));


		$this->display();
    }
    public function delete()
    {
    	$model = D('Admin/Privilege');
    	if($model->delete(I('get.id', 0)) !== FALSE)
    	{
    		$this->success('删除成功！', U('lst', array('p' => I('get.p', 1))));
    		exit;
    	}
    	else 
    	{
    		$this->error($model->getError());
    	}
    }
    public function lst()
    {
    	$model = D('Admin/Privilege');
		$data = $model->getTree();
    	$this->assign(array(
    		'data' => $data,
    	));
    	$this->display();
    }
}