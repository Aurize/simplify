
/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap-bulma');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the body of the page. From here, you may begin adding components to
 * the application, or feel free to tweak this setup for your needs.
 */


Vue.component('example', require('./components/Example.vue'));
Vue.component('search', require('./components/Search.vue'));
Vue.component('offer-vertical', require('./components/OfferVertical.vue'));
Vue.component('promoted-offers', require('./components/PromotedOffers.vue'));
Vue.component('nav-default', require('./components/NavDefault.vue'));
Vue.component('offers', require('./components/Offers.vue'));
Vue.component('offer-horizontal', require('./components/OfferHorizontal.vue'));
Vue.component('pagination', require('./components/Pagination.vue'));

const app = new Vue({
    el: '#app'
});
