import './bootstrap';

import {createApp} from 'vue/dist/vue.esm-bundler'
import Review from './components/Reviews/Review.vue'
import axios from 'axios'
import VueAxios from 'vue-axios'

import fslightbox from 'fslightbox'

import { register } from 'swiper/element/bundle';
register();

const review_app = createApp({
    components:{
        Review,
    },
})

review_app.use(VueAxios, axios)
review_app.mount("#review_app")
