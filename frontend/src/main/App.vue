<template lang="pug">
  Header
  main
    router-view
  Footer
</template>

<script>
import Header from '@/main/components/Header.vue'
import Footer from '@/main/components/Footer.vue'

export default {
  name: 'App',
  components: {
    Header,
    Footer,
  },
}
</script>

<style lang="scss">
@import '@/main/assets/styles/main.scss';
@import '@/main/assets/styles/normalize.css';
@import '@/main/assets/styles/reset.css';
</style>
