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
<a href="index.php?r=finance/detail">财务明细</a>
<a href="index.php?r=finance/report" >财务分析</a>
<a href="index.php?r=finance/recharge" class="here">充值审核</a>
<a href="index.php?r=finance/withdraw">提现审核</a>
    </div>
</div>
<div class="box tip clearfix p_relative" id="man_tips">
   <div class="control"><a href="javascript:void(0);" title=关闭 onclick="$('#man_tips').fadeOut();"><b>&times;</b></a></div>
   <div class="title"><h2>小提示</h2></div>
   <div class="detail pad10">
      <ul>
         <li>系统目前支持支付宝的批量打款功能，您可以针对支付宝的提现申请进行批量打款</li>
         <li>搜索【收款账户类型】为【alipayjs】的提现记录，您将在列表下方看到批量打款按钮</li>
      </ul>
   </div>
</div>
<div class="box search p_relative">
    <div class="title">
        <h2>搜索</h2>
    </div>
    <div class="detail" id="detail">
        <form action="index.php?do=finance&view=withdraw" method="post" id=frm_user_search>
        	<input type="hidden" value="1" name="page">
        	 <table cellspacing="0" cellpadding="0">
        	 	
                <tbody>
                    <tr>
                    	 <th>
                            财务编号                        </th>
                        <td>
                            <input type="text" value="" name="w[withdraw_id]" class="txt" onkeyup="clearstr(this);"/>
                        </td>
 <th>
                            用户名                        </th>
                        <td>
                            <input type="text" value="" name="w[username]" class="txt"/>
                        </td>
 <th>
                         收款账户类型                        </th>
                        <td>
                            <select name="w[pay_type]">
                            	<option value=''>所有的</option>
                                                                                                                                                                                                                                                                                                                                                            </select>
                        </td>
   
</tr>
<tr>
                        <th>
                            结果排序                        </th>
                        <td>
                      <select name="w[ord][]">
                           <option value="withdraw_id"  selected="selected">默认排序</option>
                           <option value="applic_time" >申请时间</option>
                           <option value="process_time" >处理时间</option>
                      </select>
                      <select name="w[ord][]">
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
                             <button class="pill" type="submit" value=搜索 name="sbt_search">
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
        <form action="index.php?do=finance&view=withdraw" method="post" id='frm_art_action' >
 	<input type="hidden" value="1" name="page">
<input type="hidden" name="w[page_size]" value="10">
<div id="ajax_dom"><input type="hidden" value="1" name="page">
  <table cellpadding="0" cellspacing="0">
             <tbody>
               <tr>
               	   <th>
               			<input type="checkbox" id="checkbox" onclick="checkall();" class="checkbox" >ID
               		</th>
                    
                    <th>
                       提现类型</th>
                    <th>
                        提现人                    </th>
                    <th>
                       提现金额/ 需要打给用户的钱                    </th>
                    <th>
                        收款账号                    </th>
                    <th>
                        收款户名                    </th>
                    <th>
                        提现状态                    </th>
                    <th>
                        操作                    </th>
                    <th>
                        浏览                    </th>
                </tr>
  				                     <tr>
                    <td colspan="9">
                               
                           <div class="clearfix">
                           	 
 <input type="hidden" name="action_type" id="action_type" value="0" />
 <input type="checkbox" id="checkbox" onclick="checkall();" class="checkbox" >
<label for="checkbox">全选</label>

 <input type="hidden" name="sbt_action" class="sbt_action"/>   
  <button name="sbt_action" type="submit" value="批量审核" onclick="return batch_act(this,'frm_art_action');" class="pill positive button">
                                      <span class="icon check"></span>批量审核                                 </button>
 
                           		 <button name="sbt_action" type="submit" value="批量审核不通过" onclick="return batch_act(this,'frm_art_action');" class="pill negative button">
                                      <span class="icon trash"></span>批量审核不通过                                 </button>
  </div>
                    </td>
                  </tr>
                </tbody>
              </table>
  <div class="page"></div>
  </div>
        	</form>
        </div>
        
    </div>
<script type="text/javascript">
function batch_pay(withdraw_id){
var ids;

if(withdraw_id){ 
$("#ckb_"+withdraw_id).attr("checked","checked");
}

if($(":checkbox[name='ckb[]']:checked").length>0){
$(":checkbox[name='ckb[]']:checked").each(function(i,n){
i==0?ids=$(this).val():ids+=","+$(this).val();
})
if(ids&&typeof(ids)!=undefined){
$.post("index.php?do=finance&view=withdraw&type=batch&pay_type=alipayjs&ids="+ids,function(url){
art.dialog({
title:"确认打款",
content: "您确认打款吗",
   				yesFn: function(){
window.open(url);this.close();
},
noFn :function(){this.close();return false;}
});
},'text')
 }
}else{
art.dialog.alert("您还没有选择打款项");
}
}
$(function(){
$(".control").add(".title").click(function(){
$(".tip").children().not($(".control,.title")).slideToggle('800');
});
})
</script>
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
var conf = $(":checkbox[name='ckb[]']:checked").length;
if (conf > 0) {
d.confirm("确定" + c + '?', function() {
$(".sbt_action").val(c);
$("#" + frm).submit();
});
} else {
d.alert("您没有选择任何操作项");
}
return false;
}
</script>
</body>
</html>
   