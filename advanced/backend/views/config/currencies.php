<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>keke admin</title>


<link href="/public/tpl/css/admin_management.css" rel="stylesheet" type="text/css" />
<link href="/public/resource/css/buttons.css" rel="stylesheet" type="text/css" />
<link title="style1" href="/public/tpl/skin/default/style.css" rel="stylesheet" type="text/css" />
<!--<link title="style2" href="/public/tpl/skin/light/style.css" rel="stylesheet" type="text/css" />-->
<script type="text/javascript" src="/public/resource/js/jquery.js"></script>
<script type="text/javascript" src="/public/resource/js/system/keke.js"></script>
<script type="text/javascript" src="/public/resource/js/in.js"></script>
</head>
<body class="frame_body">
<div class="frame_content">
<div id="append_parent"></div>
<div class="page_title">
    	<h1>汇率管理</h1>
    </div>
<div class="box tip clearfix p_relative">
    	<div class="control"><a href="javascript:void(0);" onclick="$(this).parent().parent().fadeOut();" title=关闭><b>&times;</b></a></div>
        <div class="title"><h2>小提示</h2></div>
        <div class="detail pad10">
            <ul style='color:red'>
                <li>汇率变化比较频繁，希望站长注意及时更新汇率，以免造成损失，要使用更新功能必须使服务器能访问Google.com服务器</li>
            </ul>
        </div>
</div>
<div class="box list">
 <div class="title"><h2>汇率列表</h2></div>
  <div class="detail">
  <div id="ajax_dom">
      <table cellpadding="0" cellspacing="0">
        <tbody>
          <tr>
          <th width="10%">货币ID</th>
            <th width="20%">货币</th>
            <th width="30%">货币代码</th>
<th width="20%">货币汇率</th>
            <th width="20%">操作</th>
          </tr>
                                  <tr class="item">
              <td>1</td>
                            <td>US Dollar</td>
                            <td>USD</td>
              <td>0.15744600</td>
  <td> 
<a href="index.php?do=config&view=currencies&op=edit&cid=1" class="button dbl_target"><span class="cog icon"></span>配置</a>
<a href="index.php?do=config&view=currencies&ac=update&code=USD" class="button"><span class="uparrow icon"></span>更新</a>
<a href="index.php?do=config&view=currencies&op=list&cid=1&ac=del"  class="button"><span class="negative icon"></span>删除</a>
  </td>
             </tr>
                        <tr class="item">
              <td>2</td>
                            <td style='font-weight:bold'>人民币(默认)</td>
                            <td>CNY</td>
              <td>1.00000000</td>
  <td> 
<a href="index.php?do=config&view=currencies&op=edit&cid=2" class="button dbl_target"><span class="cog icon"></span>配置</a>
<a href="index.php?do=config&view=currencies&ac=update&code=CNY" class="button"><span class="uparrow icon"></span>更新</a>
<a href="index.php?do=config&view=currencies&op=list&cid=2&ac=del"  class="button"><span class="negative icon"></span>删除</a>
  </td>
             </tr>
                        <tr class="item">
              <td>3</td>
                            <td>Euro</td>
                            <td>EUR</td>
              <td>0.12568532</td>
  <td> 
<a href="index.php?do=config&view=currencies&op=edit&cid=3" class="button dbl_target"><span class="cog icon"></span>配置</a>
<a href="index.php?do=config&view=currencies&ac=update&code=EUR" class="button"><span class="uparrow icon"></span>更新</a>
<a href="index.php?do=config&view=currencies&op=list&cid=3&ac=del"  class="button"><span class="negative icon"></span>删除</a>
  </td>
             </tr>
                        <tr class="item">
              <td>4</td>
                            <td>GB Pound</td>
                            <td>GBP</td>
              <td>0.09942911</td>
  <td> 
<a href="index.php?do=config&view=currencies&op=edit&cid=4" class="button dbl_target"><span class="cog icon"></span>配置</a>
<a href="index.php?do=config&view=currencies&ac=update&code=GBP" class="button"><span class="uparrow icon"></span>更新</a>
<a href="index.php?do=config&view=currencies&op=list&cid=4&ac=del"  class="button"><span class="negative icon"></span>删除</a>
  </td>
             </tr>
                        <tr class="item">
              <td>5</td>
                            <td>Canadian Dollar</td>
                            <td>CAD</td>
              <td>0.15563595</td>
  <td> 
<a href="index.php?do=config&view=currencies&op=edit&cid=5" class="button dbl_target"><span class="cog icon"></span>配置</a>
<a href="index.php?do=config&view=currencies&ac=update&code=CAD" class="button"><span class="uparrow icon"></span>更新</a>
<a href="index.php?do=config&view=currencies&op=list&cid=5&ac=del"  class="button"><span class="negative icon"></span>删除</a>
  </td>
             </tr>
                        <tr class="item">
              <td>6</td>
                            <td>Australian Dollar</td>
                            <td>AUD</td>
              <td>0.15194558</td>
  <td> 
<a href="index.php?do=config&view=currencies&op=edit&cid=6" class="button dbl_target"><span class="cog icon"></span>配置</a>
<a href="index.php?do=config&view=currencies&ac=update&code=AUD" class="button"><span class="uparrow icon"></span>更新</a>
<a href="index.php?do=config&view=currencies&op=list&cid=6&ac=del"  class="button"><span class="negative icon"></span>删除</a>
  </td>
             </tr>
                        <tr class="item">
              <td>7</td>
                            <td>港币</td>
                            <td>HKD</td>
              <td>1.22107005</td>
  <td> 
<a href="index.php?do=config&view=currencies&op=edit&cid=7" class="button dbl_target"><span class="cog icon"></span>配置</a>
<a href="index.php?do=config&view=currencies&ac=update&code=HKD" class="button"><span class="uparrow icon"></span>更新</a>
<a href="index.php?do=config&view=currencies&op=list&cid=7&ac=del"  class="button"><span class="negative icon"></span>删除</a>
  </td>
             </tr>
                        <tr class="item">
              <td>8</td>
                            <td>韩元</td>
                            <td>KRW</td>
              <td>178.71282959</td>
  <td> 
<a href="index.php?do=config&view=currencies&op=edit&cid=8" class="button dbl_target"><span class="cog icon"></span>配置</a>
<a href="index.php?do=config&view=currencies&ac=update&code=KRW" class="button"><span class="uparrow icon"></span>更新</a>
<a href="index.php?do=config&view=currencies&op=list&cid=8&ac=del"  class="button"><span class="negative icon"></span>删除</a>
  </td>
             </tr>
                        <tr class="item">
              <td>14</td>
                            <td>卢布</td>
                            <td>RUB</td>
              <td>4.96759844</td>
  <td> 
<a href="index.php?do=config&view=currencies&op=edit&cid=14" class="button dbl_target"><span class="cog icon"></span>配置</a>
<a href="index.php?do=config&view=currencies&ac=update&code=RUB" class="button"><span class="uparrow icon"></span>更新</a>
<a href="index.php?do=config&view=currencies&op=list&cid=14&ac=del"  class="button"><span class="negative icon"></span>删除</a>
  </td>
             </tr>
                              </tbody>
  <tfoot>
  	 <tr class="item">
                <td colspan="6" align="left">
                	 <button class="positive primary pill button t_r" type="button" value=添加 onclick="location.href='index.php?do=config&view=currencies&op=edit'"><span class="check icon"></span>添加</button>
                	 <button class="positive primary pill button t_r" type="button" value="批量更新" onclick="location.href='index.php?do=config&view=currencies&ac=update'"><span class="uparrow icon"></span>批量更新</button>
</td>
 </tr>
  </tfoot>
         </table>
         <div class="page">
         	         </div>
         </div>
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
