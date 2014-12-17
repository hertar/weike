<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>keke admin</title>


<link href="/public/tpl/css/admin_management.css" rel="stylesheet" type="text/css" />
<link href="/public/resource/css/buttons.css" rel="stylesheet" type="text/css" />
<link title="style1" href="/public/tpl/skin/default/style.css" rel="stylesheet" type="text/css" />
<!--<link title="style2" href="tpl/skin/light/style.css" rel="stylesheet" type="text/css" />-->
<script type="text/javascript" src="/public/resource/js/jquery.js"></script>
<script type="text/javascript" src="/public/resource/js/system/keke.js"></script>
<script type="text/javascript" src="/public/resource/js/in.js"></script>
</head>
<body class="frame_body">
<div class="frame_content">
<div id="append_parent"></div>
<div class="page_title">
    <h1>财务模块</h1>
    <div class="tool">
<a href="index.php?r=finance/revenue" class="here">财务概况</a>
<a href="index.php?r=finance/detail">财务明细</a>
<a href="index.php?r=finance/report">财务分析</a>
<a href="index.php?r=finance/recharge">充值审核</a>
<a href="index.php?r=finance/withdraw">提现审核</a>
    </div>
</div>
<div class="box search p_relative">
    <div class="title">
        <h2>搜索</h2>
    </div>
    <div>
        <form action="index.php?do=finance&view=revenue" method="post" id=frm_search name='frm_search'>
        	 <table cellspacing="0" cellpadding="0">
                <tbody>
                    <tr>
                    	<th width="100">起止时间 </th>
<td>
                            <input type="text" value="2014-12-17" name="st" class="txt"
  onclick="showcalendar(event, this, 0)" limit='required:false;type:date;less:2014-12-17'
   msg="选择起始时间,不得早于今日" msgArea='span_notice' id='start_time'/>~
                            <input type="text" value="2014-12-17" name="ed" class="txt"
  onclick="showcalendar(event, this, 0)"  limit='required:false;type:date;less:2014-12-17;than:start_time'
   msg="选择起始时间,不得早于今日" msgArea='span_notice' id='end_time'/>
  
                             <button class="pill" type="submit" value="搜索" name="sbt_search" onclick="return checkForm(document.getElementById('frm_search'));">
                                <span class="icon magnifier">&nbsp;</span>搜索                              </button>
  <span id='span_notice' style='color:#ff0000'></span>
                        </td>   
   </tr>
                  </tbody>
            </table>
        </form>
    </div>
 </div>
<!--搜索结束-->
<div class="box list">
    <div class="title" style="margin-bottom:10px;">
        <h2>财务概况(<font color="red">今日</font>)</h2>
    </div>

<div class="tab">
        	<a class="select" href="#" onclick="swaptab('cont','select','','4','1',{mpre:'td_',spre:'tb_',hide:1});" class='select' id='td_cont_1' style="width:23%;"><strong>流水统计</strong> </a>
            <a href="#" onclick="swaptab('cont','select','','4','4',{mpre:'td_',spre:'tb_',hide:1,ajax:1,url:'index.php?do=finance&view=revenue&op=charge&st=2014-12-17&ed=2014-12-17'});" id='td_cont_4' style="width:23%;"><strong>充值总计</strong></a>
<a href="#" onclick="swaptab('cont','select','','4','3',{mpre:'td_',spre:'tb_',hide:1,ajax:1,url:'index.php?do=finance&view=revenue&op=withdraw&st=2014-12-17&ed=2014-12-17'});" id='td_cont_3' style="width:23%;"><strong>提现总计</strong></a>
<a href="#" onclick="swaptab('cont','select','','4','2',{mpre:'td_',spre:'tb_',hide:1,ajax:1,url:'index.php?do=finance&view=revenue&op=profit&st=2014-12-17&ed=2014-12-17'});" id='td_cont_2' style="width:23%;"><strong>网站纯利</strong></a>

    		
    </div>
<div class="tabcon">

<table id='tb_cont_1' class='t_sub clear_l clear_b'>
<thead align="center">
<th> 分类 </th>
<th> 详细 </th>
<th> 金额 </th>
<th> 总计 </th>
</thead>
<tbody>
<tr>
<td>托管赏金</td>
<td>
暂无数据</td>
<td>
暂无数据</td>
<td>￥0.00元</td>
</tr>
<tr>
<td>增值服务</td>
<td>
暂无数据</td>
<td>
暂无数据</td>
<td>￥0.00元</td>
</tr>
<tr>
<td>商品出售</td>
<td>
暂无数据</td>
<td>
暂无数据</td>
<td>￥0.00元</td>
</tr>

</tbody>

</table>
<div class='tip'><div class='title'><font color="red">今日</font>站点现金流入信息，包含任务发布、增值服务购买，商城商品出售。为站点毛利，不统计提现信息。</div></div>

<table id='tb_cont_2' class='t_sub hidden clear_l clear_b'></table>
<div class='tip hidden'><div class='title'><font color="red">今日</font>站点纯利润统计，包含任务赏金、商品抽成、增值服务购买、用户认证、用户提现等。其中提现利润为站点利润，并没有扣除站点在与第三方交易过程中造成的利润损失。</div></div>

<table id='tb_cont_3' class='t_sub hidden clear_l clear_b'></table>
<div class='tip hidden'><div class='title'><font color="red">今日</font>站点用户通过各种渠道从站点提出的金额,盈利部分为根据网站后台的收费标准的扣除的手续费。并未扣除在与第三方交易过程中站长自身造成的利润损失。</div></div>	
<table id='tb_cont_4' class='t_sub hidden clear_l clear_b'></table>
<div class='tip hidden'><div class='title'><font color="red">今日</font>站点现金充值信息，包含线上充值、线下充值、站长充值。</div></div>	

</div>
        
    </div>

    </div>
<script type="text/javascript"
src="/public/resource/js/artdialog/artDialog.js"></script>
<script type="text/javascript"
src="/public/resource/js/artdialog/jquery.artDialog.js?skin=default"></script>
<script type="text/javascript"
src="/public/resource/js/artdialog/artDialog.iframeTools.source.js"></script>
<script type="text/javascript" src="/public/lang/cn/script/lang.js"></script>
<script type="text/javascript">
In.add('form_and_validation', {
path : "/public/resource/js/system/form_and_validation.js",
type : 'js'
});
In.add('xheditor', {
path : "/public/resource/js/xheditor/xheditor.js",
type : 'js'
});
In.add('mousewheel', {
path : "/public/tpl/js/jquery.mousewheel.min.js",
type : 'js'
});
//In.add('styleswitch',{path:"tpl/js/styleswitch.js",type:'js'});
In.add('table', {
path : "/public/tpl/js/table.js",
type : 'js'
});
In.add('calendar', {
path : "/public/resource/js/system/script_calendar.js"
});
In('form_and_validation', 'xheditor', 'mousewheel', 'table', 'calendar');
</script>

<script type="text/javascript">
function cdel(o, s) {
d = art.dialog;
var c = "你确认删除操作？";
if (s) {
c = s;
}
d.confirm(c, function() {
window.location.href = o.href;
});
return false;
}
function cpass(o, s, type) {
d = art.dialog;
if (type == 1) {
var c = "确认审核通过？";
} else {
var c = "确认审核失败？";
}
if (s) {
c = s;
}
d.confirm(c, function() {
window.location.href = o.href;
});
return false;
}
function cfreeze(o, s, type) {
d = art.dialog;
if (type == 1) {
var c = "确认冻结？";
}
if (s) {
c = s;
}
d.confirm(c, function() {
window.location.href = o.href;
});
return false;
}
function crecomm(o, s, type) {
d = art.dialog;
if (type == 1) {
var c = "确认推荐？";
} else {
var c = "确认取消推荐？";
}
if (s) {
c = s;
}
d.confirm(c, function() {
window.location.href = o.href;
});
return false;
}
function pdel(frm) {
d = art.dialog;
var frm = frm;
var c = "你确认删除操作？";
d.confirm(c, function() {
$("#" + frm).submit();
});
return false;
}
function batch_act(obj, frm) {
d = art.dialog;
var frm = frm;
var c = $(obj).val();
var conf = $(":checkbox[name='ckb[]']:checked").length;
if (conf > 0) {
d.confirm("确定" + c + '?', function() {
$(".sbt_action").val(c);
$("#" + frm).submit();
});
} else {
d.alert("您没有选择任何操作项");
}
return false;
}
</script>
</body>
</html>
