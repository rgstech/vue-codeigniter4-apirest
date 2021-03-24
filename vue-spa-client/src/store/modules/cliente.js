import Vue from "vue";
/* eslint-disable */

export default {
  state: {
    clientes: [],
    clienteEdit: {}
  },

  mutations: {
    //também conhecido como setters ,
    //funcoes especializadas somente em mudar estado e nada mais,
    //para processar coisas(pre processamento) usar action primeiro

    deleteCliente(state, cliente) {
      let clienteObj = JSON.parse(JSON.stringify(cliente));
      Vue.prototype.$http.delete(`/${clienteObj.id}`).then((resp) => {
        const data = resp.data;
        if (data) {
          console.log(data);
          this.dispatch("loadDataCliente");
        }
      });
    },
    /* eslint-disable */

    addCliente(state, cliente) {
      //state.clientes.push(cliente); // just for test/ apenas para teste
      let clienteObj = JSON.parse(JSON.stringify(cliente));

      Vue.prototype.$http.post("", clienteObj).then((resp) => {
        const data = resp.data;
        if (data) {
          console.log(data);
          this.dispatch("loadDataCliente");
        }
      });
    },
  /* eslint-disable */
    updateCliente(state, cliente){
     
      let clienteObj = JSON.parse(JSON.stringify(cliente));
      Vue.prototype.$http.post("", clienteObj).then((resp) => {
      //Vue.prototype.$http.put("", clienteObj).then((resp) => {
        const data = resp.data;
        if (data) {
          console.log(data);
          this.dispatch("loadDataCliente");
        }
      });


    },

    initClientes(state, clientes) {
      state.clientes = clientes;
    },

    editCliente(state, cliente){
      state.clienteEdit = cliente;
    }
  },

  actions: {
    addCliente({ commit }, cliente) {
      commit("addCliente", cliente);
    },
    deleteCliente({ commit }, cliente) {
      commit("deleteCliente", cliente);
    },
    updateCliente({ commit }, cliente){
      commit("updateCliente", cliente);
    },
    /* eslint-disable */

    loadDataCliente({ state, commit, rootState }) {
      // alert(rootState.meunome); //linha de teste para acesso ao rootState
      this.dispatch("loadData"); //essa action se encontra fora aqui e no store principal atraves de um modulo
    },
  },

  getters: {
    clientes(state) {
      return state.clientes;
    },

    clienteEdit(state){
      return state.clienteEdit;
    }
  },
};
