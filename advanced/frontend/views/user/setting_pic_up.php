
    <div class="clear"></div>
<!--contain start-->
<div class="wrapper">
    <div class="container_24">
        <link href="/public/tpl/default/css/user_center.css" rel="stylesheet" type="text/css">
<header class="page_title clearfix  Anchor">
    <div class="grid_17">
        <h2 class="title pt_5">用户中心</h2>
    </div>
    <div class="grid_7 hidden">
        <div class="user_info">
            <div class="fl_l mr_10">
                <p>
                    <img src='/public/data/avatar/system/16_small.jpg' uid='1' class='pic_small'>                </p>
            </div>
            <ul class="intor">
                <li>
                    欢迎您，<?php  $session=new \yii\web\Session();  echo $session->get("user_name")?>                </li>
                <li>
                    <strong class="cf60">币种405405.061</strong>
                   现金 | <strong><a href="index.php?do=user&view=message"> 条消息</a></strong>
                </li>
            </ul>
        </div>
    </div>
</header>
<div class="grid_24">
<nav class="primary_nav box clearfix">

    <a name="userCenter"></a>
    <ul>
                <li>
            <a href="index.php?r=user/index" ><span class="icon32 meter">管理面板</span><em>管理面板</em></a>
        </li>
                <li>
            <a href="index.php?r=user/setting" class="selected"><span class="icon32 cog">企业设置</span><em>企业设置</em></a>
        </li>
                <li>
            <a href="index.php?r=user/finance" ><span class="icon32 chart-line2">财务管理</span><em>财务管理</em></a>
        </li>
                <li>
            <a href="index.php?r=user/employer" ><span class="icon32 buyer">雇主|买家</span><em>雇主|买家</em></a>
        </li>
                <li>
            <a href="index.php?do=user&view=witkey" ><span class="icon32 seller">威客|卖家</span><em>威客|卖家</em></a>
        </li>
                <li>
            <a href="index.php?r=user/message" ><span class="icon32 sound-high">消息管理</span><em>消息管理</em><strong class="badge">4</strong></a>
        </li>
                <li>
            <a href="index.php?r=user/collect" ><span class="icon32 star-fav">我的收藏</span><em>我的收藏</em></a>
        </li>
                <li>
            <a href="index.php?r=user/payitem" ><span class="icon32 bookmark-2">增值服务</span><em>增值服务</em></a>
        </li>
            </ul>
    
    
</nav>

</div>
<div class="clear"></div>
<!--main start-->
        <section class="clearfix section">
        <!--用户中心样式-->
<div class="second_menu container_24 po_ab clearfix">
    <div class="suffix_21">
        <nav class="minor_nav box clearfix">
           <!--子导航开始-->
       <ul class="nav_group clearfix">
             <li>
                 <a href="index.php?r=user/setting" title="进入基本资料" >
                   <div class="icon16 contact-card">icon</div><strong>基本资料</strong>
     </a>
             </li>
              <li>
                 <a href="index.php?r=user/setting_pic" title="进入头像设置" class="selected">
                   <div class="icon16 picture">icon</div><strong>头像设置</strong>
     </a>
             </li>
        </ul>
       <ul class="nav_group clearfix">
             <li>
                 <a href="index.php?r=user/setting_safe" title="进入安全设置" >
                   <div class="icon16 shield">icon</div><strong>安全设置</strong>
     </a>
             </li>
        </ul>
       
       <ul class="nav_group clearfix">
             <li>
                 <a href="index.php?r=user/setting_space" title="进入店铺设置" >
                   <div class="icon16 browser">icon</div><strong>店铺设置</strong>
     </a>
             </li>
        </ul>
<!--子导航结束-->
        </nav>
    </div>
</div>
        <div class="show_panel container_24 po_re">
        <div class="prefix_3 grid_21">
            <div class="panel clearfix box">
                <!--main content-->
                <div class="">
                    <!--header内容头部 start-->
                    <header class="clearfix box_header">
                        <h2 class="grid_4 alpha omega box_title t_c">头像设置</h2>
                        <div class="grid_17 alpha omega">
                            <nav class="box_nav">
                              <ul>
                                                                        <li >
                                        <a href="index.php?r=user/setting_pic" title="选择头像">选择头像</a>
                                    </li>
                                                                        <li   class="selectedLava">
                                        <a href="index.php?r=user/setting_pic_up" title="上传头像">上传头像</a>
                                    </li>
                               </ul>
                            </nav>
                        </div>
                        <div class="clear">
                        </div>
                    </header>
                    <!--header内容头部 end--><!--detail内容 start-->
                    <article class="box_detail">
                    	

                        <!--头像上传start-->
  
                        	<div class=" prefix_1 suffix_1">						
<h3 class=" mb_10 border_b_c ">上传头像</h3>
<div class="messages m_infor clearfix">
                                    <span class="icon16 fl_l">&nbsp;</span>
                                   <div class="grid_16"> 点击"选择图片"上传您自己的头像。   上传完成之后点击"更新图片"按钮即可看见实际效果</div>
   <a href="###" class="close">&times;</a>
                        		</div>
                            	<div class="pad10 bf7">
                            <!--	
                                <div class="img_cut mb_10 ">
                                    <div style="width:520px; margin:auto;"><object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" 
		codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,0,0" 
		width="520" height="280" id="mycamera" align="middle">
			<param name="allowScriptAccess" value="always" />
			<param name="scale" value="exactfit" />
			<param name="wmode" value="transparent" />
			<param name="quality" value="high" />
			<param name="bgcolor" value="#ffffff" />
			<param name="movie" value="/public/resource/img/system/camera.swf?inajax=1&appid=1&input=1&ucapi=http://127.0.0.1/weike&avatartype=virtual" />
			<param name="menu" value="false" />
			<embed src="/public/resource/img/system/camera.swf?inajax=1&appid=1&input=1&ucapi=http://127.0.0.1/weike&avatartype=virtual" quality="high" bgcolor="#ffffff" width="520" height="280" name="mycamera" align="middle" allowScriptAccess="always" allowFullScreen="false" scale="exactfit"  wmode="transparent" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
		</object></div> -->
                            
                         	  <div id="altContent">


<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"
codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,40,0"
WIDTH="650" HEIGHT="450" id="myMovieName">
<PARAM NAME=movie VALUE="/public/data/avatar/system/avatar.swf">
<PARAM NAME=quality VALUE=high>
<PARAM NAME=bgcolor VALUE=#FFFFFF>
<param name="flashvars" value="imgUrl=/public/data/avatar/system/default.jpg&uploadUrl=/public/data/avatar/system/upfile.php&uploadSrc=false" />
<EMBED src="/public/data/avatar/system/avatar.swf" quality=high bgcolor=#FFFFFF WIDTH="650" HEIGHT="450" 
       wmode="transparent" flashVars="imgUrl=/public/data/avatar/system/default.jpg&uploadUrl=/public/data/avatar/system/upfile.php&uploadSrc=false"
NAME="myMovieName" ALIGN="" TYPE="application/x-shockwave-flash" allowScriptAccess="always"
PLUGINSPAGE="http://www.macromedia.com/go/getflashplayer">
</EMBED>
</OBJECT>
 

  </div>

  <div id="avatar_priview"></div>	
	<div id="avatar_editor"></div>
		
	</div>
</div>

                                </div>
                           
                                <div class="t_c">
<a href="javascript:window.location.reload();" class="button block t_c">
<span class="icon loop"></span>更新图片</a>
                                </div>



<div class="clear"></div>
</div>

                            </div>
                            
 
                        <!--头像上传end--> 
                    </article>
                    <!--detail内容 end-->
                </div>
                <!--main content end -->
                <div class="clear">
                </div>
            </div>
        </div>
        </section>
        <!--main end-->
    </div>
</div>
<!--contain end-->
<!--jQuery调用--> 
<script type="text/javascript">
   function uploadevent(status,picUrl,callbackdata){
       //alert(callbackdata);
//alert(picUrl); //后端存储图片
	//alert(callbackdata); //后端返回数据
        status += '';
     switch(status){
     case '1':
        var time = new Date().getTime();
        var filename162 = picUrl+'_162.jpg';      
        var filename48 = picUrl+'_48.jpg';
        var filename20 = picUrl+"_20.jpg";
        $.ajax({
           url:"index.php?r=user/setting_pic_show",
           data:{"img":filename162},
           type:"post",
           success:function(e){
               if(e=="ok"){
                location.href="index.php?r=user/setting_pic_up"
               }
           }
       })
//document.getElementById('avatar_priview').innerHTML = "头像1 : <img src='"+filename162+"?" + time + "'/> <br/> 头像2: <img src='"+filename48+"?" + time + "'/><br/> 头像3: <img src='"+filename20+"?" + time + "'/>" ;
    break;
     case '-1':
     window.location.reload();
     break;
     default:
     window.location.reload();
    } 
   }
  </script>
