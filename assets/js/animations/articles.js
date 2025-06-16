import { gsap } from "gsap";
import SplitText from "gsap/SplitText";

export function animateArticles() {
  const articles = gsap.utils.toArray(".article-scroll");
  if (!articles.length) return;

  articles.forEach((article) => {
    gsap.from(article, {
      scrollTrigger: {
        trigger: article,
        start: "top 90%",
        toggleActions: "play none none none",
      },
      y: 30,
      opacity: 0,
      duration: 1.5,
      ease: "cubic.out",
    });

    const items = article.querySelectorAll(".split-article");
    if (!items.length) return;

    items.forEach((item) => {
      SplitText.create(item, {
        type: "lines",
        mask: "lines",
        linesClass: "line-article",
        autoSplit: true,
        onSplit: (instance) => {
          gsap.set(item, { opacity: 1 });

          gsap.from(instance.lines, {
            scrollTrigger: {
              trigger: item,
              start: "top 90%",
              toggleActions: "play none none none",
            },
            yPercent: 40,
            stagger: 0.1,
            duration: 1.3,
            ease: "cubic.out",
          });
        },
      });
    });
  });
}
