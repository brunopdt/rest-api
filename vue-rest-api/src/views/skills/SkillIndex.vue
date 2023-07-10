<script setup>
import useSkills from '../../composables/skills'
import { onMounted } from 'vue'

const { skills, loadSkills, deleteSkill } = useSkills()
onMounted(() => {
  loadSkills()
})
</script>

<template>
  <div class="mt-12">
    <div class="flex justify-end m-2 p-2">
      <RouterLink class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 transition-all rounded text-white"
        :to="{ name: 'SkillCreate' }">NEW SKILL</RouterLink>

    </div>
    <div class="relative overflow-x-auto">
      <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
          <tr>
            <th scope="col" class="px-6 py-3">
              Skill Name
            </th>
            <th scope="col" class="px-6 py-3">
              Slug
            </th>
            <th scope="col" class="px-6 py-3 flex justify-center">
              Actions
            </th>
          </tr>
        </thead>
        <tbody>

          <tr v-for="skill in  skills " :key="skill.id" class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
              {{ skill.name }}
            </th>
            <td class="px-6 py-4">
              {{ skill.slug }}
            </td>
            <td class="py-4 flex gap-1 justify-center">
              <RouterLink :to="{ name: 'SkillEdit', params: { id: skill.id } }"
                class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 transition-all rounded text-white">EDIT</RouterLink>
              <button @click="deleteSkill(skill.id)"
                class="px-4 py-2 bg-red-500 hover:bg-red-400 transition-all rounded text-white">DEL</button>
            </td>
          </tr>

        </tbody>
      </table>
    </div>

  </div>
</template>