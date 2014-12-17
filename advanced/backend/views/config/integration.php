<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>keke admin</title>


<link href=" /public/tpl/css/admin_management.css" rel="stylesheet" type="text/css" />
<link href=" /public/resource/css/buttons.css" rel="stylesheet" type="text/css" />
<link title="style1" href=" /public/tpl/skin/default/style.css" rel="stylesheet" type="text/css" />
<!--<link title="style2" href="tpl/skin/light/style.css" rel="stylesheet" type="text/css" />-->
<script type="text/javascript" src=" /public/resource/js/jquery.js"></script>
<script type="text/javascript" src=" /public/resource/js/system/keke.js"></script>
<script type="text/javascript" src=" /public/resource/js/in.js"></script>
</head>
<body class="frame_body">
<div class="frame_content">
<div id="append_parent"></div> 

<div class="box tip clearfix p_relative" id="msg_box">
<div class="control"><a href="javascript:void(0);" title="关闭" id="toggle"><b>△</b></a></div>
    <div class="title"><h2>使用方法：</h2></div>
    <div class="detail pad10">
        <ul>
            <li>如果需要整合其他的用户系统，可以安装适当的版本号插件进行整合。</li>
            <li>如果需要更换整合的用户系统，直接安装目标插件即可完成整合，同时自动卸载上一次整合插件。</li>
<li>如果不需要整合任何用户系统，可直接卸载。</li>
        </ul>
    </div>
</div>


<div class="box list">
<div class="title"><h2>Ucenter用户整合</h2></div>
    <div class="detail">
    	 <table cellspacing="0" cellpadding="0">
    	 <tbody>
    	 	
          <tr>
            <th width="30%">名称</th>
            <th width="20%">版本</th>
            <th width="30%">作者</th>
            <th>操作</th>
          </tr>
  
          <tr>
            <td>Ucenter            </td>
            <td>1.5/1.6</td>
            <td><a href="javascript:;">kekezu官方网站</a></td>
            	<td>
            	
            	 <a href="index.php?do=config&view=integration&type=uc" class="button">
            	<span class="cog icon"></span>开启</a> 
            	            	</td>
          </tr>
  
          <tr>
            <td>phpWind</td>
            <td>8.0以上</td>
            <td><a href="javascript:;">kekezu官方网站</a></td>
            <td> 
            <a href="index.php?do=config&view=integration&type=pw" class="button">
<span class="cog icon"></span>开启</a>	
                        </td>
          </tr>
  
  </tbody>
        </table>
    </div>
</div>

<script src="/public/js/css.js" type="text/javascript"></script>
<script type="text/javascript">
$(function(){
$("#toggle").add(".title").click(function(){
$("#msg_box").children().not($(".control,.title")).slideToggle('800');
var v=$(this).text();
if(v=="▽") $(this).html("<b>△</b>").andSelf().attr("title","关闭");
if(v=="△") $(this).html("<b>▽</b>").andSelf().attr("title","开启");
});
})
</script>
</div>
<script type="text/javascript"
src=" /public/resource/js/artdialog/artDialog.js"></script>
<script type="text/javascript"
src=" /public/resource/js/artdialog/jquery.artDialog.js?skin=default"></script>
<script type="text/javascript"
src=" /public/resource/js/artdialog/artDialog.iframeTools.source.js"></script>
<script type="text/javascript" src=" /public/lang/cn/script/lang.js"></script>
<script type="text/javascript">
In.add('form_and_validation', {
path : " /public/resource/js/system/form_and_validation.js",
type : 'js'
});
In.add('xheditor', {
path : " /public/resource/js/xheditor/xheditor.js",
type : 'js'
});
In.add('mousewheel', {
path : " /public/tpl/js/jquery.mousewheel.min.js",
type : 'js'
});
//In.add('styleswitch',{path:"tpl/js/styleswitch.js",type:'js'});
In.add('table', {
path : " /public/tpl/js/table.js",
type : 'js'
});
In.add('calendar', {
path : " /public/resource/js/system/script_calendar.js"
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