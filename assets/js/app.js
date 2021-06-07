/**
 * Main APP file
 *
 * Brings together all the front-end bindings and utilities.
 * Requires jQuery and Lodash to be loaded on the page.
 */

 if (typeof $ === 'undefined') {
     console.error('jQuery library missing.');
 }

 if (typeof _ === 'undefined') {
     console.error('Lodash library missing.');
 }

 var APP = APP || {};
