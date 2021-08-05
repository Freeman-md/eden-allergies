<template>
  <div>

    <!-- Header -->
    <div class="fixed top-0 z-50 flex justify-between w-full p-2 bg-white shadow-md">
      <router-link :to="{name: 'Index'}">Eden Allergies</router-link>

      <!-- Navigation -->
      <div class="flex space-x-2">
        <router-link :to="{name: 'Register'}">Register</router-link>
        <router-link :to="{name: 'Login'}">Login</router-link>
      </div>

    </div>

    <!-- Main View -->
    <div class="mt-10">
      <slot/>
    </div>

    <!-- Footer -->

  </div>
</template>

<script>
export default {

}
</script>