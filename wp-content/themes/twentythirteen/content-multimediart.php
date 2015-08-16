<div class="wrap-container animate" <?php if($ajax): echo 'style="left:100%"';   endif; ?>>
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
                    <div class="top-shadown">
                        <img src="<?php echo home_url() ?>/image/shadow-above.png" />
                    </div>
                    <div class="top-banner1">
                        <img class="top-bg-body" src="<?php echo get_template_directory_uri() ?>/images-css/bg1.png">
                        <img class="bottom-bg-body" src="<?php echo get_template_directory_uri() ?>/images-css/bg2.png">
                    </div>
                    <div class="wrap-marque">
                        <div class="left-marque">
                            <div class="right-marque">
                                <div class="ct-marque">
                                    <?php echo get_field('marquee', $page->ID); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="wrap-art">
                        <div class="cl-left m1">
                            <div class="column-1">
                                <img src="http://localhost/engine/wp-content/themes/twentythirteen/images-css/art1.png" />
                                <div class="bird-right-left"><div class="bird"></div></div>
                            </div>
                        </div>
                        <div class="cl-left m2">
                            <div class="column-2">
                                <img src="<?php echo get_template_directory_uri() ?>/images-css/naked.jpg" />
                            </div>
                        </div>
                        <div class="cl-left m3">
                            <div class="column-3">
                                <div class="bg-color-while">
                                    <ul>
                                        <li><img src="<?php echo get_template_directory_uri() ?>/images-css/art2.png" /></li>
                                        <li><img src="<?php echo get_template_directory_uri() ?>/images-css/art3.png" /></li>
                                        <li><img src="<?php echo get_template_directory_uri() ?>/images-css/art-4.png" /></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="cl-left m4">
                            <div class="column-4">
                                <div class="bg-color-while list-left">
                                    <ul>
                                        <li><img src="<?php echo get_template_directory_uri() ?>/images-css/art5.png" /></li>
                                        <li><img src="<?php echo get_template_directory_uri() ?>/images-css/art6.png" /></li>
                                        <li><img src="<?php echo get_template_directory_uri() ?>/images-css/art7.png" /></li>
                                        <li><img src="<?php echo get_template_directory_uri() ?>/images-css/art8.png" /></li>
                                        <li><img src="<?php echo get_template_directory_uri() ?>/images-css/art9.png" /></li>
                                    </ul>                          
                                </div>
                            </div>
                        </div>      
                    </div>
                    <div class="heighta" >
                        <div class="heightb">
                            <img src="<?php echo get_template_directory_uri() ?>/images-css/MultimediArt-tri-angle.png"  class="imga">
                            <img class="imgb" src="<?php echo get_template_directory_uri() ?>/images-css/tri-angle-close.png" >
                        </div>
                    </div>
                    <div class="tri-angle">
                        <img src="<?php echo home_url() ?>/image/2.png">
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
    <script type='text/javascript' src='<?php echo get_template_directory_uri() ?>/js/jquery.marquee.min.js'></script>
    <?php
        if(!$ajax){
            echo "<script>jQuery('.ct-marque').marquee()</script>";
        }
    ?>
    <script type="text/javascript">
        jQuery(document).ready(function ($) {
            jQuery('.bird-right-left').click(function(){
            var currimg = 0;
            //Preload images first 
            jQuery.fn.preload = function () {
                this.each(function () {
                    jQuery('<img/>')[0].src = this;
                });
            }
            var imagesBird = Array(
                                myAjax.themeUrl + "/images/effect/bird1.png",
                                myAjax.themeUrl + "/images/effect/bird2.png"
                                );
            jQuery([imagesBird[0], imagesBird[1]]).preload();
            function loadimgBird() {
                jQuery('.bird').animate({opacity: 1}, 20, function () {
                    //finished animating, minifade out and fade new back in           
                    jQuery('.bird').animate({opacity: 1}, 20, function () {
                        currimg++;
                        if (currimg > imagesBird.length - 1) {
                            currimg = 0;
                        }
                        var newimage = imagesBird[currimg];
                        //swap out bg src                
                        jQuery('.bird').css("background-image", "url(" + newimage + ")");
                        //animate fully back in
                        jQuery('.bird').animate({opacity: 1}, 20, function () {
                            //set timer for next
                            setTimeout(loadimgBird, 20);
                        });
                    });
                });
            }
            setTimeout(loadimgBird,0);
                jQuery('.bird-right-left').animate({top:'-100px' ,right: '200%'},10000,function(){})

            })
          
        })
    </script>
</div>
