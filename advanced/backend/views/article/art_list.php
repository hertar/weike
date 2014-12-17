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
    	<h1>文章管理</h1>
         <div class="tool">
            <a href="index.php?r=article/art_list" class="here" >文章列表</a>
            <a href="index.php?r=article/art_edit" >文章添加</a>
    	</div>
</div>
    <!--页头结束-->

    <!--提示结束-->
     
        <div class="box search p_relative">
    	<div class="title"><h2>搜索</h2></div>
        <div class="detail" id="detail">
           
    <form action="#" method="get" name="s" id="sl">
            	<input type="hidden" name="do" value="article">
<input type="hidden" name="view" value="list">
<input type="hidden" name="type" value="art">
<input type="hidden" name="page" value="1">
 
 
                <table cellspacing="0" cellpadding="0">
<tbody>
                        <tr>
                            <th>作者</th>
                            <td><input type="text" value="" name="w[username]" class="txt"/></td>
                            <th>文章标题</th>
                            <td colspan="3"><input type="text" value="" name="w[art_title]" class="txt"/>*支持模糊查询</td>
                            
</tr>
    					

                        
                        <tr> 
                            <th>栏目</th>
                            <td>
                            	<select class="ps vm" name="w[art_cat_id]" id="catid">
                            	<option value=1>客客资讯</option><option value=358>&nbsp;&nbsp;&nbsp; |-新闻列表</option><option value=363>&nbsp;&nbsp;&nbsp;&nbsp; |--2222</option><option value=203>&nbsp;&nbsp;&nbsp; |-安全交易</option><option value=361>&nbsp;&nbsp;&nbsp;&nbsp; |--ffffff</option><option value=359>&nbsp;&nbsp;&nbsp;&nbsp; |--111111111</option><option value=365>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; |---rrrrrr</option><option value=202>&nbsp;&nbsp;&nbsp; |-关于我们</option><option value=17>&nbsp;&nbsp;&nbsp; |-网站公告</option><option value=360>&nbsp;&nbsp;&nbsp;&nbsp; |--你好吗</option><option value=7>&nbsp;&nbsp;&nbsp; |-媒体报导</option><option value=5>&nbsp;&nbsp;&nbsp; |-行业动态</option><option value=4>&nbsp;&nbsp;&nbsp; |-政策法规</option><option value=2>&nbsp;&nbsp;&nbsp; |-联系我们</option>
</select>
</td>
<th>排序</th>
<td>
                                <select name="ord[]">
                                	<option value="art_id"  selected="selected">默认排序</option>
                                	<option value="pub_time" >发布时间</option>
                                </select>
                                <select name="ord[]">
                               		 <option selected="selected"  value="desc">递减</option>
                                	<option  value="asc">递增</option>
                                </select>
</td> 
                            <th>显示结果</th>
                            <td><select name="page_size">
<option value="10" selected="selected">每页显示10</option>
<option value="20" >每页显示20</option>
<option value="30" >每页显示30</option>
</select>
                              	<button class="pill" type="submit" value="搜索" name="sbt_search">
                            		<span class="icon magnifier"></span>搜索</button>
</td>
                        </tr>
                         
                        
                    </tbody>
                </table>
            </form>

        </div>
    </div>
    <!--搜索结束-->
    
    <div class="box list">
    	<div class="title"><h2>文章列表</h2></div>
        <div class="detail">
        	<form action="" id='frm_list' method="post">
        		<div id="ajax_dom">
        		<input type="hidden" name="page" value="1">
              <table cellpadding="0" cellspacing="0">
                <thead>
                  <tr>
                    <th width="20">ID
</th>
                    <th width="60">分类</th>
                    <th width="30%" >文章标题</th>
                    <th width="60">访问量</th>
                    <th width="60">发布者</th>
                    <th width="60">发布时间</th>

                    <th width="25%">操作</th>
                  </tr>
  </thead>
                  <tbody>
                                    <tr class="item">
                  	<td><input type="checkbox" name="ckb[]" value="250" class="checkbox">250</td>
                    <td class="td28 wraphide">
                    	新闻列表</td>
                    <td>
                    	<a href="index.php?do=article&view=edit&art_id=250&type=art&page=1" >
中金香港直销Facebook股权：初定100万股门槛</a>
</td>
                    <td class="wraphide">7</td>
                    <td class="wraphide">匿名</td>
                    <td class="ws_break">2012-02-17</td>
                    <td>
                    	 
<a href="/public/index.php?do=article&view=article_info&art_id=250&page=1" target="_blank" class="button"><span class="book icon"></span>浏览</a> 
<a href="index.php?do=article&view=edit&art_id=250&type=art&page=1" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=article&view=list&w[username]=&w[art_title]=&w[art_cat_id]=&page_size=&page=&type=art&ord[0]=&ord[1]=&art_id=250&ac=del&page=1"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
                                    <tr class="item">
                  	<td><input type="checkbox" name="ckb[]" value="249" class="checkbox">249</td>
                    <td class="td28 wraphide">
                    	行业动态</td>
                    <td>
                    	<a href="index.php?do=article&view=edit&art_id=249&type=art&page=1" >
依法诚信纳税共建和谐社会</a>
</td>
                    <td class="wraphide">3</td>
                    <td class="wraphide">匿名</td>
                    <td class="ws_break">2012-02-17</td>
                    <td>
                    	 
<a href="/public/index.php?do=article&view=article_info&art_id=249&page=1" target="_blank" class="button"><span class="book icon"></span>浏览</a> 
<a href="index.php?do=article&view=edit&art_id=249&type=art&page=1" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=article&view=list&w[username]=&w[art_title]=&w[art_cat_id]=&page_size=&page=&type=art&ord[0]=&ord[1]=&art_id=249&ac=del&page=1"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
                                    <tr class="item">
                  	<td><input type="checkbox" name="ckb[]" value="248" class="checkbox">248</td>
                    <td class="td28 wraphide">
                    	政策法规</td>
                    <td>
                    	<a href="index.php?do=article&view=edit&art_id=248&type=art&page=1" >
诚信体系之诚信保障</a>
</td>
                    <td class="wraphide">5</td>
                    <td class="wraphide">匿名</td>
                    <td class="ws_break">2012-02-17</td>
                    <td>
                    	 
<a href="/public/index.php?do=article&view=article_info&art_id=248&page=1" target="_blank" class="button"><span class="book icon"></span>浏览</a> 
<a href="index.php?do=article&view=edit&art_id=248&type=art&page=1" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=article&view=list&w[username]=&w[art_title]=&w[art_cat_id]=&page_size=&page=&type=art&ord[0]=&ord[1]=&art_id=248&ac=del&page=1"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
                                    <tr class="item">
                  	<td><input type="checkbox" name="ckb[]" value="247" class="checkbox">247</td>
                    <td class="td28 wraphide">
                    	媒体报导</td>
                    <td>
                    	<a href="index.php?do=article&view=edit&art_id=247&type=art&page=1" >
拥有梦想的快乐威客</a>
</td>
                    <td class="wraphide">2</td>
                    <td class="wraphide">匿名</td>
                    <td class="ws_break">2012-02-17</td>
                    <td>
                    	 
<a href="/public/index.php?do=article&view=article_info&art_id=247&page=1" target="_blank" class="button"><span class="book icon"></span>浏览</a> 
<a href="index.php?do=article&view=edit&art_id=247&type=art&page=1" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=article&view=list&w[username]=&w[art_title]=&w[art_cat_id]=&page_size=&page=&type=art&ord[0]=&ord[1]=&art_id=247&ac=del&page=1"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
                                    <tr class="item">
                  	<td><input type="checkbox" name="ckb[]" value="246" class="checkbox">246</td>
                    <td class="td28 wraphide">
                    	行业动态</td>
                    <td>
                    	<a href="index.php?do=article&view=edit&art_id=246&type=art&page=1" >
威客营销的成功之路及潜在危机分析</a>
</td>
                    <td class="wraphide">2</td>
                    <td class="wraphide">匿名</td>
                    <td class="ws_break">2012-02-17</td>
                    <td>
                    	 
<a href="/public/index.php?do=article&view=article_info&art_id=246&page=1" target="_blank" class="button"><span class="book icon"></span>浏览</a> 
<a href="index.php?do=article&view=edit&art_id=246&type=art&page=1" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=article&view=list&w[username]=&w[art_title]=&w[art_cat_id]=&page_size=&page=&type=art&ord[0]=&ord[1]=&art_id=246&ac=del&page=1"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
                                    <tr class="item">
                  	<td><input type="checkbox" name="ckb[]" value="244" class="checkbox">244</td>
                    <td class="td28 wraphide">
                    	网站公告</td>
                    <td>
                    	<a href="index.php?do=article&view=edit&art_id=244&type=art&page=1" >
什么是威客？</a>
</td>
                    <td class="wraphide">3</td>
                    <td class="wraphide">匿名</td>
                    <td class="ws_break">2012-02-17</td>
                    <td>
                    	 
<a href="/public/index.php?do=article&view=article_info&art_id=244&page=1" target="_blank" class="button"><span class="book icon"></span>浏览</a> 
<a href="index.php?do=article&view=edit&art_id=244&type=art&page=1" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=article&view=list&w[username]=&w[art_title]=&w[art_cat_id]=&page_size=&page=&type=art&ord[0]=&ord[1]=&art_id=244&ac=del&page=1"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
                                    <tr class="item">
                  	<td><input type="checkbox" name="ckb[]" value="243" class="checkbox">243</td>
                    <td class="td28 wraphide">
                    	网站公告</td>
                    <td>
                    	<a href="index.php?do=article&view=edit&art_id=243&type=art&page=1" >
威客必看：发帖任务参与须知</a>
</td>
                    <td class="wraphide">3</td>
                    <td class="wraphide">匿名</td>
                    <td class="ws_break">2012-02-17</td>
                    <td>
                    	 
<a href="/public/index.php?do=article&view=article_info&art_id=243&page=1" target="_blank" class="button"><span class="book icon"></span>浏览</a> 
<a href="index.php?do=article&view=edit&art_id=243&type=art&page=1" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=article&view=list&w[username]=&w[art_title]=&w[art_cat_id]=&page_size=&page=&type=art&ord[0]=&ord[1]=&art_id=243&ac=del&page=1"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
                                    <tr class="item">
                  	<td><input type="checkbox" name="ckb[]" value="242" class="checkbox">242</td>
                    <td class="td28 wraphide">
                    	安全交易</td>
                    <td>
                    	<a href="index.php?do=article&view=edit&art_id=242&type=art&page=1" >
支付方式</a>
</td>
                    <td class="wraphide">4</td>
                    <td class="wraphide">匿名</td>
                    <td class="ws_break">2012-02-17</td>
                    <td>
                    	 
<a href="/public/index.php?do=article&view=article_info&art_id=242&page=1" target="_blank" class="button"><span class="book icon"></span>浏览</a> 
<a href="index.php?do=article&view=edit&art_id=242&type=art&page=1" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=article&view=list&w[username]=&w[art_title]=&w[art_cat_id]=&page_size=&page=&type=art&ord[0]=&ord[1]=&art_id=242&ac=del&page=1"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
                                    <tr class="item">
                  	<td><input type="checkbox" name="ckb[]" value="241" class="checkbox">241</td>
                    <td class="td28 wraphide">
                    	政策法规</td>
                    <td>
                    	<a href="index.php?do=article&view=edit&art_id=241&type=art&page=1" >
免责声明</a>
</td>
                    <td class="wraphide">0</td>
                    <td class="wraphide">匿名</td>
                    <td class="ws_break">2012-02-17</td>
                    <td>
                    	 
<a href="/public/index.php?do=article&view=article_info&art_id=241&page=1" target="_blank" class="button"><span class="book icon"></span>浏览</a> 
<a href="index.php?do=article&view=edit&art_id=241&type=art&page=1" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=article&view=list&w[username]=&w[art_title]=&w[art_cat_id]=&page_size=&page=&type=art&ord[0]=&ord[1]=&art_id=241&ac=del&page=1"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
                                    <tr class="item">
                  	<td><input type="checkbox" name="ckb[]" value="240" class="checkbox">240</td>
                    <td class="td28 wraphide">
                    	联系我们</td>
                    <td>
                    	<a href="index.php?do=article&view=edit&art_id=240&type=art&page=1" >
联系方式</a>
</td>
                    <td class="wraphide">4</td>
                    <td class="wraphide">匿名</td>
                    <td class="ws_break">2013-04-03</td>
                    <td>
                    	 
<a href="/public/index.php?do=article&view=article_info&art_id=240&page=1" target="_blank" class="button"><span class="book icon"></span>浏览</a> 
<a href="index.php?do=article&view=edit&art_id=240&type=art&page=1" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=article&view=list&w[username]=&w[art_title]=&w[art_cat_id]=&page_size=&page=&type=art&ord[0]=&ord[1]=&art_id=240&ac=del&page=1"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
                                    </tbody>
  <tfoot>
                  <tr>
                    <td colspan="7">
                    <div class="clearfix">
                  		<input type="checkbox" onclick="checkall(event);" id="checkbox" name="checkbox"/>
                        <label for="checkbox">全选</label><!-- 全选 -->
                        <input type="hidden" name="sbt_action" class="sbt_action"/>
<button name="sbt_action" type="submit" value="批量删除" onclick="return batch_act(this,'frm_list');" class="pill negative"><span class="icon trash"></span>批量删除</button>
                    </div>
                    </td>
                  </tr>
                </tfoot>
              </table>
  <div class="page"><span> 1 / 3页 </span> <a class="selected">1</a><a href=javascript:; onclick=ajaxpage('ajax_dom','index.php?do=article&view=list&w[username]=&w[art_title]=&w[art_cat_id]=&page_size=&page=&type=art&ord[0]=&ord[1]=&page=2','2','1')>2</a><a href=javascript:; onclick=ajaxpage('ajax_dom','index.php?do=article&view=list&w[username]=&w[art_title]=&w[art_cat_id]=&page_size=&page=&type=art&ord[0]=&ord[1]=&page=3','3','1')>3</a><a href=javascript:; onclick=ajaxpage('ajax_dom','index.php?do=article&view=list&w[username]=&w[art_title]=&w[art_cat_id]=&page_size=&page=&type=art&ord[0]=&ord[1]=&page=2','2','1')>下一页>></a></div>
  </div>
        	</form>
        </div>       
    </div>
<!--主体结束-->
<script type="text/javascript">
function createHtml(writedir,filename){
var url = "index.php?do=static&view=update&sbt_edit=1&write_dir="+writedir+"&file_name="+filename;
ajaxDialog(url);
}
 function ajaxDialog(url){
 	 art.dialog({
title: "静态文件更新",
content: "开始更新静态文件",
yesFn: function(){
var dia = this;
dia.content("静态文件更新中,请勿操作").lock();
$.getJSON(url,function(json){
if(json.status==1){dia.close();
art.dialog({icon: 'succeed',content: json.msg,time:3});
}else{art.dialog.alert(json.msg);}
return false;
})
 return false;
},
noFn :function(){this.close();return false;}
})
 }
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
