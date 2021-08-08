<template>
  <Layout>

    <!-- Allergies -->
    <Allergies :allergies="allergies" />

    <!-- Meals -->
    <Meals :meals="meals" />

  </Layout>
</template>

<script>
import { mapGetters } from 'vuex'
import Layout from '../Layouts/Layout.vue'
import Search from '../components/Search.vue'
import Allergies from '../components/Allergies.vue'
import Meals from '../components/Meals.vue'
export default {
  name: 'Index',
  components: { Layout, Search, Allergies, Meals},
  async beforeMount() {
    await this.$store.dispatch('allergies/getAllergies');
    await this.$store.dispatch('users/getMealRecommendations');
  },
  computed: {
    ...mapGetters('allergies', {
      allergies: 'getAllergies',
    }),
    ...mapGetters('users', {
      meals: 'getMealRecommendations'
    }),
    ...mapGetters({
      authenticated: 'authenticated'
    })
  }
}
</script>