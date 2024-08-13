<template lang="pug">
  header.header
    .header--left 
      Navigation
    .header--right  
      AuthButton
          
</template>

<script>
import Navigation from '@/main/components/Navigation.vue'
import AuthButton from '@/main/components/AuthButton.vue'

export default {
  name: 'Header',
  components: {
    Navigation,
    AuthButton,
  }
}
</script>

<style lang="scss"></style>
