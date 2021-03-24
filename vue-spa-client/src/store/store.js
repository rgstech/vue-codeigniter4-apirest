import Vue from "vue";
import Vuex from "vuex";
import actions from "./actions";
import cliente from "./modules/cliente";

Vue.use(Vuex);

export default new Vuex.Store({
  //state: { meunome: "Rodrigo Guimaraes"}, // linha somente para teste de acesso do rootState nos modulos
  actions,
  modules: { cliente },
});
