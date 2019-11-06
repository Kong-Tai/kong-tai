/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

// require('./bootstrap');
// require('./main');

window.Vue = require('vue');
$(document).ready(function () {
    if (window.location.pathname === '/blog') {
        $('.point-portfolio').click(function () {
            window.location = '/#portfolio'
        })
        $('.point-gallery').click(function () {
            window.location = '/#gallery'
        })
    }

})
// home
Vue.component('view-home', require('./components/home/HomeComponent.vue').default);
Vue.component('home-portfolio', require('./components/home/PortfolioComponent.vue').default);
Vue.component('home-counter', require('./components/home/CounterComponent.vue').default);
Vue.component('home-gallery', require('./components/home/GalleryComponent.vue').default);

// portfolio
Vue.component('view-portfolio', require('./components/portfolio/PortfolioComponent.vue').default);

// blog
Vue.component('view-blog', require('./components/blog/BlogComponent.vue').default);


const app = new Vue({
    el: '#app'
});
