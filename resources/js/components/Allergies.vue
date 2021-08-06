<template>
  <div class="flex flex-col items-start py-4 space-y-1 responsive-container">
    <span class="text-lg font-bold">Latest Allergies</span>
    <div v-if="allergies"  class="grid w-full grid-cols-3 gap-4">
      <div 
        v-for="(allergy, index) in allergies" 
        :key="index"
      >
        <Allergy 
          :allergy="allergy" 
          :index="index"
        /> 
      </div>
    </div>
    <div v-else class="py-4 responsive-container">
      <div class="px-2 py-2 text-base font-semibold bg-blue-500 border-l-4 border-blue-800 rounded-l-md bg-opacity-70">
        <span>Allergies Not Available</span>
      </div>  
    </div>
  </div>  
</template>

<script>
import Allergy from './Allergy.vue'
export default {
  name: 'Allergies',
  props: ['allergies'],
  components: { Allergy }
}
</script>