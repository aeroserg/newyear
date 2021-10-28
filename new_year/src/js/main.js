gsap.fromTo("h1", {autoAlpha: 0}, {autoAlpha: 1, duration: 4});

gsap.registerPlugin(ScrollTrigger);

gsap.defaults({ease: "none", duration: 2});

 const tl = gsap.timeline();
 tl.from(".chapter_2", {xPercent: -100})
   .fromTo(".chapter_header_1", {autoAlpha: 0}, {autoAlpha: 1, duration: 2})
   .fromTo(".text_snowman_2", {autoAlpha: 1}, {autoAlpha: 0, duration: 2})
   .fromTo(".text_snowman_3", {autoAlpha: 0}, {autoAlpha: 1, duration: 2})
   .fromTo(".text_snowman_3", {autoAlpha: 1}, {autoAlpha: 0, duration: 2})
   .fromTo(".text_snowman_4", {autoAlpha: 0}, {autoAlpha: 1, duration: 2})
   .fromTo(".text_snowman_4", {autoAlpha: 1}, {autoAlpha: 0, duration: 2})
   .fromTo(".text_snowman_5", {autoAlpha: 0}, {autoAlpha: 1, duration: 2})
   .fromTo(".text_snowman_5", {autoAlpha: 1}, {autoAlpha: 0, duration: 2})
   .fromTo(".chapter_header_1", {autoAlpha: 1}, {autoAlpha: 0, duration: 2})
   .fromTo(".chapter_header_2", {autoAlpha: 0}, {autoAlpha: 1, duration: 2})
   .fromTo(".text_santa_2", {autoAlpha: 1}, {autoAlpha: 0, duration: 2})
   .fromTo(".text_santa_3", {autoAlpha: 0}, {autoAlpha: 1, duration: 2})
   .fromTo(".text_santa_3", {autoAlpha: 1}, {autoAlpha: 0, duration: 2})
   .fromTo(".text_santa_4", {autoAlpha: 0}, {autoAlpha: 1, duration: 2})
   .fromTo(".text_santa_4", {autoAlpha: 1}, {autoAlpha: 0, duration: 2})
   .fromTo(".text_santa_5", {autoAlpha: 0}, {autoAlpha: 1, duration: 2})
   .fromTo(".text_santa_5", {autoAlpha: 1}, {autoAlpha: 0, duration: 2})
   .from(".chapter_3", {xPercent: 100})
   .from(".chapter_4", {yPercent: -100});


ScrollTrigger.create({
  animation: tl,
  trigger: ".main_story",
  start: "top top",
  end: "+=3000",
  scrub: true,
  pin: true,
  anticipatePin: 1
})




// ScrollTrigger.create({
//   animation: time,
//   trigger: ".chapter_2",
//   start: "top top",
//   end: "+=2000",
//   scrub: true,
//   anticipatePin: 1
//   })
