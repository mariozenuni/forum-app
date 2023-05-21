<template>
    <div  class="min-h-full bg-gray-200 flex">
      <!--    Sidebar-->
      <Sidebar/>
      <!--/    Sidebar-->
  
      <div class="flex-1">
        <Navbar></Navbar>
        <!--      Content-->
        <main class="p-6">
          <router-view></router-view>
        </main>
        <!--      Content-->
      </div>
    </div>



  </template>
  
  <script setup>
  import {ref, computed, onMounted, onUnmounted} from 'vue'
  import Sidebar from './Siderbar.vue';
  import Navbar from "./Navbar.vue";

  
  const {title} = defineProps({
    title: String
  })


  

  
  onMounted(() => {

  })
  

  
  </script>
  
  <style scoped>
  
  </style>