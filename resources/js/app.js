require('./bootstrap');
import Vue from 'vue'
window.Vue = require('vue');
window.Fire = new Vue();
import $ from "jquery";
import moment from 'moment';

import Autocomplete from '@trevoreyre/autocomplete-vue';
import '@trevoreyre/autocomplete-vue/dist/style.css';

import select2 from 'admin-lte/plugins/select2/js/select2.full';
import select2css from 'admin-lte/plugins/select2/css/select2.css';

import { BootstrapVue, IconsPlugin } from 'bootstrap-vue'

import Swal from 'sweetalert2'


Vue.filter('date', function(created){
  return moment(created, "YYYYMMDD").fromNow();
  // moment(created).format('MMMM Do YYYY, h:mm:ss a');
  // moment("20120620", "YYYYMMDD").fromNow();
});



Vue.config.productionTip = false;




// Make BootstrapVue available throughout your project
Vue.use(BootstrapVue)
// Optionally install the BootstrapVue icon components plugin
Vue.use(IconsPlugin)



window.swal = Swal;

const Toast = Swal.mixin({
  toast: true,
  position: 'top-end',
  showConfirmButton: false,
  timer: 3000,
  timerProgressBar: true,
  didOpen: (toast) => {
    toast.addEventListener('mouseenter', Swal.stopTimer)
    toast.addEventListener('mouseleave', Swal.resumeTimer)
  }
})

window.toast = Toast;
// CommonJS
// const Swal = require('sweetalert2')
import {
  Button,
  HasError,
  AlertError,
  AlertErrors,
  AlertSuccess
} from 'vform/src/components/bootstrap5'

import { Form } from 'vform';
window.Form = Form;
// 'vform/src/components/bootstrap4'
// 'vform/src/components/tailwind'
// Vue.component(Button.name, Button)
Vue.component(HasError.name, HasError);
Vue.component(AlertError.name, AlertError);
// Vue.component(AlertErrors.name, AlertErrors);
// Vue.component(AlertSuccess.name, AlertSuccess);
import Toaster from 'vue-toast-dialog'
Vue.use(Toaster,
  {
    title: 'Tips',
    okText: 'Sure',
    cancelText: 'Cancel',
    double: false,
    baseColor: '#d5a478'
  })
import VueToastr from "vue-toastr";
// use plugin
Vue.use(VueToastr, {
  defaultTimeout: 3000,
  defaultPosition: "toast-top-right",
  defaultProgressBar: false,
  defaultProgressBarValue: 0,
});


import DataTable from 'laravel-vue-datatable';
Vue.use(DataTable);

Vue.use(Autocomplete)

require('./component.js');

const app = new Vue({
  el: '#app'
})