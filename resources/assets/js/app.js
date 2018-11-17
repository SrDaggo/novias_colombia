import Vue from 'vue';
import VueAwesomeSwiper from 'vue-awesome-swiper'

// require styles
import 'swiper/dist/css/swiper.css'

Vue.use(VueAwesomeSwiper, /* { default global options } */)

const app = new Vue({
    el: '#app',
    data: {
      menu: false,
      slide: {
        loop: true,
        autoplay: {
          delay: 4500,
          disableOnInteraction: true
        },
      },
      slide2: {
        spaceBetween: 15,
        loop: true,
        slidesPerView: 4,
        autoplay: {
          delay: 3500,
          disableOnInteraction: true
        },
        breakpoints: {
          640: {
            slidesPerView: 2,
            spaceBetween: 20
          },
          320: {
            slidesPerView: 1,
            spaceBetween: 10
          }
        }
      }
    }
});
