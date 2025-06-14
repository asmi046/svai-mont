import './bootstrap';


import CitySelectModal from "./components/CitySelectModal.vue"
import ModalWindow from "./components/ModalWindow.vue"
import SidePanel from "./components/SidePanel.vue"
import {createApp} from 'vue/dist/vue.esm-bundler'
import Review from './components/Reviews/Review.vue'
import Quiz from './components/Quiz/Quiz.vue'
import axios from 'axios'
import VueAxios from 'vue-axios'
import { VMaskDirective } from 'v-slim-mask'

import fslightbox from 'fslightbox'
import SideMenu from './menues.js';

let side_menue = new SideMenu('#main_side_menue', '.show_menue_button')

import { register } from 'swiper/element/bundle';
register();

const review_app = createApp({
    components:{
        Review,
    },
})

review_app.use(VueAxios, axios)
review_app.mount("#review_app")


const modal_app = createApp({
    components:{
        ModalWindow,
        SidePanel,
        CitySelectModal
    },
    setup() {}
})


modal_app.use(VueAxios, axios)
modal_app.directive('mask', VMaskDirective)
modal_app.mount("#modal_app");


if (document.getElementById('quiz_app')) {
    const quiz_app = createApp({
        components:{
            Quiz,
        },
        setup() {}
    })

    quiz_app.use(VueAxios, axios)
    quiz_app.directive('mask', VMaskDirective)
    quiz_app.mount("#quiz_app");
}
