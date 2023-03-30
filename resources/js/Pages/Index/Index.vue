


<template>
  <div class="">Index</div>
  <Link href="/hello"> Show Page</Link>

  <div>
    {{ message }}
  </div>
</template>


<script setup>
import {Link} from '@inertiajs/vue3'


const props = defineProps({message:String})

console.log(props.message)

</script>


