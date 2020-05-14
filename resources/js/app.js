require('./bootstrap');

window.Vue = require('vue');
import Artikel from './components/Artikel.vue';
Vue.component('artikel',Artikel);

const app = new Vue({
    el:'#app'
});
