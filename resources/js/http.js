import axios from 'axios'

const HTTP = axios.create({
    baseURL: 'http://comments.os/api/'
})

export {HTTP}