<?php keke_tpl_class::checkrefresh('control/admin/tpl/admin_msg_weibo', '1418778510' );?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $_K['charset'];?>">
<title>keke admin</title>


<link href="tpl/css/admin_management.css" rel="stylesheet" type="text/css" />
<link href="../../resource/css/buttons.css" rel="stylesheet" type="text/css" />
<link title="style1" href="tpl/skin/default/style.css" rel="stylesheet" type="text/css" />
<!--<link title="style2" href="tpl/skin/light/style.css" rel="stylesheet" type="text/css" />-->
<script type="text/javascript" src="../../resource/js/jquery.js"></script>
<script type="text/javascript" src="../../resource/js/system/keke.js"></script>
<script type="text/javascript" src="../../resource/js/in.js"></script>
</head>
<body class="frame_body">
<div class="frame_content">
<div id="append_parent"></div>
<div class="page_title">
    	<h1><?php echo $_lang['api_config_manage'];?></h1>
         <div class="tool">         
            <a href="index.php?do=msg&view=weibo" <?php if($view=='weibo') { ?> class="here" <?php } ?>><?php echo $_lang['oauth_api_config'];?></a>
<a href="index.php?do=<?php echo $do?>&view=attention" <?php if($view=='attention') { ?> class="here" <?php } ?>><?php echo $_lang['weibo_view'];?></a>
         </div>
</div>

<div class="box post">
   <div class="tabcon">
      <div class="title"><h2><?php echo $_lang['oauth_api_config'];?></h2></div>
         <div class="detail">
             <form name="frm_config_basic" id="frm_config_basic" action="index.php?do=msg&view=weibo" method="post" accept-charset="<?php echo $_K['charset'];?>">
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                      <th scope="row" width="130"><?php echo $_lang['open_which_api'];?><?php echo $_lang['zh_mh'];?></th>
                      <td>
                        <?php if(is_array($oauth_type_list)) { foreach($oauth_type_list as $k => $v) { ?>
<?php if(!isset($weibo_api[$k.'_is_open'])) { ?>
<label for="<?php echo $k;?>_api_open">
<input type="checkbox" name="api[<?php echo $k;?>]" rel="<?php echo $k;?>" value="1" id="<?php echo $k;?>_api_open" <?php if($api_open[$k]=='1') { ?>checked="checked"<?php } ?>><?php echo $v['name'];?>
    </label>
<?php } ?>
    <?php } } ?>
                      </td>
                    </tr>
<tbody id="qq" <?php if(!$api_open['qq']) { ?>style="display:none"<?php } ?>>
<tr>
                 <th scope="row" width="130"> QQappid<?php echo $_lang['zh_mh'];?></th>
                <td>
                    <input type="text" size="50" name="conf[qq_app_id]" id="qq_appid" class="txt"
 value="<?php echo $config_arr['qq_app_id'];?>"
 limit="type:int" msg="QQappid"
 title="<?php echo $_lang['enter_correct_qqappid'];?>" msgArea="txt_qq_appid_msg"/>
<span id="txt_qq_appid_msg"></span>(<?php echo $_lang['qq_api_num'];?>)
<button id="reg" onclick="window.open('http://connect.qq.com/intro/login/')" type="button" class="pill">
<span class="icon plus">&nbsp;</span><?php echo $_lang['click_apply'];?></button>
                </td>
            </tr>
<tr>
 <th scope="row" width="130"> QQappsecret<?php echo $_lang['zh_mh'];?></th>
                <td>
                    <input type="text" size="50" name="conf[qq_app_secret]"
 id="qq_appsecret" value="<?php echo $config_arr['qq_app_secret'];?>"
 limit="type:string" msg="QQappsecret" title="<?php echo $_lang['fill_right'];?>QQappsecret"
 msgArea="txt_qqsecret_msg" class="txt"/>
<span id="txt_qqsecret_msg"></span>(QQ<?php echo $_lang['qq_api_app_secret_num'];?>)
                </td>
            </tr>
</tbody>
<tbody id="alipay" <?php if(!$api_open['alipay']) { ?>style="display:none"<?php } ?>>
<tr>
 <th scope="row" width="130"> <?php echo $_lang['account_from_alipay'];?>appid<?php echo $_lang['zh_mh'];?></th>
                <td>
                    <input type="text" size="50" name="conf[alipay_app_id]"
 id="alipay_appid" value="<?php echo $config_arr['alipay_app_id'];?>"
 limit="type:int" msg="<?php echo $_lang['account_from_alipay'];?>appid" title="<?php echo $_lang['enter_correct_alipay_appid'];?>" 
 msgArea="txt_alipay_appid_msg" class="txt"/>
 <span id="txt_alipay_appid_msg"></span>(<?php echo $_lang['alipay_api_num'];?>)
<button id="reg" onclick="window.open('https://b.alipay.com/order/productDetail.htm?productId=2011042200323155')" type="button" class="pill">
<span class="icon plus">&nbsp;</span><?php echo $_lang['click_apply'];?></button>
                </td>
            </tr>

<tr>
   <th scope="row" width="130"> <?php echo $_lang['account_from_alipay'];?>appsecret<?php echo $_lang['zh_mh'];?></th>
                <td>
                    <input type="text" size="50" name="conf[alipay_app_secret]"
 id="alipay_appsecret" value="<?php echo $config_arr['alipay_app_secret'];?>"
 limit="type:string" msg="<?php echo $_lang['account_from_alipay'];?>appsecret" title="<?php echo $_lang['enter_alipay_api_app_secret_num'];?>"
 msgArea="txt_alipay_secret_msg" class="txt"/>
<span id="txt_alipay_secret_msg"></span>(<?php echo $_lang['alipay_api_app_secret_num'];?>)
                </td>
            </tr>
</tbody>
<tbody id="taobao" <?php if(!$api_open['taobao']) { ?>style="display:none"<?php } ?>>
<tr>
 <th scope="row" width="130"> <?php echo $_lang['account_from_taobao'];?>appid<?php echo $_lang['zh_mh'];?></th>
                <td>
                    <input type="text" size="50" name="conf[taobao_app_id]"
 id="taobao_appid" value="<?php echo $config_arr['taobao_app_id'];?>"
 limit="type:int" msg="<?php echo $_lang['account_from_taobao'];?>appid" title="<?php echo $_lang['enter_correct_taobao_appid'];?>" 
 msgArea="txt_taobao_appid_msg" class="txt"/>
 <span id="txt_taobao_appid_msg"></span>(<?php echo $_lang['taobao_api_num'];?>)
<button id="reg" onclick="window.open('http://open.taobao.com/app_access.htm')" type="button" class="pill">
<span class="icon plus">&nbsp;</span><?php echo $_lang['click_apply'];?></button>
                </td>
            </tr>

<tr>
   <th scope="row" width="130"> <?php echo $_lang['account_from_taobao'];?>appsecret<?php echo $_lang['zh_mh'];?></th>
                <td>
                    <input type="text" size="50" name="conf[taobao_app_secret]"
 id="taobao_appsecret" value="<?php echo $config_arr['taobao_app_secret'];?>"
 limit="type:string" msg="<?php echo $_lang['account_from_taobao'];?>appsecret" title="<?php echo $_lang['enter_taobao_api_app_secret_num'];?>"
 msgArea="txt_taobao_secret_msg" class="txt"/>
<span id="txt_taobao_secret_msg"></span>(<?php echo $_lang['taobao_api_app_secret_num'];?>)
                </td>
            </tr>
</tbody>
<tbody id="sina" <?php if(!$api_open['sina']) { ?>style="display:none"<?php } ?>>
 <tr>
 	 <th scope="row" width="130"> Sina appid<?php echo $_lang['zh_mh'];?></th>
                <td>
                    <input type="text" size="50" name="conf[sina_app_id]" id="sina_app_id"
 value="<?php echo $config_arr['sina_app_id'];?>" limit="type:string"
 msg="Sina appid" title="<?php echo $_lang['enter_sina_api_app_secret_num'];?>" msgArea="txt_sinaappid_msg" class="txt"/>
 <span id="txt_sinaappid_msg"></span>(<?php echo $_lang['sina_api_num'];?>)
<button id="reg" onclick="window.open('http://open.weibo.com/connect')" type="button" class="pill">
<span class="icon plus">&nbsp;</span><?php echo $_lang['click_apply'];?></button>
                </td>
            </tr>
            <tr>
            	<th scope="row" width="130"> Sina appsecret<?php echo $_lang['zh_mh'];?></th>
                <td>
                    <input type="text" size="50" name="conf[sina_app_secret]"
 id="sina_app_secret" value="<?php echo $config_arr['sina_app_secret'];?>"
class="txt" limit="type:string" msg="<?php echo $_lang['account_from_sina_wb'];?>appsecret" title="<?php echo $_lang['enter_sina_api_app_secret_num'];?>"
 msgArea="txt_sinasecret_msg"/>
 <span id="txt_sinasecret_msg"></span>(<?php echo $_lang['sina_api_app_secret_num'];?>)
                </td>
            </tr>
</tbody>
<tbody id="ten" <?php if(!$api_open['ten']) { ?>style="display:none"<?php } ?>>
            <tr>
              <th scope="row" width="130"> Tencent appid<?php echo $_lang['zh_mh'];?></th>
                <td>
                    <input type="text" size="50" name="conf[ten_app_id]" id="ten_app_id"
 value="<?php echo $config_arr['ten_app_id'];?>" limit="type:string" msg="Tencent appid"
  title="<?php echo $_lang['enter_tencent_api_app_secret_num'];?>" msgArea="txt_tenappid_msg" class="txt"/>
 <span id="txt_tenappid_msg"></span>(<?php echo $_lang['tencent_api_num'];?>)
<button id="reg" onclick="window.open('http://open.t.qq.com/develop.php')" type="button" class="pill">
<span class="icon plus">&nbsp;</span><?php echo $_lang['click_apply'];?></button>
                </td>
            </tr>
            <tr>
            	<th scope="row" width="130"> Tencent appsecret<?php echo $_lang['zh_mh'];?></th>
                <td>
                    <input type="text" size="50" name="conf[ten_app_secret]" id="ten_app_secret"
 value="<?php echo $config_arr['ten_app_secret'];?>" limit="type:string" msg="Tencent appsecret"
  title="<?php echo $_lang['enter_tencent_api_app_secret_num'];?>" msgArea="txt_tensecret_msg" class="txt"/>
 <span id="txt_tensecret_msg"></span>(<?php echo $_lang['tencent_api_app_secret_num'];?>)
                </td>
            </tr>
</tbody>
<tbody id="netease" <?php if(!$api_open['netease']) { ?>style="display:none"<?php } ?>>
            <tr>
               <th scope="row" width="130"> <?php echo $_lang['wangyi'];?>appid<?php echo $_lang['zh_mh'];?></th>
                <td>
                    <input type="text" size="50" name="conf[netease_app_id]" id="netease_app_id"
 value="<?php echo $config_arr['netease_app_id'];?>" limit="type:string" msg="<?php echo $_lang['wy'];?>appid"
 title="<?php echo $_lang['enter_163_api_app_secret_num'];?>" msgArea="txt_neteaseappid_msg" class="txt"/>
 <span id="txt_neteaseappid_msg"></span>(<?php echo $_lang['wangyi_api_num'];?>)
<button id="reg" onclick="window.open('http://open.t.163.com/developer/edit')" type="button" class="pill">
<span class="icon plus">&nbsp;</span><?php echo $_lang['click_apply'];?></button>
                </td>
            </tr>
            <tr>
            	<th scope="row" width="130"> <?php echo $_lang['wangyi'];?>appsecret<?php echo $_lang['zh_mh'];?></th>
                <td>
                    <input type="text" size="50" name="conf[netease_app_secret]" id="netease_app_secret"
 value="<?php echo $config_arr['netease_app_secret'];?>" limit="type:string" msg="<?php echo $_lang['wy'];?>appsecret"
  title="<?php echo $_lang['enter_163_api_app_secret_num'];?>" msgArea="txt_neteasesecret_msg" class="txt"/>
  <span id="txt_neteasesecret_msg"></span>(<?php echo $_lang['wangyi_api_app_secret_num'];?>)
                </td>
            </tr>
</tbody>
<tbody id="sohu" <?php if(!$api_open['sohu']) { ?>style="display:none"<?php } ?>>
       		 <tr>
       		    <th scope="row" width="130"> <?php echo $_lang['sohu'];?>appid<?php echo $_lang['zh_mh'];?></th>
            <td>
                <input type="text" size="50" name="conf[sohu_app_id]" id="sohu_app_id" 
value="<?php echo $config_arr['sohu_app_id'];?>" class="txt" limit="type:string" 
msg="sohu appid" title="<?php echo $_lang['enter_sohu_api_app_secret_num'];?>" msgArea="txt_souhuappid_msg"/>
<span id="txt_souhuappid_msg"></span>(<?php echo $_lang['sohu_api_num'];?>)
<button id="reg" onclick="window.open('http://open.t.sohu.com/apps/myapps')" type="button" class="pill">
<span class="icon plus">&nbsp;</span><?php echo $_lang['click_apply'];?></button>
            </td>
       	 </tr>
       	 <tr>
       	 	<th scope="row" width="130"> <?php echo $_lang['sohu'];?>appsecret<?php echo $_lang['zh_mh'];?></th>
            <td>
                <input type="text" size="50" name="conf[sohu_app_secret]" id="sohu_app_secret"
 value="<?php echo $config_arr['sohu_app_secret'];?>" class="txt" limit="type:string"
  msg="sohu appsecret" title="<?php echo $_lang['enter_sohu_api_app_secret_num'];?>" msgArea="txt_souhusecret_msg"/>
  <span id="txt_souhusecret_msg"></span>(<?php echo $_lang['sohu_api_app_secret_num'];?>)
            </td>
         </tr>
</tbody>
 			<th scope="row">&nbsp;</th>
<td>
<div class="clearfix padt10">
                                <button class="positive primary pill button" type="submit" name='submit' value="<?php echo $_lang['submit'];?>"><span class="check icon"></span><?php echo $_lang['submit'];?></button>
                           
                </div>
</td>
                    
                    </table>
                    
                      
                    
        </form>
            </div>
        </div>
        
        
    </div>
<script type="text/javascript">
    $(function(){
    	$(":checkbox[id*='_api_open']").click(function(){
var api_name=$(this).attr("rel");
$("#"+api_name).toggle();
})
    })
</script>
</div>
<script type="text/javascript"
src="../../resource/js/artdialog/artDialog.js"></script>
<script type="text/javascript"
src="../../resource/js/artdialog/jquery.artDialog.js?skin=default"></script>
<script type="text/javascript"
src="../../resource/js/artdialog/artDialog.iframeTools.source.js"></script>
<script type="text/javascript" src="../../lang/<?php echo $language?>/script/lang.js"></script>
<script type="text/javascript">
In.add('form_and_validation', {
path : "../../resource/js/system/form_and_validation.js",
type : 'js'
});
In.add('xheditor', {
path : "../../resource/js/xheditor/xheditor.js",
type : 'js'
});
In.add('mousewheel', {
path : "tpl/js/jquery.mousewheel.min.js",
type : 'js'
});
//In.add('styleswitch',{path:"tpl/js/styleswitch.js",type:'js'});
In.add('table', {
path : "tpl/js/table.js",
type : 'js'
});
In.add('calendar', {
path : "../../resource/js/system/script_calendar.js"
});
In('form_and_validation', 'xheditor', 'mousewheel', 'table', 'calendar');
</script>

<script type="text/javascript">
function cdel(o, s) {
d = art.dialog;
var c = "<?php echo $_lang['you_comfirm_delete_operate'];?>";
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
var c = "<?php echo $_lang['you_comfirm_delete_operate'];?>";
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
d.confirm("<?php echo $_lang['confirm'];?>" + c + '?', function() {
$(".sbt_action").val(c);
$("#" + frm).submit();
});
} else {
d.alert("<?php echo $_lang['has_none_being_choose'];?>");
}
return false;
}
</script>
<?php if(KEKE_DEBUG) { ?>
<div
style="background-color: red; color: #fff; width: 400px; text-align: center;">
querys:
<?php echo db_factory::create()->get_query_num() ?>
&nbsp; times:
<?php echo kekezu::execute_time() ?>
</div>

<?php } ?>
</body>
</html>
<?php keke_tpl_class::ob_out();?>