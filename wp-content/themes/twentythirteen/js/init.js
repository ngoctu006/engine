/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
jQuery(window).load(function ($) {
    // var widthBody = jQuery('.top-bg-body').width();
    var heightBody = jQuery('.top-banner1').height();
    var heightbottom = jQuery('.bottom-bg-body').height();
    var heightTop = jQuery('.top-bg-body').height();

    jQuery('.border-left').css({'height': heightTop})
    jQuery('.border-right').css({'height': heightTop})
    jQuery('.bg-body').css({'height': heightBody})
    jQuery('.heightb').css({'height': heightbottom})
    jQuery('.imga').css({'height': '70%'})
})
jQuery(window).resize(function () {
    // console.log('debug')
    // 	var widthBody = jQuery('.top-bg-body').width();
    // 	var heightBody = jQuery('.bottom-bg-body').width();
    // 	jQuery('.bg-body').css({'width': widthBody,'height': heightBody })
    jQuery('.imga').css({'height': 0})
    var heightBody = jQuery('.top-banner1').height();
    jQuery('.bg-body').css({'height': heightBody})
    var heightbottom = jQuery('.bottom-bg-body').height();
    jQuery('.heightb').css({'height': heightbottom})
    var heightTop = jQuery('.top-bg-body').height();
    jQuery('.border-left').css({'height': heightTop})
    jQuery('.border-right').css({'height': heightTop})
    setTimeout(function () {
        jQuery('.imga').css({'height': '70%'})
    }, 1000)
});
jQuery(document).ready(function ($) {
    $('.click-ajax').click(function (e) {
        e.preventDefault();
        $.ajax({
            type: "Get",
            url: myAjax.ajaxurl,
            data: {action: "load_template_page", page_title: myAjax.linkCategory},
            success: function (html) {
                console.log(html);
                $('body').fadeOut(1000, function () {
                    $('body').fadeIn(0, function () {
                        $('body').html(html);
                        $('#menu-main-menu li:first-child').addClass('active');
                    })
                });
            }
        })
    })
    /*function click button next page*/
    $('.link-right').click(function(){
        $(this,'link-left').addClass('disable');
        if($(this).hasClass('active')){
            return;
        }
        var title = jQuery('#menu-main-menu li.active').next().find('a').text();
    })
})