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

class LmsgController extends IndexController
{
    public function lmsg_list()
    {

//        $type_id = I('get.type');
        $lmsgModel = D('LeaveMsg');
//        $map['type']=array("EQ",$type_id);
        $map['del_flag']=array("EQ",0);
//        $where='type='.$type_id AND 'del_flag=0';
        $lmsg = $lmsgModel->where($map)->select();
        $this->assign('lmsg', $lmsg);
        $this->display();
    }


//留言信息删除
    function lmsg_del(){
        if(IS_AJAX){
            $id=$_POST['id'];
            $news=D("LeaveMsg");
            $map['id']=array("EQ",$id);
            $res=$news->where($map)->setField("del_flag","1");
            if ($res){
                $this->ajaxReturn($id);
            }else{
                $this->ajaxReturn(0);
            }
        }
    }


//查看留言详情
    public function lmsg_view(){

        $lmsgModel=D('LeaveMsg');
        $lmsg_id=$_GET['id'];
        //dump($lmsg_id);
//        ->alias('a')->join('LEFT JOIN  admin_role b ON a.id=b.admin_id LEFT JOIN role c ON b.role_id=c.id')
        $lmsg=$lmsgModel->field('a.*,replay_msg,username')->alias('a')->join('left join replay b on b.lmsg_id=a.id left join admin c on b.admin_id=c.id')->where('a.id='.$lmsg_id)->find();

      //  dump($lmsg);
//        die;
        $this->assign('lmsg',$lmsg);
        $this->display();
    }

    //提交审核成功
    public function submit_success()
    {
        if (IS_AJAX) {
            $lmsgModel = D('LeaveMsg');
//            dump($_GET['id']);
            $lmsg = $lmsgModel->where('id='.$_GET['id'])->setField('status',1);
//            $lsmsg1 = $lmsgModel->where('id='.$_GET['id'])->setField('verifier',session('username'));
            //  $newsmsg = $newsModel->where('id='.$_GET['id'])->setField(array('status','verifier'),array('1',session('username')));
            if ($lmsg) {
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
            $lmsgModel = D('LeaveMsg');
//            dump($_GET['id']);
            $lmsg = $lmsgModel->where('id='.$_GET['id'])->setField('status',2);
//            $lsmsg1 = $lmsgModel->where('id='.$_GET['id'])->setField('verifier',session('username'));
            //将失败信息返回给上传信息管理员。
            if ($lmsg) {
                $this->ajaxReturn(1);
            } else {
                $this->ajaxReturn(0);
            }
        }
    }
    //回复留言信息存到replay表
    public function replay()
    {
         if (IS_POST) {
            $lmsgModel = D('LeaveMsg');
            $lmsg = $lmsgModel->where('id='.$_GET['id'])->setField('status',3);
           //dump($_GET['id']);
            $replay = D('replay');
            $replay_msg=I('post.');
            $replay_msg['lmsg_id']=$_GET['id'];
            $replay_msg['admin_id']=session('id');
//             dump($replay_msg);
            $replaydata = $replay->add($replay_msg);
            if ($replaydata && $lmsg) {
                $this->success('回复成功!');
                exit;
            }
        } else {
            $this->display();
        }
    }

    //回复留言信息存到replay表
    public function replay_look()
    {
        $replaygModel = D('replay');
        //dump($_GET['id']);
        $lmsg = $replaygModel->where('lmsg_id='.$_GET['id'])->find();
         //dump($lmsg);
        $this->assign('lmsg', $lmsg);
        $this->display();
    }

}
