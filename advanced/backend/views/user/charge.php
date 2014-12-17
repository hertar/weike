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
    	<h1>用户管理</h1>
        <div class="tool">
            <a href="index.php?r=user/user_list" >用户管理</a>
            <a href="index.php?r=user/user_add">添加用户</a>
            <a href="index.php?r=user/charge" class="here">手动充值</a>
</div>
    </div>
<div class="box post">
        <div class="tabcon">
        	<div class="title"><h2>手动充值</h2></div>
            <div class="detail">
               <form action="#" method="post" name="frm_cash" id="frm_cash">
                    <input type="hidden" name="view" value="charge">
<input type="hidden" name="valid" id="valid">
<input type="hidden" name="maxCash" id="maxCash">
<input type="hidden" name="maxCredit" id="maxCredit">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tbody>
                      <tr>
                        <th scope="row" width='100'>UID/用户名：</th>
                        <td>
                       		<input type="text" class="txt" style=" width:260px;" name="user"
id="txt_user" title="请填写待充值用户的UID或 用户名"
limit="required:true" msgArea="txt_user_msg"
  	msg="用户UId或用户名不得为空"/>
<b style="color:red"> *</b><span id="txt_user_msg"></span>用户的编号或用户名来查找用户<a class="button dbl_target" href="javascript:void(0);" onclick="validUser();">
<span class="chat icon"></span>
验证</a>
<div class="box tip clearfix p_relative" style="width:310px;display:none;" id="man_tips">
    	<div class="title"><h2>账户信息</h2></div>
        <div class="detail pad10">
        	<span class="pad10" id="ucash"></span></br>
<span class="pad10" id="ucredit"></span>
        </div>
</div>
   </td>
                      </tr>
                      <tr>
                        <th scope="row">现金：</th>
                        <td>
                        	<select name="cash_type" id="cash_type">
                        		<option value="1">添加 </option>
                        		<option value="0">扣除 </option>
                        	</select>
                        	 <input type="text" class="txt" style="width:260px;"
  name="cash" id="cash" 
  limit="type:float;between:0-999999999999"
  title="请填写充值金额..."
  msg="充值金额不得为空或字符,请填写正数"
      msgArea="cash_msg"  class="input_t"/>
 <span id="cash_msg"></span>
</td>
                      </tr>
                        <tr>
                      	<th>充值事由</th>
                      	<td>
                      		<textarea name="charge_reason" rows="8" cols="50"></textarea>
                      	</td>
                      </tr>
                      <tr>
                        <th scope="row">&nbsp;</th>
                        <td>
                            <div class="clearfix padt10">
                            	<input type="hidden" name="is_submit" value="1">
                                <button class="positive primary pill button" type="button" value="提交" onclick="frm_check();"><span class="check icon"></span>提交</button>
                              
                            </div>
                        </td>
                      </tr>
  </tbody>
                    </table>
                </form>
        </div>
        
        
    </div>
 <script type="text/javascript">
 	var credit_is_allow = '2';
 	function validUser(){
var v   = $("#txt_user").val();
if(v<1||$("#txt_user_msg").hasClass('valid_error')){
art.dialog.tips("用户UId或用户名不得为空",1.5);
$("#man_tips").hide('slow');
$("#valid").val(0);
}else{
var url = "index.php?do=user&view=charge";
$.getJSON(url,{check_uid:v},function(json){
if(json.status==1){
$("#ucash").html("可用现金: "+json.data.balance+"元");
$("#ucredit").html("可用元宝："+json.data.credit);
$("#man_tips").show('slow');
$("#maxCash").val(json.data.balance);
$("#maxCredit").val(json.data.credit);
$("#valid").val(1);
}else{
art.dialog.tips(json.msg,1.5);
$("#man_tips").hide('slow');
$("#txt_user").focus();
$("#valid").val(0);
}
});
}
}
 	function frm_check(){
var i =  checkForm(document.getElementById("frm_cash"),false);
if(i){
if($("#valid").val()==1){
var t 			= true;
var cash_type = $("#cash_type").val();
var credit_type = $("#credit_type").val();
var maxCash 	= $("#maxCash").val();
var maxCredit 	= $("#maxCredit").val();
var ca = parseFloat($("#cash").val()).toFixed(2);
isNaN(ca)?ca=0:'';
var cr = parseFloat($("#credit").val()).toFixed(2);
isNaN(cr)?cr=0:'';
if(ca<-maxCash){
art.dialog.alert("警告，此用户最多可扣除 "+maxCash+" 元");
t=false;
}else if(cr<-maxCredit){
art.dialog.alert("警告，此用户最多可扣除 "+maxCredit+" 元宝");
t=false;
}
if(t===true){
var content = '';
if(cash_type == 1){
if(credit_type == 1){
if(credit_is_allow==1){
content+="充值现金"+ca+"元;</br>"+"充值代金券"+cr+"元宝。";
}else{
content+="充值现金"+ca+"元;</br>";
}
}else{
if(credit_is_allow==1){
content+="充值现金"+ca+"元;</br>"+"扣除代金券"+Math.abs(cr)+"元宝。";
}else{
content+="充值现金"+ca+"元;</br>";
}
}
}else{
if(credit_type == 1){
if(credit_is_allow==1){
content+="扣除现金"+Math.abs(ca)+"元;</br>"+"充值代金券"+cr+"元宝。";
}else{
content+="扣除现金"+Math.abs(ca)+"元;</br>"
}
}else{
if(credit_is_allow==1){
content+="扣除现金"+Math.abs(ca)+"元;</br>"+"扣除代金券"+Math.abs(cr)+"元宝。";
}else{
content+="扣除现金"+Math.abs(ca)+"元;</br>"
}
}
}
art.dialog({
title: "",
content: content,
icon: 'succeed',
yesFn: function(){$("#frm_cash").submit();},
noFn :function(){this.close();return false;}
});
}
}else{
art.dialog.tips("请先验证用户信息",1.5);
}
}
}
 </script>
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
