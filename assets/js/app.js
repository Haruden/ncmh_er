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

document.addEventListener('DOMContentLoaded', function() {
    $('a[data-toggle="tab"]').on('shown.bs.tab', function(e) {
        localStorage.setItem('current_tab_active', $(e.target).attr('href') + '-tab');
    });

    var current_tab = localStorage.getItem('current_tab_active');

    if (current_tab) {
        $('.tab-pane').find('show').removeClass('show active');
        $(current_tab).tab('show');
    }

    // remember always the data-toggle is equal to "tab" not pill
    console.log('%cNational Center for Mental Health', 'color: green; font-size: 40px');
});