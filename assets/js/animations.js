// wait until DOM is ready
document.addEventListener("DOMContentLoaded", function (event) {
  console.log("DOM loaded");

  //wait until images, links, fonts, stylesheets, and js is loaded
  window.addEventListener(
    "load",
    function (e) {
      //custom GSAP code goes here
      document.fonts.ready.then(() => {
        let isMobile = window.innerWidth <= 768;

        // HERO
        const heroAnimation = new SplitText(".hero-animation", {
          type: "lines",
          linesClass: "line",
        });

        gsap.set(".hero-animation", { opacity: 1 });

        const tl = gsap.timeline();

        tl.from(heroAnimation.lines, {
          delay: 0.3,
          yPercent: isMobile ? 20 : 100,
          opacity: 0,
          duration: 1.6,
          ease: "cubic.out",
          stagger: 0.1,
        });

        tl.from(
          ".hero__logo",
          {
            y: 30,
            opacity: 0,
            duration: 1.3,
            ease: "cubic.out",
          },
          "-=1.1"
        );

        //Scroll
        let containers = gsap.utils.toArray(".container");

        containers.forEach((container) => {
          let texts = container.querySelectorAll(".split-scroll");
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
                    //markers: true,
                    start: "top 90%",
                    toggleActions: "play none none none",
                  },
                });

                // Animation des lignes
                tl.from(
                  instance.lines,
                  {
                    yPercent: isMobile ? 20 : 120,
                    opacity: 0,
                    stagger: 0.1,
                    duration: 1.5,
                    ease: "cubic.out",
                  },
                  0
                );

                // Animation du bouton
                const btn = container.querySelector(".btn-scroll");
                if (btn) {
                  tl.fromTo(
                    btn,
                    { y: 20, opacity: 0 },
                    {
                      y: 0,
                      opacity: 1,
                      duration: 1.5,
                      ease: "cubic.out",
                    },
                    0.8
                  );
                }

                return tl;
              },
            });
          });
        });

        // Animation des blocs articles au scroll
        const articles = gsap.utils.toArray(".article-scroll");

        articles.forEach((article) => {
          gsap.from(article, {
            scrollTrigger: {
              trigger: article,
              start: "top 90%",
              toggleActions: "play none none none",
              // markers: true,
            },
            y: 30,
            opacity: 0,
            duration: 1.5,
            ease: "cubic.out",
          });
        });

        // Animation titres/textes dans chaque article
        const articlesText = gsap.utils.toArray(".article-scroll");

        articlesText.forEach((articleText) => {
          const items = articleText.querySelectorAll(".split-article");
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
                    // markers: true,
                  },
                  yPercent: 40,
                  // opacity: 0,
                  stagger: 0.1,
                  duration: 1.3,
                  ease: "cubic.out",
                });
              },
            });
          });
        });

        // Animation des blocs produits
        const products = gsap.utils.toArray(".product-scroll");

        gsap
          .timeline({
            scrollTrigger: {
              trigger: ".products-carousel",
              start: "top 90%",
              toggleActions: "play none none none",
              // markers: true,
            },
          })
          .from(products, {
            y: 30,
            opacity: 0,
            stagger: 0.05, // <-- chaque bloc produit apparaît l’un après l’autre
            duration: 1,
            ease: "cubic.out",
          });

        // Sélectionne toutes les cartes produits
        document.querySelectorAll(".product-card").forEach((card) => {
          card.addEventListener("mouseenter", () => {
            // Pour chaque élément à animer
            card.querySelectorAll(".split-hover").forEach((el) => {
              // Split le texte (si pas déjà fait)
              let split = SplitText.create(el, {
                type: "lines",
                linesClass: "line",
                mask: "lines",
                autoSplit: true,
              });

              // Lancement de l'anim à l'entrée
              gsap.fromTo(
                split.lines,
                {
                  yPercent: 100,
                  opacity: 0,
                },
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

          // Optionnel : reset le texte à la sortie de la souris (sinon, il reste splitté)
          card.addEventListener("mouseleave", () => {
            card.querySelectorAll(".split-hover").forEach((el) => {
              SplitText.revert(el); // Reviens au texte brut
            });
          });
        });

        const buttons = gsap.utils.toArray(".btn");
        buttons.forEach((button) => {
          let span = button.querySelector("span");
          let tl = gsap.timeline({ paused: true });

          tl.to(span, { duration: 0.2, yPercent: -100, ease: "cubic.out" });
          tl.set(span, { yPercent: 100 });
          tl.to(span, { duration: 0.2, yPercent: 0 });

          button.addEventListener("mouseenter", () => tl.play(0));
        });
      });

      console.log("window loaded");
    },
    false
  );
});
