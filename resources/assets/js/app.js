
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example', require('./components/Example.vue'));
const appSearch = Vue.component('search', require('./components/Search.vue'));

const app = new Vue({
    el: '#app',

    data: {
    	keyword: '',
    	url: '/user/search',
    	users: Array
    },

    mounted() {
    	this.getUser(this.url);
    },

    methods: {

    	getUser(url) {
    		axios.get(url).then(response => {
    			this.users = response.data;
    		}).catch(error => {
    			console.log(Object.assign({}, error));
    		})
    	},

    	searchUser(keyword) {
    		this.keyword = keyword;

    		const url = `${this.url}?keyword=${this.keyword}`;

    		axios.get(url).then(response => {
    			this.users = response.data;
    		}).catch(error => {
    			console.log(Object.assign({}, error));
    		})
    	}
    }
});