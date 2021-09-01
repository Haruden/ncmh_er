/**
* APP - Storage
* - Generic service for local storage management
*/
var APP = APP || {};

(function () {
    APP.Storage = {
        /**
         * @function APP.Storage.get
         * - Gets an item saved in local storage
         *
         */
        get: function (key) {
            if (!key) {
                return '';
            }

            var itemStr = localStorage.getItem(key)
            // if the item doesn't exist, return null
            if (!itemStr) {
                return '';
            }

            try {
                var item = JSON.parse(itemStr);
                // compare the expiry time of the item with the current time
                if (item.expiry && moment() > moment(item.expiry)) {
                    // If the item is expired, delete the item from storage
                    // and return null
                    localStorage.removeItem(key);
                    return '';
                }

                return item.value;
            } catch(err) {
                return itemStr;
            }

            return itemStr;
        },

        /**
         * @function APP.Storage.set
         * - Saves an item in local storage
         *
         */
        set: function (key, value, ttl) {
            if (!key) {
                return;
            }

            // `item` is an object which contains the original value
            // as well as the time when it's supposed to expire
            var item = { value: value };

            if (ttl) {
                item.expiry = moment().add('minutes', ttl);
            }

            localStorage.setItem(key, JSON.stringify(item))
        }
    };
})();
