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
    	<h1>全局配置</h1>
         <div class="tool">         
<a href="index.php?r=config/quanju"> 站点配置</a>
<a href="index.php?r=config/conf"   class="here" >基本配置</a>
<a href="index.php?r=config/seo"  >SEO配置</a>
<a href="index.php?r=config/mail"  >邮箱配置</a>
    	</div>
</div>

<div class="box post">
        <div class="tabcon">
        	<div class="title"><h2>基本配置</h2></div>
            <div class="detail">
<form name="frm_config_basic" id="frm_config_basic" action="index.php?r=config/edit" method="post" accept-charset="utf-8" enctype='multipart/form-data'>
<table width="100%" border="0" cellspacing="0" cellpadding="0">

	<tr>
	<th scope="row">代金券是否启用：</th>
	<td>
	<label for="rdo_credit_is_allow">
	<input type="radio" id="rdo_credit_is_allow" onclick="if(this.checked){$('#sp_inp_credit_rename').hide();}else{$('#sp_inp_credit_rename').show()}" name="credit_is_allow" value="2" <?php if($credit_is_allow==2){echo 'checked';}?>>关闭
	</label>
	<label for="rdo_crdeit_is_allow2">
	<input type="radio" id="rdo_crdeit_is_allow2" onclick="if(this.checked){$('#sp_inp_credit_rename').show();}else{$('#sp_inp_credit_rename').hide()}" name="credit_is_allow"  value="1" <?php if($credit_is_allow==1){echo 'checked';}?>>开启 
	</label>
	<b style="font-weight:normal;" id="sp_inp_credit_rename" >代金券重命名：  
	<input type="text"  class="txt" name="credit_rename" id="inp_credit_rename" value="<?php echo $credit_rename?>">(默认清空)
	</b>
	</td>
	</tr>

	<tr>
	<th scope="row">附件上限：</th>
	<td>
	<input type="text" size="50" name="max_size" value="1" limit="required:true;type:int;len:1-2" value="<?php echo $max_size?>" msg="附件上限" msgArea="txt_max_size_msg" class="txt"/>
	<b style="color:red">*</b>
	<span id="txt_max_size_msg"></span>MB 系统配置值：2M，如果设定值超过系统配置值，则以系统配置值为准。 </td>
	</tr>

	<tr>
		<th scope="row">附件格式：</th>
		<td>
		<input type="text" size="50" name="file_type" value="<?php echo $file_type?>" limit="required:true;len:3-100;general:false" msg="上传文件格式长度：3-100：3-100" msgArea="txt_file_type_msg" class="txt"/>
		<b style="color:red">*</b>
		<span id="txt_file_type_msg"></span>如果有多个关键字，(zip|rar|jpg|gif|png)(不含引号) 等符号分隔                </td>
	</tr>

	<tr>
		<th scope="row">用户禁止关键字：</th>
		<td>
		<textarea cols="50" name="ban_users" rows="3" class="textarea"><?php echo $ban_users?></textarea>
		(用户名之间用~|~隔开，建议不要使用“*”号和“？”号)
		</td>
	</tr>

	<tr>
		<th scope="row">内容禁止关键字：</th>
		<td>
		<textarea cols="50" name="ban_content" rows="3" class="textarea"><?php echo $ban_content?></textarea>
		(关键词必须是中文或英文字符串，多个请用~|~隔开，建议不要使用“*”号和“？”号)
		</td>
	</tr>

	<tr>
		<th scope="row">新用户注册时间限制：</th>
		<td>
		<input type="text" size="51" name="reg_limit" value="<?php echo $reg_limit?>" limit="type:int" msg="注册时间为整数" msgArea="txt_reg_limit_msg" class="txt"/>
		<span id="txt_reg_limit_msg"></span>(时间为分钟)
		</td>
	</tr>

	<tr>
		<th scope="row">用户注册邮件激活：</th>
		<td>
		<label for="red_reg">
		<input type="radio" id="rdo_reg" name="allow_reg_action" value="1" <?php if($allow_reg_action==1){echo 'checked';}?>/>开启</label>
		<label for="rdo_reg2">
		<input type="radio" id="rdo_reg2" name="allow_reg_action" value="0" <?php if($allow_reg_action==0){echo 'checked';}?>/>关闭</label>
		(防止恶意注册)               
		</td>
	</tr>

	<th scope="row">&nbsp;</th>
	<td>
	<div class="clearfix padt10">
	<button class="positive pill primary button" type="submit" name='submit' value="conf">
	<span class="check icon"></span>提交</button>
	</div>
	</td>
</table>
</form>
            </div>
        </div>
        
        
    </div>


<script type="text/javascript">
    $(function(){
    	$("#rdo_second_domain_2").click(function(){
$("#t_domain").show();
})
if($("#rdo_second_domain_2").is(":checked")){
$("#t_domain").show();
}
    	$("#rdo_second_domain_1").click(function(){
$("#t_domain").hide();
})
        $("#frm_config_basic").submit(function(){
            var value = $("#fle_web_logo").val();
            if (value) {
                s = value.lastIndexOf(".");
                lastname = value.substring(s, value.length);
                if (lastname.toLowerCase() != ".gif" && lastname.toLowerCase() != ".jpg" && lastname.toLowerCase() != ".png" && lastname.toLowerCase() != ".jpeg") {
                    alert("文件类型不对")
                    $(this).focus();
                    return false;
                }
                else {
                    return true;
                }
            }
            
            
        })
        if ($("#checkclose1").attr("checked")) {
            $("#close_true").show();
        }
        else {
            $("#close_true").hide();
        }
        $("#checkclose1").click(function(){
            $("#close_true").show();
        })
        $("#checkclose2").click(function(){
            $("#close_true").hide();
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
