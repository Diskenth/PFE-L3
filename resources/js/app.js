

require('./bootstrap');

window.Vue = require('vue');

import VueChatScroll from 'vue-chat-scroll'
Vue.use(VueChatScroll);



Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('chat', require('./components/ChatComponent.vue').default);

const app = new Vue({
    el: '#app',
});

