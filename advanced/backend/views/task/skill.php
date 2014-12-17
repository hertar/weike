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
    	<h1>技能管理</h1>
        <div class="tool">
        <a href="index.php?r=task/skill" class="here">技能列表</a>
        <a href="index.php?r=task/skill_edit">技能添加</a>

    	</div>
</div>

<div class="box search p_relative">
    	<div class="title"><h2>搜索</h2></div>
        <div class="detail" id="detail">
           
    <form action="" method="get">
            	<input type="hidden" name="do" value="task">
<input type="hidden" name="view" value="skill">
<input type="hidden" name="type" value="">
<input type="hidden" name="page" value="1">
                <table cellspacing="0" cellpadding="0">
<tbody>
                        <tr>
                            <th>所属行业</th>
                            <td>
                            	<select class="ps vm" name="w[indus_id]" id="catid">
                            	<option value=441>品牌设计</option><option value=8>&nbsp;&nbsp;&nbsp; |-标志设计</option><option value=9>&nbsp;&nbsp;&nbsp; |-VI设计</option><option value=10>&nbsp;&nbsp;&nbsp; |-名片设计</option><option value=11>&nbsp;&nbsp;&nbsp; |-海报设计</option><option value=12>&nbsp;&nbsp;&nbsp; |-宣传册页</option><option value=13>&nbsp;&nbsp;&nbsp; |-卡通设计</option><option value=14>&nbsp;&nbsp;&nbsp; |-招牌设计</option><option value=16>&nbsp;&nbsp;&nbsp; |-横幅设计</option><option value=27>&nbsp;&nbsp;&nbsp; |-网站美工</option><option value=144>&nbsp;&nbsp;&nbsp; |-工业设计</option><option value=405>&nbsp;&nbsp;&nbsp;&nbsp; |--newNode2</option><option value=145>&nbsp;&nbsp;&nbsp; |-按钮图标</option><option value=348>&nbsp;&nbsp;&nbsp; |-logo设计</option><option value=349>&nbsp;&nbsp;&nbsp; |-vi设计</option><option value=370>&nbsp;&nbsp;&nbsp; |-游戏封面</option><option value=376>&nbsp;&nbsp;&nbsp; |-lee牛仔裤</option><option value=130>&nbsp;&nbsp;&nbsp; |-字体设计</option><option value=131>&nbsp;&nbsp;&nbsp; |-贺卡设计</option><option value=132>&nbsp;&nbsp;&nbsp; |-礼品设计</option><option value=134>&nbsp;&nbsp;&nbsp; |-四格漫画</option><option value=135>&nbsp;&nbsp;&nbsp; |-动漫设计</option><option value=136>&nbsp;&nbsp;&nbsp; |-排版设计</option><option value=137>&nbsp;&nbsp;&nbsp; |-服饰设计</option><option value=140>&nbsp;&nbsp;&nbsp; |-台历设计</option><option value=133>&nbsp;&nbsp;&nbsp; |-QQ表情</option><option value=263>&nbsp;&nbsp;&nbsp; |-其他</option><option value=138>&nbsp;&nbsp;&nbsp; |-ppt设计</option><option value=2>网站开发</option><option value=28>&nbsp;&nbsp;&nbsp; |-网站模板</option><option value=30>&nbsp;&nbsp;&nbsp; |-网站广告</option><option value=31>&nbsp;&nbsp;&nbsp; |-网页动画</option><option value=32>&nbsp;&nbsp;&nbsp; |-商城开发</option><option value=34>&nbsp;&nbsp;&nbsp; |-接口操作</option><option value=408>&nbsp;&nbsp;&nbsp; |-网站推广</option><option value=169>&nbsp;&nbsp;&nbsp; |-FLASH</option><option value=148>&nbsp;&nbsp;&nbsp; |-店招设计</option><option value=154>&nbsp;&nbsp;&nbsp; |-网店取名</option><option value=155>&nbsp;&nbsp;&nbsp; |-网店模板</option><option value=156>&nbsp;&nbsp;&nbsp; |-数码摄影</option><option value=147>&nbsp;&nbsp;&nbsp; |-店标设计</option><option value=170>&nbsp;&nbsp;&nbsp; |-视频制作</option><option value=172>&nbsp;&nbsp;&nbsp; |-三维渲染</option><option value=33>&nbsp;&nbsp;&nbsp; |-数据库操作</option><option value=35>&nbsp;&nbsp;&nbsp; |-服务器系统</option><option value=29>&nbsp;&nbsp;&nbsp; |-开源修改</option><option value=40>&nbsp;&nbsp;&nbsp; |-其它</option><option value=201>创意祝福</option><option value=203>&nbsp;&nbsp;&nbsp; |-爱情表白</option><option value=202>&nbsp;&nbsp;&nbsp; |-生日祝福</option><option value=204>&nbsp;&nbsp;&nbsp; |-圣诞祝福</option><option value=205>&nbsp;&nbsp;&nbsp; |-新年祝福</option><option value=209>&nbsp;&nbsp;&nbsp; |-祝福喜得贵子</option><option value=210>&nbsp;&nbsp;&nbsp; |-祝福乔迁新居</option><option value=208>&nbsp;&nbsp;&nbsp; |-感恩回馈</option><option value=207>&nbsp;&nbsp;&nbsp; |-纪念日祝福</option><option value=206>&nbsp;&nbsp;&nbsp; |-道歉短信</option><option value=331>&nbsp;&nbsp;&nbsp; |-彩信</option><option value=249>网游服务</option><option value=96>&nbsp;&nbsp;&nbsp; |-网游创意</option><option value=250>&nbsp;&nbsp;&nbsp; |-手机游戏</option><option value=251>&nbsp;&nbsp;&nbsp; |-游戏试玩</option><option value=252>&nbsp;&nbsp;&nbsp; |-评测报告</option><option value=253>&nbsp;&nbsp;&nbsp; |-版本设计</option><option value=254>&nbsp;&nbsp;&nbsp; |-剧情策划</option><option value=255>&nbsp;&nbsp;&nbsp; |-压力测试</option><option value=256>&nbsp;&nbsp;&nbsp; |-代写攻略</option><option value=257>&nbsp;&nbsp;&nbsp; |-活动策划</option><option value=258>&nbsp;&nbsp;&nbsp; |-补丁制作</option><option value=259>&nbsp;&nbsp;&nbsp; |-游戏视频</option><option value=332>&nbsp;&nbsp;&nbsp; |-问卷调查</option><option value=3>文案写作</option><option value=41>&nbsp;&nbsp;&nbsp; |-宣传软文</option><option value=42>&nbsp;&nbsp;&nbsp; |-广告语写作</option><option value=43>&nbsp;&nbsp;&nbsp; |-策划</option><option value=44>&nbsp;&nbsp;&nbsp; |-写文章</option><option value=45>&nbsp;&nbsp;&nbsp; |-编辑校对</option><option value=46>&nbsp;&nbsp;&nbsp; |-写新闻</option><option value=47>&nbsp;&nbsp;&nbsp; |-产品说明</option><option value=48>&nbsp;&nbsp;&nbsp; |-剧本脚本</option><option value=49>&nbsp;&nbsp;&nbsp; |-写书</option><option value=50>&nbsp;&nbsp;&nbsp; |-撰写报告</option><option value=51>&nbsp;&nbsp;&nbsp; |-应用文写作</option><option value=52>&nbsp;&nbsp;&nbsp; |-演讲稿</option><option value=57>&nbsp;&nbsp;&nbsp; |-其它</option><option value=335>建筑/装修</option><option value=151>&nbsp;&nbsp;&nbsp; |-展会设计</option><option value=152>&nbsp;&nbsp;&nbsp; |-办公装修</option><option value=153>&nbsp;&nbsp;&nbsp; |-园林景观</option><option value=159>&nbsp;&nbsp;&nbsp; |-店面装修</option><option value=336>&nbsp;&nbsp;&nbsp; |-新房装修</option><option value=337>&nbsp;&nbsp;&nbsp; |-二手房装修</option><option value=340>&nbsp;&nbsp;&nbsp; |-庭院景观设计</option><option value=338>&nbsp;&nbsp;&nbsp; |-风水咨询</option><option value=341>&nbsp;&nbsp;&nbsp; |-办公商铺装修</option><option value=339>&nbsp;&nbsp;&nbsp; |-装修监理</option><option value=342>&nbsp;&nbsp;&nbsp; |-自建房设计</option><option value=343>&nbsp;&nbsp;&nbsp; |-景观设计</option><option value=344>&nbsp;&nbsp;&nbsp; |-3D模型设计</option><option value=158>&nbsp;&nbsp;&nbsp; |-形象墙设计</option><option value=149>&nbsp;&nbsp;&nbsp; |-房屋建筑设计</option><option value=211>头脑风暴</option><option value=217>&nbsp;&nbsp;&nbsp; |-问卷调查</option><option value=216>&nbsp;&nbsp;&nbsp; |-意见建议</option><option value=215>&nbsp;&nbsp;&nbsp; |-写评论</option><option value=214>&nbsp;&nbsp;&nbsp; |-征集创意</option><option value=213>&nbsp;&nbsp;&nbsp; |-收集金点子</option><option value=212>&nbsp;&nbsp;&nbsp; |-策划</option><option value=350>照片美化/编辑</option><option value=351>&nbsp;&nbsp;&nbsp; |-艺术照处理</option><option value=352>&nbsp;&nbsp;&nbsp; |-照片变卡通</option><option value=353>&nbsp;&nbsp;&nbsp; |-电子相册</option><option value=354>&nbsp;&nbsp;&nbsp; |-照片美化</option><option value=355>&nbsp;&nbsp;&nbsp; |-婚纱照美化</option><option value=356>&nbsp;&nbsp;&nbsp; |-图片编辑</option><option value=234>法律服务</option><option value=236>&nbsp;&nbsp;&nbsp; |-法律咨询</option><option value=235>&nbsp;&nbsp;&nbsp; |-聘请律师</option><option value=237>&nbsp;&nbsp;&nbsp; |-写法律合同</option><option value=238>&nbsp;&nbsp;&nbsp; |-写律师函</option><option value=239>&nbsp;&nbsp;&nbsp; |-写诉讼状</option><option value=160>起名取名</option><option value=161>&nbsp;&nbsp;&nbsp; |-宝宝起名</option><option value=162>&nbsp;&nbsp;&nbsp; |-成人起名</option><option value=163>&nbsp;&nbsp;&nbsp; |-公司起名</option><option value=164>&nbsp;&nbsp;&nbsp; |-店铺起名</option><option value=165>&nbsp;&nbsp;&nbsp; |-品牌起名</option><option value=166>&nbsp;&nbsp;&nbsp; |-改名</option><option value=357>影视/配音/歌词</option><option value=439>&nbsp;&nbsp;&nbsp; |-1111</option><option value=358>&nbsp;&nbsp;&nbsp; |-写剧本</option><option value=359>&nbsp;&nbsp;&nbsp; |-影视制作</option><option value=360>&nbsp;&nbsp;&nbsp; |-广告配音</option><option value=361>&nbsp;&nbsp;&nbsp; |-影视配音</option><option value=362>&nbsp;&nbsp;&nbsp; |-动画配音</option><option value=363>&nbsp;&nbsp;&nbsp; |-彩铃配音</option><option value=364>&nbsp;&nbsp;&nbsp; |-方言配音</option><option value=365>&nbsp;&nbsp;&nbsp; |-外语配音</option><option value=366>&nbsp;&nbsp;&nbsp; |-创意配音</option><option value=367>&nbsp;&nbsp;&nbsp; |-歌词创作</option><option value=368>&nbsp;&nbsp;&nbsp; |-歌词谱曲</option><option value=192>生活服务</option><option value=193>&nbsp;&nbsp;&nbsp; |-市场调查</option><option value=194>&nbsp;&nbsp;&nbsp; |-心理咨询</option><option value=195>&nbsp;&nbsp;&nbsp; |-移民咨询</option><option value=196>&nbsp;&nbsp;&nbsp; |-理财咨询</option><option value=197>&nbsp;&nbsp;&nbsp; |-帮我投票</option><option value=198>&nbsp;&nbsp;&nbsp; |-跑腿排队</option><option value=199>&nbsp;&nbsp;&nbsp; |-家政服务</option><option value=200>&nbsp;&nbsp;&nbsp; |-数据导入</option><option value=218>移动应用</option><option value=222>&nbsp;&nbsp;&nbsp; |-Android插件</option><option value=225>&nbsp;&nbsp;&nbsp; |-Symbian SDK插件</option><option value=223>&nbsp;&nbsp;&nbsp; |-iOS插件</option><option value=219>&nbsp;&nbsp;&nbsp; |-天翼插件</option><option value=227>&nbsp;&nbsp;&nbsp; |-Windows mobile插件</option><option value=228>&nbsp;&nbsp;&nbsp; |-黑莓插件</option><option value=230>&nbsp;&nbsp;&nbsp; |-Amazon kindle插件</option><option value=231>&nbsp;&nbsp;&nbsp; |-手机游戏开发</option><option value=229>&nbsp;&nbsp;&nbsp; |-Palm插件</option><option value=232>&nbsp;&nbsp;&nbsp; |-手机应用创意</option><option value=233>&nbsp;&nbsp;&nbsp; |-手机应用汉化</option><option value=226>&nbsp;&nbsp;&nbsp; |-PalmOS插件</option><option value=240>招聘找人</option><option value=177>&nbsp;&nbsp;&nbsp; |-搜索引擎优化</option><option value=178>&nbsp;&nbsp;&nbsp; |-论坛推广</option><option value=179>&nbsp;&nbsp;&nbsp; |-QQ群推广</option><option value=180>&nbsp;&nbsp;&nbsp; |-博客推广</option><option value=181>&nbsp;&nbsp;&nbsp; |-推广注册</option><option value=241>&nbsp;&nbsp;&nbsp; |-招聘</option><option value=242>&nbsp;&nbsp;&nbsp; |-求职</option><option value=243>&nbsp;&nbsp;&nbsp; |-寻人</option><option value=244>&nbsp;&nbsp;&nbsp;&nbsp; |--找对象</option><option value=245>&nbsp;&nbsp;&nbsp; |-找生产商</option><option value=246>&nbsp;&nbsp;&nbsp; |-找客户</option><option value=247>&nbsp;&nbsp;&nbsp; |-找供应商</option><option value=248>&nbsp;&nbsp;&nbsp; |-找人脉</option><option value=334>&nbsp;&nbsp;&nbsp; |-简历设计</option><option value=150>&nbsp;&nbsp;&nbsp;&nbsp; |--家装设计</option><option value=121>软件开发</option><option value=36>&nbsp;&nbsp;&nbsp; |-程序开发</option><option value=37>&nbsp;&nbsp;&nbsp; |-编写脚本</option><option value=38>&nbsp;&nbsp;&nbsp; |-软件皮肤</option><option value=39>&nbsp;&nbsp;&nbsp; |-插件开发</option><option value=122>&nbsp;&nbsp;&nbsp; |-软件测试</option><option value=123>&nbsp;&nbsp;&nbsp; |-游戏开发</option><option value=324>&nbsp;&nbsp;&nbsp; |-软件汉化</option><option value=326>&nbsp;&nbsp;&nbsp; |-软件美工</option><option value=327>&nbsp;&nbsp;&nbsp; |-开发文档编写</option><option value=328>&nbsp;&nbsp;&nbsp; |-功能完善</option><option value=325>&nbsp;&nbsp;&nbsp; |-程序功能开发</option>                            </td>
                            <th>技能名称*</th>
                            <td><input type="text" value="" name="w[skill_name]" class="txt"/>*支持模糊查询</td>
                             <th></th><td></td>
</tr>
                        <tr>
                            
<th>结果排序</th>
<td>

<select name="ord[]">
                                <option value="skill_id"  selected="selected">默认排序</option>
                                <option value="on_time" >添加时间</option>
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
                              	<button class="pill" type="submit" value=搜索 name="sbt_search">
                            		<span class="icon magnifier">&nbsp;</span>搜索</button></td>
                        </tr>
                    </tbody>
                </table>
            </form>

        </div>
    </div>
    <!--搜索结束-->

<div class="box list">
    	<div class="title"><h2>技能列表</h2></div>
        <div class="detail">
        	<form method="post" id="skill_op" action="">
              <table cellspacing="0" cellpadding="0">
                <tbody>
                  <tr>
                    <th width="15"><input type="checkbox" onclick="checkall();" id="checkbox" name="checkbox"/>全选</th>

                    <th width="20%">所属行业</th>
                    <th width="25%">技能名称</th>
                    <th width="10%">排序</th>
                    <th width="15%">添加时间</th>
                    <th width="20%">操作</th>
                  </tr>
  	
                  <tr class="item">
                    <td class="td25"><input type="checkbox" class="checkbox" name="ckb[]" value="113"></td>
                  
                    <td class="td28"></td>
<td>秋冬季</td>
                    <td>0</td>
                    <td>2013-03-27 13:20:24</td>
                    <td>
<a href="index.php?do=task&view=skill_edit&skill_id=113&page=1" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=skill&w[indus_pid]=&w[skill_name]=
		&page_size=&page=
		&=&skill_id=113&ac=del&page=1"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
                  <tr>
                  		
                  <tr class="item">
                    <td class="td25"><input type="checkbox" class="checkbox" name="ckb[]" value="112"></td>
                  
                    <td class="td28"></td>
<td>0保持稳定</td>
                    <td>0</td>
                    <td>2013-03-27 13:20:10</td>
                    <td>
<a href="index.php?do=task&view=skill_edit&skill_id=112&page=1" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=skill&w[indus_pid]=&w[skill_name]=
		&page_size=&page=
		&=&skill_id=112&ac=del&page=1"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
                  <tr>
                  		
                  <tr class="item">
                    <td class="td25"><input type="checkbox" class="checkbox" name="ckb[]" value="91"></td>
                  
                    <td class="td28">数码摄影</td>
<td>摄影技术</td>
                    <td>0</td>
                    <td>2012-02-17 11:32:18</td>
                    <td>
<a href="index.php?do=task&view=skill_edit&skill_id=91&page=1" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=skill&w[indus_pid]=&w[skill_name]=
		&page_size=&page=
		&=&skill_id=91&ac=del&page=1"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
                  <tr>
                  		
                  <tr class="item">
                    <td class="td25"><input type="checkbox" class="checkbox" name="ckb[]" value="42"></td>
                  
                    <td class="td28">网站美工</td>
<td>Photoshop</td>
                    <td>1</td>
                    <td>2011-12-16 09:36:02</td>
                    <td>
<a href="index.php?do=task&view=skill_edit&skill_id=42&page=1" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=skill&w[indus_pid]=&w[skill_name]=
		&page_size=&page=
		&=&skill_id=42&ac=del&page=1"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
                  <tr>
                  		
                  <tr class="item">
                    <td class="td25"><input type="checkbox" class="checkbox" name="ckb[]" value="90"></td>
                  
                    <td class="td28">网店取名</td>
<td>网店取名</td>
                    <td>0</td>
                    <td>2011-11-25 10:43:49</td>
                    <td>
<a href="index.php?do=task&view=skill_edit&skill_id=90&page=1" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=skill&w[indus_pid]=&w[skill_name]=
		&page_size=&page=
		&=&skill_id=90&ac=del&page=1"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
                  <tr>
                  		
                  <tr class="item">
                    <td class="td25"><input type="checkbox" class="checkbox" name="ckb[]" value="89"></td>
                  
                    <td class="td28">店招设计</td>
<td>排版布局</td>
                    <td>0</td>
                    <td>2011-11-25 10:43:31</td>
                    <td>
<a href="index.php?do=task&view=skill_edit&skill_id=89&page=1" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=skill&w[indus_pid]=&w[skill_name]=
		&page_size=&page=
		&=&skill_id=89&ac=del&page=1"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
                  <tr>
                  		
                  <tr class="item">
                    <td class="td25"><input type="checkbox" class="checkbox" name="ckb[]" value="88"></td>
                  
                    <td class="td28">ppt设计</td>
<td>ppt设计</td>
                    <td>0</td>
                    <td>2011-11-25 10:42:59</td>
                    <td>
<a href="index.php?do=task&view=skill_edit&skill_id=88&page=1" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=skill&w[indus_pid]=&w[skill_name]=
		&page_size=&page=
		&=&skill_id=88&ac=del&page=1"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
                  <tr>
                  		
                  <tr class="item">
                    <td class="td25"><input type="checkbox" class="checkbox" name="ckb[]" value="87"></td>
                  
                    <td class="td28">QQ表情</td>
<td>表情设计</td>
                    <td>0</td>
                    <td>2011-11-25 10:42:31</td>
                    <td>
<a href="index.php?do=task&view=skill_edit&skill_id=87&page=1" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=skill&w[indus_pid]=&w[skill_name]=
		&page_size=&page=
		&=&skill_id=87&ac=del&page=1"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
                  <tr>
                  		
                  <tr class="item">
                    <td class="td25"><input type="checkbox" class="checkbox" name="ckb[]" value="86"></td>
                  
                    <td class="td28">礼品设计</td>
<td>礼品设计</td>
                    <td>0</td>
                    <td>2011-11-25 10:42:08</td>
                    <td>
<a href="index.php?do=task&view=skill_edit&skill_id=86&page=1" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=skill&w[indus_pid]=&w[skill_name]=
		&page_size=&page=
		&=&skill_id=86&ac=del&page=1"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
                  <tr>
                  		
                  <tr class="item">
                    <td class="td25"><input type="checkbox" class="checkbox" name="ckb[]" value="85"></td>
                  
                    <td class="td28">贺卡设计</td>
<td>贺卡设计</td>
                    <td>0</td>
                    <td>2011-11-25 10:41:52</td>
                    <td>
<a href="index.php?do=task&view=skill_edit&skill_id=85&page=1" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?do=task&view=skill&w[indus_pid]=&w[skill_name]=
		&page_size=&page=
		&=&skill_id=85&ac=del&page=1"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
                  <tr>
                  	                    <td colspan="7">
                    
                    
                    <div class="clearfix">
                  		
                        <label for="checkbox">全选</label>
                        <input type="hidden" name="sbt_action" class="sbt_action"/>
                        <button name="sbt_action" type="submit" value=批量删除 onclick="return batch_act(this,'skill_op');" class="pill negative" ><span class="icon trash"></span>批量删除</button>
                    	
                    </div>
                    </td>
                  </tr>
                </tbody>
              </table>
  <div class="page"><a class="selected">1</a><a href="index.php?do=task&view=skill&w[indus_pid]=&w[skill_name]=
		&page_size=&page=
		&=&page=2">2</a> <a href="index.php?do=task&view=skill&w[indus_pid]=&w[skill_name]=
		&page_size=&page=
		&=&page=3">3</a> <a href="index.php?do=task&view=skill&w[indus_pid]=&w[skill_name]=
		&page_size=&page=
		&=&page=4">4</a> <a href="index.php?do=task&view=skill&w[indus_pid]=&w[skill_name]=
		&page_size=&page=
		&=&page=5">5</a> <a href="index.php?do=task&view=skill&w[indus_pid]=&w[skill_name]=
		&page_size=&page=
		&=&page=2">下一页>></a><span class="fl_l"> 1 / 5页</span> </div>
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
