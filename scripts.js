jQuery(document).ready(function( $ ) {

	function UpdateNavHeight() {
		$("div#page").each(function() {

			var el = $(this),
				scrollTop = $(window).scrollTop(),
				parentHeader = $("nav.magimpact-nav"),
				parentHeaderHeight = 75;

			if ($(window).width() < 767) { parentHeaderHeight = 100; }

			if (scrollTop > parentHeaderHeight) {
				parentHeader.addClass("collapsed");
			} else {
				parentHeader.removeClass("collapsed");
			}

		});
	}

	function PostImagePos(){

		$("figure.blog-article").each(function(){

			var thumb_h = $(this).find("article").find("div.entry-thumbnail").find("img").outerHeight();

			$(this).find("div.entry-thumbnail").css("padding-top",thumb_h+"px");

			if ($(window).outerWidth()>767) {

				$(this).find("h2.entry-title").css("margin-top",thumb_h-168);

			} else {

				$(this).find("h2.entry-title").css("margin-top","25px");

			}

		});

	}

	function RecPostHeight(){
		var max = 0;
		max = Math.max.apply(Math, $("#zem_rp_first li").map(function() { return $(this).height(); }))
		$("#zem_rp_first li").css("height",max);
	}

	function ShopItemHeight(){

		if ($(window).width() > 767) {
			var totalHeight;
			var max = 0;
			max = Math.max.apply(Math, $(".option-title-price").map(function() { totalHeight = 0; $(this).children().each(function(){ totalHeight+=$(this).outerHeight(true); }); return totalHeight+80; }));
			$(".option-title-price").css("height",max);
			max = Math.max.apply(Math, $(".option-short-desc").map(function() { totalHeight = 0; $(this).children().each(function(){ totalHeight+=$(this).outerHeight(true); }); return totalHeight+80; }));
			$(".option-short-desc").css("height",max);
			max = Math.max.apply(Math, $(".option-details").map(function() { totalHeight = 0; $(this).children().each(function(){ totalHeight+=$(this).outerHeight(true); }); return totalHeight+30; }));
			$(".option-details").css("height",max);
		} else {
			$(".option-title-price").css("height","");
			$(".option-short-desc").css("height","");
			$(".option-details").css("height","");
		}


	}





	$(this).find("article").find("div.entry-thumbnail").find("img").load(PostImagePos);


	$("figure.contact-form input, figure.contact-form textarea").each(function(){
		if ($(this).val()!="") {
			$(this).addClass("non-empty");
		}
	});

	$("figure.contact-form input, figure.contact-form textarea").focus(function(){
			$(this).addClass("non-empty");
	});

	$("figure.contact-form input, figure.contact-form textarea").blur(function(){
		if ($(this).val()=="") {
			$(this).removeClass("non-empty");
		}
	});




	$("#story-slider > .slide0").delay(5000).fadeOut(500);
	$("#story-slider > .slide1").delay(5000).fadeIn(500);
	$("#story-slider > .slide1").delay(8000).fadeOut(500);
	$("#story-slider > .slide2").delay(8000).fadeIn(500);



	/*IE scrolling bugfix*/
	if(navigator.userAgent.match(/MSIE 10/i) || navigator.userAgent.match(/MSIE 11/i) || navigator.userAgent.match(/Trident\/7\./) || navigator.userAgent.match(/Edge\/12\./) || navigator.userAgent.match(/Edge\/13\./)) {
		$('body').on("mousewheel", function () {
			event.preventDefault();
			var wd = event.wheelDelta;
			var csp = window.pageYOffset;
			window.scrollTo(0, csp - wd);
		});
	}


	$("a.scrollto").click(function(event) {
		event.preventDefault();
		$anchor = $(this).attr("data-href");
		$('html, body').animate({
			scrollTop: $($anchor).offset().top-100
		}, 500);
	});



	$(window)
		.resize(UpdateNavHeight)
		.scroll(UpdateNavHeight)
		.resize(PostImagePos)
		.resize(ShopItemHeight)
		.resize();
});






