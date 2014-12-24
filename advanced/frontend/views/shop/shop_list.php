<!DOCTYPE HTML>
<!--[if lt IE 7]> <html dir="ltr" lang="zh-cn" id="ie6"> <![endif]-->
<!--[if IE 7]>    <html dir="ltr" lang="zh-cn" id="ie7"> <![endif]-->
<!--[if IE 8]>    <html dir="ltr" lang="zh-cn" id="ie8"> <![endif]-->
<!--[if gt IE 8]><!--> <html dir="ltr" lang="zh-cn"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<title>商品列表-客客出品专业威客系统</title>
<meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE,chrome=1">
<meta name="keywords" content="商品列表-客客出品专业威客系统">
<meta name="description" content="商品列表-客客出品专业威客系统">
<meta name="generator" content="客客出品 2.2" />
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style” content=black" /> 
<meta name="author" content="kekezu" />
<meta name="copyright" content="Copyright &#169; 2010 -2013 kekezu. All rights reserved" />
<link rel="shortcut icon" href="favicon.ico" />
<link rel="apple-touch-icon" href="favicon.ico"/>
<script type="text/javascript">
var SITEURL= "http://www.wk.com",
    SKIN_PATH = '/public/tpl/default',
LANG       = 'cn',
    INDEX      = 'shop_list',
    CHARSET    = "utf-8";
</script>
<link href="/public/resource/css/reset.css" rel="stylesheet" charset="utf-8">
<!--公用样式-->
<link href="/public/resource/css/base.css" rel="stylesheet" charset="utf-8">
<!--布局样式-->

<link rel="stylesheet" media="all" href="/public/resource/css/layout/960.min.css" charset="utf-8">


<!--box样式-->
<link href="/public/resource/css/box.css" rel="stylesheet" charset="utf-8">

<link href="/public/resource/css/animate.css" rel="stylesheet" charset="utf-8">
<link href="/public/tpl/default/css/common.css" rel="stylesheet" charset="utf-8">
<link href="/public/tpl/default/theme/blue/css/blue_style.css" rel="stylesheet" charset="utf-8">
<link href="/public/resource/js/jqplugins/tipsy/tipsy.css" rel="stylesheet">
<link href="/public/resource/css/button/stylesheets/css3buttons.css" rel="stylesheet" charset="utf-8">
<!--[if lt IE 9]>
<script src="/public/resource/js/system/html5.js" type="text/javascript"></script>
<![endif]-->


<!--jQuery1.4.4库-->
<script src="/public/resource/js/jquery.js" type="text/javascript"></script>
<script src="lang/cn/script/lang.js" type="text/javascript"></script>
<script src="/public/resource/js/system/keke.js" type="text/javascript"></script>
<script src="/public/resource/js/in.js" type="text/javascript"></script>
<script type="text/javascript">
 //js异步加载预定义
 	In.add('mouseDelay',{path:"/public/resource/js/jqplugins/jQuery.mouseDelay.js",type:'js'});
In.add('waypoints',{path:"/public/resource/js/jqplugins/waypoints/waypoints.min.js",type:'js'});
In.add('custom',{path:"/public/resource/js/system/custom.js",type:'js',rely:['waypoints']});
 	In.add('form',{path:"/public/resource/js/system/form_and_validation.js",type:'js'});
In.add('print',{path:"/public/resource/js/jqplugins/jquery.print.js",type:'js'});
In.add('task',{path:"/public/resource/js/system/task.js",type:'js'});
 	In.add('calendar',{path:"/public/resource/js/system/script_calendar.js",type:'js'}); 
In.add('xheditor',{path:"/public/resource/js/xheditor/xheditor.js",type:'js'});  
 	In.add('script_city',{path:"/public/resource/js/system/script_city.js",type:'js'}); 
In.add('lavalamp',{path:"/public/resource/js/jqplugins/lavalamp/jquery.lavalamp-1.3.5.min.js",type:'js'});
In.add('tipsy',{path:"/public/resource/js/jqplugins/tipsy/jquery.tipsy.js",type:'js'});
In.add('autoIMG',{path:"/public/resource/js/jqplugins/autoimg/jQuery.autoIMG.min.js",type:'js'});
 	In.add('slides',{path:"/public/resource/js/jqplugins/slides.min.jquery.js",type:'js'});
In.add('ajaxfileupload',{path:"/public/resource/js/system/ajaxfileupload.js",type:'js'});
In.add('header_top',{path:"/public/resource/js/system/header_top.js",type:'js',rely:['mouseDelay']}); 
In.add('lazy',{path:"/public/resource/js/system/lazy.js",type:'js'});
In.add('pcas',{path:"/public/resource/js/system/PCASClass.js",type:'js'});
  		

</script>



</head>
    <body id="shop_list">

<div class="blue_style" id="wrapper">

        <div id="append_parent">
        </div>
        <div id="ajaxwaitid">
        	<div>
        	<img src="/public/tpl/default/theme/blue/img/system/loading.gif" alt="loading"/>
请求处理中...</div>
</div>
 
<!--无刷新临时替换层-->
        <div id="noflushwarper">
        	<div id="noflushwarper_sub"></div>
        </div>
 	
<!--body start-->


<!--顶部广告位 start-->
<div class="t_c site_messages">
</div>
<!--顶部广告位-->




    <!--头部 start-->
    <header class="header" id="pageTop">
        <div class="container_24 clearfix">
        	<!--logo start-->
            <hgroup class="grid_7 logo">
             	 <h1><a href="index.php">
             	 	<img src="/public/tpl/default/theme/blue/img/style/logo.png"
 title="客客出品专业威客系统" alt="客客出品专业威客系统"></a></h1>
            </hgroup>
            <!--logo end-->
            
            <div id="search" class="grid_12 m_h">
            	
            	
            	<!--主搜索 start-->
                <div class="search clearfix po_re">
                    <!--搜索框和选项 start-->
                    <form action="" method="post" id="frm_search" class="clearfix fl_l">
                    <div class="search_box">
                        <div class="fl_l search_selcecter">
                        	<div id="search_select" class="search_options">
                        	                           		 <a href="javascript:void(0);" class="selected" rel="task_list"><span>任务</span>▼</a>
                               		 <a href="javascript:void(0);" class="hidden"   rel="task_list">任务</a>
                           	 	<a href="javascript:void(0);" class="hidden"   rel="shop_list">商品</a>
                             </div>
                        </div>
<input type="text" name="search_key" onkeydown="search_keydown(event);" id="search_key" class="fl_l search_input txt_input togg c999"
 value="输入任务/商品" 
   x-webkit-speech x-webkit-grammar="bUIltin:search" lang="zh-CN">
                    </div>
</form>
                    <!--搜索框和选项 end-->
                    <!--搜索提交 start-->
                    <div class="fl_l header_btn">
                    	<button class="search_btn" id="search_btn" type="button" onclick="topSearch();"><span class="icon magnifier"></span>搜索</button>
                    </div>
                    <!--搜索提交 end-->
                </div>
                <!--主搜索 end-->

            </div>
            


            	<!--用户登录注册 start-->

                <div class="user_box clearfix grid_5">
                	<!--注册登录按钮 start-->
<?php
    $session=new \yii\web\Session();
    if(!$session->get("user_name")){
     
?>           	<ul id="login_sub" class="user_login ">
                        <li><a href="index.php?r=index/register" class="m_h">免费注册</a></li>
                        <li><a href="index.php?r=index/login">登录</a></li>
                    </ul>
<?php
   
    }else{
       //echo $session->get("user_name");
?>
                    <!--注册登录按钮 end--> 
<div class="clear"></div>

                    <!--登录成功 start-->
                    <div id="logined" >
                        
                    	<!--用户登录后内容 start-->
                        <ul class="user_logined clearfix">
                            <li id="avatar">
                            	<a href="index.php?r=user/index" title="" rel="user_menu">
                                            <img src='/public/data/avatar/default/man_small.jpg' uid='' class='pic_small'>     
                                            <span class="user_named m_h"><?php echo $session->get("user_name");?></span>
                            	</a>
<!--用户登录后导航菜单 start-->
<div id="user_menu" class="user_nav_pop grid_5 alpha omega hidden m_h">
 <ul class="nav_list clearfix">
<li class="clearfix"><a href="index.php?do=user&view=finance&op=detail" title="金钱 | 元宝" id="money"> <div class="icon16 cur-yen reverse"></div>￥0.00元| ￥0.00元</a></li>
<li class="clearfix"><a href="index.php?do=release" title="发布任务" class="selected" ><div class="icon16 doc-new reverse"></div>发布任务</a></li>
<li class="clearfix"><a href="index.php?do=shop_release" title="发布商品" class="selected"><div class="icon16 doc-new reverse"></div>发布商品</a></li>
<li class="clearfix hidden" id="manage_center"><a href="control/admin/index.php" title="管理中心" ><div class="icon16 key reverse"></div>管理中心</a></li>
<li class="clearfix"><a href="index.php?do=user&view=index" title="用户中心"><div class="icon16 cog reverse"></div>用户中心</a></li>
<li class="clearfix"><a href="http://127.0.0.1/weike/index.php?do=space&member_id=" title="我的店铺" id="space"><div class="icon16 compass reverse"></div>我的店铺</a></li>
<!--<li class="clearfix"><a href="index.php?do=user&view=message" title="站内信"><div class="icon16 mail reverse"></div>站内信</a></li>-->
<li class="clearfix"><a  title="退出" href="index.php?r=index/logout">退出</a></li>
                         </ul>
                    </div>
                    <!--用户登录后导航菜单 end-->
</li>
                            <li class="line m_h"></li>
                            <li class="logout m_h"><a title="站内信" href="index.php?do=user&view=message">站内信</a></li>
                            <li class="clear"></li>
                        </ul>
                    
                        <!--用户登录后内容 end-->


                    </div>
                    <?php
    }
                    ?>
                    <!--登录成功 end-->
                    
                    
                    <div class="clear"></div>
                </div>
                <!--用户登录注册 end-->
      
            <!--移动端菜单-->
<div class="m_ctrl">
<a class="icon32 zoom reverse" href="#" rel="search"></a>
            <a class="icon32 align-just reverse" href="#" rel="nav"></a>
</div>
            <!--移动端菜单 end-->

            

        </div>
     
    </header>
    <!--头部 end-->
    <nav id="nav" class="nav m_h">
        <div class="container_24" >
        	<div class="menu grid_24 clearfix">
                <ul class="clearfix">
     <?php
     $nav= (new \yii\db\Query())
                ->select('nav_title, nav_url')
                ->from('wk_witkey_nav')
                ->all();
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
    <div class="clear"></div>
<div class="wrapper">      
        <!--页面头部-->
        <header class="clearfix page_header">
        	<div class="container_24">
        	
<div class='adv'><a href='http://www.kppw.cn' target='_blank' title='adv1'><img src='data/uploads/sys/ad/adv.jpg' width='' height='' alt='adv1' title='adv1'></a></div>  
            <!--页面导航-->
            <div class="breadcrumbs clearfix">
                <a href="index.php">首页</a> &gt; <span>商城大厅</span>
              </div>
            <!--end 页面导航-->
          </div>
        </header> 
        <!--end 页面标题-->
        
        
        
        
        
        
        <!--主内容-->
        <section class="clearfix content">
            <div class="container_24">
            	
    	<div class="clear"></div>

  <!--大厅列表_头部二栏广告 start-->
 		   <!--大厅列表_头部二栏广告 end-->
<div class="clear"></div>
                <div class="box mb_10 clearfix">
                	<div class="grid_24">
                    <!--筛选条件-->
                    <div class="filter box normal po_re">
                    	<div class="inner">
                      <!--条件列表-->
                      <div class="condition_list pad10" > 
                        <!--分类-->
                        <dl class="condition clearfix">
                            <dt class="grid_2 omega">
                                商城分类                            </dt>
                            <dd class="grid_21">
                                <a href="index.php?do=shop_list&path="    class='selected' >全部 </a>
                                <a href="index.php?do=shop_list&path=A441" >品牌设计</a>
                                <a href="index.php?do=shop_list&path=A2" >网站开发</a>
                                <a href="index.php?do=shop_list&path=A201" >创意祝福</a>
                                <a href="index.php?do=shop_list&path=A249" >网游服务</a>
                                <a href="index.php?do=shop_list&path=A3" >文案写作</a>
                                <a href="index.php?do=shop_list&path=A335" >建筑/装修</a>
                                <a href="index.php?do=shop_list&path=A211" >头脑风暴</a>
                                <a href="index.php?do=shop_list&path=A350" >照片美化/编辑</a>
                                <a href="index.php?do=shop_list&path=A234" >法律服务</a>
                                <a href="index.php?do=shop_list&path=A160" >起名取名</a>
                                <a href="index.php?do=shop_list&path=A357" >影视/配音/歌词</a>
                                <a href="index.php?do=shop_list&path=A192" >生活服务</a>
                                <a href="index.php?do=shop_list&path=A218" >移动应用</a>
                                <a href="index.php?do=shop_list&path=A240" >招聘找人</a>
                                <a href="index.php?do=shop_list&path=A121" >软件开发</a>
                                 
                            </dd>
                        </dl>
                         <!--end 分类-->
                       
                      	  <!--条件1-->
                          <dl class="condition clearfix">
                            <dt class="grid_2 omega">商品种类</dt>
                            <dd class="grid_21">
                            	                                <a href="index.php?do=shop_list&path="  class="selected" >全部</a> 
    
    <a href="index.php?do=shop_list&path=C7"  >服务</a> 
                                    
    <a href="index.php?do=shop_list&path=C6"  >作品（源码）</a> 
                                                                </dd>
                           </dl>
   
                           <div id="condition_list" style="display:none;">
                           <!--条件2-->
                           <dl class="condition clearfix">
                            <dt class="grid_2 omega">商品金额</dt>
                            <dd class="grid_21">
                                        <span id="general_search" >
                                        	<a href="index.php?do=shop_list&path="   class="selected" >全部</a>
 
<a href="index.php?do=shop_list&path=B1"  >100元以下 </a>
 
<a href="index.php?do=shop_list&path=B2"  >100-500 </a>
 
<a href="index.php?do=shop_list&path=B3"  >500-1000 </a>
 
<a href="index.php?do=shop_list&path=B4"  >1000-5000 </a>
 
<a href="index.php?do=shop_list&path=B5"  >5000-20000 </a>
 
<a href="index.php?do=shop_list&path=B6"  >2万以上 </a>

<a class="button" style="" onclick="custom_search_cash('shop_list_search_cash')">
                                        		<span class="icon cog"></span>自定义</a>
</span>
                                        <div id="cool_search"   style="display:none;" >
                                            <div class="grid_12">
                                            	<div class="pr_30">
                                                <div id="slider-range" class="mr_5">
                                                	
                                                </div>
<div class="clear"></div>
<ul class="range-num">
<li >0</li>
                                                	<li>1000</li>
<li>2000</li>
<li >3000</li>
<li class="lasts">4000</li>
<li class="lasts">5000</li>
</ul>
<div class="clear"></div>
</div>
<div class="clear"></div>
<div class="pt_10">
                                                <label for="amount1">
                                                  	  价格:
                                                </label>

                                                <input type="text" id="amount1" class="txt_input" size="5"/> -
<input type="text" id="amount2" class="txt_input" size="5"/> 元<a class="button" style="" onclick="search_task_cash()"><span class="magnifier icon"></span>搜索</a>
                                            		
</div>
</div>
<div class="grid_8"><a class="button" style="" onclick="task_cash_reset('shop_list_search_cash')"><span class="icon reload"></span>返回</a></div>

                                        </div>
                                    </dd>
                           </dl>
  <form id="cash_frm" name="cash_frm" action="index.php?do=shop_list" method="get">  
<input type="hidden" name="do" value="shop_list">
<input type="hidden" name="path" value="">
<input type="hidden" name="min" id="min">
<input type="hidden" name="max" id="max">
<input type="hidden" name="page_size" id="page_size" value="20">
  </form>
  
 <form id="cash_frm_fh" name="cash_frm_fh"  action="index.php?do=shop_list" method="post"> 
<input type="hidden" name="do" value="shop_list">
<input type="hidden" name="path" value=";"> 
<input type="hidden" name="page_size" id="page_size" value="20">

 </form>
                           <!--end 条件2-->
                       
                           <!--条件4-->
                           <dl class="condition clearfix">
                            <dt class="grid_2 omega">发布时间</dt>
                            <dd class="grid_21">
                            	                                <a href="index.php?do=shop_list&path="  class="selected" >全部</a> 
  
    <a href="index.php?do=shop_list&path=D1"   >近一天</a> 
                                  
    <a href="index.php?do=shop_list&path=D2"   >近三天</a> 
                                  
    <a href="index.php?do=shop_list&path=D3"   >近一周</a> 
                                  
    <a href="index.php?do=shop_list&path=D4"   >近一个月</a> 
                                                                </dd>
                           </dl>
                           <!--end 条件4-->
   <!--条件5-->
                                    <dl class="condition clearfix border_n">
                                        <dt class="grid_2 omega">
                                         地区搜索
                                        </dt>
                                        <dd class="grid_21">
                                        	<a href="index.php?do=shop_list&path=&max=&min="   class="selected" >全部 </a>
                                           <select name="province" id="province"></select><select name="city" id="city"></select><select name="area" id="area"></select>
   <a class="button" style="" onclick="search_address()"><span class="magnifier icon"></span>搜索　</a>
                                        </dd>
                                    </dl>
                                    <!--end 条件5-->
</div>
<!--工具栏-->
                            <div class="operate po_ab">
                                <a href="javascript:show_hide()" id="tool_show" title="展开"><span class="icon16 sq-plus"></span></a>
                                <a href="javascript:show_hide()" id="tool_hide" style="display:none" title="收起"><span class="icon16 sq-minus"></span></a>
                            </div>
                            <!--end 工具栏-->
                       </div>
                       <!--end 条件列表-->
                       
                       
                       <!--已选条件-->
                       <div class="select_condition clearfix pad10 m_h">
                       
                           <div class="grid_2 omega">
                           		<h3 class="title">已选条件</h3>
                           </div>
                        
                        	<div class="grid_21">
                            		<!--当无选择条件时显示span标记-->
                                    
<span>您暂无选择筛选条件</span> 
                            </div>
                       </div>
   	

                       <!--end 已选条件-->
   </div>
                    </div>
                     <!--end 筛选条件-->
                    </div>
                </div>
            
            
                <section class="clearfix section"> 
                    <div class="second_menu container_24 po_ab m_h">
                        <div class="suffix_23 pull_1">
                            <nav class="minor_nav box">
                                <ul class="nav_group clearfix">                                	
                                    <li>
                                    	<a href="index.php?do=help&fpid=291" title="帮助中心"><span class="icon16 help"></span></a>
</li>
<li>
<a href="index.php?do=shop_map" title="商城地图"><span class="icon16  globe-2"></span></a> 
</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    
                    <div class="show_panel container_24 po_re">
                        <div class="po_re clearfix box">
                                  
                                <!--左边内容-->
                                <div class="grid_20">
                                    <div class="box normal clearfix">
                                        <!--左内容头-->
                                    	<div class="border_b_c clearfix hidden">
                                    	<div class="grid_5 omega">
                                            <div class="sum clearfix">
                                                <p>共<span class="cc00"> 8 </span>条</p>
                                             </div>
                                        </div>
                                         <div class="grid_15 alpha omega m_h"> 
                                              <!--列表项数量-->
                                              <div class="page_count fl_r">
                                                  <a href="index.php?do=shop_list&path=&min=&max=&page_size=20"  class="selected" >20</a>
                                                  <a href="index.php?do=shop_list&path=&min=&max=&page_size=40" >40</a>
                                                  <a href="index.php?do=shop_list&path=&min=&max=&page_size=60" >60</a>
                                                  <a href="index.php?do=shop_list&path=&min=&max=&page_size=80" >80</a>
                                              </div>
                                              <!--end 列表项数量-->
  <!--小翻页-->
                                              <div class="min_page  fl_l pl_10">
                                                <p class="clearfix">
                                                                                                           </p>
                                                  <div class="clear"></div>
                                              </div>
                                              <!--end 小翻页-->
                                          </div>
  </div>
                                          <!--end 左内容头-->
                                        
                                        <!--列表主内容-->
                                        <div class="list">
                                            <dl>
                                              <dt>悬赏商品</dt>
                                              <dd class="tags clearfix">
                                                <ul> 
                                                    <li class="w5 info">商品信息</li>
                                                    <li class="w3 describe">卖家|描述</li> 
                                                    <li class="w2 price">
<a href="index.php?do=shop_list&path=&min=&max=&page_size=20&ord=2"  style="display:none"   title="低出售价格在前">价格|已出售 ▲</a> 
<a href="index.php?do=shop_list&path=&min=&max=&page_size=20&ord=1"   title="高出售价格在前">价格|已出售 ▼</a>

</li> 
                                                </ul>
                                              </dd>
                            
 
                                            <dd class="po_re clearfix 
      "
   >
                                                <ul class="clearfix pt_10">
                                                    <li class="w5 info">
                                                        <div class="img_box">
                                                        	<a href="index.php?do=service&sid=13"><img src="data/uploads/2013/04/09/100_2282751640079d7d50.jpg" onerror='$(this).attr("src","/public/tpl/default/img/shop/shop_default.gif")' title="[图兰朵]婚纱摄影重磅推出 黄金路线启动"></a>
                                                        </div>
                                                        
                                                    	<div class="img_des">
                                                    	
                                                        	<a href="index.php?do=service&sid=13" class="font14b list_small_title" title="[图兰朵]婚纱摄影重磅推出 黄金路线启动">[图兰朵]婚纱摄影重磅推出 黄金路线启动</a>
                                                            <p class="models">
                                                              商品类型：                                                                                                                                  <strong class="c393">作品</strong>
                                                                                                                              
                                                            </p>
                                                            <p class="block">
                                                            商城分类：	
照片美化/编辑 / 婚纱照美化</p> 
                                                        	                                                     	                                                              </div>
                                                    </li>
                                                    <li class="w3 describe ws_break">
                                                    	<a href="index.php?do=space&member_id=2">猪八戒</a>
                                                        <p>&nbsp;本单特色1.京城十佳婚纱摄影工作室2.W. P. T&nbsp;婚纱摄影模式3.资深摄影师、化妆师全程VIP一对一服务</p>
                                                    </li>
                                                    <li class="w2 price">
                                                    	<p class="cc00 font14b">&nbsp; ￥2,000.00元 </p>
                                                        <span>成功售出 1 笔</span>                                                    </li>
                                                    
                                                </ul>
                                                <div class="clear"></div>
<!--
                                                <div class="operate clearfix ">
                                                    <a href="javascript:favor('service_id','service','goods','2','13','[图兰朵]婚纱摄影重磅推出 黄金路线启动','13')" original-title="收藏" ><span class="icon16 star-fav-empty">收藏</span> </a>
                                                    <a href="index.php?do=service&sid=13" target="_blank" original-title="新窗口打开"><span class="icon16 expand">新窗口打开</span></a>
                                                   <a class="" href="index.php?do=ajax&view=share&oid=0&title=[图兰朵]婚纱摄影重磅推出 黄金路线启动" id="share0" onclick="return false;" onmouseover="share(this);return false;" title="分享"><span class="icon16 share">分享</span></a></a>
                                                </div>-->
                                              </dd>
                                             <dd class="po_re clearfix 
      "
   >
                                                <ul class="clearfix pt_10">
                                                    <li class="w5 info">
                                                        <div class="img_box">
                                                        	<a href="index.php?do=service&sid=12"><img src="data/uploads/2013/04/09/100_69285163fcde4fe35.jpg" onerror='$(this).attr("src","/public/tpl/default/img/shop/shop_default.gif")' title="商务|贸易|通用PPT模板"></a>
                                                        </div>
                                                        
                                                    	<div class="img_des">
                                                    	
                                                        	<a href="index.php?do=service&sid=12" class="font14b list_small_title" title="商务|贸易|通用PPT模板">商务|贸易|通用PPT模板</a>
                                                            <p class="models">
                                                              商品类型：                                                                                                                                  <strong class="c393">作品</strong>
                                                                                                                              
                                                            </p>
                                                            <p class="block">
                                                            商城分类：	
文案写作 / ppt设计</p> 
                                                        	                                                     	                                                              </div>
                                                    </li>
                                                    <li class="w3 describe ws_break">
                                                    	<a href="index.php?do=space&member_id=2">猪八戒</a>
                                                        <p>&nbsp;商务贸易通用ppt末班，总有一款你需要的KPPW2.2安装包默认数据均为测试演示数据，无任何商业意图，请各位站长测试</p>
                                                    </li>
                                                    <li class="w2 price">
                                                    	<p class="cc00 font14b">&nbsp; ￥100.00元 </p>
                                                                                                            </li>
                                                    
                                                </ul>
                                                <div class="clear"></div>
<!--
                                                <div class="operate clearfix ">
                                                    <a href="javascript:favor('service_id','service','goods','2','12','商务|贸易|通用PPT模板','12')" original-title="收藏" ><span class="icon16 star-fav-empty">收藏</span> </a>
                                                    <a href="index.php?do=service&sid=12" target="_blank" original-title="新窗口打开"><span class="icon16 expand">新窗口打开</span></a>
                                                   <a class="" href="index.php?do=ajax&view=share&oid=1&title=商务|贸易|通用PPT模板" id="share1" onclick="return false;" onmouseover="share(this);return false;" title="分享"><span class="icon16 share">分享</span></a></a>
                                                </div>-->
                                              </dd>
                                             <dd class="po_re clearfix 
   app_recmd
      "
   >
                                                <ul class="clearfix pt_10">
                                                    <li class="w5 info">
                                                        <div class="img_box">
                                                        	<a href="index.php?do=service&sid=9"><img src="data/uploads/2013/04/09/100_34715163f16eaa527.png" onerror='$(this).attr("src","/public/tpl/default/img/shop/shop_default.gif")' title="【创意】【澎 R26; 然心动】宣传册页设计"></a>
                                                        </div>
                                                        
                                                    	<div class="img_des">
                                                    	
                                                        	<a href="index.php?do=service&sid=9" class="font14b list_small_title" title="【创意】【澎 R26; 然心动】宣传册页设计">【创意】【澎 R26; 然心动】宣传册页设计</a>
                                                            <p class="models">
                                                              商品类型：                                                                                                                                  <strong class="c393">作品</strong>
                                                                                                                              
                                                            </p>
                                                            <p class="block">
                                                            商城分类：	
文案写作 / 宣传册页</p> 
                                                        	                                                     	      <img src="http://www.wk.com//public/resource/img/ico/tj.png" alt="推荐" title="推荐">                                                        </div>
                                                    </li>
                                                    <li class="w3 describe ws_break">
                                                    	<a href="index.php?do=space&member_id=2">猪八戒</a>
                                                        <p>&nbsp;专注于品牌设计，品牌价值提升！为您提供更放心满意的服务。&nbsp;具有4年专业从事企业产品画册/宣传册设计</p>
                                                    </li>
                                                    <li class="w2 price">
                                                    	<p class="cc00 font14b">&nbsp; ￥100.00元 </p>
                                                                                                            </li>
                                                    
                                                </ul>
                                                <div class="clear"></div>
<!--
                                                <div class="operate clearfix ">
                                                    <a href="javascript:favor('service_id','service','goods','2','9','【创意】【澎 R26; 然心动】宣传册页设计','9')" original-title="收藏" ><span class="icon16 star-fav-empty">收藏</span> </a>
                                                    <a href="index.php?do=service&sid=9" target="_blank" original-title="新窗口打开"><span class="icon16 expand">新窗口打开</span></a>
                                                   <a class="" href="index.php?do=ajax&view=share&oid=2&title=【创意】【澎 R26; 然心动】宣传册页设计" id="share2" onclick="return false;" onmouseover="share(this);return false;" title="分享"><span class="icon16 share">分享</span></a></a>
                                                </div>-->
                                              </dd>
                                             <dd class="po_re clearfix 
   app_recmd
      "
   >
                                                <ul class="clearfix pt_10">
                                                    <li class="w5 info">
                                                        <div class="img_box">
                                                        	<a href="index.php?do=service&sid=8"><img src="data/uploads/2013/04/09/100_198065163f0bc185b1.jpg" onerror='$(this).attr("src","/public/tpl/default/img/shop/shop_default.gif")' title="家庭装修设计作品-1"></a>
                                                        </div>
                                                        
                                                    	<div class="img_des">
                                                    	
                                                        	<a href="index.php?do=service&sid=8" class="font14b list_small_title" title="家庭装修设计作品-1">家庭装修设计作品-1</a>
                                                            <p class="models">
                                                              商品类型：                                                                                                                                  <strong class="c393">作品</strong>
                                                                                                                              
                                                            </p>
                                                            <p class="block">
                                                            商城分类：	
照片美化/编辑 / 图片编辑</p> 
                                                        	                                                     	      <img src="http://www.wk.com//public/resource/img/ico/tj.png" alt="推荐" title="推荐">                                                        </div>
                                                    </li>
                                                    <li class="w3 describe ws_break">
                                                    	<a href="index.php?do=space&member_id=4">shangk</a>
                                                        <p>&nbsp;家庭装修设计作品-1家庭装修设计作品-1家庭装修设计作品-1家庭装修设计作品-1家庭装修设计作品-1家庭装修设</p>
                                                    </li>
                                                    <li class="w2 price">
                                                    	<p class="cc00 font14b">&nbsp; ￥1,000.00元 </p>
                                                                                                            </li>
                                                    
                                                </ul>
                                                <div class="clear"></div>
<!--
                                                <div class="operate clearfix ">
                                                    <a href="javascript:favor('service_id','service','goods','4','8','家庭装修设计作品-1','8')" original-title="收藏" ><span class="icon16 star-fav-empty">收藏</span> </a>
                                                    <a href="index.php?do=service&sid=8" target="_blank" original-title="新窗口打开"><span class="icon16 expand">新窗口打开</span></a>
                                                   <a class="" href="index.php?do=ajax&view=share&oid=3&title=家庭装修设计作品-1" id="share3" onclick="return false;" onmouseover="share(this);return false;" title="分享"><span class="icon16 share">分享</span></a></a>
                                                </div>-->
                                              </dd>
                                             <dd class="po_re clearfix 
      "
   >
                                                <ul class="clearfix pt_10">
                                                    <li class="w5 info">
                                                        <div class="img_box">
                                                        	<a href="index.php?do=service&sid=7"><img src="data/uploads/2013/04/09/100_192895163e866c4dc9.jpg" onerror='$(this).attr("src","/public/tpl/default/img/shop/shop_default.gif")' title="【创意】企业网站定制开发"></a>
                                                        </div>
                                                        
                                                    	<div class="img_des">
                                                    	
                                                        	<a href="index.php?do=service&sid=7" class="font14b list_small_title" title="【创意】企业网站定制开发">【创意】企业网站定制开发</a>
                                                            <p class="models">
                                                              商品类型：                                                                                                                                  <strong class="c393">作品</strong>
                                                                                                                              
                                                            </p>
                                                            <p class="block">
                                                            商城分类：	
网站开发 / 网站广告</p> 
                                                        	                                                     	                                                              </div>
                                                    </li>
                                                    <li class="w3 describe ws_break">
                                                    	<a href="index.php?do=space&member_id=2">猪八戒</a>
                                                        <p>&nbsp;服务范围：&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;移动应用，系统</p>
                                                    </li>
                                                    <li class="w2 price">
                                                    	<p class="cc00 font14b">&nbsp; ￥10,000.00元 </p>
                                                                                                            </li>
                                                    
                                                </ul>
                                                <div class="clear"></div>
<!--
                                                <div class="operate clearfix ">
                                                    <a href="javascript:favor('service_id','service','goods','2','7','【创意】企业网站定制开发','7')" original-title="收藏" ><span class="icon16 star-fav-empty">收藏</span> </a>
                                                    <a href="index.php?do=service&sid=7" target="_blank" original-title="新窗口打开"><span class="icon16 expand">新窗口打开</span></a>
                                                   <a class="" href="index.php?do=ajax&view=share&oid=4&title=【创意】企业网站定制开发" id="share4" onclick="return false;" onmouseover="share(this);return false;" title="分享"><span class="icon16 share">分享</span></a></a>
                                                </div>-->
                                              </dd>
                                             <dd class="po_re clearfix 
   app_recmd
      "
   >
                                                <ul class="clearfix pt_10">
                                                    <li class="w5 info">
                                                        <div class="img_box">
                                                        	<a href="index.php?do=service&sid=5"><img src="data/uploads/2013/04/09/100_201825163e6a867205.png" onerror='$(this).attr("src","/public/tpl/default/img/shop/shop_default.gif")' title="【创意】网络视频"></a>
                                                        </div>
                                                        
                                                    	<div class="img_des">
                                                    	
                                                        	<a href="index.php?do=service&sid=5" class="font14b list_small_title" title="【创意】网络视频">【创意】网络视频</a>
                                                            <p class="models">
                                                              商品类型：                                                                                                                                  <strong class="c393">作品</strong>
                                                                                                                              
                                                            </p>
                                                            <p class="block">
                                                            商城分类：	
影视/配音/歌词 / 影视制作</p> 
                                                        	                                                     	      <img src="http://www.wk.com//public/resource/img/ico/tj.png" alt="推荐" title="推荐">                                                        </div>
                                                    </li>
                                                    <li class="w3 describe ws_break">
                                                    	<a href="index.php?do=space&member_id=2">猪八戒</a>
                                                        <p>&nbsp;购买服务，雇主威客一对一，满意再付款，交易有保障！KPPW2.2安装包默认数据均为测试演示数据，无任何商业意图，请各位</p>
                                                    </li>
                                                    <li class="w2 price">
                                                    	<p class="cc00 font14b">&nbsp; ￥100.00元 </p>
                                                                                                            </li>
                                                    
                                                </ul>
                                                <div class="clear"></div>
<!--
                                                <div class="operate clearfix ">
                                                    <a href="javascript:favor('service_id','service','goods','2','5','【创意】网络视频','5')" original-title="收藏" ><span class="icon16 star-fav-empty">收藏</span> </a>
                                                    <a href="index.php?do=service&sid=5" target="_blank" original-title="新窗口打开"><span class="icon16 expand">新窗口打开</span></a>
                                                   <a class="" href="index.php?do=ajax&view=share&oid=5&title=【创意】网络视频" id="share5" onclick="return false;" onmouseover="share(this);return false;" title="分享"><span class="icon16 share">分享</span></a></a>
                                                </div>-->
                                              </dd>
                                             <dd class="po_re clearfix 
   app_recmd
      "
   >
                                                <ul class="clearfix pt_10">
                                                    <li class="w5 info">
                                                        <div class="img_box">
                                                        	<a href="index.php?do=service&sid=2"><img src="data/uploads/2013/04/09/100_16875163e52fe2415.jpg" onerror='$(this).attr("src","/public/tpl/default/img/shop/shop_default.gif")' title="【创意】LOGO设计"></a>
                                                        </div>
                                                        
                                                    	<div class="img_des">
                                                    	
                                                        	<a href="index.php?do=service&sid=2" class="font14b list_small_title" title="【创意】LOGO设计">【创意】LOGO设计</a>
                                                            <p class="models">
                                                              商品类型：                                                                                                                                  <strong class="c393">作品</strong>
                                                                                                                              
                                                            </p>
                                                            <p class="block">
                                                            商城分类：	
照片美化/编辑 / 图片编辑</p> 
                                                        	                                                     	      <img src="http://www.wk.com//public/resource/img/ico/tj.png" alt="推荐" title="推荐">                                                        </div>
                                                    </li>
                                                    <li class="w3 describe ws_break">
                                                    	<a href="index.php?do=space&member_id=4">shangk</a>
                                                        <p>&nbsp;【创意】LOGO设计【创意】LOGO设计【创意】LOGO设计【创意】LOGO设计【创意】LOGO设计【创意】LOGO设计【创</p>
                                                    </li>
                                                    <li class="w2 price">
                                                    	<p class="cc00 font14b">&nbsp; ￥100.00元 </p>
                                                                                                            </li>
                                                    
                                                </ul>
                                                <div class="clear"></div>
<!--
                                                <div class="operate clearfix ">
                                                    <a href="javascript:favor('service_id','service','goods','4','2','【创意】LOGO设计','2')" original-title="收藏" ><span class="icon16 star-fav-empty">收藏</span> </a>
                                                    <a href="index.php?do=service&sid=2" target="_blank" original-title="新窗口打开"><span class="icon16 expand">新窗口打开</span></a>
                                                   <a class="" href="index.php?do=ajax&view=share&oid=6&title=【创意】LOGO设计" id="share6" onclick="return false;" onmouseover="share(this);return false;" title="分享"><span class="icon16 share">分享</span></a></a>
                                                </div>-->
                                              </dd>
                                             <dd class="po_re clearfix 
   app_recmd
      "
   >
                                                <ul class="clearfix pt_10">
                                                    <li class="w5 info">
                                                        <div class="img_box">
                                                        	<a href="index.php?do=service&sid=1"><img src="data/uploads/2013/04/09/100_314595163e47017e15.jpg" onerror='$(this).attr("src","/public/tpl/default/img/shop/shop_default.gif")' title="【创意】海报设计"></a>
                                                        </div>
                                                        
                                                    	<div class="img_des">
                                                    	
                                                        	<a href="index.php?do=service&sid=1" class="font14b list_small_title" title="【创意】海报设计">【创意】海报设计</a>
                                                            <p class="models">
                                                              商品类型：                                                                                                                                  <strong class="c393">作品</strong>
                                                                                                                              
                                                            </p>
                                                            <p class="block">
                                                            商城分类：	
照片美化/编辑 / 图片编辑</p> 
                                                        	                                                     	      <img src="http://www.wk.com//public/resource/img/ico/tj.png" alt="推荐" title="推荐">                                                        </div>
                                                    </li>
                                                    <li class="w3 describe ws_break">
                                                    	<a href="index.php?do=space&member_id=4">shangk</a>
                                                        <p>&nbsp;【创意】海报设计【创意】海报设计【创意】海报设计【创意】海报设计【创意】海报设计【创意】海报设计【创</p>
                                                    </li>
                                                    <li class="w2 price">
                                                    	<p class="cc00 font14b">&nbsp; ￥1,000.00元 </p>
                                                                                                            </li>
                                                    
                                                </ul>
                                                <div class="clear"></div>
<!--
                                                <div class="operate clearfix ">
                                                    <a href="javascript:favor('service_id','service','goods','4','1','【创意】海报设计','1')" original-title="收藏" ><span class="icon16 star-fav-empty">收藏</span> </a>
                                                    <a href="index.php?do=service&sid=1" target="_blank" original-title="新窗口打开"><span class="icon16 expand">新窗口打开</span></a>
                                                   <a class="" href="index.php?do=ajax&view=share&oid=7&title=【创意】海报设计" id="share7" onclick="return false;" onmouseover="share(this);return false;" title="分享"><span class="icon16 share">分享</span></a></a>
                                                </div>-->
                                              </dd>
   
                                            </dl>    
                                        </div>
                                        <!--end 列表主内容-->
<!--右下角的返回顶部--
                                        <div class="operate mt_10 fl_r">
                                                    <a href="index.php" class="" title="返回首页"><span class="icon16 home"></span><span class="return_word">返回首页</span></a>
                                                    <a href="#" class="" title="返回顶部"><span class="icon16 arrow-top"></span><span class="return_word">返回顶部</span></a>
                                        </div>
                                        <!--end右下角的返回顶部-->      
                                    </div>
                                     
                                    <!--page 翻页 start-->
                                    <div class="page">
                                        <p class="clearfix">
                                            <span class="stats">共 8 条 </span>
                                                                                   </p>
                                        <div class="clear"></div>
                                    </div>
                                    <!--page 翻页 end-->
                                    <div class="clear"></div>
                                         
                                </div>
                                <!--end 左边部分-->
                                
                                <!--右边部分-->
                                <div class="grid_4 m_h">
                                        
<div class="mb_10">
   	<a href="http://www.wk.com/index.php?do=shop_release" class="submit block">发布商品</a>
   </div>
<div class="box normal2">
                                        <!--任务动态-->
                                        <div class="inner">
                                        	<div class="box_header">
                                                <h3 class="title">商城动态</h3>
</div>
                                                <div class=" pl_10 pr_10 pb_10">
                                                
                                                   <ul id="history_collect ">
                                                	                                                </ul>
</div>
                                        </div>
                                    	</div>
                                        
<div class="clear"></div>
<!--威客商城_右侧广告-->
<div style="margin:0 -5px;">
<div class='adv'><a href='http://www.kppw.cn' target='_blank' title='adv'><img src='data/uploads/sys/ad/adv.jpg' width='' height='' alt='adv' title='adv'></a></div></div>
<div class="clear"></div>
                                        
                                    </div>
                                
                                <!--end 右边部分-->         
                            
                        </div>
                    </div>
                                    
                </section>    
<div class="clear"></div>
 
 		 <div class='adv'><a href='http://www.kppw.cn' target='_blank' title='adv'><img src='data/uploads/sys/ad/adv.jpg' width='' height='' alt='adv' title='adv'></a></div>
<div class="clear"></div>                
            </div>  
        </section> 
</div>  
        <!--end 主内容--> 

<script type="text/javascript">
/** 检查用户是否登陆 */
var uid = parseInt('')+0; 

function check_user_login() {
if (isNaN(uid) || uid == 0) {
showDialog("你还没有登录，是否现在登录？", 'confirm', "登录消息提示", 'user_login()', 0);
return false;
} else {
return true;
}
}


/** 用户登陆 */

function user_login() {
showWindow('user_login', 'index.php?do=login', 'get');
return false;
} 
//页面加载，判断搜索条件是现实还是隐藏
        $(function(){
            var show_cookie = getcookie('show_cookie');
            
            if (show_cookie == 1) {
                $("#condition_list").show();
                $("#tool_hide").show();
                $("#tool_show").hide();
            }
        });
        
        //搜索条件现实 /隐藏
        function show_hide(){
            $("#condition_list").toggle(0, function(){
                if ($("#tool_show").is(":hidden")) {
                    setcookie('show_cookie', '');
                    $("#tool_show").show();
                    $("#tool_hide").hide();
                }
                else {
                    setcookie('show_cookie', 1,3600);
                    $("#tool_hide").show();
                    $("#tool_show").hide();
                }
            });
        }	


 
//收藏
function taskFavor(type,obj_id) {
if (check_user_login()) {
var url="index.php?do=task&task_id="+obj_id+"&op=taskfavor";
$.getJSON(url,{keep_type:type,obj_id:obj_id},function(json){
showDialog(json.data,'notice',json.msg);return false;
})
}
}
//分享
var share=function(obj,title){
CHARSET.toLowerCase()=='utf-8'?obj.href = encodeURI(obj.href):'';
ajaxmenu(obj,250,'1','2','43');
return false;
}
//进度条
    function task_bar(){
        var min = Number();
        var max = Number();
        
        $("#slider-range").slider({
            range: true,
            min: 0,
            max: 5000,
            values: [min, max],
            slide: function(event, ui){
                $("#amount1").val(ui.values['0']);
$("#amount2").val(ui.values['1']);
            }
        });
        //$("#amount").val('$' + $("#slider-range").slider("values", 0) + ' - $' + $("#slider-range").slider("values", 1));
$("#amount1").val($("#slider-range").slider("values", 0));
$("#amount2").val($("#slider-range").slider("values", 1));
    }
    
    
    //赏金搜索 
    function search_task_cash(){
        var url = window.location.href;
        var min = $("#amount1").val();
        var max =  $("#amount2").val();

        $("#min").val(min);
        $("#max").val(max); 
        $("#cash_frm").submit();
    }
       //地区搜索
   function search_address(){
     	var province = $("#province").val();
        var city = $("#city").val();
var area = $("#area").val();
if(province&&city&&area){
window.location.href = "index.php?do=task_list&path=&max=&min=&province="+province+"&city="+city+"&area="+area;
}
   }
  
            
 
</script>		
<script type="text/javascript"> 
 In('form','pcas',function(){
  			  new PCAS("province","city","area","","","");
});
    In.config('serial',true);
In.add('ui_core',{path:"/public/resource/js/others/ui.core.js",type:'js'});
In.add('ui_slider',{path:"/public/resource/js/others/ui.slider.js",type:'js',rely:['ui_core']});
In.add('search',{path:"/public/tpl/default/js/search.js",type:'js'});
In('search','ui_slider','lazy',function(){task_bar();loadPics();});
 
</script>

<!--页脚 satrt-->
<footer class="footer clearfix">
<!--网站链接以及语言栏 关注我们 搜索 start-->






            <!--网站版权声明 start-->
            <section class="site_copyright clearfix">
            	<div class="container_24 clearfix ">
            		
            		
                    	 	<dl>
<dt>
                    	 		公司名称:武汉客客信息技术有限公司<span class="pad10">地址:湖北省武汉市</span>联系电话:18971533922</dt>
<dd>
                    	 	KPPW2.2 Copyright &#169; 2010 -2013 kekezu. All rights reserved<a href="http://icp.valu.cn/" target="_blank"></a>
</dd>  
                    	 	</dl>
 <div class="clear"></div>


<!--语言栏 关注我们 搜索 start-->

                    <div class="site_attach clearfix">

                        	<div class="social">
                            	关注我们：                            	
                                
 
<a href="index.php?do=wb&focus=1881490142&wb_type=sina"><img src="/public/resource/img/ico/sina_t.gif" title="1881490142"></a> 


 
<a href="index.php?do=wb&focus=shangjinglong&wb_type=ten"><img src="/public/resource/img/ico/ten_t.gif" title="shangjinglong"></a> 


 
<a href="index.php?do=wb&focus=2746053225&wb_type=netease"><img src="/public/resource/img/ico/netease_t.gif" title="2746053225"></a> 


 
<a href="index.php?do=wb&focus=naniso&wb_type=sohu"><img src="/public/resource/img/ico/sohu_t.gif" title="naniso"></a> 


                            </div>
     

                        <div class="lan_box">
                            <form action="" method="post" id="lan_bottom">
                                <div class="clearfix">
                                     <label>语言：</label>
                                     <select id="lan" name="lan" style="width:100px" onchange="setLang(this)">
      <option value="cn" c="CNY" selected>简体中文</option>
                                       </select>
                                
                           
                               
                                     <label> 币种：</label>
                                     <select  style="width:100px" onchange="setCurr(this.value,1);">
      <option value="USD" id="USD" >US Dollar</option>
      <option value="CNY" id="CNY" selected>人民币</option>
      <option value="EUR" id="EUR" >Euro</option>
      <option value="GBP" id="GBP" >GB Pound</option>
      <option value="CAD" id="CAD" >Canadian Dollar</option>
      <option value="AUD" id="AUD" >Australian Dollar</option>
      <option value="HKD" id="HKD" >港币</option>
      <option value="KRW" id="KRW" >韩元</option>
      <option value="RUB" id="RUB" >卢布</option>
                                       </select>
                                 </div>
                            </form>
</div>	
                        

</div>

                  
                    <!--语言栏 关注我们 搜索 end-->


                </div>
   				<div class="clearfix"></div>
            </section>
            <!--网站版权声明 end-->
            
            <!--返回顶部 start-->

        	<a class="top animated hidden" href="javascript:void(0);" title="返回顶部"><em>&diams;</em>Top</a>
              
            <!--返回顶部 end-->
    </footer>
    <!--页脚 end-->
</div>
<script type="text/javascript">
var uid='';
var xyq = "7u8s9ndcurvoj2mlun6veuaq94";
 //js异步加载
In('header_top','custom','lavalamp','tipsy','autoIMG','slides');




</script>

<!--[if IE 6]></div><![endif]-->
<!--[if IE 7]></div><![endif]-->
<!--[if IE 8]></div><![endif]-->
</body>
</html>
