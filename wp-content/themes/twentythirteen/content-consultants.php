<div class="wrap-container animate" style="left:100%">
    <div class="wrap-container-1">
        <header id="masthead" class="site-header" role="banner">
            <div class="wrap-header">
                <div class="container">
                    <a class="home-link hide-mobile" href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home">
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
                        <img class="top-bg-body" src="<?php echo get_template_directory_uri() ?>/images-css/Start-Engine-Consultants_02.png">
                        <img class="bottom-bg-body" src="<?php echo get_template_directory_uri() ?>/images-css/Start-Engine-Consultants_03.png">
                    </div>
                    <div class="heighta" >
                        <div class="heightb even-click-close close">
                            <img src="<?php echo get_template_directory_uri() ?>/images-css/consutants-tri-angle-close.png"  class="imga">
                            <img class="imgb" src="<?php echo get_template_directory_uri() ?>/images-css/consutants-tri-angle.png" >
                        </div>
                    </div>
                    <?php
                    $obj = get_category_by_slug('consultants');
                    if (is_object($obj)) {
                        $args = array('cat' => $obj->term_id, 'posts_per_page' => 5);
                        // The Query
                        $the_query = new WP_Query($args);
                        // The Loop
                        if ($the_query->have_posts()) {
                            echo '<div class="wrap-list-content">';
                            while ($the_query->have_posts()) {
                                $the_query->the_post();
                                echo '<div data-id="' . get_the_ID() . '" class="block-content" id="the_content_' . get_the_ID() . '">';
                                echo '<div class="wrap-title" id="content_' . get_the_ID() . '"><h2>' . get_the_title() . '</h2></div>';
                                echo '<div class="wrap-content hide-mobile">' . get_the_content() . '</div>';
                                echo '</div>';
                            }
                            echo '</div>';
                        } else {
                            // no posts found
                        }
                        
                        /* Restore original Post Data */
                        
                    }
                    ?>
 
                    <div class="hide-mobile">
                        <button class="link-left">
                            <img src="<?php echo get_template_directory_uri() ?>/images-css/left.png" />
                        </button>
                        <button class="link-right">
                            <img src="<?php echo get_template_directory_uri() ?>/images-css/right.png" />
                        </button>
                    </div>
                </div>
            <?php 
                if ($the_query->have_posts()) {
                    $i = 0;
                    echo '<ul class="wrap-content-mobile hide-desktop">';
                    while ($the_query->have_posts()) {
                        $the_query->the_post();
                        echo '<li class="block-content '.(($i==0) ? "show" : "hide").'" id="content_mobile_' . get_the_ID() . '">';
                        echo '<h2>' . get_the_title() . '</h2>';
                        echo '<div class="content-mobile">' . get_the_content() . '</div>';
                        echo '</li>';
                        $i++;
                    }
                    echo '</ul>';
                } else {
                    // no posts found
                }
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
    <script>
        jQuery(document).ready(function () {
            jQuery('.block-content').hover(function () {
                jQuery(this).find('div.wrap-content').show();
            }, function () {
                jQuery('div.wrap-content').hide();
            })
            jQuery('.even-click-close').click(function(){
                if(jQuery(this).hasClass('close')){
                  jQuery(this).removeClass('close');
                  jQuery(this).addClass('open');
                  jQuery('.imgb').animate({left:'85%'},3000,function(){})
                }else{
                  jQuery(this).addClass('close')
                  jQuery(this).removeClass('open')
                  jQuery('.imgb').animate({left:0},3000,function(){})
                }
             })
        })
    </script>
</div>