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
    	<h1>微博关注</h1>
         <div class="tool">         
            <a href="index.php?r=msg/weibo" >OAuth登录配置</a>
            <a href="index.php?r=msg/attention"  class="here" >微博关注</a>
         </div>
</div>

<div class="box post">
   <div class="tabcon">
      <div class="title"><h2>微博关注</h2></div>
         <div class="detail">
             <form name="frm_config_basic" id="frm_config_basic" action="index.php?do=msg&view=attention" method="post" accept-charset="utf-8">
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                      <th scope="row" width="130">微博关注列表：</th>
                      <td>
                        <label for="api_sina_attent"><input type="checkbox" id="api_sina_attent" name="api[sina_attent]" rel="sina_attent" value="1" class="attent_api" checked="checked">新浪微博</label>
<label for="api_ten_attent"><input type="checkbox" id="api_ten_attent" name="api[ten_attent]" rel="ten_attent" value="1" class="attent_api" checked="checked">腾讯微博</label>
<label for="api_netease_attent"><input type="checkbox" id="api_netease_attent" name="api[netease_attent]" rel="netease_attent" value="1" class="attent_api" checked="checked">网易微博</label>
<label for="api_sohu_attent"><input type="checkbox" id="api_sohu_attent" name="api[sohu_attent]" rel="sohu_attent" value="1" class="attent_api" checked="checked">搜狐微博</label>
                      </td>
                  </tr>
<tbody id="sina_attent" style="">
 <tr>
 	 <th scope="row" width="130">新浪：</th>
                <td>
                	<input name="conf[sina_attent]" value="1881490142" class="txt">
          			 <span>要关注的用户微博名称 如(http://weibo.com/u/<font color="red">2128335227</font>)为数部分</span>
                </td>
            </tr>
</tbody>
<tbody id="ten_attent" style="">
 <tr>
 	 <th scope="row" width="130">腾讯：</th>
                <td>
                	<input name="conf[ten_attent]" value="shangjinglong" class="txt">
     		 <span>要关注的用户微博名称 如(http://t.qq.com/<font color="red">shangjinglong</font>)红色部分</span>
                </td>
            </tr>
</tbody>
<tbody id="netease_attent" style="">
 <tr>
 	 <th scope="row" width="130">网易：</th>
                <td>
                	<input name="conf[netease_attent]" value="2746053225" class="txt">
                 	 
 <span>要关注的用户微博名称 如(http://t.163.com/<font color="red">2746053225</font>)红色部分</span>
                </td>
            </tr>
</tbody>
<tbody id="sohu_attent" style="">
 <tr>
 	 <th scope="row" width="130">搜狐：</th>
                <td>
                	<input name="conf[sohu_attent]" value="naniso" class="txt">
 <span>要关注的用户微博名称 如(http://<font color="red">nanison</font>.blog.sohu.com)红色部分</span>
                </td>
            </tr>
</tbody>

<th scope="row">&nbsp;</th>
<td>
<div class="clearfix padt10">
                    <button class="positive primary pill button" type="submit" name='submit' value="提交"><span class="check icon"></span>提交</button>
                  
                </div>
</td>
                    
       </table>
        </form>
            </div>
        </div>
        
        
    </div>
<script type="text/javascript">
    $(function(){
    	$(":checkbox.attent_api").click(function(){
var api_name=$(this).attr("rel");
$("#"+api_name).toggle();
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
