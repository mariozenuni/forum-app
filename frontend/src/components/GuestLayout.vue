<template>
    <!-- Container -->
<div class="flex flex-col h-screen bg-gray-100">
<!-- Auth Card Container -->
<div class="grid place-items-center mx-2 my-20 sm:my-auto">
   
    <!-- Auth Card -->
    <div class="w-11/12 p-12 sm:w-8/12 md:w-6/12 lg:w-5/12 2xl:w-4/12 
        px-6 py-10 sm:px-10 sm:py-6 
        bg-white rounded-lg shadow-md lg:shadow-lg">

        <!-- Card Title -->
        <h2 class="text-center font-semibold text-3xl lg:text-4xl text-gray-800">
           {{ title }}
        </h2>

     <slot></slot>
    </div>
</div>
</div>
</template>

<script setup>
  
  const {title} =  defineProps({
            title:String
        })
        
</script>


<style scoped>



</style>