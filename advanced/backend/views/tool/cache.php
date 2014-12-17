<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>keke admin</title>


<link href="/public /tpl/css/admin_management.css" rel="stylesheet" type="text/css" />
<link href="/public /resource/css/buttons.css" rel="stylesheet" type="text/css" />
<link title="style1" href="/public /tpl/skin/default/style.css" rel="stylesheet" type="text/css" />
<!--<link title="style2" href="tpl/skin/light/style.css" rel="stylesheet" type="text/css" />-->
<script type="text/javascript" src="/public /resource/js/jquery.js"></script>
<script type="text/javascript" src="/public /resource/js/system/keke.js"></script>
<script type="text/javascript" src="/public /resource/js/in.js"></script>
</head>
<body class="frame_body">
<div class="frame_content">
<div id="append_parent"></div>
<div class="page_title">
    	<h1>更新缓存</h1>
          <div class="tool">         
            <a href="index.php?r=index/huancun" class="here" > 缓存列表</a> 
    	</div>
</div>
<div class="box post">
<div class="detail">
<form method="post" action="#" id="frm_cat_edit">
    <input type="hidden" name="do" value="tool"><input type="hidden" name="view" value="cache"> 
       <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tbody>
            <tr>

                <td>
                    <label for="ckb_tpl_cache">
                        <input checked="checked" type="checkbox" id="ckb_tpl_cache" name="ckb_tpl_cache" value="1" class="checkbox"><b>更新模板文件缓存</b>
                    </label>
                    <div class="pad10">
                    模板文件缓存   
                当你通过FTP上传或者在线编辑等操作修改了站点模板后，如果显示页面没有及时显示出修改后的效果，你可以通过手工模板缓存操作进行立即更新</div>
                </td>
            </tr>

            <tr>

                <td>
                    <label for="ckb_obj_cache">
                        <input checked="checked" type="checkbox" id="ckb_obj_cache" name="ckb_obj_cache" value="1" class="checkbox"><b>更新对象文件缓存</b>
                    </label>
                    <div class="pad10">
                   对象文件缓存包括系统配置缓存，模块数据缓存等等
                    站点开启模块数据缓存功能后，站点区块显示数据（如最新文章、最新分类等区块数据）都将进行缓存，以大大提高站点访问速度，降低服务器负载
                    对象文件缓存缓存一般情况下都会在后台修改设定后自动更新，一般不需要手工更新。如果站点运行过程中出现错误，你可以尝试更新本缓存   </div>
                </td>
            </tr>
</tbody>
<tfoot>
            <tr>
                <td>
                    <div class="t_c">
                        <button type="submit" name="sbt_edit" class="primary positive pill button" ><span class="check icon"></span>立即更新缓存</button>

                    </div>
                </td>
            </tr>
</tfoot>
        </table>
   
</form>

</div>
</div>
 
</div>
<script type="text/javascript"
src="/public /resource/js/artdialog/artDialog.js"></script>
<script type="text/javascript"
src="/public /resource/js/artdialog/jquery.artDialog.js?skin=default"></script>
<script type="text/javascript"
src="/public /resource/js/artdialog/artDialog.iframeTools.source.js"></script>
<script type="text/javascript" src="/public /lang/cn/script/lang.js"></script>
<script type="text/javascript">
In.add('form_and_validation', {
path : "/public /resource/js/system/form_and_validation.js",
type : 'js'
});
In.add('xheditor', {
path : "/public /resource/js/xheditor/xheditor.js",
type : 'js'
});
In.add('mousewheel', {
path : "/public /tpl/js/jquery.mousewheel.min.js",
type : 'js'
});
//In.add('styleswitch',{path:"tpl/js/styleswitch.js",type:'js'});
In.add('table', {
path : "/public /tpl/js/table.js",
type : 'js'
});
In.add('calendar', {
path : "/public /resource/js/system/script_calendar.js"
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
