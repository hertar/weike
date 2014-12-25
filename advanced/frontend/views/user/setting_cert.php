<div class="clear"></div>
<!--contain start-->
<div class="wrapper">
 <div class="container_24">
  <link href="/public/tpl/default/css/user_center.css" rel="stylesheet" type="text/css">
<header class="page_title clearfix  Anchor">
    <div class="grid_17">
        <h2 class="title pt_5">用户中心</h2>
    </div>
    <div class="grid_7 hidden">
        <div class="user_info">
            <div class="fl_l mr_10">
                <p>
                    <img src='/public/data/avatar/system/16_small.jpg' uid='1' class='pic_small'>                </p>
            </div>
            <ul class="intor">
                <li>
                    欢迎您，<?php $session=new \yii\web\Session();  echo $session->get("user_name")?>               </li>
                <li>
                    <strong class="cf60">币种405405.061</strong>
                   现金 | <strong><a href="index.php?do=user&view=message">4 条消息</a></strong>
                </li>
            </ul>
        </div>
    </div>
</header>
<div class="grid_24">
<nav class="primary_nav box clearfix">

    <a name="userCenter"></a>
    <ul>
                <li>
            <a href="index.php?r=user/index" ><span class="icon32 meter">管理面板</span><em>管理面板</em></a>
        </li>
                <li>
            <a href="index.php?r=user/setting" class="selected"><span class="icon32 cog">企业设置</span><em>企业设置</em></a>
        </li>
                <li>
            <a href="index.php?r=user/finance" ><span class="icon32 chart-line2">财务管理</span><em>财务管理</em></a>
        </li>
                <li>
            <a href="index.php?r=user/employer" ><span class="icon32 buyer">雇主|买家</span><em>雇主|买家</em></a>
        </li>
                <li>
            <a href="index.php?do=user&view=witkey" ><span class="icon32 seller">威客|卖家</span><em>威客|卖家</em></a>
        </li>
                <li>
            <a href="index.php?r=user/message" ><span class="icon32 sound-high">消息管理</span><em>消息管理</em><strong class="badge">4</strong></a>
        </li>
                <li>
            <a href="index.php?r=user/collect" ><span class="icon32 star-fav">我的收藏</span><em>我的收藏</em></a>
        </li>
                <li>
            <a href="index.php?r=user/payitem" ><span class="icon32 bookmark-2">增值服务</span><em>增值服务</em></a>
        </li>
            </ul>
    
    
</nav>

</div>
<div class="clear"></div>
<!--main start-->

<section class="clearfix section">
 <!--用户中心样式-->
<div class="second_menu container_24 po_ab clearfix">
    <div class="suffix_21">
        <nav class="minor_nav box clearfix">
           <!--子导航开始-->
         <ul class="nav_group clearfix">
             <li>
                 <a href="index.php?r=user/setting" title="进入基本资料" class="selected">
                   <div class="icon16 contact-card">icon</div><strong>基本资料</strong>
     </a>
             </li>
              <li>
                 <a href="index.php?r=user/setting_pic" title="进入头像设置" >
                   <div class="icon16 picture">icon</div><strong>头像设置</strong>
     </a>
             </li>
        </ul>
       <ul class="nav_group clearfix">
             <li>
                 <a href="index.php?r=user/setting_safe" title="进入安全设置" >
                   <div class="icon16 shield">icon</div><strong>安全设置</strong>
     </a>
             </li>
        </ul>
       
       <ul class="nav_group clearfix">
             <li>
                 <a href="index.php?r=user/setting_space" title="进入店铺设置" >
                   <div class="icon16 browser">icon</div><strong>店铺设置</strong>
     </a>
             </li>
        </ul>
<!--子导航结束-->
        </nav>
    </div>
</div>
  <div class="show_panel container_24 po_re">
    <div class="prefix_3 grid_21">
     <div class="panel clearfix box">
      <!--main content-->
        <div class="">
          <!--header内容头部 start-->
            <header class="clearfix box_header">
              <h2 class="grid_4 alpha omega box_title t_c">基本资料</h2>
               <div class="grid_17 alpha omega">
                 <nav class="box_nav">
                     <ul>
                                                                                        <li >
                                                <a href="index.php?r=user/setting" >基本资料</a>
                                            </li>
                                                                                        <li >
                                                <a href="index.php?r=user/setting_contact" >联系方式</a>
                                            </li>
                                                                                        <li >
                                                <a href="index.php?r=user/setting_skill" >威客技能</a>
                                            </li>
                                                                                        <li class="selectedLava">
                                                <a href="index.php?r=user/setting_cert" >资质证书</a>
                                            </li>
                                        </ul>
                </nav>
              </div>
             <div class="clear"></div>
         </header>
        <!--header内容头部 end-->
       <div class="prefix_1 suffix_1 mt_10">
         <div class="clearfix box font14">
            <!--messages消息 start-->
              <div id="messages"></div>
                <!--messages消息 end-->
                  <div class="suffix_1 clearfix  pb_20 pt_10">
                     <div class="grid_8">
                       <h4 class="mb_10">已上传的证书</h4>
                         <div class="upd_infos">
                            <ul id="upd_infos">
                                                           </ul>
                           </div>
                      </div>
                     <div class="grid_9">
                     	<form id="frm_cert" name="frm_cert">
                        <h4 class="mb_10 border_b_c">上传证书,支持格式:.gif、.jpg、.jpeg、.png</h4>
                            <div class="clear"></div>
<div class="rowElem clearfix">
                               <label class="grid_2 t_r">证书图片： </label>
                               <div class="grid_5">
  <input class="txt_input" type="file" name="file_name" id="file_name">
                              </div>
                            </div>
<div class="rowElem clearfix" id="cert_name_area">
                               <label class="grid_2 t_r">证书名称 :</label>
                               <div class="grid_6">
 	<input class="txt_input" type="text" size="19" name="cert_name" id="cert_name" value="如:英语四级证书" onfocus="if(this.value=='如:英语四级证书') this.value='';this.style.color='#333';"  style="color:#999;" limit="required:true;len:2-20"
msg="证书名不得为空!" msgArea="span_cert">
                               	<span id="span_cert"></span>

</div>
                            </div>
<div class="rowElem clearfix">
 <label class="grid_2 t_r">&nbsp; </label>
                               <div class="grid_5">
    <button type="button" style="width:150px" onclick="fileUpload();" id="btn_up">
                                   保存设置                                </button>
                               </div>
                            </div>
</form>
                      </div>
                      </div>
                   </div>
                 </div>
              <!--detail内容 end-->
            </div>
          <!--main content end-->
         </div>
       <div class="clear"></div>
     </div>
    </div>
   </section>
  <!--main end-->
  </div>
</div>
<!--contain end-->
<script type="text/javascript">
$(function(){
uploadify({
auto:false,
file:'file_name',
hide:true,
size:"1MB",
exts:'*.gif;*.jpg;*.jpeg;*.png',
limit:100,
text:"选择文件"}
,{
fileType:'att',
objType:'user_cert'
});
})
</script>
<script src="/public/resource/js/uploadify/jquery.uploadify-3.1.min.js" type="text/javascript"></script>
<link href="/public/resource/js/uploadify/uploadify.css" rel="stylesheet">
<script type="text/javascript" >
In('calendar','form'); 
    function fileUpload(){
    	if($("#cert_name").val()=="如:英语四级证书"){
    		$("#cert_name").val("");
    	}
if(checkForm(document.getElementById('frm_cert'))){
        	$('#file_name').uploadify('upload');
}
    }
function showName(obj){

$("#cert_name_area").slideDown(200);
}
    /**
 * 上传完成后的后续操作
 * @param Object data 响应的json对象
 */
function uploadResponse(json){
        var url = "index.php?do=user&view=setting&op=basic&opp=cert&ac=upload";
          var uid = parseInt(1) + 0;
  var cert_name = $("#cert_name").val();
             $.post(url, {v1:cert_name,v2: json.msg.url,v3: json.fid, uid: uid}, function(data){
            if (data.status != '0') {
                var cert = $('<li class="clearfix" id="' + data.status + '">' +'<span class="font14 grid_8">' +
                            '<a href="' + json.msg.url +'">' +cert_name +'</a></span>' +
                            '<a href="javascript:;" onclick="del_cert(' +data.status +',' +json.fid +')"' +
                            ' class="close" >&times;</a></li>');
                   loadingControl('1', 'complete!');
  
                   setTimeout("tipsAppend('messages','" + data.msg + "','successful','m_correct')", 100);
                   cert.appendTo("#upd_infos");
            	  $("#cert_name").val("如:英语四级证书").css('color','#999');
}
           else {
                loadingControl('2', 'fail!');
                setTimeout("tipsAppend('messages','" + data.msg + "','error','m_error')", 100);
          }
    	 }, 'json')
}
    //删除上传项
    function del_att(f_id, cert_id){
        var uid = parseInt(1) + 0;
        var url = "index.php?do=ajax&view=ajax&ac=del_att&fid=" + f_id + "&uid=" + uid;
        $.getJSON(url, function(json){
            if (json.status == '1') {
                if ($("#" + cert_id).length > 0) {
                    del_cert(cert_id, f_id);
                }
                else {
                    tipsAppend('messages', json.msg, 'successful', 'm_correct');
                    $("#a_att_" + f_id).fadeOut().remove();
                }
            }
            else {
                tipsAppend('messages', json.msg, 'error', 'm_error');
            }
        });
    }
    
    //删除证书
    function del_cert(cert_id, f_id){
        var url = "index.php?do=user&view=setting&op=basic&opp=cert&ac=del&cert_id=" + cert_id + "&f_id=" + f_id;
        $.getJSON(url, function(json){
            if (json.status == '1') {
                $("#" + cert_id).fadeOut().remove();
                tipsAppend('messages', json.msg, 'successful', 'm_correct');
            }
            else {
                tipsAppend('messages', json.msg, 'error', 'm_error');
            }
        });
    }
    
    /*上传控制条**/
    function loadingControl(type, content){
        var animated = $(".progress_bar").is("animated");
        var loading = $(".progress_bar");
        switch (type) {
            case "1"://OK
                if (animated) {
                    loading.stop();
                    loadingControl(type, content);
                }
                else {
                    loading.css("width", "0px").html(L.uploading).animate({
                        width: '300px'
                    }, 2000, function(){
                        loading.html(content);
                    });
                }
                break;
            case "2"://fail
                if (animated) {
                    loading.stop();
                }
                else {
                    loading.html(content);
                }
                break;
        }
    }
    
</script>
<!--jQuery调用--> 
<script type="text/javascript">
$(function(){
var Is = location.href.search('&op=');
if(Is>-1){
$("html,body").animate({scrollTop:$(".Anchor").offset().top});
}
})
function check(obj){
return checkForm(document.getElementById(obj));
}
In.add('jscolor',{path:"/public/resource/js/others/jscolor.js",type:'js'}); 
In('calendar'); 

$(function(){
$(".togg_u").focus(function(){
        	 this.value = '';
        }).blur(function(){
                this.value == '' ? this.value = $(this).attr(this.title ? 'title' : 'original-title') : '';
        })
}) 	
</script>