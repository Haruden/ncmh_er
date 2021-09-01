<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Queue extends MY_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->session->unset_userdata('plan_gen_order');
        $this->session->unset_userdata('plan_med_order');

        $this->set_view('patient/queue');
        $this->title = "ER Queue";
        $this->page_active = "ER Queue";
        $this->component = true; //temporary becuase no sidebar func yet
        $this->sidebar_collapse = false;

        $this->css_plugins = [
            'datatables-bs4/css/dataTables.bootstrap4.min.css',
            'datatables-responsive/css/responsive.bootstrap4.min.css',
            'datatables-buttons/css/buttons.bootstrap4.min.css'
        ];
        $this->javascript_plugins = [
            'moment/moment.min.js',
            'datatables/jquery.dataTables.min.js',
            'datatables-bs4/js/dataTables.bootstrap4.min.js',
            'datatables-responsive/js/dataTables.responsive.min.js',
            'datatables-responsive/js/responsive.bootstrap4.min.js',
            'datatables-buttons/js/dataTables.buttons.min.js',
            'datatables-buttons/js/buttons.bootstrap4.min.js',
            'datatables-buttons/js/buttons.html5.min.js',
            'datatables-buttons/js/buttons.print.min.js',
            'datatables-buttons/js/buttons.colVis.min.js'
        ];

        $data['title'] = $this->title;

        $this->build_content($data);
        $this->render_page();
    }
}
