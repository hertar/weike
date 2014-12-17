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
  <h1>短信模板</h1>
  <div class="tool">         
    <a href="index.php?r=msg/internal" class="here" > 模板列表</a>
    <a href="index.php?r=msg/intertpl"  > 模板编辑</a>
  </div>
</div>
<div class="box post">

<div class="tab">
       <a href="index.php?do=msg&view=internal"  class="select">所有的</a>
          		<a href="index.php?do=msg&view=internal&obj=task" >任务</a>
      		<a href="index.php?do=msg&view=internal&obj=service" >商品</a>
      		<a href="index.php?do=msg&view=internal&obj=space" >空间</a>
      		<a href="index.php?do=msg&view=internal&obj=user" >用户</a>
      		<a href="index.php?do=msg&view=internal&obj=found" >资金</a>
      		<a href="index.php?do=msg&view=internal&obj=safe" >安全</a>
      		<a href="index.php?do=msg&view=internal&obj=trans" >维权</a>
      </div>
 <div class="tabcon">
  <div class="title"><h2> 短信发送配置管理</h2></div>
  <div style="clear:both;"></div>
<div class="detail">
    <form name="frm_config_msg" action="#" method="post">
        <input type="hidden" name="hdn_msg_config_id" value="">
        <table  border="0" cellspacing="0" cellpadding="0">
            <tr>
        		<th scope="row">配置编号</th>
<th scope="row">配置名称</th>
<th scope="row">基本配置</th>
<th scope="row">操作</th>
            </tr>
            	<tr> <td scope="row">
                    1                	</td>
<td>注册成功</td>
                <td><label for="send_close_1">
<input type="radio" name="fds[1][send_open]" value="0" id="send_close_1" onclick="hide_me(1);" checked="checked">关闭</label>
<label for="send_open_1">
<input type="radio" name="fds[1][send_open]" value="1" id="send_open_1"  onclick="show_me(1);">开启                        </label>
<div style="display:none" id="show_send_type_1">
<label for="cbk_0_1">
<input type="checkbox" id="cbk_0_1" name="ckb[1][send_sms]" value="1" >站内短信&nbsp;&nbsp;&nbsp;&nbsp;
</label>
<label for="cbk_0_2">
<input type="checkbox" id="cbk_0_2" name="ckb[1][send_email]" value="1" >发送邮件&nbsp;&nbsp;&nbsp;&nbsp;
</label>
<label for="cbk_0_3">
<input type="checkbox" id="cbk_0_3" name="ckb[1][send_mobile_sms]" value="1" >手机短信&nbsp;&nbsp;&nbsp;&nbsp;
</label>
</div>
</td>
<td>
<button type="button" class="button" value="编辑模板" onclick="window.location.href='index.php?do=msg&view=intertpl&slt_tpl_code=reg'"/>
<span class="pen icon"></span>编辑模板</button>
                </td>
            </tr>
<tr> <td scope="row">
                    2                	</td>
<td>用户冻结</td>
                <td><label for="send_close_2">
<input type="radio" name="fds[2][send_open]" value="0" id="send_close_2" onclick="hide_me(2);" >关闭</label>
<label for="send_open_2">
<input type="radio" name="fds[2][send_open]" value="1" id="send_open_2"  onclick="show_me(2);"checked="checked">开启                        </label>
<div style="display:inline" id="show_send_type_2">
<label for="cbk_1_1">
<input type="checkbox" id="cbk_1_1" name="ckb[2][send_sms]" value="1" checked="checked">站内短信&nbsp;&nbsp;&nbsp;&nbsp;
</label>
<label for="cbk_1_2">
<input type="checkbox" id="cbk_1_2" name="ckb[2][send_email]" value="1" checked="checked">发送邮件&nbsp;&nbsp;&nbsp;&nbsp;
</label>
<label for="cbk_1_3">
<input type="checkbox" id="cbk_1_3" name="ckb[2][send_mobile_sms]" value="1" checked="checked">手机短信&nbsp;&nbsp;&nbsp;&nbsp;
</label>
</div>
</td>
<td>
<button type="button" class="button" value="编辑模板" onclick="window.location.href='index.php?do=msg&view=intertpl&slt_tpl_code=freeze'"/>
<span class="pen icon"></span>编辑模板</button>
                </td>
            </tr>
<tr> <td scope="row">
                    3                	</td>
<td>支付成功</td>
                <td><label for="send_close_3">
<input type="radio" name="fds[3][send_open]" value="0" id="send_close_3" onclick="hide_me(3);" >关闭</label>
<label for="send_open_3">
<input type="radio" name="fds[3][send_open]" value="1" id="send_open_3"  onclick="show_me(3);"checked="checked">开启                        </label>
<div style="display:inline" id="show_send_type_3">
<label for="cbk_2_1">
<input type="checkbox" id="cbk_2_1" name="ckb[3][send_sms]" value="1" checked="checked">站内短信&nbsp;&nbsp;&nbsp;&nbsp;
</label>
<label for="cbk_2_2">
<input type="checkbox" id="cbk_2_2" name="ckb[3][send_email]" value="1" checked="checked">发送邮件&nbsp;&nbsp;&nbsp;&nbsp;
</label>
<label for="cbk_2_3">
<input type="checkbox" id="cbk_2_3" name="ckb[3][send_mobile_sms]" value="1" >手机短信&nbsp;&nbsp;&nbsp;&nbsp;
</label>
</div>
</td>
<td>
<button type="button" class="button" value="编辑模板" onclick="window.location.href='index.php?do=msg&view=intertpl&slt_tpl_code=pay_success'"/>
<span class="pen icon"></span>编辑模板</button>
                </td>
            </tr>
<tr> <td scope="row">
                    4                	</td>
<td>支付失败</td>
                <td><label for="send_close_4">
<input type="radio" name="fds[4][send_open]" value="0" id="send_close_4" onclick="hide_me(4);" >关闭</label>
<label for="send_open_4">
<input type="radio" name="fds[4][send_open]" value="1" id="send_open_4"  onclick="show_me(4);"checked="checked">开启                        </label>
<div style="display:inline" id="show_send_type_4">
<label for="cbk_3_1">
<input type="checkbox" id="cbk_3_1" name="ckb[4][send_sms]" value="1" checked="checked">站内短信&nbsp;&nbsp;&nbsp;&nbsp;
</label>
<label for="cbk_3_2">
<input type="checkbox" id="cbk_3_2" name="ckb[4][send_email]" value="1" checked="checked">发送邮件&nbsp;&nbsp;&nbsp;&nbsp;
</label>
<label for="cbk_3_3">
<input type="checkbox" id="cbk_3_3" name="ckb[4][send_mobile_sms]" value="1" >手机短信&nbsp;&nbsp;&nbsp;&nbsp;
</label>
</div>
</td>
<td>
<button type="button" class="button" value="编辑模板" onclick="window.location.href='index.php?do=msg&view=intertpl&slt_tpl_code=pay_fail'"/>
<span class="pen icon"></span>编辑模板</button>
                </td>
            </tr>
<tr> <td scope="row">
                    5                	</td>
<td>提现成功</td>
                <td><label for="send_close_5">
<input type="radio" name="fds[5][send_open]" value="0" id="send_close_5" onclick="hide_me(5);" >关闭</label>
<label for="send_open_5">
<input type="radio" name="fds[5][send_open]" value="1" id="send_open_5"  onclick="show_me(5);"checked="checked">开启                        </label>
<div style="display:inline" id="show_send_type_5">
<label for="cbk_4_1">
<input type="checkbox" id="cbk_4_1" name="ckb[5][send_sms]" value="1" checked="checked">站内短信&nbsp;&nbsp;&nbsp;&nbsp;
</label>
<label for="cbk_4_2">
<input type="checkbox" id="cbk_4_2" name="ckb[5][send_email]" value="1" checked="checked">发送邮件&nbsp;&nbsp;&nbsp;&nbsp;
</label>
<label for="cbk_4_3">
<input type="checkbox" id="cbk_4_3" name="ckb[5][send_mobile_sms]" value="1" >手机短信&nbsp;&nbsp;&nbsp;&nbsp;
</label>
</div>
</td>
<td>
<button type="button" class="button" value="编辑模板" onclick="window.location.href='index.php?do=msg&view=intertpl&slt_tpl_code=draw_success'"/>
<span class="pen icon"></span>编辑模板</button>
                </td>
            </tr>
<tr> <td scope="row">
                    6                	</td>
<td>充值成功</td>
                <td><label for="send_close_6">
<input type="radio" name="fds[6][send_open]" value="0" id="send_close_6" onclick="hide_me(6);" >关闭</label>
<label for="send_open_6">
<input type="radio" name="fds[6][send_open]" value="1" id="send_open_6"  onclick="show_me(6);"checked="checked">开启                        </label>
<div style="display:inline" id="show_send_type_6">
<label for="cbk_5_1">
<input type="checkbox" id="cbk_5_1" name="ckb[6][send_sms]" value="1" checked="checked">站内短信&nbsp;&nbsp;&nbsp;&nbsp;
</label>
<label for="cbk_5_2">
<input type="checkbox" id="cbk_5_2" name="ckb[6][send_email]" value="1" checked="checked">发送邮件&nbsp;&nbsp;&nbsp;&nbsp;
</label>
<label for="cbk_5_3">
<input type="checkbox" id="cbk_5_3" name="ckb[6][send_mobile_sms]" value="1" >手机短信&nbsp;&nbsp;&nbsp;&nbsp;
</label>
</div>
</td>
<td>
<button type="button" class="button" value="编辑模板" onclick="window.location.href='index.php?do=msg&view=intertpl&slt_tpl_code=recharge_success'"/>
<span class="pen icon"></span>编辑模板</button>
                </td>
            </tr>
<tr> <td scope="row">
                    7                	</td>
<td>充值失败</td>
                <td><label for="send_close_7">
<input type="radio" name="fds[7][send_open]" value="0" id="send_close_7" onclick="hide_me(7);" >关闭</label>
<label for="send_open_7">
<input type="radio" name="fds[7][send_open]" value="1" id="send_open_7"  onclick="show_me(7);"checked="checked">开启                        </label>
<div style="display:inline" id="show_send_type_7">
<label for="cbk_6_1">
<input type="checkbox" id="cbk_6_1" name="ckb[7][send_sms]" value="1" checked="checked">站内短信&nbsp;&nbsp;&nbsp;&nbsp;
</label>
<label for="cbk_6_2">
<input type="checkbox" id="cbk_6_2" name="ckb[7][send_email]" value="1" checked="checked">发送邮件&nbsp;&nbsp;&nbsp;&nbsp;
</label>
<label for="cbk_6_3">
<input type="checkbox" id="cbk_6_3" name="ckb[7][send_mobile_sms]" value="1" >手机短信&nbsp;&nbsp;&nbsp;&nbsp;
</label>
</div>
</td>
<td>
<button type="button" class="button" value="编辑模板" onclick="window.location.href='index.php?do=msg&view=intertpl&slt_tpl_code=recharge_fail'"/>
<span class="pen icon"></span>编辑模板</button>
                </td>
            </tr>
<tr> <td scope="row">
                    8                	</td>
<td>空间变更</td>
                <td><label for="send_close_8">
<input type="radio" name="fds[8][send_open]" value="0" id="send_close_8" onclick="hide_me(8);" >关闭</label>
<label for="send_open_8">
<input type="radio" name="fds[8][send_open]" value="1" id="send_open_8"  onclick="show_me(8);"checked="checked">开启                        </label>
<div style="display:inline" id="show_send_type_8">
<label for="cbk_7_1">
<input type="checkbox" id="cbk_7_1" name="ckb[8][send_sms]" value="1" checked="checked">站内短信&nbsp;&nbsp;&nbsp;&nbsp;
</label>
<label for="cbk_7_2">
<input type="checkbox" id="cbk_7_2" name="ckb[8][send_email]" value="1" checked="checked">发送邮件&nbsp;&nbsp;&nbsp;&nbsp;
</label>
<label for="cbk_7_3">
<input type="checkbox" id="cbk_7_3" name="ckb[8][send_mobile_sms]" value="1" >手机短信&nbsp;&nbsp;&nbsp;&nbsp;
</label>
</div>
</td>
<td>
<button type="button" class="button" value="编辑模板" onclick="window.location.href='index.php?do=msg&view=intertpl&slt_tpl_code=space_change'"/>
<span class="pen icon"></span>编辑模板</button>
                </td>
            </tr>
<tr> <td scope="row">
                    9                	</td>
<td>任务发布</td>
                <td><label for="send_close_9">
<input type="radio" name="fds[9][send_open]" value="0" id="send_close_9" onclick="hide_me(9);" >关闭</label>
<label for="send_open_9">
<input type="radio" name="fds[9][send_open]" value="1" id="send_open_9"  onclick="show_me(9);"checked="checked">开启                        </label>
<div style="display:inline" id="show_send_type_9">
<label for="cbk_8_1">
<input type="checkbox" id="cbk_8_1" name="ckb[9][send_sms]" value="1" checked="checked">站内短信&nbsp;&nbsp;&nbsp;&nbsp;
</label>
<label for="cbk_8_2">
<input type="checkbox" id="cbk_8_2" name="ckb[9][send_email]" value="1" checked="checked">发送邮件&nbsp;&nbsp;&nbsp;&nbsp;
</label>
<label for="cbk_8_3">
<input type="checkbox" id="cbk_8_3" name="ckb[9][send_mobile_sms]" value="1" >手机短信&nbsp;&nbsp;&nbsp;&nbsp;
</label>
</div>
</td>
<td>
<button type="button" class="button" value="编辑模板" onclick="window.location.href='index.php?do=msg&view=intertpl&slt_tpl_code=task_pub'"/>
<span class="pen icon"></span>编辑模板</button>
                </td>
            </tr>
<tr> <td scope="row">
                    10                	</td>
<td>任务中标</td>
                <td><label for="send_close_10">
<input type="radio" name="fds[10][send_open]" value="0" id="send_close_10" onclick="hide_me(10);" >关闭</label>
<label for="send_open_10">
<input type="radio" name="fds[10][send_open]" value="1" id="send_open_10"  onclick="show_me(10);"checked="checked">开启                        </label>
<div style="display:inline" id="show_send_type_10">
<label for="cbk_9_1">
<input type="checkbox" id="cbk_9_1" name="ckb[10][send_sms]" value="1" checked="checked">站内短信&nbsp;&nbsp;&nbsp;&nbsp;
</label>
<label for="cbk_9_2">
<input type="checkbox" id="cbk_9_2" name="ckb[10][send_email]" value="1" checked="checked">发送邮件&nbsp;&nbsp;&nbsp;&nbsp;
</label>
<label for="cbk_9_3">
<input type="checkbox" id="cbk_9_3" name="ckb[10][send_mobile_sms]" value="1" checked="checked">手机短信&nbsp;&nbsp;&nbsp;&nbsp;
</label>
</div>
</td>
<td>
<button type="button" class="button" value="编辑模板" onclick="window.location.href='index.php?do=msg&view=intertpl&slt_tpl_code=task_bid'"/>
<span class="pen icon"></span>编辑模板</button>
                </td>
            </tr>
<tr>
                	<td colspan="4">
                	
                    <div class="clearfix">
                            <button class="positive primary pill button" type="submit" name='sbt_edit' value="提交"><span class="check icon"></span>提交</button>
</div>
   </td>
               </tr>	
            
        </table>
<div class="page"><a class="selected">1</a><a href="index.php?do=msg&view=internal&obj=&page=2">2</a> <a href="index.php?do=msg&view=internal&obj=&page=3">3</a> <a href="index.php?do=msg&view=internal&obj=&page=4">4</a> <a href="index.php?do=msg&view=internal&obj=&page=5">5</a> <a href="index.php?do=msg&view=internal&obj=&page=6">6</a> <a href="index.php?do=msg&view=internal&obj=&page=7">7</a> <a href="index.php?do=msg&view=internal&obj=&page=2">下一页>></a><span class="fl_l"> 1 / 7页</span> </div>
    </form>
</div></div></div>
<script type="text/javascript">
function hide_me(i){
$("#show_send_type_"+i).hide();
}
function show_me(i){
$("#show_send_type_"+i).css("display","inline");
}
</script>
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
