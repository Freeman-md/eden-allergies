<template>
  <Layout>
    <div class="flex flex-col w-2/3 py-4 space-y-2 responsive-container">
      <span class="text-2xl font-bold">Login</span>
      <form novalidate class="flex flex-col items-start w-full space-y-2" @submit.prevent="login">

        <div class="flex flex-col items-start w-full space-y-0.5">
          <div class="flex items-center w-full p-2 space-x-2 transition duration-200 bg-white border rounded-sm shadow-md" :class="{'border-red-500': errors.email}">
            <span class="fa fa-envelope"></span>
            <input v-model="email" type="email" class="flex-grow focus:outline-none" placeholder="Enter your email address" />
          </div>
          <span class="text-red-500" v-if="errors.email">{{ errors.email }}</span>
        </div>

        <div class="flex flex-col items-start w-full space-y-0.5">
          <div class="flex items-center w-full p-2 space-x-2 transition duration-200 bg-white border rounded-sm shadow-md" :class="{'border-red-500': errors.password}">
            <span class="fa fa-lock"></span>
            <input v-model="password" type="password" class="flex-grow focus:outline-none" placeholder="Enter your password" />
          </div>
          <span class="text-red-500" v-if="errors.password">{{ errors.password }}</span>
        </div>

        <button :disabled="!valid" class="content-center p-2 text-sm font-bold text-center text-white bg-black rounded-md" :class="{'bg-opacity-70 cursor-default': !valid}">Login</button>
        
      </form>
    </div>
  </Layout>
</template>

<script>
import Layout from '../Layouts/Layout.vue'
export default {
  name: 'Login',
  components: { Layout, },
  data: () => ({
    email: '',
    password: '',
    errors: {
      email: '',
      password: '',
    }
  }),
  watch: {
    email() {
      const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/
      if (!this.email) {
        this.errors.email = 'Please enter your email address'
      } else if (!regex.test(this.email)) {
        this.errors.email = 'Please enter a valid email address'
      } else {
        this.errors.email = ''
      }
    },
    password() {
      if (!this.password) {
        this.errors.password = 'Please enter your password'
      } else {
        this.errors.password = ''
      }
    },
  },
  computed: {
    valid() {
      return !this.errors.email && !this.errors.password
    }
  },
  methods: {
    login() {
      this.$store.dispatch('login', {
        email: this.email,
        password: this.password
      });
    }
  }
}
</script>