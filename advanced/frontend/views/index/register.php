  
    <div class="wrapper">
    <div class="container_24">
           <section class="clearfix section">
                   <div class="box model green ">
                           <div class="inner">
                           <header class="box_header clearfix ">
                                   <div class="grid_5 alpha omega">
                                           <h1 class="box_title"><span>注 册</span> Register</h1>
    </div>
    <div class="grid_18">
    <nav class="box_nav clearfix">
    <ul><li class="backLava" style="position: absolute; display: block; margin: 0px; padding: 0px; left: 0px; top: 0px; width: 139px; height: 34px;"><div class="leftLava"></div><div class="bottomLava"></div><div class="cornerLava"></div></li> 
                           <li class="selectedLava">
                               <a href="index.php?=index/login" original-title="">有账号？现在去登录</a></li>
    </ul>
    </nav>
    </div>
    </header>
                                   <div class="box_detail clearfix po_re box pt_10 pl_5">
                                   <div class="grid_17">
                                   <!--from表单 start-->
                                           <div class="form_box clearfix border_n">
                <form name="register_frm" id="register_frm" method="post" action="index.php?r=index/register_pro">
                          
    <input type="hidden" value="register_frm1" name="handlekey" original-title=""><!--账号-->
                                                   <div class="rowElem clearfix po_re">
                                                   <label class="grid_4">
                                                           账&#12288;&#12288; 号：                            			</label>
                                                   <div class="fl_l ">
      <input type="text" style="width:200px;" msgarea="login_account_msg" ajax="index.php?r=index/check_name&name=" msg="用户名输入有误！" 
                  limit="required:true;len:2-20;type:string;general:true" 
                  id="txt_account" name="txt_account" 
                  autocomplete="off" class="txt txt_input" original-title="2-20个字符或者汉字，推荐使用中文会员名。">
                                                           <span id="login_account_msg" class="msg"><i></i></span>
    </div>

                                                   </div>

                                           <!--end 账号--><!--密码-->
                                                   <div class="rowElem clearfix po_re">
                                                   <label class="grid_4">
                                                           密&#12288; &#12288;码：                            			</label>
                                                   <div class="fl_l  ">
                                                           <input type="password" msgarea="password_msg" msg="密码输入有误！" limit="required:true;len:6-20" maxlength="20" id="pwd_password" name="pwd_password" style="width:200px;" onkeyup="pwStrength(this.value)" class="txt_input" original-title="6-20个字符，请使用字母加数字或符号的组合密码">
                                                           <span id="password_msg" class="msg"></span>
    </div>

                                                   <div class="clear"></div>
    <!--密码强度-->

    <div class="prefix_4">
                                                   <div class=" msg pw_strength" id="pwdStrength">
                                                   <div class="pw_letter">
                                                           <span class="selected">弱</span>
    <span>中</span>
    <span>强</span>
    </div>
                                                           </div>

    </div>
                                                   </div>
    <!--强度end-->
                                                   <div class="rowElem clearfix po_re">
                                                   <label class="grid_4">
                                                           确认 密码：                            			</label>
                                                   <div class="fl_l">
                                                           <input type="password" msgarea="password2_msg" msg="重复密码不正确！" limit="required:true;equals:pwd_password" maxlength="20" id="pwd_password2" name="pwd_password2" style="width:200px;" class="txt_input" original-title="再输一次密码">
                                                           <span id="password2_msg" class="msg"></span>
    </div>

                                                   </div> 
                                           <!--end 密码-->
    <!--邮箱-->
   
                                                   <div class="rowElem clearfix po_re">
                                                   <label class="grid_4">
                                                           邮&#12288; &#12288;箱：                            			</label>
                                                   <div class="fl_l">
                                                           <input type="text" msgarea="email_msg"  msg="请输入您真实的邮箱地址！" limit="type:email;required:true;len:6-50" id="txt_email" name="txt_email" autocomplete="off" style="width:200px;" class="txt_input" original-title="请输入您常用的邮箱">
                                                           <span id="email_msg" class=""></span>
                                                    </div>

                                                   </div>

                                   <!--end 邮箱-->
                                   <div class="rowElem clearfix po_re">
                                                   <label class="grid_4">
                                                           手 &nbsp;&nbsp;机&nbsp;&nbsp;号：  
                                                   </label>
                                                   <div class="fl_l">
                                                           <input type="text"   msgarea="tel_msg" msg="请输入您真实的手机号码！"  limit="type:tel;required:true;len:9-11" id="txt_tel" name="txt_tel" 
                                                                  autocomplete="off" style="width:200px;" class="txt_input" original-title="请输入您手机号码">
                                                           <span id="tel_msg" class=""></span>
                                                    </div>

                                    </div>

    <!--验证码-->
                                                   <div class="rowElem clearfix po_re">
                                                   <label class="grid_4">
                                                           验 &nbsp;&nbsp;证&nbsp;&nbsp;码：                            			</label>
                                                   <div class="grid_8 alpha omega po_re">
                            <input type="text"  msgarea="secode_msg" msg="验证码错误!" limit="required:true;len:4" id="txt_code" size="8" name="txt_code" class="fl_l txt_input" style="width:65px;" original-title="">
                           <div class="hidden secode_box" id="show_secode_menu_content">
                           <img onclick="document.getElementById('secode_img').src='index.php?r=index/captcha&count='+Math.random(); return false;" src="index.php?r=index/captcha&count='+Math.random(); " id="secode_img" original-title="">
                          
                           <a onclick="document.getElementById('secode_img').src='index.php?r=index/captcha&count='+Math.random(); return false;" href="#" class="font14">换一组</a>
    <span id="secode_msg" class=""></span>
    </div>
                 

    </div>

                                                   </div>						
                                   <!--end 验证码-->

                           <div class="mt_20 prefix_4 ml_5">
                               <button onclick="return user_register();" class="button" type="submit">
                                   <span class="clock icon"></span>
                                   注 册                            </button>
                           </div>

                           <p class="mt_20 prefix_4 ml_5">
                               <input type="checkbox" msgarea="login_msg" msg="您必须同意注册协议" limit="required:true" id="inputtext" checked="checked" name="inputtext" original-title=""> &nbsp;我已阅读并接受<a target="_blank" href="" class="agreement_link">注册协议</a>和版权声明                        	<span id="login_msg"></span>
    </p>
                       </form>
    <div style="display:none;" class="agreement_part clearfix">
    <p>注册协议<br></p>
    </div>
                   </div>
               </div>
               <div class="grid_6 omega border_l_c">
                       <div class="pad10">

                        <div class=" pl_20">
                           <span>通过合作网站直接登陆KPPW</span>
    <div class="mt_10">
    <a title="新浪微博" alt="新浪微博" href="index.php?do=oauth_login&amp;type=sina">
    <img alt="新浪微博" src="/public/resource/img/ico/sina_t.gif" original-title="新浪微博">
    </a>
    <a class="ml_5" href="index.php?do=oauth_login&amp;type=sina">新浪微博登录</a>
    </div>

    <div class="mt_10">
    <a title="腾讯微博" alt="腾讯微博" href="index.php?do=oauth_login&amp;type=ten">
    <img alt="腾讯微博" src="/public/resource/img/ico/ten_t.gif" original-title="腾讯微博">
    </a>
    <a class="ml_5" href="index.php?do=oauth_login&amp;type=ten">腾讯微博登录</a>
    </div>

    <div class="mt_10">
    <a title="QQ账号" alt="QQ账号" href="index.php?do=oauth_login&amp;type=qq">
    <img alt="QQ账号" src="/public/resource/img/ico/qq_t.gif" original-title="QQ账号">
    </a>
    <a class="ml_5" href="index.php?do=oauth_login&amp;type=qq">QQ账号登录</a>
    </div>

    <div class="mt_10">
    <a title="淘宝" alt="淘宝" href="index.php?do=oauth_login&amp;type=taobao">
    <img alt="淘宝" src="/public/resource/img/ico/taobao_t.gif" original-title="淘宝">
    </a>
    <a class="ml_5" href="index.php?do=oauth_login&amp;type=taobao">淘宝登录</a>
    </div>

    <div class="mt_10">
    <a title="搜狐微博" alt="搜狐微博" href="index.php?do=oauth_login&amp;type=sohu">
    <img alt="搜狐微博" src="/public/resource/img/ico/sohu_t.gif" original-title="搜狐微博">
    </a>
    <a class="ml_5" href="index.php?do=oauth_login&amp;type=sohu">搜狐微博登录</a>
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
       //注册  
    $("#txt_code").focus(function(){
    $("#show_secode_menu_content").removeClass("hidden");
    });
    $(".agreement_link").toggle(function(){
    $(".agreement_part").show();
    },function(){
    $(".agreement_part").hide();
    });
    
    function checkStrong(sPW){
    //if (sPW.length < 3){
    //Modes=1;
    //}else{
    var pwLength =sPW.length;
     var patEn = /[a-zA-Z]/;
     var patnum = /[0-9]/;
     var speChar = /[`~!@#$\^&\*\(\)=\|{}':;',\/\?\[\]\.<>]/;
     var isEn = patEn.test(sPW);
     var isNum = patnum.test(sPW);
     var isSpe = speChar.test(sPW);
     Modes = getStrong(isEn,isNum,isSpe,pwLength);

    //}
    return Modes; 
    }

    function getStrong (isEn,isNum,isSpe,pwLength){
    if (isEn && isNum && isSpe && (pwLength>6)){
    var setModes = 3;
    }else{
    var setModes = 2;
    if((isEn && isNum)||(isNum && isSpe)||(isEn&&isSpe)){
    var setModes = 2;
    }else{
    var setModes = 1;
    }
    }
    return setModes;
    }

    function pwStrength(pwd){ 
     if (pwd==null||pwd==""){ 
           S_level = 0;
     } else{ 
     S_level=checkStrong(pwd); 
     $("#pwdStrength span:lt("+S_level+")").addClass('selected');
     $("#pwdStrength span:gt("+(S_level-1)+")").removeClass('selected'); 
     } 

    }


    </script>