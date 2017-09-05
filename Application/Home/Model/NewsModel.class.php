<?php
namespace Home\Model;
use Think\Model;
/**
 * Created by PhpStorm.
 * User: Hello Warm
 * Date: 2017/7/30
 * Time: 12:13
 */
class NewsModel extends Model
{
    public function getCate($news,$cate_id){
        $info =array();
        foreach ($news as $v){
            if($v['cate_id']==$cate_id){
                $info[]=$v;
            }
        }
        return $info;
    }
}