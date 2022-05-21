
import Vue from 'vue'
import { createStore } from "vuex";
import nextPage from './nextPage'

export default new createStore({
    modules: {
        nextPage
    }
})