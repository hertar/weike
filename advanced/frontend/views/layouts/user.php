<!DOCTYPE HTML>
<!--[if lt IE 7]> <html dir="ltr" lang="zh-cn" id="ie6"> <![endif]-->
<!--[if IE 7]>    <html dir="ltr" lang="zh-cn" id="ie7"> <![endif]-->
<!--[if IE 8]>    <html dir="ltr" lang="zh-cn" id="ie8"> <![endif]-->
<!--[if gt IE 8]><!--> <html dir="ltr" lang="zh-cn"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<title>用户中心</title>
<meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE,chrome=1">
<meta name="keywords" content="客客出品专业威客系统">
<meta name="description" content="客客出品专业威客系统">
<meta name="generator" content="客客出品 2.2" />
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style” content=black" /> 
<meta name="author" content="kekezu" />
<meta name="copyright" content="Copyright &#169; 2010 -2013 kekezu. All rights reserved" />
<link rel="shortcut icon" href="favicon.ico" />
<link rel="apple-touch-icon" href="favicon.ico"/>
 <style type="text/css" media="screen">
  html, body { height:100%; background-color: #ffffff;}
  #flashContent { width:100%; height:100%; }
  </style>
  
<script type="text/javascript">
var SITEURL= "http://127.0.0.1/weike",
    SKIN_PATH = 'tpl/default',
LANG       = 'cn',
    INDEX      = 'user',
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
<script src="/public/lang/cn/script/lang.js" type="text/javascript"></script>
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

    <body id="user">

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
                                           <?php
                                         $uid=$session->get("u_id");
                                         $arr=\app\models\Space::find()->where(["uid"=>"$uid"])->one();
                                         //print_r($arr);
                                         if($arr){
                                    ?>
                                            <img src="/public/data/avatar/system<?php echo $arr["images"]?>" uid='' class='pic_small'>   
                                            <?php
                                         }else{
                                            ?>
                                            <img src='/public/data/avatar/default/man_small.jpg' uid='' class='pic_small'>   
                                            <?php
                                         }
                                            ?>     
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
        <!--tool_E-->
 
    <div class="clear"></div>
<script type="text/javascript" src="/public/resource/js/jqplugins/slides.min.jquery.js"></script>
<script type="text/javascript" src="/public/resource/js/jqplugins/easySlider1.5.js"></script>
<script type="text/javascript" src="/public/tpl/default/js/index.js"></script>


<!--内容-->
  <?= $content; ?>
<!--内容end-->

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
var uid='1';
var xyq = "l7j743n462jfogqvjvalrom7a6";
$(function(){
   $.get('/public/tpl/js/js.php?op=time&r='+Math.random());	
})
 //js异步加载
In('header_top','custom','lavalamp','tipsy','autoIMG','slides');




</script>

<!--[if IE 6]></div><![endif]-->
<!--[if IE 7]></div><![endif]-->
<!--[if IE 8]></div><![endif]-->
</body>
</html>

