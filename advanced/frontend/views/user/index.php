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
                    <img src='/public/data/avatar/default/man_small.jpg' uid='1' class='pic_small'></p>
            </div>
            <ul class="intor">
                <li>
                    欢迎您，<?php  $session=new \yii\web\Session();  echo $session->get("user_name")?> </li>
                <li>
                    <strong class="cf60">币种<?php echo $arr["balance"]?></strong>
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
            <a href="index.php?r=user/index" class="selected"><span class="icon32 meter">管理面板</span><em>管理面板</em></a>
        </li>
                <li>
            <a href="index.php?r=user/setting" ><span class="icon32 cog">企业设置</span><em>企业设置</em></a>
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
<div class="grid_6 mb_10">
<div class="box default">
<div class="inner">
<div class="user_info_con clearfix pt_10 pb_5 pl_10">
<a href="index.php?do=space&member_id=1" class="fl_l mt_5" title="admin" ><img src='/public/data/avatar/default/man_small.jpg' uid='1' class='pic_small'></a>	
<div class="grid_4 clearfix pl_5 omega">
<ul class="font14">
<li><a href="index.php?do=space&member_id=1" class="font14b"><?php echo $session->get("user_name")?></a></li>
<li>用户等级：<?php echo $resb[0][0]?></li>
<li>能力值：0</li>
<li>信誉值：0</li>
<!--
<li>
<div class="font14 auth">
认证信息：<a href="index.php?do=user&view=payitem&op=auth&auth_code=email#userCenter"><img class="mar0" src="/public/data/uploads/sys/auth/mail_0.gif" width="16px" height="16px" alt="" title="邮箱认证"></a>
	
					
			
<a href="index.php?do=user&view=payitem&op=auth&auth_code=enterprise#userCenter"><img class="mar0" src="/public/data/uploads/sys/auth/company_0.gif" width="16px" height="16px" alt="" title="企业认证"></a>
	
					
			
					
			
<a href="index.php?do=user&view=payitem&op=auth&auth_code=mobile#userCenter"><img class="mar0" src="/public/data/uploads/sys/auth/phone_0.gif" width="16px" height="16px" alt="" title="手机认证"></a>
	
					
			
<a href="index.php?do=user&view=payitem&op=auth&auth_code=bank#userCenter"><img class="mar0" src="/public/data/uploads/sys/auth/bank_0.gif" width="16px" height="16px" alt="" title="银行认证"></a>
	
					
			
</div>
</li>
-->
</ul>
</div>
<div class="clear"></div>
<div class="c333">上次登录时间：2014-12-23 08:41:09</div>
</div>
</div>
</div>		



  <!--账户余额-->
<div class="box default mt_10">
<div class="inner">
<header class="box_header clearfix">
<h2 class="title">账户余额</h2>
</header>
<div class="box_detail">
<div class="font14">
 现金：<a class="font12">￥<?php echo $arr["balance"]?>元</a>
</div>
<div class="font14">
元宝：<a class="font12"><?php echo $arr["credit"]?></a>
</div>
<div class=" mt_10 mb_20 t_c">
<a href="index.php?do=user&view=finance&op=recharge" class="button btn_width mr_5" title="充值">充值</a>
<a href="index.php?do=user&view=finance&op=withdraw" class="button btn_width" title="提现">提现</a>
</div>
</div>	
</div>
</div>
<!--end 账户余额-->

<!--账户安全信息-->
<div class="box default mt_10">
<div class="inner">
<header class="box_header clearfix">
<h2 class="title">账号安全信息</h2>
</header>
<div class="box_detail clearfix">

<!--安全设置-->

<div class="t_c pb_20">
<a class="button btn_width mr_5 mt_5" href="index.php?r=user/setting_safe" class="mr_10">修改密码</a>
<a class="button btn_width mt_5" href="index.php?r=user/setting_sec_code" class="mr_10">修改安全码</a>	

<div class="mt_5">											
<a class="button btn_width mr_5 mt_5" href="index.php?r=user/setting">完善资料</a>										
<a class="button btn_width mt_5" href="index.php?do=user&view=payitem&op=auth">认证中心</a>
</div>
</div>


</div>	
</div>
</div>
<!--end 账户安全信息-->

<!--快捷导航-->
<div class="box default mt_10 hidden">
<div class="inner">
<header class="box_header clearfix">
<h2 class="title">快捷导航</h2>
</header>
<div class="mb_20 t_c">
<a href="index.php?do=release" class="button btn_width mr_5" title="发布任务">发布任务</a>
<a href="index.php?do=task_list" class="button btn_width" title="参加任务">参加任务</a>
<a href="index.php?do=shop_release" class="button btn_width mr_5 mt_10" title="出售商品">出售商品</a>
<a href="index.php?do=shop_list" class="button btn_width mt_10" title="购买商品">购买商品</a>
<a href="index.php?do=user&view=setting&op=space" class="button btn_width mr_5 mt_10" title="店铺设置">店铺设置</a>
<a href="index.php?do=space&member_id=1" class="button btn_width mt_10" title="进入店铺">进入店铺</a>
</div>
</div>	
</div>
<!--end 快捷导航-->

<!--公告栏 -->
<div class="box default mt_10 hidden">
<div class="inner">
        	<div class="pb_20">
         <!--公告头部-->
         <header class="box_header clearfix">
          	<nav class="box_nav clearfix">
               <ul>
                  <li id="ul_plac_1" onclick="swaptab('plac','backLava','',3,1)"><a href="javascript:void(0);" title="公告">网站资讯</a></li>
                  <li id="ul_plac_2" onclick="swaptab('plac','backLava','',3,2,{ajax:1,url:'index.php?do=user&view=index&ajax=bid_notice'})"><a href="javascript:void(0);" title="中标通知">中标通知</a></li>
                  <li id="ul_plac_3" onclick="swaptab('plac','backLava','',3,3,{ajax:1,url:'index.php?do=user&view=index&ajax=withdraw'})"><a href="javascript:void(0);" title="提现公告">提现公告</a></li>
                 <!-- <li id="ul_plac_4" onclick="swaptab('plac','backLava','',4,4,{ajax:1,url:'index.php?do=user&view=index&ajax=safe'})"><a href="javascript:void(0);" title="安全">安全</a></li>-->
               </ul>
            </nav>
            <div class="clear"></div>
         </header>
        <!--end 公告头部 -->
                            
        <!--公告detail内容-->
         <article class="box_detail" id="div_plac_1">
           <ul class="smaller_list">
              <li><a href="index.php?do=article&view=article_info&art_id=239">联系我们</a></li>
 <li><a href="index.php?do=article&view=article_info&art_id=240">联系方式</a></li>
 <li><a href="index.php?do=article&view=article_info&art_id=230">客户如何保障帐户安全</a></li>
 <li><a href="index.php?do=article&view=article_info&art_id=250">中金香港直销Facebook股权：初定100万股门槛</a></li>
            </ul>
         </article>
        <article class="box_detail" id="div_plac_2" style="display:none;">
        </article>
        <article class="box_detail" id="div_plac_3" style="display:none;">
        </article>
       
        <!--end 公告detail内容-->
</div>
</div>
</div>
<!--end 公告栏 -->

<!--新手指南-->
<div class="box default mt_10 hidden">
<div class="inner">
<header class="box_header clearfix">
<h2 class="title">新手指南</h2>
</header>
<div class="box_detail clearfix">
<ul class="smaller_list pb_10">
<li><a href="index.php?do=help&fpid=294&spid=297#pageTop"><span>充值流程</span></a></li>
<li><a href="index.php?do=help&fpid=294&spid=298#pageTop"><span>注册流程</span></a></li>
<li><a href="index.php?do=help&fpid=294&spid=298#pageTop"><span>什么是验证码？</span></a></li>
</ul>
<a href="index.php?do=help" class="button mb_10 block t_c" title="进入帮助中心">进入帮助中心</a>
</div>	
</div>
</div>
<!--end 新手指南-->

</div>

<div class="grid_18 mb_10 omega">
<!--用户信息-->
<div class="box default hidden">
<div class="inner">
<div class="user_info_con clearfix pt_10 pb_5 pl_10 pr_10">
    				<a href="index.php?do=space&member_id=1" class="fl_l" title="admin" ><img src='/public/data/avatar/default/man_small.jpg' uid='1' class='pic_small'></a>							
<div class="grid_7 pl_10">
<ul class="font14">
<li><a href="index.php?do=space&member_id=1" class="font14b">admin</a></li>
<li>用户等级：<img src="/public/data/uploads/sys/mark/28624f3b088d957db.gif?fid=2077" align="absmiddle" title="头衔 ：六级威客&#13;&#10;能力值：47478&#13;&#10;等级：6"></li>
<li>能力值：47478</li>
<li>信誉值：257803</li>
<li>上次登录时间：2014-12-23 08:41:09</li>
</ul>
</div>
<div class="fl_l mt_10">
<div class="font14 auth">
认证信息：<a href="index.php?do=user&view=payitem&op=auth&auth_code=email#userCenter"><img src="/public/data/uploads/sys/auth/mail_0.gif" alt="" title="邮箱认证"></a>
	
								
<a href="index.php?do=user&view=payitem&op=auth&auth_code=enterprise#userCenter"><img src="/public/data/uploads/sys/auth/company_0.gif" alt="" title="企业认证"></a>
	
								
								
<a href="index.php?do=user&view=payitem&op=auth&auth_code=mobile#userCenter"><img src="/public/data/uploads/sys/auth/phone_0.gif" alt="" title="手机认证"></a>
	
								
<a href="index.php?do=user&view=payitem&op=auth&auth_code=bank#userCenter"><img src="/public/data/uploads/sys/auth/bank_0.gif" alt="" title="银行认证"></a>
	
								

</div>
<ul class="trading mt_20">
 <li>
任务交易提醒：<span><a href="index.php?do=user&view=employer&op=task">待付款()</a></span>|
<span><a href="index.php?do=user&view=employer&op=task">待选稿()</a></span>
 </li>
<li>
商品交易提醒：<span><a href="index.php?do=user&view=finance&op=order&obj_type=service">待付款()</a></span>|
<span><a href="index.php?do=user&view=finance&op=order&obj_type=service">待确认打款()</a></span>
</li>
</ul>
</div>
</div>
</div>
    </div>
<!--end 用户信息-->

<!--工具箱-->
<div class="box default model_bord mt_10 hidden">
<div class="inner">
<header class="box_header clearfix">
<h2 class="title">工具箱</h2>
</header>
<div class="box_detail po_re">
<div class="pt_10 pb_5">
<div class="toolbox clearfix">
<ul>
<li>
<a href="index.php?do=user&view=payitem&op=toolbox&show=buy&item_code=urgent#userCenter">
<img src="" alt="任务加急" title="任务加急" width="48" height="48">
<div>任务加急</div>
</a>	
</li>		
							
<li>
<a href="index.php?do=user&view=payitem&op=toolbox&show=buy&item_code=top#userCenter">
<img src="" alt="任务置顶" title="任务置顶" width="48" height="48">
<div>任务置顶</div>
</a>	
</li>		
							
<li>
<a href="index.php?do=user&view=payitem&op=toolbox&show=buy&item_code=workhide#userCenter">
<img src="" alt="稿件隐藏" title="稿件隐藏" width="48" height="48">
<div>稿件隐藏</div>
</a>	
</li>		
							
<li>
<a href="index.php?do=user&view=payitem&op=toolbox&show=buy&item_code=map#userCenter">
<img src="" alt="标记地图" title="标记地图" width="48" height="48">
<div>标记地图</div>
</a>	
</li>		
							
	
</ul>
</div>
</div>
</div>
</div>
</div>
   		<!--end 工具箱 -->

<!--雇主交易面板-->
<div class="box default model_bord ">
<div class="inner">
<header class="box_header clearfix">
<h2 class="title grid_3">雇主交易面板</h2>
<nav class="box_nav clearfix grid_7">
<ul>
<li><a href="javascript:void(0);" onclick="swaptab('pub','backLava','',2,1);show_none('more1','more2');">任务管理[0]</a></li>
<li><a href="javascript:void(0);" onclick="swaptab('pub','backLava','',2,2);show_none('more2','more1');">商品交易[0]</a></li>
</ul>
</nav>	
    					<a id='more1'  class="pt_5 fl_r" href="http://127.0.0.1/weike/index.php?do=user&view=employer">更多雇主交易<span class="font_simsun">>></span></a>


    					<a id='more2' style="display:none;" class="pt_5 fl_r" href="http://127.0.0.1/weike/index.php?do=user&view=employer&op=shop">更多雇主交易<span class="font_simsun">>></span></a>

</header>
<div class="box_detail pad0" id="div_pub_1">
<div class="list">
                <dl>
                  <dt>雇主交易</dt>
                  <dd class="tags">
                    <ul>
                        <li>任务编号</li>
<li>任务类型</li>
                        <li class="w2 t_l">任务标题</li>
                        <li class="w2">任务赏金</li>
                        <li>发布时间</li>
                        <li class="w2">交易状态</li>
<li>交易操作</li>
                    </ul>
                  </dd>
   
   <dd class="clearfix">
   	 <ul>				                    	
                        <li class="t_c w0">	暂无记录</li>
</ul>
   	  </dd>
                  </dl>
            </div>
</div>
<div class="box_detail pad0" id="div_pub_2" style="display:none;">
<div class="list">
                <dl>
                  <dt>雇主交易</dt>
                  <dd class="tags">
                    <ul>
                        <li>商品编号</li>
<li>商品类型</li>
                        <li class="w2 t_l">商品名称</li>
                        <li class="w2">商品价格</li>
                        <li>发布时间</li>
                        <li class="w2">交易状态</li>
<li>交易操作</li>
                    </ul>
                  </dd>
    	<dd class="clearfix">
   	 <ul>				                    	
                        <li class="t_c w0">	暂无记录</li>
</ul>
   	  </dd>
  
  							  
                </dl>
            </div>
</div>
</div>
</div>
   		<!--end 雇主交易面板-->

<!--威客交易面板-->
<div class="box default model_bord mt_10 ">
<div class="inner">
<header class="box_header clearfix">
<h2 class="title grid_3">威客交易面板</h2>
<nav class="box_nav clearfix grid_7">
<ul>
<li><a href="javascript:void(0);" onclick="swaptab('join','backLava','',2,1);show_none('more3','more4');">任务管理[0]</a></li>
<li><a href="javascript:void(0);" onclick="swaptab('join','backLava','',2,2);show_none('more4','more3');">商品交易[0]</a></li>
</ul>
</nav>

<a id="more3" class="pt_5 fl_r" href="index.php?do=user&view=witkey">更多威客交易<span class="font_simsun">>></span></a>
<a id="more4" style="display:none" class="pt_5 fl_r" href="index.php?do=user&view=witkey&op=shop">更多威客交易<span class="font_simsun">>></span></a>

</header>
<div class="box_detail pad0" id="div_join_1">
<div class="list">
                <dl>
                  <dt>雇主交易</dt>
                  <dd class="tags">
                    <ul>
                        <li>任务编号</li>
<li>订单类型</li>
                        <li class="w2 t_l">任务标题</li>
                        <li class="w2">任务赏金</li>
                        <li>发布时间</li>
                        <li class="w2">交易状态</li>
<li>交易操作</li>
                    </ul>
                  </dd>
    	<dd class="clearfix">
   	 <ul>				                    	
                        <li class="t_c w0">	暂无记录</li>
</ul>
   	  </dd>
  
                  </dl>
            </div>
</div>
<div class="box_detail pad0" id="div_join_2" style="display:none;">
<div class="list">
                <dl>
                  <dt>雇主交易</dt>
                  <dd class="tags">
                    <ul>
                        <li>商品编号</li>
<li>订单类型</li>
                        <li class="w2 t_l">商品名称</li>
                        <li class="w2">商品价格</li>
                        <li>发布时间</li>
                        <li class="w2">交易状态</li>
<li>交易操作</li>
                    </ul>
                  </dd>
  
      <dd class="clearfix">
   	 <ul>				                    	
                        <li class="t_c w0">	暂无记录</li>
</ul>
   	  </dd>
  
  
  								  
                </dl>
            </div>
</div>

</div>
</div>
   		<!--end 威客交易面板-->

   </div>
</section>
        <!--main end-->
    </div>
</div>
<script type="text/javascript">
In.add('Carousel',{path:"/public/resource/js/others/Infinite Carousel.js",type:'js'});  
In('Carousel');

    function show_none(id1,id2)
    {
    	document.getElementById(id1).style.display='block';
    	document.getElementById(id2).style.display='none';    	
    }
//延期加价
function taskDelay(url){
console.log(url);
var url = url+'&op=taskdelay';
showWindow('taskdelay',url,'get',0);return false;

}
//赏金托管
function task_pay(url){
showWindow('hosted_amount',url,'get',0);return false;
}
//确认工作
function work_over(url){
showWindow("work_hand",url,"get",'0');
return false; 
}
function del(obj){
        var url = obj.href;
        showDialog("", "confirm", "操作提示!", function(){

           //location.href = url;
   formSub(url,'url',false);
        });
        return false;
    }
function pay(obj,pay_cash,order_id){

var url = obj.href;
var user_balance = parseInt(405405.061)+0;
var user_credit = parseInt(77529.188)+0;
var is_allow_credit = 2;
//alert(user_balance);
if(is_allow_credit==2){
user_credit=0;
}		
if((user_credit+user_balance)>=pay_cash){
 formSub(url,'url',false);
 return false;
}else{	
    location.href= "index.php?do=pay&order_id="+order_id;
return false;	
}         		          
       return false;
    }
    
    //弹框描述
    function task_payitem(task_id, payitem, payitem_time){
        var task_id = task_id;
        var payitem = payitem;
        var payitem_time = payitem_time;
        var url = "index.php?do=user&view=employer&op=task&ajax=get_task_desc&task_id=" + task_id + '&payitem=' + payitem + '&payitem_time=' + payitem_time;
        $.post(url, function(json){
            if (json.status == 1) {
                showDialog(json.data, "confirm", "任务置顶", "set_payitem('" + task_id + "','" + payitem + "','" + payitem_time + "');", 1)
            }
        }, 'json')
    }
    
    //增值服务 
    function set_payitem(task_id, payitem, payitem_time){
        var task_id = task_id;
        var payitem = payitem;
        var payitem_time = payitem_time;
        var url = "index.php?do=user&view=employer&op=task&ajax=set_task_payitem&task_id=" + task_id + '&payitem=' + payitem + '&payitem_time=' + payitem_time;
        $.post(url, function(json){
            if (json.status == 1) {
                showDialog(json.msg, 'right', "友情提示");
                return false;
            }
        }, 'json');
        
    }
//确认工作
function work_over(url){
showWindow("work_hand",url,"get",'0');
return false; 
}
    function del(obj){
        var url = obj.href;
        showDialog("", "confirm", "操作提示!", function(){
           formSub(url,'url',false);
        });
        return false;
    }
function share(t_id){
var url = "http://127.0.0.1/weike/index.php?do=ajax&view=share&op=center&task_id="+t_id;
showWindow('share',url,'get','0');return false;
}
function process(action,desc,order_id,model_id,obj_id,model_code,to_uid){

if(check_user_login()){
 
if(action){
switch(action){
case "download":
download(obj_id,model_id);
break;
case "arbitral":
orderRreport(order_id);//订单发起维权
break;
default:	
showDialog(desc+"吗?","confirm","操作提示!","confirm('"+action+"','"+order_id+"','"+model_id+"','"+model_code+"')");return false;
break;
}
  }
}
}
/**
 * 操作提交
 * @param Object ac
 * @param Object order_id
 * @param Object model_id
 */
function confirm(ac,order_id,model_id){
var url="index.php?do=user&view=finance&op=order";
$.post(url,{ac:ac,order_id:order_id,model_id:model_id},function(json){
if(json.status=='1'){
if(ac=='delete'){
$(".order_"+order_id).slideUp(600).remove();
}
var jump_url = url+"&obj_type=&role=&order_id="+order_id+"#userCenter";					
showDialog(json.data,'notice',json.msg,"winRload()");return false;
}else{
showDialog(json.data,'alert',json.msg);return false;
}
},'json')
}
/**
 * 操作提交
 * @param Object ac
 * @param Object order_id
 * @param Object model_id
 */
function confirm(ac,order_id,model_id){
  //alert(ac+order_id+','+model_id);return false;
var url="index.php?do=user&view=finance&op=order";
$.post(url,{ac:ac,order_id:order_id,model_id:model_id},function(json){
if(json.status=='1'){
if(ac=='delete'){
$(".order_"+order_id).slideUp(600).remove();
}
var jump_url = url+"&obj_type=&role=&order_id="+order_id+"#userCenter";					
showDialog(json.data,'notice',json.msg,"winRload()");return false;
}else{
showDialog(json.data,'alert',json.msg);return false;
}
},'json')
}
/**
 * 下载
 * @param Object obj_id
 */
function download(obj_id,model_id){
var basic_url="?do=user&view=index&download=1&model_id="+model_id+"&sid="+obj_id;
showWindow('filedown',basic_url,'get',0);return false;
}
function winRload(){
  document.location.reload();
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

