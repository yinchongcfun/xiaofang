<?php
/**
 * Created by PhpStorm.
 * User: Hello Warm
 * Date: 2017/08/15
 * Time: 09:07
 */

namespace Home\Controller;


class OrganizationController extends CommonController {
    function  index(){
//通信手册
        $this->upload_url = $this->gettxl();
        $news=D('news');
        if(IS_GET){
            $news_info=$news->find($_GET['id']);
            if($news_info){
                $content=$news_info['content'];
                if(get_magic_quotes_gpc()){
                    $content=stripslashes($content);
                }
                $news_info['content']=htmlspecialchars_decode($content);
            }

            $this->news_info=$news_info;
            $this->display();

        }else{

            $this->display();
        }




    }

}