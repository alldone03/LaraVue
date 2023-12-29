<template>
  <div class="">
    <span class="font-bold">{{ listing.beds }}</span> bds <span class="text-gray-400">|</span>&nbsp;
    <span class="font-bold">{{ listing.baths }}</span> ba <span class="text-gray-400">|</span>&nbsp;
    <span class="font-bold">{{ listing.beds }}</span> m²
  </div>
</template>


<script setup>

defineProps({
  listing:Object,
})

</script>
