export const meals = {
  namespaced: true,
  state: {
    loading: false,
    meal: null,
    meals: '',
    mealItems: []
  },
  getters: {
    getLoading: state => state.loading,
    getMeal: state => state.meal,
    getMeals: state => state.meals,
    getMealItems: state => state.mealItems
  },
  mutations: {
    setLoading: (state, { value }) => {
      state.loading = value
    },
    setMeal: (state, { meal }) => {
      state.meal = meal
    },
    setMeals: (state, { meals }) => {
      state.meals = meals
    },
    setMealItems: (state, { items }) => {
      state.mealItems = items
    }
  },
  actions: {
    getMeal: async ({commit}, {id}) => {
      commit('setLoading', { value: true })
      const response = await axios.get(`/api/meals/${id}`)         
      const data = await response.data   
      const meal = data

      commit('setMeal', { meal })

      commit('setLoading', { value: false })
    },
    getMeals: async ({commit}) => {
      commit('setLoading', { value: true })
      const response = await axios.get('/api/meals')
      const data = await response.data
      const meals = data.data

      commit('setMeals', { meals })

      commit('setLoading', { value: false })
    },
    getMealItems: async ({commit}, {id}) => {
      commit('setLoading', { value: true })
      const response = await axios.get(`/api/meals/${id}/items`)
      const data = await response.data
      const items = data.data

      commit('setMealItems', { items })

      commit('setLoading', { value: false })
    }
  }
}