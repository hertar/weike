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
<style type="text/css">
    table tr .t_r {
        text-align: right
    }
</style>
<div class="page_title">
    <h1>订金招标任务配置</h1>
    <div class="tool">
        <a href="index.php?r=model/deposit_task_config" >基本配置</a>
      <a href="index.php?r=model/deposit_task_control" class="here">流程配置</a>
      <a href="index.php?r=model/deposit_task_priv">权限配置</a>
    </div>
</div>
<div class="box post">
    <div class="tabcon">
        <div class="title">
            <h2>流程配置</h2>
        </div>
        <form name="frm_config_reward" action="index.php?do=model&model_id=5&view=config&op=control" method="post" id="frm_config_reward">
            <input type="hidden" name="pk[model_id]" value="5">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
            	  <tr>
                    <th scope="row" width="200"  class="t_r">
                        任务审核设定：                    </th>
                    <td>
                        <label for="open_open_audit_yes">
                            <input type="radio" name="conf[open_audit]"   id="open_open_audit_yes" value="open">开启                        </label>
                        <label for="open_open_audit_no">
                            <input type="radio" name="conf[open_audit]"   checked   id="open_open_audit_no" value="close">关闭                        </label>
（任务发布成功是否需要站长审核）

                    </td>
                </tr>
                <tr>
                    <th scope="row" width="200">
                        <b>任务佣金策略设定</b>：任务规则设置和异常任务资金分配

                    </th>
                    <td>
                        &nbsp;
                    </td>
                </tr>
                <tr>
                    <th scope="row" width="200" class="t_r">
                        招标订金：                    </th>
                    <td>
                        <input type="text" size="10" name="conf[deposit]" id="deposit" onkeyup="clearstr(this);" value="20" limit="required:true;type:int;between:10-1000" msg=招标订金输入有误 title=招标订金的范围是10-10000元 msgArea="span_deposit" class="txt">元(发布任务需要缴纳的订金)<span id="span_deposit"></span>
                    </td>
                </tr>
 <tr>
                    <th scope="row" width="200" class="t_r">
                        任务提成比例：                    </th>
                    <td>
                        <input type="text" size="10" name="conf[task_rate]" maxlength="3" id="task_rate" onkeyup="clearstr(this);" value="10" limit="required:true;type:int;between:0-100" msg=招标提成比例输入有误 title=招标提成比例是0%-100% msgArea="span_task_rate" class="txt">%(招标提成比例的范围是0-100%，招标提成比例是计算招标成交金额的百分比)<span id="span_task_rate"></span>
                    </td>
                </tr>
 <tr>
                    <th scope="row" width="200" class="t_r">
                     任务失败提成比例：                    </th>
                    <td>
                        <input type="text" size="10" name="conf[task_fail_rate]" maxlength="3" id="task_fail_rate" onkeyup="clearstr(this);" value="10" limit="required:true;type:int;between:0-100" msg=招标失败提成比例输入有误 title=招标失败提成比例是0%-100% msgArea="span_task_fail_rate" class="txt">%(招标提成比例的范围是0%-100%，招标提成比例是计算招标成交金额的百分比)<span id="span_task_fail_rate"></span>
                    </td>
                </tr>
    <tr>
<th scope="row" width="200" class="t_r">任务失败处理：</th> 
<td>
<label for="rdo_defeated_money_yes">
 <input  type="radio" name="conf[defeated]" checked="checked" value="1" id="rdo_defeated_money_yes">返还现金</label>
 </td>
</tr>
                <tr>
                    <th scope="row" width="130">
                        任务时间规则设定：任务交易时间规则和用户参与时间限制


                    </th>
                    <td>
                        &nbsp;
                    </td>
                </tr>
                <tr>
                    <th scope="row" width="200" class="t_r">
                      竞标截止最大时间：                    </th>
                    <td>
                        <input type="text" size="10" name="conf[bid_max_time]" maxlength="3" id="bid_max_time" value="100" limit="required:true;type:int;between:1-100" msg=竞标时间输入有误 title=竞标时间的范围是1-100天 msgArea="span_bid_time" class="txt">天(竞标时间的范围是1-100天)<span id="span_bid_time"></span>
                    </td>
                </tr>
  <tr>
                    <th scope="row" width="200" class="t_r">
                      竞标截止最小时间：                    </th>
                    <td>
                        <input type="text" size="10" name="conf[bid_min_time]" maxlength="3" id="bid_min_time" value="2" limit="required:true;type:int;between:1-100" msg=选标时间输入有误 title=选标时间的范围是1-100天 msgArea="span_select_time" class="txt">天(选标时间的范围是1-100天)<span id="span_select_time"></span>
                    </td>
                </tr>
<!--  <tr>
                    <th scope="row" width="200" class="t_r">
                      工作时间期限：                    </th>
                    <td>
                        <input type="text" size="10" name="conf[work_time]" maxlength="3" id="work_time" value="" limit="required:true;type:int;between:1-" msg= title= msgArea="span_work_time" class="txt">（中标后允许设定的最大工作时长，正整数）<span id="span_work_time"></span>
                    </td>
                </tr>-->
 <tr>
                    <th scope="row" width="200" class="t_r">
                       雇主托管最大时间：                    </th>
                    <td>
                        <input type="text" size="10" name="conf[pay_limit_time]" maxlength="3" id="pay_limit_time" value="2" limit="required:true;type:int;between:1-100" msg='雇主托管的最大时间限制' title='雇主托管的最大时间限制' msgArea="span_pay_limit_time" class="txt">天(雇主托管赏金的最大时间限制)<span id="span_pay_limit_time"></span>
                    </td>
                </tr>
<tr>
                    <th scope="row" width="200" class="t_r">
                       打款期限：                    </th>
                    <td>
                        <input type="text" size="10" name="conf[confirm_limit_time]" maxlength="3" id="confirm_limit_time" value="1" limit="required:true;type:int;between:1-100" msg=打款期限输入有误 title=打款期限的范围是1-100天 msgArea="span_confirm_limit_time" class="txt">小时(雇主打款等待的最大时长正整数，逾期后自动打款确认)<span id="span_confirm_limit_time"></span>
                    </td>
                </tr>
  	<tr><th scope="row" width="200">金额区间设置：</th>
<td><a class="button" href="index.php?do=model&model_id=5&view=config&op=cash_rule&ac=add">
<span class="pen icon"></span>添加新区间</a>
</td>
</tr>
<tr>
<th scope="row" width="200" class="t_r">&nbsp;</th> 
 <td>
<ul>
 	<li>
100.00元-1000.00元&nbsp;&nbsp;&nbsp;
<a class="button" href="index.php?do=model&model_id=5&view=config&op=cash_rule&ac=edit&rule_id=41">
<span class="pen icon"></span>编辑</a>&nbsp;&nbsp;
<a class="button" href="index.php?do=model&model_id=5&view=config&op=cash_rule&ac=del&rule_id=41">
<span class="trash icon"></span>删除</a>
</li>
<li>
1000.00元-2000.00元&nbsp;&nbsp;&nbsp;
<a class="button" href="index.php?do=model&model_id=5&view=config&op=cash_rule&ac=edit&rule_id=29">
<span class="pen icon"></span>编辑</a>&nbsp;&nbsp;
<a class="button" href="index.php?do=model&model_id=5&view=config&op=cash_rule&ac=del&rule_id=29">
<span class="trash icon"></span>删除</a>
</li>
<li>
2000.00元-5000.00元&nbsp;&nbsp;&nbsp;
<a class="button" href="index.php?do=model&model_id=5&view=config&op=cash_rule&ac=edit&rule_id=30">
<span class="pen icon"></span>编辑</a>&nbsp;&nbsp;
<a class="button" href="index.php?do=model&model_id=5&view=config&op=cash_rule&ac=del&rule_id=30">
<span class="trash icon"></span>删除</a>
</li>
<li>
5000.00元-10000.00元&nbsp;&nbsp;&nbsp;
<a class="button" href="index.php?do=model&model_id=5&view=config&op=cash_rule&ac=edit&rule_id=31">
<span class="pen icon"></span>编辑</a>&nbsp;&nbsp;
<a class="button" href="index.php?do=model&model_id=5&view=config&op=cash_rule&ac=del&rule_id=31">
<span class="trash icon"></span>删除</a>
</li>
<li>
10000.00元-20000.00元&nbsp;&nbsp;&nbsp;
<a class="button" href="index.php?do=model&model_id=5&view=config&op=cash_rule&ac=edit&rule_id=32">
<span class="pen icon"></span>编辑</a>&nbsp;&nbsp;
<a class="button" href="index.php?do=model&model_id=5&view=config&op=cash_rule&ac=del&rule_id=32">
<span class="trash icon"></span>删除</a>
</li>
<li>
30000.00元-40000.00元&nbsp;&nbsp;&nbsp;
<a class="button" href="index.php?do=model&model_id=5&view=config&op=cash_rule&ac=edit&rule_id=42">
<span class="pen icon"></span>编辑</a>&nbsp;&nbsp;
<a class="button" href="index.php?do=model&model_id=5&view=config&op=cash_rule&ac=del&rule_id=42">
<span class="trash icon"></span>删除</a>
</li>
</ul>
</td>
</tr>
                <tr>
                    <th scope="row">
                        &nbsp;
                    </th>
                    <td>
                        <div class="clearfix padt10">
                        	<input type="hidden" name="sbt_edit" value="1">
                            <button class="positive primary pill button" type="button" name="sbt_edit" value="提交" onclick="confirmSub()">
                                <span class="check icon"></span>提交                            </button>
                        </div>
                    </td>
                </tr>
            </table>
        </form>
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
<script type="text/javascript">
function confirmSub(){
var i = checkForm(document.getElementById('frm_config_reward'));
var min_day = parseInt($("#bid_min_time").val())+0;
var max_day = parseInt($("#bid_max_time").val())+0;
if(i){
//alert(min_day);
if(min_day>max_day){
art.dialog.alert("竞标截止最大时间限制不能小于竞标截止最小时间限制");return false;
}else{
$("#frm_config_reward").submit();
}
}else{
return false;
}
}
</script>