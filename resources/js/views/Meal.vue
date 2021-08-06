<template>
  <Layout>
    <div class="flex flex-col py-2 space-y-1 responsive-container" v-if="meal">
      <span class="text-xl underline">Meal Details</span>
      <span class="text-2xl font-bold">{{meal.title}}</span>
      <span class="text-lg font-medium">{{meal.description}}</span>
    </div>
    <Items :items="items" />
  </Layout>
</template>

<script>
import { mapGetters } from 'vuex'
import Layout from '../Layouts/Layout'
import Items from '../components/Items.vue'
export default {
  name: 'Meal',
  components: { Layout, Items, },
  data: () => ({
    id: ''
  }),
  computed: {
    ...mapGetters('meals', {
      meal: 'getMeal',
      items: 'getMealItems'
    }),
  },
  async beforeMount() {
    this.id = this.$route.params.id
    this.$store.dispatch('meals/getMeal', {id: this.id});
    this.$store.dispatch('meals/getMealItems', {id: this.id});
  },
  
}
</script>