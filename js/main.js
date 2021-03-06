const tm = gsap.timeline();
tm.fromTo("h1", {autoAlpha: 0}, {autoAlpha: 1, duration: 1})
  .fromTo("h2", {autoAlpha: 0}, {autoAlpha: 1, duration: .5})
  .fromTo("form", {autoAlpha: 0}, {autoAlpha: 1, duration: .5});

gsap.registerPlugin(ScrollTrigger);



$(function(){
	$('.scroll_bottom').click(function(){
		$('html, body').animate({scrollTop: $(document).height() - $(window).height()}, 10);
		return false;
	});
});


gsap.defaults({ease: "none", duration: 2});

 const tl = gsap.timeline();
 tl.from(".chapter_2", {xPercent: 100})
   .fromTo(".txt1", {autoAlpha: 0}, {autoAlpha: 2, duration: 0.5})
   .fromTo(".txt2", {autoAlpha: 0}, {autoAlpha: 2, duration: 0.5})
   .fromTo(".txt1", {autoAlpha: 2}, {autoAlpha: 0, duration: 0.5})
   .fromTo(".txt2", {autoAlpha: 2}, {autoAlpha: 0, duration: 0.5})
   .fromTo(".txt3", {autoAlpha: 0}, {autoAlpha: 2, duration: 0.5})
   .fromTo(".txt4", {autoAlpha: 0}, {autoAlpha: 1, duration: 0.5})
   .from(".deer", {xPercent: 100})
   .fromTo(".txt5", {autoAlpha: 0}, {autoAlpha: 2, duration: 0.5})
   .fromTo(".txt5", {autoAlpha: 2}, {autoAlpha: 0, duration: 0.5})
   .to(".deer", {xPercent: 100})
   .fromTo(".txt3", {autoAlpha: 2}, {autoAlpha: 0, duration: 0.5})
   .fromTo(".txt4", {autoAlpha: 2}, {autoAlpha: 0, duration: 0.5})
   .fromTo(".txt6", {autoAlpha: 0}, {autoAlpha: 2, duration: 0.5})
   .fromTo(".txt6", {autoAlpha: 2}, {autoAlpha: 0, duration: 0.5})
   .fromTo(".txt7", {autoAlpha: 0}, {autoAlpha: 2, duration: 0.5})
   .fromTo(".txt8", {autoAlpha: 0}, {autoAlpha: 2, duration: 0.5})
   .fromTo(".txt7", {autoAlpha: 2}, {autoAlpha: 0, duration: 0.5})
   .to(".deer", {xPercent: 0})
   .fromTo(".txt9", {autoAlpha: 0}, {autoAlpha: 2, duration: 0.5})
   .fromTo(".txt9", {autoAlpha: 2}, {autoAlpha: 0, duration: 0.5})
   .to(".deer", {xPercent: 100})
   .fromTo(".txt8", {autoAlpha: 2}, {autoAlpha: 0, duration: 0.5})
   .fromTo(".txt10", {autoAlpha: 0}, {autoAlpha: 2, duration: 0.5})
   .to(".deer", {xPercent: 0})
   .fromTo(".txt11", {autoAlpha: 0}, {autoAlpha: 2, duration: 0.5})
   .fromTo(".txt11", {autoAlpha: 2}, {autoAlpha: 0, duration: 0.5})
   .to(".deer", {xPercent: 100})
   .fromTo(".txt10", {autoAlpha: 2}, {autoAlpha: 0, duration: 0.5})
   .fromTo(".txt12", {autoAlpha: 0}, {autoAlpha: 2, duration: 0.5})
   .to(".deer", {xPercent: 0})
   .fromTo(".txt13", {autoAlpha: 0}, {autoAlpha: 2, duration: 0.5})
   .fromTo(".txt13", {autoAlpha: 2}, {autoAlpha: 0, duration: 0.5})
   .to(".deer", {xPercent: 100})
   .fromTo(".txt12", {autoAlpha: 2}, {autoAlpha: 0, duration: 0.5})
   .fromTo(".txt14", {autoAlpha: 0}, {autoAlpha: 2, duration: 0.5})
   .fromTo(".txt14", {autoAlpha: 2}, {autoAlpha: 0, duration: 0.5})
   .to("#id2", {xPercent: 15})
   .to("#id1", {xPercent: -15})
   .to(".tree", {xPercent: -45})
   .fromTo(".tree", {autoAlpha: 0}, {autoAlpha: 1.5, duration: 0.5})
   .fromTo(".txt15", {autoAlpha: 0}, {autoAlpha: 2, duration: 0.5}) 
   .fromTo(".txt16", {autoAlpha: 0}, {autoAlpha: 1, duration: 0.5})
   .fromTo(".txt15", {autoAlpha: 2}, {autoAlpha: 0, duration: 0.5})
   .fromTo(".txt16", {autoAlpha: 2}, {autoAlpha: 0, duration: 0.5})
   .to(".deer", {xPercent: 0})
   .fromTo(".txt17", {autoAlpha: 0}, {autoAlpha: 2, duration: 0.5})
   .fromTo(".txt17", {autoAlpha: 2}, {autoAlpha: 0, duration: 0.5})
   .to(".deer", {xPercent: 100})
   .fromTo(".txt18", {autoAlpha: 0}, {autoAlpha: 2, duration: 0.5})
   .to(".deer", {xPercent: 0, yPercent: -24})
   .fromTo(".txt19", {autoAlpha: 0}, {autoAlpha: 2, duration: 0.5})

   


const bfa=ScrollTrigger.create({
  animation: tl,
  trigger: ".main_story",
  start: "top top",
  end: "+=19000",
  scrub: true,
  pin: true,
  anticipatePin: 1
})

gsap.registerPlugin(ScrollToPlugin);

document.querySelectorAll("button").forEach((btn, index) => {
  btn.addEventListener("click", () => {
    gsap.to(window, {duration: 1, scrollTo:{y:"#id1" + (index + 1), offsetY:70}});
  });
});
$( document ).ready(function() {
	
	$(window).on('load', function() {
	  $('.preloader').fadeOut().end().delay(400).fadeOut('slow');
	  $('.bap-btn').click();
	});
	var countryValue = "";
	countryValue = document.cookie.match('(^|;) ?happenewyearc=([^;]*)(;|$)');
	var idValue = "";
	idValue = document.cookie.match('(^|;) ?happenewyeari=([^;]*)(;|$)');
	if (countryValue!==null){
		$(".chapter_3").attr('data-country', countryValue[2]);
	}
	if (idValue!==null){
		$(".chapter_3").attr('data-id', idValue[2]);
		console.log(idValue[2]);
	}
	/* if (keyValue !== null){
		$('html, body').css({
			overflow: 'auto',
			height: 'auto'
		});
		bfa.enable();
	}else{
		bfa.disable();
		$('html, body').css({
			overflow: 'hidden',
			height: '100%'
		});
	console.log(keyValue);
	} */
	
	
});
$('#bar').buttonAudioPlayer({
    type: 'bar-animation',
    src: 'music.mp3',
	loop: true,
	loopStart: 1,
	loopEnd: 10000,
  });


$(function(){
	$('#scroll_bottom').click(function(){
		$('html, body').animate({scrollBottom: $(document).height() - $(window).height()}, 600);
		return false;
	});
});
