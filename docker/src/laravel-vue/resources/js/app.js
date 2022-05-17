require('./bootstrap');
import { createApp } from "vue";
import Sample from "./components/Sample.vue";

import store from './store/index'

createApp(Sample).use(store).mount("#Sample");