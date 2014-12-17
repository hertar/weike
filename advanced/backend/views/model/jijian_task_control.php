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
  <h1>计件悬赏任务配置</h1>
    <div class="tool">
     <a href="index.php?r=model/jijian_task_config" >基本配置</a>
      <a href="index.php?r=model/jijian_task_control" class="here">流程配置</a>
      <a href="index.php?r=model/jijian_task_priv">权限配置</a>
    </div>
</div>
<div class="box post">
<div class="tabcon">
 <div class="title"><h2>流程配置</h2></div>
  <form name="frm_config_reward" action="index.php?do=model&model_id=3&view=config&op=control" method="post" id="frm_config_reward">
  <input type="hidden" name="pk[model_id]" value="3">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  	
<tr>
 <th scope="row" width="200"> <b>任务佣金策略设定</b>：任务规则设置和异常任务资金分配</th><td>&nbsp;</td>
</tr>
<tr>
<th scope="row" width="200" class="t_r">任务审核金额：</th>
 <td>
<input type="text" size="10"   name="conf[audit_cash]" id="audit_cash" value="80"  limit="required:true;type:float;between:0-" msg=填写正确任务审核金额 title=任务审核金额允许小数 msgArea="audit_moeny_msg"  class="txt"> 元(任务需审核后发布成功的金额最小值，设为0即无限制)<span id="audit_moeny_msg"></span>
</td>
    </tr>
<tr>
<th scope="row" width="200" class="t_r">任务最小金额：</th>
 <td>
<input type="text" size="10"   name="conf[min_cash]" id="min_cash" value="80" limit="type:float;required:true;between:0-" msg=任务最小金额填写错误 title=任务最小金额为可以含小数  msgArea="task_min_cash_msg" class="txt"/>元(任务金额的最低下限，设为0即无限制)<span id="task_min_cash_msg"></span>
 </td>
</tr>
<tr>
<th scope="row" width="200" class="t_r">任务提成比例：</th> 
<td>
<input type="text" size="10" name="conf[task_rate]" value="10" id="task_rate" limit="required:true;type:int;len:1-3;between:0-100" msg=任务提成比例值为大于等于0的整数，长度：1-3 title=站长提取任务佣金的百分比，设为0即无抽佣 msgArea="task_rate_msg" class="txt"/>%(站长提取任务佣金的百分比，设为0即无抽佣)<span id="task_rate_msg"></span>
</td>
</tr>	
    <tr>
<th scope="row" width="200" class="t_r">任务退款处理：</th> 
<td>
<label for="rdo_defeated_money_yes">
 <input  type="radio" name="conf[defeated]" checked="checked" value="1" id="rdo_defeated_money_yes">返还现金</label>

 </td>
</tr>
<tr>
<th scope="row" width="200" class="t_r">任务失败返金抽成比例：</th> 
<td>
<input type="text" id="task_fail_rate" size="10" name="conf[task_fail_rate]" value="10" limit="required:true;type:int;len:1-3;between:0-100" msg=任务提成比例值为大于等于0的整数，长度：1-3 title=站长提取任务佣金的百分比，设为0即无抽佣 msgArea="task_fail_rate_msg" class="txt"/>%(任务异常失败时站长佣金百分比，设为0即无抽佣，另计赏任务稿件不足情况下只表示部分失败)<span id="task_fail_rate_msg"></span>
</td>
</tr>
  	<tr><th scope="row" width="200">任务时间规则设定：任务交易时间规则和用户参与时间限制</th><td>&nbsp;</td></tr>
<tr>
 <th scope="row" width="200" class="t_r">任务交稿截止时间最大规则：</th>
 <td id="td_cash_rul" class="td_cash_rul">
  <ul id="add_new_rul" style="list-style:none">
  	</ul>
<a href="javascript:;" id="add_time_rule">添加规则</a>
</td>
</tr>
<tr>
<th scope="row" width="200" class="t_r">任务交稿截止最小天数：</th>
 <td>
<input type="text" size="10" id="min_day"  name="conf[min_day]"  value="2" limit="type:int;required:true;between:1-" msg=任务最小时间不对,最少一天 title=任务最小时间为1天 msgArea="span_min_day" class="txt">天（大于等于1的整数天，且需要小于等于交稿时间最大规则天数）<span id="span_min_day"></span>
 </td>
</tr>	
<tr>
<th scope="row" width="200" class="t_r">选稿时间设置：</th> 
 <td>
<input type="text" size="10" name="conf[choose_time]" id="choose_time" value="1"  limit="required:true;type:int;between:1-" msg=选稿时间输入有误 title=(大于等于1的整数天)  msgArea="span_draft_time" class="txt">天(大于等于1的整数天)<span id="span_draft_time"></span>
</td>
</tr>
<tr>
<th scope="row" width="200" class="t_r">互评时间限制：</th> 
<td>
<input type="text" size="10"  name="conf[mark_day]" id="mark_day" value="1" limit="type:int;required:true;between:1-" msg=自动互评天数不正确 title=自动互评天数不得小于1天 msgArea="mark_day_delay" class="txt"/><b style="color:red">*</b>天(逾期未互评，系统默认好评)<span id="mark_day_delay"></span>

</td>
</tr>
<!--
<tr>
<th scope="row" width="200" class="t_r">进行中选稿：</th> 
<td>
<label for="open_select_yes"><input type="radio" name="conf[open_select]"   checked  id="open_select_yes" value="open">开启</label>
<label for="open_select_no"><input type="radio" name="conf[open_select]"  id="open_select_no" value="close">关闭</label>
</td>
</tr>	-->
<tr>
 <th scope="row" width="200"><h4>延期规则设定：任务投稿期结束前可延期，选稿期后无法延期</h4><td>&nbsp;</td></th>  
</tr>
<tr>
<th scope="row" width="200" class="t_r">延期最小金额：</th> 
<td>
<input type="text" size="10"  name="conf[min_delay_cash]" id="min_delay_cash" value="1" limit="required:true;type:int;between:1-" msg=每次延期金额最少金额填写错误 title=任务延期最少金额为1元 msgArea="span_min_delay_cash" class="txt"/><b style="color:red">*</b>元<span id="span_min_delay_cash"></span>
</td>
</tr>
<tr>
<th scope="row" width="200" class="t_r">延期最大天数：</th> 
<td>
<input type="text" size="10"  name="conf[max_delay]" id="max_delay" value="2" limit="type:int;required:true;between:2-" msg=每次最大延期天数不正确 title=任务最大延期天数不得小于2天 msgArea="span_min_delay" class="txt"/><b style="color:red">*</b>天<span id="span_min_delay"></span>
</td>
</tr>
<tr>	
 <th scope="row" width="200" class="t_r">延期规则添加：</th> 
 <td>
<ul id="new_delay_rule" class="new_delay_rule" style="list-style:none">
<li>
第<input type="text" size="10" name="delayOld[37][defer_times]" id="defer_times_0"  value="1" readonly="true" class="txt"/>次不低于悬赏总金额的<input type="text" name="delayOld[37][defer_rate]" id="defer_rate_0" value="20" size="10"  limit="required:true;type:int;between:0-100"
 msg=比例填写错误 title=任务延期比例为0-100 msgArea="span_delay_0" class="txt">%<span id="span_delay_0"></span>
<a href="javascript:;" class="del_delay_rule" rel="37">删除规则</a>
 		</li>
<li>
第<input type="text" size="10" name="delayOld[38][defer_times]" id="defer_times_1"  value="2" readonly="true" class="txt"/>次不低于悬赏总金额的<input type="text" name="delayOld[38][defer_rate]" id="defer_rate_1" value="10" size="10"  limit="required:true;type:int;between:0-100"
 msg=比例填写错误 title=任务延期比例为0-100 msgArea="span_delay_1" class="txt">%<span id="span_delay_1"></span>
<a href="javascript:;" class="del_delay_rule" rel="38">删除规则</a>
 		</li>
<li>
第<input type="text" size="10" name="delayOld[36][defer_times]" id="defer_times_2"  value="3" readonly="true" class="txt"/>次不低于悬赏总金额的<input type="text" name="delayOld[36][defer_rate]" id="defer_rate_2" value="2" size="10"  limit="required:true;type:int;between:0-100"
 msg=比例填写错误 title=任务延期比例为0-100 msgArea="span_delay_2" class="txt">%<span id="span_delay_2"></span>
<a href="javascript:;" class="del_delay_rule" rel="36">删除规则</a>
 		</li>
   </ul>
<a href="javascript:;" id="add_delay_rule"><img src="/public/resource/img/ico/add.gif" align="absmiddle" alt=''/>添加规则</a>
</td>
</tr>
<tr>
<th scope="row" width="200"><b>选稿规则设定</b>：雇主选稿异常情况下的系统辅助流程规则</th>
</tr>
<tr>
<th scope="row" width="200" class="t_r">稿件禁投设定：</th>
<td>
<input type="text" name="conf[work_percent]" value="200" limit="type:int;required:true;between:0-" msg=稿件数比例不正确 tips=请输入稿件数比例 msgArea="span_work_percent" class="txt"/><b style="color:red">*</b>% &nbsp;(未审核稿件数大于所需稿件数百分比时任务禁止投稿，设为0即不限制)<span id="span_work_percent"></span>
</td>		
</tr>
<tr>
<th scope="row" width="200" class="t_r">系统自动选稿：</th> 
<td>
<label for="is_auto_adjourn_yes"><input type="radio" name="conf[is_auto_adjourn]"   checked  id="is_auto_adjourn_yes" value="1">开启</label>
<label for="is_auto_adjourn_no"><input type="radio" name="conf[is_auto_adjourn]"  id="is_auto_adjourn_no" value="2">关闭</label>
(选稿期结束系统自动选稿，投稿时间优先选择，稿件不足部分按失败处理)
</td>
</tr>
<!--
<tr>
<th scope="row" width="200" class="t_r">自动选前N个稿件中标：</th> 
<td>
<input type="text" name="conf[adjourn_num]" value="" limit="type:int;required:true;between:0-" msg=稿件数输入不正确 tips=请输入稿件数 msgArea="span_adjourn_num" class="txt"/><b style="color:red">*</b>个 &nbsp;(如果开启自动选稿件，选稿期过雇主没有选稿，将选所交稿件中前N个稿件中标)<span id="span_adjourn_num"></span>
</td>
</tr>-->
<tr>
<th scope="row" width="200">&nbsp;</th>
<td>
            <div class="clearfix padt10">
 <button type="submit" name="sbt_edit" class="positive primary  button" value="1" onclick="return checkForm(document.getElementById('frm_config_reward'))"><span class="check icon"></span>提交</button>
</div>
</td>
</tr>
  </table>
  </form>
   </div>
 </div>
<script type="text/javascript">
$(function(){
if($("#end_action_1").attr("checked")==true){
$("#slt").hide();
}
if($("#end_action_2").attr("checked")==true){
 $("#slt").show();
 }
$("#end_action_1").click(function(){
$("#slt").hide();
})
$("#end_action_2").click(function(){
  $("#slt").show();
})

$("#add_time_rule").click(function(){
var ruleNum=parseInt($("#add_new_rul").find("li").length)+1;
var newRule=$("<li><span id='span_"+ruleNum+"'>"+ruleNum+"</span><input type='text' size='10' name='timeNew["+ruleNum+"][rule_cash]' class='txt'/>元以上&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"+
 "&nbsp;&nbsp;<input type='text' size='10' name='timeNew["+ruleNum+"][rule_day]' class='txt'> 天<br></li>");
newRule.appendTo($("#add_new_rul"));
})	
$(".del_time_rule").click(function(){
var timeRuleId=parseInt($(this).attr("rel"));
if(!isNaN(timeRuleId)){
$.getJSON("index.php?do=model&model_id=3&view=config&op=control",{ac:'del_time_rule',rule_id:timeRuleId},function(){});
}
$(this).parent().remove();
})	
$("#add_delay_rule").click(function(){
var delayNum=parseInt($("#new_delay_rule").find("li").length)+1;
var newRule=$("<li>第<input type='text' size='10' name='delayNew["+delayNum+"][defer_times]' value="+delayNum+" class='txt'/>次"+
 "不低于悬赏总金额的&nbsp;<input type='text' size='10' name='delayNew["+delayNum+"][defer_rate]' class='txt'>%"+
 "</li>");
newRule.appendTo($("#new_delay_rule"));
})
$(".del_delay_rule").click(function(){
var delayRuleId=parseInt($(this).attr("rel"));
if(!isNaN(delayRuleId)){
$.getJSON("index.php?do=model&model_id=3&view=config&op=control",{ac:'del_delay_rule',rule_id:delayRuleId},function(){});
}
$(this).parent().remove();
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
d.confirm("确定要" + c + '?', function() {
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