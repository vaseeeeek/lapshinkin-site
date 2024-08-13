<template lang="pug">
    .auth
        button(@click="login")  Авторизация
        ModalWrapper(:isVisible="isAuthFormVisible" @close="isAuthFormVisible = false")
            AuthForm
</template>

<script>
import AuthForm from '@/main/components/AuthForm.vue'
import ModalWrapper from '@/main/components/ModalWrapper.vue'

export default {
  name: 'AuthButton',
  components: {
    AuthForm,
    ModalWrapper,
  },
  data() {
    return {
      isAuthFormVisible: false,
    }
  },
  methods: {
    login() {
      this.isAuthFormVisible = true
    },
  },
}
</script>
