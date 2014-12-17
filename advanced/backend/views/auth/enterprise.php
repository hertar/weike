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

<div class="page_title"><h1>企业认证列表</h1></div>
<!--页头结束-->


<div class="box search p_relative">
<div class="control">
   <a href="javascript:d();"><b>&times;</b></a>
</div>
<div class="title"><h2>搜索</h2></div>
<div class="detail" id="detail">
 <form method="post" action="index.php?do=auth&view=list&auth_code=enterprise&w[page_size]=&w[enterprise_auth_id]=&w[username]=&w[auth_status]=" id="frm_art_search">
<table cellspacing="0" cellpadding="0">
<tbody>
<tr>
<th>认证编号</th>
<td><input type="text" class="txt" name="w[enterprise_auth_id]" 	value="" onkeyup="clearstr(this);"></td>
<th>认证用户</th>
<td><input type="text" class="txt" name='w[username]' value=""></td>
</tr>
<tr>
<th>认证状态</th>
<td>
<select name="w[auth_status]">
 <option value="">全选</option>
 <option value="1" >已通过</option>
 <option value="2" >未通过</option>
 <option value="0" >待审核</option>
</select>
</td>
<th>显示结果</th>
<td>
<select name="w[page_size]">
<option value="10" >每页显示10</option>
<option value="20" >每页显示20</option>
<option value="30" >每页显示30</option>
</select>
<button class="pill" type="submit" value="搜索" name="sbt_search"><span class="icon magnifier">&nbsp;</span>搜索</button>
   </td>
</tr>
</tbody>
</table>
</form>	
</div>	
</div>	
<!--搜索结束-->


<div class="box list">
    	<div class="title"><h2>企业认证列表</h2></div>
        <div class="detail">
        <form action="index.php?do=auth&view=list&auth_code=enterprise&w[page_size]=&w[enterprise_auth_id]=&w[username]=&w[auth_status]=" id='frm_list' method="post">
        	<div id="ajax_dom">
<input type="hidden" value="1" name="page" />
        <table cellspacing="0" cellpadding="0">
         <tbody>
          <tr>
          	<th ><input type="checkbox" id="checkbox" onclick="checkall();">编号</th>
            
            <th>用户名</th>
<th>注册号码</th>
<th>执照图片</th>
<th>费用</th>
<th>有效时间</th>
<th>认证状态</th>
<!--<th>操作</th>-->
          </tr>
            <tr>
            <td colspan="7">

<label for="checkbox">全选</label>
<input type="hidden" name="sbt_action" class="sbt_action" />
<button type="submit" name="sbt_action" value="批量审核"   class="pill positive button" onclick="return batch_act(this,'frm_list');"><span class="icon check"> </span>批量审核</button>
<button type="submit" name="sbt_action" value="批量审核不通过" class="pill button" onclick="return batch_act(this,'frm_list');"><span class="cross icon"></span>批量审核不通过</button>
<button type="submit" name="sbt_action" value="批量删除"   class="pill negative" onclick="return batch_act(this,'frm_list');"><span class="icon trash"></span>批量删除</button>
 
</td>
          </tr>
  </tbody>
        </table>
<div class="page"></div>
</div>
</form>
        </div>
</div>
<!--书体结束-->
<script language="javascript">
function d()
{
$("#frm_art_search").slideToggle('800');	  
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