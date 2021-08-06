<template>
  <div class="relative h-40 transition duration-200 transform rounded-lg shadow-lg cursor-pointer drop-shadow-2xl hover:scale-105" @click.prevent="showDetails">
    <div class="absolute inset-0 flex flex-col justify-end p-2 text-white bg-black rounded-md cursor-pointer bg-opacity-70">
      <span class="font-semibold cursor-pointer">{{ allergy.title }}</span>
      <span class="text-xs text-gray-300 cursor-pointer">{{ allergy.description }}</span>
    </div>
    <img :src="`/assets/images/foods/${number}.jpg`" :alt="allergy.title" class="object-cover object-center w-full h-40 rounded-lg" />
  </div>
</template>

<script>
export default {
  name: 'Allergy',
  props: {
    allergy: {
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
      this.$router.push({ name: 'Allergy', params: {id: this.allergy.id} })
    }
  }
}
</script>