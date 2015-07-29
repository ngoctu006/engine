<header id="masthead" class="site-header" role="banner">
    <div class="wrap-header">
        <div class="container">
            <a class="home-link" href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home">
                <img src="<?php echo get_template_directory_uri() ?>/images-css/logo.png" />
            </a>
            <?php wp_nav_menu(array('menu' => 'main-menu', 'menu_class' => 'menu',)); ?>
        </div>
    </div>
</header>
<div id="main" class="site-main">
    <div class="container">
        <div class="bg-body">
            <div class="top-banner1">
                <img class="top-bg-body" src="<?php echo get_template_directory_uri() ?>/images-css/Start-Engine-Consultants_02.jpg">
                <img class="bottom-bg-body" src="<?php echo get_template_directory_uri() ?>/images-css/Start-Engine-Consultants_03.jpg">
            </div>
            <div class="heighta" >
                <div class="heightb">
                    <img src="<?php echo get_template_directory_uri() ?>/images-css/tri-angle-open1.png"  class="imga">
                    <img class="imgb" src="<?php echo get_template_directory_uri() ?>/images-css/tri-angle-close.png" >
                </div>
            </div>
            <button class="link-left">
                <img src="<?php echo get_template_directory_uri() ?>/images-css/left.png" />
           </button>
            <button class="link-right">
                <img src="<?php echo get_template_directory_uri() ?>/images-css/right.png" />
           </button>            
        </div>
    </div>
</div>