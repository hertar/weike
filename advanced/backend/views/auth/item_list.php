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

<div class="page_title"><h1>认证项目</h1></div>
<!--页头结束-->

<div class="box list">
    <div class="detail">
    	<form method="post" action="index.php?do=auth&view=item_list" name="frm_art_search" id="frm_art_search">
    	<div id="ajax_dom">
    	<input type="hidden" name="page" value="1" />
    	<table cellspacing="0" cellpadding="0">
    	  <tbody>
          <tr>
            <th>认证标识</th>
<th>认证名称</th>
<th>认证工作日</th>
<th>认证费用</th>
<th>有效期</th>
<th>是否开启</th>
<th>更新时间</th>
<th>操作</th>
          </tr>
   <tr class="item">
<td>email</td>
<td>邮箱认证</td>
<td>1-2个工作日</td>
<td><font color="#ff7700">￥0.00元</font></td>
<td>无期限</td>
<td><font color="green">开启</font></td>
<td>2012-12-25 13:23:58</td>
<td>
<a class="button" href="index.php?do=auth&view=item_edit&sbt_edit=1&auth_code=email&pk[auth_code]=email&fds[auth_open]=0"><span class="cross icon"></span>禁用</a>
<a class="button dbl_target" href="index.php?do=auth&view=item_edit&auth_code=email"><span class="pen icon"></span>编辑</a>
<a class="button" href="index.php?do=auth&view=item_list&ac=del&auth_code=email" onclick="return cdel(this);"><span class="trash icon"></span>删除</a>
</td>
</tr>
 <tr class="item">
<td>enterprise</td>
<td>企业认证</td>
<td>1-3个工作日</td>
<td><font color="#ff7700">免费认证</font></td>
<td>无期限</td>
<td><font color="green">开启</font></td>
<td>2012-11-06 16:14:06</td>
<td>
<a class="button" href="index.php?do=auth&view=item_edit&sbt_edit=1&auth_code=enterprise&pk[auth_code]=enterprise&fds[auth_open]=0"><span class="cross icon"></span>禁用</a>
<a class="button dbl_target" href="index.php?do=auth&view=item_edit&auth_code=enterprise"><span class="pen icon"></span>编辑</a>
<a class="button" href="index.php?do=auth&view=item_list&ac=del&auth_code=enterprise" onclick="return cdel(this);"><span class="trash icon"></span>删除</a>
</td>
</tr>
 <tr class="item">
<td>realname</td>
<td>实名认证</td>
<td>1-3个工作日</td>
<td><font color="#ff7700">免费认证</font></td>
<td>无期限</td>
<td><font color="green">开启</font></td>
<td>2012-11-06 16:14:38</td>
<td>
<a class="button" href="index.php?do=auth&view=item_edit&sbt_edit=1&auth_code=realname&pk[auth_code]=realname&fds[auth_open]=0"><span class="cross icon"></span>禁用</a>
<a class="button dbl_target" href="index.php?do=auth&view=item_edit&auth_code=realname"><span class="pen icon"></span>编辑</a>
<a class="button" href="index.php?do=auth&view=item_list&ac=del&auth_code=realname" onclick="return cdel(this);"><span class="trash icon"></span>删除</a>
</td>
</tr>
 <tr class="item">
<td>mobile</td>
<td>手机认证</td>
<td>1-3个工作日</td>
<td><font color="#ff7700">￥2.00元</font></td>
<td>无期限</td>
<td><font color="green">开启</font></td>
<td>2012-11-05 16:14:32</td>
<td>
<a class="button" href="index.php?do=auth&view=item_edit&sbt_edit=1&auth_code=mobile&pk[auth_code]=mobile&fds[auth_open]=0"><span class="cross icon"></span>禁用</a>
<a class="button dbl_target" href="index.php?do=auth&view=item_edit&auth_code=mobile"><span class="pen icon"></span>编辑</a>
<a class="button" href="index.php?do=auth&view=item_list&ac=del&auth_code=mobile" onclick="return cdel(this);"><span class="trash icon"></span>删除</a>
</td>
</tr>
 <tr class="item">
<td>bank</td>
<td>银行认证</td>
<td>1-3个工作日</td>
<td><font color="#ff7700">￥1.00元</font></td>
<td>无期限</td>
<td><font color="green">开启</font></td>
<td>2012-11-05 16:14:20</td>
<td>
<a class="button" href="index.php?do=auth&view=item_edit&sbt_edit=1&auth_code=bank&pk[auth_code]=bank&fds[auth_open]=0"><span class="cross icon"></span>禁用</a>
<a class="button dbl_target" href="index.php?do=auth&view=item_edit&auth_code=bank"><span class="pen icon"></span>编辑</a>
<a class="button" href="index.php?do=auth&view=item_list&ac=del&auth_code=bank" onclick="return cdel(this);"><span class="trash icon"></span>删除</a>
</td>
</tr>

          <tr>
          	<td colspan='11'>
          		
<div class="clearfix">

<span>输入目录名:</span>
<input  type="text"   name="auth_dir"   id="auth_dir"    class="txt"/>&nbsp;
<button type="submit" name="sbt_add"    value="安装模块" class="pill positive"><span class="check icon">&nbsp;</span>安装模块</button>
</div>
          	</td>
         </tr>
 
 </tbody>
        </table>
<div class="page"></div>
</div>
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