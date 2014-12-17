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
    <h1>订金招标任务配置</h1>
    <div class="tool">
       <a href="index.php?r=model/deposit_task_config" >基本配置</a>
      <a href="index.php?r=model/deposit_task_control" class="here">流程配置</a>
      <a href="index.php?r=model/deposit_task_priv"  class="here">权限配置</a>
    </div>
</div>
<div class="box post">
 <div class="title"><h2>权限配置</h2></div>
  <div class="detail">
  <form name="frm_config_reward" action="index.php?do=model&model_id=5&view=config&op=priv" method="post" id="frm_config_reward">
  	<input type="hidden" name="pk[model_id]" value="5">           
<table cellpadding="0" cellspacing="0">
      <tbody>
       <tr class="item">
<th>项目名称</th>
<th>用户身份</th>
<th>次数限制</th>
<th>编辑</th>
    </tr>
  <tr class="item">
  <td>交稿</td>
  <td>卖家(威客)</td>
  <td>
  	<label for="open_0"><input type=radio id="open_0" name="fds[allow_times][58]" value="1">开启</label>
<label for="close_0"><input type=radio id="close_0" name="fds[allow_times][58]" value="0" checked="checked">关闭</label>
  </td>
  <td>
<a href="index.php?do=permission&model_id=5&op_code=work_hand" class="button"><span class="cog icon"></span>权限配置</a>
  </td>
</tr>
  <tr class="item">
  <td>发布任务</td>
  <td>买家(雇主)</td>
  <td>
  	<label for="open_1"><input type=radio id="open_1" name="fds[allow_times][59]" value="1">开启</label>
<label for="close_1"><input type=radio id="close_1" name="fds[allow_times][59]" value="0" checked="checked">关闭</label>
  </td>
  <td>
<a href="index.php?do=permission&model_id=5&op_code=pub" class="button"><span class="cog icon"></span>权限配置</a>
  </td>
</tr>
  <tr>
         <th scope="row">&nbsp;</th>
         <td colspan="3">
            <div class="clearfix padt10">
              <button class="positive primary pill button" type="submit" name="sbt_edit" value="1"><span class="check icon"></span>提交</button>
            </div>
         </td>
        </tr>
       </tbody>
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