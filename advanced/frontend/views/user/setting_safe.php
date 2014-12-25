
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
                    欢迎您，<?php $session=new \yii\web\Session();  echo $session->get("user_name")?> </li>
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
                 <a href="index.php?r=user/setting_pic" title="进入头像设置" >
                   <div class="icon16 picture">icon</div><strong>头像设置</strong>
     </a>
             </li>
        </ul>
       <ul class="nav_group clearfix">
             <li>
                 <a href="index.php?r=user/setting_safe" title="进入安全设置" class="selected">
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
                        <h2 class="grid_4 alpha omega box_title t_c">安全设置</h2>
                        <div class="grid_17 alpha omega">
          <nav class="box_nav">
           <ul>
                            <li class="selectedLava">
                   <a href="index.php?r=user/setting_safe" title="更改密码">更改密码</a>
               </li>
                            <li >
                   <a href="index.php?r=user/setting_sec_code" title="更改安全码">安全密码</a>
               </li>
                        </ul>
          </nav>
        </div>
                    </header>
                    <!--header内容头部 end-->

<!--detail内容 start-->
                    <article class="box_detail">
                        <div class="messages m_warn clearfix">
                            <span class="icon16 fl_l"></span>
                            密码变更：在进行操作同时，请牢记自己的新密码！<a href="###" class="close">&times;</a>
                        </div>
                        <div class=" prefix_1 suffix_1">
                            <div class="box waring  form_box">
                            	<div class="inner">
                                <form action="index.php?do=user&view=setting&op=safe&opp=change_password" method="post" name="frm" id="frm" onload="document.form.autocomplete.setAttribute('autocomplete', 'off');">
                                    <div class="rowElem clearfix">
                                        <label class="grid_4">
                                            当前密码：                                        </label>
                                        <div class="grid_11">
                                            <input class="txt_input" type="password" size="40" title=输入原密码 name="old_password" id="old_password" limit="required:true" ajax="index.php?do=user&view=setting&op=safe&check_old=" msg=输入原密码 msgArea="span_old"/><span id="span_old"></span>
                                        </div>
                                    </div>
                                    <div class="rowElem clearfix">
                                        <label class="grid_4">
                                            新密码：                                        </label>
                                        <div class="grid_11">
                                            <input class="txt_input" type="password" size="40" title=请输入6-15位新密码 name="new_password" id="new_password" limit="required:true;len:6-15" msg=密码输入错误 msgArea="span_new" /><span id="span_new"></span>
                                        </div>
                                    </div>
                                    <div class="rowElem clearfix">
                                        <label class="grid_4">
                                            确认密码：                                        </label>
                                        <div class="grid_11">
                                            <input class="txt_input" type="password" size="40" title=确认新密码 name="new_equal" id="new_equal" limit="required:true;equals:new_password" msg=确认密码输入有误 msgArea="span_new_equal"/><span id="span_new_equal"></span>
                                        </div>
                                    </div>
                                    <div class="rowElem clearfix form_button">
                                        <div class="grid_8">
                                            &nbsp;
                                        </div>
                                        <div class="grid_10 t_l">
                                            <button class="grid_2 alpha" type="submit" value=提交 onclick="formSub('frm','form',true)">
                                                提交                                            </button>
                                        </div>
                                    </div>
                                </form>
</div>
                            </div>
                        </div>
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
<script type="text/javascript">
$(function(){
In('form');
})

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