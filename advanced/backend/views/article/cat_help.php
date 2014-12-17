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
<style type="text/css">
.jia {background: url(/public/tpl/img/plus.gif)}
.jian {background: url(/public/tpl/img/minus.gif) }
</style>
<div class="page_title">
    	<h1>分类管理</h1>
        <div class="tool">
            <a href="index.php?r=article/cat_help" class="here">分类管理</a>
            <a href="index.php?r=article/cat_edit"  >分类添加</a>           
</div>
</div>



<div class="box search p_relative">
    	<div class="title"><h2>搜索</h2></div>
        <div class="detail" id="detail">
           
    <form action="" method="get">
            	<input type="hidden" name="do" value="article">
<input type="hidden" name="view" value="cat_list">
<input type="hidden" name="type" value="help">
<input type="hidden" name="page" value="">
 
                <table cellspacing="0" cellpadding="0">
<tbody>
                        <tr>
                            <th>所属分类</th>
                            <td>
                            	<select   name="w[art_cat_pid]" id="catid">
                            	<option value=100>帮助中心</option><option value=294>&nbsp;&nbsp;&nbsp; |-新手上路</option><option value=347>&nbsp;&nbsp;&nbsp;&nbsp; |--违规</option><option value=346>&nbsp;&nbsp;&nbsp;&nbsp; |--交易维权</option><option value=345>&nbsp;&nbsp;&nbsp;&nbsp; |--名词解答</option><option value=364>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; |---234</option><option value=327>&nbsp;&nbsp;&nbsp;&nbsp; |--账号管理</option><option value=312>&nbsp;&nbsp;&nbsp;&nbsp; |--如何支付</option><option value=311>&nbsp;&nbsp;&nbsp;&nbsp; |--如何赚钱</option><option value=310>&nbsp;&nbsp;&nbsp;&nbsp; |--相关认证</option><option value=298>&nbsp;&nbsp;&nbsp;&nbsp; |--注册登陆</option><option value=362>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; |---dddd</option><option value=297>&nbsp;&nbsp;&nbsp;&nbsp; |--提现充值</option><option value=296>&nbsp;&nbsp;&nbsp;&nbsp; |--账号安全</option><option value=293>&nbsp;&nbsp;&nbsp; |-常见问题</option><option value=326>&nbsp;&nbsp;&nbsp;&nbsp; |--交易付款</option><option value=319>&nbsp;&nbsp;&nbsp;&nbsp; |--账号充值</option><option value=291>&nbsp;&nbsp;&nbsp; |-威客商城</option><option value=325>&nbsp;&nbsp;&nbsp;&nbsp; |--威客服务</option><option value=324>&nbsp;&nbsp;&nbsp;&nbsp; |--威客作品</option><option value=323>&nbsp;&nbsp;&nbsp;&nbsp; |--商城规则</option><option value=290>&nbsp;&nbsp;&nbsp; |-任务大厅</option><option value=329>&nbsp;&nbsp;&nbsp;&nbsp; |--我是服务商</option><option value=328>&nbsp;&nbsp;&nbsp;&nbsp; |--我是买家</option><option value=309>&nbsp;&nbsp;&nbsp;&nbsp; |--支付汇款</option><option value=308>&nbsp;&nbsp;&nbsp;&nbsp; |--任务选标</option><option value=307>&nbsp;&nbsp;&nbsp;&nbsp; |--线下交易</option><option value=306>&nbsp;&nbsp;&nbsp;&nbsp; |--招标任务</option><option value=305>&nbsp;&nbsp;&nbsp;&nbsp; |--悬赏任务</option><option value=304>&nbsp;&nbsp;&nbsp;&nbsp; |--雇佣任务</option><option value=303>&nbsp;&nbsp;&nbsp;&nbsp; |--任务问题</option><option value=302>&nbsp;&nbsp;&nbsp;&nbsp; |--评价&等级</option><option value=301>&nbsp;&nbsp;&nbsp;&nbsp; |--参与任务</option><option value=300>&nbsp;&nbsp;&nbsp;&nbsp; |--任务中标</option></select>
(父分类)
                            </td>
                            <th>分类名字</th>
                            <td><input type="text" value="" name="w[cat_name]" class="txt"/>*支持模糊查询</td>
                             <td></td> 
</tr>
                        <tr >
                            
<th>结果排序</th>
<td>

<select name="ord[]">
                                <option value="art_cat_id"  selected="selected">默认排序</option>
                                <option value="on_time" >添加时间</option>
                                </select>
                                <select name="ord[]">
                                <option selected="selected"  value="desc">递减</option>
                                <option  value="asc">递增</option>
                                </select>
<button class="pill" type="submit" value=搜索 name="sbt_search">
                            		<span class="icon magnifier">&nbsp;</span>搜索</button>
</td>
                             
                            <td colspan="3"> 
                              	&nbsp;
</td>
  
                        </tr>
                    </tbody>
                </table>
            </form>

        </div>
    </div>
    <!--搜索结束-->
<div class="box list">
    	<div class="title"><h2>分类列表</h2></div>
        <div class="detail">
        	<form action="" id='frm_list' method="post">
              <table cellpadding="0" cellspacing="0">
                <tbody>
                <tr>
                 <!--   <th width="8%">ID</th>-->
                    <th width="7%">显示顺序</th>
                    <th width="30%">分类名字</th>                    
                    <th width="17%"> 修改时间</th>
                   <th width="13%">操作</th>
                </tr>
                
                 <tbody id="indus_item_l_100" style="display:;">
                  <tr class="item" align="left">
                  <!--	<td>100</td>-->
                    <td class="td28">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_100" value="3" onblur="edit_listorder(100,this.value)"></td>
                    <td align="left">
                    	<span class="jia" 
onclick="if($(this).attr('class')=='jia'){
showids_100('show');
$(this).attr('class','jian');
}else{showids_100('hide');
$(this).attr('class','jia')}
" >&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_100"
 style="font-weight:900;font-size:16px;">
                            <input type="text" class="txt" value="帮助中心" 
readonly="readonly" >
</span>
<a href="javascript:;" style="color:#ff6600" onclick="addchild(100,'')">增加子类</a>					
</td>                                
                    <td>2010-07-08 10:35:11</td>
                    <td>
<a href="index.php?do=article&view=cat_edit&art_cat_id=100&art_cat_pid=0&type=help" class="button dbl_target"><span class="pen icon"></span>编辑</a>

</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_290" style="display:none;">
                  <tr class="item" align="left">
                  <!--	<td>290</td>-->
                    <td class="td28">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_290" value="2" onblur="edit_listorder(290,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jia" 
onclick="if($(this).attr('class')=='jia'){
showids_290('show');
$(this).attr('class','jian');
}else{showids_290('hide');
$(this).attr('class','jia')}
" >&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_290"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="任务大厅" 
readonly="readonly" >
</span>
</td>                                
                    <td>2011-12-06 15:52:53</td>
                    <td>
<a href="index.php?do=article&view=cat_edit&art_cat_id=290&art_cat_pid=100&type=help" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=article&view=cat_list&type=help&w[art_cat_pid]=&w[cat_name]=
		&=&art_cat_id=290&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>

</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_300" style="display:none;">
                  <tr class="item" align="left">
                  <!--	<td>300</td>-->
                    <td class="td28">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_300" value="2" onblur="edit_listorder(300,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp;&nbsp; |--<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_300"
 style="font-weight:300;font-size:12px;">
                            <input type="text" class="txt" value="任务中标" 
readonly="readonly" >
</span>
</td>                                
                    <td>2011-12-06 16:00:51</td>
                    <td>
<a href="index.php?do=article&view=cat_edit&art_cat_id=300&art_cat_pid=290&type=help" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=article&view=cat_list&type=help&w[art_cat_pid]=&w[cat_name]=
		&=&art_cat_id=300&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>

</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_301" style="display:none;">
                  <tr class="item" align="left">
                  <!--	<td>301</td>-->
                    <td class="td28">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_301" value="3" onblur="edit_listorder(301,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp;&nbsp; |--<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_301"
 style="font-weight:300;font-size:12px;">
                            <input type="text" class="txt" value="参与任务" 
readonly="readonly" >
</span>
</td>                                
                    <td>2011-12-06 16:01:01</td>
                    <td>
<a href="index.php?do=article&view=cat_edit&art_cat_id=301&art_cat_pid=290&type=help" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=article&view=cat_list&type=help&w[art_cat_pid]=&w[cat_name]=
		&=&art_cat_id=301&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>

</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_302" style="display:none;">
                  <tr class="item" align="left">
                  <!--	<td>302</td>-->
                    <td class="td28">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_302" value="4" onblur="edit_listorder(302,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp;&nbsp; |--<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_302"
 style="font-weight:300;font-size:12px;">
                            <input type="text" class="txt" value="评价&等级" 
readonly="readonly" >
</span>
</td>                                
                    <td>2011-12-06 16:01:13</td>
                    <td>
<a href="index.php?do=article&view=cat_edit&art_cat_id=302&art_cat_pid=290&type=help" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=article&view=cat_list&type=help&w[art_cat_pid]=&w[cat_name]=
		&=&art_cat_id=302&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>

</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_303" style="display:none;">
                  <tr class="item" align="left">
                  <!--	<td>303</td>-->
                    <td class="td28">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_303" value="5" onblur="edit_listorder(303,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp;&nbsp; |--<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_303"
 style="font-weight:300;font-size:12px;">
                            <input type="text" class="txt" value="任务问题" 
readonly="readonly" >
</span>
</td>                                
                    <td>2011-12-06 16:01:28</td>
                    <td>
<a href="index.php?do=article&view=cat_edit&art_cat_id=303&art_cat_pid=290&type=help" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=article&view=cat_list&type=help&w[art_cat_pid]=&w[cat_name]=
		&=&art_cat_id=303&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>

</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_304" style="display:none;">
                  <tr class="item" align="left">
                  <!--	<td>304</td>-->
                    <td class="td28">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_304" value="6" onblur="edit_listorder(304,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp;&nbsp; |--<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_304"
 style="font-weight:300;font-size:12px;">
                            <input type="text" class="txt" value="雇佣任务" 
readonly="readonly" >
</span>
</td>                                
                    <td>2011-12-06 16:02:11</td>
                    <td>
<a href="index.php?do=article&view=cat_edit&art_cat_id=304&art_cat_pid=290&type=help" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=article&view=cat_list&type=help&w[art_cat_pid]=&w[cat_name]=
		&=&art_cat_id=304&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>

</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_305" style="display:none;">
                  <tr class="item" align="left">
                  <!--	<td>305</td>-->
                    <td class="td28">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_305" value="7" onblur="edit_listorder(305,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp;&nbsp; |--<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_305"
 style="font-weight:300;font-size:12px;">
                            <input type="text" class="txt" value="悬赏任务" 
readonly="readonly" >
</span>
</td>                                
                    <td>2011-12-06 16:02:24</td>
                    <td>
<a href="index.php?do=article&view=cat_edit&art_cat_id=305&art_cat_pid=290&type=help" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=article&view=cat_list&type=help&w[art_cat_pid]=&w[cat_name]=
		&=&art_cat_id=305&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>

</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_306" style="display:none;">
                  <tr class="item" align="left">
                  <!--	<td>306</td>-->
                    <td class="td28">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_306" value="8" onblur="edit_listorder(306,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp;&nbsp; |--<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_306"
 style="font-weight:300;font-size:12px;">
                            <input type="text" class="txt" value="招标任务" 
readonly="readonly" >
</span>
</td>                                
                    <td>2011-12-06 16:02:34</td>
                    <td>
<a href="index.php?do=article&view=cat_edit&art_cat_id=306&art_cat_pid=290&type=help" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=article&view=cat_list&type=help&w[art_cat_pid]=&w[cat_name]=
		&=&art_cat_id=306&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>

</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_307" style="display:none;">
                  <tr class="item" align="left">
                  <!--	<td>307</td>-->
                    <td class="td28">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_307" value="9" onblur="edit_listorder(307,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp;&nbsp; |--<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_307"
 style="font-weight:300;font-size:12px;">
                            <input type="text" class="txt" value="线下交易" 
readonly="readonly" >
</span>
</td>                                
                    <td>2011-12-06 16:02:45</td>
                    <td>
<a href="index.php?do=article&view=cat_edit&art_cat_id=307&art_cat_pid=290&type=help" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=article&view=cat_list&type=help&w[art_cat_pid]=&w[cat_name]=
		&=&art_cat_id=307&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>

</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_308" style="display:none;">
                  <tr class="item" align="left">
                  <!--	<td>308</td>-->
                    <td class="td28">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_308" value="10" onblur="edit_listorder(308,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp;&nbsp; |--<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_308"
 style="font-weight:300;font-size:12px;">
                            <input type="text" class="txt" value="任务选标" 
readonly="readonly" >
</span>
</td>                                
                    <td>2011-12-06 16:03:00</td>
                    <td>
<a href="index.php?do=article&view=cat_edit&art_cat_id=308&art_cat_pid=290&type=help" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=article&view=cat_list&type=help&w[art_cat_pid]=&w[cat_name]=
		&=&art_cat_id=308&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>

</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_309" style="display:none;">
                  <tr class="item" align="left">
                  <!--	<td>309</td>-->
                    <td class="td28">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_309" value="11" onblur="edit_listorder(309,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp;&nbsp; |--<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_309"
 style="font-weight:300;font-size:12px;">
                            <input type="text" class="txt" value="支付汇款" 
readonly="readonly" >
</span>
</td>                                
                    <td>2011-12-06 16:03:09</td>
                    <td>
<a href="index.php?do=article&view=cat_edit&art_cat_id=309&art_cat_pid=290&type=help" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=article&view=cat_list&type=help&w[art_cat_pid]=&w[cat_name]=
		&=&art_cat_id=309&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>

</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_328" style="display:none;">
                  <tr class="item" align="left">
                  <!--	<td>328</td>-->
                    <td class="td28">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_328" value="2" onblur="edit_listorder(328,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp;&nbsp; |--<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_328"
 style="font-weight:300;font-size:12px;">
                            <input type="text" class="txt" value="我是买家" 
readonly="readonly" >
</span>
</td>                                
                    <td>2011-12-06 17:56:01</td>
                    <td>
<a href="index.php?do=article&view=cat_edit&art_cat_id=328&art_cat_pid=290&type=help" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=article&view=cat_list&type=help&w[art_cat_pid]=&w[cat_name]=
		&=&art_cat_id=328&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>

</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_329" style="display:none;">
                  <tr class="item" align="left">
                  <!--	<td>329</td>-->
                    <td class="td28">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_329" value="1" onblur="edit_listorder(329,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp;&nbsp; |--<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_329"
 style="font-weight:300;font-size:12px;">
                            <input type="text" class="txt" value="我是服务商" 
readonly="readonly" >
</span>
</td>                                
                    <td>2011-12-06 17:56:11</td>
                    <td>
<a href="index.php?do=article&view=cat_edit&art_cat_id=329&art_cat_pid=290&type=help" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=article&view=cat_list&type=help&w[art_cat_pid]=&w[cat_name]=
		&=&art_cat_id=329&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>

</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_291" style="display:none;">
                  <tr class="item" align="left">
                  <!--	<td>291</td>-->
                    <td class="td28">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_291" value="0" onblur="edit_listorder(291,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jia" 
onclick="if($(this).attr('class')=='jia'){
showids_291('show');
$(this).attr('class','jian');
}else{showids_291('hide');
$(this).attr('class','jia')}
" >&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_291"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="威客商城" 
readonly="readonly" >
</span>
</td>                                
                    <td>2013-04-02 09:36:21</td>
                    <td>
<a href="index.php?do=article&view=cat_edit&art_cat_id=291&art_cat_pid=100&type=help" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=article&view=cat_list&type=help&w[art_cat_pid]=&w[cat_name]=
		&=&art_cat_id=291&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>

</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_323" style="display:none;">
                  <tr class="item" align="left">
                  <!--	<td>323</td>-->
                    <td class="td28">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_323" value="1" onblur="edit_listorder(323,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp;&nbsp; |--<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_323"
 style="font-weight:300;font-size:12px;">
                            <input type="text" class="txt" value="商城规则" 
readonly="readonly" >
</span>
</td>                                
                    <td>2011-12-06 16:08:55</td>
                    <td>
<a href="index.php?do=article&view=cat_edit&art_cat_id=323&art_cat_pid=291&type=help" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=article&view=cat_list&type=help&w[art_cat_pid]=&w[cat_name]=
		&=&art_cat_id=323&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>

</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_324" style="display:none;">
                  <tr class="item" align="left">
                  <!--	<td>324</td>-->
                    <td class="td28">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_324" value="1" onblur="edit_listorder(324,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp;&nbsp; |--<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_324"
 style="font-weight:300;font-size:12px;">
                            <input type="text" class="txt" value="威客作品" 
readonly="readonly" >
</span>
</td>                                
                    <td>2011-12-06 16:09:24</td>
                    <td>
<a href="index.php?do=article&view=cat_edit&art_cat_id=324&art_cat_pid=291&type=help" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=article&view=cat_list&type=help&w[art_cat_pid]=&w[cat_name]=
		&=&art_cat_id=324&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>

</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_325" style="display:none;">
                  <tr class="item" align="left">
                  <!--	<td>325</td>-->
                    <td class="td28">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_325" value="0" onblur="edit_listorder(325,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp;&nbsp; |--<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_325"
 style="font-weight:300;font-size:12px;">
                            <input type="text" class="txt" value="威客服务" 
readonly="readonly" >
</span>
</td>                                
                    <td>2013-04-02 09:36:47</td>
                    <td>
<a href="index.php?do=article&view=cat_edit&art_cat_id=325&art_cat_pid=291&type=help" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=article&view=cat_list&type=help&w[art_cat_pid]=&w[cat_name]=
		&=&art_cat_id=325&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>

</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_293" style="display:none;">
                  <tr class="item" align="left">
                  <!--	<td>293</td>-->
                    <td class="td28">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_293" value="5" onblur="edit_listorder(293,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jia" 
onclick="if($(this).attr('class')=='jia'){
showids_293('show');
$(this).attr('class','jian');
}else{showids_293('hide');
$(this).attr('class','jia')}
" >&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_293"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="常见问题" 
readonly="readonly" >
</span>
</td>                                
                    <td>2013-04-02 09:35:51</td>
                    <td>
<a href="index.php?do=article&view=cat_edit&art_cat_id=293&art_cat_pid=100&type=help" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=article&view=cat_list&type=help&w[art_cat_pid]=&w[cat_name]=
		&=&art_cat_id=293&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>

</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_319" style="display:none;">
                  <tr class="item" align="left">
                  <!--	<td>319</td>-->
                    <td class="td28">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_319" value="1" onblur="edit_listorder(319,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp;&nbsp; |--<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_319"
 style="font-weight:300;font-size:12px;">
                            <input type="text" class="txt" value="账号充值" 
readonly="readonly" >
</span>
</td>                                
                    <td>2011-12-06 16:08:02</td>
                    <td>
<a href="index.php?do=article&view=cat_edit&art_cat_id=319&art_cat_pid=293&type=help" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=article&view=cat_list&type=help&w[art_cat_pid]=&w[cat_name]=
		&=&art_cat_id=319&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>

</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_326" style="display:none;">
                  <tr class="item" align="left">
                  <!--	<td>326</td>-->
                    <td class="td28">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_326" value="4" onblur="edit_listorder(326,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp;&nbsp; |--<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_326"
 style="font-weight:300;font-size:12px;">
                            <input type="text" class="txt" value="交易付款" 
readonly="readonly" >
</span>
</td>                                
                    <td>2011-12-06 16:09:46</td>
                    <td>
<a href="index.php?do=article&view=cat_edit&art_cat_id=326&art_cat_pid=293&type=help" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=article&view=cat_list&type=help&w[art_cat_pid]=&w[cat_name]=
		&=&art_cat_id=326&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>

</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_294" style="display:none;">
                  <tr class="item" align="left">
                  <!--	<td>294</td>-->
                    <td class="td28">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_294" value="1" onblur="edit_listorder(294,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jia" 
onclick="if($(this).attr('class')=='jia'){
showids_294('show');
$(this).attr('class','jian');
}else{showids_294('hide');
$(this).attr('class','jia')}
" >&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_294"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="新手上路" 
readonly="readonly" >
</span>
</td>                                
                    <td>2011-12-06 15:53:17</td>
                    <td>
<a href="index.php?do=article&view=cat_edit&art_cat_id=294&art_cat_pid=100&type=help" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=article&view=cat_list&type=help&w[art_cat_pid]=&w[cat_name]=
		&=&art_cat_id=294&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>

</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_296" style="display:none;">
                  <tr class="item" align="left">
                  <!--	<td>296</td>-->
                    <td class="td28">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_296" value="1" onblur="edit_listorder(296,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp;&nbsp; |--<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_296"
 style="font-weight:300;font-size:12px;">
                            <input type="text" class="txt" value="账号安全" 
readonly="readonly" >
</span>
</td>                                
                    <td>2011-12-06 15:59:08</td>
                    <td>
<a href="index.php?do=article&view=cat_edit&art_cat_id=296&art_cat_pid=294&type=help" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=article&view=cat_list&type=help&w[art_cat_pid]=&w[cat_name]=
		&=&art_cat_id=296&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>

</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_297" style="display:none;">
                  <tr class="item" align="left">
                  <!--	<td>297</td>-->
                    <td class="td28">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_297" value="1" onblur="edit_listorder(297,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp;&nbsp; |--<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_297"
 style="font-weight:300;font-size:12px;">
                            <input type="text" class="txt" value="提现充值" 
readonly="readonly" >
</span>
</td>                                
                    <td>2011-12-06 15:59:28</td>
                    <td>
<a href="index.php?do=article&view=cat_edit&art_cat_id=297&art_cat_pid=294&type=help" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=article&view=cat_list&type=help&w[art_cat_pid]=&w[cat_name]=
		&=&art_cat_id=297&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>

</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_298" style="display:none;">
                  <tr class="item" align="left">
                  <!--	<td>298</td>-->
                    <td class="td28">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_298" value="1" onblur="edit_listorder(298,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp;&nbsp; |--<span class="jia" 
onclick="if($(this).attr('class')=='jia'){
showids_298('show');
$(this).attr('class','jian');
}else{showids_298('hide');
$(this).attr('class','jia')}
" >&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_298"
 style="font-weight:300;font-size:12px;">
                            <input type="text" class="txt" value="注册登陆" 
readonly="readonly" >
</span>
</td>                                
                    <td>2011-12-06 16:00:06</td>
                    <td>
<a href="index.php?do=article&view=cat_edit&art_cat_id=298&art_cat_pid=294&type=help" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=article&view=cat_list&type=help&w[art_cat_pid]=&w[cat_name]=
		&=&art_cat_id=298&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>

</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_362" style="display:none;">
                  <tr class="item" align="left">
                  <!--	<td>362</td>-->
                    <td class="td28">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_362" value="1" onblur="edit_listorder(362,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; |---<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_362"
 style="font-weight:0;font-size:10px;">
                            <input type="text" class="txt" value="dddd" 
readonly="readonly" >
</span>
</td>                                
                    <td>2012-09-07 10:54:15</td>
                    <td>
<a href="index.php?do=article&view=cat_edit&art_cat_id=362&art_cat_pid=298&type=help" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=article&view=cat_list&type=help&w[art_cat_pid]=&w[cat_name]=
		&=&art_cat_id=362&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>

</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_310" style="display:none;">
                  <tr class="item" align="left">
                  <!--	<td>310</td>-->
                    <td class="td28">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_310" value="1" onblur="edit_listorder(310,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp;&nbsp; |--<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_310"
 style="font-weight:300;font-size:12px;">
                            <input type="text" class="txt" value="相关认证" 
readonly="readonly" >
</span>
</td>                                
                    <td>2011-12-06 16:03:53</td>
                    <td>
<a href="index.php?do=article&view=cat_edit&art_cat_id=310&art_cat_pid=294&type=help" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=article&view=cat_list&type=help&w[art_cat_pid]=&w[cat_name]=
		&=&art_cat_id=310&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>

</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_311" style="display:none;">
                  <tr class="item" align="left">
                  <!--	<td>311</td>-->
                    <td class="td28">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_311" value="1" onblur="edit_listorder(311,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp;&nbsp; |--<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_311"
 style="font-weight:300;font-size:12px;">
                            <input type="text" class="txt" value="如何赚钱" 
readonly="readonly" >
</span>
</td>                                
                    <td>2011-12-06 16:04:58</td>
                    <td>
<a href="index.php?do=article&view=cat_edit&art_cat_id=311&art_cat_pid=294&type=help" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=article&view=cat_list&type=help&w[art_cat_pid]=&w[cat_name]=
		&=&art_cat_id=311&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>

</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_312" style="display:none;">
                  <tr class="item" align="left">
                  <!--	<td>312</td>-->
                    <td class="td28">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_312" value="1" onblur="edit_listorder(312,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp;&nbsp; |--<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_312"
 style="font-weight:300;font-size:12px;">
                            <input type="text" class="txt" value="如何支付" 
readonly="readonly" >
</span>
</td>                                
                    <td>2011-12-06 16:05:07</td>
                    <td>
<a href="index.php?do=article&view=cat_edit&art_cat_id=312&art_cat_pid=294&type=help" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=article&view=cat_list&type=help&w[art_cat_pid]=&w[cat_name]=
		&=&art_cat_id=312&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>

</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_327" style="display:none;">
                  <tr class="item" align="left">
                  <!--	<td>327</td>-->
                    <td class="td28">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_327" value="3" onblur="edit_listorder(327,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp;&nbsp; |--<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_327"
 style="font-weight:300;font-size:12px;">
                            <input type="text" class="txt" value="账号管理" 
readonly="readonly" >
</span>
</td>                                
                    <td>2011-12-06 17:55:51</td>
                    <td>
<a href="index.php?do=article&view=cat_edit&art_cat_id=327&art_cat_pid=294&type=help" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=article&view=cat_list&type=help&w[art_cat_pid]=&w[cat_name]=
		&=&art_cat_id=327&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>

</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_345" style="display:none;">
                  <tr class="item" align="left">
                  <!--	<td>345</td>-->
                    <td class="td28">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_345" value="5" onblur="edit_listorder(345,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp;&nbsp; |--<span class="jia" 
onclick="if($(this).attr('class')=='jia'){
showids_345('show');
$(this).attr('class','jian');
}else{showids_345('hide');
$(this).attr('class','jia')}
" >&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_345"
 style="font-weight:300;font-size:12px;">
                            <input type="text" class="txt" value="名词解答" 
readonly="readonly" >
</span>
</td>                                
                    <td>2012-01-05 14:53:22</td>
                    <td>
<a href="index.php?do=article&view=cat_edit&art_cat_id=345&art_cat_pid=294&type=help" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=article&view=cat_list&type=help&w[art_cat_pid]=&w[cat_name]=
		&=&art_cat_id=345&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>

</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_364" style="display:none;">
                  <tr class="item" align="left">
                  <!--	<td>364</td>-->
                    <td class="td28">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_364" value="1" onblur="edit_listorder(364,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; |---<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_364"
 style="font-weight:0;font-size:10px;">
                            <input type="text" class="txt" value="234" 
readonly="readonly" >
</span>
</td>                                
                    <td>2012-09-07 11:30:23</td>
                    <td>
<a href="index.php?do=article&view=cat_edit&art_cat_id=364&art_cat_pid=345&type=help" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=article&view=cat_list&type=help&w[art_cat_pid]=&w[cat_name]=
		&=&art_cat_id=364&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>

</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_346" style="display:none;">
                  <tr class="item" align="left">
                  <!--	<td>346</td>-->
                    <td class="td28">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_346" value="1" onblur="edit_listorder(346,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp;&nbsp; |--<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_346"
 style="font-weight:300;font-size:12px;">
                            <input type="text" class="txt" value="交易维权" 
readonly="readonly" >
</span>
</td>                                
                    <td>2011-12-16 17:34:41</td>
                    <td>
<a href="index.php?do=article&view=cat_edit&art_cat_id=346&art_cat_pid=294&type=help" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=article&view=cat_list&type=help&w[art_cat_pid]=&w[cat_name]=
		&=&art_cat_id=346&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>

</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_347" style="display:none;">
                  <tr class="item" align="left">
                  <!--	<td>347</td>-->
                    <td class="td28">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_347" value="1" onblur="edit_listorder(347,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp;&nbsp; |--<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_347"
 style="font-weight:300;font-size:12px;">
                            <input type="text" class="txt" value="违规" 
readonly="readonly" >
</span>
</td>                                
                    <td>2011-12-16 17:35:27</td>
                    <td>
<a href="index.php?do=article&view=cat_edit&art_cat_id=347&art_cat_pid=294&type=help" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=article&view=cat_list&type=help&w[art_cat_pid]=&w[cat_name]=
		&=&art_cat_id=347&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>

</td>
                  </tr>
  </tbody>
                                 <tr>
               	<td>&nbsp;</td>
                    <td colspan="6">
                   
                    
                    <div class="clearfix">
                  		<div class="clearfix">	
                      <!--  <a href="index.php?do=task&view=union_industry"   class="button pill negative"><span class="icon cog">&nbsp;</span></a>-->
<button  name="sbt_action" type="submit" value=提交 class="positive primary pill button" /><span class="check icon"></span>提交</button>
                    </div>
                    </div>
                    </td>
                  </tr>
                </tbody>
              </table>

   	</form>
        </div>       
    </div>
<script type="text/javascript">

    	function edit_listorder(iid,v){
    		$.get('index.php?do=article&view=cat_list&ac=editlistorder',{iid:iid,val:v});
    	}
    	
    	var newindus_c = 0;
    	function addchild(pid,ext){
    		newindus_c++;
    		if(ext=='')
    		{ext = '|';}
    		if(ext!=' ')
    		{ext = '&nbsp;&nbsp;&nbsp;'+ext+'---';}
    		var mod = '<tr class="item" id="newindus_c_'+newindus_c+'">';
    		  	mod+='<td class="td28">'+'<input type=text size=3 class="txt" name="add_cat_name_listarr['+pid+']['+newindus_c+']" size=3>';+'</td>';
    		  	mod+='<td>'+ext;
    			mod+='<input type=text class="txt" name="add_cat_name_arr['+pid+']['+newindus_c+']">';
    			mod+='</td>';
    		   
    	 
    		    mod+='<td>&nbsp;</td>';
    			mod+='<td>';
    			mod+='<a href="javascript:;" onclick="$(\'#newindus_c_'+newindus_c+'\').remove()">';
    			mod+='删除';
    			mod+='</a>';
    			mod+='</td>';
    		  	mod+='</tr>	';
    			
    			$('#indus_item_l_'+pid).append(mod); 
    		
    	}
    	
             	function showids_1(op){
    		if(op=='show'){
    			    			$('#indus_item_l_203').show();
    			    			$('#indus_item_l_17').show();
    			    			$('#indus_item_l_358').show();
    			    			$('#indus_item_l_4').show();
    			    			$('#indus_item_l_202').show();
    			    			$('#indus_item_l_7').show();
    			    			$('#indus_item_l_5').show();
    			    			$('#indus_item_l_2').show();
    			    		}
    		else{
    			    			$('#indus_item_l_203').hide();
    			    			$('#indus_item_l_17').hide();
    			    			$('#indus_item_l_358').hide();
    			    			$('#indus_item_l_4').hide();
    			    			$('#indus_item_l_202').hide();
    			    			$('#indus_item_l_7').hide();
    			    			$('#indus_item_l_5').hide();
    			    			$('#indus_item_l_2').hide();
    			    		}
    		
    		    		
    	}
    	      	function showids_291(op){
    		if(op=='show'){
    			    			$('#indus_item_l_325').show();
    			    			$('#indus_item_l_323').show();
    			    			$('#indus_item_l_324').show();
    			    		}
    		else{
    			    			$('#indus_item_l_325').hide();
    			    			$('#indus_item_l_323').hide();
    			    			$('#indus_item_l_324').hide();
    			    		}
    		
    		    		
    	}
    	      	function showids_100(op){
    		if(op=='show'){
    			    			$('#indus_item_l_291').show();
    			    			$('#indus_item_l_294').show();
    			    			$('#indus_item_l_290').show();
    			    			$('#indus_item_l_293').show();
    			    		}
    		else{
    			    			$('#indus_item_l_291').hide();
    			    			$('#indus_item_l_294').hide();
    			    			$('#indus_item_l_290').hide();
    			    			$('#indus_item_l_293').hide();
    			    		}
    		
    		    		
    	}
    	      	function showids_203(op){
    		if(op=='show'){
    			    			$('#indus_item_l_361').show();
    			    			$('#indus_item_l_359').show();
    			    		}
    		else{
    			    			$('#indus_item_l_361').hide();
    			    			$('#indus_item_l_359').hide();
    			    		}
    		
    		    		
    	}
    	      	function showids_298(op){
    		if(op=='show'){
    			    			$('#indus_item_l_362').show();
    			    		}
    		else{
    			    			$('#indus_item_l_362').hide();
    			    		}
    		
    		    		
    	}
    	      	function showids_358(op){
    		if(op=='show'){
    			    			$('#indus_item_l_363').show();
    			    		}
    		else{
    			    			$('#indus_item_l_363').hide();
    			    		}
    		
    		    		
    	}
    	      	function showids_294(op){
    		if(op=='show'){
    			    			$('#indus_item_l_346').show();
    			    			$('#indus_item_l_297').show();
    			    			$('#indus_item_l_311').show();
    			    			$('#indus_item_l_312').show();
    			    			$('#indus_item_l_296').show();
    			    			$('#indus_item_l_298').show();
    			    			$('#indus_item_l_347').show();
    			    			$('#indus_item_l_310').show();
    			    			$('#indus_item_l_327').show();
    			    			$('#indus_item_l_345').show();
    			    		}
    		else{
    			    			$('#indus_item_l_346').hide();
    			    			$('#indus_item_l_297').hide();
    			    			$('#indus_item_l_311').hide();
    			    			$('#indus_item_l_312').hide();
    			    			$('#indus_item_l_296').hide();
    			    			$('#indus_item_l_298').hide();
    			    			$('#indus_item_l_347').hide();
    			    			$('#indus_item_l_310').hide();
    			    			$('#indus_item_l_327').hide();
    			    			$('#indus_item_l_345').hide();
    			    		}
    		
    		    		
    	}
    	      	function showids_292(op){
    		if(op=='show'){
    			    			$('#indus_item_l_315').show();
    			    			$('#indus_item_l_318').show();
    			    			$('#indus_item_l_317').show();
    			    			$('#indus_item_l_316').show();
    			    		}
    		else{
    			    			$('#indus_item_l_315').hide();
    			    			$('#indus_item_l_318').hide();
    			    			$('#indus_item_l_317').hide();
    			    			$('#indus_item_l_316').hide();
    			    		}
    		
    		    		
    	}
    	      	function showids_17(op){
    		if(op=='show'){
    			    			$('#indus_item_l_360').show();
    			    		}
    		else{
    			    			$('#indus_item_l_360').hide();
    			    		}
    		
    		    		
    	}
    	      	function showids_271(op){
    		if(op=='show'){
    			    			$('#indus_item_l_322').show();
    			    			$('#indus_item_l_321').show();
    			    			$('#indus_item_l_320').show();
    			    		}
    		else{
    			    			$('#indus_item_l_322').hide();
    			    			$('#indus_item_l_321').hide();
    			    			$('#indus_item_l_320').hide();
    			    		}
    		
    		    		
    	}
    	      	function showids_293(op){
    		if(op=='show'){
    			    			$('#indus_item_l_319').show();
    			    			$('#indus_item_l_326').show();
    			    		}
    		else{
    			    			$('#indus_item_l_319').hide();
    			    			$('#indus_item_l_326').hide();
    			    		}
    		
    		    		
    	}
    	      	function showids_345(op){
    		if(op=='show'){
    			    			$('#indus_item_l_364').show();
    			    		}
    		else{
    			    			$('#indus_item_l_364').hide();
    			    		}
    		
    		    		
    	}
    	      	function showids_290(op){
    		if(op=='show'){
    			    			$('#indus_item_l_329').show();
    			    			$('#indus_item_l_328').show();
    			    			$('#indus_item_l_300').show();
    			    			$('#indus_item_l_301').show();
    			    			$('#indus_item_l_302').show();
    			    			$('#indus_item_l_303').show();
    			    			$('#indus_item_l_304').show();
    			    			$('#indus_item_l_305').show();
    			    			$('#indus_item_l_306').show();
    			    			$('#indus_item_l_307').show();
    			    			$('#indus_item_l_308').show();
    			    			$('#indus_item_l_309').show();
    			    		}
    		else{
    			    			$('#indus_item_l_329').hide();
    			    			$('#indus_item_l_328').hide();
    			    			$('#indus_item_l_300').hide();
    			    			$('#indus_item_l_301').hide();
    			    			$('#indus_item_l_302').hide();
    			    			$('#indus_item_l_303').hide();
    			    			$('#indus_item_l_304').hide();
    			    			$('#indus_item_l_305').hide();
    			    			$('#indus_item_l_306').hide();
    			    			$('#indus_item_l_307').hide();
    			    			$('#indus_item_l_308').hide();
    			    			$('#indus_item_l_309').hide();
    			    		}
    		
    		    		
    	}
    	      	function showids_359(op){
    		if(op=='show'){
    			    			$('#indus_item_l_365').show();
    			    		}
    		else{
    			    			$('#indus_item_l_365').hide();
    			    		}
    		
    		    		
    	}
    	      	function showids_0(op){
    		if(op=='show'){
    			    			$('#indus_item_l_100').show();
    			    			$('#indus_item_l_1').show();
    			    		}
    		else{
    			    			$('#indus_item_l_100').hide();
    			    			$('#indus_item_l_1').hide();
    			    		}
    		
    		    		
    	}
    	      	function showids_289(op){
    		if(op=='show'){
    			    			$('#indus_item_l_295').show();
    			    		}
    		else{
    			    			$('#indus_item_l_295').hide();
    			    		}
    		
    		    		
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
