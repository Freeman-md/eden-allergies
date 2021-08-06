<template>
  <div class="flex flex-col items-start py-4 space-y-2 responsive-container">
    <div class="flex items-center justify-between w-full">
      <span class="text-lg font-bold">Items</span>
    </div>
    <div v-if="items"  class="grid w-full grid-cols-3 gap-6 sm:gap-4 md:grid-cols-8 sm:grid-cols-6 lg:grid-cols-10">
      <div 
        v-for="(item, index) in items" 
        :key="index"
      >
        <Item
          :item="item" 
          :index="index"
        /> 
      </div>
    </div>
    <div v-else class="py-4 responsive-container">
      <div class="px-2 py-2 text-base font-semibold bg-blue-500 border-l-4 border-blue-800 rounded-l-md bg-opacity-70">
        <span>Items Not Available</span>
      </div>  
    </div>
  </div>  
</template>

<script>
import Item from './Item.vue'
export default {
  name: 'Items',
  props: ['items'],
  components: { Item }
}
</script>