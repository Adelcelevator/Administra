require('./bootstrap');

window.Vue = require('vue');

Vue.component('inicio', require('./components/Inicio.vue').default);
Vue.component('venta', require('./components/Venta.vue').default);
Vue.component('compra', require('./components/Compra.vue').default);

const app = new Vue({
    el: '#app',
    data: {
        menu: 0
    }
});