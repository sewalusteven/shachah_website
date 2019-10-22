// JavaScript Document
	"use strict"

$(document).ready(function(){
	
	$("[data-toggle=tooltip]").tooltip();
		  $(".owl-carousel").owlCarousel();
		});
		var owl = $('.owl-carousel');
		owl.owlCarousel({
			items:5,
			loop:true,
			margin:100,
			autoplay:true,
			autoplayTimeout:3000,
			autoplayHoverPause:true,
			responsive:{
				0:{
					items:2,
				},
				768:{
					items:4,
				},
				992:{
					items:5,
				}
			}
		});
		$('.play').on('click',function(){
			owl.trigger('autoplay.play.owl',[3000])
		})
		$('.stop').on('click',function(){
			owl.trigger('autoplay.stop.owl')
		})


		$(document).ready(function() {
			startSlider(0);
		});

			
			function startSlider(idx) {
				$img = $("#container div img").eq(idx);
				$span1 = $("#container div span.one").eq(idx);
				$span2 = $("#container div span.two").eq(idx);
				$span3 = $("#container div span.three").eq(idx);
			
				$img.fadeIn('slow', function() {
					$span1.delay(600).fadeIn('slow', function() {
						$span2.delay(600).fadeIn('slow', function() {
							$span3.delay(600).fadeIn('slow', function() {
								$span1.delay(600).fadeOut();
								$span2.delay(600).fadeOut('fast', function() {
								$span3.delay(600).fadeOut('fast', function() {
									$img.fadeOut('slow', function() {
										if ($("#container div img").length - 1 == idx) {
											startSlider(0);
										}
										else {
											startSlider(idx + 1);
										}
									});
								});
							});
						});
					});
				});
			});
		}



	$('.collapse').on('shown.bs.collapse', function(){
	$(this).parent().find(".glyphicon-plus").removeClass("glyphicon-plus").addClass("glyphicon-minus");
	}).on('hidden.bs.collapse', function(){
	$(this).parent().find(".glyphicon-minus").removeClass("glyphicon-minus").addClass("glyphicon-plus");
	});






$("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });




