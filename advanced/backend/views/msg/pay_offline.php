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
    	<h1>支付管理</h1>
        <div class="tool">
       
            <a href="index.php?r=msg/pay" >支付配置</a>
            <a href="index.php?r=mag/pay_online" >在线支付接口</a>
            <a href="index.php?r=mag/pay_offline" class="here">线下支付接口</a>
<!--
<a href="index.php?do=config&view=pay&op=trust" >担保交易接口</a>
    		-->
</div>
    </div>
<div class="box tip clearfix p_relative">
    	<div class="control"><a href="javascript:void(0);" onclick="$(this).parent().parent().fadeOut();" title=关闭><b>&times;</b></a></div>
        <div class="title"><h2>小提示</h2></div>
        <div class="detail pad10">
            <ul>
                <li>开启支付接口后，在用户中心充值才会显示支付接口,点击编辑后可以配置支付接口的参数</li>
            </ul>
        </div>
</div>
<div class="box list">
 <div class="title"><h2>线下支付接口</h2></div>
  <div class="detail">
     <form action="" method="post">
     	<input type="hidden" value="config" name="do">
<input type="hidden" value="pay" name="view">
      <table cellpadding="0" cellspacing="0">
        <tbody>
          <tr>
            <th width="150">银行名称</th>
            <th width="170">账&nbsp;&nbsp;号</th>
<th width="170">户&nbsp;&nbsp;名</th>
            <th>联系电话</th>
            <th>应用状态</th>
            <th>操作</th>
          </tr>
                <tr class="item">
                <td>中国工商银行</td>
                <td></td>
                <td></td>
<td></td>
                <td class="td25">关闭</td>
                <td> 
                 
<a href="index.php?do=config&view=pay&op=allow&payname=icbc&ac=offline" class="button" ><span class="check icon"></span>启用</a>
 
<a href="index.php?do=config&view=pay&op=offline&ac=edit&payment=icbc" class="button"><span class="cog icon"></span>配置</a>
<a href="index.php?do=config&view=pay&op=offline&ac=del&payment=icbc" onclick="return cdel(this);"  class="button"><span class="negative icon"></span>删除</a>
</td>
               </tr>
                        <tr class="item">
                <td>中国农业银行</td>
                <td></td>
                <td></td>
<td></td>
                <td class="td25">关闭</td>
                <td> 
                 
<a href="index.php?do=config&view=pay&op=allow&payname=aboc&ac=offline" class="button" ><span class="check icon"></span>启用</a>
 
<a href="index.php?do=config&view=pay&op=offline&ac=edit&payment=aboc" class="button"><span class="cog icon"></span>配置</a>
<a href="index.php?do=config&view=pay&op=offline&ac=del&payment=aboc" onclick="return cdel(this);"  class="button"><span class="negative icon"></span>删除</a>
</td>
               </tr>
                        <tr class="item">
                <td>中国招商银行</td>
                <td></td>
                <td></td>
<td></td>
                <td class="td25">关闭</td>
                <td> 
                 
<a href="index.php?do=config&view=pay&op=allow&payname=cmb&ac=offline" class="button" ><span class="check icon"></span>启用</a>
 
<a href="index.php?do=config&view=pay&op=offline&ac=edit&payment=cmb" class="button"><span class="cog icon"></span>配置</a>
<a href="index.php?do=config&view=pay&op=offline&ac=del&payment=cmb" onclick="return cdel(this);"  class="button"><span class="negative icon"></span>删除</a>
</td>
               </tr>
                        <tr class="item">
                <td>中国银行</td>
                <td></td>
                <td></td>
<td></td>
                <td class="td25">关闭</td>
                <td> 
                 
<a href="index.php?do=config&view=pay&op=allow&payname=boc&ac=offline" class="button" ><span class="check icon"></span>启用</a>
 
<a href="index.php?do=config&view=pay&op=offline&ac=edit&payment=boc" class="button"><span class="cog icon"></span>配置</a>
<a href="index.php?do=config&view=pay&op=offline&ac=del&payment=boc" onclick="return cdel(this);"  class="button"><span class="negative icon"></span>删除</a>
</td>
               </tr>
                        <tr class="item">
                <td>中国兴业银行</td>
                <td></td>
                <td></td>
<td></td>
                <td class="td25">关闭</td>
                <td> 
                 
<a href="index.php?do=config&view=pay&op=allow&payname=cib&ac=offline" class="button" ><span class="check icon"></span>启用</a>
 
<a href="index.php?do=config&view=pay&op=offline&ac=edit&payment=cib" class="button"><span class="cog icon"></span>配置</a>
<a href="index.php?do=config&view=pay&op=offline&ac=del&payment=cib" onclick="return cdel(this);"  class="button"><span class="negative icon"></span>删除</a>
</td>
               </tr>
                    </tbody>
  <tfoot>
  	 <tr class="item">
                <td colspan="6" align="left">
                	 <button class="positive primary pill button t_r" type="button" value=新增 onclick="location.href='index.php?do=config&view=pay&op=offline&op=offline&ac=add'"><span class="check icon"></span>新增</button>
</td>
 </tr>
  </tfoot>
         </table>
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
