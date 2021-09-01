<?php 

function dd($value, $autodump = false)
{
    if ($autodump || (empty($value) && $value !== 0 && $value !== "0") || $value === true) {
        var_dump($value); 
    } else {
        echo '<pre>';
        print_r($value); 
        echo '</pre>';
    }
    
    die();
}

// convert timestamp to match the sql server datetime timestamp
function toTimestamp($milliseconds = null, $reset = false)
{
    if (!$milliseconds) {
        $milliseconds = round(microtime(true) * 1000);
    }
    
    $seconds = $milliseconds / 1000;
    $remainder = round($seconds - ($seconds >> 0), 3) * 1000;
    
    return ($reset) ? date('Y-m-d 00:00:00.000') : date('Y-m-d H:i:s.', $seconds).$remainder;
}

/**
 * @function ncmh_validate_date
 * - Validates if a given date value is the required format
 *
 * @params {String} $date data value
 * @returns {Boolean} validated - if date format value is equals the accepted format
 */
function ncmh_validate_date($date)
{
    $format = 'd/m/Y';
    $d = DateTime::createFromFormat($format, $date);
    return $d && $d->format($format) === $date;
}

/**
 * @function format_date
 * - Formats a date
 *
 * @params {String} $date - data value
 * @params {String} $date_format - format of the date value passed
 * @params {String} $format - desired date format to be returned
 * @returns {String} formatted date
 */
function format_date($date, $date_format = 'Y-m-d H:i:s.000', $format = 'd/m/Y')
{
    if (empty($date)) {
        return '';
    }

    $d = DateTime::createFromFormat($date_format, $date);
    return $d->format($format);
}

/**
 * @function calculate_complete_age
 * - Calculates complete age based from passed date
 *
 * @params {String} $date from data
 * @returns {Object} age [years,months,days,hours]
 */
function calculate_complete_age($date)
{
    if (!isset($date) || empty($date)) {
        return [];
    }

    $from_date = new DateTime($date);
    $from_date->setTime(0, 0);
    $today = new Datetime(date(''));
    $diff = $today->diff($from_date);

    $age = [
        'years' => $diff->y,
        'months' => $diff->m,
        'days' => $diff->d,
        'hours' => $diff->h
    ];

    return $age;
}

/**
 * @function get_home_url
 * - Get default home url based on the session id
 *
 * @returns {String} relative home url path 
 */
function get_home_url() {
    $ci =& get_instance();
    $role = $ci->session->userdata('user')['roles'];

    return $role['home_url'];
}

/**
 * $params {STRING || null} 
 *  - set if you want to check if the current access role
 * @returns {Boolean} || {String} 
 */
function get_account_access($role = null) {
    $ci =& get_instance();
    $roles = $ci->session->userdata('user')['roles'];
    
    if ($role === null) {
        return $roles['as'];
    }

    return $roles['as'] == $role;
}

/** 
 * check if the array is a multi-dimentional array
 */
function is_multi($a) {
    foreach ($a as $v) {
        if (is_array($v)) return true;
    }
    return false;
}

/**
 * @function show_unauthorized
 * - Shows an unauthorized error message
 */
function show_unauthorized() {
    show_error('You are not allowed to perform this operation!', 403, 'Unauthorized');
}

/**
 * @function get_date_now
 * - Gets current date and time
 *
 * @params {String} $format - date format to use
 * @returns {String} date now
 */
function get_date_now($format = 'Y-m-d H:i:s.000') {
    return date($format);
}

/**
 * @function redirect_with_error
 * - Flashes an error message and redirects to a given url
 *
 * @params {String} $error_msg - error message to show
 * @params {String} $redirect_url - redirect url
 * @params {Object} $_this - $this context from controller
 * @returns {function call} redirection
 */
function redirect_with_error($error_msg = 'Something went wrong.', $redirect_url = '/', $_this = null) {
    if (gettype($_this) !== 'object') {
        return '';
    }

    $_this->session->set_flashdata('flash_message', [ 'type'=>'error', 'message'=>$error_msg ]);
    return redirect($redirect_url);
}

/**
 * @function get_name_value
 * - Get name value from an array
 *
 * @params {Array} $array - array with [val,name] keys
 * @params {String} $value - redirect url
 * @returns {String} value name found in array
 */
function get_name_value($array = [], $value = '') {
    $cols = array_column($array, 'val');
    $index = array_search($value, $cols);

    if (empty($index) && $index !== 0) {
        return $value;
    }

    return $array[$index]['name'] ?? $value;
}

/**
 * @function get_config_values
 * - Get configuration value
 *
 * @params {Array} $array - array with [val,name] keys
 * @params {String} $value - search value name
 * @returns {Array} config found in array
 */
function get_config_values($array = [], $value = '') {
    $cols = array_column($array, 'val');
    $index = array_search($value, $cols);

    if (empty($index) && $index !== 0) {
        return $value;
    }

    return $array[$index] ?? $value;
}

/**
 * Format an interval to show all existing components.
 * If the interval doesn't have a time component (years, months, etc)
 * That component won't be displayed.
 *
 * @param DateInterval $interval The interval
 *
 * @return string Formatted interval string.
 */
function format_interval(DateInterval $interval) {
    $result = "";
    if ($interval->y) { $result .= $interval->format("%y years "); }
    if ($interval->m) { $result .= $interval->format("%m months "); }
    if ($interval->d) { $result .= $interval->format("%d days "); }
    // if ($interval->h) { $result .= $interval->format("%h hours "); }
    // if ($interval->i) { $result .= $interval->format("%i minutes "); }
    // if ($interval->s) { $result .= $interval->format("%s seconds "); }

    return $result;
}

/**
 * get options from ncmh_config
 * supports multidimentional lists of key => name pair 
 */
function config_option($key, $options = null) {
    $ci =& get_instance();
    $ci->load->model('config_model');
    $options = $ci->config_model->item($key, $options);

    $key_pairs = [];

    $i = 0;
    foreach($options as $key => $option) {
        $key_pairs[$i]['val'] = $key;
        $key_pairs[$i]['name'] = $option;
        $i++;
    }

    return $key_pairs;
}

/**
 * @function get_month_name
 * Get name of month
 *
 * @params {Number} month number
 * @returns {String} month name
 */
function get_month_name($month_number) {
    if (gettype($month_number) !== 'integer') return $month_number;
    if ($month_number > 12) return '';
    return DateTime::createFromFormat('!m', $month_number)->format('F');
}
