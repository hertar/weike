    <div class="clear"></div>
<!--contain start-->
<div class="wrapper">
    <div class="container_24">
        <link href="/public/tpl/default/css/user_center.css" rel="stylesheet" type="text/css">
<header class="page_title clearfix  Anchor">
    <div class="grid_17">
        <h2 class="title pt_5">用户中心</h2>
    </div>
    <div class="grid_7 hidden">
        <div class="user_info">
            <div class="fl_l mr_10">
                <p>
                    <img src='/public/data/avatar/system/16_small.jpg' uid='1' class='pic_small'>                </p>
            </div>
            <ul class="intor">
                <li>
                    欢迎您，<?php $session=new \yii\web\Session();  echo $session->get("user_name")?>                </li>
                <li>
                    <strong class="cf60">币种405405.061</strong>
                   现金 | <strong><a href="index.php?do=user&view=message">4 条消息</a></strong>
                </li>
            </ul>
        </div>
    </div>
</header>
<div class="grid_24">
<nav class="primary_nav box clearfix">

    <a name="userCenter"></a>
    <ul>
                <li>
            <a href="index.php?r=user/index" ><span class="icon32 meter">管理面板</span><em>管理面板</em></a>
        </li>
                <li>
            <a href="index.php?r=user/setting" class="selected"><span class="icon32 cog">企业设置</span><em>企业设置</em></a>
        </li>
                <li>
            <a href="index.php?r=user/finance" ><span class="icon32 chart-line2">财务管理</span><em>财务管理</em></a>
        </li>
                <li>
            <a href="index.php?r=user/employer" ><span class="icon32 buyer">雇主|买家</span><em>雇主|买家</em></a>
        </li>
                <li>
            <a href="index.php?do=user&view=witkey" ><span class="icon32 seller">威客|卖家</span><em>威客|卖家</em></a>
        </li>
                <li>
            <a href="index.php?r=user/message" ><span class="icon32 sound-high">消息管理</span><em>消息管理</em><strong class="badge">4</strong></a>
        </li>
                <li>
            <a href="index.php?r=user/collect" ><span class="icon32 star-fav">我的收藏</span><em>我的收藏</em></a>
        </li>
                <li>
            <a href="index.php?r=user/payitem" ><span class="icon32 bookmark-2">增值服务</span><em>增值服务</em></a>
        </li>
            </ul>
    
    
</nav>

</div>
<div class="clear"></div><!--main start-->
        <section class="clearfix section">
            <!--用户中心样式-->
<div class="second_menu container_24 po_ab clearfix">
    <div class="suffix_21">
        <nav class="minor_nav box clearfix">
           <!--子导航开始-->
      <ul class="nav_group clearfix">
             <li>
                 <a href="index.php?r=user/setting" title="进入基本资料" class="selected">
                   <div class="icon16 contact-card">icon</div><strong>基本资料</strong>
     </a>
             </li>
              <li>
                 <a href="index.php?r=user/setting_pic" title="进入头像设置" >
                   <div class="icon16 picture">icon</div><strong>头像设置</strong>
     </a>
             </li>
        </ul>
       <ul class="nav_group clearfix">
             <li>
                 <a href="index.php?r=user/setting_safe" title="进入安全设置" >
                   <div class="icon16 shield">icon</div><strong>安全设置</strong>
     </a>
             </li>
        </ul>
       
       <ul class="nav_group clearfix">
             <li>
                 <a href="index.php?r=user/setting_space" title="进入店铺设置" >
                   <div class="icon16 browser">icon</div><strong>店铺设置</strong>
     </a>
             </li>
        </ul>
<!--子导航结束-->
        </nav>
    </div>
</div>
            <div class="show_panel container_24 po_re">
                <div class="prefix_3 grid_21">
                    <div class="panel clearfix box">
                        <!--main content-->
                        <div class="">
                            <!--header内容头部 start-->
                            <header class="clearfix box_header">
                                <h2 class="grid_4 alpha omega box_title t_c">基本资料</h2>
                                <div class="grid_17 alpha omega">
                                    <nav class="box_nav ">
                                      <ul>
                                               <li >
                                                <a href="index.php?r=user/setting" >基本资料</a>
                                            </li>
                                                                                        <li >
                                                <a href="index.php?r=user/setting_contact" >联系方式</a>
                                            </li>
                                                                                        <li class="selectedLava">
                                                <a href="index.php?r=user/setting_skill" >威客技能</a>
                                            </li>
                                                                                        <li >
                                                <a href="index.php?r=user/setting_cert" >资质证书</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                                <div class="clear">
                                </div>
                            </header>
                            <!--header内容头部 end-->
                            <div class="prefix_1 suffix_1 mt_10">
                                <div class="clearfix box font14">
                                    <!--from表单 start-->
                                    <form action="index.php?do=user&view=setting&op=basic&opp=skill" method="post" id="frm" name="frm">
                                        <!--messages消息 start-->
                                        <div class="messages m_infor clearfix">
                                            <div class="icon16">info</div>
                                            在右侧选择行业后，可通过点击展示技能图标来选择技能,技能标签最多可以设置5项！<a href="###" class="close">&times;</a>
                                        </div>
                                        <!--messages消息 end-->
                                        <div class="clearfix pb_20 pt_10">
                                            <div class="grid_9 suffix_1">
                                                <h4 class="mb_10 messages m_warn">已选择的技能标签，可点击’x‘去除。请确保点击”保存“来保存设置</h4>
                                                <!--tags_box 标签 start-->
                                                <div class="tags_box">
                                                <span id="tags" type="text" class="tags" /></span>
                                            	</div><!--tags_box 标签 end-->
                                        	</div>
                                        <div class="grid_7">
                                            <h4 class="mb_10 border_b_c messages m_warn">选择行业获取相应技能标签</h4>
                                            <div class="">
                                                <div class="grid_2">
                                                    <label>
                                                        选择行业                                                    </label>
                                                </div>
                                                <div class="grid_3">
                                                    <select name="indus_pid" id="indus_pid" style="width:140px;" onchange="InsertIndus($('#indus_pid option:selected').val(),'skill_tags');">
                                                        <option   value="441">品牌设计  </option>
                                                        <option   value="2">网站开发  </option>
                                                        <option   selected="selected"  value="201">创意祝福  </option>
                                                        <option   value="249">网游服务  </option>
                                                        <option   value="3">文案写作  </option>
                                                        <option   value="335">建筑/装修  </option>
                                                        <option   value="211">头脑风暴  </option>
                                                        <option   value="350">照片美化/编辑  </option>
                                                        <option   value="234">法律服务  </option>
                                                        <option   value="160">起名取名  </option>
                                                        <option   value="357">影视/配音/歌词  </option>
                                                        <option   value="192">生活服务  </option>
                                                        <option   value="218">移动应用  </option>
                                                        <option   value="240">招聘找人  </option>
                                                        <option   value="121">软件开发  </option>
                                                                                                            </select>
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                            <div class="form_box">
                                                <div class="tags_add pad5 clearfix" id="skill_tags"></div>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="clear"></div>
                                        <!--技能经历end-->
                                        <div class="rowElem clearfix form_button">
                                        	<a class="button" type="button" name="sbt_edit" onclick="save_skill();" value="保存">
                                        	<span class="check icon"></span>保存</a>
                                        </div>
                                    </form>
                                    <!--from表单 end-->
                                </div>
                            </div>
                            <!--detail内容 end-->
                        </div>
                        <!--main content end-->
                    </div>
                    <div class="clear">
                    </div>
                </div>
            </div>
        </section>
        <!--main end-->
    </div>
</div>
<!--contain end-->
<script type="text/javascript">
    function InsertIndus(pIndus, insertDiv){
        $.getJSON("index.php?do=user&view=setting&op=basic&opp=skill&ac=get_skill&indus_id=" + pIndus, function(json){
            if (json.status == '1') {
                var tagStr = '';
                $.each(json.data, function(i, n){
                    tagStr += '<a  href="javascript:add_tag(\'' + n.skill_name + '\');\">' + n.skill_name + '</a>';
                })
                $("#" + insertDiv).html(tagStr);
            }
            else {
                $("#" + insertDiv).html("暂无标签");
            }
        })
    }
    
    $(function(){
        var SelectedP = $("#indus_pid option:selected").val();
        InsertIndus(SelectedP, "skill_tags");
        
    })
    var add_tag = function(name){
        os = $("#tags_tagsinput .tag");
        s = os.length;
        var tags = new Array();
        os.each(function(i, n){
            tags.push(jQuery.trim($(n).find('span').text()));
        })
        if (in_array(name, tags)) {
            showDialog("此技能标签已存在", 'alert', "操作提示!");
        }
        else {
            if (s < 5) {
                $("#tags").addTag(name);
            }
            else {
                showDialog("自选技能标签最多5个", 'notice', "操作提示!");
            }
        }
    }
    function save_skill(){
        os = $("#tags_tagsinput .tag");
        s = os.length;
        var tags = new Array();
        os.each(function(i, n){
            tags.push(jQuery.trim($(n).find('span').text()));
        })
        if (!s) {
            showDialog("技能标签列表为空!", 'alert', "操作提示!");
        }
        else {
            tag_str = tags.join(',');
            tag_str = escape(tag_str);
        }
        $.post("index.php?do=user&view=setting&op=basic&opp=skill&ac=save_skill",{'skill':tag_str}, function(json){
            if (json.msg) {
                showDialog("技能标签保存成功!", 'right', "操作提示!");
            }
            else {
                showDialog("技能标签保存失败!", 'alert', "操作提示!");
            }
        }, 'json');
        
    }
    
    //标签
    function set_tags(){
        $('#tags').tagsInput({
            'unique': 1,
            'defaultText': ''
        });
        skills = "网店取名,ppt设计,高级php";

        s = skills.split(',');
        for (i = 0; i < s.length; i++) {
            $("#tags").addTag(s[i]);
        }
        
    }
 
    In.add('css_tagsinput', {
        path: "/public/resource/js/jqplugins/tagsinput/jquery.tagsinput.css",
        type: 'css'
    });
    In.add('tagsinput', {
        path: "/public/resource/js/jqplugins/tagsinput/jquery.tagsinput.js",
        type: 'js'
    });
    In('css_tagsinput', 'tagsinput', function(){
        set_tags();
    });
</script>
<!--jQuery调用--> 
<script type="text/javascript">
$(function(){
var Is = location.href.search('&op=');
if(Is>-1){
$("html,body").animate({scrollTop:$(".Anchor").offset().top});
}
})
function check(obj){
return checkForm(document.getElementById(obj));
}
In.add('jscolor',{path:"/public/resource/js/others/jscolor.js",type:'js'}); 
In('calendar'); 

$(function(){
$(".togg_u").focus(function(){
        	 this.value = '';
        }).blur(function(){
                this.value == '' ? this.value = $(this).attr(this.title ? 'title' : 'original-title') : '';
        })
}) 	
</script>
