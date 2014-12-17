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
    	<h1>支付管理</h1>
        <div class="tool">
            <a href="index.php?r=msg/pay" class="here">支付配置</a>
            <a href="index.php?r=msg/pay_online" >在线支付接口</a>
            <a href="index.php?r=msg/pay_offline" >线下支付接口</a>
<!--
<a href="index.php?do=config&view=pay&op=trust" >担保交易接口</a>
    		-->
</div>
    </div>
<div class="box post">
<div class="tabcon">
        	<div class="title"><h2>充值提现配置</h2></div>
            <div class="detail">
                <form name="frm_config_pay" id="frm_config_pay" action="#" method="post">
                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <th scope="row" width="160">用户充值最小金额：</th>
                        <td><input type="text"  name="fds[recharge_min]" id="txt_recharge_min" value="0.01" limit='type:float' title='用户充值最小金额0.01元' msg="用户充值金额必须大于0.01元" msgArea="recharge_min_msg" class="txt" style=" width:260px;"/><span id="recharge_min_msg"></span>(单位：元)</td>
                      </tr>
                      <tr>
                        <th scope="row">用户提现金额最小值：</th>
                        <td><input type="text" name="fds[withdraw_min]" id="txt_withdraw_min" value="2" limit="type:float" title="用户单笔提现最小金额2元" msg="用户提现金额必须大于2元" msgArea="withdraw_min_msg"  class="txt" style=" width:260px;"/><span id="withdraw_min_msg"></span>(单位：元)</td>
                      </tr>
                      <tr>
                        <th scope="row">用户当日提现最高值：</th>
                        <td><input type="text" name="fds[withdraw_max]" id="txt_withdraw_max"  value="20000" limit="type:int" title="用户每天提现的最高值限20000元，超出部分不能提现" msg=用户当日提现最高值必须为大于零的整数 msgArea="withdraw_max_msg" maxlength="10" class="txt" style=" width:260px;"/><span id="withdraw_max_msg"></span>(单位：元)</td>
                      </tr>
  <tr>
                   <th scope="row">单笔资费：</th>
               <td>
                    <input type="text" name="fds[per_charge]" value="2" class="txt" style=" width:260px;"/>
<div class="padt10 direct"><p>(用户提现单笔收费比率% )</p></div>
   </td>
   </tr>
<tr>
                   <th scope="row">单笔最低收费：</th>
               <td>
                    <input type="text" name="fds[per_low]" value="1" class="txt" style=" width:260px;"/>
<div class="padt10 direct"><p>(用户提现单笔收费最低金额。少于200的提现以此为收费标准。元)</p></div>
  </td>
   </tr>
<tr>
                   <th scope="row">单笔最高收费：</th>
               <td>
                    <input type="text" name="fds[per_high]" value="25" class="txt" style=" width:260px;"/>
<div class="padt10 direct"><p>(用户提现单笔收费最高金额。超过5000的提现以此为收费标准。元)</p></div>
  </td>
   </tr>
   <tr>
                      <tr>
                        <th scope="row">&nbsp;</th>
                        <td>
                            <div class="clearfix padt10">
                                <button class="positive pill primary button" type="submit" onclick="return checkForm(document.getElementById('frm_config_pay'),false)"  name="sbt_edit" value="编辑"><span class="check icon"></span>提交</button>
                               
                            </div>
                        </td>
                      </tr>
                    </table>
                    
                </form>
            </div>
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
