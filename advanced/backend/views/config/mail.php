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
    	<h1>全局配置</h1>
        <div class="tool">         
<a href="index.php?r=config/quanju"  > 站点配置</a>
<a href="index.php?r=config/conf"  >基本配置</a>
<a href="index.php?r=config/seo"  >SEO配置</a>
<a href="index.php?r=config/mail" class="here" >邮箱配置</a>
    	</div>
</div>
<div class="box post">
        <div class="tabcon">
        	<div class="title"><h2>邮箱配置</h2></div>
            <div class="detail">
<form name="frm_config_pay" action="index.php?r=config/edit" method="post">
<table width="100%"  border="0" cellspacing="0" cellpadding="0" class="tab_m t_l">
	<tr>
		<th scope="row" width="160">邮箱服务：</th>
		<td>
		<label for="rdo_mail_server_cat_mail">
		<input id="rdo_mail_server_cat_mail" type="radio" name="mail_server_cat" value="mail"  <?php if($mail_server_cat=='mail'){echo 'checked';}?>/>
		采用服务器内置mail服务</label>
		<label for="rdo_mail_server_cat_smtp">
		<input id="rdo_mail_server_cat_smtp" type="radio" name="mail_server_cat" value="smtp" <?php if($mail_server_cat=='smtp'){echo 'checked';}?>/>
		采用其它的smtp服务</label>
		</td>
	</tr>

	<tr>
		<th scope="row">启用加密连接(SSL)：</th>
		<td>
		<label for="rdo_mail_ssl_yes">
		<input id="rdo_mail_ssl_yes" type="radio" name="mail_ssl"value="1"  id="rdo_mail_ssl_yes"<?php if($mail_ssl==1){echo 'checked';}?>>是</label>
		<label for="rdo_mail_ssl_no">
		<input id="rdo_mail_ssl_no" type="radio" name="mail_ssl" value="2" id="rdo_mail_ssl_no" <?php if($mail_ssl==2){echo 'checked';}?>>否</label>
		</td>
	</tr>

	<tr>
		<th scope="row">发送邮件服务器：</th>
		<td>
		<input type="text" size="50" name="smtp_url" value="<?php echo $smtp_url?>" limit="len:3-100" msg="3-100" msgArea="txt_reg_limit_msg" class="txt"/>
		<span id="txt_reg_limit_msg"></span>
		(邮件服务器主机地址,如果本机发送则为localhost)
		</td>
	</tr>

	<tr>
		<th scope="row">服务器端口：</th>
		<td>
		<input type="text" size="50" name="mail_server_port" value="<?php echo $mail_server_port?>" limit="type:int" msg="端口数为整数" msgArea="txt_mail_server_port_msg" class="txt"/>
		<span id="txt_mail_server_port_msg"></span>
		(默认端口为：25)
		</td>
	</tr>

	<tr>
		<th scope="row">邮件发送账号：</th>
		<td>
		<input type="text" size="50" name="post_account" value="<?php echo $post_account?>" limit="type:email" msg="回复地址格式不正确" msgArea="txt_post_account_msg" class="txt"/>
		<span id="txt_post_account_msg"></span>
		(发送邮件所需账号，可以为空)
		</td>
	</tr>

	<tr>
		<th scope="row">账号密码：</th>
		<td>
		<input type="password" size="50" name="account_pwd" value="<?php echo $account_pwd?>" limit="len:0-20" msg="" msgArea="txt_account_pwd_msg" class="txt"/>
		<span id="txt_account_pwd_msg"></span>
		</td>
	</tr>

	<tr>
		<th scope="row">邮件回复地址：</th>
		<td>
		<input type="text" size="50" name="mail_replay" value="<?php echo $mail_replay?>" limit="type:email" msg="回复地址格式不正确" msgArea="txt_mail_replay_msg" class="txt"/>
		<span id="txt_mail_replay_msg"></span>
		</td>
	</tr>

	<tr>
		<th scope="row">邮箱编码：</th>
		<td>
		<label for="rdo_mail_charset_utf8">
		<input type="radio" id="rdo_mail_charset_utf8" name="mail_charset" value="utf-8" <?php if($mail_charset=='utf-8'){echo 'checked';}?>>国际化编码(utf-8)</label>
		<label for="rdo_mail_charset_gbk">
		<input type="radio" id="rdo_mail_charset_gbk" name="mail_charset"  value="gbk" <?php if($mail_charset=='gbk'){echo 'checked';}?>>简体中文</label>
		</td>
	</tr>

	<tr>
		<th scope="row">邮箱地址：</th>
		<td>
		<input type="text" size="50" id="txt_test_mail" name="txt_test_mail" class="txt"/>
		<button type="button" id="btn_send_test" class="button pill" >发送测试邮件 </button>
		</td>
	</tr>

	<tr>
		<th scope="row">&nbsp;
		</th>
		<td>
		<button type="submit"  name="submit" value='mail' class="positive pill primary button" >
		<span class="check icon"></span>提交</button>
		</td>
	</tr>

</table>
</form>
</div>
</div>
</div>
<script type="text/javascript">
    $(function(){
        $("#btn_send_test").click(function(){
            var mail = $.trim($("#txt_test_mail").val());
            if (isEmail(mail)) {
                $.get("index.php?do=config&view=mail&email=" + mail, function(data){
art.dialog.alert(data); 
                });
            }
            else {
art.dialog.alert("回复地址格式不正确");
 ;
            }
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
