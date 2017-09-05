<?php
/**
 * Created by PhpStorm.
 * User: Hello Warm
 * Date: 2017/8/4
 * Time: 9:43
 */

namespace Admin\Controller;
use Boris\DumpInspector;
use Think\Controller;

class localController extends IndexController
{
    public function local_list(){

        //从news表取出不同单位，对应的未审核的文章
        $role_id=I('get.id');
        session('role_id',$role_id );
        $news=D('news');
        $where='role_id='.$role_id  .'  and del_flag=0 and local_id !=0';

        $sql=" SELECT * FROM news   where ". $where;
      // echo($sql);
        $newlist=$news->query($sql);
       // $newlist1=mysqli_fetch_assoc($sql);

     // dump($newlist);
        $this->assign('newlist',$newlist);
        $this->display();
    }

    //文章预览
    public function local_view(){
    $id=I('get.id');
    $newsmsg=D('news')->where('id='.$id)->select();
    $this->assign('newsmsg',$newsmsg);
    $this->display();
    }

//当地新闻单个删除
    function local_del(){
        if(IS_AJAX){
            $id=$_POST['id'];
            $news=D("news");
            $map['id']=array("EQ",$id);
            $res=$news->where($map)->setField("del_flag","1");
            if ($res){
                $this->ajaxReturn($id);
            }else{
                $this->ajaxReturn(0);
            }
        }
    }


    //点击当地修改按钮处理
    function local_edit(){
        $id=$_GET['id'];
        $new=D("news");
        $newsinfo=$new->find($id);
        $category=D("category");
        $cateInfo=$category->select();

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
    //修改当地新闻界面  点击保存处理
    function localEditSave()
    {
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
            if ($file_name == '') {
                $res = $shuju = $new->where('id='.$post['id'])->save($post);
            } else {
                $res = $shuju = $new->where('id='.$post['id'])->updateImg($post, $_FILES['news_img']);
            }
            if ($res) {
                 $role_id= session('role_id');

                $this->success('保存成功',U('Local/local_list',array('id'=>$role_id)));

            } else {
                $this->success('修改成功！');
            }
        } else {

        }
    }
//提交审核成功
    public function submit_success()
    {
        if (IS_AJAX) {
            $newsModel = D('news');
         $newsmsg1 = $newsModel->where('id='.$_GET['id'])->setField('status',1);
         $newsmsg = $newsModel->where('id='.$_GET['id'])->setField('verifier',session('username'));
     //  $newsmsg = $newsModel->where('id='.$_GET['id'])->setField(array('status','verifier'),array('1',session('username')));
            if ($newsmsg&&$newsmsg1) {
                $this->ajaxReturn(1);
            } else {
                $this->ajaxReturn(0);
            }
        }
    }
    //提交审核失败
    public function submit_fail()
    {
      if (IS_AJAX) {
            $newsModel = D('news');
         // $newsmsg = $newsModel->where('id='.$_GET['id'])->setField(array('status','verifier'),array('1',session('username')));
          $sql="update news set status='2',verifier='".session('username'). "' where id=".$_GET['id'];
        //  $newsmsg1 = $newsModel->where('id='.$_GET['id'])->setField('status',2);
        //    $newsmsg = $newsModel->where('id='.$_GET['id'])->setField('verifier',session('username'));
           $newsModel->execute($sql);
         //$newsModel->getLastSql();
           $this->ajaxReturn(1);

          // dump($newsmsg1."_______".$newsmsg);
            //将失败信息返回给上传信息管理员。
//            if ($newsmsg&& $newsmsg1) {
//                $this->ajaxReturn(1);
//            } else
//            {
//                $this->ajaxReturn(0);
//            }
        }
    }


    //提交审核信息失败后，返回给用户信息
        public  function replay(){
        if(IS_POST){

            $newsModel = D('news');
            $newsmsg = $newsModel->where('id='. $_GET['id'])->setField('status',3);
            $replay_msg=I('post.');
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