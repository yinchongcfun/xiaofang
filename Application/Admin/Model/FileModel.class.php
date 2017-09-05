<?php
/**
 * Created by PhpStorm.
 * User: Hello Warm
 * Date: 2017/07/29
 * Time: 20:02
 */

namespace Admin\Model;
use Think\Model;

class FileModel extends Model{
    function uploadFile($post,$file){
        if ($file['upload_url']['error']<4) {
            //A. 处理上传的图片附件
            $cfg = array(
                'rootPath' => './Public/Uploads/files/', //保存根路径
            );
            $up = new \Think\Upload($cfg);
            //uploadOne()方法执行成功后会把附件(在服务器上)的名字和路径等相关信息给我们返回
            $z = $up->uploadOne($file);
            $file_url = $up->rootPath . $z['savepath'] . $z['savename'];//文件路径名
            $file_name= $up->$z['savepath'] . $z['name'];//文件名
            //把上传好的附件存储到数据库里边
            $post['upload_url'] = ltrim($file_url, '.');
            $post['file_name'] =$file_name;
        }
        return $this->add($post);
    }

    function updateFile($post,$file){
        if ($file['upload_url']['error']<4) {
            //A. 处理上传的图片附件
            $cfg = array(
                'rootPath' => './Public/Uploads/files/', //保存根路径
            );
            $up = new \Think\Upload($cfg);
            //uploadOne()方法执行成功后会把附件(在服务器上)的名字和路径等相关信息给我们返回
            $z = $up->uploadOne($file);

            $file_url = $up->rootPath . $z['savepath'] . $z['savename'];//文件路径名
            $file_name= $up->$z['savepath'] .$z['name'];//文件名
            //把上传好的附件存储到数据库里边
            $post['upload_url'] = ltrim($file_url, '.');
            $post['file_name'] =$file_name;

        }
        return $this->save($post);
    }



}