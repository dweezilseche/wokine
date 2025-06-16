import "../scss/style.scss";
import { gsap } from "gsap";
import ScrollTrigger from "gsap/ScrollTrigger";
import SplitText from "gsap/SplitText";

import { animateHero } from "./animations/hero";
import { animateScrollSections } from "./animations/scrollSections";
import { animateArticles } from "./animations/articles";
import { animateProducts } from "./animations/products";
import { animateButtons } from "./animations/buttons";

gsap.registerPlugin(ScrollTrigger, SplitText);

window.addEventListener("load", () => {
  document.fonts.ready.then(() => {
    animateHero();
    animateScrollSections();
    animateArticles();
    animateProducts();
    animateButtons();
  });
});
