<script setup>
import { RouterLink, RouterView } from 'vue-router'

</script>

<template>
  <header>

    <nav class="w-full flex center mx-auto p-2 h-[5vh] bg-[#4F4557]">
      <RouterLink class="px-4 py-1 mr-4 bg-indigo-600 hover:bg-indigo-800 rounded text-white transition-all" to="/">
        Skills</RouterLink>
      <a class="px-4 py-1 mr-4 bg-indigo-600 hover:bg-indigo-800 rounded text-white transition-all"
        href="https://github.com/brunopdt/rest-api" target="_blank">Repositório</a>
    </nav>

  </header>

  <main class="max-w-7xl mx-auto h-[90vh]">
    <RouterView />
  </main>
</template>