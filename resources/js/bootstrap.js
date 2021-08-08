window._ = require('lodash');

try {
    window.Popper = require('popper.js').default;
    window.$ = window.jQuery = require('jquery');

    require('bootstrap');
} catch (e) {}

window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
window.axios.defaults.headers.common['X-CSRF-TOKEN'] = window.Laravel.csrfToken;
window.axios.defaults.headers.post['Content-Type'] = 'application/x-www-form-urlencoded';
window.axios.defaults.baseURL = 'https://edenallergies.herokuapp.com'

window.axios.interceptors.request.use(
    (config) => {
        NProgress.start()
        
        let token = localStorage.getItem('authToken')

        if (token) {
            config.headers['Authorization'] = `Bearer ${token}`
        }

        return config
    },
    (error) => {
        return Promise.reject(error)
    }
)
  
window.axios.interceptors.response.use(response => {
NProgress.done()
return response
})