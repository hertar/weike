



<nav id="nav" class="nav m_h">
        <div class="container_24" >
        	<div class="menu grid_24 clearfix">
                <ul class="clearfix">
     <?php
        foreach($nav as $v){
     ?>
<li>
    <a href="<?php echo $v['nav_url']?>"  ><span><?php echo $v['nav_title']?></span></a>
</li>

<li class="line"></li>
<?php
        }
?>

                <div class="clear"></div>
        </div>
    </nav>
    <div class="clear"></div>
<link rel="stylesheet" type="text/css" href="resource/js/jqplugins/fancybox/jquery.fancybox-1.3.4.css" media="screen">
<script src="resource/js/jqplugins/fancybox/jquery.fancybox-1.3.4.js" type="text/javascript"></script>
<script src="resource/js/jqplugins/fancybox/jquery.mousewheel-3.0.4.pack.js" type="text/javascript"></script> 
 <!--页面内容区-->
<div class="wrapper">
<!--页面头部-->
<header class=" page_header clearfix ">
    <div class="container_24 po_re">
    <!--面包屑-->
    <div class="breadcrumbs clearfix">
          <a href="index.php" >首页</a> &gt;
  <a href="index.php?do=shop_list&path=C6">威客商城</a> &gt;
  <a href="index.php?do=shop_list&path=C6A350"><?php echo $arr['indus_pid'];?></a> &gt;
          <a href="index.php?do=shop_list&path=C6A350"><?php echo $arr['indus_id'];?></a>
    </div>
<!--end 面包屑-->
<!--页面标题布局-->
<div class="grid_20">
<!--页面标题-->
    	<div class="page_title clearfix">
    		
<!--页面标题头像-->
            <div class="fl_l pt_10 mr_5 hidden">
                <a href="index.php?do=space&member_id=2" title="猪八戒">
 <img src='http://www.wk.com/data/avatar/system/2_small.jpg' uid='2' class='pic_small'></a>
            </div>
<!--页面标题头像 end-->

            <div class=" page_title">
                <h2 class="title"><a href="javascript:void(0);"><?php echo $arr['title'];?></a></h2>
                <div class="clearfix page_sub_title c666">
                	<span>发布时间：<?php echo date('Y-m-d H:m:s',time($val['on_time']));?></span>
                    <span class="border_l_c mar10"></span>
                    <span>性质：威客作品 </span>
                    <span class="border_l_c mar10"></span>
                    <span>编号：#<?php echo $arr['service_id'];?> </span>
                    <span class="border_l_c mar10"></span>
 	

  </div>
            </div>
</div>
<!--页面标题 end-->
</div>
<!--页面标题布局 end-->
<!--操作区-->
<div id="taskScroll" class="grid_4  hidden">
     <div class="control clearfix">
             
                     <a href="index.php?do=shop_order&sid=13&" class="submit block">现在购买</a>
                            </div>
</div>
<!--操作区 end-->
<div class="clear"></div>
        <!--页面子导航-->
<div class="page_nav_box grid_24">
        <nav class="clearfix page_nav po_re mt_10" id="top_nav">
            <ul>
                <li class="selected">
                    <a href="http://www.wk.com/index.php?do=service&sid=13" title="商品描述"><span class="icon16 box mr_5"></span>商品描述</a>
                </li>
                <li >
                    <a href="http://www.wk.com/index.php?do=service&sid=13&view=sale" title="交易记录"><span class="icon16 doc-lines-stright mr_5"></span>交易记录 <span class="c999">[1]</span></a>
                </li>
                <li >
                    <a href="http://www.wk.com/index.php?do=service&sid=13&view=comment" title="留言"><span class="icon16 spechbubble-2 mr_5"></span>留言 <span class="c999">[0]</span></a>
                </li>
                <li >
                    <a href="http://www.wk.com/index.php?do=service&sid=13&view=mark" title="评价"><span class="icon16 cert mr_5"></span>评价<span class="c999">[2]</span></a>
                </li>
                <!-- <li class="border_n">
                    <a href="javascript:void(0);" title="停靠在左侧"><span class="icon16 arrow-bottom-left" style="display:block;" id="arrow-bottom-left">停靠在左侧</span></a>
                </li> -->
            </ul>
            
        </nav>
        <!--end 页面子导航-->			
<div class="clear"></div>
    	</div>
</div>
</header>
<!--end 页面头部-->
<!--主内容-->
<section class="clearfix content">
    <div class="container_24">

<!--左边导航 start-->
<section class="clearfix section">
        	<div class="second_menu container_24 po_ab hidden" id="left_nav">
        <div class="suffix_23 pull_1 clearfix">
            <nav class="minor_nav box clearfix">
                <ul class="nav_group clearfix">
                    <li><a href="http://www.wk.com/index.php?do=service&sid=13" class="selected" title="商品描述"><span class="icon16 box block ">商</span></a></li>
                <li>
                    <a href="http://www.wk.com/index.php?do=service&sid=13&view=sale"  title="交易记录 [1]"><span class="icon16 doc-lines-stright block">购</span></a>
                </li>
                <li>
                    <a href="http://www.wk.com/index.php?do=service&sid=13&view=comment"  title="留言 [0]"><span class="icon16 spechbubble-2 block">留</span></a>
                </li>
                <li >
                    <a href="http://www.wk.com/index.php?do=service&sid=13&view=mark"  title="评价 [{2]"><span class="icon16 cert block">评</span></a>
                </li>
        
                </ul>
                <ul class="nav_group clearfix">
<li>
         	<a href="javascript:void(0);" class="" title="停靠在顶部">
            	<div class="icon16 arrow-top-right block" id="arrow-top-right">停</div>
            </a>
         </li>
                </ul>
            </nav>
        </div>
    </div>
<!--左边导航 end-->	
            <div class="show_panel container_24 po_re">
            	                <div class="po_re clearfix box grid_19">
                    <div class="panel clearfix box">
                   
                        <!--left-->
                        <div class="clearfix">
                            <div class="product_desc clearfix">
                            	<div class="pad10 clearfix">
                            		<div class="product_desc_lcon grid_10 alpha omega">
                            			<div class="pro_decs_img">
                            				                                            <a href="data/uploads/2013/04/09/2282751640079d7d50.jpg" class="group" rel="shop_group" >
                              	  <img alt="[图兰朵]婚纱摄影重磅推出 黄金路线启动" src="data/uploads/2013/04/09/2282751640079d7d50.jpg" onerror='$(this).attr("src","tpl/default/img/shop/shop_default.gif")'>
                                            </a>
                                            </div>
<div class="clear"></div>
</div>
<div class="product_desc_rcon fl_l ">
<p class="pro_price"><span>价格</span><b>￥<?php $arr['price'];?>元</b> <i>/</i><i>个</i></p>
<p><span>销量</span><em>1</em><span>浏览人数</span>12</p>
<p><span>地区</span>暂无</p>
<p><span>交付方式</span>联系客服</p>
<p class="grid_5 alpha omega">
<a href="index.php?do=shop_order&sid=13&steps=step1&op=buy" class="submit block">现在购买</a>
</p>
                                     <div class="clear"></div>
 <p class="clearfix msg msg_warn grid_8 alpha omega">友情提醒：为保障您的利益，请网上成交，贵重物品，请将付款托管到平台进行交易。</p>
 <div class="clear"></div>
 <p class="clearfix grid_8 pl_5 law_notice">免责声明：本网所展示的商品与服务信息由买卖双方自行提供，其真实性、准确性和合法性由信息发布人负责。本网不提供任何保证，并不承担法律责任。</p>
</div>
</div>
                            </div>


<div class="prefix_1 suffix_1">
                                
                                <div class="describe mt_20  clearfix">
                                    <h2 class="border_b_c mb_10"><span class="font16">描述</span>
                                    </h2><!--任务地图-->
<!--end任务地图-->                                   <p class="ws_prewrap ws_break">
    <?php echo htmlspecialchars_decode($val['content'])?>
           </div>
                                </p>

                            </div>
                            <div class="prefix_1 suffix_1">
                                
                                <div class="clear">
                                </div>
                                <!--其他作品-->
                                <div class="mt_30 other_product pt_20">
                                    <div class="clearfix">
                                                                               <a class="grid_3 alpha" href="index.php?do=service&sid=5" title="【创意】网络视频" target="_blank">
<img src="data/uploads/2013/04/09/100_201825163e6a867205.png" onerror='$(this).attr("src","tpl/default/img/shop/shop_default.gif")' alt="【创意】网络视频">
</a>
<a class="grid_3 alpha" href="index.php?do=service&sid=7" title="【创意】企业网站定制开发" target="_blank">
<img src="data/uploads/2013/04/09/100_192895163e866c4dc9.jpg" onerror='$(this).attr("src","tpl/default/img/shop/shop_default.gif")' alt="【创意】企业网站定制开发">
</a>
<a class="grid_3 alpha" href="index.php?do=service&sid=9" title="【创意】【澎 R26; 然心动】宣传册页设计" target="_blank">
<img src="data/uploads/2013/04/09/100_34715163f16eaa527.png" onerror='$(this).attr("src","tpl/default/img/shop/shop_default.gif")' alt="【创意】【澎 R26; 然心动】宣传册页设计">
</a>
<a class="grid_3 alpha" href="index.php?do=service&sid=12" title="商务|贸易|通用PPT模板" target="_blank">
<img src="data/uploads/2013/04/09/100_69285163fcde4fe35.jpg" onerror='$(this).attr("src","tpl/default/img/shop/shop_default.gif")' alt="商务|贸易|通用PPT模板">
</a>
                                                                            </div><a class="block" href="index.php?do=space&member_id=2&view=goods" target="_blank">更多<span class="fontb">猪八戒</span>的作品&gt;&gt;</a>
                                </div>
                                <!--end 其他作品-->
                                <div class="shop_intrest mt_20 pt_10 m_h t_c pb_10 clearfix">
                                <h3 class="t_l"><span class="font14 c333">您可能感兴趣的同类商品</span></h3>
                               <ul>
                                                                    <div class="t_c">
                                          暂无                                    </div>
                                                        </div>
                            </div>
                        </div>
                        <!--end left-->



<!--right-->
<div class="grid_8 alpha omega pt_10 hidden">
                            <!--人数统计-->
                            <div class="statistics mt_10 mb_10 clearfix ">
                            	<ul>
                                <li>
                                    
                                        <strong class="digital t_c">1</strong>
                                        <span>购买人数</span>
                                   
                                </li>
                                <li class="border_l_c">
                                    
                                        <strong class="digital t_c">0</strong>
                                        <span>收藏人数</span>
                                    
                                </li>
                                <li class="border_l_c">
                                    
                                        <strong class="digital t_c">12</strong>
                                        <span>浏览人数</span>
                                    
                                </li>
                                <li class="border_l_c">
                                    
                                        <strong class="digital t_c">0</strong>
                                        <span>留言</span>
                                    
                                </li>
</ul>
                            </div>
                            <!--end 人数统计--><!--现在购买-->
                            <div class="buyNow mt_10 clearfix po_re">
                                <span class="po_ab shop_arrow"></span>
                                <span class="fontb c900 fl_l ml_10">￥2,000.00元</span>
</div>
                            <!--end 现在购买--><!--附加信息-->
                            <div class="shop_otherInfo bord_c mt_10">
                                <ul>
                                    <li>
                                        <span>单位</span>个                                    </li>
                                    <li>
                                        <span>性质</span>威客作品                                    </li>
                                    <li>
                                        <span>分类</span>照片美化/编辑/
                                        婚纱照美化                                    </li>
                                    <li>
                                        <span>付款</span>联系客服                                    </li>
                                </ul>
                            </div>
                            <!--end 附加信息-->
<!--作者信息-->
                            <div class="shop_author bord_c mt_10 pad10 clearfix">
                                <div class="t_c fl_l portrait mr_10">
                                    <div style="height:118;width:120">
                                        <img src='http://www.wk.com/data/avatar/system/2_middle.jpg' uid='2' class='pic_middle'>                                    </div>
                                    <a href="index.php?do=space&member_id=2" target="_blank" class="button mt_10"><b class="fl_l">进入空间</b><span class="icon16 top-right-expand fl_r"></span></a>
                                </div>
                                <div class="fl_l ml_10">
                                    <p class="shop_sign">
                                        <b><a href="index.php?do=space&member_id=2" class="pt_10 font14b" target="_blank">猪八戒</a> <img src="data/uploads/sys/mark/228324f3b0872c6f04.gif?fid=2075" align="absmiddle" title="头衔 ：五级威客&#13;&#10;能力值：2057&#13;&#10;等级：5"></b>
                                        <div class="clear">
                                        </div>
                                        <span>暂无</span>
                                    </p>
                                    <p>
                                    	<!--卖家的认证信息-->
                                                                            </p>
                                    <div class="shop_sum1 clearfix">
                                        <ul>
                                            <li class="border_r_c fl_l">
                                                <a href="javascript:void(0);" class="font14b block">100%</a>
                                                <span>好评率</span>
                                            </li>
                                            <li class="border_r_c fl_l">
                                                <a href="javascript:void(0);" class="font14b block">0</a>
                                                <span>中标</span>
                                            </li>
                                            <li class="fl_l">
                                                <a href="javascript:void(0);" class="font14b block">1</a>
                                                <span>出售</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <!--loading 加载 start-->
                                    <div class="loading_bar">
                                        <div class="progress_bar" grade="5.70">
                                            5.70%
                                        </div>
                                    </div>
                                    <!--loading 加载 end-->
                                </div>
                            </div>
                            <!--end 作者信息-->
                            
                            
                        </div><!--right-->
                        <div class="clear"></div>

 
                          <!--右下角的返回顶部-->
                          <div class="operate fl_r mt_10 hidden">
                              <a href="index.php?do=service&sid=13" title="返回首页"><span class="icon16 home">返回首页</span></a>
                              <a href="javascript:void(0)" title="返回顶部"><span class="icon16 arrow-top">返回顶部</span></a>
                          </div>
                          <!--end右下角的返回顶部-->
                        
                    </div>



</div>
            	<div class="grid_5 clearfix shop_info_rcon">
            		<!--作者信息-->
                    	<div class="shop_author  box normal2 clearfix mb_10">
                    	<div class="inner">
                            <div class="box_header">
                        	   <h2 class="title">卖家信息</h2>
                            </div>
<div class="pad5 clearfix border_b_c">
<div class="clearfix">
                                <div class="t_c fl_l mr_10">
                                        <img src='http://www.wk.com/data/avatar/system/2_small.jpg' uid='2' class='pic_small'>                                 </div>
<p class="shop_sign fl_l">
                                    <a href="index.php?do=space&member_id=2" class="font14b block" target="_blank">猪八戒</a>
<img src="data/uploads/sys/mark/228324f3b0872c6f04.gif?fid=2075" align="absmiddle" title="头衔 ：五级威客&#13;&#10;能力值：2057&#13;&#10;等级：5">                                </p>
</div>
                            <p>
                            	<!--卖家的认证信息-->
                                                            </p>
<p>好评率<span class="cc00 ml_10 pl_5">100%</span>
<a href="javascript:void(0);" class="fl_r" onclick="add_follow('add_focus','2');"  id="add_follow_2">加关注</a></p>
</p>
<p>出售商品<span class="c333 ml_5">5</span></p>

<p><span>工作速度<em class="cc00 ml_5">5.0分</em></span><span class="stars a5"><span class="stars a5 s5"><span class="star_selected"></span></span></span></p>							
<p><span>工作质量<em class="cc00 ml_5">5.0分</em></span><span class="stars a5"><span class="stars a5 s5"><span class="star_selected"></span></span></span></p>							
<p><span>工作态度<em class="cc00 ml_5">5.0分</em></span><span class="stars a5"><span class="stars a5 s5"><span class="star_selected"></span></span></span></p>							
							
                            <div class="shop_sum1 clearfix hidden">
                                <ul>
                                    <li class="border_r_c fl_l">
                                        <a href="javascript:void(0);" class="font14b block">100%</a>
                                        <span>好评率</span>
                                    </li>
                                    <li class="border_r_c fl_l">
                                        <a href="javascript:void(0);" class="font14b block">0</a>
                                        <span>中标</span>
                                    </li>
                                    <li class="fl_l">
                                        <a href="javascript:void(0);" class="font14b block">1</a>
                                        <span>出售</span>
                                    </li>
                                </ul>
                            </div>          
                    	</div>
<div class="shop_author_link clearfix">
<a href="index.php?do=space&member_id=2" target="_blank" class="fl_l">查看店铺空间</a>
<a href="javascript:void(0)" onclick="sendMessage(2,'猪八戒')" class="fl_r">发送站内信</a>
</div>
</div>
</div>	
                    <!--end 作者信息-->
   <div class="">
<a class="button block" href="javascript:void(0);" onclick="favor('service_id','service','goods','2','13','[图兰朵]婚纱摄影重磅推出 黄金路线启动','13')">
<span class="star-fav-empty  icon16"></span>
0 次收藏</a>
<a class="button block" href="index.php?do=ajax&view=share&oid=1&title=[图兰朵]婚纱摄影重磅推出 黄金路线启动" id="share1" onclick="return false;" onmouseover="share(this);" title="分享">
<span class="icon16 share"></span>
分享</a>
</div>	
            			
</div>


 </div>	
</section>
<!--商品详情_底部广告-->
   <div class='adv'><a href='http://www.kppw.cn' target='_blank' title='adv'><img src='data/uploads/sys/ad/adv.jpg' width='' height='' alt='adv' title='adv'></a></div>
<aside class=" mb_10 clearfix">	
                        <div class="grid_12 ">
                            <div class="example box normal2 clearfix pb_10">
                                <div class="inner">
                                    <div class="box_header">
                                        <h3 class="title">
                                            <span class="font14 ml_10">同类热销案例</span>
                                        </h3>
                                    </div>
                                <div class="pt_10 clearfix">
                                <div class="t_c">
                      暂无</div>
                                                                
                            </div>
                        </div>
                    </div>
                 </div>
                        
                      
                        <div class="grid_12 alpha omega">
                            <div class="box normal2 example clearfix pb_10 shop_list">
                                <div class="inner"> 
                                <div class="box_header">
                                    <h3 class="title"><span class="font14 ml_10">相关分类任务列表</span></h3>
                                </div>
                                <div class="pt_10 clearfix">
                                <div class="t_c">
                      暂无</div>
                            </div>
                            </div>

                            </div>
                        </div>

             </aside>      
            
        
    </div>
</section>
<!--end 主内容-->
</div>
 <!--end 页面内容区-->
  <script type="text/javascript" >
     $(document).ready(function() {
        $("a.group").fancybox({
    
   });
    
 });
  </script>
<script type="text/javascript" src="resource/js/xheditor/xheditor.js"></script>
<script type="text/javascript">
    var uid = parseInt('') + 0;
    var sid= parseInt('13') + 0;
    var basic_url = "index.php?do=service&sid=" + sid;

In.add('service',{path:"resource/js/system/service.js",type:'js'});
In('service'); 
In('lazy',function(){
loadPics();
})
</script>
<script src="resource/js/uploadify/jquery.uploadify-3.1.min.js" type="text/javascript"></script>

<link href="resource/js/uploadify/uploadify.css" rel="stylesheet">

<!--页脚 satrt-->
<footer class="footer clearfix">
<!--网站链接以及语言栏 关注我们 搜索 start-->






            <!--网站版权声明 start-->
            <section class="site_copyright clearfix">
            	<div class="container_24 clearfix ">
            		
            		
                    	 	<dl>
<dt>
                    	 		单位武汉客客信息技术有限公司<span class="pad10">地址:湖北省武汉市</span>联系电话:18971533922</dt>
<dd>
                    	 	KPPW2.2 Copyright &#169; 2010 -2013 kekezu. All rights reserved<a href="http://icp.valu.cn/" target="_blank"></a>
</dd>  
                    	 	</dl>
 <div class="clear"></div>


<!--语言栏 关注我们 搜索 start-->

                    <div class="site_attach clearfix">

                        	<div class="social">
                            	关注我们：                            	
                                
 
<a href="index.php?do=wb&focus=1881490142&wb_type=sina"><img src="resource/img/ico/sina_t.gif" title="1881490142"></a> 


 
<a href="index.php?do=wb&focus=shangjinglong&wb_type=ten"><img src="resource/img/ico/ten_t.gif" title="shangjinglong"></a> 


 
<a href="index.php?do=wb&focus=2746053225&wb_type=netease"><img src="resource/img/ico/netease_t.gif" title="2746053225"></a> 


 
<a href="index.php?do=wb&focus=naniso&wb_type=sohu"><img src="resource/img/ico/sohu_t.gif" title="naniso"></a> 


                            </div>
     

                        <div class="lan_box">
                            <form action="" method="post" id="lan_bottom">
                                <div class="clearfix">
                                     <label>语言：</label>
                                     <select id="lan" name="lan" style="width:100px" onchange="setLang(this)">
      <option value="cn" c="CNY" selected>简体中文</option>
                                       </select>
                                
                           
                               
                                     <label> 币种：</label>
                                     <select  style="width:100px" onchange="setCurr(this.value,1);">
      <option value="USD" id="USD" >US Dollar</option>
      <option value="CNY" id="CNY" selected>人民币</option>
      <option value="EUR" id="EUR" >Euro</option>
      <option value="GBP" id="GBP" >GB Pound</option>
      <option value="CAD" id="CAD" >Canadian Dollar</option>
      <option value="AUD" id="AUD" >Australian Dollar</option>
      <option value="HKD" id="HKD" >港币</option>
      <option value="KRW" id="KRW" >韩元</option>
      <option value="RUB" id="RUB" >卢布</option>
                                       </select>
                                 </div>
                            </form>
</div>	
                        

</div>

                  
                    <!--语言栏 关注我们 搜索 end-->


                </div>
   				<div class="clearfix"></div>
            </section>
            <!--网站版权声明 end-->
            
            <!--返回顶部 start-->

        	<a class="top animated hidden" href="javascript:void(0);" title="返回顶部"><em>&diams;</em>Top</a>
              
            <!--返回顶部 end-->
    </footer>
    <!--页脚 end-->
</div>
<script type="text/javascript">
var uid='';
var xyq = "3i6vq9ea8ipmc987unb2p0ivi1";
$(function(){
   $.get('js.php?op=time&r='+Math.random());	
})
 //js异步加载
In('header_top','custom','lavalamp','tipsy','autoIMG','slides');




</script>

<!--[if IE 6]></div><![endif]-->
<!--[if IE 7]></div><![endif]-->
<!--[if IE 8]></div><![endif]-->
</body>
</html>
