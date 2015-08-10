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
                    <div class="border-right"></div>
                    <div class="top-banner1">
                        <img class="top-bg-body" src="<?php echo get_template_directory_uri() ?>/images-css/block-contact1.jpg">
                        <img class="bottom-bg-body" src="<?php echo get_template_directory_uri() ?>/images-css/block-contact2.jpg">
                    </div>
                    <div class="heighta" >
                        <div class="heightb even-click-close close">
                            <img src="<?php echo get_template_directory_uri() ?>/images-css/contact-tri-angle.png"  class="imga">
                            <img class="imgb" src="<?php echo get_template_directory_uri() ?>/images-css/tri-angle-close.png" >
                        </div>
                    </div>
                    <div class="holicoper">
                        <div class="fan-lg"></div>
                        <div class="fan-sm"></div>
                        <div class="line-pp">
                            <div class="two-people"></div>
                        </div>
                    </div>
                    <div class="block-contact">
                        <form data-ajax="true" action="#" method="post">
                                <div class="block-left">
                                    <div class="wrap-input">
                                        <label><?php _e('Nom'); ?></label>
                                        <input type="text" name="nom" data-requied="true">
                                    </div>
                                    <div class="wrap-input">
                                        <label><?php _e('PRENOM'); ?></label>
                                        <input type="text" name="prenom" data-requied="true">
                                    </div>
                                    <div class="wrap-input">
                                        <label><?php _e('E-MAIL'); ?></label>
                                        <input type="text" name="email" data-type="email">
                                    </div>
                                    <div class="wrap-input">
                                        <label><?php _e('TELEPHONE'); ?></label>
                                        <input type="text" name="telephone" data-type="number">
                                    </div>
                                    <div class="wrap-input code-postal">
                                        <label><?php _e('CODE POSTAL'); ?></label>
                                        <input type="text" name="code_postal" data-type="number">
                                    </div>
                                </div>
                                <div class="block-right">
                                    <label class="title-message"><?php _e('Message'); ?></label>
                                    <textarea name="ms" style="margin-top: 0px; margin-bottom: 0px; height: 177px;">  </textarea>
                                    <input type="submit" class="submit" value="<?php _e('ENVOYER'); ?>"  />
                                </div>
                        </form>
                    </div>
                    <div class="text-1">START ENGINE ( S.A.) 75018 Paris France  SIRET:51222321025 numéro de déclaration d'activité:71300887553 – 01.42.36.65.99 –  www.startengine.partner – contact@startengine.fr</div>
                    <div class="block-social desktop">
                        <a href="#" target="_blank" class="fb"><img src="<?php echo get_template_directory_uri() ?>/images-css/facebook.png" /></a>
                        <a href="#" target="_blank" class="linked"><img src="<?php echo get_template_directory_uri() ?>/images-css/linked.png" /></a>
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
        jQuery(document).ready(function () {
            var currimg = 0;
            //Preload images first 
            jQuery.fn.preload = function () {
                this.each(function () {
                    jQuery('<img/>')[0].src = this;
                });
            }
            var imagesFan = Array(myAjax.themeUrl + "/images/effect/fan1.png",
                    myAjax.themeUrl + "/images/effect/fan2.png",
                    myAjax.themeUrl + "/images/effect/fan3.png"
                    );
            jQuery([imagesFan[0], imagesFan[1], imagesFan[2]]).preload();
            function loadimgFanLarge() {
                jQuery('.fan-lg').animate({opacity: 1}, 50, function () {
                    //finished animating, minifade out and fade new back in           
                    jQuery('.fan-lg').animate({opacity: 1}, 50, function () {
                        currimg++;
                        if (currimg > imagesFan.length - 1) {
                            currimg = 0;
                        }
                        var newimage = imagesFan[currimg];
                        //swap out bg src                
                        jQuery('.fan-lg').css("background-image", "url(" + newimage + ")");
                        //animate fully back in
                        jQuery('.fan-lg').animate({opacity: 1}, 50, function () {
                            //set timer for next
                            setTimeout(loadimgFanLarge, 50);
                        });
                    });
                });
            }
            setTimeout(loadimgFanLarge, 0);
            var currimg1 = 0;
            var imagesFanSm = Array(myAjax.themeUrl + "/images/effect/fan1-sm.png",
                    myAjax.themeUrl + "/images/effect/fan2-sm.png",
                    myAjax.themeUrl + "/images/effect/fan3-sm.png"
                    );
            jQuery([imagesFanSm[0], imagesFanSm[1], imagesFanSm[2]]).preload();
            function loadimgFanSmall() {
                jQuery('.fan-sm').animate({opacity: 1}, 50, function () {
                    //finished animating, minifade out and fade new back in           
                    jQuery('.fan-sm').animate({opacity: 1}, 50, function () {
                        currimg1++;
                        if (currimg1 > imagesFanSm.length - 1) {
                            currimg1 = 0;
                        }
                        var newimage = imagesFanSm[currimg1];
                        //swap out bg src                
                        jQuery('.fan-sm').css("background-image", "url(" + newimage + ")");
                        //animate fully back in
                        jQuery('.fan-sm').animate({opacity: 1}, 50, function () {
                            //set timer for next
                            setTimeout(loadimgFanSmall, 50);
                        });
                    });
                });
            }
            setTimeout(loadimgFanSmall, 0);
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
            jQuery('form').submit(function(){
                    var validate = true;
                    jQuery('form input').removeClass('error');
                    jQuery('form input').each(function(){
                        if(jQuery(this).attr('data-requied') == 'true' ){
                            if(!jQuery(this).val().length){
                                jQuery(this).addClass('error');
                                validate = false;
                            }
                        }
                        if(jQuery(this).attr('data-type') == 'number' ){
                            if(jQuery(this).val().length){
                                if(!IsNumeric(jQuery(this).val())){
                                    jQuery(this).addClass('error');
                                    validate = false;
                                }
                            }
                        }
                        if(jQuery(this).attr('data-type') == 'email' ){
                            if(!IsEmail(jQuery(this).val())){
                                jQuery(this).addClass('error');
                                validate = false;
                            }
                        }
                    })
                    /*Call ajax*/
                    if(validate){
                            jQuery.ajax({
                                        type: "Get",
                                        url: myAjax.ajaxurl,
                                        data: {
                                            action: "sent_mail_contact", 
                                            nom: jQuery('input[name="nom"]').val() , 
                                            prenom : jQuery('input[name="prenom"]').val(),
                                            email : jQuery('input[name="email"]').val() ,
                                            telephone : jQuery('input[name="telephone"]').val() ,
                                            code_postal : jQuery('input[name="code_postal"]').val() ,
                                            ms : jQuery('textarea[name="ms"]').val() },
                                        success: function (html) {
                                            console.log(html);
                                        }
                            })
                    }
                    return false;
            })
        });
        function IsEmail(email) {
            var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            return regex.test(email);
          }
        function IsNumeric(num) {
            return (num >=0 || num < 0);
       }
    </script>
</div>
