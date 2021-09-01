<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

if(! function_exists('view')) {

    /**
     * load the view
     *
     * @param $view -> path of the template view
     * @param $data -> data of the current view
     * @return string
    */
    function view($view, $data = array()) {
        $ci =& get_instance();
        return $ci->load->view($view, $data, true);
    }
}