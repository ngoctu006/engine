jQuery(window).load(function($){
	// var widthBody = jQuery('.top-bg-body').width();
	var heightBody = jQuery('.top-banner1').height();
	var heightbottom= jQuery('.bottom-bg-body').height();
	var heightTop= jQuery('.top-bg-body').height();

	jQuery('.border-left').css({'height': heightTop})
	jQuery('.border-right').css({'height': heightTop})
	jQuery('.bg-body').css({'height': heightBody})
	jQuery('.heightb').css({'height': heightbottom})
	jQuery('.tri-angle').css({'height': heightbottom})
	jQuery('.imga').css({'height': '70%'})
})
	jQuery( window ).resize(function() {
		// console.log('debug')
		// 	var widthBody = jQuery('.top-bg-body').width();
		// 	var heightBody = jQuery('.bottom-bg-body').width();
		// 	jQuery('.bg-body').css({'width': widthBody,'height': heightBody })
		    jQuery('.imga').css({'height': 0 })
		    jQuery('.tri-angle img').css({'height': 0 })
			var heightBody = jQuery('.top-banner1').height();
			jQuery('.bg-body').css({'height': heightBody})
			var heightbottom= jQuery('.bottom-bg-body').height();
			jQuery('.heightb').css({'height': heightbottom})
			jQuery('.tri-angle').css({'height': heightbottom})
			var heightTop= jQuery('.top-bg-body').height();
			jQuery('.border-left').css({'height': heightTop})
			jQuery('.border-right').css({'height': heightTop})
			setTimeout(function(){
				jQuery('.imga').css({'height': '70%'})
				jQuery('.tri-angle img').css({'height': '100%'})
			},1000)
	});