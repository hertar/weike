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
            <a href="index.php?r=user/user_add" class="here">添加用户</a>
             <a href="index.php?r=user/charge">手动充值</a>
    	</div>
    </div>
<div class="box post">
        <div class="tabcon">
        	<div class="title"><h2>添加用户资料</h2></div>
            <div class="detail">
               <form action="index.php?r=user/user_add_pro" method="post" name="frm_add" id="frm_add">
                    <input type="hidden" value="" name="edituid">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tbody>
                      <tr>
                        <th scope="row" width="130">用户名：</th>
                        <td>
                       <input type="text" class="txt" style=" width:260px;"  value="" name="username" id="txt_username" maxlength="50" title="请输入2-20的字符或者汉字的用户名" limit="required:true;len:2-20" msg="请输入2-20的字符或者汉字的用户名" ajax="index.php?r=user/user_checkname&name=" msgArea="txt_username_msg" valid="1"/><b style="color:red"> *</b><span id="txt_username_msg"></span>

  </td>
                      </tr>
                      <tr>
                        <th scope="row">密码：</th>
                        <td> <input type="password" class="txt" style="width:260px;" name="password" id="password" limit="required:true;len:6-20" title="请输入密码..." msg="密码限定为6-20位" msgArea="pwd_pwd_msg"  class="input_t"/><b style="color:red">*</b><span id="pwd_pwd_msg"></span>
</td>

                      </tr>
 
  <tr>
                       <th scope="row">邮箱：</th>
                        <td> <input type="text" class="txt" style="width:260px;" name="email" id="email"limit="required:true;type:email" value="" msg="格式错误" title="请输入正确邮箱..." msgArea="txt_email_msg"/><b style="color:red"> *</b><span id="txt_email_msg"></span></td>
                      </tr>
      <tr>
 	 <th scope="row">用户组：</th>
                        <td> 

  <select name="group_id">

      <?php
        foreach ($group as $key => $val) {
     ?>
             <option value="<?php echo $val['group_id']?>" ><?php echo $val['groupname']?></option>
     <?php
             }
  ?>
      
  	
     	
      </select><b style="color:red">*</b>
   
                      </td>
                      </tr>
   </tbody>
 <tfoot>
                      <tr>
                        <th scope="row">&nbsp;</th>
                        <td>
                            <div class="clearfix padt10">
                            	<input type="hidden" name="is_submit" value="1">
                                <button class="positive primary pill button" type="submit" value="提交" ><span class="check icon"></span>提交</button>
                              
                            </div>
                        </td>
                      </tr>
 </tfoot>
                    </table>
                    
                </form>
        </div>
        
        
    </div>
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


//判断用户名
function checkname(){
    var name=$("#txt_username").val();
    
    $.ajax({
        url:"index.php?r=user/user_checkname",
        type:"post",
        data:{"name":name},
        success:function(e){
            alert(e);
        }
        
    })
}
</script>
</body>
</html>
