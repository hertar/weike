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
  <h1>多人悬赏任务配置</h1>
    <div class="tool">
      <a href="index.php?r=model/many_task_config" >基本配置</a>
      <a href="index.php?r=model/many_task_control" class="here">流程配置</a>
      <a href="index.php?r=model/many_task_priv">权限配置</a>
    </div>
</div>
<div class="box post">
<div class="tabcon">
 <div class="title"><h2>流程配置</h2></div>
  <form name="frm_config_reward" action="index.php?do=model&model_id=2&view=config&op=control" method="post" id="frm_config_reward">
  <input type="hidden" name="pk[model_id]" value="2">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  	
<tr>
 <th scope="row" width="200"> <b>任务佣金策略</b>：任务规则设置和异常任务资金分配
</th><td>&nbsp;</td>
</tr>
<tr>
<th scope="row" width="200" class="t_r">任务审核金额设定：</th>
 <td>
<input type="text" size="10"   name="conf[audit_cash]" id="audit_cash" value="100"  limit="required:true;type:float;between:0-" msg="填写正确任务审核金额" title="任务审核金额允许小数" msgArea="audit_moeny_msg"  class="txt"> 元(任务需审核后发布成功的金额最小值，设为0即无限制)<span id="audit_moeny_msg"></span>
</td>
    </tr>
<tr>
<th scope="row" width="200" class="t_r">任务最小金额设定：</th>
 <td>
<input type="text" size="10"   name="conf[min_cash]" id="min_cash" value="10" limit="type:float;required:true;between:0-" msg="任务最小金额填写错误" title="任务最小金额为可以含小数"  msgArea="task_min_cash_msg" class="txt"/>元(任务金额的最低下限，设为0即无限制)<span id="task_min_cash_msg"></span>
 </td>
</tr>
<tr>
<th scope="row" width="200" class="t_r">任务提成比例：</th> 
<td>
<input type="text" size="10" name="conf[task_rate]" value="10" id="task_rate" limit="required:true;type:int;len:1-3;between:0-100" msg="任务提成比例值为正整数，长度：1-3" title="任务提成比例值为正整数,0-100" msgArea="task_rate_msg" class="txt"/>%
(站长提取任务佣金的百分比，设为0即无抽佣)<span id="task_rate_msg"></span>
</td>
</tr>
<tr>
<th scope="row" width="200" class="t_r">任务失败提成比例：</th> 
<td>
<input type="text" size="10" name="conf[task_fail_rate]" value="10" id="task_fail_rate" limit="required:true;type:int;len:1-3;between:0-100" msg="任务提成比例值为正整数，长度：1-3" title="任务提成比例值为正整数,0-100" msgArea="task_fail_rate_msg" class="txt"/>%
（任务异常失败时站长佣金百分比，设为0即无抽佣，另多赏任务中某奖项下稿件不足时只表示该奖项异常失败）<span id="task_fail_rate_msg"></span>
</td>
</tr>

    <tr>
<th scope="row" width="200" class="t_r">任务失败处理：</th> 
<td>
<label for="rdo_defeated_money_yes">
 <input  type="radio" name="conf[defeated]" checked="checked" value="1" id="rdo_defeated_money_yes">返还现金</label>
 </td>
</tr>
  	<tr><th scope="row" width="200">任务时间规则设定：任务交易时间规则和用户参与时间限制
</th><td>&nbsp;</td></tr>
<tr>
 <th scope="row" width="200" class="t_r">任务交稿截止时间最大规则 ：</th>
 <td id="td_cash_rul" class="td_cash_rul">
  <ul id="add_new_rul" style="list-style:none">
  	</ul>
<a href="javascript:;" id="add_time_rule">添加规则</a>
</td>
</tr>
<tr>
<th scope="row" width="200" class="t_r">任务公示期时间：</th>
 <td>
<input type="text" size="10"   name="conf[notice_period]"  value="0" limit="type:int;required:true;between:0-" msg="公示期时间不对" title="任务公示期最小时间为1天" msgArea="span_notice_period" class="txt">天(大于等于0的整数天，设为0即无公示期)
<span id="span_notice_period"></span>
 </td>
</tr>
<tr>
<th scope="row" width="200" class="t_r">任务交稿截止最小天数：</th>
 <td>
<input type="text" size="10" id="min_day"  name="conf[min_day]"  value="1" limit="type:int;required:true;between:1-" msg="任务最小时间不对,最少一天" title="任务最小时间为1天" msgArea="span_min_day" class="txt">天（大于等于1的整数天，且需要小于等于交稿时间最大规则天数）
<span id="span_min_day"></span>
 </td>
</tr><!--
<tr>
<th scope="row" width="200" class="t_r">任务投票期时间：</th> 
<td>
<input type="text" size="10" id="vote_period" name="conf[vote_period]"  value="" limit="type:int;required:true;between:1-" msg="投票期时间不对,长度:1" title="任务投票期最小时间为1天" msgArea="span_vote_period" class="txt">天（任务没有定稿时，通过投票决定，不得少于1天）<br>
<span id="span_vote_period"></span>
</td>
</tr>
--><!--
<tr>
<th scope="row" width="200" class="t_r">新注册用户投票时间限制:</th> 
  <td>
 <input type="text" size="10" id="reg_vote_limit" name="conf[reg_vote_limit]"  value="" limit="type:int;require:true" msg="新注册用户投票时间限制时间不对" title="可以对新注册用户不做投票时间限制" msgArea="reg_vote_limit_time_msg" class="txt">小时（0为不作限制）
<br><span id="reg_vote_limit_time_msg"></span>
 </td>
</tr>
-->
<tr>
<th scope="row" width="200" class="t_r">选稿时间设置：</th> 
 <td>
<input type="text" size="10" name="conf[choose_time]" id="choose_time" value="1"  limit="required:true;type:int;between:1-" msg="选稿时间输入有误" title="大于等于1的整数天"  msgArea="span_draft_time" class="txt">天(大于等于1的整数天)<span id="span_draft_time"></span>
</td>
</tr>


<tr>
 <th scope="row" width="200"><h4>延期规则设定：任务投稿期结束前可延期，选稿期后无法延期
</h4><td>&nbsp;</td></th>  
</tr>
<tr>
<th scope="row" width="200" class="t_r">延期最小金额：</th> 
<td>
<input type="text" size="10"  name="conf[min_delay_cash]" id="min_delay_cash" value="2" limit="required:true;type:int;between:1-" msg="每次延期金额最少金额填写错误" title="任务延期最少金额为1元" msgArea="span_min_delay_cash" class="txt"/><b style="color:red">*</b>元<span id="span_min_delay_cash"></span>
</td>
</tr>
<tr>
<th scope="row" width="200" class="t_r">延期最大天数  ：</th> 
<td>
<input type="text" size="10"  name="conf[max_delay]" id="max_delay" value="2" limit="type:int;required:true;between:2-" msg="每次最大延期天数不正确" title="任务最大延期天数不得小于2天" msgArea="span_min_delay" class="txt"/><b style="color:red">*</b>天<span id="span_min_delay"></span>
</td>
</tr>
<tr>	
 <th scope="row" width="200" class="t_r">延期规则添加  ：</th> 
 <td>
<ul id="new_delay_rule" class="new_delay_rule" style="list-style:none">
<li>
第<input type="text" size="10" name="delayOld[29][defer_times]" id="defer_times_0"  value="1" readonly="true" class="txt"/>次 不低于悬赏总金额的<input type="text" name="delayOld[29][defer_rate]" id="defer_rate_0" value="10" size="10"  limit="required:true;type:int;between:0-100"
 msg="比例填写错误" title="任务延期比例为0-100" msgArea="span_delay_0" class="txt">%<span id="span_delay_0"></span>
<a href="javascript:;" class="del_delay_rule" rel="29">删除规则</a>
 		</li>
<li>
第<input type="text" size="10" name="delayOld[19][defer_times]" id="defer_times_1"  value="2" readonly="true" class="txt"/>次 不低于悬赏总金额的<input type="text" name="delayOld[19][defer_rate]" id="defer_rate_1" value="20" size="10"  limit="required:true;type:int;between:0-100"
 msg="比例填写错误" title="任务延期比例为0-100" msgArea="span_delay_1" class="txt">%<span id="span_delay_1"></span>
<a href="javascript:;" class="del_delay_rule" rel="19">删除规则</a>
 		</li>
<li>
第<input type="text" size="10" name="delayOld[35][defer_times]" id="defer_times_2"  value="3" readonly="true" class="txt"/>次 不低于悬赏总金额的<input type="text" name="delayOld[35][defer_rate]" id="defer_rate_2" value="5" size="10"  limit="required:true;type:int;between:0-100"
 msg="比例填写错误" title="任务延期比例为0-100" msgArea="span_delay_2" class="txt">%<span id="span_delay_2"></span>
<a href="javascript:;" class="del_delay_rule" rel="35">删除规则</a>
 		</li>
   </ul>
<a href="javascript:;" id="add_delay_rule">添加规则</a>
</td>
</tr>
<tr>
 <th scope="row" width="200"><h4>选稿规则设定：雇主选稿异常情况下的系统辅助流程规则
</h4><td>&nbsp;</td></th>  
</tr>
<!--<tr>
<th scope="row" width="200" class="t_r">进行中选稿：</th> 
<td>
<label for="open_select_yes"><input type="radio" name="conf[open_select]"   checked  id="open_select_yes" value="open">开启</label>
<label for="open_select_no"><input type="radio" name="conf[open_select]"  id="open_select_no" value="close">关闭</label>   (投稿期提前选稿后直接进入公示期)
</td>
</tr>-->

<tr>
<th scope="row" width="200" class="t_r">任务过期操作设定：</th> 
 <td>
<label for="end_action_1"><input type="radio"  checked name="conf[end_action]" id="end_action_1" value="refund">失败结束</label>
<label for="end_action_3"><input type="radio"  name="conf[end_action]" id="end_action_2" value="split">系统自动选稿（选稿期结束后有投雇主未选稿时）</label>
 </td>
</tr>

<tr id="slt_choose_rule" style="display:none">
<th scope="row" width="200" class="t_r">系统自动选稿规则：</th> 
 <td>
         <select name="conf[auto_choose_rule]" id="auto_choose_rule">
         	<option value="work_time" selected="selected" >最先交稿</option>
<option value="seller_credit" >能力值最高</option>
<option value="take_num" >交稿次数最多</option>
<option value="master_choose" >站长代选</option>
         </select>
稿件数不足奖项名额的部分按失败处理
 </td>
</tr>
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
$("#slt_choose_rule").hide();
}
if($("#end_action_2").attr("checked")==true){
 $("#slt").show();
 $("#slt_choose_rule").show();
 }
$("#end_action_1").click(function(){
$("#slt").hide();
$("#slt_choose_rule").hide();
})
$("#end_action_2").click(function(){
  $("#slt").show();
  $("#slt_choose_rule").show();
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
$.getJSON("index.php?do=model&model_id=2&view=config&op=control",{ac:'del_time_rule',rule_id:timeRuleId},function(){});
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
$.getJSON("index.php?do=model&model_id=2&view=config&op=control",{ac:'del_delay_rule',rule_id:delayRuleId},function(){});
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