$(".slider_picture").slick({
	dots: true,
	arrows: false,
	infinite: true,
	speed: 300,
	slidesToShow: 3,
	slidesToScroll: 1,
	autoplay: true,
	asNavFor: '.slider_details',
	centerMode: true,
	focusOnSelect: true,
	centerPadding: '0',
});
$(".slider_details").slick({
	dots: false,
	arrows: false,
	infinite: true,
	speed: 300,
	slidesToShow: 1,
	slidesToScroll: 1,
	autoplay: true,
	asNavFor: '.slider_picture'
});
 $('.counter').counterUp({
	delay: 10,
	time: 1000
});