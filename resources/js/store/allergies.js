export const allergies = {
  namespaced: true,
  state: {
    loading: false,
    allergy: null,
    allergies: '',
    allergyMeals: [],
  },
  getters: {
    getLoading: state => state.loading,
    getAllergy: state => state.allergy,
    getAllergies: state => state.allergies,
    getAllergyMeals: state => state.allergyMeals
  },
  mutations: {
    setLoading: (state, { value }) => {
      state.loading = value
    },
    setAllergy: (state, { allergy }) => {
      state.allergy = allergy
    },
    setAllergies: (state, { allergies }) => {
      state.allergies = allergies
    },
    setAllergyMeals: (state, { meals }) => {
      state.allergyMeals = meals
    }
  },
  actions: {
    getAllergy: async ({commit}, {id}) => {
      commit('setLoading', { value: true })
      const response = await axios.get(`/api/allergies/${id}`)         
      const data = await response.data   
      const allergy = data

      commit('setAllergy', { allergy })

      commit('setLoading', { value: false })
    },
    getAllergies: async ({commit}) => {
      commit('setLoading', { value: true })
      const response = await axios.get('/api/allergies')
      const data = await response.data
      const allergies = data.data

      commit('setAllergies', { allergies })

      commit('setLoading', { value: false })
    },
    getAllergyMeals: async ({commit}, {id}) => {
      commit('setLoading', { value: true })
      const response = await axios.get(`/api/allergies/${id}/meals`)
      const data = await response.data
      const meals = data.data

      commit('setAllergyMeals', { meals })

      commit('setLoading', { value: false })
    }
  }
}