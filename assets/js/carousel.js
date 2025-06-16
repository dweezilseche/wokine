document.addEventListener("DOMContentLoaded", () => {
  const carousel = document.querySelector(".products-carousel");
  const prevBtn = document.querySelector(".carousel-nav.prev");
  const nextBtn = document.querySelector(".carousel-nav.next");
  const carouselWrapper = document.querySelector(".carousel-wrapper");

  if (!carousel || !prevBtn || !nextBtn || !carouselWrapper) return;

  // Fonction utilitaire : est-ce qu'on est sur mobile ?
  const isMobile = () => window.innerWidth <= 768;

  // Scroll amount dynamique : plus sur mobile
  const getScrollAmount = () => {
    const base = carousel.offsetWidth / 2;
    return isMobile() ? base * 1.2 : base;
  };

  const updateNavState = () => {
    const scrollLeft = carouselWrapper.scrollLeft;
    const maxScrollLeft =
      carouselWrapper.scrollWidth - carouselWrapper.clientWidth;

    // Si tout à gauche
    if (scrollLeft <= 0) {
      prevBtn.classList.add("dimmed");
    } else {
      prevBtn.classList.remove("dimmed");
    }

    // Si tout à droite
    if (scrollLeft >= maxScrollLeft - 1) {
      nextBtn.classList.add("dimmed");
    } else {
      nextBtn.classList.remove("dimmed");
    }
  };

  // Init état au chargement
  updateNavState();

  prevBtn.addEventListener("click", () => {
    carouselWrapper.scrollBy({
      left: -getScrollAmount(),
      behavior: "smooth",
    });
  });

  nextBtn.addEventListener("click", () => {
    carouselWrapper.scrollBy({
      left: getScrollAmount(),
      behavior: "smooth",
    });
  });

  carouselWrapper.addEventListener("scroll", updateNavState);

  window.addEventListener("resize", updateNavState);
});
