<template>
  <!-- <Link href="/hello">Show Page</Link> -->

  <!-- <div>The Page With Time {{ timer }}</div> -->
  <!-- <div v-if="page.props.value." class="" /> -->
  <header class="border-b border-gray-200 dark:border-gray-700 bg-white dark dark:bg-gray-900  dark:text-white text-gray-800 w-full">
    <div class="container mx-auto ">
      <nav class="p-4 flex items-center justify-between">
        <div class="text-lg font font-medium">
          <Link :href="route('listing.index')">Listings</Link>
        </div>
        <div class="text-xl text-indigo-600 dark:text-indigo-600 border-none font-bold text-center"><Link :href="route('listing.index')">Larazillow</Link></div>
        <div class="btn-primary"><Link :href="route('listing.create')">+ New Listing</Link></div>
      </nav>
    </div>
  </header>

  <main class="container mx-auto p-4">
    <div v-if="flashSuccess" class="mb-4 border rounded-md shadow-sm border-green-200 dark:border-green-800 bg-green-50 dark:bg-green-900 p-2">
      {{ flashSuccess }}
    </div>
    <slot>Default</slot>
  </main>
</template>



<script setup>
import { Link, usePage } from '@inertiajs/vue3'

import {computed} from 'vue'

const page = usePage()


// console.log(page.props.flash.success)
const flashSuccess = computed(
  () => page.props.flash.success,
)




// const timer = ref(0)
// setInterval(()=>timer.value++,1000)

</script>


<style scoped>

.success{
    background-color: green;
    color:white;
}

</style>

