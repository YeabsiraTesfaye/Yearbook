/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue').default;

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('add-excel', require('./components/AddMember.vue').default);
Vue.component('add-post', require('./components/AddPost.vue').default);
Vue.component('edit-album', require('./components/EditAlbum.vue').default);
Vue.component('edit-panel', require('./components/EditPanel.vue').default);
Vue.component('yearbook-switch', require('./components/YearbookSwitch.vue').default);
Vue.component('approve-decline', require('./components/ApproveDecline.vue').default);
Vue.component('show-post', require('./components/ShowPost.vue').default);
Vue.component('custom-template', require('./components/CustomTemplate.vue').default);
Vue.component('show-members', require('./components/ShowMembers.vue').default);
Vue.component('printable-page', require('./components/PrintablePage.vue').default);
Vue.component('edit-yearbook', require('./components/EditYearbook.vue').default);
Vue.component('search', require('./components/Search.vue').default);
Vue.component('yearbook-progress', require('./components/Progress.vue').default);
Vue.component('add-group-photos', require('./components/AddGroupPhotos.vue').default);
Vue.component('add-photos', require('./components/AddPhotos.vue').default);
Vue.component('show-cover-images', require('./components/ShowCoverImages.vue').default);
Vue.component('approve-cover-images', require('./components/ApproveCoverImages.vue').default);
Vue.component('yearbook', require('./components/Yearbook.vue').default);
Vue.component('gallary', require('./components/Gallary.vue').default);
Vue.component('view-photos', require('./components/ViewPhotos.vue').default);
Vue.component('yearbook-album', require('./components/ShowYearbookAlbum.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
