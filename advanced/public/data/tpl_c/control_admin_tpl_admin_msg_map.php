<?php keke_tpl_class::checkrefresh('control/admin/tpl/admin_msg_map', '1418778614' );?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
    	<h1><?php echo $_lang['map_api'];?></h1>
</div>

<div class="box post">
   <div class="tabcon">
      <div class="title"><h2><?php echo $_lang['map_api'];?></h2></div>
         <div class="detail">
         	<form name="frm_map" id="frm_map" action="index.php?do=<?php echo $do?>&view=<?php echo $view?>" method="post">
           	  <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
              	 <th scope="row" width="130"><?php echo $_lang['api_select'];?><?php echo $_lang['zh_mh'];?></th>
                  <td>
                   	<?php if(is_array($api_open)) { foreach($api_open as $k => $v) { ?>
<?php if($k=='baidu_api') { ?>
    <label for="<?php echo $k?>">
<input type="checkbox" name="open" id="<?php echo $k?>" value="<?php echo $k;?>" <?php if($v=='1') { ?>checked="checked"<?php } ?>><?php echo $map_apis[$k]['desc'];?>
</label>
<?php } ?>
<?php } } ?>
  </td>
</tr>
             <!-- <tr>
              	 <th scope="row" width="130"><?php echo $_lang['google_map'];?><?php echo $_lang['zh_mh'];?></th>
<td>
                   <tr>
                        <th scope="row" width="140">Google Maps API<?php echo $_lang['zh_mh'];?></th>
                        <td>
                        	<input type="text" name="conf[google_api]" id="google_api" value="<?php echo $map_apis['google_api']['v'];?>" class="txt" style="width:260px;" msgArea="span_google"
limit="required:true;len:2-200" title="&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_lang['enter_google_map_api_key'];?>" msg="&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_lang['enter_google_map_api_key'];?>"/> 
<button id="reg" onclick="window.open('http://code.google.com/intl/zh-CN/apis/maps/signup.html')" type="button" class="pill">
<span class="icon plus">&nbsp;</span><?php echo $_lang['click_apply'];?></button>
<span id="span_google"></span>
</td>
                    </tr>
</td>
</tr>-->
              
                   <tr>
                        <th scope="row" width="140">Baidu Maps API<?php echo $_lang['zh_mh'];?></th>
                        <td>
                        	<input type="text" name="conf[baidu_api]" id="baidu_api" value="<?php echo $map_apis['baidu_api']['v'];?>" class="txt" style="width:300px;" msgArea="span_baidu"
limit="required:true;len:2-200" title="&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_lang['enter_baidu_map_api_key'];?>" msg="&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_lang['enter_baidu_map_api_key'];?>"/> 
<span id="span_baidu"></span>&nbsp;&nbsp;<?php echo $_lang['baidu_map_description'];?>
</td>
                    </tr>
 
    <tr>
<th scope="row">&nbsp;</th>
<td>
<div class="clearfix padt10">
                        		 <button class="positive primary pill button" type="submit" id="sbt_edit" name='sbt_edit' value="<?php echo $_lang['submit'];?>" onclick="return checkForm(document.getElementById('frm_map'))"><span class="check icon"></span><?php echo $_lang['submit'];?></button>
                        		 
                			</div>
</td>
</tr>

           		 </form>
</table>
</div>
</div>
</div>
<script type="text/javascript">

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