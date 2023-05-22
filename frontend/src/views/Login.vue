<template>
        <!-- Container -->

        <GuestLayout title="Login">
            <form class="mt-10" method="POST" @submit.prevent="login" >
                <!-- Email Input -->
                <label for="email" class="block text-xs font-semibold text-gray-600 uppercase">E-mail</label>
                <input id="email" type="email" name="email" placeholder="e-mail address" autocomplete="email" v-model="user.email"
                    class="block w-full py-3 px-1 mt-2 
                    text-gray-800 appearance-none 
                    border-b-2 border-gray-100
                    focus:text-gray-500 focus:outline-none focus:border-gray-200"
                    required />

                <!-- Password Input -->
                <label for="password" class="block mt-2 text-xs font-semibold text-gray-600 uppercase">Password</label>
                <input id="password" type="password" name="password" placeholder="password" autocomplete="current-password" v-model="user.password"
                    class="block w-full py-3 px-1 mt-2 mb-4
                    text-gray-800 appearance-none 
                    border-b-2 border-gray-100
                    focus:text-gray-500 focus:outline-none focus:border-gray-200"
                    required />

                <!-- Auth Buttton -->
                <button type="submit"
                    class="w-full py-3 mt-10 bg-gray-800 rounded-sm
                    font-medium text-white uppercase
                    focus:outline-none hover:bg-gray-700 hover:shadow-none">
                    Login
                </button>
                
            </form>
        </GuestLayout>
</template>

<script setup>
import {ref} from 'vue' 
import store from '../store'
import router from '../router'
import GuestLayout from '../components/GuestLayout.vue';

let loading = ref(false);
let errorMsg = ref(""); 

const user = {
        email:'',
        password:''

    }
        

function login(){
  
    store.dispatch('login',user)
        .then(()=>{
            loading.value = false;
            router.push({name:'app.dashboard'})
        })
        .catch(({responde})=>{
            loading.value = false;
            errorMsg = responde.data.message;
        })

 }
 

</script>


<style scoped>



</style>