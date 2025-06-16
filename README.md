# Thème Wokine

## Objectif

Thème WordPress personnalisé à partir d'une maquette Figma pour test technique Wokine

## Stack

- WordPress
- ACF
- SCSS
- JS
- GSAP
- Git

## Choix & Processus

- Structure de la page
  Pour réaliser ce test, j’ai dans un premier temps décliné la maquette desktop en versions mobile et tablette afin de mieux me projeter. Ensuite, j’ai commencé à intégrer la version desktop, section par section, en essayant d’être le plus fidèle possible aux maquettes. Mon device de référence étant de largeur 1440px x 900px.
  Pour cela, j’ai utilisé un système de grille CSS visant à reproduire les mêmes colonnes que celles présentes sur les maquettes : 48 colonnes sur desktop (reférence) et écrans larges, 32 colonnes sur tablette et 24 sur mobile.

  Une fois le nombre de colonnes défini par device, j’ai créé une page \_layout.scss dans laquelle j’ai templatisé les différents layouts. Chaque section possède une classe grid-container qui met en place une grille responsive (24, 32 ou 48 colonnes).
  L’élément enfant qui contient le bloc principal a une classe composée en deux parties : col-xx pour le nombre de colonnes occupées, et -start-xx pour indiquer où commence le bloc.

  Pour la version desktop, j'ai travaillé avec un script qui m'a généré les colonnes exactement comme sur la maquette figma. Cela m'a permis d'être plus précis dans mes placements, et de coler parfaitement à la maquette 1440px.

  Les feuilles de style ont été développées en SCSS puis compilées. J’ai utilisé plusieurs variables pour enregistrer des valeurs récurrentes comme les tailles, marges, espacements ou couleurs.

- Champs ACF
  C'était la première fois que je travaillais avec des champs ACF et j'ai trouvé que c'etait extrêmement pratique et simple d'utilisation. Je n'avais pas la version payante du plugin mais en utilisant une boucle j'ai pu simplement mettre en place mon carousel des produits highlights.
  Chaque champs possède une valeur par défaut correspondant à la maquette.
  Les champs ACF m'ont aussi permis de tester si les blocs réagissaient correctement aux différentes longueurs de texte qu'un admin rentrerait.

- Animations
  Une fois toutes les versions statiques intégrées, je me suis plongé dans les animations, que j’ai réalisées avec GSAP. Ce sont des animations que j’ai trouvées directement sur le site GSAP et adaptées à la page.
  Je voulais qu’elles restent légères : elles durent 1.5s avec un ease: 'cubic.out'.
  Toutes les animations sont regroupées dans un seul fichier : animations.js.

  Le carousel de mise en avant des produits a aussi son propre fichier JS. L’objectif était de créer un carousel simple, navigable horizontalement à l’aide de flèches. Le challenge était de faire évoluer l’opacité des flèches selon la position du carousel. Pour cela, j’ai appliqué ou retiré une classe aux flèches selon leur état (début ou fin du scroll).

## Difficultés rencontrées

- Animation des titres dégradés :
  Pendant longtemps, je n’ai pas compris pourquoi mes titres contenant un dégradé n’étaient pas visibles. L’animation avait bien lieu dans l’inspecteur et le fichier JS était chargé. Après beaucoup de recherches (internet + ChatGPT), j’ai compris que SplitText ne réattribuait pas les styles aux enfants des textes splittés. Il fallait donc les réappliquer manuellement aux classes générées, comme .lines.

- Intégration d’un bundler :
  J’ai rencontré des difficultés pour minifier le code avec un bundler. J’ai d’abord utilisé Vite.js, mais je perdais les animations et le background du hero.
  J’ai alors utilisé Sass seul pour compiler le SCSS, mais sans minification JS. Cela impacte négativement les performances.

- Gestion du versioning Git :
  Je l’ai mis en place trop tard dans le projet, et je pense que mes commits ne sont pas très bien structurés. Je me suis documenté, mais c’est un point que je dois encore améliorer.

## Auteur

Dweezil Sèche - dweezilseche@gmail.com
