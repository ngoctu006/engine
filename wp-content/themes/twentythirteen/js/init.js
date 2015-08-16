/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
jQuery(window).load(function ($) {
    reponsiveHeight();
    callAjax();
})
jQuery(window).resize(function () {
    // console.log('debug')
    // 	var widthBody = jQuery('.top-bg-body').width();
    // 	var heightBody = jQuery('.bottom-bg-body').width();
    // 	jQuery('.bg-body').css({'width': widthBody,'height': heightBody })
    jQuery('.imga').css({'height': 0})
//    jQuery('.tri-angle').css({'height': 0})
    var heightBody = jQuery('.top-banner1').height();
    jQuery('.bg-body').css({'height': heightBody})
    var heightbottom = jQuery('.bottom-bg-body').height();
    var heightTop = jQuery('.top-bg-body').height();
    var windowHeight = jQuery(window).height();
    jQuery('.wrap-container-1').css({'height': windowHeight})
    jQuery('.heightb').css({'height': heightbottom})
//    jQuery('.tri-angle').css({'height': heightbottom})
    var heightTop = jQuery('.top-bg-body').height();
    jQuery('.border-left').css({'height': heightTop})
    jQuery('.border-right').css({'height': heightTop})
    setTimeout(function () {
        jQuery('.imga').css({'height': '70%'})
//        jQuery('.tri-angle img').css({'height': '100%'})
    }, 1000)
});
jQuery(document).ready(function () {
    jQuery('.click-ajax').click(function (e) {
        e.preventDefault();
        var currimg = 0;
        //Preload images first 
        jQuery.fn.preload = function () {
            this.each(function () {
                jQuery('<img/>')[0].src = this;
            });
        }
        var imagesButton = Array(myAjax.themeUrl+"/images/effect/button1.png",
                            myAjax.themeUrl+"/images/effect/button2.png",
                            myAjax.themeUrl+"/images/effect/button3.png");
        jQuery([imagesButton[0], imagesButton[1], imagesButton[2]]).preload();
        function ButtonEngine() {
            jQuery('.button-start-engine').animate({opacity: 1}, 100, function () {
                //finished animating, minifade out and fade new back in           
                jQuery('.button-start-engine').animate({opacity: 1}, 100, function () {
                    currimg++;
                    if (currimg == 3 ) {
                        jQuery('.button-start-engine').css("background-image", "url(" + imagesButton[0] + ")");
                                jQuery('.wrap-container').addClass('remove');
                                setTimeout(function () {
                                    jQuery.ajax({
                                        type: "Get",
                                        url: myAjax.ajaxurl,
                                        data: {action: "load_template_page", page_title: myAjax.linkCategory},
                                        success: function (html) {
                                            jQuery('body').append(html)
                                            jQuery(".wrap-container.animate").animate({
                                                left: 0,
                                            }, 2000, function () {
                                                jQuery('body').find('div.remove').remove();
                                                jQuery('#menu-main-menu li:first-child').addClass('active');
                                                callAjax();
                                                history.pushState('data', '', jQuery('#menu-main-menu li:first-child a').attr('href'));
                                                editUrlMultilang();
                                                reponsiveHeight();
                                            });
                                        }
                                    })
                                }, 1000)
                                return false;
                    }
                    var newimage = imagesButton[currimg];
                    //swap out bg src                
                    jQuery('.button-start-engine').css("background-image", "url(" + newimage + ")");
                    //animate fully back in
                    jQuery('.button-start-engine').animate({opacity: 1}, 100, function () {
                        //set timer for next
                        setTimeout(ButtonEngine, 100);
                    });
                });
            });
         }
    setTimeout(ButtonEngine, 50);
    


    })

})
jQuery(document).ready(function () {
        var currimg = 0;
        //Preload images first 
        jQuery.fn.preload = function () {
            this.each(function () {
                jQuery('<img/>')[0].src = this;
            });
        }
        var imagesSmoke = Array(myAjax.themeUrl+"/images/effect/smoke1.png",
                            myAjax.themeUrl+"/images/effect/smoke2.png",
                            myAjax.themeUrl+"/images/effect/smoke3.png",
                            myAjax.themeUrl+"/images/effect/smoke4.png",
                            myAjax.themeUrl+"/images/effect/smoke5.png");
        jQuery([imagesSmoke[0], imagesSmoke[1], imagesSmoke[2], imagesSmoke[3],imagesSmoke[4],imagesSmoke[5]]).preload();
        function loadimgSmoke() {
            jQuery('.smoke').animate({opacity: 1}, 50, function () {
                //finished animating, minifade out and fade new back in           
                jQuery('.smoke').animate({opacity: 1}, 50, function () {
                    currimg++;
                    if (currimg > imagesSmoke.length - 1) {
                        currimg = 0;
                    }
                    var newimage = imagesSmoke[currimg];
                    //swap out bg src                
                    jQuery('.smoke').css("background-image", "url(" + newimage + ")");
                    //animate fully back in
                    jQuery('.smoke').animate({opacity: 1}, 50, function () {
                        //set timer for next
                        setTimeout(loadimgSmoke, 50);
                    });
                });
            });
         }
        setTimeout(loadimgSmoke, 50);
});

function reponsiveHeight(){
       // var widthBody = jQuery('.top-bg-body').width();
        var heightBody = jQuery('.top-banner1').height();
        var heightbottom = jQuery('.bottom-bg-body').height();
        var heightTop = jQuery('.top-bg-body').height();
        var windowHeight = jQuery(window).height();
        jQuery('.wrap-container-1').css({'height': heightTop + heightbottom + 255})
        jQuery('.home .wrap-container-1').css({'height': windowHeight})
//        jQuery('.tri-angle').css({'height': 0})
        jQuery('.border-left').css({'height': heightTop})
        jQuery('.border-right').css({'height': heightTop})
        jQuery('.bg-body').css({'height': heightBody})
        jQuery('.heightb').css({'height': heightbottom})
//        jQuery('.tri-angle').css({'height': heightbottom})
//        jQuery('.tri-angle img').css({'height': '100%'})
        jQuery('.imga').css({'height': '70%'})     
}
function callAjax() {
    jQuery(".link-right").live("click", function () {
        var title = '';    
        if (jQuery(this).hasClass('disable')) {
            return;
        }
        jQuery('.link-right', '.link-left').removeClass('disable');
        jQuery('.wrap-container').addClass('remove');
        if (!jQuery('#menu-main-menu li.active').next().length) {
            title = jQuery('.wrap-container.remove #menu-main-menu li:first-child').find('a').text();
        } else {
            title = jQuery('.wrap-container.remove #menu-main-menu li.active').next().find('a').text();
        }
        jQuery('#menu-main-menu li').removeClass('active')
        jQuery.ajax({
            type: "Get",
            url: myAjax.ajaxurl,
            data: {action: "load_template_page", page_title: title},
            success: function (html) {
                jQuery('body').append(html)
                jQuery(".wrap-container.animate").animate({
                    left: 0,
                }, 4000, function () {
                    jQuery('body').find('div.remove').remove();
                    jQuery('#menu-main-menu li').each(function () {
                        if (jQuery(this).find('a').text() == title) {
                            jQuery(this).addClass('active');
                        }
                        history.pushState('data', '', jQuery(this).find('a').attr('href'));
                        editUrlMultilang();
                    })
                    
                });
                jQuery('.link-right', '.link-left').removeClass('disable');
                reponsiveHeight();
            }
        })
    });
    jQuery(".link-left").live("click", function () {
        var title = '';
        if (jQuery(this).hasClass('disable')) {
            return;
        }
        jQuery('.link-right', '.link-left').addClass('disable');
        jQuery('.wrap-container').addClass('remove');
        if (!jQuery('#menu-main-menu li.active').prev().length) {
            title = jQuery('.wrap-container.remove #menu-main-menu li:last-child').find('a').text();
            href = jQuery('.wrap-container.remove #menu-main-menu li:last-child').find('a').attr('href');
        } else {
            title = jQuery('.wrap-container.remove li.active').prev().find('a').text();
            href = jQuery('.wrap-container.remove li.active').prev().find('a').attr('href');
        }
        jQuery('#menu-main-menu li').removeClass('active')
        jQuery.ajax({
            type: "Get",
            url: myAjax.ajaxurl,
            data: {action: "load_template_page", page_title: title},
            success: function (html) {
                jQuery('body').append(html)
                jQuery(".wrap-container.animate").animate({
                    left: 0,
                }, 2000, function () {
                    jQuery('body').find('div.remove').remove();
                    jQuery('#menu-main-menu li').each(function () {
                        if (jQuery(this).find('a').text() == title) {
                            jQuery(this).addClass('active');
                        }
                        history.pushState('data', '', href);
                        editUrlMultilang()
                    })
                });
                jQuery('.link-right', '.link-left').removeClass('disable');
            }
        })
    });
    jQuery('ul#menu-main-menu li a').live("click", function (e) {
        e.preventDefault();
        if (jQuery(this).parent().hasClass('disable') || jQuery(this).parent().hasClass('active')) {
            return;
        }
        jQuery('.wrap-container').addClass('remove');
        jQuery('ul#menu-main-menu li').removeClass('active')
        jQuery(this).parent().addClass('active');
        jQuery('ul#menu-main-menu li').addClass('disable')
        jQuery('link-left', 'link-right').addClass('disable');
        var title = jQuery(this).text();
        var href = jQuery(this).attr('href');
        jQuery('#menu-main-menu li').removeClass('active')
        jQuery.ajax({
            type: "Get",
            url: myAjax.ajaxurl,
            data: {action: "load_template_page", page_title: title},
            success: function (html) {
                jQuery('body').append(html)
                jQuery(".wrap-container.animate").animate({
                    left: 0,
                }, 2000, function () {
                    jQuery('body').find('div.remove').remove();
                    jQuery('#menu-main-menu li').each(function () {
                        if (jQuery(this).find('a').text() == title) {
                            jQuery(this).addClass('active');
                             
                        }
                    })
                    jQuery('.link-right', '.link-left').removeClass('disable');
                    jQuery('ul#menu-main-menu li').removeClass('disable')
                    history.pushState('data', '', href);
                    editUrlMultilang(href)
//                    jQuery('.ct-marque').marquee();
//                    jQuery('.ct-marque *').css('opacity',1);
                });
                reponsiveHeight();
               
            }
        })
    });
}
function editUrlMultilang(url){
    var pathname = myAjax.home_url;
    var arrayPathName = url.split('/');
    var arrayPathName = url.split('/');
    jQuery('.qtranxs_language_chooser li a').each(function(){
        var lang = jQuery(this).attr('hreflang');
        var pullpath = pathname+'/'+lang+'/'+arrayPathName[arrayPathName.length-2];
        jQuery(this).attr('href',pullpath);
    })
}