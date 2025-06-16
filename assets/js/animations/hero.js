import { gsap } from "gsap";
import SplitText from "gsap/SplitText";

export function animateHero() {
  const target = document.querySelector(".hero-animation");
  if (!target) return;

  const heroAnimation = new SplitText(target, {
    type: "lines",
    linesClass: "line",
  });

  gsap.set(target, { opacity: 1 });

  const tl = gsap.timeline();
  tl.from(heroAnimation.lines, {
    delay: 0.3,
    yPercent: window.innerWidth <= 768 ? 20 : 100,
    opacity: 0,
    duration: 1.6,
    ease: "cubic.out",
    stagger: 0.1,
  });

  const logo = document.querySelector(".hero__logo");
  if (logo) {
    tl.from(
      logo,
      {
        y: 30,
        opacity: 0,
        duration: 1.3,
        ease: "cubic.out",
      },
      "-=1.1"
    );
  }
}
