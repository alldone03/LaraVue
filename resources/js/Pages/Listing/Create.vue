<template>
  <form @submit.prevent="create">
    <div>
      <div>
        <label for="">Beds</label>
        <input id="" v-model.number="form.beds" type="text" name="" />
      </div>
      <div>
        <label for="">Baths</label>
        <input id="" v-model.number="form.baths" type="text" name="" />
      </div>
      <div>
        <label for="">Area</label>
        <input id="" v-model.number="form.area" type="text" name="" />
      </div>
      <div>
        <label for="">City</label>
        <input id="" v-model.number="form.city" type="text" name="" />
      </div>
      <div>
        <label for="">Post Code</label>
        <input id="" v-model.number="form.code" type="text" name="" />
      </div>
      <div>
        <label for="">Street</label>
        <input id="" v-model.number="form.street" type="text" name="" />
      </div>
      <div>
        <label for="">Street Nr</label>
        <input id="" v-model.number="form.street_nr" type="text" name="" />
      </div>
      <div>
        <label for="">Price</label>
        <input id="" v-model.number="form.price " type="text" name="" />
      </div>
      <div>
        <button type="submit">Create</button>
      </div>
    </div>
  </form>
</template>

<script setup>

// import { Inertia } from '@inertiajs/vue3'



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


const create = () => form.post('/listing')





</script>




<style scoped>

label{
    margin-right: 2em;
}
div{
    padding: 2px;
}

</style>
