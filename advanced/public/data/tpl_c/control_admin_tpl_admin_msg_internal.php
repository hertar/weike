<?php keke_tpl_class::checkrefresh('control/admin/tpl/admin_msg_internal', '1418776497' );?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
  <h1><?php echo $_lang['sms_internal_tpl_title'];?></h1>
  <div class="tool">         
    <a href="index.php?do=msg&view=internal" <?php if($view == 'internal') { ?>class="here"<?php } ?> > <?php echo $_lang['sms_config'];?></a>
    <a href="index.php?do=msg&view=intertpl" <?php if($view == 'intertpl') { ?>class="here"<?php } ?> > <?php echo $_lang['sms_tpl_config_edit'];?></a>
  </div>
</div>
<div class="box post">

<div class="tab">
       <a href="index.php?do=msg&view=internal" <?php if(!$obj) { ?> class="select"<?php } ?>><?php echo $_lang['all'];?></a>
       <?php if(is_array($message_send_obj)) { foreach($message_send_obj as $k => $v) { ?>
   		<a href="index.php?do=msg&view=internal&obj=<?php echo $k;?>" <?php if($obj==$k) { ?> class="select"<?php } ?>><?php echo $v;?></a>
   <?php } } ?>
   </div>
 <div class="tabcon">
  <div class="title"><h2> <?php echo $_lang['sms_send_config_manage'];?></h2></div>
  <div style="clear:both;"></div>
<div class="detail">
    <form name="frm_config_msg" action="#" method="post">
        <input type="hidden" name="hdn_msg_config_id" value="<?php echo $msg_cofig_id;?>">
        <table  border="0" cellspacing="0" cellpadding="0">
            <tr>
        		<th scope="row"><?php echo $_lang['config_num'];?></th>
<th scope="row"><?php echo $_lang['config_name'];?></th>
<th scope="row"><?php echo $_lang['basic_config'];?></th>
<th scope="row"><?php echo $_lang['operate'];?></th>
            </tr>
            	<?php if(is_array($msg_config)) { foreach($msg_config as $k => $v) { ?>
<tr><?php $config=unserialize($v['v']); ?>
 <td scope="row">
                    <?php echo $v['config_id'];?>
                	</td>
<td><?php echo $v['desc']?></td>
                <td><?php $send_type=unserialize($v['v']);$is_open=array_sum($send_type); ?>
<label for="send_close_<?php echo $v['config_id'];?>">
<input type="radio" name="fds[<?php echo $v['config_id'];?>][send_open]" value="0" id="send_close_<?php echo $v['config_id'];?>" onclick="hide_me(<?php echo $v['config_id']?>);" <?php if($is_open==0) { ?>checked="checked"<?php } ?>><?php echo $_lang['close'];?>
</label>
<label for="send_open_<?php echo $v['config_id'];?>">
<input type="radio" name="fds[<?php echo $v['config_id'];?>][send_open]" value="1" id="send_open_<?php echo $v['config_id'];?>"  onclick="show_me(<?php echo $v['config_id']?>);"<?php if($is_open!=0) { ?>checked="checked"<?php } ?>><?php echo $_lang['open'];?>
                        </label>
<div style="display:<?php if($is_open==0) { ?>none<?php } else { ?>inline<?php } ?>" id="show_send_type_<?php echo $v['config_id'];?>">
<?php if(is_array($message_send_type['0'])) { foreach($message_send_type['0'] as $k2 => $v2) { ?>
<label for="cbk_<?php echo $k;?>_<?php echo $k2;?>">
<input type="checkbox" id="cbk_<?php echo $k;?>_<?php echo $k2;?>" name="ckb[<?php echo $v['config_id'];?>][<?php echo $v2?>]" value="1" <?php if($send_type[$v2]!=0) { ?>checked="checked"<?php } ?>><?php echo $message_send_type['1'][$v2]?>&nbsp;&nbsp;&nbsp;&nbsp;
</label>
<?php } } ?>
</div>
</td>
<td>
<button type="button" class="button" value="<?php echo $_lang['edit_tpl'];?>" onclick="window.location.href='index.php?do=msg&view=intertpl&slt_tpl_code=<?php echo $v['k']?>'"/>
<span class="pen icon"></span><?php echo $_lang['edit_tpl'];?>
</button>
                </td>
            </tr>
<?php } } ?>
<tr>
                	<td colspan="4">
                	
                    <div class="clearfix">
                            <button class="positive primary pill button" type="submit" name='sbt_edit' value="<?php echo $_lang['submit'];?>"><span class="check icon"></span><?php echo $_lang['submit'];?></button>
</div>
   </td>
               </tr>	
            
        </table>
<div class="page"><?php echo $pages['page'];?></div>
    </form>
</div></div></div>
<script type="text/javascript">
function hide_me(i){
$("#show_send_type_"+i).hide();
}
function show_me(i){
$("#show_send_type_"+i).css("display","inline");
}
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