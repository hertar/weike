<div class="clear"></div>
<div class="wrapper">
    <div class="container_24">
        <section class="clearfix section">
                <div class="box model yellow ">
                <div class="inner">
            <header class="box_header clearfix pad10">
                <div class="grid_8 alpha omega">
                        <h1 class="box_title"><span>找回密码</span> Get Password</h1>
</div>
                <div class="grid_16">
<nav class="box_nav clearfix">
<ul>
                                        <li><a href="index.php?r=index/register">无账号？现在去注册</a></li>
<li><a href="index.php?r=index/login">有账号？现在去登录</a></li>
</ul>
</nav>
</div>
            </header>
            <div class="box_detail clearfix po_re box pb_10">
                <div class="grid_17">
                    <!--from表单 start-->
                    <div class="form_box clearfix box border_n">
                        <form action="index.php?r=index/get_step" method="post" id="get_form1" name="get_form1" class="mb_30">
                            <input type="hidden" name="formhash" id="formhash" value="ce9abd">
                            <input type="hidden" name="handlekey" value="get_form1"><!--账号-->
                            <div class="rowElem clearfix po_re mt_30">
                                <label class="grid_4">
              账&nbsp;&nbsp;&nbsp;&nbsp;户： </label>
      <div class="fl_l mr_5 ml_5">
            <input type="text" class="txt txt_input" autocomplete="off" name="txt_account" id="txt_account" limit="required:true;len:2-20;type:string;general:true" 
                                            msg="用户名输入错误" ajax="index.php?r=index/check_username&name=" 
                                            title="请输入用户名" msgArea="login_account_msg" style="width:200px;" />
     
      </div><span class="msg" id="login_account_msg"><i></i></span>
                            </div>
                                     <!--验证码-->
                                                <div class="rowElem clearfix po_re">
                                                <label class="grid_4">
                                                        验证码：  
                                                </label>
                                                <div class="grid_5 omega po_re" style="width:220px">
                                                        <input style="width:65px;" class="fl_l txt_input" name="txt_code" type="text" size="8" id="txt_code" limit="required:true;len:4" msg="验证码错误!"msgArea="secode_msg" >
                        <div id="show_secode_menu_content" class="hidden secode_box">
        <img onclick="document.getElementById('secode_img').src='index.php?r=index/captcha&count='+Math.random(); return false;" src="index.php?r=index/captcha&count='+Math.random(); " id="secode_img" original-title="">
                        <a onclick="document.getElementById('secode_img').src='index.php?r=index/captcha&count='+Math.random(); return false;" href="#" class="font14">换一组</a>
</div>
                <a id="show_secode" href='index.php?do=ajax&view=menu&ajax=show_secode'></a>
                                                </div>
                                                <span class="" id="secode_msg"></span>
                                                </div>						
                                <!--end 验证码-->


                            <div class="mt_20 prefix_4 ml_5">
                                <button type="submit" class="button" id="user_login_btn" onclick="return next();">
                                    <span class="key icon"></span>
                                                                                                         下一步　 
                                </button>
                            </div>
                        </form>
                    </div>







                </div>


                 <div class="grid_7 omega border_l_c mt_20">
                    <div class="pad10">
                        <div class="pl_20">
                            <span>通过合作网站直接登录KPPW</span>
 <div class="mt_10">
<a href="index.php?do=oauth_login&type=sina" alt="新浪微博" title="新浪微博">
<img src="/public/resource/img/ico/sina_t.gif" alt="新浪微博" title="新浪微博">
</a>
<a href="index.php?do=oauth_login&type=sina" class="ml_5">新浪微博登录 </a>
</div>

 <div class="mt_10">
<a href="index.php?do=oauth_login&type=ten" alt="腾讯微博" title="腾讯微博">
<img src="/public/resource/img/ico/ten_t.gif" alt="腾讯微博" title="腾讯微博">
</a>
<a href="index.php?do=oauth_login&type=ten" class="ml_5">腾讯微博登录 </a>
</div>

 <div class="mt_10">
<a href="index.php?do=oauth_login&type=qq" alt="QQ账号" title="QQ账号">
<img src="/public/resource/img/ico/qq_t.gif" alt="QQ账号" title="QQ账号">
</a>
<a href="index.php?do=oauth_login&type=qq" class="ml_5">QQ账号登录 </a>
</div>

 <div class="mt_10">
<a href="index.php?do=oauth_login&type=taobao" alt="淘宝" title="淘宝">
<img src="/public/resource/img/ico/taobao_t.gif" alt="淘宝" title="淘宝">
</a>
<a href="index.php?do=oauth_login&type=taobao" class="ml_5">淘宝登录 </a>
</div>

 <div class="mt_10">
<a href="index.php?do=oauth_login&type=sohu" alt="搜狐微博" title="搜狐微博">
<img src="/public/resource/img/ico/sohu_t.gif" alt="搜狐微博" title="搜狐微博">
</a>
<a href="index.php?do=oauth_login&type=sohu" class="ml_5">搜狐微博登录 </a>
</div>

                        </div>
                    </div>
                </div>
            </div>

</div>
</div>
        </section>
    </div>
</div>
<div class="clear">
</div>
<script type="text/javascript">    
In('form');

    $("#txt_account").focus(function(){
        var content = $("#txt_account").val();
        if (content == "用户名") {
            $("#txt_account").val("");
        }
    });
    function next(){
 if (checkForm(document.getElementById("get_form1"), false)) {
            $("#get_form1").submit();
        }
        return false;

}

    

$("#txt_code").focus(function(){
$("#show_secode_menu_content").removeClass("hidden");
});
//阻止点击隐藏方法
$("#txt_code,#show_secode_menu_content").click(function (e) {
e.stopPropagation();
});

var hidecode=function(){
if (!$("#show_secode_menu_content").is(".hidden")){
//$("#show_secode_menu_content").addClass("hidden");
}
}
$("body").click(function(){
hidecode();
})


</script>
