<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--[if lt IE 7]> <html dir="ltr" lang="zh-cn" id="ie6" xmlns="http://www.w3.org/1999/xhtml"> <![endif]-->
<!--[if IE 7]>    <html dir="ltr" lang="zh-cn" id="ie7" xmlns="http://www.w3.org/1999/xhtml"> <![endif]-->
<!--[if IE 8]>    <html dir="ltr" lang="zh-cn" id="ie8" xmlns="http://www.w3.org/1999/xhtml"> <![endif]-->
<!--[if gt IE 8]><!--> <html dir="ltr" lang="zh-cn" xmlns="http://www.w3.org/1999/xhtml"> <!--<![endif]-->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>KPPW 2.2--后台管理 - 客客专业威客系统</title>
</head>
<link href="/public/tpl/css/admin_management.css" rel="stylesheet" type="text/css" />
<link href="/public/resource/css/button/stylesheets/css3buttons.css" rel="stylesheet" type="text/css" />
<link title="style1" href="/public/tpl/skin/default/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/public/resource/js/jquery.js"></script>
</head>
<body class="skin">
<div id="append_parent"></div>
<div class="login_box">
<div class="login_con">
    <table border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td class="pl">
        	<div>
                <div>
                  <h1><img src="/public/tpl/img/logo.png" alt="客客专业威客系统" title="客客专业威客系统"/>系统管理</h1>
                </div>
                <div>
                  <p>Powered by KPPW2.2 &copy;2010 武汉客客信息技术有限公司</p>
                </div>
          	</div>
        </td>
        <td class="pr">
        	<div>
            <form action="index.php?do=login" method="post" id="admin_login">
            <input type="hidden" name="token" id="token" value="ce9abd"/>
            <input  type="hidden" name="allow_time" id="allow_num" value="5"/>
            <p>
             	&nbsp;<span id="try_info"></span>
 </p>
              <p class="logintitle">用户名: </p>
              <p class="loginform">
                <input name="username" type="text" id="txt_username" class="txt"  limit="required:true" msg="用户名不能为空" title="请填写正确登录账号" msgArea="try_info"/>
              </p>
              <p class="logintitle">密码:</p>
              <p class="loginform">
                <input name="password" type="password" id="pwd_pwd" class="txt"   limit="required:true" msg="密码不能为空" title="请填写正确登录密码" msgArea="try_info"/>
              </p>
              <p class="loginbtn">
              	
                <button  type="submit" id="logsubmit" name="login" onclick=" return check_login();"><span class="icon key">&nbsp;</span>提交</button>
                <button id="re" type="reset" name="reset"><span class="icon reload">&nbsp;</span>重 置</button>	
              </p>
            </form>
          </div>
          </td>
      </tr>
    </table>
  </div>
</div>

<script type="text/javascript">
$(function(){
$("#txt_username").focus();
})
function check_login(){
var allow_num=$("#allow_num").val();

var i = checkForm(document.getElementById("admin_login"));
if(i){
if(allow_num>0){
var username=$("#txt_username").val();
var password=$("#pwd_pwd").val();
var token=$("#token").val();
$.post("index.php?do=login&is_submit=1&tt="+new Date().getTime(),
{user_name:username,pass_word:password,allow_num:allow_num,token:token},function(json){
if(json.status==1){
location.href="index.php";
}else{
$("#try_info").html(json.msg);
return false;
}
},'json')
}
 }
return false;

}
</script>
<script type="text/javascript" src="/public/resource/js/system/form_and_validation.js"></script>
 
 
 
</body>
</html>