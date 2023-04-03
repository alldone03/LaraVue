<template>
  <form @submit.prevent="create">
    <div>
      <div>
        <label for="">Beds</label>
        <input id="" v-model.number="form.beds" type="text" name="" />
        <div v-if="form.errors.beds" class="">
          {{ form.errors.beds }}
        </div>
      </div>
      <div>
        <label for="">Baths</label>
        <input id="" v-model.number="form.baths" type="text" name="" />
        <div v-if="form.errors.baths" class="">{{ form.errors.baths }}</div>
      </div>
      <div>
        <label for="">Area</label>
        <input id="" v-model.number="form.area" type="text" name="" />
        <div v-if="form.errors.area" class="">{{ form.errors.area }}</div>
      </div>
      <div>
        <label for="">City</label>
        <input id="" v-model.number="form.city" type="text" name="" />
        <div v-if="form.errors.number" class="">{{ form.errors.number }}</div>
      </div>
      <div>
        <label for="">Post Code</label>
        <input id="" v-model.number="form.code" type="text" name="" />
        <div v-if="form.errors.code" class="">{{ form.errors.code }}</div>
      </div>
      <div>
        <label for="">Street</label>
        <input id="" v-model.number="form.street" type="text" name="" />
        <div v-if="form.errors.street" class="">{{ form.errors.street }}</div>
      </div>
      <div>
        <label for="">Street Nr</label>
        <input id="" v-model.number="form.street_nr" type="text" name="" />
        <div v-if="form.errors.street_nr" class="">{{ form.errors.street_nr }}</div>
      </div>
      <div>
        <label for="">Price</label>
        <input id="" v-model.number="form.price " type="text" name="" />
        <div v-if="form.errors.price" class="">{{ form.errors.price }}</div>
      </div>
      <div>
        <button type="submit">Create</button>
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
