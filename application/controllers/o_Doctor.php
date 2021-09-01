<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Doctor extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->library('session');
    }

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
	public function index()
	{
		$data['title'] = "Doctor's Queue";
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

	public function er_notes()
	{
		$data['title'] = "ER Notes";
		$data['role'] = $this->session->userdata('role');

        $this->load->view('templates/header', $data);
        $this->view_patient('er_notes');
	}

	public function plan()
	{
		$data['title'] = "Plan";
		$data['role'] = $this->session->userdata('role');

        $this->load->view('templates/header', $data);
        $this->view_patient('plan');
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

	public function vitals()
	{
		$data['title'] = "Vital Signs";
		$data['role'] = $this->session->userdata('role');

        $this->load->view('templates/header', $data);
        $this->view_patient('vitals');
	}

	public function pat_id_marks()
	{
		$data['title'] = "Patient ID Marks";
		$data['role'] = $this->session->userdata('role');

        $this->load->view('templates/header', $data);
        $this->view_patient('id_marks');
	}

	public function nurse_notes()
	{
		$data['title'] = "Nurse's Notes";
		$data['role'] = $this->session->userdata('role');

        $this->load->view('templates/header', $data);
        $this->view_patient('nurse_notes');
	}

}
