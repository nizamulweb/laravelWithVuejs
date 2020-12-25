import Vue from 'vue'
import VueRouter from 'vue-router'


Vue.use(VueRouter);
import HomePage from '../pages/Home'
import AboutPage from '../pages/About'

//Service
import ServicePage from '../pages/service/create'
import ManageServicePage from '../pages/service/index'




const routes = new VueRouter({
  mode: 'history',
  routes:[
     {
       path: '/', component: HomePage,name:'home',
     },

      {
       path: '/about', component: AboutPage,name:'about',
     },

     {
       path: '/createservice', component: ServicePage,name:'create_service',
     },

     {
       path: '/manageservice', component: ManageServicePage,name:'index_service',
     }
  ]
})



export default routes;