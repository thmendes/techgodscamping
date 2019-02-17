import Vue from 'vue/dist/vue.js'
import VueResource from 'vue-resource'
import TcCreatevolunteer from './components/volunteer/createvolunteer.vue'
import TcSearchvolunteer from './components/volunteer/search.vue'
import TcCreatecamper from './components/camper/createcamper.vue'
import TcManagecamping from "./components/camping/manage.vue"
import TcAssociate from "./components/team/associate.vue"
import TcPerson from "./components/person/person.vue"



Vue.use(VueResource)

new Vue({
  el: ".main_container",

  data: {},

  components: {
    TcCreatevolunteer,
    TcCreatecamper,
    TcSearchvolunteer,
    TcManagecamping,
    TcAssociate,
    TcPerson
  }
});
