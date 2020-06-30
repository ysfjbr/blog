require('./bootstrap');
window.Vue = require('vue');
Vue.config.devtools = true;

Vue.component('cpost', require('./components/cpost.vue').default);
Vue.component('cprofile', require('./components/cprofile.vue').default);
Vue.component('cfooter', require('./components/cfooter.vue').default);
Vue.component('ccontact', require('./components/ccontact.vue').default);

Vue.component('drg', require('./components/cdrag.vue').default);
 
const app = new Vue({
    el: '#app'
});
