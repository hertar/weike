
    <div class="clear"></div>
<!--contain start-->
<style>
.market{border-bottom:1px solid #e4e4e4;}
.shops{color:#000; font-size:16px; font-family:"新宋体"; width:400px; margin:30px auto 0px; font-weight:bold;}
.memb{width:400px; margin:30px auto 0px; }
.hao{ margin:auto font-size:14px;}
.air{text-align:left; margin-bottom:0px; color:#5a5a5a; font-size:12px; line-height:30px;}
</style>
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
                    <img src='/public/data/avatar/default/man_small.jpg' uid='12' class='pic_small'>                </p>
            </div>
            <ul class="intor">
                <li>
                    欢迎您，<?php $session=new \yii\web\Session();  echo $session->get("user_name")?>                </li>
                <li>
                    <strong class="cf60">币种0.000</strong>
                   现金 | <strong><a href="index.php?do=user&view=message">0 条消息</a></strong>
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
                 <a href="index.php?r=user/setting" title="进入基本资料">
                   <div class="icon16 contact-card">icon</div><strong>基本资料</strong>
     </a>
             </li>
              <li>
                 <a href="index.php?r=user/setting_pic" title="进入头像设置" >
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
                 <a href="index.php?r=user/setting_space" title="进入店铺设置"   class="selected">
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
               <div class="messages m_infor">
                                    <span class="icon16">info</span>
                                      开通店铺                                                          
                                    <a class="close" href="###">×</a>
                                </div>
             <div class="clear"></div>
         </header>
        <!--header内容头部 end-->
      <?php
        if($shop==""){
      ?>
       <div class="prefix_1 suffix_1">
         <div class="clearfix box market font14"> 
                  <div class="suffix_1 clearfix  pb_20 pt_10">
                     <div class="shops">您还没有开通店铺！</div>
                     <div class="memb">
                         
                     	<div class="hao">已有<?php echo $count?>个会员开通店铺</div >
<div class="air">
<div class="air">店铺作为展示个人与企业用户商品及资料的平台，扩展各界威客用户之间的互动与了解，提升商品的交易和任务的协调工作。</div>
    </div>
<div  class="air">欢迎开通店铺，成为威客商城卖家！</div > 
<div class="grid_10 t_l mt_20 alpha omega">
<button class="grid_3 alpha omega" onclick="open_shop();" value="立即开通" type="submit">立即开通</button>
<input type="hidden" id="user_type" value="<?php echo $user_type?>">
</div>
                     </div>
                      </div>
                   </div>
                 </div>
  <?php
        }
  ?>      
              <!--detail内容 end-->
            </div>
          <!--main content end-->
         </div>
       <div class="clear"></div>
     </div>
    </div>
   </section>
  <!--main end-->
  </div>
</div>
<!--contain end-->

<script type="text/javascript">
   
   var space_desc = '您还没有完善资料，请完善资料';
   function open_shop(){  
       user_type=$("#user_type").val();
      
       if(user_type==""){
   if(space_desc){
       
        showDialog(space_desc,"confirm","友情提示",function (){
        location.href='index.php?r=user/setting';
        });
        return false;
        }
       }
   		
 		
   }
</script>
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
In.add('jscolor',{path:"resource/js/others/jscolor.js",type:'js'}); 
In('calendar'); 

$(function(){
$(".togg_u").focus(function(){
        	 this.value = '';
        }).blur(function(){
                this.value == '' ? this.value = $(this).attr(this.title ? 'title' : 'original-title') : '';
        })
}) 	
</script>
