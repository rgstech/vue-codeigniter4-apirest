import Vue from "vue";
import axios from "axios";

Vue.use({
  install(Vue) {
    Vue.prototype.$http = axios.create({
      // lembrar que definindo no prototype fica disponivel em toda instancia do Vue
      // baseURL: "http://localhost:3000/clientes/"
      //baseURL: "http://localhost:80/ci4-apps/ci4app/cliente",
       baseURL: "http://localhost:80/ci4-apps/apirest/cliente",
       
     
    }); //obs o axios create criar um instancia do axios preconfigurada e personalizada
  },
});
