import './bootstrap';

import {createApp} from 'vue'

import App from './components/App.vue'

const app = createApp(App)
app.component('index-app', App)
app.mount("#app")
