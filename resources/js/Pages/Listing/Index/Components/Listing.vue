<template>
  <Box>
    <div class="">
      <Link :href="route('listing.show',{listing:listing.id})">
        <div class="flex items-center gap-1">
          <Price :price="listing.price" class="text-2xl font-bold" />
          <div class="text-sm text-gray-500">
            <Price :price="monthlyPayment" class="" /> pm
          </div>
        </div>
        <ListingSpace :listing="listing" class="text-lg" />
        <ListingAddress :listing="listing" class="text-gray-500" />
      </Link>
    </div>
    <div class="">
      <Link
        :href="route('listing.edit',{listing: listing.id})"
      >
        Edit
      </Link>
      <Link
        :href="route('listing.destroy',{listing: listing.id})" method="DELETE"
      >
        Delete
      </Link>
    </div>
  </Box>
</template>

<script setup>
import { Link } from '@inertiajs/vue3'
import ListingAddress from '@/Pages/Components/ListingAddress.vue'
import Box from '@/Pages/Components/UI/Box.vue'
import ListingSpace from '@/Pages/Components/ListingSpace.vue'
import Price from '@/Pages/Components/Price.vue'
import {useMonthlyPayment} from '@/Composables/useMonthlyPayment'


const props = defineProps({
  listing:Object,
})

const {monthlyPayment} = useMonthlyPayment(
  props.listing.price,2.5,25,
)
</script>
