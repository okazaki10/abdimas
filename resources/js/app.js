require('./bootstrap');

window.Vue = require('vue');
import Artikel from './components/Artikel.vue';
Vue.component('artikel',Artikel);
import Articles from './components/Articles.vue';
Vue.component('articles',Articles);
import Form_rehabilitasi from './components/Form_rehabilitasi.vue';
Vue.component('form_rehabilitasi',Form_rehabilitasi);
import Form_list from './components/Form_rehabilitasi.vue';
Vue.component('form_list',Form_list);
import Navbar from './components/Navbar.vue';
Vue.component('navbar',Navbar);
import Pasien from './components/Pasien.vue';
Vue.component('pasien',Pasien);
const app = new Vue({
    el:'#app'
});
