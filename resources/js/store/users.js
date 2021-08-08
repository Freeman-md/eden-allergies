export const users = {
  namespaced: true,
  state: {
    loading: false,
    user: null,
    mealRecommendations: [],
  },
  getters: {
    getLoading: state => state.loading,
    getUser: state => state.user,
    getMealRecommendations: state => state.mealRecommendations,
  },
  mutations: {
    setLoading: (state, { value }) => {
      state.loading = value
    },
    setUser: (state, user) => {
      state.user = user
    },
    setMealRecommendations: (state, { meals }) => {
      state.mealRecommendations = meals
    }
  },
  actions: {
    getMealRecommendations: async ({commit}) => {
      commit('setLoading', { value: true })
      const response = await axios.get(`/api/users/allergies/meals`)
      const meals = await response.data

      commit('setMealRecommendations', { meals })

      commit('setLoading', { value: false })
    },
  },
}