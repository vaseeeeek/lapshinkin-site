<template>
  <HeaderComponent />
  <main>
    <router-view />
  </main>
  <FooterComponent />
</template>

<script>
import HeaderComponent from '../components/Layout/HeaderComponent.vue'
import FooterComponent from '../components/Layout/FooterComponent.vue'

export default {
  components: {
    HeaderComponent,
    FooterComponent,
  },
}
</script>

<style scoped>
/* Стили для обертки */
</style>
