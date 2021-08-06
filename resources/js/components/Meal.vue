<template>
  <div class="flex flex-col items-center justify-center" @click.prevent="showDetails">
    <div class="flex flex-col items-center space-y-0.5 justify-center w-20 h-20 rounded-full">
      <img :src="`/assets/images/foods/${number}.jpg`" :alt="meal.title" class="object-cover object-center w-20 h-20 rounded-full" />
    </div>  
    <span class="text-sm font-semibold">{{ meal.title }}</span>
  </div>
</template>

<script>
export default {
  name: 'Meal',
  props: {
    meal: {
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
    }
  },
  methods: {
    showDetails() {
      this.$router.push({name: 'Meal', params: { id: this.meal.id }})
    }
  }
}
</script>