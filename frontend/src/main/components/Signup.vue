<template lang="pug">
  form.form.form-signup(@submit.prevent="submitForm")
    .form__element-group
      input.form__input(type="email", id="email", name="email", v-model="email", placeholder="Введите ваш email")
      span.error(v-if="errors.email") {{ errors.email }} <!-- Отображение ошибки для email -->

    .form__element-group
      input.form__input(type="text", id="login", name="login", v-model="login", placeholder="Введите ваш логин")
      span.error(v-if="errors.login") {{ errors.login }} <!-- Отображение ошибки для login -->

    .form__element-group
      input.form__input(type="password", id="password", name="password", v-model="password", placeholder="Введите пароль")
      span.error(v-if="errors.password") {{ errors.password }} <!-- Отображение ошибки для password -->

    .form__element-group
      input.form__input(type="password", id="confirmPassword", name="confirmPassword", v-model="confirmPassword", placeholder="Повторите пароль")
      span.error(v-if="errors.confirmPassword") {{ errors.confirmPassword }} <!-- Отображение ошибки для подтверждения пароля -->

    input.form-button(type="submit", value="Зарегистрироваться")
</template>

<script>
export default {
  name: 'Signup',
  data() {
    return {
      email: '',
      login: '',
      password: '',
      confirmPassword: '',
      errors: {},
    };
  },
  methods: {
    validateForm() {
      this.errors = {};
      if (!this.email) {
        this.errors.email = 'Email обязателен';
      } else if (!this.isValidEmail(this.email)) {
        this.errors.email = 'Некорректный формат email';
      }

      if (!this.login) {
        this.errors.login = 'Логин обязателен';
      }

      if (!this.password) {
        this.errors.password = 'Пароль обязателен';
      }

      if (this.password !== this.confirmPassword) {
        this.errors.confirmPassword = 'Пароли не совпадают';
      }

      return Object.keys(this.errors).length === 0;
    },
    submitForm() {
      if (this.validateForm()) {
        // Здесь можно отправить данные на сервер
        alert('Форма успешно отправлена!');
      }
    },
    isValidEmail(email) {
      // Простая проверка формата email
      const re = /\S+@\S+\.\S+/;
      return re.test(email);
    },
  },
}
</script>

<style lang="scss" scoped>
.error {
  color: red;
  font-size: 0.875rem;
}
</style>
