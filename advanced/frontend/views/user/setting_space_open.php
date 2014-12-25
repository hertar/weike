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
                    <img src='/public/data/avatar/default/women_small.jpg' uid='12' class='pic_small'>                </p>
            </div>
            <ul class="intor">
                <li>
                    欢迎您，<?php $session=new \yii\web\Session();  echo $session->get("user_name")?>                   </li>
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
<div class="clear"></div><!--main start-->

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
            <h2 class="grid_4 alpha omega box_title t_c">店铺设置</h2>
             <div class="grid_17 alpha omega">
                <nav class="box_nav">
                   <ul>
                                                  <li class="selectedLava">
                                <a href="index.php?do=user&view=setting&op=space&opp=basic#userCenter" title="店铺设置">店铺设置</a>
                            </li>  
                                            </ul>
                    
                  </nav>
              </div>
            <div class="clear"></div>
         </header>
       <!--header内容头部 end-->


         <div class="prefix_1 suffix_1">
         	<div id="tips"></div>
            <div class="clearfix form_box border_n" id="content_tip">
                <!--from表单 start-->
                  <form action="index.php?r=user/setting_space_add" method="post" id="frm" name="frm">
                  	<input type="hidden" name="formhash" id="formhash" value="47e5fc">
                  	<input type="hidden" value="1" name="shop_type"/>
  <input type="hidden" name="pk[shop_id]" id="shop_id" value=""><!--基本资料start-->
  <input type="hidden" name="ac" value="open"/>
     <div class="rowElem clearfix">
                           <label class="grid_3 t_r">店铺名称：</label>
                            <div class="grid_15">
   <input class="txt_input" name="shop_name" size="45" type="text" value="<?php echo $shop["shop_name"]?>" title="店铺名称,2-30字" id="shop_name" limit="required:true;len:2-30" msg="请正确填写店铺名称,2-30字符" msgArea="span_shop_name"/><span id="span_shop_name"></span>
                            </div>
                        </div>

 <!-- 个人空间 -->
 <div class="rowElem clearfix" id="slogans">
                            <label class="grid_3 t_r">个性签名：</label>
<div class="grid_13">
                           <textarea cols="71" rows="10" name="shop_slogans" id="tar_content" 
                                     class="xheditor {tools:'Bold,Fontface,FontColor,Italic,Underline,Strikethrough,Align,List,Outdent,Indent,Link,Unlink',skin:'nostyle'}">
                               <?php echo $shop["shop_slogans"]?>
                               
                           </textarea>
                                <div class="c999 grid_6" id="length_show"></div>
<div class="clear"></div>
                            <div class="ui_note">您的店铺广告语直接影响到他人对您的第一印象，请慎重对待。</div>
<script type="text/javascript">
   /*    $(function(){
editor = $("#shop_slogans").xheditor({'innerCheck':true});
editor.checkInner();
})*/
  </script>
</div>
                        </div>						
                        						
                            <div class="rowElem clearfix form_button">
                              <input type="hidden" name="sbt_edit" value="1">
                                 <button type="submit" class="button" value="保存">
                                    <span class="check icon"></span>保存                                 </button>
                            </div>
</form>
                         <!--from表单 end-->
                      </div>
                   </div>
                  <!--detail内容 end-->
               </div>
              <!--main content end -->
           <div class="clear"></div>
         </div>
        </div>
      </section>
     <!--main end-->
     </div>
    </div>
    <!--contain end-->
<script type="text/javascript" src="/public/resource/js/xheditor/xheditor.js"></script>
<script type="text/javascript">
    In.add('jscolor',{path:"/public/resource/js/others/jscolor.js",type:'js'});
    In('jscolor','form');                    
   /**
    * 表单提交 编辑空间
    * @param  obj
  */
              function check123(obj){
if(contentCheck('tar_content',"个性签名",20,1000,1,'slogans','editor')){						
formSub('frm','form',true);
                               // return true;
                        }else {
                     	return false;
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