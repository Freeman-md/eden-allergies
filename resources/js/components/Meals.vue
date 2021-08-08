<template>
  <div class="flex flex-col items-start py-4 space-y-2 responsive-container">
    <div class="flex items-center justify-between w-full">
      <span class="text-lg font-bold">Meal Recommendations</span>
    </div>
    <div v-if="meals.length > 0"  class="grid w-full grid-cols-3 gap-6 sm:gap-4 md:grid-cols-8 sm:grid-cols-6 lg:grid-cols-10">
      <div 
        v-for="(meal, index) in meals" 
        :key="index"
      >
        <Meal 
          :meal="meal" 
          :index="getIndex(index)"
        /> 
      </div>
    </div>
    <div v-else class="py-4 responsive-container">
      <div class="px-2 py-2 text-base font-semibold bg-blue-500 border-l-4 border-blue-800 rounded-l-md bg-opacity-70">
        <span>You do not have any allergies selected yet. Contact admin for more information</span>
      </div>  
    </div>
  </div>  
</template>

<script>
import Meal from './Meal.vue'
export default {
  name: 'Meals',
  props: ['meals'],
  components: { Meal },
  methods: {
    getIndex(index) {
      
      if (index > 20 && index <= 40) {
        return index - 20
      } else if (index > 40) {
        return index - 40
      }

      return index
    }
  }
}
</script>