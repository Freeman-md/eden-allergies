<template>
  <div>
    <!-- Back Button -->
    <button class="fixed z-50 flex items-center justify-center w-10 h-10 text-base text-white bg-black rounded-full shadow-md top-2 left-2" @click.prevent="$router.back()">
      <span class="fa fa-caret-left"></span>
    </button>

    <div class="fixed z-50 p-2 text-sm text-white bg-black top-2 right-2">
      <div v-if="!authenticated" class="flex items-center space-x-4">
        <router-link :to="{name: 'Register'}"><span class="fa fa-user"></span></router-link>
        <router-link :to="{name: 'Login'}"><span class="fa fa-sign-in-alt"></span></router-link>
      </div>
      <span @click.prevent="logout" v-else class="cursor-pointer fas fa-power-off"></span>
    </div>
    
    <!-- Search Meals -->
    <Search />
  </div>
</template>

<script>
import { mapGetters } from 'vuex'
import Search from '../components/Search.vue'
export default {
  name: 'Header',
  components: {Search},
  watch: {
    $route (to, from) {
      console.log(to, from)  
    }
  },
  computed: {
    ...mapGetters({
      authenticated: 'authenticated'
    })
  },
  methods: {
    logout() {
      this.$store.commit('deleteToken')
      this.$store.commit('users/setUser', null)
      this.$router.push({name: 'Login'})
    }
  }
}
</script>