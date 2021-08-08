import Vue from 'vue'
import VueRouter from 'vue-router'
import store from '../store/index'

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

router.beforeEach((to, from, next) => {
  if ((to.name !== 'Login' && to.name !== 'Register') && !store.getters.authenticated) {
    next({name: 'Login'})
  } else if (store.getters.authenticated) {
    next()
  } else {
    next()
  }
})

router.beforeResolve((to, from, next) => {
  if (to.name) {
    NProgress.start()
  }
  next()
})

router.afterEach((to, from) => {
  NProgress.done()
})


export default router