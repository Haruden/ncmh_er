<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Attendant extends MY_Controller {

	// protected $middleware = ['permission'];

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
	public function __construct() {
        parent::__construct();
    }

	public function index()
	{
		// redirect('attendant/queue');

		$this->set_view('patient/queue');
		$this->title = "Admission";
		$this->page_active = "Admission";
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
		$this->custom_javascript = [
			'records/admission.js'
		];
		
        $data['title'] = $this->title;

		$this->build_content($data);
        $this->render_page();
	}

	public function queue()
	{
		$data['title'] = "Nursing Attendant's Queue";
		$data['role'] = $this->session->userdata('role');

        $this->load->view('templates/header', $data);
        $this->load->view('templates/queue');
	}

	private function view_patient($page)
	{
		$this->load->view('patient/header');
        $this->load->view('patient/'.$page);
        $this->load->view('patient/footer');
	}

	public function pat_details()
	{

		$this->js_plugins = [
            'daterangepicker/daterangepicker.js',
            'select2/js/select2.full.min.js',
            'bs-stepper/js/bs-stepper.min.js',
            'inputmask/jquery.inputmask.min.js',
            'bootstrap-slider/bootstrap-slider.min.js',
			'sweetalert2/sweetalert2.min.js',
        ];

        $this->css_plugins = [
            'bs-stepper/css/bs-stepper.min.css',
            'daterangepicker/daterangepicker.css',
            'select2/css/select2.min.css',
            'select2-bootstrap4-theme/select2-bootstrap4.min.css',
            'bootstrap-slider/css/bootstrap-slider.min.css',
			'sweetalert2/sweetalert2.min.css',
        ];
		$data['js_plugins'] = $this->js_plugins == [] ? null :  $this->js_plugins;
		$data['css_plugins'] = $this->css_plugins == [] ? null :  $this->css_plugins;
		$data['patient_suffixes'] = config_item('patient_suffixes');
        $data['relationships'] = config_item('relationships');
        $data['type_of_payments'] = config_item('type_of_payments');
        $data['genders'] = config_item('genders');
        $data['civil_statuses'] = config_item('civil_statuses');
        $data['nationalities'] = config_item('nationalities');
        $data['consult_types'] = config_item('consult_types');
        $data['degrees'] = config_item('degrees');

        $data['title'] = "Patient Details";
        $data['role'] = $this->session->userdata('role');
        
        $this->load->view('templates/header', $data);
        $this->view_patient('details');
	}

}
