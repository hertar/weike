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
<h1>添加用户组</h1>
     <div class="tool"> 
        <a href="index.php?r=user/group_list"      >用户组管理</a>
        <a href="index.php?r=user/group_add" class="here">添加用户组</a>
</div>
</div>
<!--页头结束-->

<div class="box post">
    <div class="tabcon">
        	<div class="title"><h2>添加用户组</h2></div>       	
            <div class="detail">
<form action="index.php?r=user/group_add_pro" method="post">
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
   <input type="hidden" name="is_submit" value="1"/>
   <tr>
        <th width="10%" scope="row">组名：</th>
        <td><input type="text" value="" name="txt_groupname" id="txt_groupname" maxlength="50" 
limit="required:true" 
msg="组名不能为空" 
msgArea="txt_groupname_msg" 
title="请输入正确的组名" class="txt"  style=" width:260px;"/><b style="color:red">*</b><span id="txt_groupname_msg"></span></td>
       </tr>
  
   <tr>
  	<th scope="row">权限：</th>
<td>
<b>财务管理</b><br>
<div style="display:block;width:100%">
<dl><dt>财务模块:</dt>
  <dd>
<ul>
<label>
<input type="checkbox"  name="chb_resource[]" value="152">财务概况</label>
<label>
<input type="checkbox"  name="chb_resource[]" value="4">财务明细</label>
<label>
<input type="checkbox"  name="chb_resource[]" value="3">财务分析</label>
<label>
<input type="checkbox"  name="chb_resource[]" value="76">充值审核</label>
<label>
<input type="checkbox"  name="chb_resource[]" value="5">提现审核</label>
<label>
<input type="checkbox"  name="chb_resource[]" value="155">手动充值</label>
</ul>
  </dd>
</dl>
</div>
<b>用户管理</b><br>
<div style="display:block;width:100%">
<dl><dt>用户管理:</dt>
  <dd>
<ul>
<label>
<input type="checkbox"  name="chb_resource[]" value="10">添加用户</label>
<label>
<input type="checkbox"  name="chb_resource[]" value="11">用户管理</label>
<label>
<input type="checkbox"  name="chb_resource[]" value="33">用户组</label>
</ul>
  </dd>
</dl>
<dl><dt>系统组管理:</dt>
  <dd>
<ul>
<label>
<input type="checkbox"  name="chb_resource[]" value="13">系统组管理</label>
<label>
<input type="checkbox"  name="chb_resource[]" value="12">添加系统组</label>
</ul>
  </dd>
</dl>
<dl><dt>用户体系:</dt>
  <dd>
<ul>
<label>
<input type="checkbox"  name="chb_resource[]" value="36">信誉规则</label>
<label>
<input type="checkbox"  name="chb_resource[]" value="78">互评配置</label>
<label>
<input type="checkbox"  name="chb_resource[]" value="79">互评记录</label>
</ul>
  </dd>
</dl>
<dl><dt>用户反馈:</dt>
  <dd>
<ul>
<label>
<input type="checkbox"  name="chb_resource[]" value="80">交易维权</label>
<label>
<input type="checkbox"  name="chb_resource[]" value="81">交易举报</label>
<label>
<input type="checkbox"  name="chb_resource[]" value="82">投诉建议</label>
</ul>
  </dd>
</dl>
<dl><dt>认证管理:</dt>
  <dd>
<ul>
<label>
<input type="checkbox"  name="chb_resource[]" value="147">企业认证</label>
<label>
<input type="checkbox"  name="chb_resource[]" value="68">银行认证</label>
<label>
<input type="checkbox"  name="chb_resource[]" value="70">实名认证</label>
<label>
<input type="checkbox"  name="chb_resource[]" value="71">邮箱认证</label>
<label>
<input type="checkbox"  name="chb_resource[]" value="77">手机认证</label>
<label>
<input type="checkbox"  name="chb_resource[]" value="38">认证项目</label>
</ul>
  </dd>
</dl>
</div>
<b>全局配置</b><br>
<div style="display:block;width:100%">
<dl><dt>系统配置:</dt>
  <dd>
<ul>
<label>
<input type="checkbox"  name="chb_resource[]" value="34">全局配置</label>
<label>
<input type="checkbox"  name="chb_resource[]" value="37">模型管理</label>
<label>
<input type="checkbox"  name="chb_resource[]" value="35">会员整合</label>
<label>
<input type="checkbox"  name="chb_resource[]" value="41">自定义导航</label>
<label>
<input type="checkbox"  name="chb_resource[]" value="148">汇率配置</label>
</ul>
  </dd>
</dl>
<dl><dt>行业技能:</dt>
  <dd>
<ul>
<label>
<input type="checkbox"  name="chb_resource[]" value="7">行业管理</label>
<label>
<input type="checkbox"  name="chb_resource[]" value="8">技能管理</label>
</ul>
  </dd>
</dl>
<dl><dt>接口管理:</dt>
  <dd>
<ul>
<label>
<input type="checkbox"  name="chb_resource[]" value="63">OAuth登录</label>
<label>
<input type="checkbox"  name="chb_resource[]" value="141">地图接口</label>
<label>
<input type="checkbox"  name="chb_resource[]" value="66">短信配置</label>
<label>
<input type="checkbox"  name="chb_resource[]" value="73">短信模板</label>
<label>
<input type="checkbox"  name="chb_resource[]" value="2">支付接口</label>
</ul>
  </dd>
</dl>
<dl><dt>增值服务:</dt>
  <dd>
<ul>
<label>
<input type="checkbox"  name="chb_resource[]" value="138">服务项管理</label>
<label>
<input type="checkbox"  name="chb_resource[]" value="139">购买记录</label>
</ul>
  </dd>
</dl>
</div>
<b>应用中心</b><br>
<div style="display:block;width:100%">
<dl><dt>应用中心:</dt>
  <dd>
<ul>
<label>
<input type="checkbox"  name="chb_resource[]" value="159">应用中心</label>
</ul>
  </dd>
</dl>
<dl><dt>广场管理:</dt>
  <dd>
<ul>
<label>
<input type="checkbox"  name="chb_resource[]" value="163">免费需求</label>
<label>
<input type="checkbox"  name="chb_resource[]" value="164">免费服务</label>
<label>
<input type="checkbox"  name="chb_resource[]" value="165">留言管理</label>
<label>
<input type="checkbox"  name="chb_resource[]" value="166">动态管理</label>
<label>
<input type="checkbox"  name="chb_resource[]" value="167">举报管理</label>
</ul>
  </dd>
</dl>
<dl><dt>推广营销:</dt>
  <dd>
<ul>
<label>
<input type="checkbox"  name="chb_resource[]" value="59">推广配置管理</label>
<label>
<input type="checkbox"  name="chb_resource[]" value="58">推广关系管理</label>
<label>
<input type="checkbox"  name="chb_resource[]" value="61">推广财务管理</label>
</ul>
  </dd>
</dl>
</div>
<b>资讯管理</b><br>
<div style="display:block;width:100%">
<dl><dt>关于网站:</dt>
  <dd>
<ul>
<label>
<input type="checkbox"  name="chb_resource[]" value="156">网站公告</label>
<label>
<input type="checkbox"  name="chb_resource[]" value="157">网站介绍</label>
</ul>
  </dd>
</dl>
<dl><dt>文章模块:</dt>
  <dd>
<ul>
<label>
<input type="checkbox"  name="chb_resource[]" value="16">文章管理</label>
<label>
<input type="checkbox"  name="chb_resource[]" value="14">文章分类</label>
</ul>
  </dd>
</dl>
<dl><dt>帮助模块:</dt>
  <dd>
<ul>
<label>
<input type="checkbox"  name="chb_resource[]" value="44">帮助分类</label>
<label>
<input type="checkbox"  name="chb_resource[]" value="42">帮助管理</label>
</ul>
  </dd>
</dl>
<dl><dt>成功案例:</dt>
  <dd>
<ul>
<label>
<input type="checkbox"  name="chb_resource[]" value="154">案例管理</label>
</ul>
  </dd>
</dl>
</div>
<b>站长工具</b><br>
<div style="display:block;width:100%">
<dl><dt>站长工具:</dt>
  <dd>
<ul>
<label>
<input type="checkbox"  name="chb_resource[]" value="142">数据库管理</label>
<label>
<input type="checkbox"  name="chb_resource[]" value="19">系统日志</label>
<label>
<input type="checkbox"  name="chb_resource[]" value="21">附件管理</label>
<label>
<input type="checkbox"  name="chb_resource[]" value="20">更新缓存</label>
</ul>
  </dd>
</dl>
<dl><dt>模板标签:</dt>
  <dd>
<ul>
<label>
<input type="checkbox"  name="chb_resource[]" value="153">标签管理</label>
<label>
<input type="checkbox"  name="chb_resource[]" value="28">模板管理</label>
<label>
<input type="checkbox"  name="chb_resource[]" value="30">友情链接</label>
<label>
<input type="checkbox"  name="chb_resource[]" value="57">动态管理</label>
<label>
<input type="checkbox"  name="chb_resource[]" value="32">广告管理</label>
</ul>
  </dd>
</dl>
</div>
<b>商店管理</b><br>
<div style="display:block;width:100%">
<dl><dt>店铺管理:</dt>
  <dd>
<ul>
<label>
<input type="checkbox"  name="chb_resource[]" value="170">店铺管理</label>
</ul>
  </dd>
</dl>
<dl><dt>威客作品:</dt>
  <dd>
<ul>
<label>
<input type="checkbox"  name="chb_resource[]" value="m610">订单管理</label>
<label>
<input type="checkbox"  name="chb_resource[]" value="m611">作品管理</label>
<label>
<input type="checkbox"  name="chb_resource[]" value="m612">作品配置</label>
</ul>
  </dd>
</dl>
<dl><dt>威客服务:</dt>
  <dd>
<ul>
<label>
<input type="checkbox"  name="chb_resource[]" value="m713">订单管理</label>
<label>
<input type="checkbox"  name="chb_resource[]" value="m714">服务管理</label>
<label>
<input type="checkbox"  name="chb_resource[]" value="m715">服务配置</label>
</ul>
  </dd>
</dl>
</div>
<b>任务管理</b><br>
<div style="display:block;width:100%">
<dl><dt>单人悬赏:</dt>
  <dd>
<ul>
<label>
<input type="checkbox"  name="chb_resource[]" value="m10">任务管理</label>
<label>
<input type="checkbox"  name="chb_resource[]" value="m11">任务配置</label>
</ul>
  </dd>
</dl>
<dl><dt>多人悬赏:</dt>
  <dd>
<ul>
<label>
<input type="checkbox"  name="chb_resource[]" value="m22">任务管理</label>
<label>
<input type="checkbox"  name="chb_resource[]" value="m23">任务配置</label>
</ul>
  </dd>
</dl>
<dl><dt>计件悬赏:</dt>
  <dd>
<ul>
<label>
<input type="checkbox"  name="chb_resource[]" value="m34">任务管理</label>
<label>
<input type="checkbox"  name="chb_resource[]" value="m35">任务配置</label>
</ul>
  </dd>
</dl>
<dl><dt>普通招标:</dt>
  <dd>
<ul>
<label>
<input type="checkbox"  name="chb_resource[]" value="m46">任务管理</label>
<label>
<input type="checkbox"  name="chb_resource[]" value="m47">任务配置</label>
</ul>
  </dd>
</dl>
<dl><dt>订金招标:</dt>
  <dd>
<ul>
<label>
<input type="checkbox"  name="chb_resource[]" value="m58">任务管理</label>
<label>
<input type="checkbox"  name="chb_resource[]" value="m59">任务配置</label>
</ul>
  </dd>
</dl>
</div>
</td>
  </tr>
 
  <tr>
 	<th scope="row">&nbsp;</th>
        <td>
          <div class="clearfix padt10">
 
  <button type="submit" onclick="return checkForm(document.getElementById('frm_art_edit'),false)" name="sbt_edit" class="positive pill primary button"  value="添加用户组"/><span class="check icon"></span>提交</button>
       	 
          </div>
</td>
     </tr>
  
    </table>
 </form>
            	
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
