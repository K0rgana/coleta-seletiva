<template>
<div class="banner-warp">
  <div class="banner">
    <h1>Participe ativamente na coleta seletiva</h1>
    <h3>
      O Crawler ajuda você a encontrar e compartilhar materiais recicláveis  com as pessoas que trabalham para um mundo mais sustentável.
    </h3>    
  </div>
  <div class="login">
<p>form login</p>
  </div>
</div>
</template>

<script>
export default {
  name: 'Banner',
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss">
.banner-warp{
  display: flex;
  flex-direction: row;
  align-items: flex-start;
}
.banner{
  color: #d6ffed;
  text-align: end;
  text-shadow: 1px 1px 5px #222 ;

  background:  url("https://upload.wikimedia.org/wikipedia/commons/thumb/e/ee/Colourful_row_of_recycling_plastic_dustbins.jpg/1024px-Colourful_row_of_recycling_plastic_dustbins.jpg") no-repeat left bottom;
  background-size: cover;
  min-height: 60vh;
}
.login{
  background: #42b983;
  width: 40vw;
  height: 60vh;
}
h1,h3 {
  padding: 1rem;
}
</style>
