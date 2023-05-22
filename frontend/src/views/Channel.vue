<template>
             <form class="mt-10" method="POST"  @submit.prevent="addChannels">
                <!-- Title Input -->
                <label for="title" class="block text-xs font-semibold text-gray-600 uppercase">Title</label>
                <input  type="text" name="title" placeholder="title" autocomplete="title" v-model="channels.title"
                    class="block w-full py-3 px-1 mt-2 
                    text-gray-800 appearance-none 
                    border-b-2 border-gray-100
                    focus:text-gray-500 focus:outline-none focus:border-gray-200"
                    required />

                <!-- Auth Buttton -->
                <button type="submit"
                    class="w-full py-3 mt-10 bg-green-800 rounded-sm
                    font-medium text-white">
                    Save
                </button>
   </form>
  
</template>

<script setup>

import {ref} from 'vue' 
import store from '../store'
import router from '../router'

let loading = ref(false);
let errorMsg = ref(""); 

const channels = {
    title:''
}
    function addChannels(){
        store.dispatch('addChannels',channels)
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