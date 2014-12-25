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
                        <form action="index.php?r=index/re_password" method="post"  
                              class="mb_30" onsubmit="return checkf()">
                            <input type="hidden" name="formhash" id="formhash" value="ce9abd">
                            <input type="hidden" name="handlekey" value="get_form1"><!--账号-->
                            <div class="rowElem clearfix po_re mt_30">
                                <label class="grid_4">
              手&nbsp;&nbsp;机&nbsp;&nbsp;号： </label>
      <div class="fl_l mr_5 ml_5">
            <input type="text" class="txt txt_input" autocomplete="off" name="txt_tel" 
                        id="txt_tel" limit="required:true;len:9-11;type:string;general:true" 
                        msg="手机号错误" 
                        title="请输入手机号" msgArea="login_account_msg" style="width:200px;" />
     
      </div><span class="msg" id="login_account_msg"><i></i></span>
      <input type="button" value="验证" onclick="sends()">
                            </div>
<label class="grid_4">
       验&nbsp;&nbsp;证&nbsp;&nbsp;码    ：                      

</label>
<input type="hidden" value="<?php echo $name?>" id="user_name" name="user_name">
<input type="hidden" value="<?php echo $id?>" id="user_id" name="user_id">
<div class="fl_l mr_5 ml_5">
  <input type="text" title="请输入收到的验证码" name="get_str" id="get_str" 
         class="txt txt_input" onblur="receive()" style="width:200px;">
            </div><br>
                      <div class="mt_20 prefix_4 ml_5">
                              <button type="submit" class="button" id="user_login_btn" >
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
<script>
    function sends(){
        var tel=$("#txt_tel").val();
        if(tel==""){
            alert("请输入手机号码");
           return false;
        }
        //alert(tel)
        str=generateMixed(6);
       
        //alert(str);
        $.ajax({
            url:"index.php?r=index/sends",
            type:"get",
            data:{"tel":tel,"str":str},
            success:function(e){
                //alert(e);
                if(e=="发送成功"){
                    //$("#get_str").val(str);
                    alert(e)
                }else{
                    return false;
                }
            }
        })
      
    }
function checkf(){
 var tel=$("#txt_tel").val();
        if(tel==""){
            alert("请输入手机号码");
           return false;
        }
var get_str=$("#get_str").val();
    //alert(get_str);
    if(get_str==""){
        alert("验证码不能为空!");
        return false;
    }

}    
function receive(){
    get_str=$("#get_str").val();
    //alert(get_str);
    if(get_str==""){
        alert("验证码不能为空!");
        return false;
    }
       $.ajax({
            url:"index.php?r=index/receive",
            type:"get",
            data:{"get_str":get_str},
            success:function(e){
                //alert(e);    
                if(e=="no"){
                    alert("请仔细检查输入的验证码");
                    return false;
                }
            }
        })
}
    
var chars = ['0','1','2','3','4','5','6','7','8','9','A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z'];

function generateMixed(n) {
     var res = "";
     for(var i = 0; i < n ; i ++) {
         var id = Math.ceil(Math.random()*35);
         res += chars[id];
     }
     return res;
}
</script>
