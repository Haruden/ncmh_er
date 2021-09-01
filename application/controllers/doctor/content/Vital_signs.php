<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Vital_signs extends MY_Controller
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
        $this->set_view('patient/vital_signs');
        $this->title = "Vital Signs";
        $this->page_active = "Vital Signs";
        $this->component = true;
        $this->sidebar_collapse = true;
        $this->css_plugins = [
            'tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css',
            'datatables-bs4/css/dataTables.bootstrap4.min.css',
            'datatables-responsive/css/responsive.bootstrap4.min.css',
            'datatables-buttons/css/buttons.bootstrap4.min.css'
        ];
        $this->javascript_plugins = [
            'moment/moment.min.js',
            'tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js',
            'datatables/jquery.dataTables.min.js',
            'datatables-bs4/js/dataTables.bootstrap4.min.js',
            'datatables-responsive/js/dataTables.responsive.min.js',
            'datatables-responsive/js/responsive.bootstrap4.min.js',
        ];

        $data['title'] = 'Vital Signs';

        $this->build_content($data);
        $this->render_page();
    }
}
