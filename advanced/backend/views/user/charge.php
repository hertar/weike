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
    	<h1>用户管理</h1>
        <div class="tool">
            <a href="index.php?r=user/user_list" >用户管理</a>
            <a href="index.php?r=user/user_add">添加用户</a>
            <a href="index.php?r=user/charge" class="here">手动充值</a>
</div>
    </div>
<div class="box post">
        <div class="tabcon">
        	<div class="title"><h2>手动充值</h2></div>
            <div class="detail">
<form action="index.php?r=user/charge_add" method="post" name="frm_cash" id="frm_cash">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tbody>
                      <tr>
                        <th scope="row" width='100'>UID：</th>
                        <td>
<input type="text" class="txt" style=" width:260px;" name="user"
id="txt_user" title="请填写待充值用户的UID或 用户名"
limit="required:true" msgArea="txt_user_msg" msg="用户UId或用户名不得为空"/>
<b style="color:red"> *</b>
<span id="txt_user_msg"></span>用户的编号或用户名来查找用户<a class="button dbl_target" href="javascript:void(0);" onclick="validUser();">
<span class="chat icon"></span>
验证</a>
<div class="box tip clearfix p_relative" style="width:310px;display:none;" id="man_tips">
    	<div class="title"><h2>账户信息</h2></div>
        <div class="detail pad10">
        	<span class="pad10" id="ucash"></span></br>
<span class="pad10" id="ucredit"></span>
        </div>
</div>
   </td>
                      </tr>
                      <tr>
                        <th scope="row">现金：</th>
                        <td>
                        	<select name="cash_type" id="cash_type">
                        		<option value="1">添加 </option>
                        		<option value="0">扣除 </option>
                        	</select>
                        	 <input type="text" class="txt" style="width:260px;"
  name="cash" id="cash" 
  limit="type:float;between:0-999999999999"
  title="请填写充值金额..."
  msg="充值金额不得为空或字符,请填写正数"
      msgArea="cash_msg"  class="input_t"/>
 <span id="cash_msg"></span>
</td>
                      </tr>
                        <tr>
                      	<th>充值事由</th>
                      	<td>
                      		<textarea name="charge_reason" rows="8" cols="50"></textarea>
                      	</td>
                      </tr>
                      <tr>
                        <th scope="row">&nbsp;</th>
                        <td>
                            <div class="clearfix padt10">
                            	<input type="hidden" name="is_submit" value="1">
                                <button class="positive primary pill button" type="submit" value="提交" ><span class="check icon"></span>提交</button>
                              
                            </div>
                        </td>
                      </tr>
  </tbody>
                    </table>
                </form>
        </div>
        
        
    </div>
 <script type="text/javascript">
var credit_is_allow = '2';


 </script>
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
