<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Details extends MY_Controller
{

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
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->set_view('attendant/details');
		$this->title = "Patient Sociodemog";
		$this->page_active = "Patient Sociodemog";
		$this->component = true; //temporary because no sidebar func yet
		$this->sidebar_collapse = false;

		$this->javascript_plugins = [
			'moment/moment.min.js',
			'daterangepicker/daterangepicker.js',
			'select2/js/select2.full.min.js',
			'bs-stepper/js/bs-stepper.min.js',
			'inputmask/jquery.inputmask.min.js',
			'bootstrap-slider/bootstrap-slider.min.js',
			'sweetalert2/sweetalert2.min.js',
		];

		$this->custom_javascript = [
			'attendant/details.js'
		];

		$this->css_plugins = [
			'bs-stepper/css/bs-stepper.min.css',
			'daterangepicker/daterangepicker.css',
			'select2/css/select2.min.css',
			'select2-bootstrap4-theme/select2-bootstrap4.min.css',
			'bootstrap-slider/css/bootstrap-slider.min.css',
			'sweetalert2/sweetalert2.min.css',
		];

		$data['patient_suffixes'] = config_item('patient_suffixes');
		$data['relationships'] = config_item('relationships');
		$data['type_of_payments'] = config_item('type_of_payments');
		$data['genders'] = config_item('genders');
		$data['civil_statuses'] = config_item('civil_statuses');
		$data['nationalities'] = config_item('nationalities');
		$data['consult_types'] = config_item('consult_types');
		$data['degrees'] = config_item('degrees');
		$data['title'] = $this->title;

		$this->build_content($data);
		$this->render_page();

		// $this->set_view('attendant/details');
		// $this->title = "Patient Sociodemog";
		// $this->page_active = "Patient Sociodemog";
		// $this->component = true; //temporary becuase no sidebar func yet
		// $this->sidebar_collapse = false;
		// $this->javascript = ['attendant/details.js'];
		// $this->javascript_plugins = [
		// 	'moment/moment.min.js',
		//     'select2/js/select2.full.min.js',
		//     'bs-stepper/js/bs-stepper.min.js',
		//     'inputmask/jquery.inputmask.min.js',
		//     'bootstrap-slider/bootstrap-slider.min.js',
		// 	'sweetalert2/sweetalert2.min.js',            
		// 	'tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js',
		// ];
		// $this->css_plugins = [
		//     'bs-stepper/css/bs-stepper.min.css',
		//     'select2/css/select2.min.css',
		//     'select2-bootstrap4-theme/select2-bootstrap4.min.css',
		//     'bootstrap-slider/css/bootstrap-slider.min.css',
		// 	'sweetalert2/sweetalert2.min.css',
		// 	'tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css',
		// ];


		// $data['title'] = $this->title;
		// $data['patient_suffixes'] = config_item('patient_suffixes');
		// $data['relationships'] = config_item('relationships');
		// $data['type_of_payments'] = config_item('type_of_payments');
		// $data['genders'] = config_item('genders');
		// $data['civil_statuses'] = config_item('civil_statuses');
		// $data['nationalities'] = config_item('nationalities');
		// $data['consult_types'] = config_item('consult_types');
		// $data['degrees'] = config_item('degrees');

		// $this->build_content($data);
		// $this->render_page();

	}

	public function save()
	{
		$response = [
            'redirect' => 'queue'
        ];

		$success_msg = 'Successfully saved patient records!';
		$this->session->set_flashdata('flash_message', ['type' => 'success', 'message' => $success_msg]);

		$this->output->set_header("Pragma: no-cache");
		$this->output->set_header("Cache-Control: no-store, no-cache");
		$this->output->set_status_header(201);
		$this->output->set_output(json_encode($response));
	}
}
