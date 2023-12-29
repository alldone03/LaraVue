<template>
  <form @submit.prevent="create">
    <div class="grid grid-cols-6 gap-4">
      <div class="col-span-2">
        <label class="label" for="">Beds</label>
        <input id="" v-model.number="form.beds" type="text" name="" class="input" />
        <div v-if="form.errors.beds" class="">
          {{ form.errors.beds }}
        </div>
      </div>
      <div class="col-span-2">
        <label class="block mb-1 text-gray-500 dark:text-gray-300 font-medium" for="">Baths</label>
        <input id="" v-model.number="form.baths" class="block w-full p-2 rounded-md shadow-sm border border-gray-300 dark:border-gray-600 text-gray-500" type="text" name="" />
        <div v-if="form.errors.baths" class="input-error">{{ form.errors.baths }}</div>
      </div>
      <div class="col-span-2">
        <label class="block mb-1 text-gray-500 dark:text-gray-300 font-medium" for="">Area</label>
        <input id="" v-model.number="form.area" class="block w-full p-2 rounded-md shadow-sm border border-gray-300 dark:border-gray-600 text-gray-500" type="text" name="" />
        <div v-if="form.errors.area" class="input-error">{{ form.errors.area }}</div>
      </div>
      <div class="col-span-4">
        <label class="block mb-1 text-gray-500 dark:text-gray-300 font-medium" for="">City</label>
        <input id="" v-model.number="form.city" class="block w-full p-2 rounded-md shadow-sm border border-gray-300 dark:border-gray-600 text-gray-500" type="text" name="" />
        <div v-if="form.errors.number" class="input-error">{{ form.errors.number }}</div>
      </div>
      <div class="col-span-2">
        <label class="block mb-1 text-gray-500 dark:text-gray-300 font-medium" for="">Post Code</label>
        <input id="" v-model.number="form.code" class="block w-full p-2 rounded-md shadow-sm border border-gray-300 dark:border-gray-600 text-gray-500" type="text" name="" />
        <div v-if="form.errors.code" class="input-error">{{ form.errors.code }}</div>
      </div>
      <div class="col-span-4">
        <label class="block mb-1 text-gray-500 dark:text-gray-300 font-medium" for="">Street</label>
        <input id="" v-model.number="form.street" class="block w-full p-2 rounded-md shadow-sm border border-gray-300 dark:border-gray-600 text-gray-500" type="text" name="" />
        <div v-if="form.errors.street" class="input-error">{{ form.errors.street }}</div>
      </div>
      <div class="col-span-2">
        <label class="block mb-1 text-gray-500 dark:text-gray-300 font-medium" for="">Street Nr</label>
        <input id="" v-model.number="form.street_nr" class="block w-full p-2 rounded-md shadow-sm border border-gray-300 dark:border-gray-600 text-gray-500" type="text" name="" />
        <div v-if="form.errors.street_nr" class="input-error">{{ form.errors.street_nr }}</div>
      </div>
      <div class="col-span-6">
        <label class="block mb-1 text-gray-500 dark:text-gray-300 font-medium" for="">Price</label>
        <input id="" v-model.number="form.price " class="block w-full p-2 rounded-md shadow-sm border border-gray-300 dark:border-gray-600 text-gray-500" type="text" name="" />
        <div v-if="form.errors.price" class="input-error">{{ form.errors.price }}</div>
      </div>
      <div class="col-span-6">
        <button type="submit" class="btn-primary">Create</button>
      </div>
    </div>
  </form>
</template>

<script setup>





import { useForm } from '@inertiajs/vue3'







const form = useForm({
  beds:0,
  baths:0,
  area:0,
  city:null,
  street:null,
  code:null,
  street_nr:null,
  price:0,
})


// eslint-disable-next-line no-undef
const create = () => form.post(route('listing.store'))


</script>




<style scoped>

label{
    margin-right: 2em;
}
div{
    padding: 2px;
}

</style>
