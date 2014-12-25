
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
                    <img src='/public/data/avatar/system/19_small.jpg' uid='1' class='pic_small'>                </p>
            </div>
            <ul class="intor">
                <li>
                    欢迎您，<?php $session=new \yii\web\Session(); echo $session->get("user_name")?>                </li>
                <li>
                    <strong class="cf60">币种405405.061</strong>
                   现金 | <strong><a href="index.php?do=user&view=message">4 条消息</a></strong>
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
                                                                        <li   class="selectedLava">
                                        <a href="index.php?r=user/setting_pic" title="选择头像">选择头像</a>
                                    </li>
                                                                        <li >
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
                    	

                        <!--头像选择start-->
                        <div class="prefix_1 suffix_1 ">
                        	<h3 class="mb_10 border_b_c">系统头像</h3>
                            <ul class="choose_tx clearfix mt_10 mb_20">
                                                                <li style="cursor:pointer;" title="就选这个"
>
                                    <img  onclick="pic(this);"src="/public/data/avatar/system/1_small.jpg" class="pic_small" />
                                </li>                                <li style="cursor:pointer;" title="就选这个"
>
                                    <img onclick="pic(this);" src="/public/data/avatar/system/2_small.jpg" class="pic_small" />
                                </li>                                <li style="cursor:pointer;" title="就选这个"
>
                                    <img onclick="pic(this);" src="/public/data/avatar/system/3_small.jpg" class="pic_small" />
                                </li>                                <li style="cursor:pointer;" title="就选这个"
>
                                    <img onclick="pic(this);" src="/public/data/avatar/system/4_small.jpg" class="pic_small" />
                                </li>                                <li style="cursor:pointer;" title="就选这个"
>
                                    <img onclick="pic(this);"  src="/public/data/avatar/system/5_small.jpg" class="pic_small" />
                                </li>                                <li style="cursor:pointer;" title="就选这个"
>
                                    <img onclick="pic(this);" src="/public/data/avatar/system/6_small.jpg" class="pic_small" />
                                </li>                                <li style="cursor:pointer;" title="就选这个"
>
                                    <img onclick="pic(this);" src="/public/data/avatar/system/7_small.jpg" class="pic_small" />
                                </li>                                <li style="cursor:pointer;" title="就选这个"
>
                                    <img onclick="pic(this);" src="/public/data/avatar/system/8_small.jpg" class="pic_small" />
                                </li>                                <li style="cursor:pointer;" title="就选这个"
>
                                    <img onclick="pic(this);" src="/public/data/avatar/system/9_small.jpg" class="pic_small" />
                                </li>                                <li style="cursor:pointer;" title="就选这个"
>
                                    <img onclick="pic(this);" src="/public/data/avatar/system/10_small.jpg" class="pic_small" />
                                </li>                                <li style="cursor:pointer;" title="就选这个"
>
                                    <img onclick="pic(this);"  src="/public/data/avatar/system/11_small.jpg" class="pic_small" />
                                </li>                                <li style="cursor:pointer;" title="就选这个"
>
                                    <img onclick="pic(this);" src="/public/data/avatar/system/12_small.jpg" class="pic_small" />
                                </li>                                <li style="cursor:pointer;" title="就选这个"
>
                                    <img onclick="pic(this);" src="/public/data/avatar/system/13_small.jpg" class="pic_small" />
                                </li>                                <li style="cursor:pointer;" title="就选这个"
>
                                    <img onclick="pic(this);" src="/public/data/avatar/system/14_small.jpg" class="pic_small" />
                                </li>                                <li style="cursor:pointer;" title="就选这个"
>
                                    <img onclick="pic(this);" src="/public/data/avatar/system/15_small.jpg" class="pic_small" />
                                </li>                                <li style="cursor:pointer;" title="就选这个"
>
                                    <img onclick="pic(this);" src="/public/data/avatar/system/16_small.jpg" class="pic_small" />
                                </li>                                <li style="cursor:pointer;" title="就选这个"
>
                                    <img onclick="pic(this);" src="/public/data/avatar/system/17_small.jpg" class="pic_small" />
                                </li>                                <li style="cursor:pointer;" title="就选这个"
>
                                    <img onclick="pic(this);" src="/public/data/avatar/system/18_small.jpg" class="pic_small" />
                                </li>                                <li style="cursor:pointer;" title="就选这个"
>
                                    <img onclick="pic(this);" src="/public/data/avatar/system/19_small.jpg" class="pic_small" />
                                </li>                                <li style="cursor:pointer;" title="就选这个"
>
                                    <img onclick="pic(this);" src="/public/data/avatar/system/20_small.jpg" class="pic_small" />
                                </li>                            </ul>
                            <div class="clear">
                            </div>
                       
                            
                        </div>
                        <!--头像选择end-->
                         
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
$(function(){
var Is = location.href.search('&op=');
if(Is>-1){
$("html,body").animate({scrollTop:$(".Anchor").offset().top});
}
})
function check(obj){
return checkForm(document.getElementById(obj));
}
In.add('jscolor',{path:"/public/resource/js/others/jscolor.js",type:'js'}); 
In('calendar'); 

$(function(){
$(".togg_u").focus(function(){
        	 this.value = '';
        }).blur(function(){
                this.value == '' ? this.value = $(this).attr(this.title ? 'title' : 'original-title') : '';
        })
}) 	
</script>

<script>
    function pic(obj){
       //alert(obj.src)
       if(confirm("确认要更换头像吗？")){
       s=obj.src;
       $.ajax({
           url:"index.php?r=user/setting_pic_show",
           data:{"img":s},
           type:"post",
           success:function(e){
               if(e=="ok"){
              location.href="index.php?r=user/setting_pic"
               }
           }
       })
       }
    }
</script>
