$(document).ready(function(e){
	$(".testimonial_read_more").click(function(e) {
		var target = $(this).attr("data-target");
		console.log(target);
		e.preventDefault();
		
		$(target).lightbox_me({
			centered: true	
				    });
	});
	
	$(".lightbox_close").click(function(e) {
		$target = $(this).parent();
		$target.trigger('close');
	});
	
	
});

/* $(target).dialog({  
//open: function(event, ui) { $(".ui-dialog-titlebar-close").hide(); },
modal: true,
width:800,
});

//$(target).dialog();*/
