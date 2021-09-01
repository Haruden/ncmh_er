<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function is_active($link) {
    if(uri_string() == $link){
        return 'active bg-gradient-primary shadow';
    }
}

function _readable_name($firstname, $lastname) {
    $name = ucwords(strtolower($firstname.' '.$lastname)) ?? 'Unknown';
    return $name;
}

function auth($option = null) {
    $ci =& get_instance();
    $user = $ci->session->userdata('user'); // get the session
    $role = $user['roles']['as'] ?? 'Unknown';

    switch ($option) {
        case 'fullname':
            return _readable_name($user['first_name'],$user['last_name']);
        case 'firstname':
            return $user['first_name'] ?? 'Unknown';
        case 'lastname':
            return $user['last_name'] ?? 'Unknown';
        case 'role':
            return $role == 'admin' ? 'Records' : $role;
        default:
            return 'Unknown';
    }
}

function sidebar($sidebar, $parent = null) {
    $ci =& get_instance();
    $user_data = $ci->session->userdata('user'); // check the session
    $role_name = $user_data['roles']['as'];
    if (empty($sidebar)) return; // return if nothing to process

    $html = '';

    foreach($sidebar[$role_name]['sidebar'] as $menu) {
        // refactor to switch or function 
        $html .= '<li class="nav-item">';
        if ($menu['type'] == 'link') {
            $html .= '<a href="'.site_url($menu['route']).'" class="nav-link mb-1 '. is_active($menu['route']).'">';
            $html .= '<i class="nav-icon '. $menu['icon'] .'"></i>';
            $html .= '<p>'.$menu['name'].'</p>';
            $html .= '</a>';
        } else {
            $html .= $menu['content'];
        }
        $html .= '</li>';
    }


    return $html;
}