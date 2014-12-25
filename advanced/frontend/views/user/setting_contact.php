<div class="clear"></div>
<!--contain start-->
<div class="wrapper">
    <div class="container_24">
        <link href="tpl/default/css/user_center.css" rel="stylesheet" type="text/css">
<header class="page_title clearfix  Anchor">
    <div class="grid_17">
        <h2 class="title pt_5">用户中心</h2>
    </div>
    <div class="grid_7 hidden">
        <div class="user_info">
            <div class="fl_l mr_10">
                <p>
                    <img src='http://127.0.0.1/weike/data/avatar/system/16_small.jpg' uid='1' class='pic_small'>                </p>
            </div>
            <ul class="intor">
                <li>
                    欢迎您，<?php $session=new \yii\web\Session();  echo $session->get("user_name")?></li>
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
                 <a href="index.php?r=user/setting" title="进入基本资料" class="selected">
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
                                <h2 class="grid_4 alpha omega box_title t_c">基本资料</h2>
                                <div class="grid_17 alpha omega">
                                    <nav class="box_nav">
                                     <ul>
                                               <li >
                                                <a href="index.php?r=user/setting" >基本资料</a>
                                            </li>
                                                                                        <li class="selectedLava">
                                                <a href="index.php?r=user/setting_contact" >联系方式</a>
                                            </li>
                                                                                        <li >
                                                <a href="index.php?r=user/setting_skill" >威客技能</a>
                                            </li>
                                                                                        <li >
                                                <a href="index.php?r=user/setting_cert" >资质证书</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                                <div class="clear">
                                </div>
                            </header>
                            <!--header内容头部 end-->
                            <div class="prefix_1 suffix_1 mt_10">
                                <div class="clearfix box font14">
                                    <!--from表单 start-->
       <form action="index.php?r=user/setting_contact_pro" method="post" id="frm" name="frm">
            <input type="hidden" name="formhash" id="formhash" value="679ee3">
                      <div class="rowElem clearfix">
                                                <label class="grid_2 t_r">
                                                   E-mail：                                                </label>
                                                <div class="grid_6">
              <input class="txt_input" name="conf[email]" id="email" type="text" value="<?php echo $arr["email"]?>" title="填写自己的常用邮箱" limit="required:false;type:email"
 msg="邮箱格式不正确" msgArea="span_email" size="37" />
 </div>
<span id="span_email"></span>
 </div>
    <div class="rowElem clearfix">
             <label class="grid_2 t_r">手机号码：                                                </label>
   <div class="grid_6">
       <input class="txt_input" name="conf[mobile]" id="mobile" type="text" value="<?php echo $arr["mobile"]?>" title="填写自己的手机号码,格式如：15212345678"
 limit="required:false;type:mobileCn" msg="号码格式不正确,格式如：15212345678" msgArea="span_mobile"
  size="37">
                                                   </div>
  <span class="t_r" id="span_mobile"></span>
                                        </div>
                                        <div class="rowElem clearfix">
                                                <label class="grid_2 t_r">
                                                   QQ：                                                </label>
                                                <div class="grid_6">
                                                    <input class="txt_input" name="conf[qq]" id="qq" type="text" value="<?php echo $arr["qq"]?>" title="填写自己的QQ账号,5-10长度" limit="required:false;type:int;len:5-13" msg="QQ格式不正确" msgArea="span_qq" size="37" />
                                                 </div>
                                          
 <span class="t_r" id="span_qq"></span>
                                        </div>
                                        <div class="rowElem clearfix">
                                                <label class="grid_2 t_r">
                                                    MSN：                                                </label>
                                                <div class="grid_6">
                                                    <input class="txt_input" name="conf[msn]" id="msn" type="text" value="<?php echo $arr["msn"]?>" title="填写自己的msn账号" limit="required:false;type:email" msg="msn格式不正确" msgArea="span_msn" size="37" />
                                                   
                                                </div>
                                           
 <span class="t_r" id="span_msn"></span>
                                        </div>
<!--
                                        <div class="rowElem clearfix">
                                                <label class="grid_2 t_r">
                                                    传真号码：                                                </label>
                                                <div class="grid_6">
                                                    <input class="txt_input" name="conf[fax]" id="fax" type="text" value="027-88888888" title="填写自己的传真号码,格式如：027-88888888" limit="required:false;type:fax" tips="" msg="号码格式不正确,格式如：027-88888888" msgArea="span_fax" size="37" />
                                                   
                                                </div>
                                            <div class="grid_2 fl_l">
                                                <select name="sect[fax]" style="width:75px">
                                                    <option value="1" >不公开&nbsp;</option>
                                                    <option value="2" selected="selected">公开&nbsp;</option>
                                                </select>
                                            </div> <span class="t_r" id="span_fax"></span>
                                        </div>
-->
                                        <div class="rowElem clearfix">
                                                <label class="grid_2 t_r">
                                                    固定电话：                                                </label>
                                                <div class="grid_6">
                                                    <input class="txt_input" name="conf[phone]" id="phone" type="text" value="<?php echo $arr["phone"]?>" title="填写自己的固话号码,格式如：027-99999999" limit="required:false;type:tel" tips="" msg="号码格式不正确,格式如：027-99999999" msgArea="span_phone" size="37" />
                                                   
                                                </div>
                                           
 <span class="t_r" id="span_phone"></span>	
                                        </div>
                                        <div class="rowElem clearfix">
                                            <label class="grid_2 t_r">
                                                所在地：                                            </label>
<div class="grid_15">
<select name="province"></select><select name="city"></select><select name="area"></select>
</div>
                </div>
                                        <!--联系方式end-->
                                        <div class="rowElem clearfix form_button">
                                            <button class="button" type="submit" name="sbt_edit" value="保存" >
                                                <span class="check icon"></span>保存                                            </button>
                                        </div>
                                    </form>
                                    <!--from表单 end-->
                                </div>
                            </div>
                            <!--detail内容 end-->
                        </div>
                        <!--main content end-->
                    </div>
                    <div class="clear">
                    </div>
                </div>
            </div>
        </section>
        <!--main end-->
    </div>
</div>
   <script type="text/javascript"  >
        	In('form','pcas',function(){
  			  new PCAS("province","city","area","贵州省","毕节市","金沙县");
});  
        </script>
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

