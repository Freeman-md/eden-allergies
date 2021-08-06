import Vue from 'vue'
import Vuex from 'vuex'

import { allergies } from './allergies'
import { meals } from './meals'
import { users } from './users'

Vue.use(Vuex)

export default new Vuex.Store({
  state: {
    token: ''
  },
  getters: {
    getToken: state => state.token
  },
  mutations: {
    setToken: (state, { token }) => {
      state.token = token
    }
  },
  actions: {
    register: async ({commit}, payload) => {
      const response = await axios.post('/api/register', payload)
      console.log(response)
    },
    login: async ({commit}, payload) => {
      const response = await axios.post('/api/login', payload)
      console.log(response)
    },
  },
  modules: {
    allergies,
    meals,
    users
  },
})