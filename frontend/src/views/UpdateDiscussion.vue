<template>
    
    <form class="mt-10" method="POST">
   
                <!-- Title Input -->
                <label for="title" class="block text-xs font-semibold text-gray-600 uppercase">Title</label>
                <input  type="text" name="title" placeholder="title" autocomplete="title" v-model="discussions.title"
                    class="block w-full py-3 px-1 mt-2 
                    text-gray-800 appearance-none 
                    border-b-2 border-gray-100
                    focus:text-gray-500 focus:outline-none focus:border-gray-200"
                    required />
                    <div v-if="currentUser">
                                         <!-- user_id  input -->
                    <input  type="text" name="user_id" placeholder="User_id" autocomplete="user_id"    v-model="discussions.user_id"
                    class="  hidden block w-full py-3 px-1 mt-2 
                    text-gray-800 appearance-none 
                    border-b-2 border-gray-100
                    focus:text-gray-500 focus:outline-none focus:border-gray-200"
                     />
                    </div>
                   
                
                         <!-- Channel  input -->
                <label for="channel" class="block text-xs font-semibold text-gray-600 uppercase">Channel</label>
                        <select  class="block w-full py-3 px-1 mt-2 
                    text-gray-800 appearance-none 
                    border-b-2 border-gray-100
                    focus:text-gray-500 focus:outline-none focus:border-gray-200" required v-model="discussions.channel_id"
                  >
                     <option   value="4">USA</option>
                     <option   value="5">France</option>
                     <option   value="6">Italy</option>
                     <option   value="7">UK</option>
                </select>

                    
                        <!-- content Input -->
                
<label for="content" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your message</label>
<textarea  rows="4"  class="block w-full py-3 px-1 mt-2 
                    text-gray-800 appearance-none 
                    border-b-2 border-gray-100
                    focus:text-gray-500 focus:outline-none focus:border-gray-200"
                    required  placeholder="Write your thoughts here..." v-model="discussions.content"></textarea>

                <!-- Auth Buttton -->
                <button type="submit"
                    class="w-full py-3 mt-10 bg-green-800 rounded-sm
                    font-medium text-white">
                    Save
                </button>
   </form>
   
  
</template>

<script setup>
import {ref, computed,onMounted,onBeforeMount} from 'vue' 
import store from '../store'
import router from '../router'
let loading = ref(false);
let errorMsg = ref(""); 



let discussions = {
    title:'',
    user_id:'',
    channel_id:'',
    content:''
}

  
    

</script>


<style scoped>



</style>