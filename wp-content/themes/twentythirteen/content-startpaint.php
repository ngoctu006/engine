<div class="wrap-container animate START_PAINT" <?php if($ajax): echo 'style="left:100%"';   endif; ?>>
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
                    <div class="overfow-body-hidden">
                        <div class="top-banner1">
                            <img class="top-bg-body" src="<?php echo get_template_directory_uri() ?>/images-css/bg1.png">
                            <img class="bottom-bg-body" src="<?php echo get_template_directory_uri() ?>/images-css/bg2.png">
                        </div>

                        <div class="wrap-list-images">
                            <div class="wrap-image-1">
                                <img src="<?php echo get_field('image1', $page->ID); ?>" />
                                <div class="bg-shadow"></div>
                            </div>
                            <div class="wrap-image-1">
                                <img src="<?php echo get_field('image2', $page->ID); ?>" />
                                <div class="bg-shadow"></div>
                            </div>             
                            <div class="wrap-image-1">
                                <img src="<?php echo get_field('image3', $page->ID); ?>" />
                                <div class="bg-shadow"></div>
                            </div>           
                            <div class="wrap-image-1">
                                <img src="<?php echo get_field('image3', $page->ID); ?>" />
                                <div class="bg-shadow"></div>
                            </div>                               
                        </div>
                        <div class="wrap-running">
                            <div class="left-to-right">
                                <div class="running-man"></div>
                            </div>
                        </div>
                        <div class="tri-angle">
                            <img src="<?php echo home_url() ?>/image/2.png">
                        </div>
                    </div>
                    <div class="heighta" >
                        <div class="heightb even-click-close close">
                            <img src="<?php echo get_template_directory_uri() ?>/images-css/pain-tri-angle.png"  class="imga">
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
            <?php 
                    echo '<ul class="wrap-content-mobile hide-desktop">';
                        echo '<li class="block-content">';
                        echo '<h2>' .$page->post_title.'</h2>';
                        echo '<div class="content-mobile">' .apply_filters('the_content', $page->post_content).'</div>';
                        echo '</li>';
                    echo '</ul>';
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
            var currimg = 0;
            //Preload images first 
            jQuery.fn.preload = function () {
                this.each(function () {
                    jQuery('<img/>')[0].src = this;
                });
            }
            var imagesRunMan = Array(
                    myAjax.themeUrl + "/images/effect/running-man1.png",
                    myAjax.themeUrl + "/images/effect/running-man2.png",
                    myAjax.themeUrl + "/images/effect/running-man3.png"
                    );
            jQuery([imagesRunMan[0], imagesRunMan[1],imagesRunMan[2]]).preload();
            function loadimgRunningMan() {
                jQuery('.running-man').animate({opacity: 1}, 20, function () {
                    //finished animating, minifade out and fade new back in           
                    jQuery('.running-man').animate({opacity: 1}, 20, function () {
                        currimg++;
                        if (currimg > imagesRunMan.length - 1) {
                            currimg = 0;
                        }
                        var newimage = imagesRunMan[currimg];
                        //swap out bg src                
                        jQuery('.running-man').css("background-image", "url(" + newimage + ")");
                        //animate fully back in
                        jQuery('.running-man').animate({opacity: 1}, 20, function () {
                            //set timer for next
                            setTimeout(loadimgRunningMan, 20);
                        });
                    });
                });
            }
             setTimeout(loadimgRunningMan, 20);
             jQuery('.left-to-right').animate({
                 left : '-50%',
                 left : '150%'
             },15000,function(){
                  jQuery('.left-to-right').addClass('hiden');
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