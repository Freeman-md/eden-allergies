<template>
  <div class="relative w-full bg-center bg-cover bg-background h-80">
    <div class="absolute inset-0 bg-black bg-opacity-70">
      <div class="flex flex-col items-center justify-center h-full px-2 space-y-4 text-white sm:px-0">
        <div class="flex flex-col items-center justify-center space-y-1">
          <span v-if="user" class="text-sm font-medium tracking-widest">Welcome, <span class="font-bold">{{user ? user.name : ''}}</span></span>
          <span v-if="user" class="text-sm font-medium tracking-widest">Your email address is {{ user ? user.email : '' }}</span>
          <span class="text-lg font-medium tracking-widest">Search over</span>
          <span class="text-3xl font-semibold">10,000 meals</span>
        </div>
        <!-- SearchBox -->
        <div class="flex items-center justify-between w-full sm:w-3/4 px-2 py-1.5 space-x-2 bg-white border rounded-sm shadow-md">
          <span class="text-black cursor-pointer fa fa-search"></span>
          <input class="flex-grow text-black focus:border-none focus:outline-none focus:ring-0" placeholder="meal, item, keyword" />
          <span class="text-black cursor-pointer fa fa-sliders-h"></span>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import { mapGetters } from 'vuex'
export default {
  name: 'Search',
  computed: {
    ...mapGetters('users', {
      user: 'getUser'
    })
  }
}
</script>