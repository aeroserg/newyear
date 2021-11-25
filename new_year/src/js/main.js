const tm = gsap.timeline();
tm.fromTo("h1", {autoAlpha: 0}, {autoAlpha: 1, duration: 2})
  .fromTo("h2", {autoAlpha: 0}, {autoAlpha: 1, duration: 1})
  .fromTo("form", {autoAlpha: 0}, {autoAlpha: 1, duration: 1});

gsap.registerPlugin(ScrollTrigger);

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
   .to(".santa", {xPercent: 20})
   .to(".snowman", {xPercent: -15})
   .to(".tree", {xPercent: -40})
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
   .to(".deer", {xPercent: 0})
   .fromTo(".txt19", {autoAlpha: 0}, {autoAlpha: 2, duration: 0.5})

   


ScrollTrigger.create({
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
