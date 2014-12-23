
<div class="wrapper">      
        <!--页面头部-->
        <header class="clearfix page_header">
        	<div class="container_24">
        	
<div class='adv'><a href='http://www.kppw.cn' target='_blank' title='adv1'>
        <img src='/public/data/uploads/sys/ad/adv.jpg' width='' height='' alt='adv1' title='adv1'></a></div>  
            <!--页面导航-->
            <div class="breadcrumbs clearfix">
                <a href="index.php">首页</a> &gt; <span>商城大厅</span>
              </div>
            <!--end 页面导航-->
          </div>
        </header> 
        <!--end 页面标题-->
        
        
        
        
        
        
        <!--主内容-->
        <section class="clearfix content">
            <div class="container_24">
            	
    	<div class="clear"></div>

  <!--大厅列表_头部二栏广告 start-->
 		   <!--大厅列表_头部二栏广告 end-->
<div class="clear"></div>
                <div class="box mb_10 clearfix">
                	<div class="grid_24">
                    <!--筛选条件-->
                    <div class="filter box normal po_re">
                    	<div class="inner">
                      <!--条件列表-->
                      <div class="condition_list pad10" > 
                        <!--分类-->
                        <dl class="condition clearfix">
                            <dt class="grid_2 omega">
                                商城分类                            </dt>
                            <dd class="grid_21">
                                <a href="index.php?do=shop_list&path="    class='selected' >全部 </a>
                                <a href="index.php?do=shop_list&path=A441" >品牌设计</a>
                                <a href="index.php?do=shop_list&path=A2" >网站开发</a>
                                <a href="index.php?do=shop_list&path=A201" >创意祝福</a>
                                <a href="index.php?do=shop_list&path=A249" >网游服务</a>
                                <a href="index.php?do=shop_list&path=A3" >文案写作</a>
                                <a href="index.php?do=shop_list&path=A335" >建筑/装修</a>
                                <a href="index.php?do=shop_list&path=A211" >头脑风暴</a>
                                <a href="index.php?do=shop_list&path=A350" >照片美化/编辑</a>
                                <a href="index.php?do=shop_list&path=A234" >法律服务</a>
                                <a href="index.php?do=shop_list&path=A160" >起名取名</a>
                                <a href="index.php?do=shop_list&path=A357" >影视/配音/歌词</a>
                                <a href="index.php?do=shop_list&path=A192" >生活服务</a>
                                <a href="index.php?do=shop_list&path=A218" >移动应用</a>
                                <a href="index.php?do=shop_list&path=A240" >招聘找人</a>
                                <a href="index.php?do=shop_list&path=A121" >软件开发</a>
                                 
                            </dd>
                        </dl>
                         <!--end 分类-->
                       
                      	  <!--条件1-->
                          <dl class="condition clearfix">
                            <dt class="grid_2 omega">商品种类</dt>
                            <dd class="grid_21">
                            	                                <a href="index.php?do=shop_list&path="  class="selected" >全部</a> 
    
    <a href="index.php?do=shop_list&path=C7"  >服务</a> 
                                    
    <a href="index.php?do=shop_list&path=C6"  >作品（源码）</a> 
                                                                </dd>
                           </dl>
   
                           <div id="condition_list" style="display:none;">
                           <!--条件2-->
                           <dl class="condition clearfix">
                            <dt class="grid_2 omega">商品金额</dt>
                            <dd class="grid_21">
                                        <span id="general_search" >
                                        	<a href="index.php?do=shop_list&path="   class="selected" >全部</a>
 
<a href="index.php?do=shop_list&path=B1"  >100元以下 </a>
 
<a href="index.php?do=shop_list&path=B2"  >100-500 </a>
 
<a href="index.php?do=shop_list&path=B3"  >500-1000 </a>
 
<a href="index.php?do=shop_list&path=B4"  >1000-5000 </a>
 
<a href="index.php?do=shop_list&path=B5"  >5000-20000 </a>
 
<a href="index.php?do=shop_list&path=B6"  >2万以上 </a>

<a class="button" style="" onclick="custom_search_cash('shop_list_search_cash')">
                                        		<span class="icon cog"></span>自定义</a>
</span>
                                        <div id="cool_search"   style="display:none;" >
                                            <div class="grid_12">
                                            	<div class="pr_30">
                                                <div id="slider-range" class="mr_5">
                                                	
                                                </div>
<div class="clear"></div>
<ul class="range-num">
<li >0</li>
                                                	<li>1000</li>
<li>2000</li>
<li >3000</li>
<li class="lasts">4000</li>
<li class="lasts">5000</li>
</ul>
<div class="clear"></div>
</div>
<div class="clear"></div>
<div class="pt_10">
                                                <label for="amount1">
                                                  	  价格:
                                                </label>

                                                <input type="text" id="amount1" class="txt_input" size="5"/> -
<input type="text" id="amount2" class="txt_input" size="5"/> 元<a class="button" style="" onclick="search_task_cash()"><span class="magnifier icon"></span>搜索</a>
                                            		
</div>
</div>
<div class="grid_8"><a class="button" style="" onclick="task_cash_reset('shop_list_search_cash')"><span class="icon reload"></span>返回</a></div>

                                        </div>
                                    </dd>
                           </dl>
  <form id="cash_frm" name="cash_frm" action="index.php?do=shop_list" method="get">  
<input type="hidden" name="do" value="shop_list">
<input type="hidden" name="path" value="">
<input type="hidden" name="min" id="min">
<input type="hidden" name="max" id="max">
<input type="hidden" name="page_size" id="page_size" value="20">
  </form>
  
 <form id="cash_frm_fh" name="cash_frm_fh"  action="index.php?do=shop_list" method="post"> 
<input type="hidden" name="do" value="shop_list">
<input type="hidden" name="path" value=";"> 
<input type="hidden" name="page_size" id="page_size" value="20">

 </form>
                           <!--end 条件2-->
                       
                           <!--条件4-->
                           <dl class="condition clearfix">
                            <dt class="grid_2 omega">发布时间</dt>
                            <dd class="grid_21">
                            	                                <a href="index.php?do=shop_list&path="  class="selected" >全部</a> 
  
    <a href="index.php?do=shop_list&path=D1"   >近一天</a> 
                                  
    <a href="index.php?do=shop_list&path=D2"   >近三天</a> 
                                  
    <a href="index.php?do=shop_list&path=D3"   >近一周</a> 
                                  
    <a href="index.php?do=shop_list&path=D4"   >近一个月</a> 
                                                                </dd>
                           </dl>
                           <!--end 条件4-->
   <!--条件5-->
                                    <dl class="condition clearfix border_n">
                                        <dt class="grid_2 omega">
                                         地区搜索
                                        </dt>
                                        <dd class="grid_21">
                                        	<a href="index.php?do=shop_list&path=&max=&min="   class="selected" >全部 </a>
                                           <select name="province" id="province"></select><select name="city" id="city"></select><select name="area" id="area"></select>
   <a class="button" style="" onclick="search_address()"><span class="magnifier icon"></span>搜索　</a>
                                        </dd>
                                    </dl>
                                    <!--end 条件5-->
</div>
<!--工具栏-->
                            <div class="operate po_ab">
                                <a href="javascript:show_hide()" id="tool_show" title="展开"><span class="icon16 sq-plus"></span></a>
                                <a href="javascript:show_hide()" id="tool_hide" style="display:none" title="收起"><span class="icon16 sq-minus"></span></a>
                            </div>
                            <!--end 工具栏-->
                       </div>
                       <!--end 条件列表-->
                       
                       
                       <!--已选条件-->
                       <div class="select_condition clearfix pad10 m_h">
                       
                           <div class="grid_2 omega">
                           		<h3 class="title">已选条件</h3>
                           </div>
                        
                        	<div class="grid_21">
                            		<!--当无选择条件时显示span标记-->
                                    
<span>您暂无选择筛选条件</span> 
                            </div>
                       </div>
   	

                       <!--end 已选条件-->
   </div>
                    </div>
                     <!--end 筛选条件-->
                    </div>
                </div>
            
            
                <section class="clearfix section"> 
                    <div class="second_menu container_24 po_ab m_h">
                        <div class="suffix_23 pull_1">
                            <nav class="minor_nav box">
                                <ul class="nav_group clearfix">                                	
                                    <li>
                                    	<a href="index.php?do=help&fpid=291" title="帮助中心"><span class="icon16 help"></span></a>
</li>
<li>
<a href="index.php?do=shop_map" title="商城地图"><span class="icon16  globe-2"></span></a> 
</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    
                    <div class="show_panel container_24 po_re">
                        <div class="po_re clearfix box">
                                  
                                <!--左边内容-->
                                <div class="grid_20">
                                    <div class="box normal clearfix">
                                        <!--左内容头-->
                                    	<div class="border_b_c clearfix hidden">
                                    	<div class="grid_5 omega">
                                            <div class="sum clearfix">
                                                <p>共<span class="cc00"> 13 </span>条</p>
                                             </div>
                                        </div>
                                         <div class="grid_15 alpha omega m_h"> 
                                              <!--列表项数量-->
                                              <div class="page_count fl_r">
                                                  <a href="index.php?do=shop_list&path=&min=&max=&page_size=20"  class="selected" >20</a>
                                                  <a href="index.php?do=shop_list&path=&min=&max=&page_size=40" >40</a>
                                                  <a href="index.php?do=shop_list&path=&min=&max=&page_size=60" >60</a>
                                                  <a href="index.php?do=shop_list&path=&min=&max=&page_size=80" >80</a>
                                              </div>
                                              <!--end 列表项数量-->
  <!--小翻页-->
                                              <div class="min_page  fl_l pl_10">
                                                <p class="clearfix">
                                                                                                           </p>
                                                  <div class="clear"></div>
                                              </div>
                                              <!--end 小翻页-->
                                          </div>
  </div>
                                          <!--end 左内容头-->
                                        
                                        <!--列表主内容-->
                                        <div class="list">
                                            <dl>
                                              <dt>悬赏商品</dt>
                                              <dd class="tags clearfix">
                                                <ul> 
                                                    <li class="w5 info">商品信息</li>
                                                    <li class="w3 describe">卖家|描述</li> 
                                                    <li class="w2 price">
<a href="index.php?do=shop_list&path=&min=&max=&page_size=20&ord=2"  style="display:none"   title="低出售价格在前">价格|已出售 ▲</a> 
<a href="index.php?do=shop_list&path=&min=&max=&page_size=20&ord=1"   title="高出售价格在前">价格|已出售 ▼</a>

</li> 
                                                </ul>
                                              </dd>
                            
 
                                            <dd class="po_re clearfix 
      "
   >
                                                <ul class="clearfix pt_10">
                                                    <li class="w5 info">
                                                        <div class="img_box">
                                                        	<a href="index.php?do=service&sid=13">
                                                                    <img src="/public/data/uploads/2013/04/09/100_2282751640079d7d50.jpg" onerror='$(this).attr("src","tpl/default/img/shop/shop_default.gif")' title="[图兰朵]婚纱摄影重磅推出 黄金路线启动"></a>
                                                        </div>
                                                        
                                                    	<div class="img_des">
                                                    	
                                                        	<a href="index.php?do=service&sid=13" class="font14b list_small_title" title="[图兰朵]婚纱摄影重磅推出 黄金路线启动">[图兰朵]婚纱摄影重磅推出 黄金路线启动</a>
                                                            <p class="models">
                                                              商品类型：                                                                                                                                  <strong class="c393">作品</strong>
                                                                                                                              
                                                            </p>
                                                            <p class="block">
                                                            商城分类：	
照片美化/编辑 / 婚纱照美化</p> 
                                                        	                                                     	                                                              </div>
                                                    </li>
                                                    <li class="w3 describe ws_break">
                                                    	<a href="index.php?do=space&member_id=2">猪八戒</a>
                                                        <p>&nbsp;本单特色1.京城十佳婚纱摄影工作室2.W. P. T&nbsp;婚纱摄影模式3.资深摄影师、化妆师全程VIP一对一服务</p>
                                                    </li>
                                                    <li class="w2 price">
                                                    	<p class="cc00 font14b">&nbsp; ￥2,000.00元 </p>
                                                        <span>成功售出 1 笔</span>                                                    </li>
                                                    
                                                </ul>
                                                <div class="clear"></div>
<!--
                                                <div class="operate clearfix ">
                                                    <a href="javascript:favor('service_id','service','goods','2','13','[图兰朵]婚纱摄影重磅推出 黄金路线启动','13')" original-title="收藏" ><span class="icon16 star-fav-empty">收藏</span> </a>
                                                    <a href="index.php?do=service&sid=13" target="_blank" original-title="新窗口打开"><span class="icon16 expand">新窗口打开</span></a>
                                                   <a class="" href="index.php?do=ajax&view=share&oid=0&title=[图兰朵]婚纱摄影重磅推出 黄金路线启动" id="share0" onclick="return false;" onmouseover="share(this);return false;" title="分享"><span class="icon16 share">分享</span></a></a>
                                                </div>-->
                                              </dd>
                                             <dd class="po_re clearfix 
      "
   >
                                                <ul class="clearfix pt_10">
                                                    <li class="w5 info">
                                                        <div class="img_box">
                                                        	<a href="index.php?do=service&sid=12">
                                                                    <img src="/public/data/uploads/2013/04/09/100_69285163fcde4fe35.jpg" onerror='$(this).attr("src","/public/tpl/default/img/shop/shop_default.gif")' title="商务|贸易|通用PPT模板"></a>
                                                        </div>
                                                        
                                                    	<div class="img_des">
                                                    	
                                                        	<a href="index.php?do=service&sid=12" class="font14b list_small_title" title="商务|贸易|通用PPT模板">商务|贸易|通用PPT模板</a>
                                                            <p class="models">
                                                              商品类型：                                                                                                                                  <strong class="c393">作品</strong>
                                                                                                                              
                                                            </p>
                                                            <p class="block">
                                                            商城分类：	
文案写作 / ppt设计</p> 
                                                        	                                                     	                                                              </div>
                                                    </li>
                                                    <li class="w3 describe ws_break">
                                                    	<a href="index.php?do=space&member_id=2">猪八戒</a>
                                                        <p>&nbsp;商务贸易通用ppt末班，总有一款你需要的KPPW2.2安装包默认数据均为测试演示数据，无任何商业意图，请各位站长测试</p>
                                                    </li>
                                                    <li class="w2 price">
                                                    	<p class="cc00 font14b">&nbsp; ￥100.00元 </p>
                                                                                                            </li>
                                                    
                                                </ul>
                                                <div class="clear"></div>
<!--
                                                <div class="operate clearfix ">
                                                    <a href="javascript:favor('service_id','service','goods','2','12','商务|贸易|通用PPT模板','12')" original-title="收藏" ><span class="icon16 star-fav-empty">收藏</span> </a>
                                                    <a href="index.php?do=service&sid=12" target="_blank" original-title="新窗口打开"><span class="icon16 expand">新窗口打开</span></a>
                                                   <a class="" href="index.php?do=ajax&view=share&oid=1&title=商务|贸易|通用PPT模板" id="share1" onclick="return false;" onmouseover="share(this);return false;" title="分享"><span class="icon16 share">分享</span></a></a>
                                                </div>-->
                                              </dd>
                                             <dd class="po_re clearfix 
      "
   >
                                                <ul class="clearfix pt_10">
                                                    <li class="w5 info">
                                                        <div class="img_box">
                                                        	<a href="index.php?do=service&sid=11">
                                                                    <img src="/public/data/uploads/2013/04/09/100_255615163e9f7e366b.png" onerror='$(this).attr("src","/public/tpl/default/img/shop/shop_default.gif")' title="【创意】著作权（版权）登记"></a>
                                                        </div>
                                                        
                                                    	<div class="img_des">
                                                    	
                                                        	<a href="index.php?do=service&sid=11" class="font14b list_small_title" title="【创意】著作权（版权）登记">【创意】著作权（版权）登记</a>
                                                            <p class="models">
                                                              商品类型：                                                                                                                                  <strong class="c939">服务</strong>
                                                                                                                              
                                                            </p>
                                                            <p class="block">
                                                            商城分类：	
法律服务 / 写法律合同</p> 
                                                        	                                                     	                                                              </div>
                                                    </li>
                                                    <li class="w3 describe ws_break">
                                                    	<a href="index.php?do=space&member_id=2">猪八戒</a>
                                                        <p>&nbsp;一、登记所需要的材料&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1、计算机</p>
                                                    </li>
                                                    <li class="w2 price">
                                                    	<p class="cc00 font14b">&nbsp; ￥100.00元 </p>
                                                        <span>成功售出 1 笔</span>                                                    </li>
                                                    
                                                </ul>
                                                <div class="clear"></div>
<!--
                                                <div class="operate clearfix ">
                                                    <a href="javascript:favor('service_id','service','service','2','11','【创意】著作权（版权）登记','11')" original-title="收藏" ><span class="icon16 star-fav-empty">收藏</span> </a>
                                                    <a href="index.php?do=service&sid=11" target="_blank" original-title="新窗口打开"><span class="icon16 expand">新窗口打开</span></a>
                                                   <a class="" href="index.php?do=ajax&view=share&oid=2&title=【创意】著作权（版权）登记" id="share2" onclick="return false;" onmouseover="share(this);return false;" title="分享"><span class="icon16 share">分享</span></a></a>
                                                </div>-->
                                              </dd>
                                             <dd class="po_re clearfix 
      "
   >
                                                <ul class="clearfix pt_10">
                                                    <li class="w5 info">
                                                        <div class="img_box">
                                                        	<a href="index.php?do=service&sid=10">
                                                                    <img src="/public/data/uploads/2013/04/09/100_215165163e99f7a44c.jpg" onerror='$(this).attr("src","/public/tpl/default/img/shop/shop_default.gif")' title="【创意】企业（个人）法律咨询"></a>
                                                        </div>
                                                        
                                                    	<div class="img_des">
                                                    	
                                                        	<a href="index.php?do=service&sid=10" class="font14b list_small_title" title="【创意】企业（个人）法律咨询">【创意】企业（个人）法律咨询</a>
                                                            <p class="models">
                                                              商品类型：                                                                                                                                  <strong class="c939">服务</strong>
                                                                                                                              
                                                            </p>
                                                            <p class="block">
                                                            商城分类：	
法律服务 / 法律咨询</p> 
                                                        	                                                     	                                                              </div>
                                                    </li>
                                                    <li class="w3 describe ws_break">
                                                    	<a href="index.php?do=space&member_id=2">猪八戒</a>
                                                        <p>&nbsp;智义信多年来一直专注于为客户提供商标、专利、著作权、商业秘密保护、反不正当竞争、特许经营等知识产权法</p>
                                                    </li>
                                                    <li class="w2 price">
                                                    	<p class="cc00 font14b">&nbsp; ￥1,000.00元 </p>
                                                                                                            </li>
                                                    
                                                </ul>
                                                <div class="clear"></div>
<!--
                                                <div class="operate clearfix ">
                                                    <a href="javascript:favor('service_id','service','service','2','10','【创意】企业（个人）法律咨询','10')" original-title="收藏" ><span class="icon16 star-fav-empty">收藏</span> </a>
                                                    <a href="index.php?do=service&sid=10" target="_blank" original-title="新窗口打开"><span class="icon16 expand">新窗口打开</span></a>
                                                   <a class="" href="index.php?do=ajax&view=share&oid=3&title=【创意】企业（个人）法律咨询" id="share3" onclick="return false;" onmouseover="share(this);return false;" title="分享"><span class="icon16 share">分享</span></a></a>
                                                </div>-->
                                              </dd>
                                             <dd class="po_re clearfix 
   app_recmd
      "
   >
                                                <ul class="clearfix pt_10">
                                                    <li class="w5 info">
                                                        <div class="img_box">
                                                        	<a href="index.php?do=service&sid=9">
                                                                    <img src="/public/data/uploads/2013/04/09/100_34715163f16eaa527.png" onerror='$(this).attr("src","/public/tpl/default/img/shop/shop_default.gif")' title="【创意】【澎 R26; 然心动】宣传册页设计"></a>
                                                        </div>
                                                        
                                                    	<div class="img_des">
                                                    	
                                                        	<a href="index.php?do=service&sid=9" class="font14b list_small_title" title="【创意】【澎 R26; 然心动】宣传册页设计">【创意】【澎 R26; 然心动】宣传册页设计</a>
                                                            <p class="models">
                                                              商品类型：                                                                                                                                  <strong class="c393">作品</strong>
                                                                                                                              
                                                            </p>
                                                            <p class="block">
                                                            商城分类：	
文案写作 / 宣传册页</p> 
                                                        	                                                     	      <img src="http://127.0.0.1/weike/resource/img/ico/tj.png" alt="推荐" title="推荐">                                                        </div>
                                                    </li>
                                                    <li class="w3 describe ws_break">
                                                    	<a href="index.php?do=space&member_id=2">猪八戒</a>
                                                        <p>&nbsp;专注于品牌设计，品牌价值提升！为您提供更放心满意的服务。&nbsp;具有4年专业从事企业产品画册/宣传册设计</p>
                                                    </li>
                                                    <li class="w2 price">
                                                    	<p class="cc00 font14b">&nbsp; ￥100.00元 </p>
                                                                                                            </li>
                                                    
                                                </ul>
                                                <div class="clear"></div>
<!--
                                                <div class="operate clearfix ">
                                                    <a href="javascript:favor('service_id','service','goods','2','9','【创意】【澎 R26; 然心动】宣传册页设计','9')" original-title="收藏" ><span class="icon16 star-fav-empty">收藏</span> </a>
                                                    <a href="index.php?do=service&sid=9" target="_blank" original-title="新窗口打开"><span class="icon16 expand">新窗口打开</span></a>
                                                   <a class="" href="index.php?do=ajax&view=share&oid=4&title=【创意】【澎 R26; 然心动】宣传册页设计" id="share4" onclick="return false;" onmouseover="share(this);return false;" title="分享"><span class="icon16 share">分享</span></a></a>
                                                </div>-->
                                              </dd>
                                             <dd class="po_re clearfix 
   app_recmd
      "
   >
                                                <ul class="clearfix pt_10">
                                                    <li class="w5 info">
                                                        <div class="img_box">
                                                        	<a href="index.php?do=service&sid=8">
                                                                    <img src="/public/data/uploads/2013/04/09/100_198065163f0bc185b1.jpg" onerror='$(this).attr("src","/public/tpl/default/img/shop/shop_default.gif")' title="家庭装修设计作品-1"></a>
                                                        </div>
                                                        
                                                    	<div class="img_des">
                                                    	
                                                        	<a href="index.php?do=service&sid=8" class="font14b list_small_title" title="家庭装修设计作品-1">家庭装修设计作品-1</a>
                                                            <p class="models">
                                                              商品类型：                                                                                                                                  <strong class="c393">作品</strong>
                                                                                                                              
                                                            </p>
                                                            <p class="block">
                                                            商城分类：	
照片美化/编辑 / 图片编辑</p> 
                                                        	                                                     	      <img src="http://127.0.0.1/weike/resource/img/ico/tj.png" alt="推荐" title="推荐">                                                        </div>
                                                    </li>
                                                    <li class="w3 describe ws_break">
                                                    	<a href="index.php?do=space&member_id=4">shangk</a>
                                                        <p>&nbsp;家庭装修设计作品-1家庭装修设计作品-1家庭装修设计作品-1家庭装修设计作品-1家庭装修设计作品-1家庭装修设</p>
                                                    </li>
                                                    <li class="w2 price">
                                                    	<p class="cc00 font14b">&nbsp; ￥1,000.00元 </p>
                                                                                                            </li>
                                                    
                                                </ul>
                                                <div class="clear"></div>
<!--
                                                <div class="operate clearfix ">
                                                    <a href="javascript:favor('service_id','service','goods','4','8','家庭装修设计作品-1','8')" original-title="收藏" ><span class="icon16 star-fav-empty">收藏</span> </a>
                                                    <a href="index.php?do=service&sid=8" target="_blank" original-title="新窗口打开"><span class="icon16 expand">新窗口打开</span></a>
                                                   <a class="" href="index.php?do=ajax&view=share&oid=5&title=家庭装修设计作品-1" id="share5" onclick="return false;" onmouseover="share(this);return false;" title="分享"><span class="icon16 share">分享</span></a></a>
                                                </div>-->
                                              </dd>
                                             <dd class="po_re clearfix 
      "
   >
                                                <ul class="clearfix pt_10">
                                                    <li class="w5 info">
                                                        <div class="img_box">
                                                        	<a href="index.php?do=service&sid=7">
                                                                    <img src="/public/data/uploads/2013/04/09/100_192895163e866c4dc9.jpg" onerror='$(this).attr("src","/public/tpl/default/img/shop/shop_default.gif")' title="【创意】企业网站定制开发"></a>
                                                        </div>
                                                        
                                                    	<div class="img_des">
                                                    	
                                                        	<a href="index.php?do=service&sid=7" class="font14b list_small_title" title="【创意】企业网站定制开发">【创意】企业网站定制开发</a>
                                                            <p class="models">
                                                              商品类型：                                                                                                                                  <strong class="c393">作品</strong>
                                                                                                                              
                                                            </p>
                                                            <p class="block">
                                                            商城分类：	
网站开发 / 网站广告</p> 
                                                        	                                                     	                                                              </div>
                                                    </li>
                                                    <li class="w3 describe ws_break">
                                                    	<a href="index.php?do=space&member_id=2">猪八戒</a>
                                                        <p>&nbsp;服务范围：&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;移动应用，系统</p>
                                                    </li>
                                                    <li class="w2 price">
                                                    	<p class="cc00 font14b">&nbsp; ￥10,000.00元 </p>
                                                                                                            </li>
                                                    
                                                </ul>
                                                <div class="clear"></div>
<!--
                                                <div class="operate clearfix ">
                                                    <a href="javascript:favor('service_id','service','goods','2','7','【创意】企业网站定制开发','7')" original-title="收藏" ><span class="icon16 star-fav-empty">收藏</span> </a>
                                                    <a href="index.php?do=service&sid=7" target="_blank" original-title="新窗口打开"><span class="icon16 expand">新窗口打开</span></a>
                                                   <a class="" href="index.php?do=ajax&view=share&oid=6&title=【创意】企业网站定制开发" id="share6" onclick="return false;" onmouseover="share(this);return false;" title="分享"><span class="icon16 share">分享</span></a></a>
                                                </div>-->
                                              </dd>
                                             <dd class="po_re clearfix 
   app_recmd
      "
   >
                                                <ul class="clearfix pt_10">
                                                    <li class="w5 info">
                                                        <div class="img_box">
                                                        	<a href="index.php?do=service&sid=6">
                                                                    <img src="/public/data/uploads/2013/04/09/100_142785163e7a84cef0.png" onerror='$(this).attr("src","/public/tpl/default/img/shop/shop_default.gif")' title="【创意】装修"></a>
                                                        </div>
                                                        
                                                    	<div class="img_des">
                                                    	
                                                        	<a href="index.php?do=service&sid=6" class="font14b list_small_title" title="【创意】装修">【创意】装修</a>
                                                            <p class="models">
                                                              商品类型：                                                                                                                                  <strong class="c939">服务</strong>
                                                                                                                              
                                                            </p>
                                                            <p class="block">
                                                            商城分类：	
建筑/装修 / 办公装修</p> 
                                                        	                                                     	      <img src="http://127.0.0.1/weike/resource/img/ico/tj.png" alt="推荐" title="推荐">                                                        </div>
                                                    </li>
                                                    <li class="w3 describe ws_break">
                                                    	<a href="index.php?do=space&member_id=2">猪八戒</a>
                                                        <p>&nbsp;服务分类：家居装修>新房装服务报价：￥50000元/其他KPPW2.2安装包默认数据均为测试演示数据，无任何商业意图，请</p>
                                                    </li>
                                                    <li class="w2 price">
                                                    	<p class="cc00 font14b">&nbsp; ￥5,000.00元 </p>
                                                                                                            </li>
                                                    
                                                </ul>
                                                <div class="clear"></div>
<!--
                                                <div class="operate clearfix ">
                                                    <a href="javascript:favor('service_id','service','service','2','6','【创意】装修','6')" original-title="收藏" ><span class="icon16 star-fav-empty">收藏</span> </a>
                                                    <a href="index.php?do=service&sid=6" target="_blank" original-title="新窗口打开"><span class="icon16 expand">新窗口打开</span></a>
                                                   <a class="" href="index.php?do=ajax&view=share&oid=7&title=【创意】装修" id="share7" onclick="return false;" onmouseover="share(this);return false;" title="分享"><span class="icon16 share">分享</span></a></a>
                                                </div>-->
                                              </dd>
                                             <dd class="po_re clearfix 
   app_recmd
      "
   >
                                                <ul class="clearfix pt_10">
                                                    <li class="w5 info">
                                                        <div class="img_box">
                                                        	<a href="index.php?do=service&sid=5">
                                                                    <img src="/public/data/uploads/2013/04/09/100_201825163e6a867205.png" onerror='$(this).attr("src","/public/tpl/default/img/shop/shop_default.gif")' title="【创意】网络视频"></a>
                                                        </div>
                                                        
                                                    	<div class="img_des">
                                                    	
                                                        	<a href="index.php?do=service&sid=5" class="font14b list_small_title" title="【创意】网络视频">【创意】网络视频</a>
                                                            <p class="models">
                                                              商品类型：                                                                                                                                  <strong class="c393">作品</strong>
                                                                                                                              
                                                            </p>
                                                            <p class="block">
                                                            商城分类：	
影视/配音/歌词 / 影视制作</p> 
                                                        	                                                     	      <img src="http://127.0.0.1/weike/resource/img/ico/tj.png" alt="推荐" title="推荐">                                                        </div>
                                                    </li>
                                                    <li class="w3 describe ws_break">
                                                    	<a href="index.php?do=space&member_id=2">猪八戒</a>
                                                        <p>&nbsp;购买服务，雇主威客一对一，满意再付款，交易有保障！KPPW2.2安装包默认数据均为测试演示数据，无任何商业意图，请各位</p>
                                                    </li>
                                                    <li class="w2 price">
                                                    	<p class="cc00 font14b">&nbsp; ￥100.00元 </p>
                                                                                                            </li>
                                                    
                                                </ul>
                                                <div class="clear"></div>
<!--
                                                <div class="operate clearfix ">
                                                    <a href="javascript:favor('service_id','service','goods','2','5','【创意】网络视频','5')" original-title="收藏" ><span class="icon16 star-fav-empty">收藏</span> </a>
                                                    <a href="index.php?do=service&sid=5" target="_blank" original-title="新窗口打开"><span class="icon16 expand">新窗口打开</span></a>
                                                   <a class="" href="index.php?do=ajax&view=share&oid=8&title=【创意】网络视频" id="share8" onclick="return false;" onmouseover="share(this);return false;" title="分享"><span class="icon16 share">分享</span></a></a>
                                                </div>-->
                                              </dd>
                                             <dd class="po_re clearfix 
   app_recmd
      "
   >
                                                <ul class="clearfix pt_10">
                                                    <li class="w5 info">
                                                        <div class="img_box">
                                                        	<a href="index.php?do=service&sid=4">
                                                                    <img src="/public/data/uploads/2013/04/09/100_223825163e63ccb09a.jpg" onerror='$(this).attr("src","/public/tpl/default/img/shop/shop_default.gif")' title="【创意】3d生物模型制作（包括材质贴图）"></a>
                                                        </div>
                                                        
                                                    	<div class="img_des">
                                                    	
                                                        	<a href="index.php?do=service&sid=4" class="font14b list_small_title" title="【创意】3d生物模型制作（包括材质贴图）">【创意】3d生物模型制作（包括材质贴图）</a>
                                                            <p class="models">
                                                              商品类型：                                                                                                                                  <strong class="c939">服务</strong>
                                                                                                                              
                                                            </p>
                                                            <p class="block">
                                                            商城分类：	
照片美化/编辑 / 照片美化</p> 
                                                        	                                                     	      <img src="http://127.0.0.1/weike/resource/img/ico/tj.png" alt="推荐" title="推荐">                                                        </div>
                                                    </li>
                                                    <li class="w3 describe ws_break">
                                                    	<a href="index.php?do=space&member_id=4">shangk</a>
                                                        <p>&nbsp;【创意】3d生物模型制作（包括材质贴图）【创意】3d生物模型制作（包括材质贴图）【创意】3d生物模型制作（包括材质贴</p>
                                                    </li>
                                                    <li class="w2 price">
                                                    	<p class="cc00 font14b">&nbsp; ￥1,000.00元 </p>
                                                                                                            </li>
                                                    
                                                </ul>
                                                <div class="clear"></div>
<!--
                                                <div class="operate clearfix ">
                                                    <a href="javascript:favor('service_id','service','service','4','4','【创意】3d生物模型制作（包括材质贴图）','4')" original-title="收藏" ><span class="icon16 star-fav-empty">收藏</span> </a>
                                                    <a href="index.php?do=service&sid=4" target="_blank" original-title="新窗口打开"><span class="icon16 expand">新窗口打开</span></a>
                                                   <a class="" href="index.php?do=ajax&view=share&oid=9&title=【创意】3d生物模型制作（包括材质贴图）" id="share9" onclick="return false;" onmouseover="share(this);return false;" title="分享"><span class="icon16 share">分享</span></a></a>
                                                </div>-->
                                              </dd>
                                             <dd class="po_re clearfix 
   app_recmd
      "
   >
                                                <ul class="clearfix pt_10">
                                                    <li class="w5 info">
                                                        <div class="img_box">
                                                        	<a href="index.php?do=service&sid=3">
                                                                    <img src="/public/data/uploads/2013/04/09/100_81285163e55b16b4d.jpg" onerror='$(this).attr("src","/public/tpl/default/img/shop/shop_default.gif")' title="【创意】著作权（版权）登记"></a>
                                                        </div>
                                                        
                                                    	<div class="img_des">
                                                    	
                                                        	<a href="index.php?do=service&sid=3" class="font14b list_small_title" title="【创意】著作权（版权）登记">【创意】著作权（版权）登记</a>
                                                            <p class="models">
                                                              商品类型：                                                                                                                                  <strong class="c939">服务</strong>
                                                                                                                              
                                                            </p>
                                                            <p class="block">
                                                            商城分类：	
生活服务 / 市场调查</p> 
                                                        	                                                     	      <img src="http://127.0.0.1/weike/resource/img/ico/tj.png" alt="推荐" title="推荐">                                                        </div>
                                                    </li>
                                                    <li class="w3 describe ws_break">
                                                    	<a href="index.php?do=space&member_id=6">丸美弹力</a>
                                                        <p>&nbsp;一、登记所需要的材料&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1、计算机</p>
                                                    </li>
                                                    <li class="w2 price">
                                                    	<p class="cc00 font14b">&nbsp; ￥20.00元 </p>
                                                                                                            </li>
                                                    
                                                </ul>
                                                <div class="clear"></div>
<!--
                                                <div class="operate clearfix ">
                                                    <a href="javascript:favor('service_id','service','service','6','3','【创意】著作权（版权）登记','3')" original-title="收藏" ><span class="icon16 star-fav-empty">收藏</span> </a>
                                                    <a href="index.php?do=service&sid=3" target="_blank" original-title="新窗口打开"><span class="icon16 expand">新窗口打开</span></a>
                                                   <a class="" href="index.php?do=ajax&view=share&oid=10&title=【创意】著作权（版权）登记" id="share10" onclick="return false;" onmouseover="share(this);return false;" title="分享"><span class="icon16 share">分享</span></a></a>
                                                </div>-->
                                              </dd>
                                             <dd class="po_re clearfix 
   app_recmd
      "
   >
                                                <ul class="clearfix pt_10">
                                                    <li class="w5 info">
                                                        <div class="img_box">
                                                        	<a href="index.php?do=service&sid=2">
                                                                    <img src="/public/data/uploads/2013/04/09/100_16875163e52fe2415.jpg" onerror='$(this).attr("src","/public/tpl/default/img/shop/shop_default.gif")' title="【创意】LOGO设计"></a>
                                                        </div>
                                                        
                                                    	<div class="img_des">
                                                    	
                                                        	<a href="index.php?do=service&sid=2" class="font14b list_small_title" title="【创意】LOGO设计">【创意】LOGO设计</a>
                                                            <p class="models">
                                                              商品类型：                                                                                                                                  <strong class="c393">作品</strong>
                                                                                                                              
                                                            </p>
                                                            <p class="block">
                                                            商城分类：	
照片美化/编辑 / 图片编辑</p> 
                                                        	                                                     	      <img src="http://127.0.0.1/weike/resource/img/ico/tj.png" alt="推荐" title="推荐">                                                        </div>
                                                    </li>
                                                    <li class="w3 describe ws_break">
                                                    	<a href="index.php?do=space&member_id=4">shangk</a>
                                                        <p>&nbsp;【创意】LOGO设计【创意】LOGO设计【创意】LOGO设计【创意】LOGO设计【创意】LOGO设计【创意】LOGO设计【创</p>
                                                    </li>
                                                    <li class="w2 price">
                                                    	<p class="cc00 font14b">&nbsp; ￥100.00元 </p>
                                                                                                            </li>
                                                    
                                                </ul>
                                                <div class="clear"></div>
<!--
                                                <div class="operate clearfix ">
                                                    <a href="javascript:favor('service_id','service','goods','4','2','【创意】LOGO设计','2')" original-title="收藏" ><span class="icon16 star-fav-empty">收藏</span> </a>
                                                    <a href="index.php?do=service&sid=2" target="_blank" original-title="新窗口打开"><span class="icon16 expand">新窗口打开</span></a>
                                                   <a class="" href="index.php?do=ajax&view=share&oid=11&title=【创意】LOGO设计" id="share11" onclick="return false;" onmouseover="share(this);return false;" title="分享"><span class="icon16 share">分享</span></a></a>
                                                </div>-->
                                              </dd>
                                             <dd class="po_re clearfix 
   app_recmd
      "
   >
                                                <ul class="clearfix pt_10">
                                                    <li class="w5 info">
                                                        <div class="img_box">
                                                        	<a href="index.php?do=service&sid=1">
                                                                    <img src="/public/data/uploads/2013/04/09/100_314595163e47017e15.jpg" onerror='$(this).attr("src","/public/tpl/default/img/shop/shop_default.gif")' title="【创意】海报设计"></a>
                                                        </div>
                                                        
                                                    	<div class="img_des">
                                                    	
                                                        	<a href="index.php?do=service&sid=1" class="font14b list_small_title" title="【创意】海报设计">【创意】海报设计</a>
                                                            <p class="models">
                                                              商品类型：                                                                                                                                  <strong class="c393">作品</strong>
                                                                                                                              
                                                            </p>
                                                            <p class="block">
                                                            商城分类：	
照片美化/编辑 / 图片编辑</p> 
                                                        	                                                     	      <img src="http://127.0.0.1/weike/resource/img/ico/tj.png" alt="推荐" title="推荐">                                                        </div>
                                                    </li>
                                                    <li class="w3 describe ws_break">
                                                    	<a href="index.php?do=space&member_id=4">shangk</a>
                                                        <p>&nbsp;【创意】海报设计【创意】海报设计【创意】海报设计【创意】海报设计【创意】海报设计【创意】海报设计【创</p>
                                                    </li>
                                                    <li class="w2 price">
                                                    	<p class="cc00 font14b">&nbsp; ￥1,000.00元 </p>
                                                                                                            </li>
                                                    
                                                </ul>
                                                <div class="clear"></div>
<!--
                                                <div class="operate clearfix ">
                                                    <a href="javascript:favor('service_id','service','goods','4','1','【创意】海报设计','1')" original-title="收藏" ><span class="icon16 star-fav-empty">收藏</span> </a>
                                                    <a href="index.php?do=service&sid=1" target="_blank" original-title="新窗口打开"><span class="icon16 expand">新窗口打开</span></a>
                                                   <a class="" href="index.php?do=ajax&view=share&oid=12&title=【创意】海报设计" id="share12" onclick="return false;" onmouseover="share(this);return false;" title="分享"><span class="icon16 share">分享</span></a></a>
                                                </div>-->
                                              </dd>
   
                                            </dl>    
                                        </div>
                                        <!--end 列表主内容-->
<!--右下角的返回顶部--
                                        <div class="operate mt_10 fl_r">
                                                    <a href="index.php" class="" title="返回首页"><span class="icon16 home"></span><span class="return_word">返回首页</span></a>
                                                    <a href="#" class="" title="返回顶部"><span class="icon16 arrow-top"></span><span class="return_word">返回顶部</span></a>
                                        </div>
                                        <!--end右下角的返回顶部-->      
                                    </div>
                                     
                                    <!--page 翻页 start-->
                                    <div class="page">
                                        <p class="clearfix">
                                            <span class="stats">共 13 条 </span>
                                                                                   </p>
                                        <div class="clear"></div>
                                    </div>
                                    <!--page 翻页 end-->
                                    <div class="clear"></div>
                                         
                                </div>
                                <!--end 左边部分-->
                                
                                <!--右边部分-->
                                <div class="grid_4 m_h">
                                        
<div class="mb_10">
   	<a href="http://127.0.0.1/weike/index.php?do=shop_release" class="submit block">发布商品</a>
   </div>
<div class="box normal2">
                                        <!--任务动态-->
                                        <div class="inner">
                                        	<div class="box_header">
                                                <h3 class="title">商城动态</h3>
</div>
                                                <div class=" pl_10 pr_10 pb_10">
                                                
                                                   <ul id="history_collect ">
                                                	                                                </ul>
</div>
                                        </div>
                                    	</div>
                                        
<div class="clear"></div>
<!--威客商城_右侧广告-->
<div style="margin:0 -5px;">
<div class='adv'><a href='http://www.kppw.cn' target='_blank' title='adv'>
        <img src='/public/data/uploads/sys/ad/adv.jpg' width='' height='' alt='adv' title='adv'></a></div></div>
<div class="clear"></div>
                                        
                                    </div>
                                
                                <!--end 右边部分-->         
                            
                        </div>
                    </div>
                                    
                </section>    
<div class="clear"></div>
 
 		 <div class='adv'><a href='http://www.kppw.cn' target='_blank' title='adv'>
                         <img src='/public/data/uploads/sys/ad/adv.jpg' width='' height='' alt='adv' title='adv'></a></div>
<div class="clear"></div>                
            </div>  
        </section> 
</div>  
        <!--end 主内容--> 

<script type="text/javascript">
/** 检查用户是否登陆 */
var uid = parseInt('')+0; 

function check_user_login() {
if (isNaN(uid) || uid == 0) {
showDialog("你还没有登录，是否现在登录？", 'confirm', "登录消息提示", 'user_login()', 0);
return false;
} else {
return true;
}
}


/** 用户登陆 */

function user_login() {
showWindow('user_login', 'index.php?do=login', 'get');
return false;
} 
//页面加载，判断搜索条件是现实还是隐藏
        $(function(){
            var show_cookie = getcookie('show_cookie');
            
            if (show_cookie == 1) {
                $("#condition_list").show();
                $("#tool_hide").show();
                $("#tool_show").hide();
            }
        });
        
        //搜索条件现实 /隐藏
        function show_hide(){
            $("#condition_list").toggle(0, function(){
                if ($("#tool_show").is(":hidden")) {
                    setcookie('show_cookie', '');
                    $("#tool_show").show();
                    $("#tool_hide").hide();
                }
                else {
                    setcookie('show_cookie', 1,3600);
                    $("#tool_hide").show();
                    $("#tool_show").hide();
                }
            });
        }	


 
//收藏
function taskFavor(type,obj_id) {
if (check_user_login()) {
var url="index.php?do=task&task_id="+obj_id+"&op=taskfavor";
$.getJSON(url,{keep_type:type,obj_id:obj_id},function(json){
showDialog(json.data,'notice',json.msg);return false;
})
}
}
//分享
var share=function(obj,title){
CHARSET.toLowerCase()=='utf-8'?obj.href = encodeURI(obj.href):'';
ajaxmenu(obj,250,'1','2','43');
return false;
}
//进度条
    function task_bar(){
        var min = Number();
        var max = Number();
        
        $("#slider-range").slider({
            range: true,
            min: 0,
            max: 5000,
            values: [min, max],
            slide: function(event, ui){
                $("#amount1").val(ui.values['0']);
$("#amount2").val(ui.values['1']);
            }
        });
        //$("#amount").val('$' + $("#slider-range").slider("values", 0) + ' - $' + $("#slider-range").slider("values", 1));
$("#amount1").val($("#slider-range").slider("values", 0));
$("#amount2").val($("#slider-range").slider("values", 1));
    }
    
    
    //赏金搜索 
    function search_task_cash(){
        var url = window.location.href;
        var min = $("#amount1").val();
        var max =  $("#amount2").val();

        $("#min").val(min);
        $("#max").val(max); 
        $("#cash_frm").submit();
    }
       //地区搜索
   function search_address(){
     	var province = $("#province").val();
        var city = $("#city").val();
var area = $("#area").val();
if(province&&city&&area){
window.location.href = "index.php?do=task_list&path=&max=&min=&province="+province+"&city="+city+"&area="+area;
}
   }
  
            
 
</script>		
<script type="text/javascript"> 
 In('form','pcas',function(){
  			  new PCAS("province","city","area","","","");
});
    In.config('serial',true);
In.add('ui_core',{path:"/public/resource/js/others/ui.core.js",type:'js'});
In.add('ui_slider',{path:"/public/resource/js/others/ui.slider.js",type:'js',rely:['ui_core']});
In.add('search',{path:"/public/tpl/default/js/search.js",type:'js'});
In('search','ui_slider','lazy',function(){task_bar();loadPics();});
 
</script>
