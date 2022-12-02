import './bootstrap';

import {createApp} from 'vue/dist/vue.esm-bundler'

// components
import IndexHome from './components/App.vue'
import IndexLogin from './components/login/App.vue'
import IndexOfertasTuristicas from './components/ofertasTuristicas/Index.vue'
import IndexMap from './components/map/Index.vue'
import IndexAbastecimiento from './components/abastecimientos/Index.vue'

import $ from 'jquery';
window.$ = $;
// libreries
import VueSweetalert2 from 'vue-sweetalert2'
import 'sweetalert2/dist/sweetalert2.min.css'
import Vue3EasyDataTable from 'vue3-easy-data-table'
import 'vue3-easy-data-table/dist/style.css'


const app = createApp({
    components: {
        'login-index': IndexLogin,
        'index-home': IndexHome,
        'index-ofertas-turisticas': IndexOfertasTuristicas,
        'index-map' : IndexMap,
        'index-abastecimiento' : IndexAbastecimiento,
    },
},);
app.component('EasyDataTable', Vue3EasyDataTable)
app.use(VueSweetalert2)
app.mount('#app')
