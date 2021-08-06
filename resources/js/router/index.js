import Vue from 'vue'
import VueRouter from 'vue-router'

import Index from '../views/Index.vue'
import Allergy from '../views/Allergy.vue'
import Meals from '../views/Meals.vue'
import Meal from '../views/Meal.vue'
import Register from '../views/Register.vue'
import Login from '../views/Login.vue'

Vue.use(VueRouter)

const routes = [
  {
    path: '/',
    name: 'Index',
    component: Index
  },
  {
    path: '/register',
    name: 'Register',
    component: Register
  },
  {
    path: '/login',
    name: 'Login',
    component: Login
  },
  {
    path: '/allergies/:id',
    name: 'Allergy',
    component: Allergy
  },
  {
    path: '/meals',
    name: 'Meals',
    component: Meals,
  },
  {
    path: '/meals/:id',
    name: 'Meal',
    component: Meal
  }
]

const router = new VueRouter({
  mode: 'history',
  routes
})

export default router