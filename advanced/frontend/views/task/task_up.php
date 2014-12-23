<?php
use yii\widgets\LinkPager;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>keke admin</title>


<link href="/public/tpl/css/admin_management.css" rel="stylesheet" type="text/css" />
<link href="/public/resource/css/buttons.css" rel="stylesheet" type="text/css" />
<link title="style1" href="/public/tpl/skin/default/style.css" rel="stylesheet" type="text/css" />
<!--<link title="style2" href="tpl/skin/light/style.css" rel="stylesheet" type="text/css" />-->
<script type="text/javascript" src="/public/resource/js/jquery.js"></script>
<script type="text/javascript" src="/public/resource/js/system/keke.js"></script>
<script type="text/javascript" src="/public/resource/js/in.js"></script>
</head>
<nav id="nav" class="nav m_h">
        <div class="container_24" >
        	<div class="menu grid_24 clearfix">
                <ul class="clearfix">
     <?php
        foreach($nav as $v){
     ?>
<li>
    <a href="<?php echo $v['nav_url']?>"  ><span><?php echo $v['nav_title']?></span></a>
</li>

<li class="line"></li>
<?php
        }
?>

                </ul>
                <!---->
                  <div class="operate po_ab">
                    	<a href="index.php?r=help" target="_blank" title="帮助中心">
                        	<span class="icon16 help reverse"></span>
帮助中心                        </a>
                   </div>
                <!---->
</div>
                <div class="clear"></div>
        </div>
    </nav>
 <div class="wrapper">
  <!--页面头部-->
  <header class="clearfix page_header">
  <div class="container_24 clearfix">
   <div class="clearfix po_re" >
   <!--面包屑-->
     <div class="breadcrumbs clearfix">
      <a href="index.html">首页</a> &gt;
  <a href="task_list-path-B3.html">任务大厅</a> &gt;
  <a href="task_list-path-A3B3.html">文案写作</a> &gt;
  <a href="task_list-path-A3B3.html">宣传册页</a>
   </div>
  <!--end 面包屑-->
<div class="grid_19" id="taskScroll">
<div class="mre_l_con clearfix">

  <div id="taskScroll">
   <div class="page_title ws_break clearfix">
   	<div class=" fl_l pt_15 mr_10 mb_5 hidden">
   		<img src="data/uploads/sys/ad/95164f3dc640dfd7b.jpg" alt="dsfds" class="pic_small">
   </div>
   
    <h2 class="title">
    	<strong class="red mr_10">￥<?php echo $list['task_cash'];?>元</strong>
<a href="task-task_id-28.html"><?php echo $list['task_title'];?></a>
    </h2>
    <div class="page_sub_title c666 mb_10">
       <span>任务发布时间：<?php echo date("Y-m-d H:i:s",$list['end_time']);?></span>
   <span class="border_l_c mar10">&nbsp;</span>
       <a class="mre_task_kind c333" href="javascript:void(0);" title="方案中标发放赏金，所需稿件1个，稿件单价￥72.00元，已交稿件1个，已中标1个"> <?php if($list['model_id']==1){?>
                                                                    单人悬赏
                                                              <?php  }  elseif($list['model_id']==2){?>
                                                                       多人悬赏
                                                                <?php  }  elseif($list['model_id']==3){?>
                                                                       计件悬赏
                                                                 <?php  }  elseif($list['model_id']==4){?>
                                                                       普通招标
                                                                 <?php  }  elseif($list['model_id']==5){?>
                                                                       订金招标
                                                                 <?php   } ?><span>&nbsp;</span></a>
       <span class="border_l_c mar10">&nbsp;</span>
       <span>编号：#<?php echo $list['task_id'];?></span>
   <span class="border_l_c mar10">&nbsp;</span>
       <span><font style="color:red"><?php echo $list['view_num'];?></font>人关注</span>
       <span class="border_l_c mar10">&nbsp;</span>
   <span></span>
</div>
    </div>
</div>
</div>
</div>
<div class="grid_5">
<div class="mre_r_con clearfix">
<div class="control clearfix">
      <!--start提交稿件-->
     	  <!--end 提交稿件-->
  <!--start延期加价-->
     	  <!--end 延期加价--> 
      <!--start发起投票-->
     	  <!--end 发起投票-->

  <div class="clearfix mt_5">
  	  <!--
  <div class="msg msg_ok block ">
  	状态：结束  </div>-->
  <div class="msg msg_ok block ">
  	任务已圆满结束，恭喜中标威客  </div>
  <div>
  	<span class="c333"></span>
    <span class="red d_time" ed="" title=""></span>
  </div>
                 
  </div>
     </div>
</div>
</div>
</div>
   
   
   <div class="clear"></div>
    <!--页面子导航-->
<div id="header_nav" class="po_re grid_19">
     <nav class="clearfix page_nav po_re" id="top_nav">
       <ul>
         <li class="selected"><a href="task-task_id-28.html" title="描述"><span class="icon16 notepad-2 mr_5"></span>描述</a></li>
         <li ><a href="task-task_id-28-view-work.html" title="稿件"><span class="icon16 spechbubble-sq-line mr_5"></span>稿件 <span class="c999">[<span id="work_num">1</span>]</span></a></li>		 
         <li ><a href="task-task_id-28-view-comment.html" class="留言"><span class="icon16 spechbubble-2 mr_5"></span>留言 <span class="c999">[0]</span></a></a></li>
         <li ><a href="task-task_id-28-view-mark.html" title="评价"><span class="icon16 cert mr_5"></span>评价<span class="c999">[2]</span></a></a></li>
         	         
<!--  <li class="border_n"><a href="javascript:void(0);" class="" title="停靠在左侧"><span class="icon16 arrow-bottom-left block" id="arrow-bottom-left">停靠在左边</span></a></li> -->
       </ul>
 </nav>
 <!--工具栏-->
        <div class="operate po_ab hidden">
                  <a href="javascript:setfontsize();" class="" title="文字大小"><div class="icon16 text-letter-t">文字大小</div></a>
          <a href="javascript:setprint('details');" class="" title="打印"><div class="icon16 print">打印</div></a>
       </div>
      <!--end 工具栏-->
     <div class="clear"></div> 
</div>
    <!--end 页面子导航-->
   <div class="clear"></div>
  </div> 
 </header>
 <!--end 页面头部-->
 <!--详细内容区-->
  <section class="content">
  <!--布局框-->  
  <div class="container_24">
  	<!--章节1-->
   <section class="clearfix section">
  	<!--左边导航 start-->
<!-- <div class="second_menu container_24 po_ab hidden" id="left_nav">
        <div class="suffix_23 pull_1">
            <nav class="minor_nav box">
                <ul class="nav_group">
                   <li >
         	<a href="task-task_id-28.html" title="描述" class="selected">
            	<div class="icon16 notepad-2 mr_5 block">描</div>
            </a>
         </li>
         <li>
         	<a href="task-task_id-28-view-work.html" title="稿件[1]" >
            	<div class="icon16 spechbubble-sq-line mr_5 block">稿</div>
            </a>
         </li>
         <li >
         	<a href="task-task_id-28-view-comment.html" title="留言[0]" >
            	<div class="icon16 spechbubble-2 mr_5 block">留</div>
            </a>
         </li>
        <li>
        	<a href="task-task_id-28-view-mark.html" title="评价[2]" >
            <div class="icon16 cert mr_5 block">评</div>
            </a>
         </li>
                        </ul>
                <ul class="nav_group">
<li>
         	<a href="javascript:void(0);" class="" title="停靠在顶部">
            	<div class="icon16 arrow-top-right block" id="arrow-top-right">停止</div>
            </a>
         </li>
                </ul>
            </nav>
        </div>
    </div> -->
  	<!--左边导航 end-->
 
   
    <!---->
    <div class="show_panel container_24 ">
        <div class="grid_19">
 <div class="panel clearfix box">
      <!--布局 左-->
       <div class="clearfix">
        <!--布局 内边距-->
         <div class="pad20">
          <!--标题头部-->
         <header class="hidden">
          <div class="pad5 border_b_c po_re clearfix">
            <h2>说明</h2>
          </div>  
        </header>
       <!--end 标题头部-->
       <!--任务地图-->
<!--end任务地图-->
       <!--内容1-->
       <details open class="mb_20 " id="details">
       <!--标题-->
        <summary  class="fontb">需求</summary>
         <!--内容-->
      
<pre class="ws_prewrap ws_break" ><p style="border: 0px; margin: 0px; padding: 0px; color: rgb(51, 51, 51); font-family: 宋体, Arial, Helvetica, sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 25px; orphans: 2; text-align: -webkit-auto; text-indent: 0px; text-transform: none; white-space: pre-wrap; widows: 2; word-spacing: 0px; -webkit-text-size-adjust: auto; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); ">1.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;福彩双色球2元可中1000万</p><p style="border: 0px; margin: 0px; padding: 0px; color: rgb(51, 51, 51); font-family: 宋体, Arial, Helvetica, sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 25px; orphans: 2; text-align: -webkit-auto; text-indent: 0px; text-transform: none; white-space: pre-wrap; widows: 2; word-spacing: 0px; -webkit-text-size-adjust: auto; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); ">2.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;一样的彩票站，不一样的服务</p><p style="border: 0px; margin: 0px; padding: 0px; color: rgb(51, 51, 51); font-family: 宋体, Arial, Helvetica, sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 25px; orphans: 2; text-align: -webkit-auto; text-indent: 0px; text-transform: none; white-space: pre-wrap; widows: 2; word-spacing: 0px; -webkit-text-size-adjust: auto; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); ">3.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;本站免费为彩民量血压</p><p style="border: 0px; margin: 0px; padding: 0px; color: rgb(51, 51, 51); font-family: 宋体, Arial, Helvetica, sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 25px; orphans: 2; text-align: -webkit-auto; text-indent: 0px; text-transform: none; white-space: pre-wrap; widows: 2; word-spacing: 0px; -webkit-text-size-adjust: auto; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); ">4.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;彩票站WIFI覆盖</p><p style="border: 0px; margin: 0px; padding: 0px; color: rgb(51, 51, 51); font-family: 宋体, Arial, Helvetica, sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 25px; orphans: 2; text-align: -webkit-auto; text-indent: 0px; text-transform: none; white-space: pre-wrap; widows: 2; word-spacing: 0px; -webkit-text-size-adjust: auto; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); ">5.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;如果您累了，电子宾馆彩票站为您提供休息的椅子和茶水</p><p style="border: 0px; margin: 0px; padding: 0px; color: rgb(51, 51, 51); font-family: 宋体, Arial, Helvetica, sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 25px; orphans: 2; text-align: -webkit-auto; text-indent: 0px; text-transform: none; white-space: pre-wrap; widows: 2; word-spacing: 0px; -webkit-text-size-adjust: auto; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); ">6.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;电子宾馆彩票站为了回馈彩民朋友开展二次抽奖活动</p><p style="border: 0px; margin: 0px; padding: 0px; color: rgb(51, 51, 51); font-family: 宋体, Arial, Helvetica, sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 25px; orphans: 2; text-align: -webkit-auto; text-indent: 0px; text-transform: none; white-space: pre-wrap; widows: 2; word-spacing: 0px; -webkit-text-size-adjust: auto; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); ">7.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;电子宾馆彩票站买彩票也可以积分，一注彩票积2分，满500分赠送双色球一注</p>KPPW2.2安装包默认数据均为测试演示数据，无任何商业意图，请各位站长测试后自行删除。如有违规，自行承责。</pre> 
      </details>
      <!--end 内容1-->
  <!--start补充需求-->
     	  <!--end 补充需求-->
      <!--任务补充需求-->
       <!--end 任务补充需求-->

     <!--任务附件-->
     <!--end 任务附件-->

   </div>
   <!--end 布局 内边距-->
  </div>
  <!--end 布局 左-->
  
  <!--工具栏-->
          <div class="operate fl_r mt_10 hidden">
 
            <a href="index.html" class="" title="返回首页"><div class="icon16 home">返回首页</div></a>
 
            <a href="javascript:void(0)" class="scrollTop" title="返回顶部"><div class="icon16 arrow-top">返回顶部</div></a>
          </div>
        <!--end 工具栏-->
  </div>
  </div>
  
  <div class="grid_5  clearfix mre_btns">
 	<!--作者信息-->
            	<div class="shop_author box normal2 clearfix mb_10">
            	<div class="inner">
            		<div class="box_header">
                	<h2 class="title">雇主信息</h2>
                </div>
<div class="pad5 clearfix border_b_c">
<div class="clearfix">
                        <div class="t_c fl_l mr_10">
                                <img src='http://www.56ig.cn/data/avatar/system/2_small.jpg' uid='2' class='pic_small'>                         </div>
<p class="shop_sign fl_l">
                            <a href="space-member_id-2.html" class="font14b block" target="_blank">猪八戒</a>
<img src="data/uploads/sys/mark/211574fbede3ae7ae9.gif?fid=2881" align="absmiddle" title="头衔 ：一级雇主&#13;&#10;信誉值：80&#13;&#10;等级：1">                        </p>
</div>
                    <p>
                    	<!--卖家的认证信息-->
                                            </p>
<p  class="clearfix"><span class="fl_l">好评率：</span><span class="cc00 ml_10 pl_5 fl_l">100%</span>
<a href="javascript:void(0);" class="fl_r" onclick="add_follow('add_focus','2');"  id="add_follow_2">加关注</a></p>
</p>
<p><span>付款及时性<em class="cc00">5.0分</em></span><span class="stars a5 s5"><span class="star_selected"></span></span></p></span><p><span>合作愉快度<em class="cc00">5.0分</em></span><span class="stars a5 s5"><span class="star_selected"></span></span></p></span>        
            	</div>
<div class="shop_author_link clearfix">
<a href="space-member_id-2.html" target="_blank" class="fl_l">查看店铺空间</a>
<a href="javascript:void(0)" onclick="sendMessage(2,'猪八戒')" class="fl_r">发送站内信</a>
</div>
</div>
</div>	
            <!--end 作者信息-->
<div class="">
</div>

<div class="award clearfix box normal2 mb_10">
<div class="inner">
<div class="award_top  clearfix">
<div class="box_header clearfix">
<h2 class=" title">
中标者</h2>
</div>
<div class="srewar_user  clearfix">
<ul class="clearfix pad5">
<li><a href="space-member_id-1.html" title="admin"><img src='http://www.56ig.cn/data/avatar/default/man_small.jpg' uid='1' class='pic_small'></a></li>
</ul>
</div>
</div>
</div>

 </div>	
<a class="button block mt_10" href="javascript:void(0)"  onclick="report('task','2','28','2','猪八戒');" title="举报">
         	<span class="icon16 hand-1"></span>
举报         	</a>
<a class="button block" href="javascript:void(0)" onclick="favor('task_id','task','preward','2','28','彩票站宣传单设计','28')">
<span class="star-fav-empty  icon16"></span>
0 次收藏</a>
<a class="button block" href="index.php?do=ajax&view=share&oid=1&title=彩票站宣传单设计" id="share1" onclick="return false;" onmouseover="share(this)" title="分享">
         	<span class="icon16 share"  id="test_aaa"></span>
分享 </a>



  
  
      
       <div class="clear"></div>
        
       </div>
   
   <!---->
   </section>
   <!--end 章节1-->
   <!--任务详情_底部广告-->
   <div class='adv'><a href='http://www.kppw.cn' target='_blank' title='adv'><img src='/public/data/uploads/sys/ad/adv.jpg' width='' height='' alt='adv' title='adv'></a></div>  <!--其他推荐-->
    <aside class="clearfix mb_10">
     <div class="grid_8">
      <div class="box  normal2">
        <div class="inner">
        	<div class="box_header">
          <h3 class="title">关注<span class="c369"><a href="task_list-path-B3A3.html" target="_blank">文案写作</a></span>的人还关注了</h3>
      </div>
           <div class="clearfix box_detail">

               <ul>
               	                   <li class="t_c"><span class="c999">暂无相应记录</span></li>
               </ul>

           </div>
        </div>
      </div>
     </div>
     <div class="grid_8">
      <div class="box  normal2">
       <div class="inner">
       	<div class="box_header">
         <h3 class="title">你可能感兴趣的任务</h3>
     	</div>
         <div class="clearfix box_detail">
        <ul>
        	
               	                   <li class="t_c"><span class="c999">暂无相应记录</span></li>
          </ul>
        </div>
       </div>
      </div>
     </div>
     <div class="grid_8">
       <div class="box  normal2">
         <div class="inner">
         	<div class="box_header">
            <h3 class="title">浏览历史记录</h3>
        	</div>
              <div class="clearfix box_detail">
                <ul>
               	<li>
<div class="item clearfix">
<a href="task-task_id-28.html" target="_blank" title="彩票站宣传单设计"><span class="c900">
￥80.00元</span> 彩票站宣传单设计</a>
</div>
</li>	
<li>
<div class="item clearfix">
<a href="task-task_id-57.html" target="_blank" title="进驻商场&企业生活馆餐饮店的竞标报告"><span class="c900">
￥100.00元</span> 进驻商场&企业生活馆餐饮店的竞标报告</a>
</div>
</li>	
<li>
<div class="item clearfix">
<a href="task-task_id-34.html" target="_blank" title="淘宝网店推广 10元1稿 简单快捷"><span class="c900">
￥120.00元</span> 淘宝网店推广 10元1稿 简单快捷</a>
</div>
</li>	
</ul>
               </div>
                                    
         </div>
        </div>
     </div>
    </aside>
    <!--end 其他推荐-->
    </div>
    <!--end 布局框-->     	
   </section>
   <!--end 详细内容区-->
  </div>
<!--end 页面内容区-->

<script type="text/javascript">
var guid  	 	= parseInt(2)+0;
var task_id		= parseInt(28)+0;
var uid 		= parseInt('')+0;
var task_status = parseInt(8)+0;
var basic_url	= "index.php?do=task&task_id=28";	
var datePrv     = "";
var username    = "";
var delay_count = parseInt('0')+0;
var delay_total  = parseInt('3')+0;
var if_can_hand = parseInt(1)+0;
var trust_mode  = "0";

</script>
<script src="resource/js/uploadify/jquery.uploadify-3.1.min.js" type="text/javascript"></script>
<link href="resource/js/uploadify/uploadify.css" rel="stylesheet">
<script type="text/javascript" src="resource/js/jqplugins/jQuery.mouseDelay.js"></script>
<script type="text/javascript"> 
In.add('preward_task',{path:"task/preward/tpl/default/preward_task.js",type:'js'});
In('print','task','preward_task');

</script> 


