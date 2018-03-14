import Vue from 'vue/dist/vue.js'
import VueResource from 'vue-resource'
import TcCreatevolunteer from './components/volunteer/createvolunteer.vue'
import TcCreatecamper from './components/camper/createcamper.vue'

Vue.use(VueResource)

new Vue({
    el: '.main_container',
    
    data:{
    },
    
    components: {
        TcCreatevolunteer,
        TcCreatecamper
    }
});