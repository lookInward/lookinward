import Vue from 'vue'
// import ElementUI from 'element-ui'
// import 'element-ui/lib/theme-chalk/index.css'
import App from './app.vue'

// Vue.use(ElementUI)

const AppComponent = new Vue({
  el: '#app-header',
  render: c => c(App),
})

Vue.use({
  AppComponent,
})