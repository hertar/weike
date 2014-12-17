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
table tr .t_r{text-align:right}
</style>
<div class="page_title">
  <h1>普通招标任务配置</h1>
    <div class="tool">
      <a href="index.php?r=model/normal_task_config" >基本配置</a>
      <a href="index.php?r=model/normal_task_control" class="here">流程配置</a>
      <a href="index.php?r=model/normal_task_priv">权限配置</a>
    </div>
</div>
<div class="box post">
<div class="tabcon">
 <div class="title"><h2>流程配置</h2></div>
  <form name="frm_config_reward" action="index.php?do=model&model_id=4&view=config&op=control" method="post" id="frm_config_reward">
  <input type="hidden" name="pk[model_id]" value="4">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  	
<tr>
 <th scope="row" width="200"> <b>任务佣金策略</b>：</th><td>&nbsp;</td>
</tr>
<tr> 
<th scope="row" width="200" class="t_r">任务审核设定：</th>
  <td>
<label for="zb_audit_1">
<input type="radio"   name="conf[zb_audit]" id="zb_audit_1" value="1">开启</label>
<label for="zb_audit_2">
<input type="radio" checked name="conf[zb_audit]" id="zb_audit_2" value="2">关闭</label>
(任务发布成功是否需要站长审核 ) </td>
 
 
    </tr>
 
<tr>
<th scope="row" width="200" class="t_r">网站服务费：</th> 
<td>
<input type="text" size="10" name="conf[zb_fees]" id="zb_fees" value="30" limit="required:true;type:int;len:1-3;between:0-"  msg="任务提成为正整数，长度：1-3" title="任务提成为正整数" msgArea="deduct_scale_msg" class="txt"/><span id="deduct_scale_msg"></span>
(普通招标任务站长佣金为固定值，设为0即无抽佣  )</td>
</tr>
  	<tr><th scope="row" width="200">金额区间设置：</th>
<td><a class="button" href="index.php?do=model&model_id=4&view=config&op=cash_rule&ac=add">
<span class="pen icon"></span>添加新区间</a>
</td>
</tr>
<tr>
<th scope="row" width="200" class="t_r">&nbsp;</th> 
 <td>
<ul>
 	<li>
1.00元-1000.00元&nbsp;&nbsp;&nbsp;
<a class="button" href="index.php?do=model&model_id=4&view=config&op=cash_rule&ac=edit&rule_id=34">
<span class="pen icon"></span>编辑</a>&nbsp;&nbsp;
<a class="button" href="index.php?do=model&model_id=4&view=config&op=cash_rule&ac=del&rule_id=34">
<span class="trash icon"></span>删除</a>
</li>
<li>
1000.00元-3000.00元&nbsp;&nbsp;&nbsp;
<a class="button" href="index.php?do=model&model_id=4&view=config&op=cash_rule&ac=edit&rule_id=35">
<span class="pen icon"></span>编辑</a>&nbsp;&nbsp;
<a class="button" href="index.php?do=model&model_id=4&view=config&op=cash_rule&ac=del&rule_id=35">
<span class="trash icon"></span>删除</a>
</li>
<li>
3000.00元-6000.00元&nbsp;&nbsp;&nbsp;
<a class="button" href="index.php?do=model&model_id=4&view=config&op=cash_rule&ac=edit&rule_id=36">
<span class="pen icon"></span>编辑</a>&nbsp;&nbsp;
<a class="button" href="index.php?do=model&model_id=4&view=config&op=cash_rule&ac=del&rule_id=36">
<span class="trash icon"></span>删除</a>
</li>
<li>
6000.00元-10000.00元&nbsp;&nbsp;&nbsp;
<a class="button" href="index.php?do=model&model_id=4&view=config&op=cash_rule&ac=edit&rule_id=37">
<span class="pen icon"></span>编辑</a>&nbsp;&nbsp;
<a class="button" href="index.php?do=model&model_id=4&view=config&op=cash_rule&ac=del&rule_id=37">
<span class="trash icon"></span>删除</a>
</li>
<li>
10000.00元-20000.00元&nbsp;&nbsp;&nbsp;
<a class="button" href="index.php?do=model&model_id=4&view=config&op=cash_rule&ac=edit&rule_id=38">
<span class="pen icon"></span>编辑</a>&nbsp;&nbsp;
<a class="button" href="index.php?do=model&model_id=4&view=config&op=cash_rule&ac=del&rule_id=38">
<span class="trash icon"></span>删除</a>
</li>
<li>
20000.00元-30000.00元&nbsp;&nbsp;&nbsp;
<a class="button" href="index.php?do=model&model_id=4&view=config&op=cash_rule&ac=edit&rule_id=39">
<span class="pen icon"></span>编辑</a>&nbsp;&nbsp;
<a class="button" href="index.php?do=model&model_id=4&view=config&op=cash_rule&ac=del&rule_id=39">
<span class="trash icon"></span>删除</a>
</li>
<li>
30000.00元-50000.00元&nbsp;&nbsp;&nbsp;
<a class="button" href="index.php?do=model&model_id=4&view=config&op=cash_rule&ac=edit&rule_id=40">
<span class="pen icon"></span>编辑</a>&nbsp;&nbsp;
<a class="button" href="index.php?do=model&model_id=4&view=config&op=cash_rule&ac=del&rule_id=40">
<span class="trash icon"></span>删除</a>
</li>
<li>
50000.00元-60000.00元&nbsp;&nbsp;&nbsp;
<a class="button" href="index.php?do=model&model_id=4&view=config&op=cash_rule&ac=edit&rule_id=43">
<span class="pen icon"></span>编辑</a>&nbsp;&nbsp;
<a class="button" href="index.php?do=model&model_id=4&view=config&op=cash_rule&ac=del&rule_id=43">
<span class="trash icon"></span>删除</a>
</li>
</ul>
</td>
</tr>
  	<tr><th scope="row" width="200">任务最大时间限制：</th><td>&nbsp;</td></tr>

<tr>
<th scope="row" width="200" class="t_r">任务最大时间限制：</th> 
 <td>
<input type="text" size="10" name="conf[zb_max_time]" id="zb_max_time" value="30"  limit="required:true;type:int;between:1-" msg="时间输入有误" title="任务投标时间最少为1天，最多30天"  msgArea="span_max_time" class="txt">天(任务上限时间，需大于最小时间限制)<span id="span_max_time"></span>

</td>
</tr>
<tr>
<th scope="row" width="200" class="t_r">任务最小时间限制：</th> 
 <td>
<input type="text" size="10" name="conf[zb_min_time]" id="zb_min_time" value="1"  limit="required:true;type:int;between:1-" msg="时间输入有误" title="任务投标时间最少为1天，最多30天"  msgArea="span_min_time" class="txt">天(任务下限时间，需小于最大时间限制)<span id="span_min_time"></span>

</td>
</tr>
<tr>
<th scope="row" width="200" class="t_r">选标最大时间设置：</th> 
 <td>
<input type="text" size="10" name="conf[choose_time]" id="choose_time" value="2"  limit="required:true;type:int;between:1-" msg="时间输入有误" title="逾期未选标，任务自动失败结束"  msgArea="span_draft_time" class="txt">天(逾期未选标，任务自动失败结束)<span id="span_draft_time"></span>
</td>
</tr>
<!--
<tr>
<th scope="row" width="200" class="t_r">竞标中选标：</th> 
<td>
<label for="open_select_yes"><input type="radio" name="conf[open_select]"   checked  id="open_select_yes" value="open">开启</label>
<label for="open_select_no"><input type="radio" name="conf[open_select]"  id="open_select_no" value="close">关闭</label>
</td>
</tr>-->
<tr>
<th scope="row" width="200">&nbsp;</th>
<td>
            <div class="clearfix padt10">
            	<input type="hidden" name="sbt_edit" value="1">
 <button type="button" name="sbt_edit" class="positive primary  button" value="1" onclick="confirmSub()"><span class="check icon"></span>提交</button>
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
var min_day = parseInt($("#zb_min_time").val())+0;
var max_day = parseInt($("#zb_max_time").val())+0;
if(i){
//alert(min_day);
if(min_day>max_day){
art.dialog.alert("任务最大时间限制不能小于任务最小时间限制");return false;
}else{
$("#frm_config_reward").submit();
}
}else{
return false;
}
}
</script>
