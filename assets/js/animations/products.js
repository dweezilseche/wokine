import { gsap } from "gsap";
import SplitText from "gsap/SplitText";

export function animateProducts() {
  const productSection = document.querySelector(".products-carousel");
  if (!productSection) return;

  const products = gsap.utils.toArray(".product-scroll");
  if (products.length) {
    gsap
      .timeline({
        scrollTrigger: {
          trigger: productSection,
          start: "top 90%",
          toggleActions: "play none none none",
        },
      })
      .from(products, {
        y: 30,
        opacity: 0,
        stagger: 0.05,
        duration: 1,
        ease: "cubic.out",
      });
  }

  const productCards = document.querySelectorAll(".product-card");
  if (!productCards.length) return;

  productCards.forEach((card) => {
    const targets = card.querySelectorAll(".split-hover");
    if (!targets.length) return;

    card.addEventListener("mouseenter", () => {
      targets.forEach((el) => {
        const split = SplitText.create(el, {
          type: "lines",
          linesClass: "line",
          mask: "lines",
          autoSplit: true,
        });

        gsap.fromTo(
          split.lines,
          { yPercent: 100, opacity: 0 },
          {
            yPercent: 0,
            opacity: 1,
            duration: 0.8,
            stagger: 0.07,
            ease: "cubic-bezier(0.06, 0.645, 0, 0.985)",
          }
        );
      });
    });

    card.addEventListener("mouseleave", () => {
      targets.forEach((el) => SplitText.revert(el));
    });
  });
}
