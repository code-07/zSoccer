$(function () {
	// Slideshow 
		$("#slider").responsiveSlides({
			auto: true,
			pager: false,
			nav: true,
			speed: 500,
			namespace: "callbacks",
			before: function () {
					$('.events').append("<li>before event fired.</li>");
			},
			fter: function () {
					$('.events').append("<li>after event fired.</li>");
			}
		});
});