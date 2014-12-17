<?php keke_tpl_class::checkrefresh('control/admin/tpl/admin_payitem_buy', '1418779485' );?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
    	<h1><?php echo $_lang['buy_spend_payitem_record'];?></h1>
        
</div>
    <!--页头结束-->

    
        <div  class="box search p_relative">
    	<div class="title"><h2><?php echo $_lang['search'];?></h2></div>
        <div class="detail" id="detail">
           
    <form action="index.php?do=<?php echo $do;?>&view=<?php echo $view;?>" method="get" name="s" id="sl">
            	<input type="hidden" name="do" value="<?php echo $do?>">
<input type="hidden" name="view" value="<?php echo $view?>">
                <table cellspacing="0" cellpadding="0">
<tbody>
<tr>
<th>ID</th>
                            <td><input type="text" value="<?php echo $w['record_id']?>" name="w[record_id]" class="txt"/></td>
<th><?php echo $_lang['username'];?>*</th>
                            <td><input type="text" value="<?php echo $w['username']?>" name="w[username]" class="txt"/></td>
<th><?php echo $_lang['buy_or_spend_type'];?></th>
                            <td><select name="w[use_type]">
                            	<option value=""><?php echo $_lang['please_choose'];?></option>
                            	<?php if(is_array($buy_use_type)) { foreach($buy_use_type as $k => $v) { ?>
                            	<option value="<?php echo $k?>" <?php if($w['use_type']==$k) { ?>selected="selected"<?php } ?>><?php echo $v;?></option>
<?php } } ?>
                            </select>*<?php echo $_lang['search_by_like'];?>
</td>
 </tr>
<tr>
<th><?php echo $_lang['pay_item_type'];?></th>
                            <td><select name="w[item_code]">
                            	<option value=""><?php echo $_lang['please_choose'];?></option>
                            	<?php if(is_array($add_service_type)) { foreach($add_service_type as $k => $v) { ?>
                            	<option value="<?php echo $k?>" <?php if($w['item_code']==$k) { ?>selected="selected"<?php } ?>><?php echo $v;?></option>
<?php } } ?>
                            </select>
</td>
 <th>
                         <?php echo $_lang['result_order'];?>
                        </th>
                        <td>
                     <select name="w[ord][]">
                           <option value="record_id" <?php if($w['ord']['0']=='record_id' or !isset($w['ord']['0'])) { ?> selected="selected"<?php } ?>><?php echo $_lang['default'];?><?php echo $_lang['order'];?></option>
                           <option value="on_time" <?php if($w['ord']['0']=='on_time' ) { ?> selected="selected"<?php } ?>><?php echo $_lang['spend_time'];?></option>
                      </select>
                      <select name="w[ord][]">
                            <option <?php if($w['ord']['1']=='desc' or !isset($w['ord']['1'])) { ?>selected="selected" <?php } ?> value="desc"><?php echo $_lang['desc'];?></option>
                            <option <?php if($w['ord']['1']=='asc') { ?>selected="selected" <?php } ?> value="asc"><?php echo $_lang['asc'];?></option>
                      </select>
                       </td>
                        <th>
                    <?php echo $_lang['list_result'];?>
                         </th>
                        <td>
                            <select name="w[page_size]">
                               <option value="10" <?php if($w['page_size']=='10') { ?>selected="selected"<?php } ?>><?php echo $_lang['page_size'];?>10</option>
                               <option value="20" <?php if($w['page_size']=='20') { ?>selected="selected"<?php } ?>><?php echo $_lang['page_size'];?>20</option>
                               <option value="30" <?php if($w['page_size']=='30') { ?>selected="selected"<?php } ?>><?php echo $_lang['page_size'];?>30</option>
                             </select>
                             <button class="pill" type="submit" value=<?php echo $_lang['search'];?> name="sbt_search">
                                <span class="icon magnifier">&nbsp;</span><?php echo $_lang['search'];?>
                              </button>
                           	</td>
                     </tr>
 
                    </tbody>
                </table>
            </form>

        </div>
    </div>
    <!--搜索结束-->

    <div class="box list">
    	<div class="title"><h2><?php echo $_lang['buy_spend_list'];?></h2></div>
        <div class="detail">
        	<form  action="index.php?do=<?php echo $do;?>&view=<?php echo $view;?>"  id='frm_list' method="post">
        	<div id="ajax_dom">
        	<input type="hidden" name="page" value="<?php echo $page;?>" />
              <table cellpadding="0" cellspacing="0">
                <tbody>
                  <tr>
                    <th width="8%">ID
</th>
                    <th width="10%"><?php echo $_lang['pay_item_type'];?></th>
                    <th width="10%"><?php echo $_lang['buy_or_spend_type'];?></th>
                    <th width="10%"><?php echo $_lang['username'];?></th>
                    <th width="10%"><?php echo $_lang['spend_type'];?></th>
<th width="10%"><?php echo $_lang['spend_cost'];?></th>
                    <th width="10%"><?php echo $_lang['spend_number'];?></th>
                    <th width="17%"><?php echo $_lang['spend_time'];?></th>
                  </tr>
                  
                  <?php if(is_array($payitem_record_arr)) { foreach($payitem_record_arr as $k => $v) { ?>
                  <tr class="item">
                 	<td><?php echo $v['record_id'];?></td>
<td><?php echo $add_service_type[$v['item_code']];?></td>
                    <td><?php echo $buy_use_type[$v['use_type']];?></td>
                    <td><?php echo $v['username'];?></td>
                    <td><?php if($v['obj_type']=='task') { ?>任务<?php } else { ?>商品/服务<?php } ?></td>
                    <td><?php  echo keke_curren_class::output(floatval($v['use_cash']),-1);  ?></td>
                    <td><?php echo $v['use_num'];?></td>
                    <td><?php if($v['on_time']){echo date('Y-m-d H:i:s',$v['on_time']); } ?></td>
                   </tr>
                  <?php } } ?>
  <tr>
                    <td colspan="8">
                               
                    </td>
                  </tr>
                </tbody>
              </table>
  <div class="page"><?php echo $pages['page'];?></div>
</div>
        	</form>
<div class="box tip clearfix p_relative">
        		<div class="title t_r"><h2><span><?php echo $_lang['user_buy_the_total_amount'];?><?php echo $_lang['zh_mh'];?><font color="red"><?php  echo keke_curren_class::output(floatval($all_buy_pro['cash']),-1);  ?></font></span></h2></div>
</div>
        </div>       
    </div>
<!--主体结束-->
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