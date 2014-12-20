<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>KPPW 2.2--后台管理 - 客客专业威客系统</title>
<link rel="shortcut icon" href=" /public/resource/img/system/logo.ico" />
<link rel="apple-touch-icon" href=" /public/resource/img/system/logo.ico"/>
<link href=" /public/tpl/css/admin_management.css" rel="stylesheet" type="text/css" />
<link href=" /public/resource/css/button/stylesheets/css3buttons.css" rel="stylesheet" type="text/css" />
<link title="style1" href=" /public/tpl/skin/default/style.css" rel="stylesheet" type="text/css" />
<!--<link title="style2" href="tpl/skin/light/style.css" rel="stylesheet" type="text/css" />-->
<script type="text/javascript" src=" /public/resource/js/jquery.js"></script>
<script type="text/javascript" src=" /public/lang/cn/script/lang.js" ></script>
</head>

<body class="skin" scroll="no">
<!--[if IE 6]><div id="ie6"><![endif]-->
<!--[if IE 7]><div id="ie7"><![endif]-->
<!--[if IE 8]><div id="ie8"><![endif]-->
<div id="append_parent"></div>
<div id="ajaxwaitid" style="display:none">
<div>
        	<img src=" /public/resource/img/system/loading.gif" alt="loading"/>
请求处理中...</div>
</div>
<div class="login_box">
<div class="header">
<div class="logo">
<h1><img src=" /public/tpl/img/logo.png" alt="后台管理 - 客客专业威客系统" title="后台管理 - 客客专业威客系统"/></h1>
    </div>

    <div class="nav" id="nav_div">
    	<ul>
    		<!--顶部一级菜单 start-->
<li><a href="#" rel="shortcuts"class="select">快捷操作</a></li>
    		<li><a href="#" rel="config">全局配置</a></li>
<li><a href="#" rel="article">资讯管理</a></li>
<li><a href="#" rel="task">任务管理</a></li>
<li><a href="#" rel="shop">商店管理</a></li>
<li><a href="#" rel="finance">财务管理</a></li>
<li><a href="#" rel="user">用户管理</a></li>
<li><a href="#" rel="tool">站长工具</a></li>
<li><a href="#" rel="app">应用中心</a></li>
    		
<!--顶部一级菜单 end-->
        </ul>
    </div> 
<div class="arrow" id="show_much">
<a href="#" id="a_show_more" class="show_hide" style="display:none">▼</a>
<div class="hide_nav">
<ul>
<li><a href="index.php?do=config" rel="config">全局配置</a></li>
<li><a href="index.php?do=article" rel="article">资讯管理</a></li>
<li><a href="index.php?do=task" rel="task">任务管理</a></li>
<li><a href="index.php?do=shop" rel="shop">商店管理</a></li>
<li><a href="index.php?do=finance" rel="finance">财务管理</a></li>
<li><a href="index.php?do=user" rel="user">用户管理</a></li>
<li><a href="index.php?do=tool" rel="tool">站长工具</a></li>
<li><a href="index.php?do=app" rel="app">应用中心</a></li>
</ul> 
</div>
</div>
   <script type="text/javascript">
    	$(function (){
show_a();
$("body,iframe").click(function(){
$(".hide_nav").hide();
});

  $(window).resize(function() { 
  				show_a();
});

$('#show_much').click(function(e){
   			$('.hide_nav').toggle();
e.stopPropagation();
return false;
         });


})
 
  function show_a(){
  	
var nav_width = $("#nav_div").width();

if(nav_width<558){ 
$("#a_show_more").show();
$("#show_much").show();

}else{

$("#a_show_more").hide();
$("#show_much").hide(); 
}		 
  }
 
    </script>

    
    <div class="user_box">
    	<div class="avatar">
        	<a href="#" title="admin"><img src='http://127.0.0.1/weike/data/avatar/default/man_small.jpg' uid='1' class='pic_small'></a> </div>
        <?php $session=new  yii\web\Session()?>
        <div class="name">您好，创始人<b><?php  echo $session->get("username")?></b></div>
        <div class="link_bar">
        	<a href="javascript:;" class="lock" onclick="fresh();" title="刷新">刷新</a> 
         	<a href="javascript:;" class="lock" onclick="del_cache();" title="清除缓存">清除缓存</a> 
            <a href="../../index.php" target="_blank" class="sitehome">网站首页</a>
            <a href="index.php?do=logout" class="exit">安全退出</a>        
        </div>
   </div>
</div>

<script>
function del_cache(){
var src = $("#display_frame").attr("src");
$.post('index.php?do=tool&view=cache&sbt_edit=1&ckb_obj_cache=1&ckb_tpl_cache=1&ajax=1',function (json){
if(json.status==1){

artDialog.tips(L.clear_success,'1.5');
}


},'json');

 
//$("#display_frame").attr("src","src""&index.php?do=tool&view=cache&sbt_edit=1&ckb_obj_cache=1&ckb_tpl_cache=1");

}
function fresh(){
document.getElementById("display_frame").contentDocument.location.reload(true); 
 
}
window.onload = function(){ 
   
 $("body").ajaxStart(function(){
   $("#ajaxwaitid").fadeIn();
   }).ajaxComplete(function(){
   
   $("#ajaxwaitid").fadeOut();
   })	
 
}
</script>
<div  class="side_bar"> 		
        <div class="side_con">
        <div id="shortcuts" class="menu_bar">
   		<dl>
                  	<dt><i class="arrow_r">&nbsp;</i>快捷操作</dt>
                  <dd>
                        <ul id="ul_kjcz">
                        	
                  <li><a href="index.php?r=auth/item_list" target="display_frame" class="select" r_id="38">认证项目</a></li>
                <li><a href="index.php?r=tool/cache" target="display_frame"  r_id="20">更新缓存</a></li>
</ul>
                  </dd>
                </dl>
       </div>
   
           <div id="config" class="menu_bar">
       	      		<dl>
                  	<dt><i class="arrow_r">&nbsp;</i>系统配置</dt>
                  <dd>
                        <ul >
<li><a href="index.php?r=config/quanju" target="display_frame" r_id="34">全局配置</a></li>
<li><a href="index.php?r=config/model" target="display_frame" r_id="37">模型管理</a></li>
<li><a href="index.php?r=config/integration" target="display_frame" r_id="35">会员整合</a></li>
<li><a href="index.php?r=config/nav" target="display_frame" r_id="41">自定义导航</a></li>
<li><a href="index.php?r=config/currencies" target="display_frame" r_id="148">汇率配置</a></li>
 		                        </ul>
                  </dd>
                </dl>
      		<dl>
                  	<dt><i class="arrow_r">&nbsp;</i>行业技能</dt>
                  <dd>
                        <ul >
 <li><a href="index.php?r=task/industry" target="display_frame" r_id="7">行业管理</a></li>
<li><a href="index.php?r=task/skill" target="display_frame" r_id="8">技能管理</a></li>
 		                        </ul>
                  </dd>
                </dl>
      		<dl>
                  	<dt><i class="arrow_r">&nbsp;</i>接口管理</dt>
                  <dd>
                        <ul >
<li><a href="index.php?r=msg/weibo" target="display_frame" r_id="63">OAuth登录</a></li>
<li><a href="index.php?r=msg/map" target="display_frame" r_id="141">地图接口</a></li>
<li><a href="index.php?r=msg/config" target="display_frame" r_id="66">短信配置</a></li>
<li><a href="index.php?r=msg/internal" target="display_frame" r_id="73">短信模板</a></li>
<li><a href="index.php?r=msg/pay" target="display_frame" r_id="2">支付接口</a></li>
 		                        </ul>
                  </dd>
                </dl>
      		<dl>
                  	<dt><i class="arrow_r">&nbsp;</i>增值服务</dt>
                  <dd>
                        <ul >
<li><a href="index.php?r=payitem/index" target="display_frame" r_id="138">服务项管理</a></li>
<li><a href="index.php?r=payitem/buy" target="display_frame" r_id="139">购买记录</a></li>
 		                        </ul>
                  </dd>
                </dl>
          </div>
           <div id="article" class="menu_bar">
       	      		<dl>
                  	<dt><i class="arrow_r">&nbsp;</i>关于网站</dt>
                  <dd>
                        <ul >
<li><a href="index.php?r=article/bulletin" target="display_frame" r_id="156">网站公告</a></li>
<li><a href="index.php?r=article/about" target="display_frame" r_id="157">网站介绍</a></li>
 		                        </ul>
                  </dd>
                </dl>
      		<dl>
                  	<dt><i class="arrow_r">&nbsp;</i>文章模块</dt>
                  <dd>
                        <ul >
<li><a href="index.php?r=article/art_list" target="display_frame" r_id="16">文章管理</a></li>
<li><a href="index.php?r=article/cat_list" target="display_frame" r_id="14">文章分类</a></li>
 		                        </ul>
                  </dd>
                </dl>
      		<dl>
                  	<dt><i class="arrow_r">&nbsp;</i>帮助模块</dt>
                  <dd>
                        <ul >
<li><a href="index.php?r=article/cat_help" target="display_frame" r_id="44">帮助分类</a></li>
<li><a href="index.php?r=article/help_list" target="display_frame" r_id="42">帮助管理</a></li>
 		                        </ul>
                  </dd>
                </dl>
      		<dl>
                  	<dt><i class="arrow_r">&nbsp;</i>成功案例</dt>
                  <dd>
                        <ul >
<li><a href="index.php?r=article/case_list" target="display_frame" r_id="154">案例管理</a></li>
 		                        </ul>
                  </dd>
                </dl>
          </div>
           <div id="task" class="menu_bar">
       	      		<dl>
                  	<dt><i class="arrow_r">&nbsp;</i>单人悬赏</dt>
                  <dd>
                        <ul >
<li><a href="index.php?r=model/single_task_list" target="display_frame" r_id="m10">任务管理</a></li>
<li><a href="index.php?r=model/single_task_config" target="display_frame" r_id="m11">任务配置</a></li>
 		                        </ul>
                  </dd>
                </dl>
      		<dl>
                  	<dt><i class="arrow_r">&nbsp;</i>多人悬赏</dt>
                  <dd>
                        <ul >
<li><a href="index.php?r=model/many_task_list" target="display_frame" r_id="m22">任务管理</a></li>
<li><a href="index.php?r=model/many_task_config" target="display_frame" r_id="m23">任务配置</a></li>
 		                        </ul>
                  </dd>
                </dl>
      		<dl>
                  	<dt><i class="arrow_r">&nbsp;</i>计件悬赏</dt>
                  <dd>
                        <ul >
<li><a href="index.php?r=model/jijian_task_list" target="display_frame" r_id="m34">任务管理</a></li>
<li><a href="index.php?r=model/jijian_task_config" target="display_frame" r_id="m35">任务配置</a></li>
 		                        </ul>
                  </dd>
                </dl>
      		<dl>
                  	<dt><i class="arrow_r">&nbsp;</i>普通招标</dt>
                  <dd>
                        <ul >
<li><a href="index.php?r=model/normal_task_list" target="display_frame" r_id="m46">任务管理</a></li>
<li><a href="index.php?r=model/normal_task_config" target="display_frame" r_id="m47">任务配置</a></li>
 		                        </ul>
                  </dd>
                </dl>
      		<dl>
                  	<dt><i class="arrow_r">&nbsp;</i>订金招标</dt>
                  <dd>
                        <ul >
<li><a href="index.php?r=model/deposit_task_list" target="display_frame" r_id="m58">任务管理</a></li>
<li><a href="index.php?r=model/deposit_task_config" target="display_frame" r_id="m59">任务配置</a></li>
 		                        </ul>
                  </dd>
                </dl>
          </div>
           <div id="shop" class="menu_bar">
       	      		<dl>
                  	<dt><i class="arrow_r">&nbsp;</i>店铺管理</dt>
                  <dd>
                        <ul >
            <li><a href="index.php?r=store/store_list" target="display_frame" r_id="170">店铺管理</a></li>
 		                        </ul>
                  </dd>
                </dl>
      		<dl>
                  	<dt><i class="arrow_r">&nbsp;</i>威客作品</dt>
                  <dd>
                        <ul >
<li><a href="index.php?r=store/order" target="display_frame" r_id="m610">订单管理</a></li>
<li><a href="index.php?r=store/works" target="display_frame" r_id="m611">作品管理</a></li>
<li><a href="index.php?r=store/works_config" target="display_frame" r_id="m612">作品配置</a></li>
 		                        </ul>
                  </dd>
                </dl>
      		<dl>
                  	<dt><i class="arrow_r">&nbsp;</i>威客服务</dt>
                  <dd>
                        <ul >
<li><a href="index.php?r=store/server_order" target="display_frame" r_id="m713">订单管理</a></li>
<li><a href="index.php?r=store/server" target="display_frame" r_id="m714">服务管理</a></li>
<li><a href="index.php?r=store/server_config" target="display_frame" r_id="m715">服务配置</a></li>
 		                        </ul>
                  </dd>
                </dl>
          </div>
           <div id="finance" class="menu_bar">
       	      		<dl>
                  	<dt><i class="arrow_r">&nbsp;</i>财务模块</dt>
                  <dd>
                        <ul >
<li><a href="index.php?r=finance/revenue" target="display_frame" r_id="152">财务概况</a></li>
<li><a href="index.php?r=finance/detail " target="display_frame" r_id="4">财务明细</a></li>
<li><a href="index.php?r=finance/report" target="display_frame" r_id="3">财务分析</a></li>
<li><a href="index.php?r=finance/recharge" target="display_frame" r_id="76">充值审核</a></li>
<li><a href="index.php?r=finance/withdraw" target="display_frame" r_id="5">提现审核</a></li>
<li><a href="index.php?r=user/charge" target="display_frame" r_id="155">手动充值</a></li>
 		                        </ul>
                  </dd>
                </dl>
          </div>
           <div id="user" class="menu_bar">
       	      		<dl>
                  	<dt><i class="arrow_r">&nbsp;</i>用户管理</dt>
                  <dd>
                        <ul >
<li><a href="index.php?r=user/user_add" target="display_frame" r_id="10">添加用户</a></li>
<li><a href="index.php?r=user/user_list" target="display_frame" r_id="11">用户管理</a></li>
<li><a href="index.php?r=user/custom_list" target="display_frame" r_id="33">用户组</a></li>
 		                        </ul>
                  </dd>
                </dl>
      		<dl>
                  	<dt><i class="arrow_r">&nbsp;</i>系统组管理</dt>
                  <dd>
                        <ul >
<li><a href="index.php?r=user/group_list" target="display_frame" r_id="13">系统组管理</a></li>
<li><a href="index.php?r=user/group_add" target="display_frame" r_id="12">添加系统组</a></li>
 		                        </ul>
                  </dd>
                </dl>
      		<dl>
                  	<dt><i class="arrow_r">&nbsp;</i>用户体系</dt>
                  <dd>
                        <ul >
<li><a href="index.php?r=config/mark" target="display_frame" r_id="36">信誉规则</a></li>
<li><a href="index.php?r=config/mark_config" target="display_frame" r_id="78">互评配置</a></li>
<li><a href="index.php?r=config/mark_log" target="display_frame" r_id="79">互评记录</a></li>
 		                        </ul>
                  </dd>
                </dl>
      		<dl>
                  	<dt><i class="arrow_r">&nbsp;</i>用户反馈</dt>
                  <dd>
                        <ul >
<li><a href="index.php?r=trans/rights" target="display_frame" r_id="80">交易维权</a></li>
<li><a href="index.php?r=trans/report" target="display_frame" r_id="81">交易举报</a></li>
<li><a href="index.php?r=user/suggest" target="display_frame" r_id="82">投诉建议</a></li>
 		                        </ul>
                  </dd>
                </dl>
      		<dl>
                  	<dt><i class="arrow_r">&nbsp;</i>认证管理</dt>
                  <dd>
                        <ul >
<li><a href="index.php?r=auth/enterprise" target="display_frame" r_id="147">企业认证</a></li>
<li><a href="index.php?r=auth/bank" target="display_frame" r_id="68">银行认证</a></li>
<li><a href="index.php?r=auth/realname" target="display_frame" r_id="70">实名认证</a></li>
<li><a href="index.php?r=auth/email" target="display_frame" r_id="71">邮箱认证</a></li>
<li><a href="index.php?r=auth/mobile" target="display_frame" r_id="77">手机认证</a></li>
<li><a href="index.php?r=auth/item_list" target="display_frame" r_id="38">认证项目</a></li>
 		                        </ul>
                  </dd>
                </dl>
          </div>
           <div id="tool" class="menu_bar">
       	      		<dl>
                  	<dt><i class="arrow_r">&nbsp;</i>站长工具</dt>
                  <dd>
                        <ul >
    
<li><a href="index.php?r=tool/cache" target="display_frame" r_id="20">更新缓存</a></li>
<li><a href="index.php?r=tool/pv" target="display_frame" r_id="20">pv统计</a></li>
 		                        </ul>
                  </dd>
                </dl>
      		<dl>
                  	<dt><i class="arrow_r">&nbsp;</i>模板标签</dt>
                  <dd>
                        <ul >
                        	
<li><a href="index.php?r=tool/ad" target="display_frame" r_id="32">广告管理</a></li>
 		                        </ul>
                  </dd>
                </dl>
          </div>
           <div id="app" class="menu_bar">
       	      		<dl>
                  	<dt><i class="arrow_r">&nbsp;</i>应用中心</dt>
                  <dd>
                        <ul >
<li><a href="index.php?r=app/app_center" target="display_frame" r_id="159">应用中心</a></li>
 		                        </ul>
                  </dd>
                </dl>
      		<dl>
                  	<dt><i class="arrow_r">&nbsp;</i>广场管理</dt>
                  <dd>
                        <ul >
<li><a href="index.php?r=app/task_list" target="display_frame" r_id="163">免费需求</a></li>
<li><a href="index.php?r=app/service_list" target="display_frame" r_id="164">免费服务</a></li>
<li><a href="index.php?r=app/message_list" target="display_frame" r_id="165">留言管理</a></li>
<li><a href="index.php?r=app/weibo_list" target="display_frame" r_id="166">动态管理</a></li>
<li><a href="index.php?r=app/denounce_list" target="display_frame" r_id="167">举报管理</a></li>
 		                        </ul>
                  </dd>
                </dl>
      		<dl>
                  	<dt><i class="arrow_r">&nbsp;</i>推广营销</dt>
                  <dd>
                        <ul >
<li><a href="index.php?r=prom/config" target="display_frame" r_id="59">推广配置管理</a></li>
<li><a href="index.php?r=prom/relation" target="display_frame" r_id="58">推广关系管理</a></li>
<li><a href="index.php?r=prom/event" target="display_frame" r_id="61">推广财务管理</a></li>
 		                        </ul>
                  </dd>
                </dl>
          </div>
                
        </div>

</div>



<div class="tool_box">
<div class="bread">
    <a href="index.php?r=index/main" target="display_frame">管理首页</a>
    <span class="font_st">&gt;</span>
    <a href="javascript:void(0)" id="href_title">快捷操作</a>
    <a href="#" onclick="shortcuts(this);" id="add_shortcuts" ac='add_shortcuts' title="添加快捷操作"><span class="font_st">[+]</span></a>
    </div>
    <div class="other">
    		<input type="text" class="txt" name="fds[resource_name]" id="recource"/>
        	<button type="button" class="button ml_mr_5"  onclick="find_nav()"><span class="magnifier icon"></span>搜索</button>
<button id="map" type="button" class="button" onclick="nav();">导航地图</button>
    </div>
</div>

<div class="frame_box po_re">	
<iframe id="display_frame" name="display_frame"  scrolling="auto" src="index.php?r=index/main" frameborder="0" ></iframe>
</div>
<script type="text/javascript">
/*add shortcuts*/  
function shortcuts(obj){
var fastObj    =$('#shortcuts ul');//快捷导航对象
var sub        =$(".menu_bar a[class='select']:visible");//菜单对象
var r_id       =$(sub).attr('r_id');/*获取菜单编号*/
var sub_name   =$(sub).text();//菜单名称
var sub_h      =$(sub).attr('href');//菜单链接
var ac         =$(obj).attr('ac');//动作
if(sub.length>0){
$.post("index.php?do=index",
{ac:ac,r_id:r_id},function(json){
if(json.status==4){//成功
if(ac=='add_shortcuts'){//添加成功
var li="<li><a href="+sub_h+" target='display_frame' r_id="+r_id+">"+sub_name+"</a>"
+"<span class='arrow_l' style='display:none;'></span></li>";
fastObj.append(li);	
}else if(ac='rm_shortcuts'){//删除成功
if($(".side_bar .side_con #shortcuts").css('display')=='none'){
fastObj.find("a[r_id='"+r_id+"']").parent().remove();//在其他页面
}else{
sub.removeClass('select').parent().slideUp('1000').remove();//在快捷列表页面滑出
}								
}
reset_shortcuts(sub);
artDialog.tips(json.msg,'1.5');//消息提示
;return false;
}else{
art.dialog.alert(json.msg);return false;
}
},'json')
}else{
art.dialog.alert("请选择待添加快捷方式");return false;
}
}
/*菜单快捷[+-]重置*/
$(".menu_bar a").click(function(){
    var href_title = $(this).html();
$("#href_title").html(href_title).children('.arrow_l').remove();
reset_shortcuts(this);
})
function reset_shortcuts(obj){
var in_short_list='0';//不存在于快捷导航中
var r_id=$(obj).attr('r_id');
var s_cus=$("#shortcuts a[r_id='"+r_id+"']");//获取指定快捷对象
if(s_cus.length>0)	in_short_list='1';//查找是否存在快捷 
if(in_short_list=='1'){
$('#add_shortcuts').attr('ac','rm_shortcuts').attr('title',"移除快捷操作").find(".font_st").text('[-]');
}else if(in_short_list=='0'){
$('#add_shortcuts').attr('ac','add_shortcuts').attr('title',"添加快捷操作").find(".font_st").text('[+]');
}
}
/*show_map_nav*/
function nav(){
art.dialog.open('index.php?do=nav',{title:"后台网站导航",height:400,width:700});
}	
/**
 * search nav 
 */
function find_nav(){
var keyword=$("#recource").val();
if(keyword){
art.dialog.open('index.php?do=index&ac=nav_search&keyword='+keyword,{title:"导航搜索",height:'auto',width:'auto'});
}
}


/**show screen lock**/
$(function(){
var ifLock=parseInt(0)+0;
if(ifLock==1){
hidepanel();
showlogin();
}
})
/*show_control_panel*/	
function showpanel(){
var m=$('.side_bar').width();
var f=$('.frame_box').width();
var h=$('.nav').height();
$('.side_bar').animate({left: 0}).show();
$('.frame_box,.tool_box').animate({left: m}).show();
$('.header,.logo,.nav,.user_box').animate({top: 0}).show();
};
/*hide_control_panel*/	
function hidepanel(){
var m=$('.side_bar').width();
var f=$('.frame_box').width();
var h=$('.nav').height();
$('.side_bar').animate({left: -m}).fadeOut();
$('.frame_box,.tool_box').animate({left: f + m}).fadeOut();
$('.header,.logo,.nav,.user_box').animate({top: -h}).fadeOut();
};
/*show_login*/
function showlogin(){
var lock_window=art.dialog.open('index.php?do=index&ac=unlock',
{title:"锁屏状态",
width:320,
height:130,
content: "已进入锁屏状态"
});
}		
$(function() {
var m=$('.side_bar').width();
var f=$('.frame_box').width();
var h=$('.nav').height();

$('.side_bar').css("left",-m);
$('.frame_box,.tool_box').css("left",f + m);
$('.header,.logo,.nav,.user_box').css("top",-h);
 

showpanel();

$('.side_con').width( $('.menu_bar').length * $('.side_bar').width());
$('.side_con').find('.menu_bar').hide().end();
$('.side_con .menu_bar:first-child').show();

$('.menu_bar dl').find('dd').hide().end().find('dt').click(function() {
var answer = $(this).next();
var arrow = $(this).children('i');
if (answer.is(':visible')) {
answer.slideUp();
arrow.removeClass().addClass('arrow_r');
} 
else {
answer.slideDown();
arrow.removeClass().addClass('arrow_b');
}
});

$('.menu_bar dl:first-child').find('dd').slideDown().end().find('dt').children('i').removeClass().addClass('arrow_b').end();

reset_shortcuts($(".menu_bar a[class='select']"));/*左导航菜单快捷[+-]显示方式初始化*/
/*菜单快捷[+-]显示方式*/
/*+++++左边导航点击+++++*/
$('.menu_bar dl dt').click(function(){

$(this).parent().siblings().find('a').removeClass().children('.arrow_l').remove();
$(this).parent().find('a').removeClass().children('.arrow_l').remove();
//$(this).siblings().find("a:first").addClass('select').prepend("<span class='arrow_l'><\/span>").end().slideDown();

reset_shortcuts($(this).siblings().find('a:eq(0)'));
})
/*---左边导航点击 end---*/
/*-----菜单快捷[+-]显示方式 end----
$('.menu_bar dl dd ul li ').find('a').live("click",function(){
	$('.menu_bar dl dd ul li a').removeClass().children('.arrow_l').remove();
	$(this).addClass("select").prepend("<span class='arrow_l'><\/span>");
	reset_shortcuts(this);
});
*/

$('.nav,.hide_nav').find('a').click(function(){ 
 
var navid = '#'+$(this).attr('rel');
if($(navid).find("li").length==0){
$("#display_frame").attr('src',"index.php?do=main");
return false;
}

$(navid).fadeIn();
$(navid).siblings().hide();
$(this).addClass("select").parent().siblings().children('a').removeClass("select");
var first_sub_menu = $(navid+" dl:first-child  dd  ul:first-child").find('a:eq(0)');
/*++++导航点击后左导航首条选中++++++*/
$(".side_bar .side_con").find("a").removeClass().children('.arrow_1').remove(); 
 
var length = $(first_sub_menu).find("span").length;
 if(length<1){
 		$(first_sub_menu).addClass('select').prepend("<span class='arrow_l'><\/span>");
 }
$(first_sub_menu).addClass('select');
reset_shortcuts(first_sub_menu);//左导航当前选择项快捷[+-]显示方式重置
/*---导航点击后左导航首条选中---*/
    h =$(first_sub_menu).attr('href');
$("#display_frame").attr('src',h+'&tt='+Math.random());
});
$('.side_bar').hover(function(){
  $(this).css('overflow-y','auto'); 
},
function(){
 $(this).css('overflow-y','hidden'); 
});

 

}); 

</script>
</div>
<!--[if IE 6]></div><![endif]-->
<!--[if IE 7]></div><![endif]-->
<!--[if IE 8]></div><![endif]-->
<script type="text/javascript" src=" /public/resource/js/artdialog/artDialog.js"></script>
<script type="text/javascript" src=" /public/resource/js/artdialog/jquery.artDialog.js?skin=default"></script>
<script type="text/javascript" src="../../public/resource/js/artdialog/artDialog.iframeTools.source.js"></script>
<script type="text/javascript" src=" /public/tpl/js/jquery.mousewheel.min.js"></script>
 
</body>
</html>

