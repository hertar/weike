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
    	<h1>网站公告管理</h1>
         <div class="tool">
            <a href="index.php?r=article/bulletin" class="here" >网站公告列表</a>
            <a href="index.php?r=article/bullentin_edit" >网站公告添加</a>
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
<input type="hidden" name="type" value="bulletin">
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
    	<div class="title"><h2>网站公告列表</h2></div>
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
                    <th width="30%" >网站公告标题</th>
                    <th width="60">访问量</th>
                    <th width="60">发布者</th>
                    <th width="60">发布时间</th>

                    <th width="25%">操作</th>
                  </tr>
  </thead>
                  <tbody>
                                    <tr class="item">
                  	<td><input type="checkbox" name="ckb[]" value="308" class="checkbox">308</td>
                    <td class="td28 wraphide">
                    	网站公告</td>
                    <td>
                    	<a href="index.php?do=article&view=edit&art_id=308&type=bulletin&page=1" >
</a>
</td>
                    <td class="wraphide">6</td>
                    <td class="wraphide">客客族</td>
                    <td class="ws_break">2013-04-03</td>
                    <td>
                    	 
<a href="/public/index.php?do=single&art_id=308" target="_blank" class="button"><span class="book icon"></span>浏览</a> 
<a href="index.php?do=article&view=edit&art_id=308&type=bulletin&page=1" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=article&view=list&w[username]=&w[art_title]=&w[art_cat_id]=&page_size=&page=&type=bulletin&ord[0]=&ord[1]=&art_id=308&ac=del&page=1"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
                                    <tr class="item">
                  	<td><input type="checkbox" name="ckb[]" value="304" class="checkbox">304</td>
                    <td class="td28 wraphide">
                    	网站公告</td>
                    <td>
                    	<a href="index.php?do=article&view=edit&art_id=304&type=bulletin&page=1" >
震撼上线4</a>
</td>
                    <td class="wraphide">6</td>
                    <td class="wraphide">客客族</td>
                    <td class="ws_break">2012-08-31</td>
                    <td>
                    	 
<a href="/public/index.php?do=single&art_id=304" target="_blank" class="button"><span class="book icon"></span>浏览</a> 
<a href="index.php?do=article&view=edit&art_id=304&type=bulletin&page=1" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=article&view=list&w[username]=&w[art_title]=&w[art_cat_id]=&page_size=&page=&type=bulletin&ord[0]=&ord[1]=&art_id=304&ac=del&page=1"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
                                    <tr class="item">
                  	<td><input type="checkbox" name="ckb[]" value="303" class="checkbox">303</td>
                    <td class="td28 wraphide">
                    	网站公告</td>
                    <td>
                    	<a href="index.php?do=article&view=edit&art_id=303&type=bulletin&page=1" >
震撼上线3</a>
</td>
                    <td class="wraphide">6</td>
                    <td class="wraphide">客客族</td>
                    <td class="ws_break">2012-08-31</td>
                    <td>
                    	 
<a href="/public/index.php?do=single&art_id=303" target="_blank" class="button"><span class="book icon"></span>浏览</a> 
<a href="index.php?do=article&view=edit&art_id=303&type=bulletin&page=1" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=article&view=list&w[username]=&w[art_title]=&w[art_cat_id]=&page_size=&page=&type=bulletin&ord[0]=&ord[1]=&art_id=303&ac=del&page=1"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
                                    <tr class="item">
                  	<td><input type="checkbox" name="ckb[]" value="302" class="checkbox">302</td>
                    <td class="td28 wraphide">
                    	网站公告</td>
                    <td>
                    	<a href="index.php?do=article&view=edit&art_id=302&type=bulletin&page=1" >
震撼上线2</a>
</td>
                    <td class="wraphide">4</td>
                    <td class="wraphide">客客族</td>
                    <td class="ws_break">2012-08-31</td>
                    <td>
                    	 
<a href="/public/index.php?do=single&art_id=302" target="_blank" class="button"><span class="book icon"></span>浏览</a> 
<a href="index.php?do=article&view=edit&art_id=302&type=bulletin&page=1" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=article&view=list&w[username]=&w[art_title]=&w[art_cat_id]=&page_size=&page=&type=bulletin&ord[0]=&ord[1]=&art_id=302&ac=del&page=1"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
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
  <div class="page"></div>
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
