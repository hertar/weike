<?php
use yii\widgets\LinkPager;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>keke admin</title>
<link href="/public/tpl/css/admin_management.css" rel="stylesheet" type="text/css" />
<link href="/public/resource/css/buttons.css" rel="stylesheet" type="text/css" />
<link title="style1" href="/public/tpl/skin/default/style.css" rel="stylesheet" type="text/css" />
<!--<link title="style2" href="tpl/skin/light/style.css" rel="stylesheet" type="text/css" />-->
<script type="text/javascript" src="/public/resource/js/jquery.js"></script>
<script type="text/javascript" src="/public/resource/js/system/keke.js"></script>
<script type="text/javascript" src="/public/resource/js/in.js"></script>
</head>
<body class="frame_body">
<div class="frame_content">
<div id="append_parent"></div>
<div class="page_title">
    <h1>财务模块</h1>
    <div class="tool">
  <a href="index.php?r=finance/revenue" >财务概况</a>
<a href="index.php?r=finance/detail" class="here">财务明细</a>
<a href="index.php?r=finance/report">财务分析</a>
<a href="index.php?r=finance/recharge">充值审核</a>
<a href="index.php?r=finance/withdraw">提现审核</a>
    </div>
</div>
<div class="box search p_relative">
    <div class="title">
        <h2>搜索</h2>
    </div>
    <div class="detail" id="detail">
        <form action="index.php?r=finance/detail_search" method="post" id=frm_user_search>
        	<input type="hidden" value="1" name="page">
        	 <table cellspacing="0" cellpadding="0">
        	 	
                <tbody>
                    <tr>
                    	 <th>
                            财务编号 
                         </th>
                        <td>
                            <input type="text" value="" name="w[fina_id]" class="txt" onkeyup="clearstr(this);"/>
                        </td>
 <th>
                            用户名*
                        </th>
                        <td>
                            <input type="text" value="" name="w[username]" class="txt"/>
                        </td>
 <th>
                            财务用途                        </th>
                        <td>
                            <select name="w[fina_action]">
                 <option value="">所有的</option>
                        <option value="realname_auth" >实名认证 </option>
                        <option value="bank_auth" >银行认证 </option>
                        <option value="email_auth" >邮箱认证 </option>
                        <option value="mobile_auth" >手机认证 </option>
                        <option value="buy_vip" >购买vip 身份 </option>
                        <option value="buy_service" >购买商品 </option>
                        <option value="pub_task" >发布任务 </option>
                        <option value="hosted_reward" >托管赏金 </option>
                        <option value="withdraw" >提现 </option>
                        <option value="task_delay" >任务延期 </option>
                        <option value="ext_cash" >额外奖励 </option>
                        <option value="offline_charge" >线下充值 </option>
                        <option value="task_bid" >任务中标 </option>
                        <option value="task_fail" >任务失败退款 </option>
                        <option value="task_prom_fail" >任务推广失败退款 </option>
                        <option value="sale_service" >卖服务费用 </option>
                        <option value="admin_recharge" >管理员充值 </option>
                        <option value="withdraw_fail" >提现失败返还 </option>
                        <option value="report" >仲裁处理 </option>
                        <option value="payitem" >增值服务 </option>
                        <option value="prom_reg" >推广注册 </option>
                        <option value="task_fj" >任务反金 </option>
                        <option value="rights_return" >维权返还 </option>
                        <option value="task_auto_return" >自动选稿余款 </option>
                        <option value="order_cancel" >订单终止返款 </option>
                        <option value="online_charge" >在线余额充值 </option>
                        <option value="order_charge" >订单充值 </option>
                        <option value="prom_pub_task" >推广发布任务 </option>
                        <option value="user_charge" >用户手动充值 </option>
                        <option value="prom_bid_task" >推广承接任务 </option>
                        <option value="prom_service" >推广购买服务 </option>
                        <option value="prom_bank_auth" >推广注册+银行认证 </option>
                        <option value="prom_realname_auth" >推广注册+实名认证 </option>
                        <option value="prom_email_auth" >推广注册+邮箱认证 </option>
                        <option value="prom_mobile_auth" >推广注册+手机认证 </option>
                        <option value="prom_enterprise_auth" >推广注册+手机认证 </option>
                        <option value="enterprise_auth" >企业认证 </option>
                        <option value="task_remain_return" >任务余款返还 </option>
                        <option value="task_hosted_return" >托管余款返还 </option>
                        <option value="admin_charge" >网站手动充值 </option>
                        <option value="host_deposit" >托管诚意金 </option>
                        <option value="deposit_return" >诚意金退还 </option>
                        <option value="host_return" >托管佣金返还 </option>
                        <option value="cancel_bid" >撤销中标 </option>
                        <option value="host_split" >托管佣金分配 </option>
               </select>
                       </td>
<th>&nbsp;</th>
<td>&nbsp;</td>
</tr>
<tr>
 <th>
                            财务类型                        </th> 
                        <td>
                            <select name="w[fina_type]">
                                <option value="">所有的</option>
                   				<option value="out" >支出</option>
                    			<option value="in" >收入</option>
                           </select>
                       </td>
                        <th>
                           结果排序                        </th>
                        <td>
                        <select name="paixu">
                           <option value="fina_id"  selected="selected">默认排序</option>
                           <option value="fina_time" >结算时间</option>
                      </select>
                      <select name="zengjian">
                            <option selected="selected"  value="desc">递减</option>
                            <option  value="asc">递增</option>
                      </select>
                       </td>
                        <th>
                                                    显示结果                         </th>
                        <td>
                            <select name="w[page_size]">
                               <option value="10" >每页显示10</option>
                               <option value="20" >每页显示20</option>
                               <option value="30" >每页显示30</option>
                             </select>
                             <button class="pill" type="submit" value="搜索" name="sbt_search">
                                <span class="icon magnifier">&nbsp;</span>搜索                              </button>
                           </td>
                        </tr>
                  </tbody>
            </table>
        </form>
    </div>
 </div>
<!--搜索结束-->
<div class="box list">
    <div class="title">
        <h2>统计信息</h2>
    </div>
     <div class="detail">
        <form action="index.php?do=finance&view=all" method="post" id=frm_art_action>
 	<input type="hidden" value="1" name="page">
<input type="hidden" name="w[page_size]" value="10">
<div id="ajax_dom">
<input type="hidden" value="1" name="page"/>
  <table cellpadding="0" cellspacing="0">
             <tbody>
                 <tr >
    <th>
    <input type="checkbox" id="checkbox" onclick="checkall();" class="checkbox" >ID
    </th>	 
                        <th>
                          类型                        </th>
                        <th>
                           财务用途                        </th>
                        <th>
                          用户                        </th>
                        <th>
                            金额                        </th>
                        <th>
                           用户余额                        </th>
                        <th>
                           代金券                        </th>
                        <th>
                         用户剩余代金券                        </th>
                        <th>
                            时间</th>
                        <th>
                           删除                        </th>
                    </tr>
                     <?php foreach($model as $key=>$val){?>
  			<tr class="item" id="<?php echo $val['fina_id'];?>">
                    	<td>
                    		<input type="checkbox" name="ckb" class="checkbox" value="<?php echo $val['fina_id'];?>">
                                    <?php echo $val['fina_id'];?>
                        </td>
                        
                        <td>
                          <?php if($val['fina_type']=='out'){
                              echo "支出";
                          }else if($val['fina_type']=='in'){
                              echo "收入";
                          }?>                       </td>
                        <td>
                        	任务失败退款                        </td>
                        <td>
                        <?php echo $val['username'];?>                       </td>
                        <td>
                            <font color="red">
                                ￥<?php echo $val['fina_cash']; ?>元                            </font>
                        </td>
                        <td>
                            <font color="red">
                                ￥<?php echo $val['user_balance']; ?>元                            </font>
                        </td>
                        <td>
                            <font color="red">
                           <?php echo $val['fina_credit']; ?></font>
                        </td>
                        <td>
                            <font color="red">
                              <?php echo $val['user_credit']; ?></font>
                        </td>
                        <td>
                            <?php echo date('Y-m-d H:m:s',time($val['fina_time']));?> 
                        </td>
                        <td>
                            <a href=""
                               onclick="return cdel(<?php echo $val['fina_id']?>);" class="button">
                                <span class="trash icon"></span>删除</a>
                        </td>
                    </tr>
             
                     <?php } ?>
           
                    <tr>
                    <td colspan="10">
                               
                           <div class="clearfix">
                           	 
<label for="checkbox">全选</label>　
<input type="hidden" name="sbt_action" value="批量删除" />
                           	<button name="sbt_action" type="submit" value="批量删除" 
       onclick="return batch_act(this,'frm_list');" class="pill negative"><span class="icon trash">        
                                    </span>批量删除</button>
  </div>
                    </td>
                  </tr>
                </tbody>
              </table>
           <div class ="page">
                <?= LinkPager::widget(['pagination' => $pages]); ?> 
            </div>
  </div>
        	</form>
        </div>    
    </div>
    </div>
<script type="text/javascript"
src="/public/resource/js/artdialog/artDialog.js"></script>
<script type="text/javascript"
src="/public/resource/js/artdialog/jquery.artDialog.js?skin=default"></script>
<script type="text/javascript"
src="/public/resource/js/artdialog/artDialog.iframeTools.source.js"></script>
<script type="text/javascript" src="/public/lang/cn/script/lang.js"></script>
<script type="text/javascript">
In.add('form_and_validation', {
path : "/public/resource/js/system/form_and_validation.js",
type : 'js'
});
In.add('xheditor', {
path : "/public/resource/js/xheditor/xheditor.js",
type : 'js'
});
In.add('mousewheel', {
path : "/public/tpl/js/jquery.mousewheel.min.js",
type : 'js'
});
//In.add('styleswitch',{path:"tpl/js/styleswitch.js",type:'js'});
In.add('table', {
path : "/public/tpl/js/table.js",
type : 'js'
});
In.add('calendar', {
path : "/public/resource/js/system/script_calendar.js"
});
In('form_and_validation', 'xheditor', 'mousewheel', 'table', 'calendar');
</script>

<script type="text/javascript">
function cdel(o, s) {
d = art.dialog;
var c = "你确认删除操作？";
if (s) {
c = s;
}
d.confirm(c, function() {
$.ajax({
   type: "GET",
   url: "index.php?r=finance/detail_del",
    data: "art_id="+o,
   success: function(msg){
    if(msg==1){
        $("#"+o).remove();
    }else{
        alert("删除失败");
    }
   }
   
}); 
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

function cdel(o, s) {
d = art.dialog;
var c = "你确认删除操作？";
if (s) {
c = s;
}
d.confirm(c, function() {
$.ajax({
   type: "GET",
   url: "index.php?r=finance/detail_del",
    data: "art_id="+o,
   success: function(msg){
    if(msg==1){
        $("#"+o).remove();
    }else{
        alert("删除失败");
    }
   }
   
}); 
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
function pdels(frm) {
d = art.dialog;
var frm = frm;
var c = "你确认删除操作？";
d.confirm(c, function() {
$("#" + frm).submit();
});
return false;
}
function batch_act(obj, frm) {
d = art.dialog;
var frm = frm;
var c = $(obj).val();
var conf = $(":checkbox[name='ckb']:checked").length;
if (conf > 0) {
d.confirm("确定" + c + '?', function() {
var ida = document.getElementsByName("ckb");
var idarr=new Array();
var idaa=new Array();
var flag=0;
 for(var i=0;i<conf;i++){
if(ida[i].checked==true){
    idarr[flag]=ida[i].value;
     idaa[flag]=ida[i].value;
    flag++;
    }
}
     $.ajax({
    type: "GET",
    url: "index.php?r=finance/finance_delall",
    data: "id="+idarr,
   success: function(msg){
    if(msg==1){
      for(var i=0;i<idarr.length;i++){
          $("#"+idarr[i]).remove();
      } 
    }else{
        alert("删除成功");
    }
   }
   
}); 
//$(".sbt_action").val(c);
//$("#" + frm).submit();
});
} else {
d.alert("您没有选择任何操作项");
}
return false;
}
</script>
</body>
</html>
