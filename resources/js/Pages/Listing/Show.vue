<template>
  <span>


    <div class=" flex md:grid md:grid-cols-12 gap-4">

      <Box class="md:col-span-7  flex items-center w-full">
        <div class="w-full text-center font-medium text-gray-500">
          No Images
        </div>
      </Box>
      <Box class=" md:col-span-5 flex flex-col gap-4">
        <template #header>
          Basic Info
        </template>
        <Price :price="listing.price" class="text-2xl font-bold" />
        <ListingSpace :listing="listing" class="text-lg" />
        <ListingAddress :listing="listing" class="text-gray-500" />

      </Box>
      <Box
        class="col-span-7
      "
      ><template #header>
         Monthly Payment
       </template>
        Make an offer
        <div class="">
          <label class="label">Interest rate ({{ interestRate }})</label>
          <input v-model.number="interestRate" type="range" min="0.1" max="30" step="0.1" class="w-full h-4 bg-gray-200 rounded-lg appearance-none cursor-pointer dark:bg-gray-700" />
        </div>
        <div class="">
          <label class="label">Duration ({{ duration }} years)</label>
          <input v-model.number="duration" type="range" min="3" max="35" step="1" class="w-full h-4 bg-gray-200 rounded-lg appearance-none cursor-pointer dark:bg-gray-700" />
        </div>
        <div class="text-gray-600 dark:text-gray-300 mt-2">
          <div class="text-gray-400">Your Monthly payment</div>
          <Price :price="monthlyPayment" class="text-3xl" />
        </div>
        <div class="mt-2 text-gray-500">
          <div class="flex justify-between">
            <div class="">Total paid</div>
            <div class="">
              <Price :price="totalPaid" class="font-medium" />
            </div>
          </div>
          <div class="flex justify-between">
            <div class="">Principal paid</div>
            <div class="">
              <Price :price="listing.price" class="font-medium" />
            </div>
          </div>
          <div class="flex justify-between">
            <div class="">Interest paid</div>
            <div class="">
              <Price :price="totalInterest" class="font-medium" />
            </div>
          </div>
        </div>
      </Box>
    </div>
  </span>
</template>

<script setup>
import ListingSpace from '@/Pages/Components/ListingSpace.vue'
import ListingAddress from '@/Pages/Components/ListingAddress.vue'
import Price from '@/Pages/Components/Price.vue'
import Box from '@/Pages/Components/UI/Box.vue'
import {ref} from 'vue'

import {useMonthlyPayment} from '@/Composables/useMonthlyPayment'

const interestRate = ref(2.5)
const duration = ref(25)


const props = defineProps({
  listing: Object,

})

const {monthlyPayment,totalPaid,totalInterest } = useMonthlyPayment(props.listing.price,interestRate,duration)


</script>
