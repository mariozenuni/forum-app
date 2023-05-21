<template>
    <div class="min-w-[160px] w-[160px]  transition-all bg-indigo-700 text-white py-4 px-2">
      <router-link :to="{name: 'app.dashboard'}"
                   class="flex items-center p-2 rounded transition-colors hover:bg-black/30">
        <span class="mr-2 text-gray-300">
  
        </span>
        <span class="text-xs">
          Forum App
        </span>
    </router-link>
    <router-link :to="{name: 'app.dashboard'}"
                   class="flex items-center p-2 rounded transition-colors hover:bg-black/30">
        <span class="mr-2 text-gray-300">
  
        </span>
        <span class="text-xs">
          Channels
        </span>
    </router-link>
    <router-link :to="{name: 'app.dashboard'}"
                   class="flex items-center p-2 rounded transition-colors hover:bg-black/30">
        <span class="mr-2 text-gray-300">
  
        </span>
        <span class="text-xs">
          Discussions
        </span>
    </router-link>
    <router-link :to="{name: 'app.dashboard'}"
                   class="flex items-center p-2 rounded transition-colors hover:bg-black/30">
        <span class="mr-2 text-gray-300">
  
        </span>
        <span class="text-xs">
        </span>
    </router-link>

    </div>
  </template>
  
  <script setup>
    import {HomeIcon, UserGroupIcon, UsersIcon, ViewListIcon, ChartBarIcon} from '@vue-hero-icons/outline'
  </script>
  
  <style scoped>
  
  </style>