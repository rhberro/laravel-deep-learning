window.jQuery = require('jquery')

/**
 * We'll load Turbolinks which makes navigating your web application faster.
 * Turbolinks automatically fetches the page, swaps in its <body>, and merges
 * its <head>, all without incurring the cost of a full page load.
 */
// window.Turbolinks = require('turbolinks');
// Turbolinks.start();

/**
 * We need to load the library which will take care of all of the
 * application charts.
 */
window.chart = require('chart.js');

/**
 * We also need to load the library which will take care of all of the
 * application tooltips.
 */
window.tippy = require('tippy.js');

/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

// import Echo from 'laravel-echo'

// window.Pusher = require('pusher-js');

// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: process.env.MIX_PUSHER_APP_KEY,
//     cluster: process.env.MIX_PUSHER_APP_CLUSTER,
//     encrypted: true
// });
