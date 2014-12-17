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
    <h1>推广配置管理</h1>
    <div class="tool">
        <a class="here" href="index.php?r=prom/config">邀请注册</a>
        <a  href="index.php?r=prom/pub_task">发布推广</a>
        <a  href="index.php?r=prom/bid_task">任务承接</a>
        <a  href="index.php?r=prom/service">商品宣传</a>
    </div>
</div> 
<div>
    <div class="box tip clearfix p_relative">
        <div class="control">
            <a href="javascript:void(0);" title="关闭"><b>&times;</b></a>
        </div>
        <div class="title">
            <h2>小提示</h2>
        </div>
        <div class="detail pad10">
            <ul>
            	<li>注册推广的推手和会员之间建立长期的抽成返利关系，推手的返利由会员的贡献值决定，效果好，风险低，推荐您开启。</li>
<li>注册推广必须配合一项认证才能生效。</li>
</ul>
        </div>
    </div>
    <div class="box post">
        <div class="tabcon">
            <div class="title">
                <h2>邀请注册</h2>
            </div>
            <div class="detail">
                <form name="frm_config_basic" id="frm_config_basic" action="index.php?do=prom&view=config&op=config" method="post">
                    <input type="hidden" name="op" value="config">
                    <input type="hidden" name="prom_id" value="5">
<input type="hidden" name="open_status" value="1"><!-- 开启状态 -->
<div class="gut">
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr><th scope="row">
                                    是否开启全局推广：                                </th><td>
                                 
                        	       <label for="prom_open"><input type="radio" id="prom_open"  name="prom_reg_is_open" value='1' checked="checked">开启推广</label>
                                   <label for="prom_close"><input type="radio" id="prom_close" name="prom_reg_is_open" value='0' >关闭推广</label>
                                   (此项设置全局有效，并不是只针对"注册推广")
                                </td></tr>
                            <tr>
                            	<th scope="row">推广有效期：</th>
                            		<td><input type="text" name="prom_period" class="txt" size="5" value="30" />天  (推广有效期内，上线都可以获取收益，0表示永久有效)</td>
                            </tr>
                            <tr>
                                <th scope="row">
                                  推广奖励：                                </th>
                                <td>
                                	<p id="effect_mode"><!-- 生效模式 -->
                                    	注册并通过<select name="allow_prom_reg" id="allow_prom_reg">
<option value='realname_auth'  cash="20.00" credit="1.00">实名认证</option>
<option value='mobile_auth'  cash="50.00" credit="50.00">手机认证</option>
<option value='enterprise_auth' selected cash="3.00" credit="3.00">企业认证</option>
<option value='bank_auth'  cash="2.00" credit="5.00">银行认证</option>
<option value='email_auth'  cash="50.00" credit="2.00">邮箱认证</option>
</select>
认证后才生效 , 推广者将获得                                    	<input type="text" size=5 name="prom_cash" class="txt" id="prom_cash">元现金，
<input type="text" size=5 name="prom_credit" class="txt" id="prom_credit">元代金券。</p>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    &nbsp;
                                </th>
                                <td>
                                    <button type="submit" name="sbt_edit" class="positive pill primary  button" value="提交"><span class="icon check"></span>
                                        提交                                    </button>
                                  
                                </td>
                            </tr>
                        </table>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
	 
 <script type="text/javascript">
<!--
$(function(){
$(".control").add(".title").click(function(){
$(".tip").children().not($(".control,.title")).slideToggle('200');
});
 	var optif = $("#allow_prom_reg option:selected");
$("#prom_cash").val(optif.attr("cash"));
$("#prom_credit").val(optif.attr("credit"));
})
 $("#allow_prom_reg").change(function(){
 	var opti = $("#allow_prom_reg option:selected");
$("#prom_cash").val(opti.attr("cash"));
$("#prom_credit").val(opti.attr("credit"));
 })
//-->
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
