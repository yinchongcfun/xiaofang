<?php
namespace Home\Controller;

use Home\Controller;
//use Think\Controller;
class IndexController extends CommonController   {
    public function index(){
        //通信手册
        $this->upload_url=$this->gettxl();
//        dump($a);
       //增加标题信息
        $cateModel=D('category');
       // $maps['id']=array('between','1,5');
        $catemsg= $cateModel->where('cate_id>1 and cate_id<7')->select();
        $this->assign('catemsg',$catemsg);

       //所有信息添加页面
        $newsModel=D('News');
        $newsmsg=$newsModel->order('id desc')->where("del_flag=0 and status=1")->select();
        $catemsgAll= $cateModel->select();
        $info = array();
        foreach($catemsgAll as $v){
            $info[$v['cate_id']] = $newsModel->getCate($newsmsg,$v['cate_id']);
        }
//        dump($info);
        $this->assign('info',$info);
        //精彩视频获取


        $sql="select * from   news,news_cate where news.id=news_cate.news_id  and news_cate.cate_id=21 and STATUS=1 and news.del_flag=0 ORDER BY sort_id limit 0,1";
        $videoOne=$newsModel->query($sql);
        $this->assign('video',$videoOne[0]);
        //新闻头条显示部分
//        $topInfo1=$newsModel->query("SELECT * from news where del_flag=0 and is_top=1 AND sort_id =1 limit 1");
        $topInfo1=$newsModel->where("del_flag=0 and is_top=1 AND sort_id =1 and status=1")->limit(1)->find();
//        $topInfo2=$newsModel->query("SELECT * from news where del_flag=0 and is_top=1 and status=1  AND sort_id =2 ORDER BY add_time desc");
        $topInfo2=$newsModel->query("SELECT * from news where del_flag=0 and is_top=1 and status=1  AND sort_id =2 ORDER BY add_time desc LIMIT 2");
//        dump($topInfo1);
        $this->topInfo1=$topInfo1;
        $this->topInfo2=$topInfo2;

        //头条显示
        $newstop=$newsModel->where('is_top=1 and  status=1')->order('id desc')->find();
        $this->assign('newstop',$newstop);


        //轮播图
        $rotaion_sql='SELECT * FROM news where is_rotaion=1 AND del_flag=0 and status=1 ORDER BY add_time DESC ';
        $rotaion=$newsModel->query($rotaion_sql);
        $this->assign('rotaion',$rotaion);

        //栏目排名
        $rank_sql="SELECT  obj.local_id, obj.news_sum, obj.local_name,
                    CASE
                    WHEN @rowtotal = obj.news_sum THEN
                         @local_rank
                    WHEN @rowtotal := obj.news_sum THEN
                         @local_rank :=@local_rank + 1
                    WHEN @rowtotal = 0 THEN
                         @local_rank :=@local_rank + 1
                    END AS local_rank
                    FROM(
                    SELECT news.local_id,local.local_name,COUNT(news.local_id) as news_sum  
                    FROM news,local 
                    WHERE del_flag=0 AND `status`=1 AND news.local_id=local.local_id 
                    GROUP BY news.local_id ORDER BY news_sum DESC
                    ) AS obj,
                    (SELECT @local_rank := 0 ,@rowtotal := NULL) r";
        $local_rank=$newsModel->query($rank_sql);
//        dump($local_rank);
        $this->assign('local_rank',$local_rank);

 //     1综合新闻
        $maxIdSql="SELECT * from news   where status=1 and local_id >0 and del_flag=0 AND role_id>0
              order by id desc  LIMIT 0,16";
        $maxIdRes=$newsModel->query($maxIdSql);
        foreach ($maxIdRes as $k=>$v){
            $info=$newsModel->field('title')->where('id='.$v['id'])->find();
            $maxIdRes[$k]['title']=$info['title'];
        }
//        dump($maxIdRes);
        $this->localInfo=$maxIdRes;

//       2司令部
        $maxIdSql2="SELECT max(id) as id,news.local_id,`local`.local_name
                    FROM news,`local` 
                    WHERE news.local_id=`local`.local_id AND role_id=1  AND news.`status`=1  AND del_flag=0
                    GROUP BY local_id ORDER BY id DESC";
        $maxIdRes2=$newsModel->query($maxIdSql2);
        foreach ($maxIdRes2 as $k=>$v){
            $info2=$newsModel->field('title')->where('id='.$v['id'])->find();
            $maxIdRes2[$k]['title']=$info2['title'];
        }
//        dump($maxIdRes);
        $this->localInfo2=$maxIdRes2;

//       3政治
        $maxIdSql3="SELECT max(id) as id,news.local_id,`local`.local_name
                    FROM news,`local` 
                    WHERE news.local_id=`local`.local_id AND role_id=2  AND news.`status`=1  AND del_flag=0
                    GROUP BY local_id ORDER BY id DESC";
        $maxIdRes3=$newsModel->query($maxIdSql3);
        foreach ($maxIdRes3 as $k=>$v){
            $info3=$newsModel->field('title')->where('id='.$v['id'])->find();
            $maxIdRes3[$k]['title']=$info3['title'];
        }
//        dump($maxIdRes3);
        $this->localInfo3=$maxIdRes3;

//       4后勤
        $maxIdSql4="SELECT max(id) as id,news.local_id,`local`.local_name
                    FROM news,`local` 
                    WHERE news.local_id=`local`.local_id AND role_id=3  AND news.`status`=1  AND del_flag=0
                    GROUP BY local_id ORDER BY id DESC";
        $maxIdRes4=$newsModel->query($maxIdSql4);
        foreach ($maxIdRes4 as $k=>$v){
            $info4=$newsModel->field('title')->where('id='.$v['id'])->find();
            $maxIdRes4[$k]['title']=$info4['title'];
        }
//        dump($maxIdRes3);
        $this->localInfo4=$maxIdRes4;

//      5防火

        $maxIdSql5="SELECT max(id) as id,news.local_id,`local`.local_name
                    FROM news,`local` 
                    WHERE news.local_id=`local`.local_id AND role_id=4  AND news.`status`=1  AND del_flag=0
                    GROUP BY local_id ORDER BY id DESC";
        $maxIdRes5=$newsModel->query($maxIdSql4);
        foreach ($maxIdRes5 as $k=>$v){
            $info5=$newsModel->field('title')->where('id='.$v['id'])->find();
            $maxIdRes5[$k]['title']=$info5['title'];
        }
//        dump($maxIdRes3);
        $this->localInfo5=$maxIdRes5;

//      6宣传

        $maxIdSql6="SELECT max(id) as id,news.local_id,`local`.local_name
                    FROM news,`local` 
                    WHERE news.local_id=`local`.local_id AND role_id=5  AND news.`status`=1  AND del_flag=0
                    GROUP BY local_id ORDER BY id DESC";
        $maxIdRes6=$newsModel->query($maxIdSql4);
        foreach ($maxIdRes6 as $k=>$v){
            $info6=$newsModel->field('title')->where('id='.$v['id'])->find();
            $maxIdRes6[$k]['title']=$info6['title'];
        }
//        dump($maxIdRes3);
        $this->localInfo6=$maxIdRes6;

        //领导讲话
        $ldjh_sql='select * from   news,news_cate where news.id=news_cate.news_id  and news_cate.cate_id=23 and STATUS=1 and news.del_flag=0 ORDER BY sort_id limit 0,2';
        $news_leader=$newsModel->query($ldjh_sql);
        $this->assign('news_leader',$news_leader);

        //领导讲话
        //select * from   news,news_cate where news.id=news_cate.news_id  and news_cate.cate_id=21 and STATUS=1 and news.del_flag=0 ORDER BY sort_id limit 0,1"
        $zxgz_sql='select * from   news,news_cate where news.id=news_cate.news_id  and news_cate.cate_id=27 and STATUS=1 and news.del_flag=0 ORDER BY sort_id limit 0,8';
        $news_specical_work=$newsModel->query($zxgz_sql);
        $this->assign('news_specical_work',$news_specical_work);

        $this->display();

    }
}