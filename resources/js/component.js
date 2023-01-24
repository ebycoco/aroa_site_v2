import Vue from 'vue'
window.Vue = require('vue');

Vue.component('role', require('./components/role.vue').default);
Vue.component('user', require('./components/user.vue').default);
Vue.component('loading', require('./components/loading.vue').default);
Vue.component('cle', require('./components/langue/cle.vue').default);
Vue.component('francaisanglais', require('./components/langue/francaisAnglais.vue').default);
Vue.component('viewrole', require('./components/viewRole.vue').default);
Vue.component('viewpermissions', require('./components/viewPermissions.vue').default);