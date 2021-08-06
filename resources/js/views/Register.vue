<template>
  <Layout>
    <div class="flex flex-col sm:w-2/3 py-4 space-y-2 responsive-container">
      <span class="text-2xl font-bold">Register</span>
      <form novalidate class="flex flex-col items-start w-full space-y-2" @submit.prevent="register">

        <div class="flex flex-col items-start w-full space-y-0.5">
          <div class="flex items-center w-full p-2 space-x-2 transition duration-200 bg-white border rounded-sm shadow-md" :class="{'border-red-500': errors.name}">
            <span class="fa fa-user"></span>
            <input v-model="name" type="text" class="flex-grow focus:outline-none" placeholder="Enter your name" />
          </div>
          <span class="text-red-500" v-if="errors.name">{{ errors.name }}</span>
        </div>

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

        <div class="flex items-center w-full p-2 space-x-2 bg-white border rounded-sm shadow-md">
          <span class="fa fa-check"></span>
          <input v-model="password_confirmation" type="password" class="flex-grow focus:outline-none" placeholder="Enter your password again" />
        </div>

        <button :disabled="!valid" class="content-center p-2 text-sm font-bold text-center text-white bg-black rounded-md" :class="{'bg-opacity-70 cursor-default': !valid}">Register</button>
        
      </form>
    </div>
  </Layout>
</template>

<script>
import Layout from '../Layouts/Layout.vue'
export default {
  name: 'Register',
  components: { Layout, },
  data: () => ({
    name: '',
    email: '',
    password: '',
    password_confirmation: '',
    errors: {
      name: '',
      email: '',
      password: '',
    }
  }),
  watch: {
    name() {
      if (!this.name) {
        this.errors.name = 'Please enter your name'
      } else if (this.name.length < 4)  {
        this.errors.name = 'Your name must be greater than 4 characters'
      } else {
        this.errors.name = ''
      }
    },
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
      } else if (this.password.length < 8)  {
        this.errors.password = 'Your name must be greater than 8 characters'
      } else if (this.password !== this.password_confirmation) {
        this.errors.password = 'Both passwords do not match'
      } else {
        this.errors.password = ''
      }
    },
  },
  computed: {
    valid() {
      return !this.errors.name && !this.errors.email && !this.errors.password
    }
  },
  methods: {
    register() {
      this.$store.dispatch('register', {
        name: this.name,
        email: this.email,
        password: this.password,
        password_confirmation: this.password_confirmation
      });
    }
  }
}
</script>