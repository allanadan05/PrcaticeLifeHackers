<template>
  <div id="app">
    <services/>
  </div>
</template>

<style>

</style>

<script>
import services from './Services.vue'
import register from './Register.vue'
import login from './Login.vue'
export default {
  components: {
    services,
    register,
    login,
  },
}
</script>