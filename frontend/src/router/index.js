import { createRouter, createWebHashHistory, createWebHistory } from "vue-router";
import Dashboard from '../views/Dashboard.vue'
import Login from '../views/Login.vue'
import AppLayout from '../components/AppLayout.vue'
import Channel from '../views/Channel.vue'
import Discussion from '../views/Discussion.vue'
import UpdateDiscussion from '../views/UpdateDiscussion.vue'
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
            {
                path:'channel',
                name:'app.channel',
                component:Channel
            },
            {
                path:'discussion',
                name:'app.discussion',
                component:Discussion
            },
            {
                path:'update-discussion',
                name:'app.update-discussion',
                component:UpdateDiscussion
            }

        ]
    },    
{
    path:'/login',
    name:'login',
    component:Login
},
{
    path:'/logout',
    name:'logout',
    component:Login
}
    
];

const  router  = createRouter({
    history: createWebHistory(),
    routes
});

export default router;