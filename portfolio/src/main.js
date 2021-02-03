import Vue from 'vue'
import App from './App.vue'
import router from './router'

/* Font Awesome */
import {library} from '@fortawesome/fontawesome-svg-core'
//import {fas} from '@fortawesome/free-solid-svg-icons'
//import {far} from '@fortawesome/free-regular-svg-icons'
import {faHtml5, faCss3Alt, faJsSquare, faPhp, faJava, faVuejs} from '@fortawesome/free-brands-svg-icons'
import {FontAwesomeIcon} from '@fortawesome/vue-fontawesome'

library.add(faHtml5, faCss3Alt, faJsSquare, faPhp, faJava, faVuejs)

Vue.component('font-awesome-icon', FontAwesomeIcon)

Vue.config.productionTip = false

new Vue({
  router,
  render: h => h(App)
}).$mount('#app')
