<?php
use yii\widgets\LinkPager;
//print_r($list);
?>
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
    	<h1>普通招标管理</h1>
</div>
<!--页头结束-->    
<div class="box post">
    <div class="tabcon">
            <div class="detail">
                <form method="post" action="index.php?do=model&model_id=1&view=edit&task_id=70" id="frm_art_edit" name="frm_art_edit" enctype="multipart/form-data">
                <input type="hidden" name="task_id" value="70">
                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    	<tr>
                      		<th colspan="2">
                      			该任务于<span style="color:red"><?php echo date("Y-m-d H:i:s",$list['start_time']) ?></span>发布，目前状态为：<span style="color:red"><?php if($list['task_status']==2){ ?>
                       失败
                    <?php }else { ?>
                       结束
                   <?php }?></span>
                      		</th>
                      	</tr>
<tr>
                      		<th >
                      			任务可进行如下操作:
                      		</th>
<td>
<button type="submit" name="sbt_act" class="positive primary button"  value="del" onclick="return confirm('确定删除?')"><span class="lock icon"></span>删除</button>
</td>
                      	</tr>
<tr>
<th colspan="2">
    <a href="index.php?do=model&model_id=1&view=edit&task_id=70&op=basic" class="button here">任务需求</a>
       		                       <a href="index.php?do=model&model_id=1&view=edit&task_id=70&op=work" class="button ">任务稿件</a>
       		                       <a href="index.php?do=model&model_id=1&view=edit&task_id=70&op=comm" class="button ">任务留言</a>
       		                       <a href="index.php?do=model&model_id=1&view=edit&task_id=70&op=agree" class="button ">任务交付</a>
       		                   </th>
</tr>
                      <tr>
                        <th scope="row" width="130">任务标题：</th>
                        <td>
                         <input type="text" class="txt" name="task_title" value="<?php echo $list['task_title']?>" size="80" id="task_title" msgArea="span_task_title"
 limit="required:true;len:5-50" msg="标题不得为空,5-50字" title="标题不得为空,5-50字"><span id="span_task_title"></span>
&nbsp;&nbsp;&nbsp;
</td>
                      </tr>
                      <tr>
                        <th scope="row">
                        	发布者
</th>
                        <td>
                        	<b><?php echo $list['username']?></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<b>手机号码：<?php echo $list['contact']?></b>
</td>
  </tr>
  <tr>
                        <th scope="row">
                        	开始时间
：</th>
                        <td><?php echo date("Y-m-d H:i:s",$list['start_time']) ?>&nbsp;&nbsp;</td>
  </tr>
   <tr>
                        <th scope="row">投稿截止时间：</th>
                        <td>
 <input name="txt_task_day"   onclick="showcalendar(event, this, 0)" size="30" value="<?php echo date("Y-m-d H:i:s",$list['end_time']) ?>" type="text" id="txt_task_day"   msgArea="span_task_day" onkeyup="clearstr(this)"
   	limit="required:true;type:date" msg="" max=""/> 
            	
 <span id="span_task_day" class="ml_5"></span>
</td>
   </tr>
 <!--          <tr>
                        <th scope="row">选稿结束时间：</th>
                        <td>
2013-04-12 18:25:22<!--	</td>
  </tr>
  -->
                      <tr>
                        <th scope="row">任务状态：</th>
                        <?php if($list['task_status']==2){ ?>
                      <td> 失败</td>
                    <?php }else { ?>
                       <td>结束</td>
                   <?php }?>
                      </tr>
                      <tr>
                        <th scope="row">行业：</th>
                        <td> <select name="slt_indus_id">
        	<option value="0">置顶</option>
 <option value=441>品牌设计</option> <option value=8>&nbsp;&nbsp;&nbsp; |-标志设计</option> <option value=9>&nbsp;&nbsp;&nbsp; |-VI设计</option> <option value=10>&nbsp;&nbsp;&nbsp; |-名片设计</option> <option value=11>&nbsp;&nbsp;&nbsp; |-海报设计</option> <option value=12>&nbsp;&nbsp;&nbsp; |-宣传册页</option> <option value=13>&nbsp;&nbsp;&nbsp; |-卡通设计</option> <option value=14>&nbsp;&nbsp;&nbsp; |-招牌设计</option> <option value=16>&nbsp;&nbsp;&nbsp; |-横幅设计</option> <option value=27>&nbsp;&nbsp;&nbsp; |-网站美工</option> <option value=144>&nbsp;&nbsp;&nbsp; |-工业设计</option> <option value=405>&nbsp;&nbsp;&nbsp;&nbsp; |--newNode2</option> <option value=145>&nbsp;&nbsp;&nbsp; |-按钮图标</option> <option value=348>&nbsp;&nbsp;&nbsp; |-logo设计</option> <option value=349>&nbsp;&nbsp;&nbsp; |-vi设计</option> <option value=370>&nbsp;&nbsp;&nbsp; |-游戏封面</option> <option value=376>&nbsp;&nbsp;&nbsp; |-lee牛仔裤</option> <option value=130>&nbsp;&nbsp;&nbsp; |-字体设计</option> <option value=131>&nbsp;&nbsp;&nbsp; |-贺卡设计</option> <option value=132>&nbsp;&nbsp;&nbsp; |-礼品设计</option> <option value=134>&nbsp;&nbsp;&nbsp; |-四格漫画</option> <option value=135>&nbsp;&nbsp;&nbsp; |-动漫设计</option> <option value=136>&nbsp;&nbsp;&nbsp; |-排版设计</option> <option value=137>&nbsp;&nbsp;&nbsp; |-服饰设计</option> <option value=140>&nbsp;&nbsp;&nbsp; |-台历设计</option> <option value=133>&nbsp;&nbsp;&nbsp; |-QQ表情</option> <option value=263>&nbsp;&nbsp;&nbsp; |-其他</option> <option value=138>&nbsp;&nbsp;&nbsp; |-ppt设计</option> <option value=2>网站开发</option> <option value=28>&nbsp;&nbsp;&nbsp; |-网站模板</option> <option value=30>&nbsp;&nbsp;&nbsp; |-网站广告</option> <option value=31>&nbsp;&nbsp;&nbsp; |-网页动画</option> <option value=32>&nbsp;&nbsp;&nbsp; |-商城开发</option> <option value=34>&nbsp;&nbsp;&nbsp; |-接口操作</option> <option value=408>&nbsp;&nbsp;&nbsp; |-网站推广</option> <option value=169>&nbsp;&nbsp;&nbsp; |-FLASH</option> <option value=148>&nbsp;&nbsp;&nbsp; |-店招设计</option> <option value=154>&nbsp;&nbsp;&nbsp; |-网店取名</option> <option value=155>&nbsp;&nbsp;&nbsp; |-网店模板</option> <option value=156>&nbsp;&nbsp;&nbsp; |-数码摄影</option> <option value=147>&nbsp;&nbsp;&nbsp; |-店标设计</option> <option value=170>&nbsp;&nbsp;&nbsp; |-视频制作</option> <option value=172>&nbsp;&nbsp;&nbsp; |-三维渲染</option> <option value=33>&nbsp;&nbsp;&nbsp; |-数据库操作</option> <option value=35>&nbsp;&nbsp;&nbsp; |-服务器系统</option> <option value=29>&nbsp;&nbsp;&nbsp; |-开源修改</option> <option value=40>&nbsp;&nbsp;&nbsp; |-其它</option> <option value=201>创意祝福</option> <option value=203>&nbsp;&nbsp;&nbsp; |-爱情表白</option> <option value=202>&nbsp;&nbsp;&nbsp; |-生日祝福</option> <option value=204>&nbsp;&nbsp;&nbsp; |-圣诞祝福</option> <option value=205>&nbsp;&nbsp;&nbsp; |-新年祝福</option> <option value=209>&nbsp;&nbsp;&nbsp; |-祝福喜得贵子</option> <option value=210>&nbsp;&nbsp;&nbsp; |-祝福乔迁新居</option> <option value=208>&nbsp;&nbsp;&nbsp; |-感恩回馈</option> <option value=207>&nbsp;&nbsp;&nbsp; |-纪念日祝福</option> <option value=206>&nbsp;&nbsp;&nbsp; |-道歉短信</option> <option value=331>&nbsp;&nbsp;&nbsp; |-彩信</option> <option value=249>网游服务</option> <option value=96>&nbsp;&nbsp;&nbsp; |-网游创意</option> <option value=250>&nbsp;&nbsp;&nbsp; |-手机游戏</option> <option value=251>&nbsp;&nbsp;&nbsp; |-游戏试玩</option> <option value=252>&nbsp;&nbsp;&nbsp; |-评测报告</option> <option value=253>&nbsp;&nbsp;&nbsp; |-版本设计</option> <option value=254>&nbsp;&nbsp;&nbsp; |-剧情策划</option> <option value=255>&nbsp;&nbsp;&nbsp; |-压力测试</option> <option value=256>&nbsp;&nbsp;&nbsp; |-代写攻略</option> <option value=257>&nbsp;&nbsp;&nbsp; |-活动策划</option> <option value=258>&nbsp;&nbsp;&nbsp; |-补丁制作</option> <option value=259>&nbsp;&nbsp;&nbsp; |-游戏视频</option> <option value=332>&nbsp;&nbsp;&nbsp; |-问卷调查</option> <option value=3>文案写作</option> <option value=41>&nbsp;&nbsp;&nbsp; |-宣传软文</option> <option value=42>&nbsp;&nbsp;&nbsp; |-广告语写作</option> <option value=43>&nbsp;&nbsp;&nbsp; |-策划</option> <option value=44>&nbsp;&nbsp;&nbsp; |-写文章</option> <option value=45>&nbsp;&nbsp;&nbsp; |-编辑校对</option> <option value=46>&nbsp;&nbsp;&nbsp; |-写新闻</option> <option value=47>&nbsp;&nbsp;&nbsp; |-产品说明</option> <option value=48>&nbsp;&nbsp;&nbsp; |-剧本脚本</option> <option value=49>&nbsp;&nbsp;&nbsp; |-写书</option> <option value=50>&nbsp;&nbsp;&nbsp; |-撰写报告</option> <option value=51>&nbsp;&nbsp;&nbsp; |-应用文写作</option> <option value=52>&nbsp;&nbsp;&nbsp; |-演讲稿</option> <option value=57>&nbsp;&nbsp;&nbsp; |-其它</option> <option value=335>建筑/装修</option> <option value=151>&nbsp;&nbsp;&nbsp; |-展会设计</option> <option value=152>&nbsp;&nbsp;&nbsp; |-办公装修</option> <option value=153>&nbsp;&nbsp;&nbsp; |-园林景观</option> <option value=159>&nbsp;&nbsp;&nbsp; |-店面装修</option> <option value=336>&nbsp;&nbsp;&nbsp; |-新房装修</option> <option value=337>&nbsp;&nbsp;&nbsp; |-二手房装修</option> <option value=340>&nbsp;&nbsp;&nbsp; |-庭院景观设计</option> <option value=338>&nbsp;&nbsp;&nbsp; |-风水咨询</option> <option value=341>&nbsp;&nbsp;&nbsp; |-办公商铺装修</option> <option value=339>&nbsp;&nbsp;&nbsp; |-装修监理</option> <option value=342>&nbsp;&nbsp;&nbsp; |-自建房设计</option> <option value=343>&nbsp;&nbsp;&nbsp; |-景观设计</option> <option value=344>&nbsp;&nbsp;&nbsp; |-3D模型设计</option> <option value=158>&nbsp;&nbsp;&nbsp; |-形象墙设计</option> <option value=149>&nbsp;&nbsp;&nbsp; |-房屋建筑设计</option> <option value=211>头脑风暴</option> <option value=217>&nbsp;&nbsp;&nbsp; |-问卷调查</option> <option value=216>&nbsp;&nbsp;&nbsp; |-意见建议</option> <option value=215>&nbsp;&nbsp;&nbsp; |-写评论</option> <option value=214>&nbsp;&nbsp;&nbsp; |-征集创意</option> <option value=213>&nbsp;&nbsp;&nbsp; |-收集金点子</option> <option value=212>&nbsp;&nbsp;&nbsp; |-策划</option> <option value=350>照片美化/编辑</option> <option value=351>&nbsp;&nbsp;&nbsp; |-艺术照处理</option> <option value=352>&nbsp;&nbsp;&nbsp; |-照片变卡通</option> <option value=353>&nbsp;&nbsp;&nbsp; |-电子相册</option> <option value=354>&nbsp;&nbsp;&nbsp; |-照片美化</option> <option value=355>&nbsp;&nbsp;&nbsp; |-婚纱照美化</option> <option value=356>&nbsp;&nbsp;&nbsp; |-图片编辑</option> <option value=234>法律服务</option> <option value=236>&nbsp;&nbsp;&nbsp; |-法律咨询</option> <option value=235>&nbsp;&nbsp;&nbsp; |-聘请律师</option> <option value=237>&nbsp;&nbsp;&nbsp; |-写法律合同</option> <option value=238>&nbsp;&nbsp;&nbsp; |-写律师函</option> <option value=239>&nbsp;&nbsp;&nbsp; |-写诉讼状</option> <option value=160>起名取名</option> <option value=161 selected=selected>&nbsp;&nbsp;&nbsp; |-宝宝起名</option> <option value=162>&nbsp;&nbsp;&nbsp; |-成人起名</option> <option value=163>&nbsp;&nbsp;&nbsp; |-公司起名</option> <option value=164>&nbsp;&nbsp;&nbsp; |-店铺起名</option> <option value=165>&nbsp;&nbsp;&nbsp; |-品牌起名</option> <option value=166>&nbsp;&nbsp;&nbsp; |-改名</option> <option value=357>影视/配音/歌词</option> <option value=439>&nbsp;&nbsp;&nbsp; |-1111</option> <option value=358>&nbsp;&nbsp;&nbsp; |-写剧本</option> <option value=359>&nbsp;&nbsp;&nbsp; |-影视制作</option> <option value=360>&nbsp;&nbsp;&nbsp; |-广告配音</option> <option value=361>&nbsp;&nbsp;&nbsp; |-影视配音</option> <option value=362>&nbsp;&nbsp;&nbsp; |-动画配音</option> <option value=363>&nbsp;&nbsp;&nbsp; |-彩铃配音</option> <option value=364>&nbsp;&nbsp;&nbsp; |-方言配音</option> <option value=365>&nbsp;&nbsp;&nbsp; |-外语配音</option> <option value=366>&nbsp;&nbsp;&nbsp; |-创意配音</option> <option value=367>&nbsp;&nbsp;&nbsp; |-歌词创作</option> <option value=368>&nbsp;&nbsp;&nbsp; |-歌词谱曲</option> <option value=192>生活服务</option> <option value=193>&nbsp;&nbsp;&nbsp; |-市场调查</option> <option value=194>&nbsp;&nbsp;&nbsp; |-心理咨询</option> <option value=195>&nbsp;&nbsp;&nbsp; |-移民咨询</option> <option value=196>&nbsp;&nbsp;&nbsp; |-理财咨询</option> <option value=197>&nbsp;&nbsp;&nbsp; |-帮我投票</option> <option value=198>&nbsp;&nbsp;&nbsp; |-跑腿排队</option> <option value=199>&nbsp;&nbsp;&nbsp; |-家政服务</option> <option value=200>&nbsp;&nbsp;&nbsp; |-数据导入</option> <option value=218>移动应用</option> <option value=222>&nbsp;&nbsp;&nbsp; |-Android插件</option> <option value=225>&nbsp;&nbsp;&nbsp; |-Symbian SDK插件</option> <option value=223>&nbsp;&nbsp;&nbsp; |-iOS插件</option> <option value=219>&nbsp;&nbsp;&nbsp; |-天翼插件</option> <option value=227>&nbsp;&nbsp;&nbsp; |-Windows mobile插件</option> <option value=228>&nbsp;&nbsp;&nbsp; |-黑莓插件</option> <option value=230>&nbsp;&nbsp;&nbsp; |-Amazon kindle插件</option> <option value=231>&nbsp;&nbsp;&nbsp; |-手机游戏开发</option> <option value=229>&nbsp;&nbsp;&nbsp; |-Palm插件</option> <option value=232>&nbsp;&nbsp;&nbsp; |-手机应用创意</option> <option value=233>&nbsp;&nbsp;&nbsp; |-手机应用汉化</option> <option value=226>&nbsp;&nbsp;&nbsp; |-PalmOS插件</option> <option value=240>招聘找人</option> <option value=177>&nbsp;&nbsp;&nbsp; |-搜索引擎优化</option> <option value=178>&nbsp;&nbsp;&nbsp; |-论坛推广</option> <option value=179>&nbsp;&nbsp;&nbsp; |-QQ群推广</option> <option value=180>&nbsp;&nbsp;&nbsp; |-博客推广</option> <option value=181>&nbsp;&nbsp;&nbsp; |-推广注册</option> <option value=241>&nbsp;&nbsp;&nbsp; |-招聘</option> <option value=242>&nbsp;&nbsp;&nbsp; |-求职</option> <option value=243>&nbsp;&nbsp;&nbsp; |-寻人</option> <option value=244>&nbsp;&nbsp;&nbsp;&nbsp; |--找对象</option> <option value=245>&nbsp;&nbsp;&nbsp; |-找生产商</option> <option value=246>&nbsp;&nbsp;&nbsp; |-找客户</option> <option value=247>&nbsp;&nbsp;&nbsp; |-找供应商</option> <option value=248>&nbsp;&nbsp;&nbsp; |-找人脉</option> <option value=334>&nbsp;&nbsp;&nbsp; |-简历设计</option> <option value=150>&nbsp;&nbsp;&nbsp;&nbsp; |--家装设计</option> <option value=121>软件开发</option> <option value=36>&nbsp;&nbsp;&nbsp; |-程序开发</option> <option value=37>&nbsp;&nbsp;&nbsp; |-编写脚本</option> <option value=38>&nbsp;&nbsp;&nbsp; |-软件皮肤</option> <option value=39>&nbsp;&nbsp;&nbsp; |-插件开发</option> <option value=122>&nbsp;&nbsp;&nbsp; |-软件测试</option> <option value=123>&nbsp;&nbsp;&nbsp; |-游戏开发</option> <option value=324>&nbsp;&nbsp;&nbsp; |-软件汉化</option> <option value=326>&nbsp;&nbsp;&nbsp; |-软件美工</option> <option value=327>&nbsp;&nbsp;&nbsp; |-开发文档编写</option> <option value=328>&nbsp;&nbsp;&nbsp; |-功能完善</option> <option value=325>&nbsp;&nbsp;&nbsp; |-程序功能开发</option></select>　
                        </td>
                      </tr>
<tr>
                        <th scope="row">增值服务：</th>
                        <td>
                        	<b>统计:</b>￥0.00元<br>
<input type="hidden" name="payitem_list[3][item_code]" value="urgent">
<div class="tool_list fl_l" style="width:20%">
<div class="fl_l pad10"> 
<img alt="任务加急" src="../../" original-title="任务加急">			
            </div>

<div class="tool_text">


<p>每次时效：1天</p>	
<p>
   <input type="text" class="member txt_input" name="payitem_list[3][buy_num]"   
   id="payitem_urgent" 
   style="width:53px;" >  						 
天<span id="msg_urgent" class="ml_5"></span>
   </p>
<p>
					
</p>	
</div>		 
</div>

<input type="hidden" name="payitem_list[2][item_code]" value="top">
<div class="tool_list fl_l" style="width:20%">
<div class="fl_l pad10"> 
<img alt="任务置顶" src="../../" original-title="任务置顶">			
            </div>

<div class="tool_text">


<p>每次时效：1天</p>	
<p>
   <input type="text" class="member txt_input" name="payitem_list[2][buy_num]"   
   id="payitem_top" 
   style="width:53px;" >  						 
天<span id="msg_top" class="ml_5"></span>
   </p>
<p>
					
</p>	
</div>		 
</div>

<input type="hidden" name="payitem_list[4][item_code]" value="map">
<div class="tool_list fl_l" style="width:20%">
<div class="fl_l pad10"> 
<img alt="标记地图" src="../../" original-title="标记地图">			
            </div>

<div class="tool_text">


   <input type="hidden" name="px" id="px" value="30.51667"/>
   <input type="hidden" name="py" id="py" value="114.31667"/>					 
   <input type="hidden" name="zo" id="zo" value="10"/>
   <input type="hidden" name="mypoint" id="mypoint">
   <input type="hidden" name="myprovince" id="hdn_myprovince"/>
   	
<p>
  <label>使用：</label><input  name="payitem_list[4][buy_num]" value=1 type="checkbox" id="item_map"  temp="payitem_map"/>						   
 	</p>
<p>
<a href="javascript:void(0)" id="set_map" onclick="set_map();" style="display:none;" class="red">设置地图座标</a>
<script type="text/javascript">
$(function(){
$("#item_map").click(function(){
    if($("#item_map").attr("checked")==true){
$("#set_map").show();
    $("#item_map").attr("checked","checked");
}else{
$("#set_map").hide();
    $("#item_map").attr("checked","");
}

})
})
function set_map(){
art.dialog.open('index.php?do=task_map&task_id=70',{
title:"设置地图",
height:400,
width:700,
closeFn:function (){
$("#mypoint").val(art.dialog.data('mypoint'));
$("#hdn_myprovince").val(art.dialog.data('myprovince'));
  }
     },false);
  					}
</script>
					
</p>	
</div>		 
</div>

</td>
                    </tr>
                     <tr>
                        <th scope="row">任务附件：</th>
    <td>
    	暂无附件   </td>
</tr>
<tr>
                        <th scope="row">任务金额：</th>
                        <td>
                        	<input type="text" name="task_cash" id="task_cash" value="<?php echo $list['task_cash']?>" class="txt" limit="required:true;type:float;between:8000.00-"
 msg="修改金额不得小于任务原金额" title="修改金额不得小于任务原金额" msgArea="span_task_cash"><span id="span_task_cash"></span>
</td>
                    </tr> 
 <tr>
                        <th scope="row">任务描述：</th>
                        <td>
                        <pre class="ws_prewrap ws_break" ><?php echo htmlspecialchars_decode($list['task_desc']) ?></pre>
</td>
</tr>
                    <tr>
                        <th scope="row">&nbsp;</th>
                    	<td>
                    	<button name="sbt_edit" value="1" class="positive primary  button" type="submit" onclick="return checkForm(document.getElementById('frm_art_edit'))">
                    		<span class="check icon"></span>提交</button>

                    	
                    	</td>
                    </tr>
                    </table>
                </form>
              </div>
       </div>           
</div>
<!--主体结束-->




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

<script type="text/javascript" >

function sbt_payitem(){ 

if($("input[temp='payitem_map']").attr("checked")==true){ 
if(!$("#point").val()){
showDialog("","alert","友情提示");
return false;
}else{
$("#payitem_map").val("1");
}	
}else{
$("#payitme_map").val("");
}

//$("#frm_payitem").submit();
//alert(23);return false;
formSub('frm_payitem','form',true);

}

</script>