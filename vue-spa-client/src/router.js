import Vue from "vue";
import VueRouter from "vue-router";


import ClienteEditar from './components/ClienteEditar';
import Home          from  './components/Home';
// import ClienteForm   from './components/ClienteForm';
// import ClienteTable  from './components/ClienteTable';

Vue.use(VueRouter);

export default new VueRouter({
    mode:"history",
 
    routes: [
      {
        path: "/cliente",
        component: Home,
        // components: {
        //   default: User,
        //   rvteste: TesteComp,
        // },
      //   children: [
        //     // UserHome will be rendered inside User's <router-view>
        //     // when /user/:id is matched
        //     { path: "", component: UserHome },
        //     { path: "posts", component: UserPosts },
        //     { path: "redir", redirect: "/user/rodrigo/email/rod@something.net" },
            
          //   { path: "editar", component: ClienteEditar , props: true },
       //  ],
      },
       { 
         path: "/", 
         redirect: "/cliente" 
       },  {
        path: "/cliente/editar",
        component: ClienteEditar,
        props: true 
      }

    ],
  });