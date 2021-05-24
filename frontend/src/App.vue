<template>
  <Nav/>
</template>
<script>
import Nav from '@/components/Nav.vue'

export default {
  name: 'App',
  components: {
    Nav
  }
}
</script>
<style lang="scss">
*{
  margin: 0;
}
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;

 background: #f8f8f8;
 height: 100vh;
}
</style>
