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
<h1>系统组管理</h1>
   
     <div class="tool"> 
        <a href="index.php?r=user/group_list"      class="here">用户组管理</a>
        <a href="index.php?r=user/group_add" >添加用户组</a>
</div>
</div>
<!--页头结束-->


<div class="box list">
    	<div class="title"><h2>用户组管理</h2></div>
        <div class="detail">
<form method="post" action="#" id="frm_user_search">
  		<table cellpadding="0" cellspacing="0">
  		  <tbody>
          <tr>
<th>编号</th>
<th>组名</th>
<th>更新时间</th>
<th>操作</th>
          </tr>
  
        <tr class="item">
            <td>3</td>
            <td class="motif">财务人员</td>
            <td>2012-10-12 10:29:20</td>
<td>
 
<a href="index.php?do=user&view=group_add&op=add&editgid=3&page=" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=user&view=group_list&op=del&editgid=3&page=" onclick="return cdel(this);"class="button"><span class="trash icon"></span>删除</a>
 
</td>
          </tr>
         <tr class="item">
            <td>7</td>
            <td class="motif">客服</td>
            <td>2012-10-15 09:48:01</td>
<td>
 
<a href="index.php?do=user&view=group_add&op=add&editgid=7&page=" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=user&view=group_list&op=del&editgid=7&page=" onclick="return cdel(this);"class="button"><span class="trash icon"></span>删除</a>
 
</td>
          </tr>
         <tr class="item">
            <td>2</td>
            <td class="motif">外围客服</td>
            <td>2012-11-16 11:36:16</td>
<td>
 
<a href="index.php?do=user&view=group_add&op=add&editgid=2&page=" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=user&view=group_list&op=del&editgid=2&page=" onclick="return cdel(this);"class="button"><span class="trash icon"></span>删除</a>
 
</td>
          </tr>
         <tr class="item">
            <td>1</td>
            <td class="motif">管理员</td>
            <td>2012-10-11 17:21:44</td>
<td>
 
<a href="index.php?do=user&view=group_add&op=add&editgid=1&page=" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=user&view=group_list&op=del&editgid=1&page=" onclick="return cdel(this);"class="button"><span class="trash icon"></span>删除</a>
 
</td>
          </tr>
         <tr class="item">
            <td>8</td>
            <td class="motif">编辑</td>
            <td>2013-03-23 09:57:58</td>
<td>
 
<a href="index.php?do=user&view=group_add&op=add&editgid=8&page=" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=user&view=group_list&op=del&editgid=8&page=" onclick="return cdel(this);"class="button"><span class="trash icon"></span>删除</a>
 
</td>
          </tr>
  
          <tr>
          	<td colspan="4">
          	
            <div class="clearfix">
 
            	<button type="button" name="sbt_add" value="添加用户组" class="positive pill button" onclick="document.location.href='index.php?do=user&view=group_add&op=add'"/><span class="check icon"></span>添加用户组</button>
 
</div>
</td>
          </tr>
  
  </tbody>
        </table>
<div class="page"></div>
</form>
        </div>
</div>
<!--主体结束-->


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


