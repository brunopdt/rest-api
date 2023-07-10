<script setup>
import { reactive } from 'vue'
import useSkills from '../../composables/skills'

const { storeSkill, errors } = useSkills()

const form = reactive({
  name: "",
  slug: ""
})

</script>

<template>
  <div class="mt-12">
    <form class="max-w-lg mx-auto" @submit.prevent="storeSkill(form), console.log(form)">
      <div class="relative z-0 w-full mb-6 group">

        <input type="text" name="name" id="name" v-model="form.name"
          class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
          placeholder=" " />
        <label for="name"
          class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Skill
          name</label>

        <div v-if="errors.name">
          <span class="text-sm text-red-400">{{ errors.name[0]}}</span>
        </div>
      </div>

      <div class="relative z-0 w-full mb-6 group">
        <input type="text" name="slug" id="slug" v-model="form.slug"
          class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
          placeholder=" " />
        <label for="slug"
          class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Skill
          slug</label>
        <div v-if="errors.slug">
          <span class="text-sm text-red-400">{{ errors.slug[0]}}</span>
        </div>
      </div>

      <button class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 transition-all rounded text-white" type="submit">STORE
        SKILL</button>
    </form>
  </div>
</template>