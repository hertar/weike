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
    	<h1>短信账号管理</h1>
         <div class="tool">       
            <a href="index.php?r=msg/config" class="here">账号管理</a>
           <a href="index.php?r=msg/send">短信发送</a>
         </div>

</div>

<div class="box post">
   <div class="tabcon">
      <div class="title"><h2>账号信息</h2></div>
         <div class="detail">
         	            <table width="96%" height="200" border="0" cellspacing="0" cellpadding="0" class="tab_m t_l">
               	<tr>
               		 <th scope="row">账号信息：</th>
                        <td>
                        	<input type="txt" readonly="readonly" value="" class="txt">
<a href="index.php?do=msg&view=config&op=config&ac=change">账号变更</a>
                       </td>
                    </tr>
<tr>
<th scope="row">余额查询：</th>
                        <td>
                        	<div id="remainfee"></div>
                        	 
                      		 <a class="button" href="http://www.kekezu.com/index.php?do=increase_3" target="_blank"><span class="icon book">&nbsp;</span>&nbsp;</span>用户充值</a>（点击用户充值）
                       </td>
                    </tr>
 
</table>
 	
</div>
</div>
</div>
<script type="text/javascript">
var ac = "";
if(ac=='change'){
$(".apply_bind").hide();
$("#account").show();
}
 $(function(){
 	$("#bind").click(function(){
$("#account").show();
})
$("#sbt_edit").click(function(){
if(checkForm(document.getElementById("frm_bind"))){
$("#frm_bind").submit();
}
})
 
  
  $("#remainfee").ready(function(){
$.post("index.php?do=msg&view=config&op=manage&remain_fee=1",function(json){
if(json.status==1){
var num = json.msg.balance;
var str="余额:<span>"+num+"</span>元<br>";
$("#remainfee").html(str);
}else{
alert(json.msg);
showDialog(json.msg,'alert',"错误提示！");return false;
}
},'json')
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