<template>
  <div class="flex flex-col items-center justify-center">
    <div class="flex flex-col items-center space-y-0.5 justify-center w-20 h-20 rounded-full">
      <img :src="`/assets/images/foods/${number}.jpg`" :alt="item.title" class="object-cover object-center w-20 h-20 rounded-full" />
    </div>  
    <span class="text-sm font-semibold">{{ item.title }}</span>
    <span class="px-2 py-0.5 rounded-md text-sm text-center text-white" :class="category">{{ item.category }}</span>
  </div>
</template>

<script>
export default {
  name: 'Item',
  props: {
    item: {
      type: Object,
      required: true
    },
    index: {
      type: Number,
      required: true,
    }
  },
  computed: {
    number() {
      return this.index + 1
    },
    category() {
      return this.item.category === 'main' ? 'bg-blue-500' : 'bg-red-500'
    }
  }
}
</script>