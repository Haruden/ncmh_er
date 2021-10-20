<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends MY_Middleware
{
     /*
    |--------------------------------------------------------------------------
    | Core Controller
    |--------------------------------------------------------------------------
    |
    | 
    | 
    |
    */

    PUBLIC $guard = null; 


    PROTECTED $template = 'main';
    PRIVATE $view = false;
    PROTECTED $component = false;


    PUBLIC $title = null;
    PUBLIC $javascript_plugins = array();
    PUBLIC $css_plugins = array();
    PUBLIC $custom_javascript = array();
    PUBLIC $custom_css = array();
    PUBLIC $javascript_vars = array();
    

    PUBLIC $sidebar_collapse = false;
    PUBLIC $page_active = false;



    PRIVATE $except_uri = [
        'login',
        'auth/login',
        'auth/logout',
    ];

    public function __construct() {
        parent::__construct(); 

        // if (!$this->is_logged_in() && !in_array(uri_string(), $this->except_uri)) {
        //     redirect('login');
        // }

        //SOME MODIFICATION HERE but not for now

        $this->_run_middlewares();
    }

    public function render_page() {
        // $this->load->helper("template");

        $page['custom_javascript'] = $this->custom_javascript;
        $page['javascript_vars'] = $this->javascript_vars;
        $page['custom_css'] = $this->custom_css;
        $page['javascript_plugins'] = $this->javascript_plugins;
        $page['css_plugins'] = $this->css_plugins;
        $page['content'] = $this->content;
        $page['title'] = $this->title;
        $page['sidebar_collapse'] = $this->sidebar_collapse;

        if ($this->component) {
            $page['sidebar'] = $this->config->item('menus');
            $page['component'] = $this->load->view('templates/sidebar', $page, true);
        }

        $this->load->view('templates/'.$this->template, $page);
    }

    public function build_content($page_content = '', $sub_view = '') {
        if ($sub_view != '') {
            $this->set_view($sub_view);
        }

        $this->content = $this->load->view($this->view, $page_content, true);
    }

    public function set_view($view) {
        $this->view = $view;
    }

    protected function is_logged_in() {
        if(isset($this->session)){
            return $this->session->has_userdata('logged_in');
        } else {
            return false;
        }
        // return $this->session->has_userdata('logged_in');
    }
    
}
