import Vue from 'vue'
import Vuex from 'vuex'
import router from '../router/index'

import { allergies } from './allergies'
import { meals } from './meals'
import { users } from './users'

Vue.use(Vuex)

export default new Vuex.Store({
  state: {
    token: ''
  },
  getters: {
    authenticated: state => state.token !== '',
    getToken: state => state.token
  },
  mutations: {
    setToken: (state, { token }) => {
      state.token = token
      localStorage.setItem('authToken', token)
    },
    deleteToken: (state) => {
      localStorage.removeItem('authToken')
      state.token = ''
    }
  },
  actions: {
    register: async ({commit}, payload) => {
      const response = await axios.post('/api/register', payload)
      const data = response.data

      commit('users/setUser', data.user)
      commit('setToken', { token: data.token })
      router.push({name: 'Index'})
    },
    login: async ({commit}, payload) => {
      const response = await axios.post('/api/login', payload)
      const data = response.data

      commit('users/setUser', data.user)
      commit('setToken', { token: data.token })
      router.push({name: 'Index'})
    },
    getAuthUser: async({commit}) => {
      await axios
      .get('/api/user')
      .then(res => {
        if (res.data) {
          commit('users/setUser', res.data)
          commit('setToken', { token: localStorage.getItem('authToken') })
          router.push({name: 'Index'})
        } else {
          commit('users/setUser', {})
          commit('deleteToken')
          router.push({name: 'Login'})
        }
      })
    }
  },
  modules: {
    allergies,
    meals,
    users
  },
})