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
<link href="/public/resource/css/base.css" rel="stylesheet" type="text/css" />
<div class="page_title">
    	<h1>全局配置</h1>
         <div class="tool">         
<a href="index.php?r=config/quanju" > 站点配置</a>
<a href="index.php?r=config/conf"  >基本配置</a>
<a href="index.php?r=config/seo"  class="here" >SEO配置</a>
<a href="index.php?r=config/mail"  >邮箱配置</a>
    	</div>
</div>

<div class="box post">
        <div class="tabcon">
        	<div class="title"><h2></h2></div>
            <div class="detail">
                 <form name="frm_config_basic" id="frm_config_basic" action="index.php?do=config&view=basic&op=seo" method="post" accept-charset="utf-8" enctype='multipart/form-data'>
                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                     
	
            <tr>
                <th scope="row">
                    apache                </th>
                <td><a href="javascript:setCopy($('#pre_apache').text(),'copy_success','admin');">copy</a>
                    <pre id="pre_apache">RewriteEngine On 
RewriteRule ^index.html$ index.php
RewriteRule ^(\w+).html$ index.php?do=$1
RewriteRule ^(\w+)-(\w+)-(\w+).html$ index.php?do=$1&$2=$3
RewriteRule ^(\w+)-(\w+)-(\w+)-(\w+)-(\w+).html$ index.php?do=$1&$2=$3&$4=$5
RewriteRule ^(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+).html$ index.php?do=$1&$2=$3&$4=$5&$6=$7
RewriteRule ^(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+).html$ index.php?do=$1&$2=$3&$4=$5&$6=$7&$8=$9
RewriteRule ^(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+).html$ index.php?do=$1&$2=$3&$4=$5&$6=$7&$8=$9&$10=$11
RewriteRule ^(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+).html$ index.php?do=$1&$2=$3&$4=$5&$6=$7&$8=$9&$10=$11&$12=$13
RewriteRule ^(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+).html$ index.php?do=$1&$2=$3&$4=$5&$6=$7&$8=$9&$10=$11&$12=$13&$14=$15
RewriteRule ^(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+).html$ index.php?do=$1&$2=$3&$4=$5&$6=$7&$8=$9&$10=$11&$12=$13&$14=$15&$16=$17
RewriteRule ^(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+).html$ index.php?do=$1&$2=$3&$4=$5&$6=$7&$8=$9&$10=$11&$12=$13&$14=$15&$16=$17&$18=$19
</pre>
                </td>
            </tr>
            	
            <tr>
                <th scope="row">
                    apache-hosts                </th>
                <td><a href="javascript:setCopy($('#pre_apache-hosts').text(),'copy_success','admin');">copy</a>
                    <pre id="pre_apache-hosts">
&lt;IfModule mod_rewrite.c&gt;
RewriteEngine On
RewriteRule ^(.*)/index.html$ $1/index.php
RewriteRule ^(.*)/(\w+).html$ $1/index.php?do=$2
RewriteRule ^(.*)/(\w+)-(\w+)-(\w+).html$ $1/index.php?do=$2&amp;$3=$4
RewriteRule ^(.*)/(\w+)-(\w+)-(\w+)-(\w+)-(\w+).html$ $1/index.php?do=$2&amp;$3=$4&amp;$5=$6
RewriteRule ^(.*)/(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+).html$ $1/index.php?do=$2&amp;$3=$4&amp;$5=$6&amp;$7=$8
RewriteRule ^(.*)/(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+).html$ $1/index.php?do=$2&amp;$3=$4&amp;$5=$6&amp;$7=$8&amp;$9=$10
RewriteRule ^(.*)/(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+).html$ $1/index.php?do=$2&amp;$3=$4&amp;$5=$6&amp;$7=$8&amp;$9=$10&amp;$11=$12
RewriteRule ^(.*)/(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+).html$ $1/index.php?do=$2&amp;$3=$4&amp;$5=$6&amp;$7=$8&amp;$9=$10&amp;$11=$12&amp;$13=$14
RewriteRule ^(.*)/(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+).html$ $1/index.php?do=$2&amp;$3=$4&amp;$5=$6&amp;$7=$8&amp;$9=$10&amp;$11=$12&amp;$13=$14&amp;$15=$16
RewriteRule ^(.*)/(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+).html$ $1/index.php?do=$2&amp;$3=$4&amp;$5=$6&amp;$7=$8&amp;$9=$10&amp;$11=$12&amp;$13=$14&amp;$15=$16&amp;$17=$18
RewriteRule ^(.*)/(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+).html$ $1/index.php?do=$2&amp;$3=$4&amp;$5=$6&amp;$7=$8&amp;$9=$10&amp;$11=$12&amp;$13=$14&amp;$15=$16&amp;$17=$18&amp;$19=$20
&lt;/IfModule&gt;</pre>
                </td>
            </tr>
            	
            <tr>
                <th scope="row">
                    iis6                </th>
                <td><a href="javascript:setCopy($('#pre_iis6').text(),'copy_success','admin');">copy</a>
                    <pre id="pre_iis6">RewriteEngine On 
RewriteCompatibility2 On 
RepeatLimit 200 
RewriteBase / 
RewriteRule ^.*(?:global.asa|default\.ida|root\.exe|\.\.).*$ . [NC,F,O] 
 RewriteRule ^(.*)/index.html$ $1/index.php 
RewriteRule ^(.*)/(\w+).html$ $1/index.php\?do=$2
RewriteRule ^(.*)/(\w+)-(\w+)-(\w+).html$ $1/index.php\?do=$2&$3=$4
RewriteRule ^(.*)/(\w+)-(\w+)-(\w+)-(\w+)-(\w+).html$ $1/index.php\?do=$2&$3=$4&$5=$6
RewriteRule ^(.*)/(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+).html$ $1/index.php\?do=$2&$3=$4&$5=$6&$7=$8
RewriteRule ^(.*)/(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+).html$ $1/index.php\?do=$2&$3=$4&$5=$6&$7=$8&$9=$10
RewriteRule ^(.*)/(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+).html$ $1/index.php\?do=$2&$3=$4&$5=$6&$7=$8&$9=$10&$11=$12
RewriteRule ^(.*)/(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+).html$ $1/index.php\?do=$2&$3=$4&$5=$6&$7=$8&$9=$10&$11=$12&$13=$14
RewriteRule ^(.*)/(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+).html$ $1/index.php\?do=$2&$3=$4&$5=$6&$7=$8&$9=$10&$11=$12&$13=$14&$15=$16
RewriteRule ^(.*)/(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+).html$ $1/index.php\?do=$2&$3=$4&$5=$6&$7=$8&$9=$10&$11=$12&$13=$14&$15=$16&$17=$18
RewriteRule ^(.*)/(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+).html$ $1/index.php\?do=$2&$3=$4&$5=$6&$7=$8&$9=$10&$11=$12&$13=$14&$15=$16&$17=$18&$19=$20
</pre>
                </td>
            </tr>
            	
            <tr>
                <th scope="row">
                    iis7                </th>
                <td><a href="javascript:setCopy($('#pre_iis7').text(),'copy_success','admin');">copy</a>
                    <pre id="pre_iis7">&lt;rewrite&gt;&lt;rules&gt;
&lt;rule name=&quot;2&quot;&gt;
	&lt;match url=&quot;^(.*/)*(\w+).index.html$&quot; /&gt;
	&lt;action type=&quot;Rewrite&quot; url=&quot;{R:1}/index.php={R:2}&quot; /&gt;
&lt;/rule&gt;&lt;rule name=&quot;4&quot;&gt;
	&lt;match url=&quot;^(.*/)*(\w+)-(\w+)-(\w+).index.html$&quot; /&gt;
	&lt;action type=&quot;Rewrite&quot; url=&quot;{R:1}/index.php={R:2}&amp;amp;{R:3}={R:4}&quot; /&gt;
&lt;/rule&gt;&lt;rule name=&quot;6&quot;&gt;
	&lt;match url=&quot;^(.*/)*(\w+)-(\w+)-(\w+)-(\w+)-(\w+).index.html$&quot; /&gt;
	&lt;action type=&quot;Rewrite&quot; url=&quot;{R:1}/index.php={R:2}&amp;amp;{R:3}={R:4}&amp;amp;{R:5}={R:6}&quot; /&gt;
&lt;/rule&gt;&lt;rule name=&quot;8&quot;&gt;
	&lt;match url=&quot;^(.*/)*(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+).index.html$&quot; /&gt;
	&lt;action type=&quot;Rewrite&quot; url=&quot;{R:1}/index.php={R:2}&amp;amp;{R:3}={R:4}&amp;amp;{R:5}={R:6}&amp;amp;{R:7}={R:8}&quot; /&gt;
&lt;/rule&gt;&lt;rule name=&quot;10&quot;&gt;
	&lt;match url=&quot;^(.*/)*(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+).index.html$&quot; /&gt;
	&lt;action type=&quot;Rewrite&quot; url=&quot;{R:1}/index.php={R:2}&amp;amp;{R:3}={R:4}&amp;amp;{R:5}={R:6}&amp;amp;{R:7}={R:8}&amp;amp;{R:9}={R:10}&quot; /&gt;
&lt;/rule&gt;&lt;rule name=&quot;12&quot;&gt;
	&lt;match url=&quot;^(.*/)*(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+).index.html$&quot; /&gt;
	&lt;action type=&quot;Rewrite&quot; url=&quot;{R:1}/index.php={R:2}&amp;amp;{R:3}={R:4}&amp;amp;{R:5}={R:6}&amp;amp;{R:7}={R:8}&amp;amp;{R:9}={R:10}&amp;amp;{R:11}={R:12}&quot; /&gt;
&lt;/rule&gt;&lt;rule name=&quot;14&quot;&gt;
	&lt;match url=&quot;^(.*/)*(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+).index.html$&quot; /&gt;
	&lt;action type=&quot;Rewrite&quot; url=&quot;{R:1}/index.php={R:2}&amp;amp;{R:3}={R:4}&amp;amp;{R:5}={R:6}&amp;amp;{R:7}={R:8}&amp;amp;{R:9}={R:10}&amp;amp;{R:11}={R:12}&amp;amp;{R:13}={R:14}&quot; /&gt;
&lt;/rule&gt;&lt;rule name=&quot;16&quot;&gt;
	&lt;match url=&quot;^(.*/)*(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+).index.html$&quot; /&gt;
	&lt;action type=&quot;Rewrite&quot; url=&quot;{R:1}/index.php={R:2}&amp;amp;{R:3}={R:4}&amp;amp;{R:5}={R:6}&amp;amp;{R:7}={R:8}&amp;amp;{R:9}={R:10}&amp;amp;{R:11}={R:12}&amp;amp;{R:13}={R:14}&amp;amp;{R:15}={R:16}&quot; /&gt;
&lt;/rule&gt;&lt;rule name=&quot;18&quot;&gt;
	&lt;match url=&quot;^(.*/)*(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+).index.html$&quot; /&gt;
	&lt;action type=&quot;Rewrite&quot; url=&quot;{R:1}/index.php={R:2}&amp;amp;{R:3}={R:4}&amp;amp;{R:5}={R:6}&amp;amp;{R:7}={R:8}&amp;amp;{R:9}={R:10}&amp;amp;{R:11}={R:12}&amp;amp;{R:13}={R:14}&amp;amp;{R:15}={R:16}&amp;amp;{R:17}={R:18}&quot; /&gt;
&lt;/rule&gt;&lt;rule name=&quot;20&quot;&gt;
	&lt;match url=&quot;^(.*/)*(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+).index.html$&quot; /&gt;
	&lt;action type=&quot;Rewrite&quot; url=&quot;{R:1}/index.php={R:2}&amp;amp;{R:3}={R:4}&amp;amp;{R:5}={R:6}&amp;amp;{R:7}={R:8}&amp;amp;{R:9}={R:10}&amp;amp;{R:11}={R:12}&amp;amp;{R:13}={R:14}&amp;amp;{R:15}={R:16}&amp;amp;{R:17}={R:18}&amp;amp;{R:19}={R:20}&quot; /&gt;
&lt;/rule&gt;&lt;/rules&gt; &lt;/rewrite&gt;</pre>
                </td>
            </tr>
            	
            <tr>
                <th scope="row">
                    nginx                </th>
                <td><a href="javascript:setCopy($('#pre_nginx').text(),'copy_success','admin');">copy</a>
                    <pre id="pre_nginx">rewrite ^(.*)/index.html$ $1/index.php last;
rewrite ^(.*)/(\w+).html$ $1/index.php?do=$2 last; 
rewrite ^(.*)/(\w+)-(\w+)-(\w+).html$ $1/index.php?do=$2&$3=$4 last; 
rewrite ^(.*)/(\w+)-(\w+)-(\w+)-(\w+)-(\w+).html$ $1/index.php?do=$2&$3=$4&$5=$6 last; 
rewrite ^(.*)/(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+).html$ $1/index.php?do=$2&$3=$4&$5=$6&$7=$8 last; 
rewrite ^(.*)/(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+).html$ $1/index.php?do=$2&$3=$4&$5=$6&$7=$8&$9=$10 last; 
rewrite ^(.*)/(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+).html$ $1/index.php?do=$2&$3=$4&$5=$6&$7=$8&$9=$10&$11=$12 last; 
rewrite ^(.*)/(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+).html$ $1/index.php?do=$2&$3=$4&$5=$6&$7=$8&$9=$10&$11=$12&$13=$14 last; 
rewrite ^(.*)/(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+).html$ $1/index.php?do=$2&$3=$4&$5=$6&$7=$8&$9=$10&$11=$12&$13=$14&$15=$16 last; 
rewrite ^(.*)/(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+).html$ $1/index.php?do=$2&$3=$4&$5=$6&$7=$8&$9=$10&$11=$12&$13=$14&$15=$16&$17=$18 last; 
rewrite ^(.*)/(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+)-(\w+).html$ $1/index.php?do=$2&$3=$4&$5=$6&$7=$8&$9=$10&$11=$12&$13=$14&$15=$16&$17=$18&$19=$20 last; 
</pre>
                </td>
            </tr>
                        </table>
                    
                      
                    
        </form>
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
<script type="text/javascript" src="../../lang/cn/script/lang.js"></script>
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