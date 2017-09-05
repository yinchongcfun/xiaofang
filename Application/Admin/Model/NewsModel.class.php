<?php
/**
 * Created by PhpStorm.
 * User: Hello Warm
 * Date: 2017/07/28
 * Time: 13:34
 */
namespace Admin\Model;
use Think\Model;
class NewsModel extends Model{
    public function search($pageSize=20)
    {

        /**************************************** 搜索 ****************************************/
        $where = array();
        if($cate_name = I('get.cate_name'))
            $where['cate_name'] = array('like', "%$cate_name%");
        if($role_name = I('get.role_name'))
            $where['role_name'] = array('like',  "%$role_name%");
        if($title = I('get.title'))
            $where['title'] = array('like',"%$title%");
        $where['local_id']=0;
        $where['del_flag']=0;
        /**************************************** 分页 ****************************************/
        $count = $this->alias('a')->join('left join role d on a.role_id=d.id left join news_cate b on a.id=b.news_id left join category c on c.cate_id=b.cate_id')->where($where)->count('distinct a.id');
     $page = new \Think\Page($count, $pageSize);
        // 配置翻页的样式
        $page -> setConfig('header','<li class="rows">共<b>%TOTAL_ROW%</b>条记录&nbsp;第<b>%NOW_PAGE%</b>页/共<b>%TOTAL_PAGE%</b>页</li>');
        $page->setConfig('last', '末页');
        $page->setConfig('first', '首页');
        $page -> setConfig('prev','上一页');
        $page -> setConfig('next','下一页');
        $page->setConfig('theme', '%FIRST%%UP_PAGE%%LINK_PAGE%%DOWN_PAGE%%END%%HEADER%');
        $pageString = $page->show();
        /************************************** 取数据 ******************************************/
        $newlist = $this->alias('a')->field('a.*,GROUP_CONCAT(c.cate_name) cate_name,role_name')->join('left join role d on a.role_id=d.id left join news_cate b on a.id=b.news_id  left join category c on c.cate_id=b.cate_id')->where($where)->limit($page->firstRow.','.$page->listRows)->group('a.id')->order('sort_id',desc)->select();
     // echo($this->getLastSql()) ;
        return array(
            'newlist'=>$newlist,
            'page'=>$pageString,
            'count'=>$count
        );
    }
    //添加新闻之后，将cate_id与news_id存放在news_cate中间表
    protected function _after_insert($data, $option)
    {
        $cateId = I('post.cate_id');
        $cateId = array_flip(array_flip($cateId));
        $cate = array();
        foreach($cateId as $v){
            if($v){
                $cate[] = $v;
            }
        }
      if($cate) {
            $ncModel = M('NewsCate');
            foreach ($cate as $v) {
            $ncModel->add(array(
             'news_id' => $data['id'],
             'cate_id' => $v,
                       ));
                   }
               }
    }


    public  function addImg($post,$file){
        if ($file['news_img']['error']<4) {
            //A. 处理上传的图片附件
            $cfg = array(
                'rootPath' => './Public/Uploads/', //保存根路径
            );
            $up = new \Think\Upload($cfg);
            //uploadOne()方法执行成功后会把附件(在服务器上)的名字和路径等相关信息给我们返回
            $z = $up->uploadOne($file);
            $bigimg = $up->rootPath . $z['savepath'] . $z['savename'];//大图路径名
            $smallimg = $up->rootPath . $z['savepath'] . 'small_' . $z['savename'];//小图路径名

            //B. 对上传好的图片制作缩略图
            $im = new \Think\Image();  //实例化Image对象
            $im->open($bigimg);//打开被处理的图片
            $im->thumb(100, 100, 6);//制作缩略图(默认有等比例缩放效果)
            $im->save($smallimg);//保存缩略图到服务器
            //把上传好的附件存储到数据库里边
            $post['news_big_img'] = ltrim($bigimg, '.');
            $post['news_small_img'] = ltrim($smallimg, '.');
        }
        return $this->add($post);
    }

    public  function updateImg($post,$file){
        if ($file['news_img']['error']<4) {
            //A. 处理上传的图片附件
            $cfg = array(
                'rootPath' => './Public/Uploads/', //保存根路径
            );
            $up = new \Think\Upload($cfg);
            //uploadOne()方法执行成功后会把附件(在服务器上)的名字和路径等相关信息给我们返回
            $z = $up->uploadOne($file);
            $bigimg = $up->rootPath . $z['savepath'] . $z['savename'];//大图路径名
            $smallimg = $up->rootPath . $z['savepath'] . 'small_' . $z['savename'];//小图路径名

            //B. 对上传好的图片制作缩略图
            $im = new \Think\Image();  //实例化Image对象
            $im->open($bigimg);//打开被处理的图片
            $im->thumb(100, 100, 6);//制作缩略图(默认有等比例缩放效果)
            $im->save($smallimg);//保存缩略图到服务器
            //把上传好的附件存储到数据库里边
            $post['news_big_img'] = ltrim($bigimg, '.');
            $post['news_small_img'] = ltrim($smallimg, '.');
        }
        return $this->save($post);
    }
}