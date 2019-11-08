import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex)

export const store = new Vuex.Store({

    state: {

        user: []

    },
    mutations: {
        
        SET_USER: (state, data) => {
            state.user = data
        }
    },

    actions: {

        REGISTER: (NULL, payload) => {
            
            return new Promise((resolve, reject) => {
                axios.post(api.register, payload)
                .then(response => {
                    console.log(response.data)
                    resolve(true)
                })
                .catch(error => {
                    console.log(error.response)
                    reject(error)
                })
            })
        },

        LOGIN: (NULL, payload) => {

            const data = {
                client_id: 2,
                client_secret: 'i8izH8ZfzDAu2rZ5Pj2raMYOlX85Mxjjt6z4DMZG',
                grant_type: 'password',
                username: payload.email,
                password: payload.password
            }

            return new Promise((resolve, reject) => {
                axios.post(api.login, data)
                    .then(({data}) => {
                        localStorage.setItem('token', data.access_token)
                        resolve(true)
                    })
                    .catch(error => {
                        reject(error.response)
                    })
            })
        },

        GET_USER: ({commit}) => {

            const header = {
                'Accept': 'application/json',
                'Authorization': 'Bearer ' + localStorage.getItem('token')
            }

            return new Promise((resolve, reject) => {
                axios.get(api.getUser, {headers: header})
                    .then(({data}) => {
                        commit('SET_USER', data)
                        resolve(true)
                    })
                    .catch(error => {
                        reject(error.response)
                    })
            })
        }

    }

})  