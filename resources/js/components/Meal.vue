<template>
  <div class="flex flex-col items-center justify-center" @click.prevent="showDetails">
    <div class="flex flex-col items-center space-y-0.5 justify-center w-20 h-20 rounded-full">
      <img :src="`/assets/images/foods/${number}.jpg`" :alt="meal.title" class="object-cover object-center w-20 h-20 rounded-full" />
    </div>  
    <span class="text-sm font-semibold">{{ meal.title }}</span>
    <span class="px-1.5 py-0.5 rounded-md text-xs text-center text-white" :class="allergyName">{{ meal.allergy.title.split(' ')[0] }}</span>
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
    },
    allergyName() {
      if (this.meal.allergy.title === 'Nut Allergy') {
        return 'bg-blue-500'
      } else if (this.meal.allergy.title === 'ShellFish Allergy') {
        return 'bg-yellow-500'
      } else if (this.meal.allergy.title === 'SeaFood Allergy') {
        return 'bg-red-500'
      }
    }
  },
  methods: {
    showDetails() {
      this.$router.push({name: 'Meal', params: { id: this.meal.id }})
    },
  }
}
</script>