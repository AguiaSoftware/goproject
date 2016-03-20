$(document).ready(function () {

	$( ".input-top-search" ).click(function() {
		$( ".top-search" ).removeClass( "bg-blue-600" ).addClass( "click-input-top-search" );
		$( ".navbar-brand-text" ).removeClass( "title-top" ).addClass( "click-title-top" );
		$(".content-list").css("display", "block");
	});

	$( "#teste" ).click(function() {
		$( ".top-search" ).removeClass( "click-input-top-search" ).addClass( "bg-blue-600" );
		$( ".navbar-brand-text" ).removeClass( "click-title-top" ).addClass( "title-top" );
		$(".content-list").css("display", "none");
	});

});
