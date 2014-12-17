<?php keke_tpl_class::checkrefresh('control/admin/tpl/admin_payitem_index', '1418779482' );?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
    	<h1><?php echo $_lang['payitem_manage'];?></h1>
 <div class="tool"> 
        <a href="index.php?do=<?php echo $do?>&view=<?php echo $view?>&user_type=witkey" <?php if($user_type=='witkey') { ?>class="here"<?php } ?>><?php echo $_lang['witkey'];?></a>
        <a href="index.php?do=<?php echo $do?>&view=<?php echo $view?>&user_type=employer" <?php if($user_type=='employer') { ?>class="here"<?php } ?>><?php echo $_lang['employer'];?></a>
</div>
    </div>
  <div class="box list">
  	<div class="title"><h2><?php echo $_lang['payitem_manage'];?></h2></div>
        	<div class="detail">
        		<form action="index.php?do=<?php echo $do?>&view=<?php echo $view?>&op=add" method="post">
        			 <table cellpadding="0" cellspacing="0">
            	<tr>
               <!-- <th scope="row">
                    <?php echo $_lang['serve_id'];?>
                </th>-->
                <th scope="row">
                    <?php echo $_lang['use_status'];?>
                </th>
               <th scope="row">
                    <?php echo $_lang['serve_name'];?>
                </th>
                <th scope="row">
                  <?php echo $_lang['serve_icon'];?>
                </th>
            
               <th scope="row">
                    <?php echo $_lang['serve_cost'];?>
                </th>
           
                <th scope="row" >
                   <?php echo $_lang['user_type'];?>
                </th>
                <th scope="row">
                    <?php echo $_lang['set_to_disable'];?>
                </th>
<th scope="row">
       	         <?php echo $_lang['config'];?>       
                </th>
<th scope="row">
                  <?php echo $_lang['uninstall'];?>
                </th>

            </tr>
       <?php if(is_array($payitem_arr)) { foreach($payitem_arr as $v) { ?>
 
            <tr>
            <!--    <td>
                    <?php echo $v['item_id']?>
                </td>-->
                <td>
                    <?php if($v['is_open']==1) { ?>
                    <?php echo $_lang['yes'];?><?php } else { ?><font color="red"><?php echo $_lang['disable'];?></font><?php } ?>
                </td>
                <td>
                    <?php echo $v['item_name']?>
                </td>
                <td>
                   <img src="../../<?php echo $v['small_pic'];?>" />
                </td>
                <td>
                   <?php  echo keke_curren_class::output(floatval($v['item_cash']),-1);  ?>/<?php echo $unit[$v['item_standard']];?>
                </td>
               
                <td>
                     <?php echo $type_arr[$v['user_type']];?>
                </td>
                <td>
                    <?php if($v['is_open']==1) { ?>
<a href="index.php?do=<?php echo $do?>&view=<?php echo $view?>&user_type=<?php echo $v['user_type']?>&op=close&item_id=<?php echo $v['item_id'];?>&payitem_name=<?php echo $v['item_name']?>"  class="button"><span class="cross icon"></span><?php echo $_lang['set_to_disable'];?></a>
                    <?php } else { ?>
<a href="index.php?do=<?php echo $do?>&view=<?php echo $view?>&user_type=<?php echo $v['user_type']?>&op=open&item_id=<?php echo $v['item_id'];?>&payitem_name=<?php echo $v['item_name']?>" class="button" ><span class="check icon"></span><?php echo $_lang['set_to_enable'];?></a>
                    <?php } ?>
</td>
<td>
<a href="index.php?do=<?php echo $do?>&view=config&item_code=<?php echo $v['item_code'];?>" class="button"><span class="cog icon"></span><?php echo $_lang['config'];?></a>
</td>
<td>
<a href="index.php?do=<?php echo $do?>&view=<?php echo $view?>&item_id=<?php echo $v['item_id']?>&op=del" onclick="return confirm(<?php echo $_lang['comfirm_to_uninstall_model'];?>);" class="button"><span class="downarrow icon"></span><?php echo $_lang['uninstall'];?></a>
                </td>
            </tr>
 
  <?php } } ?>
            
                <tr>
                    <td colspan="7">
                        <?php echo $_lang['install_payitem_input_contents'];?>: <input type="text" name="txt_item_code" value="" class="txt">
<button type="submit" name="submit" class="button pill" value=<?php echo $_lang['install'];?> ><span class="uparrow icon"></span><?php echo $_lang['install'];?>
</button>
                    </td>
                </tr>
           
        </table>
 </form>
   </div>

</div>
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