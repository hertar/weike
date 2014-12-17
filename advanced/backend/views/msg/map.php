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
    	<h1>地图接口</h1>
</div>

<div class="box post">
   <div class="tabcon">
      <div class="title"><h2>地图接口</h2></div>
         <div class="detail">
         	<form name="frm_map" id="frm_map" action="index.php?do=msg&view=map" method="post">
           	  <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
              	 <th scope="row" width="130">接口选择：</th>
                  <td>
                   	    <label for="baidu_api">
<input type="checkbox" name="open" id="baidu_api" value="baidu_api" checked="checked">百度地图</label>
  </td>
</tr>
             <!-- <tr>
              	 <th scope="row" width="130">谷歌地图：</th>
<td>
                   <tr>
                        <th scope="row" width="140">Google Maps API：</th>
                        <td>
                        	<input type="text" name="conf[google_api]" id="google_api" value="http://maps.google.com/maps/api/js?sensor=true" class="txt" style="width:260px;" msgArea="span_google"
limit="required:true;len:2-200" title="&nbsp;&nbsp;&nbsp;&nbsp;输入谷歌地图API密钥" msg="&nbsp;&nbsp;&nbsp;&nbsp;输入谷歌地图API密钥"/> 
<button id="reg" onclick="window.open('http://code.google.com/intl/zh-CN/apis/maps/signup.html')" type="button" class="pill">
<span class="icon plus">&nbsp;</span>点击申请</button>
<span id="span_google"></span>
</td>
                    </tr>
</td>
</tr>-->
              
                   <tr>
                        <th scope="row" width="140">Baidu Maps API：</th>
                        <td>
                        	<input type="text" name="conf[baidu_api]" id="baidu_api" value="http://api.map.baidu.com/api?v=1.3" class="txt" style="width:300px;" msgArea="span_baidu"
limit="required:true;len:2-200" title="&nbsp;&nbsp;&nbsp;&nbsp;输入百度地图API密钥" msg="&nbsp;&nbsp;&nbsp;&nbsp;输入百度地图API密钥"/> 
<span id="span_baidu"></span>&nbsp;&nbsp;百度地图v1.3API地址,此地址无须修改,http://api.map.baidu.com/api?v=1.3</td>
                    </tr>
 
    <tr>
<th scope="row">&nbsp;</th>
<td>
<div class="clearfix padt10">
                        		 <button class="positive primary pill button" type="submit" id="sbt_edit" name='sbt_edit' value="提交" onclick="return checkForm(document.getElementById('frm_map'))"><span class="check icon"></span>提交</button>
                        		 
                			</div>
</td>
</tr>

           		 </form>
</table>
</div>
</div>
</div>
<script type="text/javascript">

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