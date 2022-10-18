<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('includes/header.php'); ?>
    <div class="error-page">
        <object class="error-img" data="<?php Utils::indexTheme('assets/404.png'); ?>" type="image/png"></object>
        <div class="error-info">
            <h1 class="error-404">404</h1>
            <h2 class="error-title">数据传输失败……</h2>
            <p>可能原因：</p>
            <p>1、水逆。</p>
            <a href="<?php Utils::indexHome() ?>">返回首页</a>
        </div>
    </div>
<?php $this->need('includes/footer.php'); ?>
