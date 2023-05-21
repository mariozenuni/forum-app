import { createRouter, createWebHashHistory, createWebHistory } from "vue-router";
import Dashboard from '../views/Dashboard.vue'
import Login from '../views/Login.vue'
import AppLayout from '../components/AppLayout.vue'

const routes = [
    {
        path:'/app',
        name:'app',
        component:AppLayout,
        children:[
            {
                path:'dashboard',
                name:'app.dashboard',
                component:Dashboard
            },

        ]
    },    
{
    path:'/login',
    name:'login',
    component:Login
}
    
];

const  router  = createRouter({
    history: createWebHistory(),
    routes
});

export default router;