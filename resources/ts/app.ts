import {Vue} from 'vue-property-decorator'
import Gallery from "../../vendor/horizontech/mediagallery/resources/ts/app"
import Test from "./components/Test.vue"
/**
 * Intelizes Media GalleryPlugin
 */
Vue.use(Gallery)

/**
 * Your Components Go Here
 */
Vue.component("test-component",Test)

new Vue({
    el: "#wrapper"
})


