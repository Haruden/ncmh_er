<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

if(! function_exists('createAvatar')) {

    /**
     * Generates temporary name image
     *
     * @param $name -> name of the user
     * @param $type -> type of the user
     * @return string
     */
    function createAvatar($name, $type = null){
        $color = substr(md5(rand()), 0, 6);
        $name_slice = explode(' ',$name);
        $name_slice = array_filter($name_slice);
        $initials = '';
        $initials .= (isset($name_slice[0][0]))?strtoupper($name_slice[0][0]):'';
        $initials .= (isset($name_slice[count($name_slice)-1][0]))?strtoupper($name_slice[count($name_slice)-1][0]):'';
    
        switch ($type) {
            case 'primary-information-picture':
                return '<div class="primary-information-picture shadow text-white" style="background-color: #'.$color.'">'.$initials.'</div>';
            default:
                break;
        }
    
        return '<div class="profile-picture text-white" style="background-color: #'.$color.'">'.$initials.'</div>';
    }
}
