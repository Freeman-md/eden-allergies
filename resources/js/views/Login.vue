<template>
  <Layout>
    <div class="flex flex-col py-4 space-y-2 sm:w-2/3 responsive-container">
      <span class="text-2xl font-bold">Login</span>

      <div class="flex flex-col items-start space-y-1">
        <span>Test Details [You can still login with your credentials]</span>
        <div class="flex flex-col items-start space-y-0.5">
          <span>Email Address: another@gmail.com</span>
          <span>Password: 123456</span>
        </div>
      </div>
      
      <div v-show="errors.server" class="px-2 py-2 text-base font-semibold text-black bg-red-500 border-l-4 border-red-800 rounded-l-md">
        <span>{{ errors.server }}</span>
      </div>  

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
    email: 'another@gmail.com',
    password: '123456',
    errors: {
      email: '',
      password: '',
      server: ''
    }
  }),
  watch: {
    email() {
      const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/
      if (!this.email) {
        this.errors.email = 'The email field is required.'
      } else if (!regex.test(this.email)) {
        this.errors.email = 'The email must be a valid email address'
      } else {
        this.errors.email = ''
      }
    },
    password() {
      if (!this.password) {
        this.errors.password = 'The password field is required.'
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
    async login() {
      const error = await this.$store.dispatch('login', {
        email: this.email,
        password: this.password
      })
      .then(() => {
        this.errors.server = ''
        this.email = ''
        this.password = ''
      })
      .catch(err => err.response.data);
      
      if (error) {
        const errors = error.errors
        if (errors) {
          if (errors.email) this.errors.email = errors.email[0]
          if (errors.password) this.errors.password = errors.password[0]
        } 
        
        if (error.message && !error.errors) {
          this.errors.server = error.message
        }
      }
    }
  }
}
</script>