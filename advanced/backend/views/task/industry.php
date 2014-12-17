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
<style type="text/css">
.jia {background: url(/public/tpl/img/plus.gif)}
.jian {background: url(/public/tpl/img/minus.gif) }
</style>
<div class="page_title">
    	<h1>行业管理</h1>
        <div class="tool">
            <a href="index.php?r=task/industry" class="here">行业列表</a>
            <a href="index.php?r=task/industry_edit">添加行业</a> 
            <a href="index.php?r=task/union_industry" >行业合并</a>
</div>
</div>

<div class="box search p_relative">
    	<div class="title"><h2>搜索</h2></div>
        <div class="detail" id="detail">
           
    <form action="" method="get">
            	<input type="hidden" name="do" value="task">
<input type="hidden" name="view" value="industry">
<input type="hidden" name="type" value="">
<input type="hidden" name="page" value="">
 
                <table cellspacing="0" cellpadding="0">
<tbody>
                        <tr>
                            <th>所属行业</th>
                            <td>
                            	<select   name="w[indus_pid]" id="catid">
                            	<option value=441>品牌设计</option><option value=8>&nbsp;&nbsp;&nbsp; |-标志设计</option><option value=9>&nbsp;&nbsp;&nbsp; |-VI设计</option><option value=10>&nbsp;&nbsp;&nbsp; |-名片设计</option><option value=11>&nbsp;&nbsp;&nbsp; |-海报设计</option><option value=12>&nbsp;&nbsp;&nbsp; |-宣传册页</option><option value=13>&nbsp;&nbsp;&nbsp; |-卡通设计</option><option value=14>&nbsp;&nbsp;&nbsp; |-招牌设计</option><option value=16>&nbsp;&nbsp;&nbsp; |-横幅设计</option><option value=27>&nbsp;&nbsp;&nbsp; |-网站美工</option><option value=144>&nbsp;&nbsp;&nbsp; |-工业设计</option><option value=405>&nbsp;&nbsp;&nbsp;&nbsp; |--newNode2</option><option value=145>&nbsp;&nbsp;&nbsp; |-按钮图标</option><option value=348>&nbsp;&nbsp;&nbsp; |-logo设计</option><option value=349>&nbsp;&nbsp;&nbsp; |-vi设计</option><option value=370>&nbsp;&nbsp;&nbsp; |-游戏封面</option><option value=376>&nbsp;&nbsp;&nbsp; |-lee牛仔裤</option><option value=130>&nbsp;&nbsp;&nbsp; |-字体设计</option><option value=131>&nbsp;&nbsp;&nbsp; |-贺卡设计</option><option value=132>&nbsp;&nbsp;&nbsp; |-礼品设计</option><option value=134>&nbsp;&nbsp;&nbsp; |-四格漫画</option><option value=135>&nbsp;&nbsp;&nbsp; |-动漫设计</option><option value=136>&nbsp;&nbsp;&nbsp; |-排版设计</option><option value=137>&nbsp;&nbsp;&nbsp; |-服饰设计</option><option value=140>&nbsp;&nbsp;&nbsp; |-台历设计</option><option value=133>&nbsp;&nbsp;&nbsp; |-QQ表情</option><option value=263>&nbsp;&nbsp;&nbsp; |-其他</option><option value=138>&nbsp;&nbsp;&nbsp; |-ppt设计</option><option value=2>网站开发</option><option value=28>&nbsp;&nbsp;&nbsp; |-网站模板</option><option value=30>&nbsp;&nbsp;&nbsp; |-网站广告</option><option value=31>&nbsp;&nbsp;&nbsp; |-网页动画</option><option value=32>&nbsp;&nbsp;&nbsp; |-商城开发</option><option value=34>&nbsp;&nbsp;&nbsp; |-接口操作</option><option value=408>&nbsp;&nbsp;&nbsp; |-网站推广</option><option value=169>&nbsp;&nbsp;&nbsp; |-FLASH</option><option value=148>&nbsp;&nbsp;&nbsp; |-店招设计</option><option value=154>&nbsp;&nbsp;&nbsp; |-网店取名</option><option value=155>&nbsp;&nbsp;&nbsp; |-网店模板</option><option value=156>&nbsp;&nbsp;&nbsp; |-数码摄影</option><option value=147>&nbsp;&nbsp;&nbsp; |-店标设计</option><option value=170>&nbsp;&nbsp;&nbsp; |-视频制作</option><option value=172>&nbsp;&nbsp;&nbsp; |-三维渲染</option><option value=33>&nbsp;&nbsp;&nbsp; |-数据库操作</option><option value=35>&nbsp;&nbsp;&nbsp; |-服务器系统</option><option value=29>&nbsp;&nbsp;&nbsp; |-开源修改</option><option value=40>&nbsp;&nbsp;&nbsp; |-其它</option><option value=201>创意祝福</option><option value=203>&nbsp;&nbsp;&nbsp; |-爱情表白</option><option value=202>&nbsp;&nbsp;&nbsp; |-生日祝福</option><option value=204>&nbsp;&nbsp;&nbsp; |-圣诞祝福</option><option value=205>&nbsp;&nbsp;&nbsp; |-新年祝福</option><option value=209>&nbsp;&nbsp;&nbsp; |-祝福喜得贵子</option><option value=210>&nbsp;&nbsp;&nbsp; |-祝福乔迁新居</option><option value=208>&nbsp;&nbsp;&nbsp; |-感恩回馈</option><option value=207>&nbsp;&nbsp;&nbsp; |-纪念日祝福</option><option value=206>&nbsp;&nbsp;&nbsp; |-道歉短信</option><option value=331>&nbsp;&nbsp;&nbsp; |-彩信</option><option value=249>网游服务</option><option value=96>&nbsp;&nbsp;&nbsp; |-网游创意</option><option value=250>&nbsp;&nbsp;&nbsp; |-手机游戏</option><option value=251>&nbsp;&nbsp;&nbsp; |-游戏试玩</option><option value=252>&nbsp;&nbsp;&nbsp; |-评测报告</option><option value=253>&nbsp;&nbsp;&nbsp; |-版本设计</option><option value=254>&nbsp;&nbsp;&nbsp; |-剧情策划</option><option value=255>&nbsp;&nbsp;&nbsp; |-压力测试</option><option value=256>&nbsp;&nbsp;&nbsp; |-代写攻略</option><option value=257>&nbsp;&nbsp;&nbsp; |-活动策划</option><option value=258>&nbsp;&nbsp;&nbsp; |-补丁制作</option><option value=259>&nbsp;&nbsp;&nbsp; |-游戏视频</option><option value=332>&nbsp;&nbsp;&nbsp; |-问卷调查</option><option value=3>文案写作</option><option value=41>&nbsp;&nbsp;&nbsp; |-宣传软文</option><option value=42>&nbsp;&nbsp;&nbsp; |-广告语写作</option><option value=43>&nbsp;&nbsp;&nbsp; |-策划</option><option value=44>&nbsp;&nbsp;&nbsp; |-写文章</option><option value=45>&nbsp;&nbsp;&nbsp; |-编辑校对</option><option value=46>&nbsp;&nbsp;&nbsp; |-写新闻</option><option value=47>&nbsp;&nbsp;&nbsp; |-产品说明</option><option value=48>&nbsp;&nbsp;&nbsp; |-剧本脚本</option><option value=49>&nbsp;&nbsp;&nbsp; |-写书</option><option value=50>&nbsp;&nbsp;&nbsp; |-撰写报告</option><option value=51>&nbsp;&nbsp;&nbsp; |-应用文写作</option><option value=52>&nbsp;&nbsp;&nbsp; |-演讲稿</option><option value=57>&nbsp;&nbsp;&nbsp; |-其它</option><option value=335>建筑/装修</option><option value=151>&nbsp;&nbsp;&nbsp; |-展会设计</option><option value=152>&nbsp;&nbsp;&nbsp; |-办公装修</option><option value=153>&nbsp;&nbsp;&nbsp; |-园林景观</option><option value=159>&nbsp;&nbsp;&nbsp; |-店面装修</option><option value=336>&nbsp;&nbsp;&nbsp; |-新房装修</option><option value=337>&nbsp;&nbsp;&nbsp; |-二手房装修</option><option value=340>&nbsp;&nbsp;&nbsp; |-庭院景观设计</option><option value=338>&nbsp;&nbsp;&nbsp; |-风水咨询</option><option value=341>&nbsp;&nbsp;&nbsp; |-办公商铺装修</option><option value=339>&nbsp;&nbsp;&nbsp; |-装修监理</option><option value=342>&nbsp;&nbsp;&nbsp; |-自建房设计</option><option value=343>&nbsp;&nbsp;&nbsp; |-景观设计</option><option value=344>&nbsp;&nbsp;&nbsp; |-3D模型设计</option><option value=158>&nbsp;&nbsp;&nbsp; |-形象墙设计</option><option value=149>&nbsp;&nbsp;&nbsp; |-房屋建筑设计</option><option value=211>头脑风暴</option><option value=217>&nbsp;&nbsp;&nbsp; |-问卷调查</option><option value=216>&nbsp;&nbsp;&nbsp; |-意见建议</option><option value=215>&nbsp;&nbsp;&nbsp; |-写评论</option><option value=214>&nbsp;&nbsp;&nbsp; |-征集创意</option><option value=213>&nbsp;&nbsp;&nbsp; |-收集金点子</option><option value=212>&nbsp;&nbsp;&nbsp; |-策划</option><option value=350>照片美化/编辑</option><option value=351>&nbsp;&nbsp;&nbsp; |-艺术照处理</option><option value=352>&nbsp;&nbsp;&nbsp; |-照片变卡通</option><option value=353>&nbsp;&nbsp;&nbsp; |-电子相册</option><option value=354>&nbsp;&nbsp;&nbsp; |-照片美化</option><option value=355>&nbsp;&nbsp;&nbsp; |-婚纱照美化</option><option value=356>&nbsp;&nbsp;&nbsp; |-图片编辑</option><option value=234>法律服务</option><option value=236>&nbsp;&nbsp;&nbsp; |-法律咨询</option><option value=235>&nbsp;&nbsp;&nbsp; |-聘请律师</option><option value=237>&nbsp;&nbsp;&nbsp; |-写法律合同</option><option value=238>&nbsp;&nbsp;&nbsp; |-写律师函</option><option value=239>&nbsp;&nbsp;&nbsp; |-写诉讼状</option><option value=160>起名取名</option><option value=161>&nbsp;&nbsp;&nbsp; |-宝宝起名</option><option value=162>&nbsp;&nbsp;&nbsp; |-成人起名</option><option value=163>&nbsp;&nbsp;&nbsp; |-公司起名</option><option value=164>&nbsp;&nbsp;&nbsp; |-店铺起名</option><option value=165>&nbsp;&nbsp;&nbsp; |-品牌起名</option><option value=166>&nbsp;&nbsp;&nbsp; |-改名</option><option value=357>影视/配音/歌词</option><option value=439>&nbsp;&nbsp;&nbsp; |-1111</option><option value=358>&nbsp;&nbsp;&nbsp; |-写剧本</option><option value=359>&nbsp;&nbsp;&nbsp; |-影视制作</option><option value=360>&nbsp;&nbsp;&nbsp; |-广告配音</option><option value=361>&nbsp;&nbsp;&nbsp; |-影视配音</option><option value=362>&nbsp;&nbsp;&nbsp; |-动画配音</option><option value=363>&nbsp;&nbsp;&nbsp; |-彩铃配音</option><option value=364>&nbsp;&nbsp;&nbsp; |-方言配音</option><option value=365>&nbsp;&nbsp;&nbsp; |-外语配音</option><option value=366>&nbsp;&nbsp;&nbsp; |-创意配音</option><option value=367>&nbsp;&nbsp;&nbsp; |-歌词创作</option><option value=368>&nbsp;&nbsp;&nbsp; |-歌词谱曲</option><option value=192>生活服务</option><option value=193>&nbsp;&nbsp;&nbsp; |-市场调查</option><option value=194>&nbsp;&nbsp;&nbsp; |-心理咨询</option><option value=195>&nbsp;&nbsp;&nbsp; |-移民咨询</option><option value=196>&nbsp;&nbsp;&nbsp; |-理财咨询</option><option value=197>&nbsp;&nbsp;&nbsp; |-帮我投票</option><option value=198>&nbsp;&nbsp;&nbsp; |-跑腿排队</option><option value=199>&nbsp;&nbsp;&nbsp; |-家政服务</option><option value=200>&nbsp;&nbsp;&nbsp; |-数据导入</option><option value=218>移动应用</option><option value=222>&nbsp;&nbsp;&nbsp; |-Android插件</option><option value=225>&nbsp;&nbsp;&nbsp; |-Symbian SDK插件</option><option value=223>&nbsp;&nbsp;&nbsp; |-iOS插件</option><option value=219>&nbsp;&nbsp;&nbsp; |-天翼插件</option><option value=227>&nbsp;&nbsp;&nbsp; |-Windows mobile插件</option><option value=228>&nbsp;&nbsp;&nbsp; |-黑莓插件</option><option value=230>&nbsp;&nbsp;&nbsp; |-Amazon kindle插件</option><option value=231>&nbsp;&nbsp;&nbsp; |-手机游戏开发</option><option value=229>&nbsp;&nbsp;&nbsp; |-Palm插件</option><option value=232>&nbsp;&nbsp;&nbsp; |-手机应用创意</option><option value=233>&nbsp;&nbsp;&nbsp; |-手机应用汉化</option><option value=226>&nbsp;&nbsp;&nbsp; |-PalmOS插件</option><option value=240>招聘找人</option><option value=177>&nbsp;&nbsp;&nbsp; |-搜索引擎优化</option><option value=178>&nbsp;&nbsp;&nbsp; |-论坛推广</option><option value=179>&nbsp;&nbsp;&nbsp; |-QQ群推广</option><option value=180>&nbsp;&nbsp;&nbsp; |-博客推广</option><option value=181>&nbsp;&nbsp;&nbsp; |-推广注册</option><option value=241>&nbsp;&nbsp;&nbsp; |-招聘</option><option value=242>&nbsp;&nbsp;&nbsp; |-求职</option><option value=243>&nbsp;&nbsp;&nbsp; |-寻人</option><option value=244>&nbsp;&nbsp;&nbsp;&nbsp; |--找对象</option><option value=245>&nbsp;&nbsp;&nbsp; |-找生产商</option><option value=246>&nbsp;&nbsp;&nbsp; |-找客户</option><option value=247>&nbsp;&nbsp;&nbsp; |-找供应商</option><option value=248>&nbsp;&nbsp;&nbsp; |-找人脉</option><option value=334>&nbsp;&nbsp;&nbsp; |-简历设计</option><option value=150>&nbsp;&nbsp;&nbsp;&nbsp; |--家装设计</option><option value=121>软件开发</option><option value=36>&nbsp;&nbsp;&nbsp; |-程序开发</option><option value=37>&nbsp;&nbsp;&nbsp; |-编写脚本</option><option value=38>&nbsp;&nbsp;&nbsp; |-软件皮肤</option><option value=39>&nbsp;&nbsp;&nbsp; |-插件开发</option><option value=122>&nbsp;&nbsp;&nbsp; |-软件测试</option><option value=123>&nbsp;&nbsp;&nbsp; |-游戏开发</option><option value=324>&nbsp;&nbsp;&nbsp; |-软件汉化</option><option value=326>&nbsp;&nbsp;&nbsp; |-软件美工</option><option value=327>&nbsp;&nbsp;&nbsp; |-开发文档编写</option><option value=328>&nbsp;&nbsp;&nbsp; |-功能完善</option><option value=325>&nbsp;&nbsp;&nbsp; |-程序功能开发</option></select>
(行业的父类)                            </td>
                            <th>行业名称*</th>
                            <td><input type="text" value="" name="w[indus_name]" class="txt"/>*支持模糊查询</td>
                             <td></td> 
</tr>
                        <tr >
                            
<th>结果排序</th>
<td>

<select name="ord[]">
                                <option value="indus_id"  selected="selected">默认排序</option>
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
    	<div class="title"><h2>行业列表</h2></div>
        <div class="detail">
        	<form action="" id='frm_list' method="post">
              <table cellpadding="0" cellspacing="0">
                <tbody>
                <tr>
                   
                    <th width="7%">显示顺序</th>
                    <th width="30%">行业名称</th>
                    <th width="10%">是否推荐</th>
                    
                    <th width="17%"> 修改时间</th>
                   <th width="13%">操作</th>
                </tr>
                
                 <tbody id="indus_item_l_2" style="display:;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_2" value="12" onblur="edit_listorder(2,this.value)"></td>
                    <td align="left">
                    	<span class="jia" 
onclick="if($(this).attr('class')=='jia'){
showids_2('show');
$(this).attr('class','jian');
}else{showids_2('hide');
$(this).attr('class','jia')}
" >&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_2"
 style="font-weight:900;font-size:16px;">
                            <input type="text" class="txt" value="网站开发" 
readonly="readonly" >
</span>
<a href="javascript:;" style="color:#ff6600" onclick="addchild(2,'')">增加子类</a>					
</td>
                    <td align="left">否</td>
                     
                    <td align="left">2012-08-31 17:00:05</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=2&indus_pid=0" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=2&indus_pid=0&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_28" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_28" value="0" onblur="edit_listorder(28,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_28"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="网站模板" 
readonly="readonly" >
</span>
</td>
                    <td align="left">否</td>
                     
                    <td align="left">2010-12-17 09:25:37</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=28&indus_pid=2" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=28&indus_pid=2&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_29" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_29" value="32" onblur="edit_listorder(29,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_29"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="开源修改" 
readonly="readonly" >
</span>
</td>
                    <td align="left">否</td>
                     
                    <td align="left">2012-01-09 13:42:05</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=29&indus_pid=2" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=29&indus_pid=2&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_30" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_30" value="0" onblur="edit_listorder(30,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_30"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="网站广告" 
readonly="readonly" >
</span>
</td>
                    <td align="left">否</td>
                     
                    <td align="left">2010-12-17 09:26:22</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=30&indus_pid=2" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=30&indus_pid=2&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_31" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_31" value="0" onblur="edit_listorder(31,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_31"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="网页动画" 
readonly="readonly" >
</span>
</td>
                    <td align="left">荐</td>
                     
                    <td align="left">2010-12-17 09:26:39</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=31&indus_pid=2" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=31&indus_pid=2&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_32" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_32" value="0" onblur="edit_listorder(32,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_32"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="商城开发" 
readonly="readonly" >
</span>
</td>
                    <td align="left">荐</td>
                     
                    <td align="left">2010-12-17 09:26:57</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=32&indus_pid=2" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=32&indus_pid=2&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_33" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_33" value="30" onblur="edit_listorder(33,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_33"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="数据库操作" 
readonly="readonly" >
</span>
</td>
                    <td align="left">荐</td>
                     
                    <td align="left">2010-12-17 09:27:17</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=33&indus_pid=2" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=33&indus_pid=2&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_34" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_34" value="0" onblur="edit_listorder(34,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_34"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="接口操作" 
readonly="readonly" >
</span>
</td>
                    <td align="left">荐</td>
                     
                    <td align="left">2010-12-17 09:27:35</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=34&indus_pid=2" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=34&indus_pid=2&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_35" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_35" value="31" onblur="edit_listorder(35,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_35"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="服务器系统" 
readonly="readonly" >
</span>
</td>
                    <td align="left">荐</td>
                     
                    <td align="left">2010-12-17 09:27:59</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=35&indus_pid=2" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=35&indus_pid=2&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_40" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_40" value="100" onblur="edit_listorder(40,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_40"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="其它" 
readonly="readonly" >
</span>
</td>
                    <td align="left">荐</td>
                     
                    <td align="left"></td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=40&indus_pid=2" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=40&indus_pid=2&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_147" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_147" value="8" onblur="edit_listorder(147,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_147"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="店标设计" 
readonly="readonly" >
</span>
</td>
                    <td align="left">否</td>
                     
                    <td align="left">2010-12-17 09:46:45</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=147&indus_pid=2" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=147&indus_pid=2&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_148" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_148" value="4" onblur="edit_listorder(148,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_148"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="店招设计" 
readonly="readonly" >
</span>
</td>
                    <td align="left">否</td>
                     
                    <td align="left">2010-12-17 09:48:09</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=148&indus_pid=2" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=148&indus_pid=2&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_154" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_154" value="5" onblur="edit_listorder(154,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_154"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="网店取名" 
readonly="readonly" >
</span>
</td>
                    <td align="left">否</td>
                     
                    <td align="left">2010-12-17 09:51:11</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=154&indus_pid=2" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=154&indus_pid=2&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_155" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_155" value="6" onblur="edit_listorder(155,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_155"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="网店模板" 
readonly="readonly" >
</span>
</td>
                    <td align="left">否</td>
                     
                    <td align="left">2010-12-17 09:51:40</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=155&indus_pid=2" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=155&indus_pid=2&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_156" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_156" value="7" onblur="edit_listorder(156,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_156"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="数码摄影" 
readonly="readonly" >
</span>
</td>
                    <td align="left">否</td>
                     
                    <td align="left">2012-01-09 14:40:15</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=156&indus_pid=2" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=156&indus_pid=2&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_169" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_169" value="1" onblur="edit_listorder(169,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_169"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="FLASH" 
readonly="readonly" >
</span>
</td>
                    <td align="left">否</td>
                     
                    <td align="left">2012-01-09 13:43:10</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=169&indus_pid=2" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=169&indus_pid=2&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_170" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_170" value="9" onblur="edit_listorder(170,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_170"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="视频制作" 
readonly="readonly" >
</span>
</td>
                    <td align="left">否</td>
                     
                    <td align="left">2010-12-17 10:14:10</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=170&indus_pid=2" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=170&indus_pid=2&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_172" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_172" value="11" onblur="edit_listorder(172,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_172"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="三维渲染" 
readonly="readonly" >
</span>
</td>
                    <td align="left">否</td>
                     
                    <td align="left">2010-12-17 10:14:59</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=172&indus_pid=2" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=172&indus_pid=2&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_408" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_408" value="0" onblur="edit_listorder(408,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_408"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="网站推广" 
readonly="readonly" >
</span>
</td>
                    <td align="left">否</td>
                     
                    <td align="left"></td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=408&indus_pid=2" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=408&indus_pid=2&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_3" style="display:;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_3" value="16" onblur="edit_listorder(3,this.value)"></td>
                    <td align="left">
                    	<span class="jia" 
onclick="if($(this).attr('class')=='jia'){
showids_3('show');
$(this).attr('class','jian');
}else{showids_3('hide');
$(this).attr('class','jia')}
" >&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_3"
 style="font-weight:900;font-size:16px;">
                            <input type="text" class="txt" value="文案写作" 
readonly="readonly" >
</span>
<a href="javascript:;" style="color:#ff6600" onclick="addchild(3,'')">增加子类</a>					
</td>
                    <td align="left">荐</td>
                     
                    <td align="left">2012-08-31 16:58:41</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=3&indus_pid=0" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=3&indus_pid=0&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_41" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_41" value="0" onblur="edit_listorder(41,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_41"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="宣传软文" 
readonly="readonly" >
</span>
</td>
                    <td align="left">荐</td>
                     
                    <td align="left">2010-12-17 10:03:16</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=41&indus_pid=3" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=41&indus_pid=3&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_42" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_42" value="0" onblur="edit_listorder(42,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_42"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="广告语写作" 
readonly="readonly" >
</span>
</td>
                    <td align="left">荐</td>
                     
                    <td align="left">2010-12-17 10:03:50</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=42&indus_pid=3" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=42&indus_pid=3&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_43" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_43" value="0" onblur="edit_listorder(43,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_43"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="策划" 
readonly="readonly" >
</span>
</td>
                    <td align="left">荐</td>
                     
                    <td align="left">2010-12-17 10:04:13</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=43&indus_pid=3" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=43&indus_pid=3&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_44" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_44" value="0" onblur="edit_listorder(44,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_44"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="写文章" 
readonly="readonly" >
</span>
</td>
                    <td align="left">荐</td>
                     
                    <td align="left">2010-12-17 10:04:42</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=44&indus_pid=3" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=44&indus_pid=3&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_45" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_45" value="0" onblur="edit_listorder(45,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_45"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="编辑校对" 
readonly="readonly" >
</span>
</td>
                    <td align="left">荐</td>
                     
                    <td align="left">2010-12-17 10:05:02</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=45&indus_pid=3" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=45&indus_pid=3&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_46" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_46" value="0" onblur="edit_listorder(46,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_46"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="写新闻" 
readonly="readonly" >
</span>
</td>
                    <td align="left">否</td>
                     
                    <td align="left">2010-12-17 10:05:28</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=46&indus_pid=3" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=46&indus_pid=3&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_47" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_47" value="0" onblur="edit_listorder(47,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_47"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="产品说明" 
readonly="readonly" >
</span>
</td>
                    <td align="left">否</td>
                     
                    <td align="left">2010-12-17 10:06:09</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=47&indus_pid=3" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=47&indus_pid=3&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_48" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_48" value="0" onblur="edit_listorder(48,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_48"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="剧本脚本" 
readonly="readonly" >
</span>
</td>
                    <td align="left">否</td>
                     
                    <td align="left">2010-12-17 10:06:34</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=48&indus_pid=3" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=48&indus_pid=3&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_49" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_49" value="0" onblur="edit_listorder(49,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_49"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="写书" 
readonly="readonly" >
</span>
</td>
                    <td align="left">否</td>
                     
                    <td align="left">2010-12-17 10:07:13</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=49&indus_pid=3" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=49&indus_pid=3&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_50" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_50" value="0" onblur="edit_listorder(50,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_50"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="撰写报告" 
readonly="readonly" >
</span>
</td>
                    <td align="left">否</td>
                     
                    <td align="left">2010-12-17 10:07:46</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=50&indus_pid=3" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=50&indus_pid=3&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_51" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_51" value="0" onblur="edit_listorder(51,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_51"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="应用文写作" 
readonly="readonly" >
</span>
</td>
                    <td align="left">否</td>
                     
                    <td align="left">2010-12-17 10:08:25</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=51&indus_pid=3" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=51&indus_pid=3&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_52" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_52" value="0" onblur="edit_listorder(52,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_52"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="演讲稿" 
readonly="readonly" >
</span>
</td>
                    <td align="left">否</td>
                     
                    <td align="left">2010-12-17 10:08:54</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=52&indus_pid=3" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=52&indus_pid=3&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_57" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_57" value="0" onblur="edit_listorder(57,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_57"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="其它" 
readonly="readonly" >
</span>
</td>
                    <td align="left">否</td>
                     
                    <td align="left"></td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=57&indus_pid=3" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=57&indus_pid=3&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_121" style="display:;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_121" value="101" onblur="edit_listorder(121,this.value)"></td>
                    <td align="left">
                    	<span class="jia" 
onclick="if($(this).attr('class')=='jia'){
showids_121('show');
$(this).attr('class','jian');
}else{showids_121('hide');
$(this).attr('class','jia')}
" >&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_121"
 style="font-weight:900;font-size:16px;">
                            <input type="text" class="txt" value="软件开发" 
readonly="readonly" >
</span>
<a href="javascript:;" style="color:#ff6600" onclick="addchild(121,'')">增加子类</a>					
</td>
                    <td align="left">否</td>
                     
                    <td align="left">2012-03-24 14:19:16</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=121&indus_pid=0" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=121&indus_pid=0&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_36" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_36" value="0" onblur="edit_listorder(36,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_36"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="程序开发" 
readonly="readonly" >
</span>
</td>
                    <td align="left">荐</td>
                     
                    <td align="left">2010-12-17 09:30:38</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=36&indus_pid=121" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=36&indus_pid=121&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_37" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_37" value="0" onblur="edit_listorder(37,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_37"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="编写脚本" 
readonly="readonly" >
</span>
</td>
                    <td align="left">荐</td>
                     
                    <td align="left">2010-12-17 09:31:40</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=37&indus_pid=121" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=37&indus_pid=121&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_38" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_38" value="0" onblur="edit_listorder(38,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_38"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="软件皮肤" 
readonly="readonly" >
</span>
</td>
                    <td align="left">荐</td>
                     
                    <td align="left">2010-12-17 09:32:13</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=38&indus_pid=121" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=38&indus_pid=121&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_39" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_39" value="0" onblur="edit_listorder(39,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_39"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="插件开发" 
readonly="readonly" >
</span>
</td>
                    <td align="left">荐</td>
                     
                    <td align="left">2010-12-17 09:32:38</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=39&indus_pid=121" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=39&indus_pid=121&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_122" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_122" value="0" onblur="edit_listorder(122,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_122"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="软件测试" 
readonly="readonly" >
</span>
</td>
                    <td align="left">否</td>
                     
                    <td align="left">2010-12-17 09:33:29</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=122&indus_pid=121" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=122&indus_pid=121&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_123" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_123" value="0" onblur="edit_listorder(123,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_123"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="游戏开发" 
readonly="readonly" >
</span>
</td>
                    <td align="left">否</td>
                     
                    <td align="left">2010-12-17 09:34:02</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=123&indus_pid=121" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=123&indus_pid=121&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_324" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_324" value="0" onblur="edit_listorder(324,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_324"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="软件汉化" 
readonly="readonly" >
</span>
</td>
                    <td align="left">荐</td>
                     
                    <td align="left">2012-01-09 11:24:11</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=324&indus_pid=121" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=324&indus_pid=121&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_325" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_325" value="2" onblur="edit_listorder(325,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_325"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="程序功能开发" 
readonly="readonly" >
</span>
</td>
                    <td align="left">否</td>
                     
                    <td align="left">2012-01-09 11:24:36</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=325&indus_pid=121" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=325&indus_pid=121&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_326" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_326" value="0" onblur="edit_listorder(326,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_326"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="软件美工" 
readonly="readonly" >
</span>
</td>
                    <td align="left">否</td>
                     
                    <td align="left">2012-01-09 11:25:03</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=326&indus_pid=121" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=326&indus_pid=121&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_327" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_327" value="0" onblur="edit_listorder(327,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_327"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="开发文档编写" 
readonly="readonly" >
</span>
</td>
                    <td align="left">否</td>
                     
                    <td align="left">2012-01-09 11:26:13</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=327&indus_pid=121" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=327&indus_pid=121&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_328" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_328" value="0" onblur="edit_listorder(328,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_328"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="功能完善" 
readonly="readonly" >
</span>
</td>
                    <td align="left">否</td>
                     
                    <td align="left">2012-01-09 11:27:37</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=328&indus_pid=121" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=328&indus_pid=121&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_160" style="display:;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_160" value="19" onblur="edit_listorder(160,this.value)"></td>
                    <td align="left">
                    	<span class="jia" 
onclick="if($(this).attr('class')=='jia'){
showids_160('show');
$(this).attr('class','jian');
}else{showids_160('hide');
$(this).attr('class','jia')}
" >&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_160"
 style="font-weight:900;font-size:16px;">
                            <input type="text" class="txt" value="起名取名" 
readonly="readonly" >
</span>
<a href="javascript:;" style="color:#ff6600" onclick="addchild(160,'')">增加子类</a>					
</td>
                    <td align="left">否</td>
                     
                    <td align="left">2010-12-17 11:20:19</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=160&indus_pid=0" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=160&indus_pid=0&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_161" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_161" value="0" onblur="edit_listorder(161,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_161"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="宝宝起名" 
readonly="readonly" >
</span>
</td>
                    <td align="left">否</td>
                     
                    <td align="left">2010-12-17 09:58:15</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=161&indus_pid=160" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=161&indus_pid=160&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_162" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_162" value="0" onblur="edit_listorder(162,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_162"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="成人起名" 
readonly="readonly" >
</span>
</td>
                    <td align="left">否</td>
                     
                    <td align="left">2010-12-17 09:58:38</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=162&indus_pid=160" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=162&indus_pid=160&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_163" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_163" value="0" onblur="edit_listorder(163,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_163"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="公司起名" 
readonly="readonly" >
</span>
</td>
                    <td align="left">否</td>
                     
                    <td align="left">2010-12-17 09:59:12</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=163&indus_pid=160" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=163&indus_pid=160&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_164" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_164" value="0" onblur="edit_listorder(164,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_164"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="店铺起名" 
readonly="readonly" >
</span>
</td>
                    <td align="left">否</td>
                     
                    <td align="left">2010-12-17 09:59:53</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=164&indus_pid=160" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=164&indus_pid=160&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_165" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_165" value="0" onblur="edit_listorder(165,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_165"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="品牌起名" 
readonly="readonly" >
</span>
</td>
                    <td align="left">否</td>
                     
                    <td align="left">2010-12-17 10:00:46</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=165&indus_pid=160" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=165&indus_pid=160&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_166" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_166" value="0" onblur="edit_listorder(166,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_166"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="改名" 
readonly="readonly" >
</span>
</td>
                    <td align="left">否</td>
                     
                    <td align="left">2010-12-17 10:01:00</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=166&indus_pid=160" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=166&indus_pid=160&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_192" style="display:;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_192" value="25" onblur="edit_listorder(192,this.value)"></td>
                    <td align="left">
                    	<span class="jia" 
onclick="if($(this).attr('class')=='jia'){
showids_192('show');
$(this).attr('class','jian');
}else{showids_192('hide');
$(this).attr('class','jia')}
" >&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_192"
 style="font-weight:900;font-size:16px;">
                            <input type="text" class="txt" value="生活服务" 
readonly="readonly" >
</span>
<a href="javascript:;" style="color:#ff6600" onclick="addchild(192,'')">增加子类</a>					
</td>
                    <td align="left">否</td>
                     
                    <td align="left">2010-12-17 11:21:54</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=192&indus_pid=0" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=192&indus_pid=0&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_193" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_193" value="0" onblur="edit_listorder(193,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_193"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="市场调查" 
readonly="readonly" >
</span>
</td>
                    <td align="left">否</td>
                     
                    <td align="left">2010-12-17 10:28:11</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=193&indus_pid=192" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=193&indus_pid=192&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_194" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_194" value="0" onblur="edit_listorder(194,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_194"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="心理咨询" 
readonly="readonly" >
</span>
</td>
                    <td align="left">否</td>
                     
                    <td align="left">2010-12-17 10:28:52</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=194&indus_pid=192" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=194&indus_pid=192&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_195" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_195" value="0" onblur="edit_listorder(195,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_195"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="移民咨询" 
readonly="readonly" >
</span>
</td>
                    <td align="left">否</td>
                     
                    <td align="left">2010-12-17 10:29:17</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=195&indus_pid=192" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=195&indus_pid=192&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_196" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_196" value="0" onblur="edit_listorder(196,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_196"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="理财咨询" 
readonly="readonly" >
</span>
</td>
                    <td align="left">否</td>
                     
                    <td align="left">2010-12-17 10:30:00</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=196&indus_pid=192" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=196&indus_pid=192&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_197" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_197" value="0" onblur="edit_listorder(197,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_197"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="帮我投票" 
readonly="readonly" >
</span>
</td>
                    <td align="left">否</td>
                     
                    <td align="left">2010-12-17 10:30:35</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=197&indus_pid=192" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=197&indus_pid=192&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_198" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_198" value="0" onblur="edit_listorder(198,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_198"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="跑腿排队" 
readonly="readonly" >
</span>
</td>
                    <td align="left">否</td>
                     
                    <td align="left">2010-12-17 10:31:05</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=198&indus_pid=192" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=198&indus_pid=192&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_199" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_199" value="0" onblur="edit_listorder(199,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_199"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="家政服务" 
readonly="readonly" >
</span>
</td>
                    <td align="left">否</td>
                     
                    <td align="left">2010-12-17 10:31:35</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=199&indus_pid=192" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=199&indus_pid=192&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_200" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_200" value="0" onblur="edit_listorder(200,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_200"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="数据导入" 
readonly="readonly" >
</span>
</td>
                    <td align="left">否</td>
                     
                    <td align="left">2010-12-17 10:32:06</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=200&indus_pid=192" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=200&indus_pid=192&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_201" style="display:;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_201" value="13" onblur="edit_listorder(201,this.value)"></td>
                    <td align="left">
                    	<span class="jia" 
onclick="if($(this).attr('class')=='jia'){
showids_201('show');
$(this).attr('class','jian');
}else{showids_201('hide');
$(this).attr('class','jia')}
" >&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_201"
 style="font-weight:900;font-size:16px;">
                            <input type="text" class="txt" value="创意祝福" 
readonly="readonly" >
</span>
<a href="javascript:;" style="color:#ff6600" onclick="addchild(201,'')">增加子类</a>					
</td>
                    <td align="left">否</td>
                     
                    <td align="left">2012-03-24 14:19:00</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=201&indus_pid=0" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=201&indus_pid=0&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_202" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_202" value="2" onblur="edit_listorder(202,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_202"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="生日祝福" 
readonly="readonly" >
</span>
</td>
                    <td align="left">荐</td>
                     
                    <td align="left">2010-12-17 10:34:56</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=202&indus_pid=201" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=202&indus_pid=201&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_203" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_203" value="1" onblur="edit_listorder(203,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_203"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="爱情表白" 
readonly="readonly" >
</span>
</td>
                    <td align="left">荐</td>
                     
                    <td align="left">2012-01-09 11:45:54</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=203&indus_pid=201" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=203&indus_pid=201&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_204" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_204" value="3" onblur="edit_listorder(204,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_204"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="圣诞祝福" 
readonly="readonly" >
</span>
</td>
                    <td align="left">否</td>
                     
                    <td align="left">2010-12-17 10:35:43</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=204&indus_pid=201" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=204&indus_pid=201&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_205" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_205" value="4" onblur="edit_listorder(205,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_205"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="新年祝福" 
readonly="readonly" >
</span>
</td>
                    <td align="left">否</td>
                     
                    <td align="left">2010-12-17 10:36:18</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=205&indus_pid=201" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=205&indus_pid=201&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_206" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_206" value="9" onblur="edit_listorder(206,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_206"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="道歉短信" 
readonly="readonly" >
</span>
</td>
                    <td align="left">否</td>
                     
                    <td align="left">2010-12-17 10:36:46</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=206&indus_pid=201" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=206&indus_pid=201&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_207" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_207" value="8" onblur="edit_listorder(207,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_207"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="纪念日祝福" 
readonly="readonly" >
</span>
</td>
                    <td align="left">荐</td>
                     
                    <td align="left">2012-01-09 11:46:10</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=207&indus_pid=201" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=207&indus_pid=201&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_208" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_208" value="7" onblur="edit_listorder(208,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_208"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="感恩回馈" 
readonly="readonly" >
</span>
</td>
                    <td align="left">否</td>
                     
                    <td align="left">2010-12-17 10:37:55</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=208&indus_pid=201" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=208&indus_pid=201&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_209" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_209" value="5" onblur="edit_listorder(209,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_209"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="祝福喜得贵子" 
readonly="readonly" >
</span>
</td>
                    <td align="left">否</td>
                     
                    <td align="left">2010-12-17 10:38:27</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=209&indus_pid=201" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=209&indus_pid=201&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_210" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_210" value="6" onblur="edit_listorder(210,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_210"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="祝福乔迁新居" 
readonly="readonly" >
</span>
</td>
                    <td align="left">否</td>
                     
                    <td align="left">2010-12-17 10:39:16</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=210&indus_pid=201" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=210&indus_pid=201&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_331" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_331" value="30" onblur="edit_listorder(331,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_331"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="彩信" 
readonly="readonly" >
</span>
</td>
                    <td align="left">否</td>
                     
                    <td align="left">2012-01-09 11:33:07</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=331&indus_pid=201" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=331&indus_pid=201&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_211" style="display:;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_211" value="18" onblur="edit_listorder(211,this.value)"></td>
                    <td align="left">
                    	<span class="jia" 
onclick="if($(this).attr('class')=='jia'){
showids_211('show');
$(this).attr('class','jian');
}else{showids_211('hide');
$(this).attr('class','jia')}
" >&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_211"
 style="font-weight:900;font-size:16px;">
                            <input type="text" class="txt" value="头脑风暴" 
readonly="readonly" >
</span>
<a href="javascript:;" style="color:#ff6600" onclick="addchild(211,'')">增加子类</a>					
</td>
                    <td align="left">荐</td>
                     
                    <td align="left">2012-01-11 13:21:00</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=211&indus_pid=0" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=211&indus_pid=0&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_212" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_212" value="0" onblur="edit_listorder(212,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_212"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="策划" 
readonly="readonly" >
</span>
</td>
                    <td align="left">否</td>
                     
                    <td align="left">2010-12-17 10:44:02</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=212&indus_pid=211" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=212&indus_pid=211&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_213" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_213" value="0" onblur="edit_listorder(213,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_213"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="收集金点子" 
readonly="readonly" >
</span>
</td>
                    <td align="left">否</td>
                     
                    <td align="left">2010-12-17 10:44:23</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=213&indus_pid=211" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=213&indus_pid=211&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_214" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_214" value="0" onblur="edit_listorder(214,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_214"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="征集创意" 
readonly="readonly" >
</span>
</td>
                    <td align="left">否</td>
                     
                    <td align="left">2010-12-17 10:45:13</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=214&indus_pid=211" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=214&indus_pid=211&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_215" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_215" value="0" onblur="edit_listorder(215,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_215"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="写评论" 
readonly="readonly" >
</span>
</td>
                    <td align="left">否</td>
                     
                    <td align="left">2010-12-17 10:45:42</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=215&indus_pid=211" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=215&indus_pid=211&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_216" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_216" value="0" onblur="edit_listorder(216,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_216"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="意见建议" 
readonly="readonly" >
</span>
</td>
                    <td align="left">否</td>
                     
                    <td align="left">2010-12-17 10:46:07</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=216&indus_pid=211" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=216&indus_pid=211&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_217" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_217" value="0" onblur="edit_listorder(217,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_217"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="问卷调查" 
readonly="readonly" >
</span>
</td>
                    <td align="left">否</td>
                     
                    <td align="left">2010-12-17 10:47:19</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=217&indus_pid=211" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=217&indus_pid=211&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_218" style="display:;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_218" value="30" onblur="edit_listorder(218,this.value)"></td>
                    <td align="left">
                    	<span class="jia" 
onclick="if($(this).attr('class')=='jia'){
showids_218('show');
$(this).attr('class','jian');
}else{showids_218('hide');
$(this).attr('class','jia')}
" >&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_218"
 style="font-weight:900;font-size:16px;">
                            <input type="text" class="txt" value="移动应用" 
readonly="readonly" >
</span>
<a href="javascript:;" style="color:#ff6600" onclick="addchild(218,'')">增加子类</a>					
</td>
                    <td align="left">否</td>
                     
                    <td align="left">2010-12-17 11:23:22</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=218&indus_pid=0" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=218&indus_pid=0&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_219" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_219" value="4" onblur="edit_listorder(219,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_219"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="天翼插件" 
readonly="readonly" >
</span>
</td>
                    <td align="left">否</td>
                     
                    <td align="left">2010-12-17 10:49:06</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=219&indus_pid=218" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=219&indus_pid=218&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_222" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_222" value="1" onblur="edit_listorder(222,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_222"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="Android插件" 
readonly="readonly" >
</span>
</td>
                    <td align="left">否</td>
                     
                    <td align="left">2010-12-17 10:51:14</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=222&indus_pid=218" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=222&indus_pid=218&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_223" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_223" value="3" onblur="edit_listorder(223,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_223"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="iOS插件" 
readonly="readonly" >
</span>
</td>
                    <td align="left">否</td>
                     
                    <td align="left">2010-12-17 10:51:35</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=223&indus_pid=218" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=223&indus_pid=218&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_225" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_225" value="2" onblur="edit_listorder(225,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_225"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="Symbian SDK插件" 
readonly="readonly" >
</span>
</td>
                    <td align="left">否</td>
                     
                    <td align="left">2010-12-17 10:52:28</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=225&indus_pid=218" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=225&indus_pid=218&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_226" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_226" value="30" onblur="edit_listorder(226,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_226"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="PalmOS插件" 
readonly="readonly" >
</span>
</td>
                    <td align="left">否</td>
                     
                    <td align="left">2010-12-17 10:52:54</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=226&indus_pid=218" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=226&indus_pid=218&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_227" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_227" value="5" onblur="edit_listorder(227,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_227"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="Windows mobile插件" 
readonly="readonly" >
</span>
</td>
                    <td align="left">否</td>
                     
                    <td align="left">2010-12-17 10:53:32</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=227&indus_pid=218" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=227&indus_pid=218&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_228" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_228" value="6" onblur="edit_listorder(228,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_228"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="黑莓插件" 
readonly="readonly" >
</span>
</td>
                    <td align="left">否</td>
                     
                    <td align="left">2010-12-17 10:53:52</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=228&indus_pid=218" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=228&indus_pid=218&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_229" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_229" value="9" onblur="edit_listorder(229,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_229"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="Palm插件" 
readonly="readonly" >
</span>
</td>
                    <td align="left">否</td>
                     
                    <td align="left">2010-12-17 10:54:17</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=229&indus_pid=218" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=229&indus_pid=218&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_230" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_230" value="7" onblur="edit_listorder(230,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_230"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="Amazon kindle插件" 
readonly="readonly" >
</span>
</td>
                    <td align="left">否</td>
                     
                    <td align="left">2010-12-17 10:54:38</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=230&indus_pid=218" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=230&indus_pid=218&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_231" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_231" value="8" onblur="edit_listorder(231,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_231"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="手机游戏开发" 
readonly="readonly" >
</span>
</td>
                    <td align="left">否</td>
                     
                    <td align="left">2010-12-17 10:55:01</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=231&indus_pid=218" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=231&indus_pid=218&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_232" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_232" value="11" onblur="edit_listorder(232,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_232"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="手机应用创意" 
readonly="readonly" >
</span>
</td>
                    <td align="left">否</td>
                     
                    <td align="left">2010-12-17 10:55:22</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=232&indus_pid=218" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=232&indus_pid=218&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_233" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_233" value="13" onblur="edit_listorder(233,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_233"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="手机应用汉化" 
readonly="readonly" >
</span>
</td>
                    <td align="left">否</td>
                     
                    <td align="left">2010-12-17 10:55:45</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=233&indus_pid=218" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=233&indus_pid=218&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_234" style="display:;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_234" value="19" onblur="edit_listorder(234,this.value)"></td>
                    <td align="left">
                    	<span class="jia" 
onclick="if($(this).attr('class')=='jia'){
showids_234('show');
$(this).attr('class','jian');
}else{showids_234('hide');
$(this).attr('class','jia')}
" >&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_234"
 style="font-weight:900;font-size:16px;">
                            <input type="text" class="txt" value="法律服务" 
readonly="readonly" >
</span>
<a href="javascript:;" style="color:#ff6600" onclick="addchild(234,'')">增加子类</a>					
</td>
                    <td align="left">否</td>
                     
                    <td align="left">2010-12-17 11:23:50</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=234&indus_pid=0" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=234&indus_pid=0&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_235" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_235" value="0" onblur="edit_listorder(235,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_235"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="聘请律师" 
readonly="readonly" >
</span>
</td>
                    <td align="left">否</td>
                     
                    <td align="left">2010-12-17 10:56:49</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=235&indus_pid=234" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=235&indus_pid=234&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_236" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_236" value="0" onblur="edit_listorder(236,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_236"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="法律咨询" 
readonly="readonly" >
</span>
</td>
                    <td align="left">否</td>
                     
                    <td align="left">2010-12-17 10:57:18</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=236&indus_pid=234" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=236&indus_pid=234&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_237" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_237" value="0" onblur="edit_listorder(237,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_237"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="写法律合同" 
readonly="readonly" >
</span>
</td>
                    <td align="left">否</td>
                     
                    <td align="left">2010-12-17 10:57:41</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=237&indus_pid=234" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=237&indus_pid=234&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_238" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_238" value="0" onblur="edit_listorder(238,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_238"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="写律师函" 
readonly="readonly" >
</span>
</td>
                    <td align="left">否</td>
                     
                    <td align="left">2010-12-17 10:58:03</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=238&indus_pid=234" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=238&indus_pid=234&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_239" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_239" value="0" onblur="edit_listorder(239,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_239"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="写诉讼状" 
readonly="readonly" >
</span>
</td>
                    <td align="left">否</td>
                     
                    <td align="left">2010-12-17 10:58:32</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=239&indus_pid=234" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=239&indus_pid=234&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_240" style="display:;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_240" value="40" onblur="edit_listorder(240,this.value)"></td>
                    <td align="left">
                    	<span class="jia" 
onclick="if($(this).attr('class')=='jia'){
showids_240('show');
$(this).attr('class','jian');
}else{showids_240('hide');
$(this).attr('class','jia')}
" >&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_240"
 style="font-weight:900;font-size:16px;">
                            <input type="text" class="txt" value="招聘找人" 
readonly="readonly" >
</span>
<a href="javascript:;" style="color:#ff6600" onclick="addchild(240,'')">增加子类</a>					
</td>
                    <td align="left">否</td>
                     
                    <td align="left">2010-12-17 11:24:14</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=240&indus_pid=0" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=240&indus_pid=0&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_177" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_177" value="0" onblur="edit_listorder(177,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_177"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="搜索引擎优化" 
readonly="readonly" >
</span>
</td>
                    <td align="left">否</td>
                     
                    <td align="left">2010-12-17 10:18:22</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=177&indus_pid=240" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=177&indus_pid=240&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_178" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_178" value="0" onblur="edit_listorder(178,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_178"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="论坛推广" 
readonly="readonly" >
</span>
</td>
                    <td align="left">否</td>
                     
                    <td align="left">2010-12-17 10:19:08</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=178&indus_pid=240" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=178&indus_pid=240&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_179" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_179" value="0" onblur="edit_listorder(179,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_179"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="QQ群推广" 
readonly="readonly" >
</span>
</td>
                    <td align="left">否</td>
                     
                    <td align="left">2010-12-17 10:19:36</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=179&indus_pid=240" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=179&indus_pid=240&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_180" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_180" value="0" onblur="edit_listorder(180,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_180"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="博客推广" 
readonly="readonly" >
</span>
</td>
                    <td align="left">否</td>
                     
                    <td align="left">2010-12-17 10:20:10</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=180&indus_pid=240" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=180&indus_pid=240&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_181" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_181" value="0" onblur="edit_listorder(181,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_181"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="推广注册" 
readonly="readonly" >
</span>
</td>
                    <td align="left">否</td>
                     
                    <td align="left">2010-12-17 10:20:45</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=181&indus_pid=240" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=181&indus_pid=240&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_241" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_241" value="0" onblur="edit_listorder(241,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_241"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="招聘" 
readonly="readonly" >
</span>
</td>
                    <td align="left">否</td>
                     
                    <td align="left">2010-12-17 10:59:45</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=241&indus_pid=240" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=241&indus_pid=240&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_242" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_242" value="0" onblur="edit_listorder(242,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_242"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="求职" 
readonly="readonly" >
</span>
</td>
                    <td align="left">否</td>
                     
                    <td align="left">2010-12-17 11:00:17</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=242&indus_pid=240" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=242&indus_pid=240&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_243" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_243" value="0" onblur="edit_listorder(243,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jia" 
onclick="if($(this).attr('class')=='jia'){
showids_243('show');
$(this).attr('class','jian');
}else{showids_243('hide');
$(this).attr('class','jia')}
" >&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_243"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="寻人" 
readonly="readonly" >
</span>
</td>
                    <td align="left">否</td>
                     
                    <td align="left">2010-12-17 11:02:05</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=243&indus_pid=240" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=243&indus_pid=240&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_244" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_244" value="0" onblur="edit_listorder(244,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp;&nbsp; |--<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_244"
 style="font-weight:300;font-size:12px;">
                            <input type="text" class="txt" value="找对象" 
readonly="readonly" >
</span>
</td>
                    <td align="left">否</td>
                     
                    <td align="left">2010-12-17 11:02:31</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=244&indus_pid=243" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=244&indus_pid=243&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_245" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_245" value="0" onblur="edit_listorder(245,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_245"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="找生产商" 
readonly="readonly" >
</span>
</td>
                    <td align="left">否</td>
                     
                    <td align="left">2010-12-17 11:02:53</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=245&indus_pid=240" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=245&indus_pid=240&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_246" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_246" value="0" onblur="edit_listorder(246,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_246"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="找客户" 
readonly="readonly" >
</span>
</td>
                    <td align="left">否</td>
                     
                    <td align="left">2010-12-17 11:03:13</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=246&indus_pid=240" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=246&indus_pid=240&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_247" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_247" value="0" onblur="edit_listorder(247,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_247"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="找供应商" 
readonly="readonly" >
</span>
</td>
                    <td align="left">否</td>
                     
                    <td align="left">2010-12-17 11:03:36</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=247&indus_pid=240" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=247&indus_pid=240&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_248" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_248" value="0" onblur="edit_listorder(248,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_248"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="找人脉" 
readonly="readonly" >
</span>
</td>
                    <td align="left">否</td>
                     
                    <td align="left">2010-12-17 11:03:56</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=248&indus_pid=240" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=248&indus_pid=240&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_334" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_334" value="0" onblur="edit_listorder(334,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jia" 
onclick="if($(this).attr('class')=='jia'){
showids_334('show');
$(this).attr('class','jian');
}else{showids_334('hide');
$(this).attr('class','jia')}
" >&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_334"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="简历设计" 
readonly="readonly" >
</span>
</td>
                    <td align="left">荐</td>
                     
                    <td align="left">2012-01-09 13:45:03</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=334&indus_pid=240" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=334&indus_pid=240&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_150" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_150" value="0" onblur="edit_listorder(150,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp;&nbsp; |--<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_150"
 style="font-weight:300;font-size:12px;">
                            <input type="text" class="txt" value="家装设计" 
readonly="readonly" >
</span>
</td>
                    <td align="left">否</td>
                     
                    <td align="left">2010-12-17 09:55:18</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=150&indus_pid=334" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=150&indus_pid=334&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_249" style="display:;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_249" value="14" onblur="edit_listorder(249,this.value)"></td>
                    <td align="left">
                    	<span class="jia" 
onclick="if($(this).attr('class')=='jia'){
showids_249('show');
$(this).attr('class','jian');
}else{showids_249('hide');
$(this).attr('class','jia')}
" >&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_249"
 style="font-weight:900;font-size:16px;">
                            <input type="text" class="txt" value="网游服务" 
readonly="readonly" >
</span>
<a href="javascript:;" style="color:#ff6600" onclick="addchild(249,'')">增加子类</a>					
</td>
                    <td align="left">荐</td>
                     
                    <td align="left">2012-08-31 16:58:09</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=249&indus_pid=0" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=249&indus_pid=0&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_96" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_96" value="0" onblur="edit_listorder(96,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_96"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="网游创意" 
readonly="readonly" >
</span>
</td>
                    <td align="left">荐</td>
                     
                    <td align="left">2012-01-09 14:41:52</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=96&indus_pid=249" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=96&indus_pid=249&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_250" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_250" value="0" onblur="edit_listorder(250,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_250"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="手机游戏" 
readonly="readonly" >
</span>
</td>
                    <td align="left">否</td>
                     
                    <td align="left">2010-12-17 11:06:32</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=250&indus_pid=249" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=250&indus_pid=249&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_251" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_251" value="0" onblur="edit_listorder(251,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_251"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="游戏试玩" 
readonly="readonly" >
</span>
</td>
                    <td align="left">否</td>
                     
                    <td align="left">2010-12-17 11:06:56</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=251&indus_pid=249" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=251&indus_pid=249&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_252" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_252" value="0" onblur="edit_listorder(252,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_252"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="评测报告" 
readonly="readonly" >
</span>
</td>
                    <td align="left">否</td>
                     
                    <td align="left">2010-12-17 11:07:19</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=252&indus_pid=249" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=252&indus_pid=249&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_253" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_253" value="0" onblur="edit_listorder(253,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_253"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="版本设计" 
readonly="readonly" >
</span>
</td>
                    <td align="left">否</td>
                     
                    <td align="left">2010-12-17 11:07:50</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=253&indus_pid=249" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=253&indus_pid=249&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_254" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_254" value="0" onblur="edit_listorder(254,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_254"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="剧情策划" 
readonly="readonly" >
</span>
</td>
                    <td align="left">否</td>
                     
                    <td align="left">2010-12-17 11:08:13</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=254&indus_pid=249" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=254&indus_pid=249&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_255" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_255" value="0" onblur="edit_listorder(255,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_255"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="压力测试" 
readonly="readonly" >
</span>
</td>
                    <td align="left">否</td>
                     
                    <td align="left">2010-12-17 11:08:32</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=255&indus_pid=249" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=255&indus_pid=249&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_256" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_256" value="0" onblur="edit_listorder(256,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_256"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="代写攻略" 
readonly="readonly" >
</span>
</td>
                    <td align="left">否</td>
                     
                    <td align="left">2010-12-17 11:08:55</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=256&indus_pid=249" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=256&indus_pid=249&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_257" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_257" value="0" onblur="edit_listorder(257,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_257"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="活动策划" 
readonly="readonly" >
</span>
</td>
                    <td align="left">否</td>
                     
                    <td align="left">2010-12-17 11:09:19</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=257&indus_pid=249" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=257&indus_pid=249&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_258" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_258" value="0" onblur="edit_listorder(258,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_258"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="补丁制作" 
readonly="readonly" >
</span>
</td>
                    <td align="left">否</td>
                     
                    <td align="left">2010-12-17 11:09:48</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=258&indus_pid=249" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=258&indus_pid=249&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_259" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_259" value="0" onblur="edit_listorder(259,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_259"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="游戏视频" 
readonly="readonly" >
</span>
</td>
                    <td align="left">否</td>
                     
                    <td align="left">2010-12-17 11:10:05</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=259&indus_pid=249" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=259&indus_pid=249&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_332" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_332" value="0" onblur="edit_listorder(332,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_332"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="问卷调查" 
readonly="readonly" >
</span>
</td>
                    <td align="left">否</td>
                     
                    <td align="left">2012-01-09 11:37:02</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=332&indus_pid=249" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=332&indus_pid=249&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_335" style="display:;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_335" value="17" onblur="edit_listorder(335,this.value)"></td>
                    <td align="left">
                    	<span class="jia" 
onclick="if($(this).attr('class')=='jia'){
showids_335('show');
$(this).attr('class','jian');
}else{showids_335('hide');
$(this).attr('class','jia')}
" >&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_335"
 style="font-weight:900;font-size:16px;">
                            <input type="text" class="txt" value="建筑/装修" 
readonly="readonly" >
</span>
<a href="javascript:;" style="color:#ff6600" onclick="addchild(335,'')">增加子类</a>					
</td>
                    <td align="left">荐</td>
                     
                    <td align="left">2012-01-09 13:47:33</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=335&indus_pid=0" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=335&indus_pid=0&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_149" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_149" value="200" onblur="edit_listorder(149,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_149"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="房屋建筑设计" 
readonly="readonly" >
</span>
</td>
                    <td align="left">否</td>
                     
                    <td align="left">2010-12-17 09:54:46</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=149&indus_pid=335" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=149&indus_pid=335&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_151" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_151" value="0" onblur="edit_listorder(151,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_151"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="展会设计" 
readonly="readonly" >
</span>
</td>
                    <td align="left">否</td>
                     
                    <td align="left">2010-12-17 09:55:42</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=151&indus_pid=335" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=151&indus_pid=335&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_152" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_152" value="0" onblur="edit_listorder(152,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_152"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="办公装修" 
readonly="readonly" >
</span>
</td>
                    <td align="left">否</td>
                     
                    <td align="left">2010-12-17 09:56:17</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=152&indus_pid=335" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=152&indus_pid=335&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_153" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_153" value="0" onblur="edit_listorder(153,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_153"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="园林景观" 
readonly="readonly" >
</span>
</td>
                    <td align="left">否</td>
                     
                    <td align="left">2010-12-17 09:56:43</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=153&indus_pid=335" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=153&indus_pid=335&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_158" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_158" value="20" onblur="edit_listorder(158,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_158"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="形象墙设计" 
readonly="readonly" >
</span>
</td>
                    <td align="left">否</td>
                     
                    <td align="left">2010-12-17 09:53:37</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=158&indus_pid=335" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=158&indus_pid=335&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_159" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_159" value="0" onblur="edit_listorder(159,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_159"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="店面装修" 
readonly="readonly" >
</span>
</td>
                    <td align="left">否</td>
                     
                    <td align="left">2010-12-17 09:54:14</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=159&indus_pid=335" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=159&indus_pid=335&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_336" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_336" value="1" onblur="edit_listorder(336,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_336"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="新房装修" 
readonly="readonly" >
</span>
</td>
                    <td align="left">荐</td>
                     
                    <td align="left">2012-01-09 13:47:51</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=336&indus_pid=335" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=336&indus_pid=335&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_337" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_337" value="2" onblur="edit_listorder(337,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_337"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="二手房装修" 
readonly="readonly" >
</span>
</td>
                    <td align="left">荐</td>
                     
                    <td align="left">2012-01-09 13:48:03</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=337&indus_pid=335" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=337&indus_pid=335&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_338" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_338" value="4" onblur="edit_listorder(338,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_338"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="风水咨询" 
readonly="readonly" >
</span>
</td>
                    <td align="left">否</td>
                     
                    <td align="left">2012-01-09 13:48:14</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=338&indus_pid=335" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=338&indus_pid=335&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_339" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_339" value="8" onblur="edit_listorder(339,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_339"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="装修监理" 
readonly="readonly" >
</span>
</td>
                    <td align="left">否</td>
                     
                    <td align="left">2012-01-09 13:48:23</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=339&indus_pid=335" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=339&indus_pid=335&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_340" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_340" value="3" onblur="edit_listorder(340,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_340"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="庭院景观设计" 
readonly="readonly" >
</span>
</td>
                    <td align="left">否</td>
                     
                    <td align="left">2012-01-09 13:48:34</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=340&indus_pid=335" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=340&indus_pid=335&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_341" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_341" value="6" onblur="edit_listorder(341,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_341"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="办公商铺装修" 
readonly="readonly" >
</span>
</td>
                    <td align="left">荐</td>
                     
                    <td align="left">2012-01-09 13:48:43</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=341&indus_pid=335" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=341&indus_pid=335&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_342" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_342" value="10" onblur="edit_listorder(342,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_342"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="自建房设计" 
readonly="readonly" >
</span>
</td>
                    <td align="left">否</td>
                     
                    <td align="left">2012-01-09 13:48:51</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=342&indus_pid=335" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=342&indus_pid=335&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_343" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_343" value="12" onblur="edit_listorder(343,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_343"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="景观设计" 
readonly="readonly" >
</span>
</td>
                    <td align="left">否</td>
                     
                    <td align="left">2012-01-09 13:49:02</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=343&indus_pid=335" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=343&indus_pid=335&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_344" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_344" value="14" onblur="edit_listorder(344,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_344"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="3D模型设计" 
readonly="readonly" >
</span>
</td>
                    <td align="left">否</td>
                     
                    <td align="left">2012-01-09 13:49:10</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=344&indus_pid=335" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=344&indus_pid=335&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_350" style="display:;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_350" value="18" onblur="edit_listorder(350,this.value)"></td>
                    <td align="left">
                    	<span class="jia" 
onclick="if($(this).attr('class')=='jia'){
showids_350('show');
$(this).attr('class','jian');
}else{showids_350('hide');
$(this).attr('class','jia')}
" >&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_350"
 style="font-weight:900;font-size:16px;">
                            <input type="text" class="txt" value="照片美化/编辑" 
readonly="readonly" >
</span>
<a href="javascript:;" style="color:#ff6600" onclick="addchild(350,'')">增加子类</a>					
</td>
                    <td align="left">荐</td>
                     
                    <td align="left">2012-02-17 12:03:46</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=350&indus_pid=0" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=350&indus_pid=0&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_351" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_351" value="1" onblur="edit_listorder(351,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_351"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="艺术照处理" 
readonly="readonly" >
</span>
</td>
                    <td align="left">否</td>
                     
                    <td align="left">2012-02-17 11:57:32</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=351&indus_pid=350" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=351&indus_pid=350&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_352" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_352" value="2" onblur="edit_listorder(352,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_352"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="照片变卡通" 
readonly="readonly" >
</span>
</td>
                    <td align="left">否</td>
                     
                    <td align="left">2012-02-17 11:57:32</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=352&indus_pid=350" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=352&indus_pid=350&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_353" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_353" value="3" onblur="edit_listorder(353,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_353"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="电子相册" 
readonly="readonly" >
</span>
</td>
                    <td align="left">否</td>
                     
                    <td align="left">2012-02-17 11:57:32</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=353&indus_pid=350" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=353&indus_pid=350&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_354" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_354" value="4" onblur="edit_listorder(354,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_354"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="照片美化" 
readonly="readonly" >
</span>
</td>
                    <td align="left">否</td>
                     
                    <td align="left">2012-02-17 11:57:32</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=354&indus_pid=350" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=354&indus_pid=350&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_355" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_355" value="5" onblur="edit_listorder(355,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_355"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="婚纱照美化" 
readonly="readonly" >
</span>
</td>
                    <td align="left">否</td>
                     
                    <td align="left">2012-02-17 11:57:32</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=355&indus_pid=350" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=355&indus_pid=350&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_356" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_356" value="6" onblur="edit_listorder(356,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_356"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="图片编辑" 
readonly="readonly" >
</span>
</td>
                    <td align="left">否</td>
                     
                    <td align="left">2012-02-17 11:57:32</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=356&indus_pid=350" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=356&indus_pid=350&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_357" style="display:;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_357" value="19" onblur="edit_listorder(357,this.value)"></td>
                    <td align="left">
                    	<span class="jia" 
onclick="if($(this).attr('class')=='jia'){
showids_357('show');
$(this).attr('class','jian');
}else{showids_357('hide');
$(this).attr('class','jia')}
" >&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_357"
 style="font-weight:900;font-size:16px;">
                            <input type="text" class="txt" value="影视/配音/歌词" 
readonly="readonly" >
</span>
<a href="javascript:;" style="color:#ff6600" onclick="addchild(357,'')">增加子类</a>					
</td>
                    <td align="left">荐</td>
                     
                    <td align="left">2012-02-17 11:59:58</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=357&indus_pid=0" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=357&indus_pid=0&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_358" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_358" value="1" onblur="edit_listorder(358,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_358"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="写剧本" 
readonly="readonly" >
</span>
</td>
                    <td align="left">否</td>
                     
                    <td align="left">2012-02-17 12:02:15</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=358&indus_pid=357" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=358&indus_pid=357&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_359" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_359" value="2" onblur="edit_listorder(359,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_359"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="影视制作" 
readonly="readonly" >
</span>
</td>
                    <td align="left">否</td>
                     
                    <td align="left">2012-02-17 12:02:15</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=359&indus_pid=357" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=359&indus_pid=357&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_360" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_360" value="3" onblur="edit_listorder(360,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_360"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="广告配音" 
readonly="readonly" >
</span>
</td>
                    <td align="left">否</td>
                     
                    <td align="left">2012-02-17 12:02:15</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=360&indus_pid=357" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=360&indus_pid=357&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_361" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_361" value="4" onblur="edit_listorder(361,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_361"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="影视配音" 
readonly="readonly" >
</span>
</td>
                    <td align="left">否</td>
                     
                    <td align="left">2012-02-17 12:02:15</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=361&indus_pid=357" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=361&indus_pid=357&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_362" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_362" value="5" onblur="edit_listorder(362,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_362"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="动画配音" 
readonly="readonly" >
</span>
</td>
                    <td align="left">否</td>
                     
                    <td align="left">2012-02-17 12:02:15</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=362&indus_pid=357" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=362&indus_pid=357&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_363" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_363" value="6" onblur="edit_listorder(363,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_363"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="彩铃配音" 
readonly="readonly" >
</span>
</td>
                    <td align="left">否</td>
                     
                    <td align="left">2012-02-17 12:02:15</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=363&indus_pid=357" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=363&indus_pid=357&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_364" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_364" value="7" onblur="edit_listorder(364,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_364"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="方言配音" 
readonly="readonly" >
</span>
</td>
                    <td align="left">否</td>
                     
                    <td align="left">2012-02-17 12:02:15</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=364&indus_pid=357" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=364&indus_pid=357&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_365" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_365" value="8" onblur="edit_listorder(365,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_365"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="外语配音" 
readonly="readonly" >
</span>
</td>
                    <td align="left">否</td>
                     
                    <td align="left">2012-02-17 12:02:15</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=365&indus_pid=357" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=365&indus_pid=357&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_366" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_366" value="9" onblur="edit_listorder(366,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_366"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="创意配音" 
readonly="readonly" >
</span>
</td>
                    <td align="left">否</td>
                     
                    <td align="left">2012-02-17 12:02:15</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=366&indus_pid=357" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=366&indus_pid=357&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_367" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_367" value="10" onblur="edit_listorder(367,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_367"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="歌词创作" 
readonly="readonly" >
</span>
</td>
                    <td align="left">否</td>
                     
                    <td align="left">2012-02-17 12:02:15</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=367&indus_pid=357" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=367&indus_pid=357&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_368" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_368" value="11" onblur="edit_listorder(368,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_368"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="歌词谱曲" 
readonly="readonly" >
</span>
</td>
                    <td align="left">否</td>
                     
                    <td align="left">2012-02-17 12:02:15</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=368&indus_pid=357" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=368&indus_pid=357&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_439" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_439" value="0" onblur="edit_listorder(439,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_439"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="1111" 
readonly="readonly" >
</span>
</td>
                    <td align="left">否</td>
                     
                    <td align="left">2012-08-31 17:45:42</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=439&indus_pid=357" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=439&indus_pid=357&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_441" style="display:;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_441" value="1" onblur="edit_listorder(441,this.value)"></td>
                    <td align="left">
                    	<span class="jia" 
onclick="if($(this).attr('class')=='jia'){
showids_441('show');
$(this).attr('class','jian');
}else{showids_441('hide');
$(this).attr('class','jia')}
" >&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_441"
 style="font-weight:900;font-size:16px;">
                            <input type="text" class="txt" value="品牌设计" 
readonly="readonly" >
</span>
<a href="javascript:;" style="color:#ff6600" onclick="addchild(441,'')">增加子类</a>					
</td>
                    <td align="left">荐</td>
                     
                    <td align="left">2012-02-17 11:59:58</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=441&indus_pid=0" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=441&indus_pid=0&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_8" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_8" value="0" onblur="edit_listorder(8,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_8"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="标志设计" 
readonly="readonly" >
</span>
</td>
                    <td align="left">荐</td>
                     
                    <td align="left">2011-12-19 17:51:53</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=8&indus_pid=441" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=8&indus_pid=441&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_9" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_9" value="0" onblur="edit_listorder(9,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_9"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="VI设计" 
readonly="readonly" >
</span>
</td>
                    <td align="left">荐</td>
                     
                    <td align="left">2011-12-19 17:52:12</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=9&indus_pid=441" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=9&indus_pid=441&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_10" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_10" value="0" onblur="edit_listorder(10,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_10"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="名片设计" 
readonly="readonly" >
</span>
</td>
                    <td align="left">荐</td>
                     
                    <td align="left">2011-12-19 17:52:56</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=10&indus_pid=441" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=10&indus_pid=441&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_11" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_11" value="0" onblur="edit_listorder(11,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_11"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="海报设计" 
readonly="readonly" >
</span>
</td>
                    <td align="left">否</td>
                     
                    <td align="left">2011-12-19 17:55:46</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=11&indus_pid=441" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=11&indus_pid=441&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_12" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_12" value="0" onblur="edit_listorder(12,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_12"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="宣传册页" 
readonly="readonly" >
</span>
</td>
                    <td align="left">否</td>
                     
                    <td align="left">2011-12-19 18:00:27</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=12&indus_pid=441" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=12&indus_pid=441&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_13" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_13" value="0" onblur="edit_listorder(13,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_13"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="卡通设计" 
readonly="readonly" >
</span>
</td>
                    <td align="left">否</td>
                     
                    <td align="left">2011-12-17 09:50:40</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=13&indus_pid=441" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=13&indus_pid=441&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_14" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_14" value="0" onblur="edit_listorder(14,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_14"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="招牌设计" 
readonly="readonly" >
</span>
</td>
                    <td align="left">否</td>
                     
                    <td align="left">2011-12-19 18:00:51</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=14&indus_pid=441" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=14&indus_pid=441&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_16" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_16" value="0" onblur="edit_listorder(16,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_16"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="横幅设计" 
readonly="readonly" >
</span>
</td>
                    <td align="left">否</td>
                     
                    <td align="left">2011-12-17 09:50:55</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=16&indus_pid=441" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=16&indus_pid=441&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_27" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_27" value="0" onblur="edit_listorder(27,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_27"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="网站美工" 
readonly="readonly" >
</span>
</td>
                    <td align="left">否</td>
                     
                    <td align="left">2012-08-23 15:29:59</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=27&indus_pid=441" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=27&indus_pid=441&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_130" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_130" value="1" onblur="edit_listorder(130,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_130"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="字体设计" 
readonly="readonly" >
</span>
</td>
                    <td align="left">否</td>
                     
                    <td align="left">2012-01-09 11:05:27</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=130&indus_pid=441" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=130&indus_pid=441&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_131" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_131" value="2" onblur="edit_listorder(131,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_131"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="贺卡设计" 
readonly="readonly" >
</span>
</td>
                    <td align="left">否</td>
                     
                    <td align="left">2012-01-09 11:05:38</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=131&indus_pid=441" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=131&indus_pid=441&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_132" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_132" value="3" onblur="edit_listorder(132,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_132"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="礼品设计" 
readonly="readonly" >
</span>
</td>
                    <td align="left">否</td>
                     
                    <td align="left">2012-01-09 11:05:46</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=132&indus_pid=441" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=132&indus_pid=441&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_133" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_133" value="22" onblur="edit_listorder(133,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_133"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="QQ表情" 
readonly="readonly" >
</span>
</td>
                    <td align="left">否</td>
                     
                    <td align="left">2010-12-17 09:38:26</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=133&indus_pid=441" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=133&indus_pid=441&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_134" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_134" value="4" onblur="edit_listorder(134,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_134"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="四格漫画" 
readonly="readonly" >
</span>
</td>
                    <td align="left">否</td>
                     
                    <td align="left">2012-01-09 11:05:55</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=134&indus_pid=441" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=134&indus_pid=441&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_135" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_135" value="5" onblur="edit_listorder(135,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_135"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="动漫设计" 
readonly="readonly" >
</span>
</td>
                    <td align="left">否</td>
                     
                    <td align="left">2012-01-09 11:06:03</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=135&indus_pid=441" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=135&indus_pid=441&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_136" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_136" value="6" onblur="edit_listorder(136,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_136"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="排版设计" 
readonly="readonly" >
</span>
</td>
                    <td align="left">否</td>
                     
                    <td align="left">2012-01-09 11:06:11</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=136&indus_pid=441" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=136&indus_pid=441&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_137" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_137" value="7" onblur="edit_listorder(137,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_137"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="服饰设计" 
readonly="readonly" >
</span>
</td>
                    <td align="left">否</td>
                     
                    <td align="left">2012-01-09 11:06:19</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=137&indus_pid=441" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=137&indus_pid=441&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_138" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_138" value="100" onblur="edit_listorder(138,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_138"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="ppt设计" 
readonly="readonly" >
</span>
</td>
                    <td align="left">否</td>
                     
                    <td align="left">2012-01-09 11:12:02</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=138&indus_pid=441" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=138&indus_pid=441&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_140" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_140" value="8" onblur="edit_listorder(140,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_140"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="台历设计" 
readonly="readonly" >
</span>
</td>
                    <td align="left">否</td>
                     
                    <td align="left">2012-01-09 11:06:28</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=140&indus_pid=441" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=140&indus_pid=441&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_144" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_144" value="0" onblur="edit_listorder(144,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jia" 
onclick="if($(this).attr('class')=='jia'){
showids_144('show');
$(this).attr('class','jian');
}else{showids_144('hide');
$(this).attr('class','jia')}
" >&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_144"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="工业设计" 
readonly="readonly" >
</span>
</td>
                    <td align="left">否</td>
                     
                    <td align="left">2010-12-17 09:44:32</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=144&indus_pid=441" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=144&indus_pid=441&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_405" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_405" value="0" onblur="edit_listorder(405,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp;&nbsp; |--<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_405"
 style="font-weight:300;font-size:12px;">
                            <input type="text" class="txt" value="newNode2" 
readonly="readonly" >
</span>
</td>
                    <td align="left">否</td>
                     
                    <td align="left"></td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=405&indus_pid=144" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=405&indus_pid=144&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_145" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_145" value="0" onblur="edit_listorder(145,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_145"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="按钮图标" 
readonly="readonly" >
</span>
</td>
                    <td align="left">否</td>
                     
                    <td align="left">2010-12-17 09:45:00</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=145&indus_pid=441" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=145&indus_pid=441&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_263" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_263" value="40" onblur="edit_listorder(263,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_263"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="其他" 
readonly="readonly" >
</span>
</td>
                    <td align="left">否</td>
                     
                    <td align="left">2010-12-17 11:17:19</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=263&indus_pid=441" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=263&indus_pid=441&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_348" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_348" value="0" onblur="edit_listorder(348,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_348"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="logo设计" 
readonly="readonly" >
</span>
</td>
                    <td align="left">否</td>
                     
                    <td align="left">2012-02-17 11:54:04</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=348&indus_pid=441" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=348&indus_pid=441&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_349" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_349" value="0" onblur="edit_listorder(349,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_349"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="vi设计" 
readonly="readonly" >
</span>
</td>
                    <td align="left">否</td>
                     
                    <td align="left">2012-02-17 11:54:04</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=349&indus_pid=441" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=349&indus_pid=441&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_370" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_370" value="0" onblur="edit_listorder(370,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_370"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="游戏封面" 
readonly="readonly" >
</span>
</td>
                    <td align="left">否</td>
                     
                    <td align="left">2012-02-28 14:20:30</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=370&indus_pid=441" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=370&indus_pid=441&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_376" style="display:none;">
                  <tr class="item" align="center">
                  	
                    <td class="td28" align="left">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_376" value="0" onblur="edit_listorder(376,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_376"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="lee牛仔裤" 
readonly="readonly" >
</span>
</td>
                    <td align="left">否</td>
                     
                    <td align="left">2012-02-28 14:43:43</td>
                    <td align="left">
<a href="index.php?do=task&view=industry_edit&indus_id=376&indus_pid=441" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=industry&w[indus_pid]=&w[indus_name]=
		&=&indus_id=376&indus_pid=441&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
  </tbody>
                                 <tr>
               	<td>&nbsp;</td>
                    <td colspan="6">
                   
                    
                    <div class="clearfix">
                  		<div class="clearfix">	
                        <a href="index.php?do=task&view=union_industry"   class="button pill negative"><span class="icon cog">&nbsp;</span>行业合并</a>
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
      	/*
var arr_editstatusarr = Array();
      	function edititemname(eid,text){
    		if(arr_editstatusarr['eid']){
    			return ;
    		}
    		var mod = '<input type="text" class="txt" name="edit_indus_name_arr['+eid+']" value="'+text+'">';
    		$('#indus_item_span_'+eid).html(mod);
    		arr_editstatusarr['eid']=1;
    	}
*/
    	
    	function edit_listorder(iid,v){
    		$.get('index.php?do=task&ac=editlistorder',{iid:iid,val:v});
    	}
    	
    	var newindus_c = 0;
    	function addchild(pid,ext){
    		newindus_c++;
    		if(ext=='')
    		{ext = '|';}
    		if(ext!=' ')
    		{ext = '&nbsp;&nbsp;&nbsp;'+ext+'---';}
    		var mod = '<tr class="item" id="newindus_c_'+newindus_c+'">';
    		  	mod+='<td class="td28">'+'<input type=text size=3 class="txt" name="add_indus_name_listarr['+pid+']['+newindus_c+']" size=3>';+'</td>';
    		  	mod+='<td>'+ext;
    			mod+='<input type=text class="txt" name="add_indus_name_arr['+pid+']['+newindus_c+']">';
    			mod+='</td>';
    		    mod+='<td>否</td>';
    	 
    		    mod+='<td>&nbsp;</td>';
    			mod+='<td>';
    			mod+='<a href="javascript:;" class="button" onclick="$(\'#newindus_c_'+newindus_c+'\').remove()">';
    			mod+='删除';
    			mod+='</a>';
    			mod+='</td>';
    		  	mod+='</tr>	';
    			
    			$('#indus_item_l_'+pid).append(mod); 
    		
    	}
    	
             	function showids_441(op){
    		if(op=='show'){
    			    			$('#indus_item_l_8').show();
    			    			$('#indus_item_l_9').show();
    			    			$('#indus_item_l_10').show();
    			    			$('#indus_item_l_11').show();
    			    			$('#indus_item_l_12').show();
    			    			$('#indus_item_l_13').show();
    			    			$('#indus_item_l_14').show();
    			    			$('#indus_item_l_16').show();
    			    			$('#indus_item_l_27').show();
    			    			$('#indus_item_l_144').show();
    			    			$('#indus_item_l_145').show();
    			    			$('#indus_item_l_348').show();
    			    			$('#indus_item_l_349').show();
    			    			$('#indus_item_l_370').show();
    			    			$('#indus_item_l_376').show();
    			    			$('#indus_item_l_130').show();
    			    			$('#indus_item_l_131').show();
    			    			$('#indus_item_l_132').show();
    			    			$('#indus_item_l_134').show();
    			    			$('#indus_item_l_135').show();
    			    			$('#indus_item_l_136').show();
    			    			$('#indus_item_l_137').show();
    			    			$('#indus_item_l_140').show();
    			    			$('#indus_item_l_133').show();
    			    			$('#indus_item_l_263').show();
    			    			$('#indus_item_l_138').show();
    			    		}
    		else{
    			    			$('#indus_item_l_8').hide();
    			    			$('#indus_item_l_9').hide();
    			    			$('#indus_item_l_10').hide();
    			    			$('#indus_item_l_11').hide();
    			    			$('#indus_item_l_12').hide();
    			    			$('#indus_item_l_13').hide();
    			    			$('#indus_item_l_14').hide();
    			    			$('#indus_item_l_16').hide();
    			    			$('#indus_item_l_27').hide();
    			    			$('#indus_item_l_144').hide();
    			    			$('#indus_item_l_145').hide();
    			    			$('#indus_item_l_348').hide();
    			    			$('#indus_item_l_349').hide();
    			    			$('#indus_item_l_370').hide();
    			    			$('#indus_item_l_376').hide();
    			    			$('#indus_item_l_130').hide();
    			    			$('#indus_item_l_131').hide();
    			    			$('#indus_item_l_132').hide();
    			    			$('#indus_item_l_134').hide();
    			    			$('#indus_item_l_135').hide();
    			    			$('#indus_item_l_136').hide();
    			    			$('#indus_item_l_137').hide();
    			    			$('#indus_item_l_140').hide();
    			    			$('#indus_item_l_133').hide();
    			    			$('#indus_item_l_263').hide();
    			    			$('#indus_item_l_138').hide();
    			    		}
    		
    		    		
    	}
    	      	function showids_2(op){
    		if(op=='show'){
    			    			$('#indus_item_l_28').show();
    			    			$('#indus_item_l_30').show();
    			    			$('#indus_item_l_31').show();
    			    			$('#indus_item_l_32').show();
    			    			$('#indus_item_l_34').show();
    			    			$('#indus_item_l_408').show();
    			    			$('#indus_item_l_169').show();
    			    			$('#indus_item_l_148').show();
    			    			$('#indus_item_l_154').show();
    			    			$('#indus_item_l_155').show();
    			    			$('#indus_item_l_156').show();
    			    			$('#indus_item_l_147').show();
    			    			$('#indus_item_l_170').show();
    			    			$('#indus_item_l_172').show();
    			    			$('#indus_item_l_33').show();
    			    			$('#indus_item_l_35').show();
    			    			$('#indus_item_l_29').show();
    			    			$('#indus_item_l_40').show();
    			    		}
    		else{
    			    			$('#indus_item_l_28').hide();
    			    			$('#indus_item_l_30').hide();
    			    			$('#indus_item_l_31').hide();
    			    			$('#indus_item_l_32').hide();
    			    			$('#indus_item_l_34').hide();
    			    			$('#indus_item_l_408').hide();
    			    			$('#indus_item_l_169').hide();
    			    			$('#indus_item_l_148').hide();
    			    			$('#indus_item_l_154').hide();
    			    			$('#indus_item_l_155').hide();
    			    			$('#indus_item_l_156').hide();
    			    			$('#indus_item_l_147').hide();
    			    			$('#indus_item_l_170').hide();
    			    			$('#indus_item_l_172').hide();
    			    			$('#indus_item_l_33').hide();
    			    			$('#indus_item_l_35').hide();
    			    			$('#indus_item_l_29').hide();
    			    			$('#indus_item_l_40').hide();
    			    		}
    		
    		    		
    	}
    	      	function showids_121(op){
    		if(op=='show'){
    			    			$('#indus_item_l_36').show();
    			    			$('#indus_item_l_37').show();
    			    			$('#indus_item_l_38').show();
    			    			$('#indus_item_l_39').show();
    			    			$('#indus_item_l_122').show();
    			    			$('#indus_item_l_123').show();
    			    			$('#indus_item_l_324').show();
    			    			$('#indus_item_l_326').show();
    			    			$('#indus_item_l_327').show();
    			    			$('#indus_item_l_328').show();
    			    			$('#indus_item_l_325').show();
    			    		}
    		else{
    			    			$('#indus_item_l_36').hide();
    			    			$('#indus_item_l_37').hide();
    			    			$('#indus_item_l_38').hide();
    			    			$('#indus_item_l_39').hide();
    			    			$('#indus_item_l_122').hide();
    			    			$('#indus_item_l_123').hide();
    			    			$('#indus_item_l_324').hide();
    			    			$('#indus_item_l_326').hide();
    			    			$('#indus_item_l_327').hide();
    			    			$('#indus_item_l_328').hide();
    			    			$('#indus_item_l_325').hide();
    			    		}
    		
    		    		
    	}
    	      	function showids_3(op){
    		if(op=='show'){
    			    			$('#indus_item_l_41').show();
    			    			$('#indus_item_l_42').show();
    			    			$('#indus_item_l_43').show();
    			    			$('#indus_item_l_44').show();
    			    			$('#indus_item_l_45').show();
    			    			$('#indus_item_l_46').show();
    			    			$('#indus_item_l_47').show();
    			    			$('#indus_item_l_48').show();
    			    			$('#indus_item_l_49').show();
    			    			$('#indus_item_l_50').show();
    			    			$('#indus_item_l_51').show();
    			    			$('#indus_item_l_52').show();
    			    			$('#indus_item_l_57').show();
    			    		}
    		else{
    			    			$('#indus_item_l_41').hide();
    			    			$('#indus_item_l_42').hide();
    			    			$('#indus_item_l_43').hide();
    			    			$('#indus_item_l_44').hide();
    			    			$('#indus_item_l_45').hide();
    			    			$('#indus_item_l_46').hide();
    			    			$('#indus_item_l_47').hide();
    			    			$('#indus_item_l_48').hide();
    			    			$('#indus_item_l_49').hide();
    			    			$('#indus_item_l_50').hide();
    			    			$('#indus_item_l_51').hide();
    			    			$('#indus_item_l_52').hide();
    			    			$('#indus_item_l_57').hide();
    			    		}
    		
    		    		
    	}
    	      	function showids_211(op){
    		if(op=='show'){
    			    			$('#indus_item_l_217').show();
    			    			$('#indus_item_l_216').show();
    			    			$('#indus_item_l_215').show();
    			    			$('#indus_item_l_214').show();
    			    			$('#indus_item_l_213').show();
    			    			$('#indus_item_l_212').show();
    			    		}
    		else{
    			    			$('#indus_item_l_217').hide();
    			    			$('#indus_item_l_216').hide();
    			    			$('#indus_item_l_215').hide();
    			    			$('#indus_item_l_214').hide();
    			    			$('#indus_item_l_213').hide();
    			    			$('#indus_item_l_212').hide();
    			    		}
    		
    		    		
    	}
    	      	function showids_234(op){
    		if(op=='show'){
    			    			$('#indus_item_l_236').show();
    			    			$('#indus_item_l_235').show();
    			    			$('#indus_item_l_237').show();
    			    			$('#indus_item_l_238').show();
    			    			$('#indus_item_l_239').show();
    			    		}
    		else{
    			    			$('#indus_item_l_236').hide();
    			    			$('#indus_item_l_235').hide();
    			    			$('#indus_item_l_237').hide();
    			    			$('#indus_item_l_238').hide();
    			    			$('#indus_item_l_239').hide();
    			    		}
    		
    		    		
    	}
    	      	function showids_249(op){
    		if(op=='show'){
    			    			$('#indus_item_l_96').show();
    			    			$('#indus_item_l_250').show();
    			    			$('#indus_item_l_251').show();
    			    			$('#indus_item_l_252').show();
    			    			$('#indus_item_l_253').show();
    			    			$('#indus_item_l_254').show();
    			    			$('#indus_item_l_255').show();
    			    			$('#indus_item_l_256').show();
    			    			$('#indus_item_l_257').show();
    			    			$('#indus_item_l_258').show();
    			    			$('#indus_item_l_259').show();
    			    			$('#indus_item_l_332').show();
    			    		}
    		else{
    			    			$('#indus_item_l_96').hide();
    			    			$('#indus_item_l_250').hide();
    			    			$('#indus_item_l_251').hide();
    			    			$('#indus_item_l_252').hide();
    			    			$('#indus_item_l_253').hide();
    			    			$('#indus_item_l_254').hide();
    			    			$('#indus_item_l_255').hide();
    			    			$('#indus_item_l_256').hide();
    			    			$('#indus_item_l_257').hide();
    			    			$('#indus_item_l_258').hide();
    			    			$('#indus_item_l_259').hide();
    			    			$('#indus_item_l_332').hide();
    			    		}
    		
    		    		
    	}
    	      	function showids_125(op){
    		if(op=='show'){
    			    			$('#indus_item_l_125').show();
    			    		}
    		else{
    			    			$('#indus_item_l_125').hide();
    			    		}
    		
    		    		
    	}
    	      	function showids_126(op){
    		if(op=='show'){
    			    			$('#indus_item_l_126').show();
    			    		}
    		else{
    			    			$('#indus_item_l_126').hide();
    			    		}
    		
    		    		
    	}
    	      	function showids_128(op){
    		if(op=='show'){
    			    			$('#indus_item_l_128').show();
    			    		}
    		else{
    			    			$('#indus_item_l_128').hide();
    			    		}
    		
    		    		
    	}
    	      	function showids_129(op){
    		if(op=='show'){
    			    			$('#indus_item_l_129').show();
    			    		}
    		else{
    			    			$('#indus_item_l_129').hide();
    			    		}
    		
    		    		
    	}
    	      	function showids_334(op){
    		if(op=='show'){
    			    			$('#indus_item_l_150').show();
    			    		}
    		else{
    			    			$('#indus_item_l_150').hide();
    			    		}
    		
    		    		
    	}
    	      	function showids_335(op){
    		if(op=='show'){
    			    			$('#indus_item_l_151').show();
    			    			$('#indus_item_l_152').show();
    			    			$('#indus_item_l_153').show();
    			    			$('#indus_item_l_159').show();
    			    			$('#indus_item_l_336').show();
    			    			$('#indus_item_l_337').show();
    			    			$('#indus_item_l_340').show();
    			    			$('#indus_item_l_338').show();
    			    			$('#indus_item_l_341').show();
    			    			$('#indus_item_l_339').show();
    			    			$('#indus_item_l_342').show();
    			    			$('#indus_item_l_343').show();
    			    			$('#indus_item_l_344').show();
    			    			$('#indus_item_l_158').show();
    			    			$('#indus_item_l_149').show();
    			    		}
    		else{
    			    			$('#indus_item_l_151').hide();
    			    			$('#indus_item_l_152').hide();
    			    			$('#indus_item_l_153').hide();
    			    			$('#indus_item_l_159').hide();
    			    			$('#indus_item_l_336').hide();
    			    			$('#indus_item_l_337').hide();
    			    			$('#indus_item_l_340').hide();
    			    			$('#indus_item_l_338').hide();
    			    			$('#indus_item_l_341').hide();
    			    			$('#indus_item_l_339').hide();
    			    			$('#indus_item_l_342').hide();
    			    			$('#indus_item_l_343').hide();
    			    			$('#indus_item_l_344').hide();
    			    			$('#indus_item_l_158').hide();
    			    			$('#indus_item_l_149').hide();
    			    		}
    		
    		    		
    	}
    	      	function showids_160(op){
    		if(op=='show'){
    			    			$('#indus_item_l_161').show();
    			    			$('#indus_item_l_162').show();
    			    			$('#indus_item_l_163').show();
    			    			$('#indus_item_l_164').show();
    			    			$('#indus_item_l_165').show();
    			    			$('#indus_item_l_166').show();
    			    		}
    		else{
    			    			$('#indus_item_l_161').hide();
    			    			$('#indus_item_l_162').hide();
    			    			$('#indus_item_l_163').hide();
    			    			$('#indus_item_l_164').hide();
    			    			$('#indus_item_l_165').hide();
    			    			$('#indus_item_l_166').hide();
    			    		}
    		
    		    		
    	}
    	      	function showids_240(op){
    		if(op=='show'){
    			    			$('#indus_item_l_177').show();
    			    			$('#indus_item_l_178').show();
    			    			$('#indus_item_l_179').show();
    			    			$('#indus_item_l_180').show();
    			    			$('#indus_item_l_181').show();
    			    			$('#indus_item_l_241').show();
    			    			$('#indus_item_l_242').show();
    			    			$('#indus_item_l_243').show();
    			    			$('#indus_item_l_245').show();
    			    			$('#indus_item_l_246').show();
    			    			$('#indus_item_l_247').show();
    			    			$('#indus_item_l_248').show();
    			    			$('#indus_item_l_334').show();
    			    		}
    		else{
    			    			$('#indus_item_l_177').hide();
    			    			$('#indus_item_l_178').hide();
    			    			$('#indus_item_l_179').hide();
    			    			$('#indus_item_l_180').hide();
    			    			$('#indus_item_l_181').hide();
    			    			$('#indus_item_l_241').hide();
    			    			$('#indus_item_l_242').hide();
    			    			$('#indus_item_l_243').hide();
    			    			$('#indus_item_l_245').hide();
    			    			$('#indus_item_l_246').hide();
    			    			$('#indus_item_l_247').hide();
    			    			$('#indus_item_l_248').hide();
    			    			$('#indus_item_l_334').hide();
    			    		}
    		
    		    		
    	}
    	      	function showids_144(op){
    		if(op=='show'){
    			    			$('#indus_item_l_405').show();
    			    		}
    		else{
    			    			$('#indus_item_l_405').hide();
    			    		}
    		
    		    		
    	}
    	      	function showids_192(op){
    		if(op=='show'){
    			    			$('#indus_item_l_193').show();
    			    			$('#indus_item_l_194').show();
    			    			$('#indus_item_l_195').show();
    			    			$('#indus_item_l_196').show();
    			    			$('#indus_item_l_197').show();
    			    			$('#indus_item_l_198').show();
    			    			$('#indus_item_l_199').show();
    			    			$('#indus_item_l_200').show();
    			    		}
    		else{
    			    			$('#indus_item_l_193').hide();
    			    			$('#indus_item_l_194').hide();
    			    			$('#indus_item_l_195').hide();
    			    			$('#indus_item_l_196').hide();
    			    			$('#indus_item_l_197').hide();
    			    			$('#indus_item_l_198').hide();
    			    			$('#indus_item_l_199').hide();
    			    			$('#indus_item_l_200').hide();
    			    		}
    		
    		    		
    	}
    	      	function showids_243(op){
    		if(op=='show'){
    			    			$('#indus_item_l_244').show();
    			    		}
    		else{
    			    			$('#indus_item_l_244').hide();
    			    		}
    		
    		    		
    	}
    	      	function showids_290(op){
    		if(op=='show'){
    			    			$('#indus_item_l_290').show();
    			    		}
    		else{
    			    			$('#indus_item_l_290').hide();
    			    		}
    		
    		    		
    	}
    	      	function showids_377(op){
    		if(op=='show'){
    			    			$('#indus_item_l_378').show();
    			    			$('#indus_item_l_379').show();
    			    		}
    		else{
    			    			$('#indus_item_l_378').hide();
    			    			$('#indus_item_l_379').hide();
    			    		}
    		
    		    		
    	}
    	      	function showids_409(op){
    		if(op=='show'){
    			    			$('#indus_item_l_411').show();
    			    		}
    		else{
    			    			$('#indus_item_l_411').hide();
    			    		}
    		
    		    		
    	}
    	      	function showids_426(op){
    		if(op=='show'){
    			    			$('#indus_item_l_425').show();
    			    			$('#indus_item_l_427').show();
    			    		}
    		else{
    			    			$('#indus_item_l_425').hide();
    			    			$('#indus_item_l_427').hide();
    			    		}
    		
    		    		
    	}
    	      	function showids_357(op){
    		if(op=='show'){
    			    			$('#indus_item_l_439').show();
    			    			$('#indus_item_l_358').show();
    			    			$('#indus_item_l_359').show();
    			    			$('#indus_item_l_360').show();
    			    			$('#indus_item_l_361').show();
    			    			$('#indus_item_l_362').show();
    			    			$('#indus_item_l_363').show();
    			    			$('#indus_item_l_364').show();
    			    			$('#indus_item_l_365').show();
    			    			$('#indus_item_l_366').show();
    			    			$('#indus_item_l_367').show();
    			    			$('#indus_item_l_368').show();
    			    		}
    		else{
    			    			$('#indus_item_l_439').hide();
    			    			$('#indus_item_l_358').hide();
    			    			$('#indus_item_l_359').hide();
    			    			$('#indus_item_l_360').hide();
    			    			$('#indus_item_l_361').hide();
    			    			$('#indus_item_l_362').hide();
    			    			$('#indus_item_l_363').hide();
    			    			$('#indus_item_l_364').hide();
    			    			$('#indus_item_l_365').hide();
    			    			$('#indus_item_l_366').hide();
    			    			$('#indus_item_l_367').hide();
    			    			$('#indus_item_l_368').hide();
    			    		}
    		
    		    		
    	}
    	      	function showids_218(op){
    		if(op=='show'){
    			    			$('#indus_item_l_222').show();
    			    			$('#indus_item_l_225').show();
    			    			$('#indus_item_l_223').show();
    			    			$('#indus_item_l_219').show();
    			    			$('#indus_item_l_227').show();
    			    			$('#indus_item_l_228').show();
    			    			$('#indus_item_l_230').show();
    			    			$('#indus_item_l_231').show();
    			    			$('#indus_item_l_229').show();
    			    			$('#indus_item_l_232').show();
    			    			$('#indus_item_l_233').show();
    			    			$('#indus_item_l_226').show();
    			    		}
    		else{
    			    			$('#indus_item_l_222').hide();
    			    			$('#indus_item_l_225').hide();
    			    			$('#indus_item_l_223').hide();
    			    			$('#indus_item_l_219').hide();
    			    			$('#indus_item_l_227').hide();
    			    			$('#indus_item_l_228').hide();
    			    			$('#indus_item_l_230').hide();
    			    			$('#indus_item_l_231').hide();
    			    			$('#indus_item_l_229').hide();
    			    			$('#indus_item_l_232').hide();
    			    			$('#indus_item_l_233').hide();
    			    			$('#indus_item_l_226').hide();
    			    		}
    		
    		    		
    	}
    	      	function showids_201(op){
    		if(op=='show'){
    			    			$('#indus_item_l_203').show();
    			    			$('#indus_item_l_202').show();
    			    			$('#indus_item_l_204').show();
    			    			$('#indus_item_l_205').show();
    			    			$('#indus_item_l_209').show();
    			    			$('#indus_item_l_210').show();
    			    			$('#indus_item_l_208').show();
    			    			$('#indus_item_l_207').show();
    			    			$('#indus_item_l_206').show();
    			    			$('#indus_item_l_331').show();
    			    		}
    		else{
    			    			$('#indus_item_l_203').hide();
    			    			$('#indus_item_l_202').hide();
    			    			$('#indus_item_l_204').hide();
    			    			$('#indus_item_l_205').hide();
    			    			$('#indus_item_l_209').hide();
    			    			$('#indus_item_l_210').hide();
    			    			$('#indus_item_l_208').hide();
    			    			$('#indus_item_l_207').hide();
    			    			$('#indus_item_l_206').hide();
    			    			$('#indus_item_l_331').hide();
    			    		}
    		
    		    		
    	}
    	      	function showids_350(op){
    		if(op=='show'){
    			    			$('#indus_item_l_351').show();
    			    			$('#indus_item_l_352').show();
    			    			$('#indus_item_l_353').show();
    			    			$('#indus_item_l_354').show();
    			    			$('#indus_item_l_355').show();
    			    			$('#indus_item_l_356').show();
    			    		}
    		else{
    			    			$('#indus_item_l_351').hide();
    			    			$('#indus_item_l_352').hide();
    			    			$('#indus_item_l_353').hide();
    			    			$('#indus_item_l_354').hide();
    			    			$('#indus_item_l_355').hide();
    			    			$('#indus_item_l_356').hide();
    			    		}
    		
    		    		
    	}
    	      	function showids_0(op){
    		if(op=='show'){
    			    			$('#indus_item_l_441').show();
    			    			$('#indus_item_l_2').show();
    			    			$('#indus_item_l_201').show();
    			    			$('#indus_item_l_249').show();
    			    			$('#indus_item_l_3').show();
    			    			$('#indus_item_l_335').show();
    			    			$('#indus_item_l_211').show();
    			    			$('#indus_item_l_350').show();
    			    			$('#indus_item_l_234').show();
    			    			$('#indus_item_l_160').show();
    			    			$('#indus_item_l_357').show();
    			    			$('#indus_item_l_192').show();
    			    			$('#indus_item_l_218').show();
    			    			$('#indus_item_l_240').show();
    			    			$('#indus_item_l_121').show();
    			    		}
    		else{
    			    			$('#indus_item_l_441').hide();
    			    			$('#indus_item_l_2').hide();
    			    			$('#indus_item_l_201').hide();
    			    			$('#indus_item_l_249').hide();
    			    			$('#indus_item_l_3').hide();
    			    			$('#indus_item_l_335').hide();
    			    			$('#indus_item_l_211').hide();
    			    			$('#indus_item_l_350').hide();
    			    			$('#indus_item_l_234').hide();
    			    			$('#indus_item_l_160').hide();
    			    			$('#indus_item_l_357').hide();
    			    			$('#indus_item_l_192').hide();
    			    			$('#indus_item_l_218').hide();
    			    			$('#indus_item_l_240').hide();
    			    			$('#indus_item_l_121').hide();
    			    		}
    		
    		    		
    	}
    	      	function showids_127(op){
    		if(op=='show'){
    			    			$('#indus_item_l_127').show();
    			    		}
    		else{
    			    			$('#indus_item_l_127').hide();
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
