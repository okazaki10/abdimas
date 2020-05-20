require('./bootstrap');

window.Vue = require('vue');
import Artikel from './components/Artikel.vue';
Vue.component('artikel',Artikel);
import Articles from './components/Articles.vue';
Vue.component('articles',Articles);
import Form_rehabilitasi from './components/Form_rehabilitasi.vue';
Vue.component('form_rehabilitasi',Form_rehabilitasi);
<<<<<<< HEAD
<<<<<<< HEAD
import Navbar from './components/Navbar.vue';
Vue.component('navbar',Navbar);
=======
=======
>>>>>>> parent of 4e6cb82... navbar

>>>>>>> parent of 4e6cb82... navbar
const app = new Vue({
    el:'#app'
});
