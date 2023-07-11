window.sr = scrollReveal();

sr.reveal('.jumbotron text-center', {
	origin:'top',
	distance: '50px',
	duration: 2000,
	scale: 0.5,
	reset: true

});

$('#bscarousel').on('slide.bs.carousel', function () {
    var slidno = carouselData.getActiveIndex();
}