<template lang="pug">
  header.header
    .header__logo
      a.header__logo-link(href="/") ВЛ
    
    nav.header__nav
      ul.header__nav-list
        li.header__nav-item
          a.header__nav-link(href="#about") Обо мне
        li.header__nav-item
          a.header__nav-link(href="#portfolio") Портфолио
        li.header__nav-item
          a.header__nav-link(href="#blog") Блог
        li.header__nav-item
          a.header__nav-link(href="#contact") Контакты

    div.header__cta
      a.header__cta-button(href="#contact") Нанять меня



  //- header.header
  //-   .header--left 
  //-     Navigation
  //-   .header--right  
  //-     AuthButton
          
</template>

<script>
// import Navigation from '@/main/components/Navigation.vue'
// import AuthButton from '@/main/components/AuthButton.vue'

export default {
  name: 'Header',
  components: {
    // Navigation,
    // AuthButton,
  },
  created() {
    window.addEventListener('scroll', function () {
      const header = document.querySelector('.header')
      header.classList.toggle('scrolled', window.scrollY > 50)
    })
  },
}
</script>

<style
  lang="scss"
  src="@/main/assets/styles/components/Header.scss"
  scoped
></style>
