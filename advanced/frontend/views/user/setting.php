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
                    <img src='/public/data/avatar/default/man_small.jpg' uid='15' class='pic_small'>                </p>
            </div>
            <ul class="intor">
                <li>
                    欢迎您，<?php  $session=new \yii\web\Session();  echo $session->get("user_name")?>                </li>
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
                                                                                        <li class="selectedLava">
                                                <a href="index.php?r=user/setting" >基本资料</a>
                                            </li>
                                                <li >
                                                <a href="index.php?r=user/setting_contact" >联系方式</a>
                                            </li>
                                                                                        <li >
                                                <a href="index.php?r=user/setting_skill" >威客技能</a>
                                            </li>
                                                                                    </ul>
                                    </nav>
                                </div>
                                <div class="clear">
                                </div>
                            </header>
                            <!--header内容头部 end-->
                            <div class="step_progress clearfix">
                                
                                <div class="messages m_infor">
                                     <div class="icon16">warning</div>
                                         站长建议：首次注册用户请选择您的身份，用户身份是您对外展示用户信息和开通店铺的重要向导，请谨慎填写！                                     <a href="###" class="close">&times;</a>
                               </div>
 
                            </div>
                            <div class="prefix_1 suffix_1">
                                <div class="clearfix box font14">
                                    <!--from表单 start-->
                                     <?php
                                        if($arr["user_type"]==""){
                                    ?>
                                    <form action="index.php?r=user/setting_edit" method="post" id="frm" name="frm">
                                   
                     <div class="rowElem clearfix">
                                            <label class="grid_3 t_r">
                                            	用户类型：                                            </label>
                    <div class="fl_l ml_5">
<input type="radio" name="conf[user_type]" value='1' checked="checked" id="type_1">个人
<input type="radio" name="conf[user_type]" value='2' id="type_2"  onclick="shows()">企业                    </div>									
                                        </div>
                     <div class="rowElem clearfix">
                                            <label class="grid_3 t_r">
                                            	所属行业：                                            </label>
                    <div class="fl_l ml_5">
                        <select name="conf[indus_pid]" id="indus_pid" title="选择行业" onchange="showchild(this.value)" limit = "required:true;between:5-10" msg = '行业没有选择' msgArea="span_indus">
                            <option value="">选择行业</option>
                            <?php
                              foreach ($industry as $val) {
                                  
                            ?>
                            <option value="<?php echo $val["indus_id"]?>" ><?php echo $val['indus_name']?></option>
                             <?php
                              }
                             ?>
 </select>
 
                    </div>
                    <div class="fl_l" id="reload_indus">
                        <select name="conf[indus_id]" id="indus_id" limit = "required:true;between:5-10" msg='没有选择子行业' title='请选择子行业' msgArea="span_indus">
                            <option value="">请选择子行业</option>
                        </select>
                    </div>	
<span id="span_indus"></span>								
                                        </div>
			
<div id="single" ><!--个人-->

                                        <div class="rowElem clearfix">
                                            <label class="grid_3 t_r">
                                            	<span id="na_1">真实姓名</span>
                                            	<span id="na_2" class='hidden'>联系人</span>
                                                ：                                            </label>
                                            <div class="grid_9 ">
                                                <input class="txt_input " name="conf[truename]" size="39"   type="text" value="" title="请输入真实姓名，格式：张三"
 id="truename" limit="required:false;len:2-10" msg="联系人不得超过10个字符" msgArea="span_truename"/>
                                            	
<select name="conf[sex]" >
<option value="男" selected>
男</option>
<option value="女" >
女</option>
</select>
<span id="span_truename"></span>
</div>

                                            <div class="grid_3 t_l">
                                            	

                                            </div>
                                        </div>
<div class="rowElem clearfix">
                                            <label class="grid_3 t_r">
                                               出生日期：                                            </label>
                                            <div class="grid_12 ">
                                                <input class="txt_input" name="conf[birthday]"  												type="text" size="39" value=""
 onclick="showcalendar(event, this, 0)" title="请填写您的出生日期，早于1999-12-28" msgArea="span_birthday" 
 												 limit="required:true;type:date;less:max" msg="日期格式不正确或您未满15岁" id="birthday" />
 <span id="span_birthday"></span>
                                            </div>


                                        </div>
    
 

 
<div class="rowElem clearfix form_button">
                                            <button type="submit" name="sbt_edit" class="button" value="保存" >
                                                <span class="check icon"></span>保存                                            </button>
                                        </div>

   <?php
          }elseif($arr["user_type"]==1){
    ?>
    
    <form action="index.php?r=user/setting_edit" method="post" id="frm" name="frm">
                                    <div class="rowElem clearfix">
                                            <label class="grid_3 t_r">
                                            	所属行业：                                            </label>
                    <div class="fl_l ml_5">
                        <select name="conf[indus_pid]" id="indus_pid" title="选择行业" onchange="showchild
(this.value)" limit = "required:true;between:5-10" msg = '行业没有选择' msgArea="span_indus">
                            <option value="">选择行业</option>
                            <?php
                              foreach ($industry as $val) {
                                  if($arr["indus_pid"]==$val["indus_id"]){
                            ?>
                            <option value="<?php echo $val["indus_id"]?>" selected><?php echo $val
['indus_name']?></option>
                             <?php
                              }else{
                             ?>
                             <option value="<?php echo $val["indus_id"]?>" ><?php echo $val['indus_name']?></option>
                             <?php
                              }}
                             ?>
 </select>
 
                    </div>
                    <div id="reload_indus" class="fl_l">
                        <select msgarea="span_indus" title="请选择子行业" msg="没有选择子行业" 
limit="required:true;between:5-10" id="indus_id" name="conf[indus_id]">
                            <option value="">请选择子行业</option>
                                                <?php
                                                     $industry=  \app\models\Industry::find()->where(["indus_pid"=>$arr
['indus_pid'] ])->all();
                                                     foreach ($industry as $val ){
                                                            if($arr["indus_id"]==$val["indus_id"]){
                                                ?>
                           		  <option value="<?php echo $val["indus_id"]?>" selected><?php echo 
$val['indus_name']?></option>
                                        <?php
                                                            }else{
                                        ?> 
                                          	  <option value="<?php echo $val["indus_id"]?>" ><?php echo $val
['indus_name']?></option>
                                      <?php
                                                     }}
                                      ?>    
                        </select>
                    </div>	
<span id="span_indus"></span>							
	
                                        </div>
			
<div id="single"><!--个人-->

                                        <div class="rowElem clearfix">
                                            <label class="grid_3 t_r">
                                            	<span id="na_1">真实姓名</span>
                                            	<span class="hidden" id="na_2">联系人</span>
                                                ：                                            </label>
                                            <div class="grid_9 ">
                                                <input type="text" msgarea="span_truename" msg="真实姓名不得超过
10个字符" limit="required:false;len:2-10" id="truename" value="<?php echo $arr["truename"]?>" size="39" 
name="conf[truename]" class="txt_input" original-title="请输入真实姓名，格式：张三">
                                            	
<select name="conf[sex]">
    <?php
        if($arr["sex"]=="男"){
    ?>
<option value="男" selected>男</option>
<option value="女">女</option>
<?php 
        }else{
?>
<option value="男" >男</option>
<option value="女" selected>女</option>
<?php
        }
?>
</select>
<span id="span_truename"></span>
</div>

                                        </div>
<div class="rowElem clearfix">
                                            <label class="grid_3 t_r">
                                               出生日期：                                            </label>
                                            <div class="grid_12 ">
<input type="text" id="birthday" msg="日期格式不正确或您未满15岁" 
       limit="required:true;type:date;less:max" msgarea="span_birthday" onclick="showcalendar(event, this, 
0)" value="<?php echo $arr["birthday"]?>" size="39" name="conf[birthday]" class="txt_input" original-
title="请填写您的出生日期，早于1999-12-28">
 <span id="span_birthday"></span>
                                            </div>


                                        </div>



</div>
    
 

 
<div class="rowElem clearfix form_button">
                                            <button type="submit" name="sbt_edit" class="button" value="保存" >
                                                <span class="check icon"></span>保存                                            </button>
                                        </div>
    
    <?php
           }elseif($arr["user_type"]==2){
    ?>
        
    <form action="index.php?r=user/com" method="post" id="frm" name="frm">
     
           <div class="rowElem clearfix">
                                            <label class="grid_3 t_r">
                                            	所属行业：                                            </label>
                    <div class="fl_l ml_5">
                        <select name="conf[indus_pid]" id="indus_pid" title="选择行业" onchange="showchild
(this.value)" limit = "required:true;between:5-10" msg = '行业没有选择' msgArea="span_indus">
                            <option value="">选择行业</option>
                            <?php
                              foreach ($industry as $val) {
                                  if($arr["indus_pid"]==$val["indus_id"]){
                            ?>
                            <option value="<?php echo $val["indus_id"]?>" selected><?php echo $val
['indus_name']?></option>
                             <?php
                              }else{
                             ?>
                             <option value="<?php echo $val["indus_id"]?>" ><?php echo $val['indus_name']?></option>
                             <?php
                              }}
                             ?>
 </select>
 
                    </div>
                    <div id="reload_indus" class="fl_l">
                        <select msgarea="span_indus" title="请选择子行业" msg="没有选择子行业" 
limit="required:true;between:5-10" id="indus_id" name="conf[indus_id]">
                            <option value="">请选择子行业</option>
                                                <?php
                                                     $industry=  \app\models\Industry::find()->where(["indus_pid"=>$arr
['indus_pid'] ])->all();
                                                     foreach ($industry as $val ){
                                                            if($arr["indus_id"]==$val["indus_id"]){
                                                ?>
                           		  <option value="<?php echo $val["indus_id"]?>" selected><?php echo 
$val['indus_name']?></option>
                                        <?php
                                                            }else{
                                        ?> 
                                          	  <option value="<?php echo $val["indus_id"]?>" ><?php echo $val
['indus_name']?></option>
                                      <?php
                                                     }}
                                      ?>    
                        </select>
                    </div>	
<span id="span_indus"></span>							
	
                                        </div>
<div id="enterprise"><!--企业-->

<div class="rowElem clearfix">
            <label class="grid_3 t_r">
                   企业/机构名称：                                            </label>
           <div class="grid_10 mr_30">
                                                <input type="text" msgarea="span_company" msg="企业/机构名称4-100
个字符之间" limit="required:false;len:4-100" id="company" value="<?php echo $com["company"]?>" 
size="39" name="company" class="txt_input" original-title="企业/机构名称">
 <span id="span_company"></span>
                                            </div>

                                        </div>							
			
<div class="rowElem clearfix">
                                            <label class="grid_3 t_r">
                                                	营业执照号码：                                            </label>
                                            <div class="grid_10 mr_30">
                                                <input type="text" onkeyup="clearstr(this);" msgarea="span_licen_num" 
msg="营业执照号码5-30个字符之间" limit="required:false;len:5-30" id="licen_num" value="<?php echo 
$com["licen_num"]?>" size="39" name="licen_num" class="txt_input" original-title="企业/机构营业
执照号码">
  <span id="span_licen_num"></span>
                                            </div>
                                            	

                                        </div>
<div class="rowElem clearfix">
                                            <label class="grid_3 t_r">
                                                	法人代表：                                            </label>
                                            <div class="grid_10 mr_30">
                                                <input type="text" msgarea="span_legal" msg="法人代表2-10个字符之
间" limit="required:false;len:2-10" id="legal" value="<?php echo $com["legal"]?>" size="39" name="legal" class="txt_input" original-title="企业/机构法人代表">
 <span id="span_legal"></span>
                                            </div>
                                            		
                                        </div>
<div class="rowElem clearfix">
                                            <label class="grid_3 t_r">
                                                	员工人数：                                            </label>
                                            <div class="grid_10 mr_30">
                                                <input type="text" msgarea="span_staff_num" msg="员工人数至少为1" 
limit="required:false;type:int;len:1-" id="staff_num" value="<?php echo $com["staff_num"]?>" size="39" 
name="staff_num" class="txt_input" original-title="企业/机构员工人数">
 <span id="span_staff_num"></span>
                                            </div>
                                            	
                                        </div>
<div class="rowElem clearfix">
                                            <label class="grid_3 t_r">
                                                	经营年数：                                            </label>
                                            <div class="grid_10 mr_30">
                                                <input type="text" msgarea="span_run_years" msg="经营年数至少为1" 
limit="required:false;type:int;len:1-" id="run_years" value="<?php echo $com["run_years"]?>" size="39" 
name="run_years" class="txt_input" original-title="企业/机构经营年数">
 <span id="span_run_years"></span>
                                            </div>
                                            	
                                        </div>
<div class="rowElem clearfix">
                                            <label class="grid_3 t_r">
                                                	企业/机构网址：                                            </label>
                                            <div class="grid_10 mr_30">
                                                <input type="text" msgarea="span_domain" msg="企业/机构网址输入有
误" limit="required:false;type:url" id="run_domain" value="<?php echo $com['url']?>" size="39" 
name="url" class="txt_input" original-title="企业/机构网址">
 <span id="span_domain"></span>
                                            </div>
                                            		
                                        </div>
<div class="rowElem clearfix">
                                            <label class="grid_3 t_r">
                                                	详细地址：                                            </label>
                                            <div class="grid_10 mr_30">
                                                <input type="text" msgarea="span_address" msg="详细地址到少5个字" 
limit="required:false;len:5-" id="address" value="<?php echo $arr["address"]?>" size="39" name="address" class="txt_input" original-title="企业/机构详细地址">
 <span id="span_address"></span>
                                            </div>
                                            		
                                        </div>

</div>
        <div class="rowElem clearfix form_button">
                                            <button type="submit" name="sbt_edit" class="button" value="保存" >
                                                <span class="check icon"></span>保存                                            </button>
                                        </div>
     <?php
           }
     ?>
</div>
		
                                       <div id="enterprise1" style="display:none">
                                     	   <div class="rowElem clearfix">
                                            <div class="grid_18 alpha omega">
                                                <label class="grid_3 t_r">
                                                	<span id="ab_1">个人简介</span>
                                                	<span id="ab_2" class='hidden'>企业简介</span>
：                                                </label>
<div class="ml_5 clearfix fl_l">
                                                <textarea cols="80" rows="8" name="conf[summary]" id="tar_content" msgArea="msg_content" class="xheditor-simple {skin:'nostyle'}" style="width:400px;"></textarea>
  <div id="msg_content"></div>
 <div class="ui_note">
                                                您的个人简介直接影响到雇主对您的第一印象，请慎重对待。                                            	</div>
</div>
                                            </div>
                                           </div>
   
   <div class="rowElem clearfix form_button">
                                            <button type="submit" name="sbt_edit" class="button" value="保存" >
                                                <span class="check icon"></span>保存                                            </button>
                                       		</div>
   
   
                                        </div>


<script type="text/javascript" src="/public/resource/js/xheditor/xheditor.js"></script>
<script type="text/javascript">
              $(function(){
editor = $("#tar_content").xheditor();
//editor.checkInner();
       })
           </script>
                                        <!--基本资料end-->
                                       
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
<script type="text/javascript">
In('form','custom','xheditor') ;
function check_basic1(){
formSub('frm','form',true);
}

function check_basic2(){
if(contentCheck('tar_content',"",50,1000,0,'msg_content',editor)){		
formSub('frm','form',true);
return true;
}else {
 	return false;
}
}
  

$(function(){
if(type!=2){
t1();
}else{
t2();
}
})
var type = '0';
$("#type_1").click(function(){
t1();
});
$("#type_2").click(function(){
t2();
});
function t1(){
$('#single,#na_1,#ab_1').removeClass('hidden').next().addClass('hidden');
$("#tar_content").attr("ignore",'true');

}
function t2(){
$('#single,#na_1,#ab_1').addClass('hidden').next().removeClass('hidden');
$("#birthday").attr("ignore",'true');
$("#truename").attr("ignore",'true');


}

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
In.add('jscolor',{path:"/publib/resource/js/others/jscolor.js",type:'js'}); 
In('calendar'); 

$(function(){
$(".togg_u").focus(function(){
        	 this.value = '';
        }).blur(function(){
                this.value == '' ? this.value = $(this).attr(this.title ? 'title' : 'original-title') : '';
        })
}) 


function shows(){
    $("#enterprise1").show();
}

function showchild(pid){
    
    if(pid){
            $.ajax({
                url:"index.php?r=user/indus",
                type:"get",            
                data:{"pid":pid},
                dataType:"jsonp",
                success:function(msg){
                    if(msg){
                        var str=" <option value=''>请选择子行业</option>";
                        for(var i in msg){
                              
                            str+='<option value='+i+'>'+msg[i]+'</option>'
                         }
                          $("#indus_id").html(str);          
                    }
                }
            })
    }
}
</script>
