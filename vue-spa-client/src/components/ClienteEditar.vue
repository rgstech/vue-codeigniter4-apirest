<template>
 <div class="container">
  <div class="row">
    <div class="col-md-12">
      <form name="formregistro" @submit.prevent>
        <div class="form-group">
          <label for="nome" class="font-weight-bold">Nome:</label>
          <input type="text" id="nome" name="nome" class="form-control" v-model="cliente.nome" />
        </div>
        <div class="form-group">
          <label for="descricao" class="font-weight-bold">E-mail:</label>
          <input type="text" id="desc" name="desc" class="form-control" v-model="cliente.email" />
        </div>
        <button name="btadd" class="btn btn-success mr-1" @click="saveCliente(cliente)">
         <i class="far fa-save"></i>Salvar
        </button>
        <!-- <button name="btsearch" class="btn btn-info" @click="filtrarRegistro">Pesquisar</button> not implemented -->
        <button name="btclear" class="btn btn-warning mr-1" type="reset">
         <i class="fas fa-eraser"></i> Limpar
        </button>
         <button name="btreturn" class="btn btn-secondary" @click="backPage">
        <i class="fas fa-door-open"></i> Voltar
        </button>
        <hr />
      </form>
    </div>
  </div>
 </div>
</template>

<script>
import { mapActions } from 'vuex';

import store from '../store/store';

export default {
  data() {
    return {
      cliente: {
       nome:"",
       email:"",
      }
     
    };
  },
  methods: {
    ...mapActions( { update_Cliente : 'updateCliente'} ),
     saveCliente(cliente) {

       let clienteObj = JSON.parse(JSON.stringify(cliente));
         

          let res = this.update_Cliente(clienteObj);

          if(res) {
            alert('Registro atualizado!')
          }
           this.cliente.nome  = "";
           this.cliente.email = "";

          //this.$router.push('/cliente');
          this.backPage();
     },
     backPage(){
        this.$router.push('/cliente');
     }
  },
/* eslint-disable */ 
   beforeRouteEnter (to, from, next) { 
   
          next(vm =>{
             vm.cliente = store.getters.clienteEdit; //tem que utilizar o store atraves do import, pois aqui o this.$store ainda nao existe
           })
            next();
    },

    beforeRouteLeave(to, from, next){
         this.cliente.nome = "";
         this.cliente.email = "";
         this.$store.commit('editCliente', {});

         next();


    }

};
</script>


<style>
</style>