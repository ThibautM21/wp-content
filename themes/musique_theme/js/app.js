$(function () {

	function setHeight() {
		let max = 0;
		$('.carousel-item').each(function () {
			if ($(this).height() > max)
				max = $(this).height();
		});
		$('.carousel-inner').css('height', max);
		$('.carousel-item').css('height', max);
	}

	$(window).on('load', setHeight);
	$(window).on('resize', setHeight);
});