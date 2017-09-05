<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2017/07/29
 * Time: 21:21
 */

namespace Home\Controller;
use Think\Controller;

class FileController extends  CommonController{
    function file_list(){
        //通信手册
        $this->upload_url=$this->gettxl();

        $cateModel=D('category');
        // $maps['id']=array('between','1,5');
        $catemsg= $cateModel->where('cate_id>1 and cate_id<7')->select();
        $this->assign('catemsg',$catemsg);


        $file=D('File');
        //实现数据分页效果
        //① 获得总记录数目
        $total = $file-> count();
        $per =10;//每页显示7条数据
        //② 实例化分页类对象
        $page_obj = new \Common\Common\Page($total, $per);
        //③ 自定义sql语句，获得每页信息
        $sql = "select * from File  where del_flag=0  order by add_time desc ".$page_obj->limit;
        $fileInfo = $file -> query($sql);

        //④ 获得页码列表
        $pagelist = $page_obj -> fpage(array(3,4,5,6,7,8));

        $this -> assign('pagelist',$pagelist);

        $this -> assign('fileInfo',$fileInfo);
        $this -> display();

    }

    function  download_file(){
        $id=$_GET['id'];
//       dump($id);
        $file=D('File');
        $fileInfo=$file->where("del_flag=0")->find($id);

         // 调用类
        $http = new \Org\Net\Http;
        //获取站点目录
        $webRoot=dirname(dirname(dirname(dirname(__FILE__))));
//        echo  (__FILE__);
//        echo  ($webRoot);
        $filename =$webRoot.$fileInfo['upload_url'];
        $showname=$fileInfo['file_name'];
//        dump($filename);
//        die();

        $res=$file->where('id='.$id)->setInc('downloads');
        $downloads=$http->download($filename, $showname);

    }
}