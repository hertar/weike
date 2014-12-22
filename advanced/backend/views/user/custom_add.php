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
    <h1>用户组设置</h1>
    <div class="tool">
        <a href="index.php?r=user/custom_list" >用户组管理</a>
        <a href="index.php?r=user/custom_add"  class="here"  >设置用户组</a>
    </div>
</div>
<div class="box post">
    <div class="title">
        <h2>设置用户组</h2>
    </div>
    <div class="detail">
        <form action="index.php?r=user/custom_add_pro" method="post" >
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
           <tr>
                 <th scope="row" width="70">
                    <span class="bg1 t_r">用户ID：</span>
                 </th>
                 <td>
    <input type="text" name="uid" value="0"  id="uid"  style="width:260px;" class="txt"><b style="color:red"> *</b>
   <button type="button" onclick="get_info()">查询</button>	
 </td>
             </tr>
 <tr>
                <th  scope="row" width="70">
                    用户名：                </th>
                <td>
                    <input type="text" name="username" id="username" value="" style="width:260px;" class="txt"><b style="color:red"> *</b>
                </td>
            </tr>

<tr>
                <th  scope="row">
                    联系电话：                </th>
                <td>
                    <input type="text" name="phone"  id="phone" style="width:260px;"  value="" class="txt" limit="type:tel" msg="格式错误" title="请填写正确的电话，不填可留空" msgArea="txt_phone_msg"><span id="txt_phone_msg"></span>
                </td>
            </tr>
<tr>
                <th  scope="row">
                    E-mail：                </th>
                <td>
                	<input type="text" class="txt" style="width:260px;" name="email" id="email"limit="type:email" value="" msg="格式错误" title="请填写正确的email，不填可留空" msgArea="txt_email_msg" /><span id="txt_email_msg"></span>
                    
                </td>
            </tr>
<tr>
                <th  scope="row">
                   QQ：                </th>
                <td>
<input type="text" name="qq" id="qq" style="width:260px;" value="" class="txt">
                </td>
            </tr>
    <tr>
                <th  scope="row">
                   用户组：                </th>
                <td>
                     <select name="group_id" id="group_id">
                         <?php
                            foreach ($group as $v) {
                            
                         ?>
                         <option value="<?php echo $v['group_id']?>" ><?php echo $v['groupname']?></option>
     	 <?php
                            }
                    ?>
      </select><b style="color:red">*</b>
                </td>
            </tr>
              
                <tr>
                    <th scope="row">
                        &nbsp;
                    </th>
                    <td>
                        <div class="clearfix padt10">
                        	<input type="hidden" name="is_submit" value="1"/>

                            <button class="positive primary pill button" type="submit" name="sbt_edit" value="提交">
                                <span class="check icon"></span>提交                            </button>
                          
                        </div>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>
<script type="text/javascript">
 function get_info(){
 uid  = document.getElementById("uid").value;
 //alert(uid);
if(uid){
$.post("index.php?r=user/get_user_info&guid="+uid,function(json){
   //alert(json[0].username)

$("#username").val(json[0].username);
$("#phone").val(json[0].phone);
$("#email").val(json[0].email);
$("#qq").val(json[0].qq);
$("#group_id").val(json[0].group_id);
},'json');
}

 }  	
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
