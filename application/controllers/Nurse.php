<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nurse extends CI_Controller {

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
        $this->load->library('session');
    }

	public function index()
	{
		$data['title'] = "Nurse's Queue";
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

	public function save()
	{
		echo 'dsadads';
	}
}
