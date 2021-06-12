
document.addEventListener('DOMContentLoaded', () => {
	const elementoscarousel = document.querySelectorAll('.carousel');
	M.Carousel.init(elementoscarousel,{
		duration: 899,
		dist: -80,
		shift: 5,
		padding: 5,
		numVisible: 5,
		indicators: true
	  });
	});

