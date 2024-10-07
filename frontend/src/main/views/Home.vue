<template lang="pug">
  section.hero
    .hero__content
      h1.hero__title Привет, я [Твое Имя], Веб-разработчик
      p.hero__description Я занимаюсь фронтенд-разработкой и поддержкой бекенда, создавая эффективные и масштабируемые веб-решения.
      a.hero__cta-button(href="#portfolio") Посмотреть портфолио
    .hero__image
      img.hero__img(src="profile.jpg", alt="Фото [Твое Имя]")

  section#about.about
    h2.about__title Обо мне
    p.about__description Привет! Я веб-разработчик с опытом работы как с фронтендом, так и с поддержкой бекенда. Моя цель — создавать чистый код, красивый дизайн и обеспечивать оптимизированную производительность на всех уровнях приложения.
    ul.about__skills-list
      li.about__skills-item HTML5, CSS3, JavaScript (ES6+)
      li.about__skills-item React, Vue.js, jQuery
      li.about__skills-item PHP, Node.js, MySQL
      li.about__skills-item Адаптивный дизайн и доступность
  section#portfolio.portfolio
    h2.portfolio__title Портфолио
    .portfolio__grid
      article.portfolio__item
        img.portfolio__image.lazyload(src="project1.jpg", alt="Скриншот Проекта 1")
        h3.portfolio__item-title Проект 1
        p.portfolio__item-description Проект, в котором я работал как над фронтендом, так и над серверной частью, создавая высокопроизводительное приложение.
      article.portfolio__item
        img.portfolio__image.lazyload(src="project2.jpg", alt="Скриншот Проекта 2")
        h3.portfolio__item-title Проект 2
        p.portfolio__item-description Адаптивное веб-приложение, разработанное для мобильных и десктопных устройств, с интеграцией бэкэнд-API.

      
</template>

<script>
export default {
  name: 'Home',
}
</script>


<style
  lang="scss"
  src="@/main/assets/styles/components/Home/HomeHero.scss"
  scoped
></style>
<style
  lang="scss"
  src="@/main/assets/styles/components/Home/HomeAbout.scss"
  scoped
></style>
<style
  lang="scss"
  src="@/main/assets/styles/components/Home/HomePortfolio.scss"
  scoped
></style>