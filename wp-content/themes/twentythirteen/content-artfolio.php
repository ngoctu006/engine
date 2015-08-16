<div class="wrap-container animate artfolio" <?php if($ajax): echo 'style="left:100%"';   endif; ?>>
    <div class="wrap-container-1">
        <header id="masthead" class="site-header" role="banner">
            <div class="wrap-header">
                <div class="container">
                    <a class="home-link hide-mobile" href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home">
                        <img src="<?php echo get_template_directory_uri() ?>/images-css/logo.png" />
                    </a>
                    <?php wp_nav_menu(array('menu' => 'main-menu', 'menu_class' => 'menu',)); ?>
                    <div class="hide-mobile">
                        <?php 
                            if(is_active_sidebar( 'sidebar-header')){
                                dynamic_sidebar( 'sidebar-header' );
                            }
                        ?>
                    </div>
                </div>
            </div>
        </header>
        <div id="main" class="site-main">
            <div class="container">
                <div class="bg-body">
                    <img src="<?php echo get_template_directory_uri() ?>/images-css/box-left.jpg" class="border-left" />
                    <img src="<?php echo get_template_directory_uri() ?>/images-css/box-right.jpg" class="border-right" />
                    <div class="border-right"></div>
                    <div class="top-banner1">
                        <img class="top-bg-body" src="<?php echo get_template_directory_uri() ?>/images-css/Start-Engine-Contact_03.jpg">
                        <img class="bottom-bg-body" src="<?php echo get_template_directory_uri() ?>/images-css/Start-Engine-Contact_05.jpg">
                    </div>
                    <div class="heighta" >
                        <div class="heightb">
                            <img src="<?php echo get_template_directory_uri() ?>/images-css/tri-angle-open1.png"  class="imga">
                            <img class="imgb" src="<?php echo get_template_directory_uri() ?>/images-css/tri-angle-close.png" >
                        </div>
                    </div>
                    <div class="hide-mobile">
                        <button class="link-left">
                            <img src="<?php echo get_template_directory_uri() ?>/images-css/left.png" />
                        </button>
                        <button class="link-right">
                            <img src="<?php echo get_template_directory_uri() ?>/images-css/right.png" />
                        </button>
                    </div>
                </div>
            </div>
        </div>
         <?php 
                    echo '<ul class="wrap-content-mobile hide-desktop">';
                        echo '<li class="block-content">';
                        echo '<h2>' .$page->post_title.'</h2>';
                        echo '<div class="content-mobile">' .apply_filters('the_content', $page->post_content).'</div>';
                        echo '</li>';
                    echo '</ul>';

                wp_reset_postdata();
            ?>
            <footer class="hide-desktop">
                <div class="wrap-social-mobile">
                    <a href="#" class="fb" target="_blank">
                        <img src="<?php echo get_template_directory_uri() ?>/images/fb-mobile.png" />
                    </a>
                    <a href="#" class="in" target="_blank">
                        <img src="<?php echo get_template_directory_uri() ?>/images/in-mobile.png" />
                    </a>
                </div>
                <div class="copy-right">
                    <?php get_sidebar('footer') ?>
                </div>
            </footer>
    </div>
</div>