<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class PermissionMiddleware {
    protected $controller;
    protected $ci;

    protected $has_access = false;
    public $access_code = array();
    
    public function __construct($controller, $ci)
    {
        $this->controller = $controller;
        $this->ci = $ci;
    }
    
    public function run(){
        // My custom validation -> if the current user trying to access other pages it will redirect to his/her page again.
        if(!$this->controller->guard()) return;
            
        $role = $this->ci->session->userdata('user')['roles'];
      
        if(!in_array($role['as'], $this->controller->guard(),true))   {
            redirect($role['home_url']);
        }

        // outsourcing validation
        $user_data = $this->ci->session->userdata('user');

        $access_code = $this->controller->access_code;  
        
        if (!$access_code) {
            $this->unauthorized();
        }

        $permissions = $user_data['permissions'];
        
        $i = 0;
        while ($i < count($access_code)) {
            if (isset($permissions[$access_code[$i]])) {
                $this->has_access = true;
                break;
            }
            $i++;
        }

        // if does not have access 
        // throw error
        $this->unauthorized();
    }
    
    
    protected function unauthorized() {
        if (!$this->has_access) {
            show_error('You are not allowed to perform this operation', 403);
        }
    }
}