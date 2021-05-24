<template>
  <div>
    <div id="nav">
      <h2>Crawler</h2>
      <div>
        <router-link to="/">Entrar</router-link>
        <router-link to="/about">Cadastrar</router-link>
      </div>
    </div>
    <router-view/>
  </div>
</template>

<script>
export default {
  name: 'Nav',
}
</script>


<style lang="scss">
#nav {
  display: flex;
  align-items: center;
  justify-content: space-between;

  background: #00ff91;
  padding: 2vh;

  a {
    padding: 10px 18px;

    color: #2c3e50;
    font-weight: bold;
    text-decoration: none;

    border: #2c3e50 solid 1px;
    border-radius: 10px;
    margin-right: 20px;

    &.router-link-exact-active {
      background: #2c3e50;
      color: #00ff91;
    }
  }
}
</style>
