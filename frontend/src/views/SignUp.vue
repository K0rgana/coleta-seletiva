<template>
  <div class="signUp">
    <h1>Cadastre - se!</h1>
    
		<form class="form">

      <input
          type="text"
          placeholder="Nome"
          v-model="name"
          class="form-control"
      />

      <input
          type="email"
          placeholder="Email"
          v-model="email"
          class="form-control"
      />

      <input
          type="email"
          placeholder="Telefone"
          v-model="phone"
          class="form-control"
      />
      <input
          type="password"
          placeholder="Senha"
          v-model="password"
          class="form-control"
      />
      <input
          type="password"
          placeholder="Confirme a senha"
          v-model="confirm"
          class="form-control"
      />

      <span>Eu sou: {{ selected }}</span> 

      <select v-model="selected">
        <option disabled value="">Selecione</option>
        <option>Descartante</option>
        <option>Coletor</option>
      </select>

       <!-- <select v-model="selected">
        <option v-for="option in options" :value="option.text" :key="option.id">
          {{ option.text }}
        </option>
      </select> -->
      <div class="btn-warp">
        <button type="button" @click="clearForm">
          Limpar
        </button>
        <button type="button" @click="onSubmit" class="submit">
          Cadastrar
        </button>
      </div>
    </form>
  </div>
</template>

<script>
export default {
  name: "SingUp",
  /* options: [
    {text: 'Descartante', id: 1},
    {text: 'Coletor', id: 2},
  ],
  selected: 1, */
  methods: {
    onSubmit() {
      this.signUp.push({
        name: this.name,
        email: this.email, 
        phone: this.phone,
        password: this.password,
        confirm: this.confirm,
      });
      this.clearForm();
    },
    clearForm() {
      this.name = "";
      this.email = "";
      this.phone = "";
      this.password = "";
      this.confirm = "";
      this.selected = "";
    },
  },
};
</script>

<style lang="scss">
.form{
  display: flex;
  align-items: center;
  flex-direction: column;

  & input, select{
    height: 2rem;
    width: 50vw;
    margin: 0.5rem;
    
    border: #2c3e50 solid 1px;
    border-radius: 5px;
  }

  & .btn-warp{
    flex-direction: row;
    justify-content: space-between;
  }

  & button{
    padding: 10px 70px;

    color: #2c3e50;
    text-decoration: none;

    border: #2c3e50 solid 1px;
    border-radius: 10px;
    margin-right: 20px;

    flex-direction: row;

    &.submit {
      background: #2c3e50;
      color: #00ff91;
    }
    &:hover{
    font-weight: bold;
    }
  }
}

</style>