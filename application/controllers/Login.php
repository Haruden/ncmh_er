<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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
		if(isset($_POST['username'])){
			if($_POST['username'] == "attendant"){
				$this->session->set_userdata('role', 'attendant');
				redirect('/Attendant');
			} else if($_POST['username'] == "nurse"){
				$this->session->set_userdata('role', 'nurse');
				redirect('/Nurse/');

			} else if($_POST['username'] == "doctor"){
				$this->session->set_userdata('role', 'doctor');
				redirect('/Doctor');
			}
		}

		$data['title'] = "Login";
		$this->load->view('templates/header', $data);
		$this->load->view('login');
	}
}
