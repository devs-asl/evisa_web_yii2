$(document).ready(function() {
	$(".bd-map-container").on({ 
	    mouseenter: function() { 
	    	let id = $(this).attr("id");
	    	console.log(id);   	

	    	var className = $(this).attr("class");
	    	console.log(className);

	    	// let className = $(this).attr("class");
	    	// console.log(className);
			
			$(".bd-map-sprite.sprite-img").stop(true, true).fadeOut();

			$(".bd-map-sprite.sprite-img." + id).stop(true, true).fadeIn();
	    }, 
	    mouseleave: function() { 
			$(".bd-map-sprite.sprite-img").stop(true, true).fadeOut();
	    } 
	}, ".st0");

	//$(".st0").on("click", function(){
		/**/
	$(".bd-map-container").on("click", ".st0", function(){
		// alert(1);
		$("#bd-map-modal").modal("show");
	});	/**/
});

