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
    	<h1>接口配置管理</h1>
         <div class="tool">         
            <a href="index.php?r=msg/weibo"  class="here" >OAuth登录配置</a>
            <a href="index.php?r=msg/attention" >微博关注</a>
         </div>
</div>

<div class="box post">
   <div class="tabcon">
      <div class="title"><h2>OAuth登录配置</h2></div>
         <div class="detail">
             <form name="frm_config_basic" id="frm_config_basic" action="index.php?do=msg&view=weibo" method="post" accept-charset="utf-8">
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                      <th scope="row" width="130">开启哪些接口：</th>
                      <td>
                        <label for="sina_api_open">
<input type="checkbox" name="api[sina]" rel="sina" value="1" id="sina_api_open" checked="checked">新浪微博    </label>
    <label for="ten_api_open">
<input type="checkbox" name="api[ten]" rel="ten" value="1" id="ten_api_open" checked="checked">腾讯微博    </label>
    <label for="qq_api_open">
<input type="checkbox" name="api[qq]" rel="qq" value="1" id="qq_api_open" checked="checked">QQ账号    </label>
    <label for="taobao_api_open">
<input type="checkbox" name="api[taobao]" rel="taobao" value="1" id="taobao_api_open" checked="checked">淘宝    </label>
    <label for="netease_api_open">
<input type="checkbox" name="api[netease]" rel="netease" value="1" id="netease_api_open" >网易微博    </label>
    <label for="sohu_api_open">
<input type="checkbox" name="api[sohu]" rel="sohu" value="1" id="sohu_api_open" checked="checked">搜狐微博    </label>
    <label for="alipay_api_open">
<input type="checkbox" name="api[alipay]" rel="alipay" value="1" id="alipay_api_open" >支付宝    </label>
                          </td>
                    </tr>
<tbody id="qq" >
<tr>
                 <th scope="row" width="130"> QQappid：</th>
                <td>
                    <input type="text" size="50" name="conf[qq_app_id]" id="qq_appid" class="txt"
 value="100239220"
 limit="type:int" msg="QQappid"
 title="填写正确的QQappid" msgArea="txt_qq_appid_msg"/>
<span id="txt_qq_appid_msg"></span>(QQ开发者平台提供的api编号)
<button id="reg" onclick="window.open('http://connect.qq.com/intro/login/')" type="button" class="pill">
<span class="icon plus">&nbsp;</span>点击申请</button>
                </td>
            </tr>
<tr>
 <th scope="row" width="130"> QQappsecret：</th>
                <td>
                    <input type="text" size="50" name="conf[qq_app_secret]"
 id="qq_appsecret" value="18786af287761847dabd193dda998225"
 limit="type:string" msg="QQappsecret" title="填写正确的QQappsecret"
 msgArea="txt_qqsecret_msg" class="txt"/>
<span id="txt_qqsecret_msg"></span>(QQ开发者平台提供的app_secret编号)
                </td>
            </tr>
</tbody>
<tbody id="alipay" style="display:none">
<tr>
 <th scope="row" width="130"> 支付宝appid：</th>
                <td>
                    <input type="text" size="50" name="conf[alipay_app_id]"
 id="alipay_appid" value="2088301857503158"
 limit="type:int" msg="支付宝appid" title="填写正确的支付宝appid" 
 msgArea="txt_alipay_appid_msg" class="txt"/>
 <span id="txt_alipay_appid_msg"></span>(支付宝开发者平台提供的api编号)
<button id="reg" onclick="window.open('https://b.alipay.com/order/productDetail.htm?productId=2011042200323155')" type="button" class="pill">
<span class="icon plus">&nbsp;</span>点击申请</button>
                </td>
            </tr>

<tr>
   <th scope="row" width="130"> 支付宝appsecret：</th>
                <td>
                    <input type="text" size="50" name="conf[alipay_app_secret]"
 id="alipay_appsecret" value="wzn723ysa5qotelr2jcau4b7edb1livt"
 limit="type:string" msg="支付宝appsecret" title="填写正确的支付宝appsecret"
 msgArea="txt_alipay_secret_msg" class="txt"/>
<span id="txt_alipay_secret_msg"></span>(支付宝开发者平台提供的app_secret编号)
                </td>
            </tr>
</tbody>
<tbody id="taobao" >
<tr>
 <th scope="row" width="130"> 淘宝appid：</th>
                <td>
                    <input type="text" size="50" name="conf[taobao_app_id]"
 id="taobao_appid" value="12299577"
 limit="type:int" msg="淘宝appid" title="填写正确的淘宝appid" 
 msgArea="txt_taobao_appid_msg" class="txt"/>
 <span id="txt_taobao_appid_msg"></span>(淘宝开发者平台提供的api编号)
<button id="reg" onclick="window.open('http://open.taobao.com/app_access.htm')" type="button" class="pill">
<span class="icon plus">&nbsp;</span>点击申请</button>
                </td>
            </tr>

<tr>
   <th scope="row" width="130"> 淘宝appsecret：</th>
                <td>
                    <input type="text" size="50" name="conf[taobao_app_secret]"
 id="taobao_appsecret" value="9dd83e72678e558ee463e07f5769b59f"
 limit="type:string" msg="淘宝appsecret" title="填写正确的淘宝appsecret"
 msgArea="txt_taobao_secret_msg" class="txt"/>
<span id="txt_taobao_secret_msg"></span>(淘宝开发者平台提供的app_secret编号)
                </td>
            </tr>
</tbody>
<tbody id="sina" >
 <tr>
 	 <th scope="row" width="130"> Sina appid：</th>
                <td>
                    <input type="text" size="50" name="conf[sina_app_id]" id="sina_app_id"
 value="992226624" limit="type:string"
 msg="Sina appid" title="填写正确的新浪appsecret" msgArea="txt_sinaappid_msg" class="txt"/>
 <span id="txt_sinaappid_msg"></span>(新浪开发者平台提供的api编号)
<button id="reg" onclick="window.open('http://open.weibo.com/connect')" type="button" class="pill">
<span class="icon plus">&nbsp;</span>点击申请</button>
                </td>
            </tr>
            <tr>
            	<th scope="row" width="130"> Sina appsecret：</th>
                <td>
                    <input type="text" size="50" name="conf[sina_app_secret]"
 id="sina_app_secret" value="811c734f3cc22e9736944d06b7cae6ad"
class="txt" limit="type:string" msg="新浪微博appsecret" title="填写正确的新浪appsecret"
 msgArea="txt_sinasecret_msg"/>
 <span id="txt_sinasecret_msg"></span>(新浪开发者平台提供的app_secret编号)
                </td>
            </tr>
</tbody>
<tbody id="ten" >
            <tr>
              <th scope="row" width="130"> Tencent appid：</th>
                <td>
                    <input type="text" size="50" name="conf[ten_app_id]" id="ten_app_id"
 value="d473b10bd8304bcc976ceba92d4a0c8f" limit="type:string" msg="Tencent appid"
  title="填写正确的腾讯appsecret" msgArea="txt_tenappid_msg" class="txt"/>
 <span id="txt_tenappid_msg"></span>(腾讯开发者平台提供的api编号)
<button id="reg" onclick="window.open('http://open.t.qq.com/develop.php')" type="button" class="pill">
<span class="icon plus">&nbsp;</span>点击申请</button>
                </td>
            </tr>
            <tr>
            	<th scope="row" width="130"> Tencent appsecret：</th>
                <td>
                    <input type="text" size="50" name="conf[ten_app_secret]" id="ten_app_secret"
 value="7e2b26f916164891768af6e2c9184ccb" limit="type:string" msg="Tencent appsecret"
  title="填写正确的腾讯appsecret" msgArea="txt_tensecret_msg" class="txt"/>
 <span id="txt_tensecret_msg"></span>(腾讯开发者平台提供的app_secret编号)
                </td>
            </tr>
</tbody>
<tbody id="netease" style="display:none">
            <tr>
               <th scope="row" width="130"> 网易appid：</th>
                <td>
                    <input type="text" size="50" name="conf[netease_app_id]" id="netease_app_id"
 value="k0DGttnSTjMWT7Re" limit="type:string" msg="网易appid"
 title="填写正确的网易appsecret" msgArea="txt_neteaseappid_msg" class="txt"/>
 <span id="txt_neteaseappid_msg"></span>(网易开发者平台提供的api编号)
<button id="reg" onclick="window.open('http://open.t.163.com/developer/edit')" type="button" class="pill">
<span class="icon plus">&nbsp;</span>点击申请</button>
                </td>
            </tr>
            <tr>
            	<th scope="row" width="130"> 网易appsecret：</th>
                <td>
                    <input type="text" size="50" name="conf[netease_app_secret]" id="netease_app_secret"
 value="5RRemFQFLG3sRS9LGWUaPm36rBAFxrpj" limit="type:string" msg="网易appsecret"
  title="填写正确的网易appsecret" msgArea="txt_neteasesecret_msg" class="txt"/>
  <span id="txt_neteasesecret_msg"></span>(网易开发者平台提供的app_secret编号)
                </td>
            </tr>
</tbody>
<tbody id="sohu" >
       		 <tr>
       		    <th scope="row" width="130"> 搜狐appid：</th>
            <td>
                <input type="text" size="50" name="conf[sohu_app_id]" id="sohu_app_id" 
value="fJi7LSzT6H9XR498TYhU" class="txt" limit="type:string" 
msg="sohu appid" title="填写正确的搜狐appsecret" msgArea="txt_souhuappid_msg"/>
<span id="txt_souhuappid_msg"></span>(搜狐开发者平台提供的api编号)
<button id="reg" onclick="window.open('http://open.t.sohu.com/apps/myapps')" type="button" class="pill">
<span class="icon plus">&nbsp;</span>点击申请</button>
            </td>
       	 </tr>
       	 <tr>
       	 	<th scope="row" width="130"> 搜狐appsecret：</th>
            <td>
                <input type="text" size="50" name="conf[sohu_app_secret]" id="sohu_app_secret"
 value="VSZE=F4kE0UEY9M8gd#MgSf0M)eXUmk##5J3I)Cu" class="txt" limit="type:string"
  msg="sohu appsecret" title="填写正确的搜狐appsecret" msgArea="txt_souhusecret_msg"/>
  <span id="txt_souhusecret_msg"></span>(搜狐开发者平台提供的app_secret编号)
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
    	$(":checkbox[id*='_api_open']").click(function(){
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
