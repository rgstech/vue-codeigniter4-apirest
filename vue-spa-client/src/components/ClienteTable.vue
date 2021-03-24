<template>
    <div class="row">
      <div class="col-md-12">
        <table id="regtable" class="table">
          <thead class="thead-light">
            <tr id="tabhead">
              <th>Nome</th>
              <th>E-mail</th> 
              <th>Ação</th>
            </tr>
          </thead>
          <tbody id="tregs">
            <tr v-for="cliente in clientes" :key="cliente.id" >
              <td>  {{cliente.nome}} </td>
              <td>  {{cliente.email}} </td>
              <td>
                <button class="btn btn-danger mr-1" @click="deleteCliente(cliente)"> <i class="fas fa-minus-circle"></i> Excluir</button>
                <button name="btclear" @click="editCliente(cliente)" class="btn btn-primary" type="reset"><i class="far fa-edit"></i> Editar</button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>  
</template>

<script>

import { mapActions } from 'vuex';

export default {

  methods: {

    ...mapActions( { delCliente : 'deleteCliente'} ),
    deleteCliente( cliente ) {
      
     this.delCliente(cliente);
   
    }, 
/* eslint-disable */ 
    editCliente( cliente ){

       let clienteObj = JSON.parse(JSON.stringify(cliente));
        
           this.$store.commit('editCliente',clienteObj);
           this.$router.push('/cliente/editar');
    }

  },
  computed: {
      clientes(){
         return this.$store.getters.clientes;
      }
    }
   
};
</script>

<style>
</style>