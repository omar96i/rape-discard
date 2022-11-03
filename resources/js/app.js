import './bootstrap';

import {createApp} from 'vue/dist/vue.esm-bundler'

import IndexHome from './components/App.vue'
import IndexLogin from './components/login/App.vue'

import VueSweetalert2 from 'vue-sweetalert2';
import 'sweetalert2/dist/sweetalert2.min.css';


const app = createApp({
    components: {
        'login-index': IndexLogin,
        'index-home': IndexHome,
    },
},);
app.use(VueSweetalert2);
app.mount('#app')
