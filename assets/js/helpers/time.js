 /**
 * @function getCurrentDateAndTime
 * - initialize Get current date and time
 * 
 */
function getCurrentDateAndTime() {
    var date = moment($.now()).format('LL • LTS');
    $('.userDateAndTime').text(`${date}`);
}

$(document).ready(function () {
    setInterval(getCurrentDateAndTime, 1000);
});

//to avoid late render,, its sucks hahaha
document.addEventListener('DOMContentLoaded', getCurrentDateAndTime);