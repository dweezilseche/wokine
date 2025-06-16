import { gsap } from "gsap";

export function animateButtons() {
  const buttons = gsap.utils.toArray(".btn");
  if (!buttons.length) return;

  buttons.forEach((button) => {
    const span = button.querySelector("span");
    if (!span) return;

    const tl = gsap.timeline({ paused: true });

    tl.to(span, { duration: 0.35, yPercent: -120, ease: "power2.in" });
    tl.set(span, { yPercent: 120 });
    tl.to(span, { duration: 0.35, yPercent: 0 });

    button.addEventListener("mouseenter", () => tl.play(0));
  });
}
