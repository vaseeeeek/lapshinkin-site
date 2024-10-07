<template lang="pug">
footer.footer
  p.footer__text © [Твое Имя] 2024. Все права защищены.
  .footer__social-links
    a.footer__social-link(href="https://github.com/yourprofile", aria-label="Профиль GitHub") GitHub
    a.footer__social-link(href="https://linkedin.com/in/yourprofile", aria-label="Профиль LinkedIn") LinkedIn
    a.footer__social-link(href="https://twitter.com/yourprofile", aria-label="Профиль Twitter") Twitter
  form.footer__newsletter-form
    label.footer__newsletter-label(for="email-newsletter") Подпишитесь на рассылку:
    input.footer__newsletter-input(type="email", id="email-newsletter", name="email", placeholder="Ваш email", required)
    button.footer__newsletter-button(type="submit") Подписаться

</template>

<style
  lang="scss"
  src="@/main/assets/styles/components/Footer.scss"
  scoped
></style>