(function($) {
	var topSection = $(".top-section");
	// var spcNew = $("<div class='spc-new'><div>");
	// topSection.append(spcNew);

	var spcNew = jQuery('<div/>', {
		"class": 'container-fluid spc-new'
	})
	.appendTo(topSection)
	.append("<div class='fluid-container spc-new-container'>"
		+ "<div class='spc-new-middle container'>"
		+	"<div class='col-xs-6 text-left'><span class='spc-new-prev'></span></div>"
		+	"<div class='col-xs-6 text-right'><span class='spc-new-next'></span></div>"
		+ "</div> </div>");

	var prev = spcNew.find(".spc-new-prev");
	var next = spcNew.find(".spc-new-next");

	prev.click(function() {
		$( ".flex-prev" ).trigger( "click" );
	})
	next.click(function() {
		$( ".flex-next" ).trigger( "click" );
	})

})(jQuery)