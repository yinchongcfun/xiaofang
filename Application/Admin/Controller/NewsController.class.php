<?php
namespace Admin\Controller;
use Think\Controller;
class NewsController extends IndexController {

    public function news_add(){
        $category=D('category');
        $admin_id=(session('id'));

        $admin_role=D('admin_role');
//       //根据session里面的ID查出这个人所在部门
//        $rolename=$admin_role->field('role_name')->join('role on role.id=admin_role.role_id')->where('admin_id='.$admin_id)->select();
//          dump($rolename);
        $role_name= $admin_role->field('role_name,role_id')->alias('a')->join('LEFT JOIN role c ON a.role_id=c.id')->where('admin_id='.$admin_id)->select();

        $this->assign('rolename',$role_name);

        $category_list=$category->select();

        $role=D('role');
        $role_list=$role->select();
        if (IS_POST){
            $post=I("post.");
//            dump($post);
//            die;
            //cate_id,获取是数组
            $new=D("news");
            $post['add_time']=time();
            $post['author']= session('username');
            $post['role_id']= $role_name[0]['role_id'];
            $file_name=$_FILES['news_img']['name'];
//            $post['content']=$post['editorValue'];
//            dump($post);
//            dump($_FILES['news_img']['name']);
//            die();
            //收集表单;
            if ($file_name==''){
                $res= $shuju = $new->add($post);
            }else{
                $res = $shuju = $new->addImg($post,$_FILES['news_img']);
            }
            if($res){
                $this ->success('添加成功！',U('news_list'),2);

            }else {
                $this ->error('添加失败！',U('news_add'),2);
            }
        }else{
            //展示表单
          $this->assign('role_list',$role_list);
          $this->assign('category_list',$category_list);
          $this->display();
        }

}
    /**
     * webuploader 上传文件
     */
//    public function ajax_upload(){
//        // 根据自己的业务调整上传路径、允许的格式、文件大小
//        $datapath=ajax_upload('Public/Uploads');
//        session('datapath',$datapath);
//        if($datapath){
//            $this->ajaxReturn($datapath);
//        }else{
//            $this->ajaxReturn(0);
//        }
//    }

    public function news_list(){
        $news=D('news');
        $newlist=$news->search();

      //  dump($newlist);
        $countList=count($newlist);
       //role表信息查询
        $role = D("role");
        $roleInfo= $role->select();
        //category表信息查询
        $category = D("category");
        $cateInfo= $category->select();
        $this->assign(array(
            'newlist' => $newlist['newlist'],
             'page' => $newlist['page'],
            'count' => $newlist['count'],
        ));

        $this->assign('cateInfo',$cateInfo);
        $this->assign('roleInfo',$roleInfo);
        $this->assign('countList',$countList);
        $this->display();
    }
    //新闻单个删除
    function news_del(){
        if(IS_AJAX){
            $id=$_POST['id'];
            $news=D("news");
//            $map['id']=array("EQ",$id);
            $res=$news->where('id='.$id)->setField("del_flag","1");
            if ($res){
                $this->ajaxReturn($id);
            }else{
                $this->ajaxReturn(0);
            }
        }
    }
    //新闻批量删除
    function batchDel(){
//        dump($_POST);die();
        if(IS_AJAX){
            $ids=$_POST['id'];
            $news=D("news");
            $ids=explode(",",$ids);
            $map['id']=array("in",$ids);

            $res=$news->where($map)->setField("del_flag","1");
            if ($res){
                $this->ajaxReturn($res);
            }else{
                $this->ajaxReturn(0);
            }
        }
    }

    //点击修改按钮处理
    function news_edit(){
        $id=$_GET['id'];
        $new=D("news");
        $newsinfo=$new->find($id);
        $category=D("category");
        $cateInfo=$category->select();

        // 取出当前新闻所在的所有栏目分类
        $ncModel = M('NewsCate');
        $cate_id = $ncModel->field('cate_id')->where(array('news_id'=>array('eq', $id)))->select();
        //Dump($cate_id);die;
        $this->assign('cate_id', $cate_id);
        //判断当前的新闻所在多少个栏目

        $role = D("role");
        $roleInfo= $role->select();

        if($newsinfo){
            $content=$newsinfo['content'];
            if(get_magic_quotes_gpc()){
                $content=stripslashes($content);
            }
            $newsinfo['content']=htmlspecialchars_decode($content);
			}
//        dump($cateInfo);
        $this->assign('roleInfo',$roleInfo);
        $this->assign('cateInfo',$cateInfo);
        $this->assign('newsinfo',$newsinfo);
        $this->display();
    }
    //修改新闻界面  点击保存处理
    function newsEditSave()
    {

        // 先清除原来的栏目分类
        $ncModel = M('NewsCate');
        $ncModel->where(array('news_id'=>array('eq', $_POST['id'])))->delete();
        // 接收表单重新添加一遍
        $cate_Id = I('post.cate_id');

        $cateId = array_flip(array_flip($cate_Id));
        $cate = array();
        foreach($cateId as $v){
            if($v){
                $cate[] = $v;
            }
        }
        if($cate)
        {
            foreach ($cate as $k => $v)
            {
                $ncModel->add(array(
                    'cate_id' => $v,
                    'news_id' => $_POST['id'],
                ));
            }
        }

        if (IS_POST) {
            $post = I("post.");
            $new = D("news");
            $post['update_time'] = time();
            $post['author'] = session('username');
//            $post['content'] = $post['editorValue'];
//            dump($_FILES['news_img']['name']);
//            dump($post);
//            die();

            $file_name = $_FILES['news_img']['name'];
            if ($file_name == '') {   /*'id='.$post['id']*/
                $res = $shuju = $new->where(array('id'=>$post['id']))->save($post);
            } else {
                $res = $shuju = $new->where('id='.$post['id'])->updateImg($post, $_FILES['news_img']);
            }
            if ($res) {
                $this->success('修改成功！', U('news_list'), 2);

            } else {
                $this->success('修改成功！');
            }
        } else {

        }
    }
    //新闻排序
    public function changeOrder(){
        $data = I('post.');
//        $data['id'] = $_POST['id'];
//        $data['sort_id'] = $_POST['sort_id'];
        $newsmsg =  $newsModel=D('news')->save($data);
        if ($newsmsg){
            $this->ajaxReturn(1);
        }else{
            $this->ajaxReturn(0);
        }
    }
    //提交审核信息失败后，返回给用户信息
    public  function replay(){
        if(IS_POST){

            $newsModel = D('news');
            $newsmsg = $newsModel->where('id='. $_GET['id'])->setField('status',3);
            $replay_msg=I('post.');

            $replay_msg['news_id']=$_GET['id'];
            $replay_msg['admin_id']=session('id');

            $replay=D('replay');
            $replaydata=$replay->add($replay_msg);
            if($replaydata && $newsmsg){
                $this->success('回复成功!');
                exit;
            }
        }else{
            $this->display();
        }
    }

}