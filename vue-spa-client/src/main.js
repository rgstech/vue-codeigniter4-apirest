import Vue from "vue";
import App from "./App.vue";
import store from "./store/store";
import router from './router'

import "./plugins/axios";

Vue.config.productionTip = false;

new Vue({
  router,
  store,
  render: (h) => h(App),
}).$mount("#app");
