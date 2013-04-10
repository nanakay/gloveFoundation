// DEMO ONLY
var style_toggle = "closed";

$(document).ready(function() { 
    
	$(".style_picker_toggle").click(function(){
		if(style_toggle == "closed"){
			$("#style_picker").stop(true, true).animate({left : "0px"}, 300, "linear", function(){
				style_toggle = "open";
				$(".style_picker_toggle").addClass("style_picker_toggle_open");
			});
		};
		if(style_toggle == "open"){
			$("#style_picker").stop(true, true).animate({left : "-121px"}, 300, "linear", function(){
				style_toggle = "closed";
				$(".style_picker_toggle").removeClass("style_picker_toggle_open");
			});
		};
		return false;
    });

	// Drop Down Menu
	$('ul#main-menu').superfish({ 
        delay:       600,
        animation:   {opacity:'show',height:'show'},
        speed:       'fast',
        autoArrows:  true,
        dropShadows: false
    });

	// Accordion
	$( ".accordion" ).accordion( { autoHeight: false } );

	// Toggle
	$( ".toggle > .inner" ).hide();
	$(".toggle .title").toggle(function(){
		$(this).addClass("active").closest('.toggle').find('.inner').slideDown(200, 'easeOutCirc');
	}, function () {
		$(this).removeClass("active").closest('.toggle').find('.inner').slideUp(200, 'easeOutCirc');
	});

	// Tabs
	$(function() {
		$( "#tabs" ).tabs();
	});
	
	// Gallery Hover Effect
	jQuery(".gallery-item .gallery-thumbnail .zoom-wrapper").hover(function(){		
		jQuery(this).animate({ opacity: 1 }, 300);
	}, function(){
		jQuery(this).animate({ opacity: 0 }, 300);
	});
	
	// PrettyPhoto
	$(document).ready(function(){
		$("a[rel^='prettyPhoto']").prettyPhoto();
	});
	
	// Slides Loader
	$("#slides").removeClass("slide-loader");
	
	// Mobile Menu

	// Create the dropdown base
	$("<select />").appendTo("#main-menu-wrapper");
      
	// Create default option "Go to..."
	$("<option />", {
		"selected": "selected",
		"value"   : "",
		"text"    : "Go to..."
	}).appendTo("#main-menu-wrapper select");
      
	// Populate dropdown with menu items
	$("#main-menu a").each(function() {
		var el = $(this);
		$("<option />", {
			"value"   : el.attr("href"),
			"text"    : el.text()
		}).appendTo("#main-menu-wrapper select");
	});
	
	// To make dropdown actually work
	$("#main-menu-wrapper select").change(function() {
		window.location = $(this).find("option:selected").val();
	});
	
});

// Slider
$(window).load(function(){
  $('.slider').flexslider({
    animation: "slide",
	controlNav: false
  });
});

jQuery(document).ready(function() {
    jQuery('#mycarousel').jcarousel();
});