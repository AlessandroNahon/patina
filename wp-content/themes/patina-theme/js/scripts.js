var bar1Gallery = document.getElementsByClassName('bar1-gallery');
var bar2Gallery = document.getElementsByClassName('bar2-gallery');
var hamburger   = document.getElementsByClassName('hamburger')[0];
var bar1        = document.getElementsByClassName('bar1')[0];
var bar2        = document.getElementsByClassName('bar2')[0];
var bar3        = document.getElementsByClassName('bar3')[0];
var menu        = document.getElementsByClassName('menu')[0];
var mainSection = document.getElementsByClassName('main')[0];
var body        = document.getElementsByTagName('body')[0];
var slider      = $('.slider');
var allThumb    = $('.thumbnail-img img');
var allSliders  = $('.slide-gallery');
var patina      = {};

window.onbeforeunload = function () {
	TweenMax.set(allSliders, {autoAlpha:0, display:'none', zIndex:0});
}

patina.init = function() {
	patina.hamClick();
	patina.slider();
	patina.thumbClick();
}

patina.hamClick = function() {
	var activeNav = false;
		TweenMax.set(bar1Gallery, {rotation:45,x:0,y:0});
		TweenMax.set(bar2Gallery, {rotation:-45,x:0,y:0});

		TweenMax.set(bar1, {y:-6});
		TweenMax.set(bar3, {y:6});

	hamburger.addEventListener('click', function(){
		if(activeNav == false) {
			activeNav = true;
			menu.style.display = 'flex';
			mainSection.classList.add('blur');
			TweenMax.to(bar2, 0.2, {autoAlpha:0, ease:Linear.easeOut});
			TweenMax.to(bar1, 0.2, {y:0, ease:Power1.easeOut});
			TweenMax.to(bar3, 0.2, {y:-3, ease:Power1.easeOut});
			TweenMax.to(bar1, 0.2, {rotation:45, ease:Power1.easeOut});
			TweenMax.to(bar3, 0.2, {rotation:-45, ease:Power1.easeOut});
		} else if(activeNav == true) {
			activeNav = false;
			menu.style.display = 'none';
			mainSection.classList.remove('blur');
			TweenMax.to(bar2, 0.2, {autoAlpha:1, ease:Linear.easeOut});
			TweenMax.to(bar1, 0.2, {y:-6, ease:Power1.easeOut});
			TweenMax.to(bar3, 0.2, {y:6, ease:Power1.easeOut});
			TweenMax.to([bar1, bar3], 0.2, {rotation:0, ease:Power1.easeOut});
		}
	});
}

patina.slider = function() {
	slider.on('swipe', function(event, slick, direction){
	  var currentSlide = slider.slick('slickCurrentSlide');
	});

	slider.slick({
		accessibility: true,
		centerMode:true,
		speed: 300,
		mobileFirst: true,
		variableWidth: true,
		touchMove: true,
		arrows: true,
		dots:true,
		focusOnSelect: true
	});
}

patina.thumbClick = function() {
	allThumb.each(function(thumbIndex, thumb) {
		$(this).click(function(){
			body.style.position = 'fixed';
			allSliders.each(function(sliderIndex, slider){
				if(thumbIndex === sliderIndex) {
					TweenMax.to($(this), 0.2, {autoAlpha:1, display:'block',zIndex:999, ease:Linear.easeOut});
				}
			});
		});
	});


	$('.close').click(function(){
		body.style.position = 'static';
		TweenMax.to(allSliders, 0.2, {autoAlpha:0, display:'none',zIndex:0, ease:Linear.easeOut});
	});
}


$(function() {
	window.onbeforeunload();
	patina.init();
});

