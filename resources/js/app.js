/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
import Echo from 'laravel-echo';
window.Vue = require('vue');

const files = require.context('./', true, /\.vue$/i)
files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: 'a264a77b93d54687dd4a',
//     cluster: 'eu',
//     forceTLS: true
// });
//
// window.Echo.channel('dashboard').listen('GoogleAnalyticsFetched', (e) => {
//     console.log(e);
// });

const app = new Vue({
    el: '#dashboard',
    created() {
        // let config = {
        //     broadcaster: 'pusher',
        //     key: process.env.MIX_PUSHER_APP_KEY,
        //     wsHost: window.location.hostname,
        //     wsPath: window.dashboard.clientConnectionPath,
        //     wsPort: window.dashboard.wsPort,
        //     disableStats: true,
        //     cluster: process.env.MIX_PUSHER_APP_CLUSTER,
        // };
        //
        // if (window.dashboard.environment === 'local') {
        //     config.wsPort = 6001;
        // }
        //
        // this.echo = new Echo(config);
    },
});
