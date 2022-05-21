require('./bootstrap');
import BootstrapVue from "bootstrap-vue"　
import 'bootstrap/dist/css/bootstrap.css'　
import 'bootstrap-vue/dist/bootstrap-vue.css'　

import { createApp } from "vue";
import {store} from './store/index'

import Sample from "./components/Sample.vue";
import Menubar from "./components/Menubar.vue";
import NextPage from "./components/NextPage.vue";
import VideoTable from "./components/VideoTable.vue";

app = createApp({
    components: {
        'menubar': Menubar,
        'video-table': VideoTable,
        'next-page': NextPage,
        'sample': Sample
    }
})

// app.component('menubar-component', Menubar)
//     .component('video-table-component', VideoTable)
//     .component('next-page-component', NextPage)

app.use(BootstrapVue).mount("#app")

// createApp(Menubar).mount("menubar");
// createApp(NextPage).mount("next-page-button");
// createApp(VideoTable).mount("video-table");
