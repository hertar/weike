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
                    <img src='/public/data/avatar/000/00/00/01_avatar_small.jpg' uid='1' class='pic_small'>                </p>
            </div>
            <ul class="intor">
                <li>
                    欢迎您，<?php  $session=new \yii\web\Session();  echo $session->get("user_name")?>                  </li>
                <li>
                    <strong class="cf60">币种0.000</strong>
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
            <a href="index.php?r=user/setting" ><span class="icon32 cog">企业设置</span><em>企业设置</em></a>
        </li>
                <li>
            <a href="index.php?r=user/finance" class="selected"><span class="icon32 chart-line2">财务管理</span><em>财务管理</em></a>
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
                 <a href="index.php?do=user&view=finance&op=detail" title="进入账目明细" class="selected">
                   <div class="icon16 chart-line">icon</div><strong>账目明细</strong>
     </a>
             </li>
              <li>
                 <a href="index.php?do=user&view=finance&op=prom" title="进入推广赚钱" >
                   <div class="icon16 emotion-smile">icon</div><strong>推广赚钱</strong>
     </a>
             </li>
        </ul>
       <ul class="nav_group clearfix">
             <li>
                 <a href="index.php?do=user&view=finance&op=recharge" title="进入账号充值" >
                   <div class="icon16 cur-yen">icon</div><strong>账号充值</strong>
     </a>
             </li>
              <li>
                 <a href="index.php?do=user&view=finance&op=withdraw" title="进入账号提现" >
                   <div class="icon16 clipboard-copy">icon</div><strong>账号提现</strong>
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
                                <h2 class="grid_4 alpha omega box_title t_c">账户信息</h2>
                                <div class="grid_17 alpha omega">
                                    <nav class="box_nav">
                                        <ul>
                                                                                        <li class="selectedLava">
                                                <a href="index.php?do=user&view=finance&op=detail&action=account#userCenter" title="收支记录统计">账户信息</a>
                                            </li>
                                                                                        <li >
                                                <a href="index.php?do=user&view=finance&op=detail&action=basic#userCenter" title="收支记录统计">收支明细</a>
                                            </li>
                                                                                        <li >
                                                <a href="index.php?do=user&view=finance&op=detail&action=charge#userCenter" title="充值记录统计">充值记录</a>
                                            </li>
                                                                                        <li >
                                                <a href="index.php?do=user&view=finance&op=detail&action=withdraw#userCenter" title="提现记录统计">提现记录</a>
                                            </li>
                                                                                    </ul>
                                    </nav>
                                </div>
                                <div class="clear">
                                </div>
                            </header>
                            <!--header内容头部 end--><!--detail内容 start-->
                            <article class="box_detail clearfix">
                                <div class="pad20">
                            	<div class="finance_info  pb_20 clearfix">
                                        <dl>
                                            <dt>我的财务信息：</dt>
                                            <dd>用户名：<?php echo $arr["username"]?></dd>
                                            <dd>账户可用余额：<span class="cf60"><strong class="font18b mr_5"> ￥<?php echo $arr["balance"]?>元</strong>元</span> </dd>
                                            <dd>
                                                <a href="index.php?do=user&view=payitem&op=auth&auth_code=bank#userCenter">银行卡认证(<span class="cf60">未认证</span>)</a>
                                                <a href="index.php?do=user&view=finance&op=recharge">账户充值</a>
                                                <a href="index.php?do=user&view=finance&op=withdraw">账户提现</a>
                                            </dd>
                                        </dl>
                                    </div>
                                    <div class="security_strength pt_30 pb_30 border_t_c border_b_c clearfix">
                                        <dl>
                                            <dt>资金安全强度：</dt>
                                            <dd>您可以通过以下方式提高资金安全强度：</dd>
                                            <dd> 
                                                <a href="index.php?r=user/setting_safe">修改密码</a>
                                                <a href="index.php?r=user/setting_sec_code">修改安全密码</a>
                                               
                                        </dl>

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
