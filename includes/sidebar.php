<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!-- 侧边栏 -->
<aside id="sidebar" class="sidebar" role="complementary">
  <section class="widget widget-nav sidebar-nav">
    <header id="header" class="header"><?php Matcha::siteName(); ?></header>
    <ul class="widget-list"><?php Matcha::pageNav($this, "li"); ?></ul>
  </section>
  <!-- 版权信息 -->
	<section class="widget sidebar-foot">
    <ul class="widget-list">
      <li><a rel="nofollow" target="_blank" href="https://github.com/cortmiem/Luminous" class="no-linkTarget">Luminous</a> of <a rel="nofollow" target="_blank" href="https://github.com/BigCoke233/matcha" class="no-linkTarget">Matcha</a></li>
      <li>由 <a rel="nofollow" target="_blank" href="http://www.typecho.org" class="no-linkTarget">Hexo</a> 強力駆動</li>
    </ul>
  </section>
</aside>
<!-- 工具栏 -->
<div id="helpbar">
<?php if($this->options->DarkMode=='default' || $this->options->DarkMode=='dark'){ ?><button id="light-switch" title="开关灯"><span class="iconfont">&#xe7ac;</span></button><?php } 
if(Utils::isPluginAvailable('ExSearch')) { ?><button class="search-form-input" title="搜索"><span class="iconfont">&#xe82e;</span></button><?php } ?>
</div>