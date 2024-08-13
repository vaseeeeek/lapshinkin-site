<template lang="pug">
    .auth-form 
        .auth-form--top
            .auth-form__nav
                ul.auth-form__nav__list
                    li.auth-form__nav__item(
                        :class="{ active: activeForm === 'Login' }"
                        @click="activeForm = 'Login'"
                    ) Вход
                    li.auth-form__nav__item(
                        :class="{ active: activeForm === 'Signup' }"
                        @click="activeForm = 'Signup'"
                    ) Регистрация
                    li.auth-form__nav__item(
                        :class="{ active: activeForm === 'Reset' }"
                        @click="activeForm = 'Reset'"
                    ) Сброс
        .auth-form--top
            component(:is="activeForm") 

</template>

<script>
import Login from '@/main/components/Login.vue'
import Signup from '@/main/components/Signup.vue'
import Reset from '@/main/components/Reset.vue'

export default {
  name: 'AuthForm',
  components: {
    Login,
    Signup,
    Reset,
  },
  data() {
    return {
      activeForm: 'Login',
    }
  },
}
</script>

<style
  lang="scss"
  src="@/main/assets/styles/components/AuthForm.scss"
  scoped
></style>
