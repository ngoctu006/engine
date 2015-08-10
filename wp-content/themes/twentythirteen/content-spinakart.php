<div class="wrap-container animate" style="left:100%">
    <div class="wrap-container-1">
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
                        <img class="top-bg-body" src="<?php echo get_template_directory_uri() ?>/images-css/star-pain1_03.png">
                        <img class="bottom-bg-body" src="<?php echo get_template_directory_uri() ?>/images-css/star-pain1_04.png">
                    </div>
                    <div class="wrap-border even-change-picture" data-picture="1">
                        <div class="top-border">
                            <div class="bottom-border">
                                <div class="center-border">
                                    <img src="<?php echo get_field('large_image_1', $page->ID); ?>" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="wrap-border even-change-picture" data-picture="2">
                        <div class="top-border">
                            <div class="bottom-border">
                                <div class="center-border">
                                    <img src="<?php echo get_field('large_image_2', $page->ID); ?>" />
                                </div>
                            </div>
                        </div>
                    </div> 
                    <div class="bg-stone even-change-picture" data-picture="3">
                        <img src="<?php echo get_field('large_image_3', $page->ID); ?>" />
                    </div> 
                    <div class="list-board1">
                        <div class="board-detail">
                            <div class="sail"></div>
                            <div class="sail-color-1" data-picture-color="1" style="background-image: url(<?php echo get_field('small_image_1', $page->ID);  ?>)"></div>
                            <div class="board"></div>
                        </div>
                        <div class="board-detail">
                            <div class="sail"></div>
                            <div class="sail-color-2" style="background-image: url(<?php echo get_field('small_image_2', $page->ID);  ?>)"></div>
                            <div class="board"></div>
                        </div>
                        <div class="board-detail" data-picture-color="3" >
                            <div class="sail"></div>
                            <div class="sail-color-3" style="background-image: url(<?php echo get_field('small_image_3', $page->ID);  ?>)"></div>
                            <div class="board"></div>
                        </div>
                    </div>            
                    <div class="heighta" >
                        <div class="heightb">
                            <img src="<?php echo get_template_directory_uri() ?>/images-css/floaties.png"  class="imga">
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
    </div>
    <script>
    jQuery(document).ready(function(){
        jQuery('.even-change-picture').click(function(){
            if(jQuery(this).hasClass('active')){
              return;
            }
            jQuery(this).addClass('active')
            var idPicture = jQuery(this).attr('data-picture');
            jQuery('.list-board1 .board-detail').each(function(){
              jQuery(this).find('div.sail-color-'+idPicture).css('opacity',1)
            })
         })
    })
    </script>
</div>
