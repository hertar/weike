<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>keke admin</title>


<link href="/public/tpl/css/admin_management.css" rel="stylesheet" type="text/css" />
<link href="/public/resource/css/buttons.css" rel="stylesheet" type="text/css" />
<link title="style1" href="/public/tpl/skin/default/style.css" rel="stylesheet" type="text/css" />
<!--<link title="style2" href="/public/tpl/skin/light/style.css" rel="stylesheet" type="text/css" />-->
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
            <a href="index.php?r=msg/internal"  > 模板列表</a>
            <a href="index.php?r=msg/intertpl" class="here" > 模板编辑</a>
    	</div>
</div>
<div class="box post">
        <div class="tabcon">
        	<div class="title"><h2> 短信邮件模板配置管理</h2></div>
 <div class="detail">
 	
    <form name="frm_config_msg" action="index.php?do=msg&view=intertpl" method="post">
        <input type="hidden" name="hdn_tpl_code" id="hdn_tpl_code" value="">
        <table width="96%" height="" border="0" cellspacing="0" cellpadding="0" >
            <tr>    
                 <th scope="row" width="130">
                    短信邮件类型：                </th>
                <td>
                    <select name="slt_tpl_code" id="slt_tpl_code" class="ps vm">
                        <option value="-1">请选择模板类型</option>
<option   value="shop_close">店铺关闭消息提示</option>
<option   value="shop_open">店铺开启消息提示</option>
<option   value="report_notice">举报通知消息提示</option>
<option   value="shop_auth_fail">审核失败消息提示</option>
<option   value="shop_auth_success">审核通过消息提示</option>
<option   value="admin_charge">手动充值消息提示</option>
<option   value="work_out">稿件淘汰消息提示</option>
<option   value="work_rw">稿件入围消息提示</option>
<option   value="reported_pass">被举报成立消息提示</option>
<option   value="reported_nopass">被举报不成立消息提示</option>
<option   value="suggest_reply">建议反馈消息提示</option>
<option   value="task_unfrize">任务解冻消息提示</option>
<option   value="auto_choose">自动选稿消息提示</option>
<option   value="task_complete">任务完成消息提示</option>
<option   value="task_js_one">获得一等奖消息提示</option>
<option   value="work_bid">稿件中标消息提示</option>
<option   value="work_no_recept">稿件未采纳消息提示</option>
<option   value="task_unfreeze">任务解冻消息提示</option>
<option   value="work_get_prize">稿件获奖消息提示</option>
<option   value="task_fail">任务失败消息提示</option>
<option   value="task_jf">任务交付消息提示</option>
<option   value="task_fail_nopeople">任务无人参与失败消息提示</option>
<option   value="kf_set">客服设置消息提示</option>
<option   value="timeout">过期消息提示</option>
<option   value="group_set">分组设置消息提示</option>
<option   value="plan_haved_pay">计划已经付款消息提示</option>
<option   value="task_over">任务圆满结束消息提示</option>
<option   value="reward_cash_trust">诚意金托管消息提示</option>
<option   value="plan_confirm_pay">计划确认付款消息提示</option>
<option   value="task_edit">管理员编辑任务消息提示</option>
<option   value="prom_succes">推广成功消息提示</option>
<option   value="withdraw_fail">提现失败消息提示</option>
<option   value="auth_fail">认证失败消息提示</option>
<option   value="auth_success">认证成功消息提示</option>
<option   value="bank_auth">银行认证消息提示</option>
<option   value="task_unbid">稿件淘汰消息提示</option>
<option   value="match_task">速配任务消息提示</option>
<option   value="dispose_task">稿件结算消息提示</option>
<option   value="get_password">密码找回消息提示</option>
<option   value="unfreeze">用户解冻消息提示</option>
<option   value="order_change">订单状态变更消息提示</option>
<option   value="auto_choose">自动选稿消息提示</option>
<option   value="service_order">服务订单提交消息提示</option>
<option   value="service_pub">服务发布消息提示</option>
<option   value="agreement_file">协议文件交付消息提示</option>
<option   value="agreement">协议签署消息提示</option>
<option   value="update_password">更新密码消息提示</option>
<option   value="update_sec_code">更改安全码消息提示</option>
<option   value="transrights_freeze">交易维权冻结消息提示</option>
<option   value="transrights_accept">交易维权受理消息提示</option>
<option   value="transrights_nopass">交易维权不成立消息提示</option>
<option   value="transrights_pass">交易维权成立消息提示</option>
<option   value="task_hand">任务交稿消息提示</option>
<option   value="task_sign">任务报名消息提示</option>
<option   value="task_freeze">任务冻结消息提示</option>
<option   value="task_auth_success">审核通过消息提示</option>
<option   value="task_auth_fail">审核失败消息提示</option>
<option   value="task_bid">任务中标消息提示</option>
<option   value="task_pub">任务发布消息提示</option>
<option   value="space_change">空间变更消息提示</option>
<option   value="recharge_fail">充值失败消息提示</option>
<option   value="recharge_success">充值成功消息提示</option>
<option   value="draw_success">提现成功消息提示</option>
<option   value="pay_fail">支付失败消息提示</option>
<option   value="pay_success">支付成功消息提示</option>
<option   value="freeze">用户冻结消息提示</option>
<option   value="reg">注册成功消息提示</option>
                    </select>
                </td>
            </tr>
            <tr>
                 <th scope="row">
                    短信邮件内容：                </th>
                <td>
                    <div class="field" style="margin-left:-10px;*margin-left:0">
                        <textarea name="tar_msg_temp_content" id="system-create-location_1" id="tar_content" class="xheditor {tools:'Source',urlBase:'http://127.0.0.1/weike',html5Upload:false,upImgUrl:'/public/index.php?do=ajax&view=upload&file_type=editor'}" cols="70" style="width: 75%; display: none;" rows="15"></textarea>
                    </div>
                </td>
            </tr> 
            <tr>
            	<th scope="row">&nbsp;</th>
<td>
<div class="clearfix padt10">
  <button class="positive primary pill button" type="submit" name='sbt_edit' value="提交"><span class="check icon"></span>提交</button>

                 </div>
</td>

            </tr>
        </table>
    </form>
</div></div></div>
<script type="text/javascript">
$(function(){
$("#slt_tpl_code").change(function(){
var selectValue = $(this).val();
            if (selectValue != '-1') {
                var url = "index.php?do=msg&view=intertpl";
                $.ajax({
                    type: "POST",
                    url: url,
                    cache: false,
                    async: false,
                    data: "tpl_code=" + selectValue,
                    dataType: "json",
                    error: function(json){
                        $('#system-create-location_1').val('');
if($("#system-create-location_2")){
$("#system-create-location_2").val('');
}
                        $("#hdn_tpl_code").val('');
                        $('#list').html("查询结果为空，请稍后再试...");
                        
                    },
                    success: function(json){
                        if (json.status == 0) {
                            $('#list').html("模板内容为空!");
                        }
                        else {
var data=json.data;
                            $('#list').html('');
                            $('#system-create-location_1').val(data['0'].content);
if($("#system-create-location_2")){
$("#system-create-location_2").val(data['1'].content);
}
                            $("#hdn_tpl_code").val(data['0'].tpl_code);
                        }
                    }
                });
            }
            else {
art.dialog.alert("请选择模板!");
                $('#system-create-location_'+i).val('');
                return false;
            }
})
})
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
