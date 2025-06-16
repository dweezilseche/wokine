import { gsap } from "gsap";
import SplitText from "gsap/SplitText";

export function animateScrollSections() {
  const containers = gsap.utils.toArray(".container");
  if (!containers.length) return;

  containers.forEach((container) => {
    const texts = container.querySelectorAll(".split-scroll");
    if (!texts.length) return;

    texts.forEach((text) => {
      SplitText.create(text, {
        type: "lines",
        mask: "lines",
        linesClass: "line",
        autoSplit: true,
        onSplit: (instance) => {
          gsap.set(text, { opacity: 1 });

          const tl = gsap.timeline({
            scrollTrigger: {
              trigger: container,
              start: "top 90%",
              toggleActions: "play none none none",
            },
          });

          tl.from(instance.lines, {
            yPercent: window.innerWidth <= 768 ? 20 : 120,
            opacity: 0,
            stagger: 0.1,
            duration: 1.5,
            ease: "cubic.out",
          });

          const btn = container.querySelector(".btn-scroll");
          if (btn) {
            tl.fromTo(
              btn,
              { y: 20, opacity: 0 },
              { y: 0, opacity: 1, duration: 1.5, ease: "cubic.out" },
              0.8
            );
          }
        },
      });
    });
  });
}
