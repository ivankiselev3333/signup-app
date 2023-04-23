<template>
  <div class='container'>
    <a-typography-title>User Submit form</a-typography-title>
    <router-view></router-view>
  </div>
</template>

<script>
import UsersIndex from './components/UsersIndex.vue';
import UserDisplay from './components/UserDisplay.vue';

export default {
  components: {
    UsersIndex,
    UserDisplay
  }
}
</script>

<style scoped>
.container {
  padding: 2%;
}
</style>
