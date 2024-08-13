<template lang="pug">
  <nav itemscope itemtype="http://schema.org/SiteNavigationElement" aria-label="Main navigation">
    <ul>
      <li itemprop="name">
        <router-link itemprop="url" to="/">Главная</router-link>      
      </li>
    </ul>
  </nav>
</template>

<script>
export default {
  name: 'NavigationComponent',
}
</script>
