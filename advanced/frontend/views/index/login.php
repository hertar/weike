<div class="wrapper">
    <div class="container_24">
        <section class="clearfix section">
        	<div class="box model blue ">
        		<div class="inner">
            <header class="box_header clearfix">
            	<div class="grid_5 alpha omega">
                	<h1 class="box_title"><span>登录</span> Login</h1>
</div>
<div class="grid_18">
<nav class="box_nav clearfix">
<ul><li class="backLava" style="position: absolute; display: block; margin: 0px; padding: 0px; left: 0px; top: 0px; width: 139px; height: 34px;"><div class="leftLava"></div><div class="bottomLava"></div><div class="cornerLava"></div></li> 
   <li class="selectedLava">
       <a href="index.php?r=index/register" original-title="">无账号？现在去注册</a></li>
</ul>
</nav>
</div>
            </header>
 
            <div class="box_detail clearfix po_re box">
            	<div class="pad10">
            		
</div>
            	<div class="clear"></div>
                <div class="grid_17">
                    <!--from表单 start-->
                    <div class="form_box clearfix border_n">
                        <form name="login_frm" id="login_frm" method="post" action="index.php?r=index/login_pro">
<input type="hidden" value="ce9abd" id="formhash" name="formhash" original-title="">
<input type="hidden" value="http://127.0.0.1/weike/index.php" id="hdn_refer" name="hdn_refer" original-title="">
<input type="hidden" value="login_frm1" name="handlekey" original-title=""><!--账号-->
                            <div class="rowElem clearfix po_re">
                                <label class="grid_4">
                                  账&#12288;号：                                </label>
                                <div class="grid_10">
 <input type="text" msgarea="login_account_msg" msg="用户名输入错误" limit="required:true;len:2-20" id="txt_account" name="txt_account" autocomplete="off" size="20" class="txt txt_input" value="手机号/邮箱/用户名" style="width:200px;" original-title="用户名可以为中文!">
<span id="login_account_msg" class="msg"></span>
                                </div>

                            </div>

                            <div class="rowElem clearfix po_re">
                                <label class="grid_4">
                                    密&#12288;码：                                </label>
                                <div class="grid_10">
                                <input type="text" original-title="" class="txt_input txt" value="密码不可以为空" name="txt_password" id="txt_password" style="width:200px;">
                                    <input type="password" msgarea="login_password_msg" msg="密码长度不能低于6位！" limit="required:true;len:6-20" maxlength="20" 
                                           id="pwd_password" name="pwd_password" style="width:200px;display:none;" 
                                           class="txt_input txt" original-title="密码长度为6-20位">
<span id="login_password_msg" class="msg"></span>
                                </div>
                                
                            </div>
 
                            <div>
                            
</div>
                            <div class="mt_20 prefix_4 ml_5">
                                <button id="user_login_btn" class="button" onclick="return user_login();" type="submit">
                                    <span class="key icon"></span>
                                    登录&#12288; 
                                </button> &#12288;&#12288;&gt;&gt;<a target="_blank" href="index.php?r=index/get_password">找回密码</a>
                            </div>
                           
                        </form>
                    </div>
                </div>
                <div class="grid_7 omega border_l_c">
                    <div class="pad10">

                        <div class=" pl_20">
                            <span>通过合作网站直接登录</span>
 <div class="mt_10">
<a title="新浪微博" alt="新浪微博" href="index.php?do=oauth_login&amp;type=sina">
<img alt="新浪微博" src="/public/resource/img/ico/sina_t.gif" original-title="新浪微博">
</a>
<a class="ml_5" href="index.php?do=oauth_login&amp;type=sina">新浪微博登录 </a>
</div>
                   			
 <div class="mt_10">
<a title="腾讯微博" alt="腾讯微博" href="index.php?do=oauth_login&amp;type=ten">
<img alt="腾讯微博" src="/public/resource/img/ico/ten_t.gif" original-title="腾讯微博">
</a>
<a class="ml_5" href="index.php?do=oauth_login&amp;type=ten">腾讯微博登录 </a>
</div>
                   			
 <div class="mt_10">
<a title="QQ账号" alt="QQ账号" href="index.php?do=oauth_login&amp;type=qq">
<img alt="QQ账号" src="/public/resource/img/ico/qq_t.gif" original-title="QQ账号">
</a>
<a class="ml_5" href="index.php?do=oauth_login&amp;type=qq">QQ账号登录 </a>
</div>
                   			
 <div class="mt_10">
<a title="淘宝" alt="淘宝" href="index.php?do=oauth_login&amp;type=taobao">
<img alt="淘宝" src="/public/resource/img/ico/taobao_t.gif" original-title="淘宝">
</a>
<a class="ml_5" href="index.php?do=oauth_login&amp;type=taobao">淘宝登录 </a>
</div>
                   			
 <div class="mt_10">
<a title="搜狐微博" alt="搜狐微博" href="index.php?do=oauth_login&amp;type=sohu">
<img alt="搜狐微博" src="/public/resource/img/ico/sohu_t.gif" original-title="搜狐微博">
</a>
<a class="ml_5" href="index.php?do=oauth_login&amp;type=sohu">搜狐微博登录 </a>
</div>
                   			
                        </div>
                    </div>
                </div>
            </div>
</div>
</div>
        </section>
        <div id="login_msg">
        </div>
        <div class="clear">
        </div>
    </div>
</div>
<script type="text/javascript">
    In('form');
var inter = "1";
    $("#txt_account").focus(function(){
        var content = $("#txt_account").val();
        if (content == "手机号/邮箱/用户名"||content=="填写您的用户名") {
            $("#txt_account").val("");
        }
    });
    
    $("#txt_account").blur(function(){
        var content = $("#txt_account").val();
inter==1?val="手机号/邮箱/用户名":val="填写您的用户名";
        if (!content) {
            //$("#txt_account").val(val);
        }
    });
    
    $("#txt_password").focus(function(){
        var content = $("#pwd_password").val();
        $(this).hide();
$("#pwd_password").show();
$("#pwd_password")[0].focus();
        if (content == L.password_not_empty) {
        	$("#txt_account").val("");
        }
    });
    
    $("#pwd_password").blur(function(){
        var content = $("#pwd_password").val();
        if (!content) {
            $(this).hide();
            $('#txt_password').show();
        }
    });
    
    
    //登录
   
</script>