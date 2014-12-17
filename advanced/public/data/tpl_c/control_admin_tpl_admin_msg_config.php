<?php keke_tpl_class::checkrefresh('control/admin/tpl/admin_msg_config', '1418778764' );?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
    	<h1><?php echo $_lang['msg_tpl_page_title'];?></h1>
         <div class="tool">       
   <a href="index.php?do=<?php echo $do?>&view=<?php echo $view?>&op=config" class="here"><?php echo $_lang['sms_config'];?></a>
           <a href="index.php?do=<?php echo $do?>&view=send"><?php echo $_lang['send_sms'];?></a>
         </div>

</div>

<div class="box post">
   <div class="tabcon">
      <div class="title"><h2><?php echo $_lang['account_info'];?></h2></div>
         <div class="detail">
         	<?php if(!$bind_info||$ac=='change') { ?>
             <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr class="apply_bind">
                      <th scope="row" width="130"><?php echo $_lang['apply'];?><?php echo $_lang['zh_mh'];?></th>
                      <td>
                       	<a href="http://www.kekezu.com/index.php?do=increase_2" style="color:red" target="_blank"><?php echo $_lang['apply_for_account'];?></a>（<?php echo $_lang['click_to_apply_account'];?>）
                      </td>
                  </tr>
<tr class="apply_bind">
<th scope="row" width="130"><?php echo $_lang['bind'];?><?php echo $_lang['zh_mh'];?></th>
                        <td>
                        	<button class="pill negative" type="button" id="bind" value="<?php echo $_lang['bind_account'];?>" name="searchsubmit"><span class="icon plus">&nbsp;</span><?php echo $_lang['bind_account'];?></button>
                       </td>
                </tr>
<tbody id="account" style="display:none">
<form action="index.php?do=<?php echo $do?>&view=<?php echo $view?>&op=config" id="frm_bind" name="frm_bind" method="post">
<tr>
<th scope="row" width="130"><?php echo $_lang['sms_account'];?><?php echo $_lang['zh_mh'];?></th>
                        <td>
                        	 <input type="text" class="txt"
  name="conf[mobile_username]"
  value="<?php echo $mobile_u;?>"
  id="mobile_username" 
  limit="required:true;len:2-"
  msg="<?php echo $_lang['account_cannot_be_null'];?>"
  title="<?php echo $_lang['input_cellphone_validate_code'];?>"
  msgArea="span_mobile_username"><span id="span_mobile_username"></span>
                       </td>
                    </tr>
<tr>
                      <th scope="row" width="130"><?php echo $_lang['sms_password'];?><?php echo $_lang['zh_mh'];?></th>
                        <td>
                        	 <input type="password" class="txt"
  name="conf[mobile_password]"
  value="<?php echo $mobile_p;?>"
  id="mobile_passwrd"
  limit="required:true;len:2-"
  msg="<?php echo $_lang['password_cannot_be_null'];?>"
  title="<?php echo $_lang['input_cellphone_password'];?>"
  msgArea="span_mobile_password"><span id="span_mobile_password"></span>
                      </td>
                    </tr>
                   <tr>
<th scope="row">&nbsp;</th>
<td>
<div class="clearfix padt10">
                        		 <button class="positive primary pill button" type="submit" name='sbt_edit' value="<?php echo $_lang['submit'];?>"><span class="check icon"></span><?php echo $_lang['submit'];?></button>
                        		  
                			</div>
</td>
</tr>

           		 </form>
</tbody>
</table>
<?php } else { ?>
            <table width="96%" height="200" border="0" cellspacing="0" cellpadding="0" class="tab_m t_l">
               	<tr>
               		 <th scope="row"><?php echo $_lang['account_info'];?><?php echo $_lang['zh_mh'];?></th>
                        <td>
                        	<input type="txt" readonly="readonly" value="<?php echo $mobile_u;?>" class="txt">
<a href="index.php?do=<?php echo $do?>&view=<?php echo $view?>&op=config&ac=change"><?php echo $_lang['account_change'];?></a>
                       </td>
                    </tr>
<tr>
<th scope="row"><?php echo $_lang['balance_inquiries'];?><?php echo $_lang['zh_mh'];?></th>
                        <td>
                        	<div id="remainfee"></div>
                        	 
                      		 <a class="button" href="http://www.kekezu.com/index.php?do=increase_3" target="_blank"><span class="icon book">&nbsp;</span>&nbsp;</span><?php echo $_lang['user_recharge'];?></a>（<?php echo $_lang['click'];?><?php echo $_lang['user_recharge'];?>）
                       </td>
                    </tr>
 
</table>
 <?php } ?>	
</div>
</div>
</div>
<script type="text/javascript">
var ac = "<?php echo $ac?>";
if(ac=='change'){
$(".apply_bind").hide();
$("#account").show();
}
 $(function(){
 	$("#bind").click(function(){
$("#account").show();
})
$("#sbt_edit").click(function(){
if(checkForm(document.getElementById("frm_bind"))){
$("#frm_bind").submit();
}
})
 
  
  $("#remainfee").ready(function(){
$.post("index.php?do=<?php echo $do?>&view=<?php echo $view?>&op=manage&remain_fee=1",function(json){
if(json.status==1){
var num = json.msg.balance;
var str="余额:<span>"+num+"</span>元<br>";
$("#remainfee").html(str);
}else{
alert(json.msg);
showDialog(json.msg,'alert',"<?php echo $_lang['error_notice'];?>");return false;
}
},'json')
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
</html><?php keke_tpl_class::ob_out();?>