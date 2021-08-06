<template>
  <Layout>
    <div class="flex flex-col py-2 space-y-1 responsive-container" v-if="allergy">
      <span class="text-xl underline">Allergy Details</span>
      <span class="text-2xl font-bold">{{allergy.title}}</span>
      <span class="text-lg font-medium">{{allergy.description}}</span>
    </div>
    <Meals :meals="meals" />
  </Layout>
</template>

<script>
import { mapGetters } from 'vuex'
import Layout from '../Layouts/Layout'
import Meals from '../components/Meals.vue'
export default {
  name: 'Allergy',
  components: { Layout, Meals, },
  data: () => ({
    id: ''
  }),
  computed: {
    ...mapGetters('allergies', {
      allergy: 'getAllergy',
      meals: 'getAllergyMeals'
    }),
  },
  async beforeMount() {
    this.id = this.$route.params.id
    this.$store.dispatch('allergies/getAllergy', {id: this.id});
    this.$store.dispatch('allergies/getAllergyMeals', {id: this.id});
  },
  
}
</script>