<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2017/07/29
 * Time: 14:55
 */

namespace Admin\Controller;
use Think\Controller;

class FileController extends IndexController{

    function  file_list(){
        $file=D('file');
        $sql=" SELECT file.* ,role.role_name FROM `file`  inner JOIN role on file.role_id=role.id WHERE ( del_flag=0 )";
//        $fielsList=$file->join("role on file.role_id=role.id")->where("del_flag=0")->select();
        $fielsList=$file->query($sql);
        $countList=count($fielsList);
//        dump($fielsList);
//        die();
        $this->assign('countList',$countList);
        $this->assign('fielsList',$fielsList);
//        $this->assign('roleInfo',$roleInfo);
        $this->display();
    }

    function  file_add(){
        session('username','root');
        $role=D('role');
        $role_list=$role->select();
        if(IS_POST){
            $post=I('post.');
            $post['add_time']=time();
            $post['author']= session('username');
            $file=D('file');
            $addInfo=$file->uploadFile($post,$_FILES['upload_url']);
            if(!$addInfo) {  // 上传错误提示错误信息
                $this->error('上传文件失败！');
            }
            else{// 上传成功
              $this->success('上传文件成功！',U('file_list'),2);
            }
        }else{
            $this->assign('role_list',$role_list);
            $this->display();
        }

    }
 function  maillist_add(){
        if(IS_POST){
            $post=I('post.');


            $post['add_time']=time();
            $post['author']= session('username');

            if($_POST['type']==1){
                $file=D('file');
                $file->where('type=1')->delete();
            }
            $addInfo=$file->uploadfile($post,$_FILES['upload_url']);
            if(!$addInfo) {
                // 上传错误提示错误信息
                $this->error('上传文件失败！');
            }
            else{// 上传成功
                $this->success('上传文件成功！',U('maillist_add'),2);
            }
        }else{
            $this->display();
        }

    }

    //文件批量删除
    function batchDel(){
//        dump($_POST);die();
        if(IS_AJAX){
            $ids=$_POST['id'];
            $file=D("file");
            $ids=explode(",",$ids);
            $map['id']=array("in",$ids);
            $res=$file->where($map)->setField("del_flag","1");
            if ($res){
                $this->ajaxReturn(1);
            }else{
                $this->ajaxReturn(0);
            }
        }
    }

    //文件单个删除
    function fileDel(){
        if(IS_AJAX){
            $id=$_POST['id'];
            $file=D("file");
            $map['id']=array("EQ",$id);
            $res=$file->where($map)->setField("del_flag","1");
            if ($res){
                $this->ajaxReturn(1);
            }else{
                $this->ajaxReturn(0);
            }
        }
    }


    //点击修改按钮处理
    function file_edit(){
        $id=$_GET['id'];
        $file=D("file");
        $fileinfo=$file->find($id);
        $category=D("category");
        $cateInfo=$category->select();
//        dump($cateInfo);

        $this->assign('cateInfo',$cateInfo);

        $this->assign('fileinfo',$fileinfo);
        $this->display();
    }
    //修改新闻界面  点击保存处理
    function fileEditSave()
    {
        if (IS_POST) {
            $post = I("post.");
            $file = D("file");
//            dump($post);die();
            $post['update_time'] = time();
            $addInfo=$file->where('id='.$post['id'])->updateFile($post,$_FILES['upload_url']);
            if(!$addInfo) {  // 上传错误提示错误信息
                $this->error('修改文件失败！');
            }
            else{// 上传成功
                $this->success('修改文件成功！',U('file_list'),2);
            }

        } else {

        }
    }



}