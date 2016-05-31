<link href="themes/ecmoban_moonbasa2013/qq/images/qq.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
var process_request = "<?php echo $this->_var['lang']['process_request']; ?>";
</script>


<script type="text/javascript">
function AddFavorite(title, url) {
  try {
      window.external.addFavorite(url, title);
  }
catch (e) {
     try {
       window.sidebar.addPanel(title, url, "");
    }
     catch (e) {
         alert("抱歉，您所使用的浏览器无法完成此操作。\n\n加入收藏失败，请使用Ctrl+D进行添加");
     }
  }
}

          //初始化主菜单
            function sw_nav(obj,tag)
            {
     
            var DisSub = document.getElementById("DisSub_"+obj);
            var HandleLI= document.getElementById("HandleLI_"+obj);
                if(tag==1)
                {
                    DisSub.style.display = "block";
             
                    
                }
                else
                {
                    DisSub.style.display = "none";
                
                }
     
            }
     
    </script>

<?php echo $this->smarty_insert_scripts(array('files'=>'transport.js,utils.js')); ?> 

<div class="TopNav">
	<div class="Center1100px">
        <span class="f_r">
        ｜ <a href="./help.php?id=112">帮助中心</a> 
        ｜ <img align="absmiddle" src="themes/ecmoban_lvmore2014/images/icon_tel.gif"> <font class="f_red">400-000-0000</font>
        </span>
        <div class="f_r showflowcat">
        ｜ <img align="absmiddle" src="themes/ecmoban_lvmore2014/images/icon_cart.gif"> <a href="flow.php">购物车</a>
        (<font style="color:#c00; font-weight:bold;"><?php 
$k = array (
  'name' => 'cart_info',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?></font>)
      	</div>
    	<span class="f_r">
        	<font id="ECS_MEMBERZONE"><div id="append_parent"></div>
        	<?php 
$k = array (
  'name' => 'member_info',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
			</font>
		<a href="user.php?act=order_list" rel="nofollow">我的订单</a> 
        
        </span>
        
      
        <img align="absmiddle" src="themes/ecmoban_lvmore2014/images/icon_sc.gif"><a href="Javascript:void(0);" onClick="AddFavorite(document.location.href,'我的网站')" rel="nofollow">收藏本店</a> 
        ｜ <img align="absmiddle" src="themes/ecmoban_lvmore2014/images/icon_weibo.gif"> <a href="http://weibo.com" target="_blank">官网微博</a>
        
	</div>	
</div>
<div id="Top" class="Center1100px">
		<div class="f_l"><a href="./"><img src="themes/ecmoban_lvmore2014/images/logo.gif"></a></div>
        <div class="search">
            <div class="search_form">
            <form id="searchForm" name="searchForm" method="get" action="search.php" onsubmit="return checkSearchForm()">
                <input name="keywords" type="text" id="keyword" class="search_input" value="">
                <input name="imageField" type="submit" value="搜索" class="search_submit" style="cursor:pointer;">
            </form>
            
            </div>
            <div class="hotwords clearfix"><strong>热门搜索：</strong><a href="search.php?keywords=%E6%9D%80%E6%89%8B%E5%8C%85" target="_blank">杀手包</a><a href="search.php?keywords=neverfull" target="_blank">neverfull</a><a href="search.php?keywords=2.55" target="_blank">2.55</a><a href="search.php?keywords=%E9%93%82%E9%87%91%E5%8C%85" target="_blank">铂金包</a><a href="search.php?keywords=%E5%A4%8F%E6%97%A5%E4%BF%83%E9%94%80" target="_blank">夏日促销</a><a href="search.php?keywords=%E8%93%9D%E6%B0%94%E7%90%83" target="_blank">蓝气球</a></div>
        </div>
</div>

<div style="height:10px;"></div>
<div class="menu_box clearfix">
  <div class="block" style="position:relative;">
    <div class="menu"> <a href="index.php"<?php if ($this->_var['navigator_list']['config']['index'] == 1): ?> class="cur"<?php endif; ?>><?php echo $this->_var['lang']['home']; ?><span></span></a> 
      <?php $_from = $this->_var['navigator_list']['middle']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav');$this->_foreach['nav_middle_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav_middle_list']['total'] > 0):
    foreach ($_from AS $this->_var['nav']):
        $this->_foreach['nav_middle_list']['iteration']++;
?> 
      <a href="<?php echo $this->_var['nav']['url']; ?>" <?php if ($this->_var['nav']['opennew'] == 1): ?>target="_blank" <?php endif; ?> <?php if ($this->_var['nav']['active'] == 1): ?> class="cur"<?php endif; ?>> <?php echo $this->_var['nav']['name']; ?> <span></span> </a> 
      
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      <!--
      <div class="mini_cart clearfix">
        <div class="minicart_box"><a href="./flow.php" class="mini_cart_btn">购物车<span class="cart_num" id="ECS_CARTINFO"><?php 
$k = array (
  'name' => 'cart_info',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?></span></a> </div>
      </div>
      -->
    </div>
  </div>
</div>
