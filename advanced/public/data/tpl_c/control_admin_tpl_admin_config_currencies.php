<?php keke_tpl_class::checkrefresh('control/admin/tpl/admin_config_currencies', '1418774207' );?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
    	<h1><?php echo $_lang['currencies_manage'];?></h1>
    </div>
<div class="box tip clearfix p_relative">
    	<div class="control"><a href="javascript:void(0);" onclick="$(this).parent().parent().fadeOut();" title=<?php echo $_lang['close'];?>><b>&times;</b></a></div>
        <div class="title"><h2><?php echo $_lang['tips'];?></h2></div>
        <div class="detail pad10">
            <ul style='color:red'>
                <li><?php echo $_lang['open_currencies_info'];?></li>
            </ul>
        </div>
</div>
<div class="box list">
 <div class="title"><h2><?php echo $_lang['currencies_list'];?></h2></div>
  <div class="detail">
  <div id="ajax_dom">
      <table cellpadding="0" cellspacing="0">
        <tbody>
          <tr>
          <th width="10%"><?php echo $_lang['currency_id'];?></th>
            <th width="20%"><?php echo $_lang['currency'];?></th>
            <th width="30%"><?php echo $_lang['currency_code'];?></th>
<th width="20%"><?php echo $_lang['currencies'];?></th>
            <th width="20%"><?php echo $_lang['operate'];?></th>
          </tr>
          <?php if(!empty($currencies_config)) { ?>
          <?php if(is_array($currencies_config)) { foreach($currencies_config as $k => $v) { ?>
              <tr class="item">
              <td><?php echo $v['currencies_id']?></td>
              <?php if($default_currency==$v['code']) { ?>
              <td style='font-weight:bold'><?php echo $v['title'];?><?php echo $_lang['default'];?></td>
              <?php } else { ?>
              <td><?php echo $v['title'];?></td>
              <?php } ?>
              <td><?php echo $v['code']?></td>
              <td><?php echo $v['value']?></td>
  <td> 
<a href="<?php echo $url?>&op=edit&cid=<?php echo $v['currencies_id']?>" class="button dbl_target"><span class="cog icon"></span><?php echo $_lang['config'];?></a>
<a href="<?php echo $url?>&ac=update&code=<?php echo $v['code']?>" class="button"><span class="uparrow icon"></span><?php echo $_lang['update']?></a>
<a href="<?php echo $url?>&op=list&cid=<?php echo $v['currencies_id']?>&ac=del"  class="button"><span class="negative icon"></span><?php echo $_lang['delete'];?></a>
  </td>
             </tr>
          <?php } } ?>
          <?php } ?>
          </tbody>
  <tfoot>
  	 <tr class="item">
                <td colspan="6" align="left">
                	 <button class="positive primary pill button t_r" type="button" value=<?php echo $_lang['add'];?> onclick="location.href='index.php?do=config&view=currencies&op=edit'"><span class="check icon"></span><?php echo $_lang['add'];?></button>
                	 <button class="positive primary pill button t_r" type="button" value="<?php echo $_lang['mi_update'];?>" onclick="location.href='index.php?do=config&view=currencies&ac=update'"><span class="uparrow icon"></span><?php echo $_lang['mi_update']?></button>
</td>
 </tr>
  </tfoot>
         </table>
         <div class="page">
         	<?php echo $pages['page'];?>
         </div>
         </div>
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