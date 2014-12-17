
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
    	<h1>短信账号管理</h1>
         <div class="tool">       
   <a href="index.php?r=msg/config" >账号管理</a>
   <a href="index.php?r=msg/send" class="here">短信发送</a>
         </div>
</div>

<div class="box post">
   <div class="tabcon">
      <div class="title"><h2>短信发送</h2></div>
         <div class="detail">
         	<form name="frm" id="frm" action="index.php?do=msg&view=send&ac=send" method="post">
           	  <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
              	 <th scope="row" width="130">选择用户组别：</th>
<td>
<select name="slt_type" id="slt_type" onchange="search(this.value)">
<option value="normal">普通用户</option> 
<option value="specify">指定用户</option>
</select>
</td>
</tr>
<tbody id="specify" style="display:none">
 <tr>
 	<th scope="row" width="130">查找用户：</th>
<td>
<input type="text" name="txt_u" id="txt_u" class="txt">
<select name="u_type" id="u_type">
<option value="uid">用户ID</option>
<option value="username">用户名*</option>
</select>
<button class="positive primary  button" type="button" id='ser_user_phone' value="点击查询"><span class="magnifier icon"></span>点击查询</button>
                        </td>
</tr>
<tr>
<th scope="row" width="130">手机号码：</th>
                        <td>
                        	 <input type="txt" name="txt_tel" id="txt_tel" size="100" class="txt">
 <div class="padt10 direct">
                            <p>如需添加号码，请用逗号分隔。如：133123456,144123456</p>
                        </div>
                       </td>
                    </tr>
</tbody>
<tr>
<th scope="row" width="130">短信内容：</th>
              <td>
                  <textarea cols=80 rows=3 name="tar_content" id="tar_content"></textarea>
 	<br><span>非指定用户发送短消息时,将给该类下所有满足条件用户发送短信</span>
  </td>
           </tr>
    <tr>
<th scope="row">&nbsp;</th>
<td>
<div class="clearfix padt10">
                        		 <button class="positive primary pill button" type="submit" id="sbt_edit" name='sbt_edit' value="短信发送"><span class="check icon"></span>短信发送</button>
                        	
                			</div>
</td>
</tr>

           		 </form>
</table>
</div>
</div>
</div>
<script type="text/javascript">
function search(type){
if(type=='specify'){
$("#specify").show();
$("#ser_user_phone").click(function(){
var txt_u=$("#txt_u").val();
  var u_type=$("#u_type").val();
 if(!txt_u){
art.dialog.alert("请先填写待查询用户名或ID！");return false;
}else{
$.post("index.php?do=msg&view=send&ac=ser",
{u:txt_u,type:u_type},function(json){
if(json.status==1){
$("#txt_tel").val(json.msg);
}else if(json.status==2){
art.dialog.alert(json.msg);return false;
}else if(json.status==3){
art.dialog.alert(json.msg);return false;
}
},'json')
 	 }
})
}else{
$("#specify").hide();
}
}
$(function(){
$("#sbt_edit").click(function(){
var shtml=$("#tar_content").val();
if(shtml.length<2){
art.dialog.alert("短信信息不得少于2个字");return false;
}else{
$("#frm").submit();
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