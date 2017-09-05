<?php
/**
 * Created by PhpStorm.
 * User: Hello Warm
 * Date: 2017/08/15
 * Time: 15:39
 */
namespace Home\Controller;

class LocalRankController extends  CommonController {

     function  rank_show(){
         //通信手册
         $this->upload_url = $this->gettxl();

         $news=D("news");
         $rank_sql="SELECT
            obj.local_id,obj.news_sum,obj.local_name,@rownum := @rownum + 1 AS rownum
            FROM(
                SELECT news.local_id,local.local_name,COUNT(news.local_id) as news_sum  
                FROM news,local 
                WHERE del_flag=0 AND `status`=1 AND news.local_id=local.local_id and news.add_time>=".(time()-30*86400).
                 " and news.add_time<=".time()."
                GROUP BY news.local_id ORDER BY news_sum DESC
            ) AS obj,
            (SELECT @rownum := 0) r";

//         dump((time()-30*86400));
//         dump(time());
//        dump( $sql = $news->query($rank_sql)->fetchSql(true));
         $local_rank=$news->query($rank_sql);
//         dump($local_rank);
         $this->assign('local_rank',$local_rank);

         $this->display();
     }
}