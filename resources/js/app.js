import './bootstrap';


import CitySelectModal from "./components/CitySelectModal.vue"
import ModalWindow from "./components/ModalWindow.vue"
import SidePanel from "./components/SidePanel.vue"
import {createApp} from 'vue/dist/vue.esm-bundler'
import Review from './components/Reviews/Review.vue'
import Quiz from './components/Quiz/Quiz.vue'
import ToggleWrapper from './components/ToggleWrapper.vue'
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

if (document.getElementById('toggle_app')) {
    const toggle_app = createApp({
        components:{
            ToggleWrapper,
        },
        setup() {}
    })

    toggle_app.use(VueAxios, axios)
    toggle_app.directive('mask', VMaskDirective)
    toggle_app.mount("#toggle_app");
}


document.addEventListener('DOMContentLoaded', function() {
        const backToTopBtn = document.getElementById('backToTop');

        // Показываем/скрываем кнопку при прокрутке
        window.addEventListener('scroll', function() {
            if (window.scrollY > 100) {
                backToTopBtn.style.display = 'block';
            } else {
                backToTopBtn.style.display = 'none';
            }
        });

        // Прокрутка вверх при клике
        backToTopBtn.addEventListener('click', function() {
            // Если браузер поддерживает smooth-прокрутку через CSS
            if ('scrollBehavior' in document.documentElement.style) {
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            } else {
                // Фоллбек для старых браузеров
                const scrollStep = -window.scrollY / 15;
                const scrollInterval = setInterval(function() {
                    if (window.scrollY !== 0) {
                        window.scrollBy(0, scrollStep);
                    } else {
                        clearInterval(scrollInterval);
                    }
                }, 15);
            }
        });
    });
