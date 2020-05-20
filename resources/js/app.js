require('./bootstrap');

window.Vue = require('vue');
import Artikel from './components/Artikel.vue';
Vue.component('artikel',Artikel);
import Articles from './components/Articles.vue';
Vue.component('articles',Articles);
import Form_rehabilitasi from './components/Form_rehabilitasi.vue';
Vue.component('form_rehabilitasi',Form_rehabilitasi);
import Navbar from './components/Navbar.vue';
Vue.component('navbar',Navbar);

const app = new Vue({
    el:'#app'
});
