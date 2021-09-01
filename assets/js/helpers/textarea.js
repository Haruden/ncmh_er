$.fn.extend({
    autoHeight: function() {
        function _autoHeight(element) {
            return $(element)
                .css({ 'height': 'auto', 'overflow-y': 'hidden' })
                .height(element.scrollHeight);
        }

        return this.each(function() {
            _autoHeight(this).on('input', function() {
                _autoHeight(this);
            });
        });
    }
});

// by default grow the textarea
$(document).ready(function() { // adding this ready to use
    $('textarea').autoHeight();
});

/**
 * Apply autogrow in all ajax request textarea
 */
$(document).ajaxComplete(function() {
    $('textarea').autoHeight();
});